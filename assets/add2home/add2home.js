var addToHome=function(e){function t(){if(H){var t,n=Date.now();if(e.addToHomeConfig)for(t in e.addToHomeConfig)S[t]=e.addToHomeConfig[t];S.autostart||(S.hookOnLoad=!1),c=/ipad/gi.test(w.platform),p=e.devicePixelRatio&&e.devicePixelRatio>1,m=w.appVersion.match(/Safari/gi),g=w.standalone,f=w.appVersion.match(/OS (\d+_\d+)/i),f=f[1]?+f[1].replace("_","."):0,x=+e.localStorage.getItem("addToHome"),b=e.sessionStorage.getItem("addToHomeSession"),h=S.returningVisitor?x&&x+24192e5>n:!0,x||(x=n),u=h&&n>=x,S.hookOnLoad?e.addEventListener("load",o,!1):!S.hookOnLoad&&S.autostart&&o()}}function o(){if(e.removeEventListener("load",o,!1),h?S.expire&&u&&e.localStorage.setItem("addToHome",Date.now()+6e4*S.expire):e.localStorage.setItem("addToHome",Date.now()),v||m&&u&&!b&&!g&&h){var t,a,i,r,l=S.touchIcon?document.querySelectorAll("head link[rel=apple-touch-icon],head link[rel=apple-touch-icon-precomposed]"):[],d="",y=w.platform.split(" ")[0],T=w.language.replace("-","_");if(k=document.createElement("div"),k.id="addToHomeScreen",k.style.cssText+="left:-9999px;-webkit-transition-property:-webkit-transform,opacity;-webkit-transition-duration:0;-webkit-transform:translate3d(0,0,0);position:"+(5>f?"absolute":"fixed"),S.message in j&&(T=S.message,S.message=""),""===S.message&&(S.message=T in j?j[T]:j.en_us),l.length){for(i=0,r=l.length;r>i;i++)if(t=l[i].getAttribute("sizes")){if(p&&"114x114"==t){d=l[i].href;break}}else d=l[i].href;d='<span style="background-image:url('+d+')" class="addToHomeTouchIcon"></span>'}k.className=(c?"addToHomeIpad":"addToHomeIphone")+(d?" addToHomeWide":""),k.innerHTML=d+S.message.replace("%device",y).replace("%icon",f>=4.2?'<span class="addToHomeShare"></span>':'<span class="addToHomePlus">+</span>')+(S.arrow?'<span class="addToHomeArrow"></span>':"")+'<span class="addToHomeClose">×</span>',document.body.appendChild(k),a=k.querySelector(".addToHomeClose"),a&&a.addEventListener("click",s,!1),setTimeout(n,S.startDelay)}}function n(){var t,o=625;if(c)switch(5>f&&(I=e.scrollY,_=e.scrollX,o=208),k.style.top=I+S.bottomOffset+"px",k.style.left=_+o-Math.round(k.offsetWidth/2)+"px",S.animationIn){case"drop":t="0.6s",k.style.webkitTransform="translate3d(0,"+-(e.scrollY+S.bottomOffset+k.offsetHeight)+"px,0)";break;case"bubble":t="0.6s",k.style.opacity="0",k.style.webkitTransform="translate3d(0,"+(I+50)+"px,0)";break;default:t="1s",k.style.opacity="0"}else switch(I=e.innerHeight+e.scrollY,5>f?(_=Math.round((e.innerWidth-k.offsetWidth)/2)+e.scrollX,k.style.left=_+"px",k.style.top=I-k.offsetHeight-S.bottomOffset+"px"):(k.style.left="50%",k.style.marginLeft=-Math.round(k.offsetWidth/2)+"px",k.style.bottom=S.bottomOffset+"px"),S.animationIn){case"drop":t="1s",k.style.webkitTransform="translate3d(0,"+-(I+S.bottomOffset)+"px,0)";break;case"bubble":t="0.6s",k.style.webkitTransform="translate3d(0,"+(k.offsetHeight+S.bottomOffset+50)+"px,0)";break;default:t="1s",k.style.opacity="0"}k.offsetHeight,k.style.webkitTransitionDuration=t,k.style.opacity="1",k.style.webkitTransform="translate3d(0,0,0)",k.addEventListener("webkitTransitionEnd",r,!1),T=setTimeout(i,S.lifespan)}function a(e){H&&!k&&(v=e,o())}function i(){clearInterval(y),clearTimeout(T),T=null;var t=0,o=0,n="1",a="0",s=k.querySelector(".addToHomeClose");switch(s&&s.removeEventListener("click",i,!1),5>f&&(t=c?e.scrollY-I:e.scrollY+e.innerHeight-I,o=c?e.scrollX-_:e.scrollX+Math.round((e.innerWidth-k.offsetWidth)/2)-_),k.style.webkitTransitionProperty="-webkit-transform,opacity",S.animationOut){case"drop":c?(a="0.4s",n="0",t+=50):(a="0.6s",t=t+k.offsetHeight+S.bottomOffset+50);break;case"bubble":c?(a="0.8s",t=t-k.offsetHeight-S.bottomOffset-50):(a="0.4s",n="0",t-=50);break;default:a="0.8s",n="0"}k.addEventListener("webkitTransitionEnd",r,!1),k.style.opacity=n,k.style.webkitTransitionDuration=a,k.style.webkitTransform="translate3d("+o+"px,"+t+"px,0)"}function s(){e.sessionStorage.setItem("addToHomeSession","1"),b=!0,i()}function r(){return k.removeEventListener("webkitTransitionEnd",r,!1),k.style.webkitTransitionProperty="-webkit-transform",k.style.webkitTransitionDuration="0.2s",T?void(5>f&&T&&(y=setInterval(l,S.iterations))):(k.parentNode.removeChild(k),void(k=null))}function l(){var t=new WebKitCSSMatrix(e.getComputedStyle(k,null).webkitTransform),o=c?e.scrollY-I:e.scrollY+e.innerHeight-I,n=c?e.scrollX-_:e.scrollX+Math.round((e.innerWidth-k.offsetWidth)/2)-_;(o!=t.m42||n!=t.m41)&&(k.style.webkitTransform="translate3d("+n+"px,"+o+"px,0)")}function d(){e.localStorage.removeItem("addToHome"),e.sessionStorage.removeItem("addToHomeSession")}var c,p,m,g,f,u,b,h,k,v,y,T,w=e.navigator,H="platform"in w&&/iphone|ipod|ipad/gi.test(w.platform),_=0,I=0,x=0,S={autostart:!0,returningVisitor:!1,animationIn:"drop",animationOut:"fade",startDelay:2e3,lifespan:15e3,bottomOffset:14,expire:0,message:"",touchIcon:!1,arrow:!0,hookOnLoad:!0,iterations:100},j={ca_es:"Per instal·lar aquesta aplicació al vostre %device premeu %icon i llavors <strong>Afegir a pantalla d'inici</strong>.",cs_cz:"Pro instalaci aplikace na Váš %device, stiskněte %icon a v nabídce <strong>Přidat na plochu</strong>.",da_dk:"Tilføj denne side til din %device: tryk på %icon og derefter <strong>Føj til hjemmeskærm</strong>.",de_de:"Installieren Sie diese App auf Ihrem %device: %icon antippen und dann <strong>Zum Home-Bildschirm</strong>.",el_gr:"Εγκαταστήσετε αυτήν την Εφαρμογή στήν συσκευή σας %device: %icon μετά πατάτε <strong>Προσθήκη σε Αφετηρία</strong>.",en_us:"Install this web app on your %device: tap %icon and then <strong>Add to Home Screen</strong>.",es_es:"Para instalar esta app en su %device, pulse %icon y seleccione <strong>Añadir a pantalla de inicio</strong>.",fi_fi:"Asenna tämä web-sovellus laitteeseesi %device: paina %icon ja sen jälkeen valitse <strong>Lisää Koti-valikkoon</strong>.",fr_fr:"Ajoutez cette application sur votre %device en cliquant sur %icon, puis <strong>Ajouter à l'écran d'accueil</strong>.",he_il:'<span dir="rtl">התקן אפליקציה זו על ה-%device שלך: הקש %icon ואז <strong>הוסף למסך הבית</strong>.</span>',hu_hu:"Telepítse ezt a web-alkalmazást az Ön %device-jára: nyomjon a %icon-ra majd a <strong>Főképernyőhöz adás</strong> gombra.",it_it:"Installa questa applicazione sul tuo %device: premi su %icon e poi <strong>Aggiungi a Home</strong>.",ja_jp:"このウェブアプリをあなたの%deviceにインストールするには%iconをタップして<strong>ホーム画面に追加</strong>を選んでください。",ko_kr:'%device에 웹앱을 설치하려면 %icon을 터치 후 "홈화면에 추가"를 선택하세요',nb_no:"Installer denne appen på din %device: trykk på %icon og deretter <strong>Legg til på Hjem-skjerm</strong>",nl_nl:"Installeer deze webapp op uw %device: tik %icon en dan <strong>Zet in beginscherm</strong>.",pl_pl:"Aby zainstalować tę aplikacje na %device: naciśnij %icon a następnie <strong>Dodaj jako ikonę</strong>.",pt_br:"Instale este web app em seu %device: aperte %icon e selecione <strong>Adicionar à Tela Inicio</strong>.",pt_pt:"Para instalar esta aplicação no seu %device, prima o %icon e depois o <strong>Adicionar ao ecrã principal</strong>.",ru_ru:"Установите это веб-приложение на ваш %device: нажмите %icon, затем <strong>Добавить в «Домой»</strong>.",sv_se:"Lägg till denna webbapplikation på din %device: tryck på %icon och därefter <strong>Lägg till på hemskärmen</strong>.",th_th:"ติดตั้งเว็บแอพฯ นี้บน %device ของคุณ: แตะ %icon และ <strong>เพิ่มที่หน้าจอโฮม</strong>",tr_tr:"%device için bu uygulamayı kurduktan sonra %icon simgesine dokunarak <strong>Ana Ekrana Ekle</strong>yin.",zh_cn:"您可以将此应用程式安装到您的 %device 上。请按 %icon 然后点选<strong>添加至主屏幕</strong>。",zh_tw:"您可以將此應用程式安裝到您的 %device 上。請按 %icon 然後點選<strong>加入主畫面螢幕</strong>。"};return t(),{show:a,close:i,reset:d}}(this);