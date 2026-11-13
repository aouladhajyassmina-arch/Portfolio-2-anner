const $=s=>document.querySelector(s),CF=window.CFG,IV=CF.interval;
const S={f:localStorage.getItem("u")==="F",auto:true,day:0,idx:0,data:null,pop:[],place:null,prev:null};

/* ---------- Libellés & groupes ---------- */
const WMO={0:"Ciel dégagé",1:"Plutôt dégagé",2:"Partiellement nuageux",3:"Couvert",45:"Brouillard",48:"Brouillard givrant",51:"Bruine légère",53:"Bruine",55:"Bruine dense",61:"Pluie faible",63:"Pluie",65:"Pluie forte",71:"Neige faible",73:"Neige",75:"Forte neige",80:"Averses",81:"Averses",82:"Averses violentes",95:"Orage",96:"Orage et grêle",99:"Orage et grêle"};
const lab=c=>WMO[c]||WMO[Object.keys(WMO).map(Number).filter(k=>k<=c).pop()];
const grp=c=>c>=95?"storm":(c>=71&&c<=77)||c==85||c==86?"snow":c>=51?"rain":c==45||c==48?"fog":c==3?"cloud":c>0?"part":"clear";

/* ---------- Icônes SVG ---------- */
const cloud=(x,y,s,f)=>`<g transform="translate(${x} ${y}) scale(${s})" fill="${f}"><circle cx="22" cy="34" r="12"/><circle cx="37" cy="25" r="16"/><circle cx="52" cy="34" r="11"/><rect x="20" y="32" width="34" height="13" rx="6.5"/></g>`;
const sun=(x,y,r)=>`<circle cx="${x}" cy="${y}" r="${r}" fill="url(#gS)"/>`;
const moon=(x,y,r)=>`<circle cx="${x}" cy="${y}" r="${r}" fill="url(#gM)"/><circle cx="${x-r*.3}" cy="${y-r*.2}" r="${r*.2}" fill="#b9c3e6"/><circle cx="${x+r*.35}" cy="${y+r*.3}" r="${r*.14}" fill="#b9c3e6"/>`;
function ic(c,day,s=48){const g=grp(c);let b="";
  if(g==="clear")b=day?sun(35,32,17):moon(35,32,16);
  else if(g==="part")b=(day?sun(26,24,13):moon(26,24,12))+cloud(8,10,.95,"url(#gC)");
  else if(g==="fog")b=cloud(8,4,.95,"url(#gC)")+`<path d="M12 52h46M18 58h34" stroke="#e3eaf2" stroke-width="3" stroke-linecap="round"/>`;
  else{b=cloud(6,2,1,g==="cloud"?"url(#gC)":"url(#gD)");
    const xs=[22,35,48];
    if(g==="rain")b+=xs.map(x=>`<path d="M${x} 48l-3 9" stroke="#7cc4ff" stroke-width="3" stroke-linecap="round"/>`).join("");
    if(g==="snow")b+=xs.map(x=>`<circle cx="${x}" cy="54" r="2.6" fill="#fff"/>`).join("");
    if(g==="storm")b+=`<path d="M39 42l-9 11h6l-3 10 11-13h-6z" fill="#ffd34d"/>`}
  return `<svg viewBox="0 0 70 64" width="${s}" height="${s*.91}" aria-hidden="true">${b}</svg>`}

/* ---------- Couleurs du ciel selon l'heure locale de la ville ---------- */
const hx=h=>[1,3,5].map(i=>parseInt(h.slice(i,i+2),16));
const mix=(a,b,t)=>{const A=hx(a),B=hx(b);return"#"+A.map((v,i)=>Math.round(v+(B[i]-v)*t).toString(16).padStart(2,"0")).join("")};
const PAL={n:["#050a1f","#1b2257"],a:["#4a4e9c","#ffb27a"],d:["#1f78d6","#8fd6ff"],s:["#3a2f7a","#ff7a50"]};
const TINT={part:["#8d9bab",.15],cloud:["#7b8794",.45],rain:["#2f3a4a",.6],storm:["#1b2030",.72],snow:["#b9c6d4",.4],fog:["#9aa5b1",.5]};
function skyAt(t,sr,ss){const K=[[-1,"n"],[sr-80,"n"],[sr-15,"a"],[sr+75,"d"],[ss-80,"d"],[ss-5,"s"],[ss+60,"n"],[1441,"n"]];
  for(let i=1;i<K.length;i++)if(t<=K[i][0]){const[a,pa]=K[i-1],[b,pb]=K[i],f=Math.min(1,Math.max(0,(t-a)/(b-a||1)));return[0,1].map(j=>mix(PAL[pa][j],PAL[pb][j],f))}
  return PAL.n}
const mn=s=>{const x=s.slice(11,16).split(":");return x[0]*60+ +x[1]};
function sky(){const d=S.data;if(!d)return;const c=d.current,n=new Date(Date.now()+d.utc_offset_seconds*1000);
  const t=n.getUTCHours()*60+n.getUTCMinutes()+n.getUTCSeconds()/60,sr=mn(d.daily.sunrise[0]),ss=mn(d.daily.sunset[0]),g=grp(c.weather_code),day=t>sr&&t<ss;
  let[a,b]=skyAt(t,sr,ss);const w=TINT[g];if(w){a=mix(a,w[0],w[1]);b=mix(b,w[0],w[1]*.8)}
  const el=$("#sky");el.style.setProperty("--s1",a);el.style.setProperty("--s2",b);
  const p=day?(t-sr)/(ss-sr):(t>ss?t-ss:t+1440-ss)/(1440-ss+sr),o=$("#orb");
  o.className="orb "+(day?"sun":"moon");o.style.left=8+84*p+"%";o.style.top=30-22*Math.sin(p*Math.PI)+"vh";
  o.style.opacity=["rain","storm","fog"].includes(g)?.15:g==="cloud"?.45:1;
  el.style.setProperty("--co",{clear:.12,part:.55,cloud:.9,fog:.8,rain:.95,storm:1,snow:.85}[g]);
  el.style.setProperty("--clc",["rain","storm"].includes(g)?"#28324a":day?"#fff":"#5a6496");
  return{g,day,t,sr,ss}}

/* ---------- Effets : pluie, neige, étoiles, éclairs ---------- */
const cv=$("#fx"),ctx=cv.getContext("2d");let parts=[],raf,lt;
const rs=()=>{cv.width=innerWidth;cv.height=innerHeight};addEventListener("resize",rs);rs();
function fx(g,day){cancelAnimationFrame(raf);clearInterval(lt);ctx.clearRect(0,0,cv.width,cv.height);
  const m=["rain","storm"].includes(g)?"rain":g==="snow"?"snow":!day&&["clear","part","cloud"].includes(g)?"star":"";
  if(g==="storm")lt=setInterval(()=>{if(Math.random()<.6){const f=$("#fl");f.classList.remove("on");void f.offsetWidth;f.classList.add("on")}},4000);
  if(!m||matchMedia("(prefers-reduced-motion:reduce)").matches)return;
  parts=Array.from({length:m==="rain"?150:m==="snow"?90:90},()=>({x:Math.random()*cv.width,y:Math.random()*cv.height*(m==="star"?.7:1),s:Math.random()*.8+.4,r:Math.random()*1.5+.6}));
  (function loop(){ctx.clearRect(0,0,cv.width,cv.height);ctx.fillStyle=ctx.strokeStyle="rgba(255,255,255,.6)";
    parts.forEach(p=>{
      if(m==="rain"){ctx.beginPath();ctx.moveTo(p.x,p.y);ctx.lineTo(p.x-2,p.y+15*p.s);ctx.stroke();p.y+=16*p.s;p.x-=2}
      else if(m==="snow"){ctx.beginPath();ctx.arc(p.x,p.y,p.r*1.6,0,7);ctx.fill();p.y+=p.s;p.x+=Math.sin(p.y/30)*.6}
      else{ctx.globalAlpha=.3+.7*Math.abs(Math.sin(Date.now()/900+p.x));ctx.beginPath();ctx.arc(p.x,p.y,p.r*.8,0,7);ctx.fill();ctx.globalAlpha=1}
      if(p.y>cv.height){p.y=-10;p.x=Math.random()*cv.width}if(p.x<0)p.x=cv.width});
    raf=requestAnimationFrame(loop)})()}

/* ---------- Helpers ---------- */
const T=c=>Math.round(S.f?c*1.8+32:c),W=k=>S.f?Math.round(k/1.609)+" mph":Math.round(k)+" km/h";
const hh=s=>s.slice(11,16),dirs=["N","NE","E","SE","S","SO","O","NO"];
const jour=(s,i)=>i?new Date(s+"T12:00").toLocaleDateString("fr-FR",{weekday:"short"}).replace(".",""):"Auj.";
/* PHP si disponible (cache + validation), sinon appel direct à Open-Meteo (index.html ouvert sans serveur) */
async function api(q){
  try{const r=await fetch("api.php?"+q);if(!r.ok||!(r.headers.get("content-type")||"").includes("json"))throw 0;return await r.json()}
  catch(e){return direct(new URLSearchParams(q))}}
async function direct(p){const a=p.get("a");let u;
  if(a==="forecast")u=`https://api.open-meteo.com/v1/forecast?latitude=${+p.get("lat")}&longitude=${+p.get("lon")}&current=temperature_2m,apparent_temperature,relative_humidity_2m,is_day,weather_code,wind_speed_10m,wind_direction_10m,pressure_msl&hourly=temperature_2m&daily=weather_code,temperature_2m_max,temperature_2m_min,sunrise,sunset,uv_index_max,precipitation_probability_max&timezone=auto&forecast_days=7`;
  else if(a==="cities")u=`https://api.open-meteo.com/v1/forecast?latitude=${CF.cities.map(c=>c.lat)}&longitude=${CF.cities.map(c=>c.lon)}&current=temperature_2m,weather_code,is_day&timezone=auto`;
  else u=`https://geocoding-api.open-meteo.com/v1/search?count=5&language=fr&name=${encodeURIComponent(p.get("q")||"")}`;
  const r=await fetch(u);if(!r.ok)throw 0;return r.json()}
function cnt(to){const e=$("#tp").firstChild,f=S.prev??to,t0=performance.now();S.prev=to;
  (function s(n){const p=Math.min(1,(n-t0)/900);e.nodeValue=Math.round(f+(to-f)*(1-Math.pow(1-p,3)));if(p<1)requestAnimationFrame(s)})(t0)}

/* ---------- Rendu ---------- */
function render(){const d=S.data,c=d.current,k=sky(),dl=k.ss-k.sr,D=d.daily;
  const up=`<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.6" stroke-linecap="round"><path d="M3 19h18M7 19a5 5 0 0 1 10 0M12 5v5M9.5 7.5L12 5l2.5 2.5"/></svg>`,dn=`<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.6" stroke-linecap="round"><path d="M3 19h18M7 19a5 5 0 0 1 10 0M12 10V5M9.5 7.5L12 10l2.5-2.5"/></svg>`;
  fx(k.g,k.day);
  document.title=`${T(c.temperature_2m)}° ${S.place.name} — Ciel`;
  $("#main").innerHTML=`<section class="stage">
  <div class="intro"><h1>Découvrez le ciel<br>autour de vous</h1><p class="lead">Prévisions précises, ciel en direct et villes du monde, réunis au même endroit.</p>
    <section class="g"><h2>Température sur 24 h</h2><div id="ch"></div></section><div id="pop"></div></div>
  <aside class="widget">
    <div class="top"><div class="ico">${ic(c.weather_code,c.is_day,104)}</div><div><p class="when" id="clock"></p><p class="ttl">${lab(c.weather_code)} <b id="tp">${T(c.temperature_2m)}<small>°${S.f?"F":"C"}</small></b></p><p class="where">${S.place.name}</p></div></div>
    <div class="sunp">${up}<span>${hh(D.sunrise[0])}</span><i class="dash"></i><span class="dur">${dl/60|0} h ${String(dl%60).padStart(2,"0")} m</span><i class="dash"></i><span>${hh(D.sunset[0])}</span>${dn}</div>
    <div class="rain">${ic(63,1,30)}<span>Pluie : <b>${D.precipitation_probability_max[0]}%</b></span></div>
    <div class="row2"><span>Humidité : <b>${c.relative_humidity_2m}%</b></span><span>Vent : <b>${W(c.wind_speed_10m)}</b></span></div>
    <div class="days" id="days">${D.time.map((t,i)=>`<button class="dy${i===S.day?" on":""}" data-i="${i}"><b>${jour(t,i)}</b>${ic(D.weather_code[i],1,34)}<span>${T(D.temperature_2m_max[i])}°</span><small>${T(D.temperature_2m_min[i])}°</small></button>`).join("")}</div>
    <p class="more">Ressenti ${T(c.apparent_temperature)}° · UV ${Math.round(D.uv_index_max[0])} · ${Math.round(c.pressure_msl)} hPa · Vent ${dirs[Math.round(c.wind_direction_10m/45)%8]}</p>
  </aside></section>`;
  chart();cnt(T(c.temperature_2m));popR();tick();
  $("#days").onclick=e=>{const b=e.target.closest(".dy");if(!b)return;S.day=+b.dataset.i;document.querySelectorAll(".dy").forEach(x=>x.classList.toggle("on",x===b));chart()}}

function chart(){const d=S.data,i0=S.day*24,v=d.hourly.temperature_2m.slice(i0,i0+24).map(x=>S.f?x*1.8+32:x),W=700,H=210,px=24,lo=Math.min(...v),hi=Math.max(...v);
  const y=x=>40+(1-(x-lo)/(hi-lo||1))*110,X=i=>px+i*(W-2*px)/23;
  let p=`M${X(0)} ${y(v[0])}`;for(let i=1;i<24;i++){const m=(X(i-1)+X(i))/2;p+=`C${m} ${y(v[i-1])} ${m} ${y(v[i])} ${X(i)} ${y(v[i])}`}
  const cur=S.day===0?+d.current.time.slice(11,13):-1;
  $("#ch").innerHTML=`<svg viewBox="0 0 ${W} ${H}"><defs><linearGradient id="gA" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#ffc66b" stop-opacity=".55"/><stop offset="1" stop-color="#ffc66b" stop-opacity="0"/></linearGradient></defs>
  <path d="${p}L${X(23)} 175L${X(0)} 175Z" fill="url(#gA)" class="ar"/><path d="${p}" pathLength="1" class="ln" fill="none" stroke="#ffd98a" stroke-width="3" stroke-linecap="round"/>
  ${v.map((x,i)=>i%3?"":`<circle cx="${X(i)}" cy="${y(x)}" r="4.5" fill="#fff"/><text x="${X(i)}" y="${y(x)-12}" text-anchor="middle">${Math.round(x)}°</text><text x="${X(i)}" y="${H-12}" text-anchor="middle" class="hl">${String(i).padStart(2,"0")}h</text>`).join("")}
  ${cur>=0?`<line x1="${X(cur)}" x2="${X(cur)}" y1="${y(v[cur])}" y2="175" stroke="#fff" stroke-dasharray="3 4"/><circle cx="${X(cur)}" cy="${y(v[cur])}" r="8" fill="#ffd98a" stroke="#fff" stroke-width="3" class="pu"/>`:""}</svg>`}

function popR(){const p=$("#pop");if(!p)return;p.className="pop"+(S.auto?" run":"");p.style.setProperty("--iv",IV+"ms");
  p.innerHTML=CF.cities.map((c,i)=>{const x=S.pop[i];return`<button class="g pc${i===S.idx?" on":""}" data-i="${i}">${x?ic(x.code,x.day,40):""}<span><b>${c.n}</b><small>${x?T(x.t)+"°":"…"}</small></span><i></i></button>`}).join("");
  p.onclick=e=>{const b=e.target.closest(".pc");if(b){pick(+b.dataset.i);timer()}}}

function tick(){const el=$("#clock");if(!el||!S.data)return;const n=new Date(Date.now()+S.data.utc_offset_seconds*1000);
  el.textContent=n.toLocaleDateString("fr-FR",{timeZone:"UTC",weekday:"long"})+", "+n.toLocaleTimeString("fr-FR",{timeZone:"UTC",hour:"2-digit",minute:"2-digit"})}

/* ---------- Données & navigation ---------- */
async function show(lat,lon,name,quiet){$("#err").innerHTML="";
  try{S.data=await api(`a=forecast&lat=${lat}&lon=${lon}`);S.place={lat,lon,name};S.day=0;
    const m=$("#main");if(!quiet){m.classList.remove("swap");void m.offsetWidth;m.classList.add("swap")}render()}
  catch(e){$("#err").innerHTML=`<div class="err">Impossible de récupérer la météo. Vérifiez la connexion et que le serveur PHP est lancé.</div>`}}
function pick(i){S.idx=i;const c=CF.cities[i];show(c.lat,c.lon,`${c.n}, ${c.c}`)}
let tm;function timer(){clearInterval(tm);if(S.auto)tm=setInterval(()=>pick((S.idx+1)%CF.cities.length),IV)}
function setAuto(on){S.auto=on;$("#auto").textContent=on?"Auto ⏸":"Auto ▶";$("#auto").setAttribute("aria-pressed",on);timer();popR()}
function custom(lat,lon,name){S.idx=-1;setAuto(false);$("#sug").hidden=true;$("#q").value="";show(lat,lon,name)}

$("#auto").onclick=()=>setAuto(!S.auto);
$("#unit").onclick=()=>{S.f=!S.f;localStorage.setItem("u",S.f?"F":"C");$("#unit").textContent=S.f?"°F":"°C";S.prev=null;if(S.data)render()};
$("#unit").textContent=S.f?"°F":"°C";
$("#geo").onclick=()=>navigator.geolocation?navigator.geolocation.getCurrentPosition(p=>custom(p.coords.latitude,p.coords.longitude,"Ma position"),()=>{$("#err").innerHTML=`<div class="err">Position refusée. Autorisez l'accès ou cherchez une ville.</div>`}):0;
let st;$("#q").oninput=e=>{clearTimeout(st);const v=e.target.value.trim();if(v.length<2){$("#sug").hidden=true;return}
  st=setTimeout(async()=>{try{const r=(await api("a=search&q="+encodeURIComponent(v))).results||[];
    $("#sug").innerHTML=r.length?r.map((x,i)=>`<li><button data-i="${i}">${x.name} <small>${[x.admin1,x.country].filter(Boolean).join(", ")}</small></button></li>`).join(""):`<li><button disabled>Aucune ville trouvée</button></li>`;
    $("#sug").hidden=false;$("#sug").onclick=ev=>{const b=ev.target.closest("button[data-i]");if(b){const x=r[b.dataset.i];custom(x.latitude,x.longitude,`${x.name}, ${x.country||""}`)}}}catch(e){}},300)};
document.addEventListener("click",e=>{if(!e.target.closest(".search"))$("#sug").hidden=true});

/* ---------- Démarrage ---------- */
(async()=>{pick(0);timer();
  try{S.pop=(await api("a=cities")).map(x=>({t:x.current.temperature_2m,code:x.current.weather_code,day:x.current.is_day}));popR()}catch(e){}})();
setInterval(tick,1000);setInterval(sky,30000);
setInterval(()=>S.place&&show(S.place.lat,S.place.lon,S.place.name,true),600000);
