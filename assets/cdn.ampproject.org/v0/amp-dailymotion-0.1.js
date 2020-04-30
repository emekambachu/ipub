(self.AMP=self.AMP||[]).push({n:"amp-dailymotion",v:"1525461683159",f:(function(AMP){var h;function aa(a,b){function c(){}c.prototype=b.prototype;a.prototype=new c;a.prototype.constructor=a;for(var d in b)if(Object.defineProperties){var e=Object.getOwnPropertyDescriptor(b,d);e&&Object.defineProperty(a,d,e)}else a[d]=b[d]}function m(a,b){b=void 0===b?"":b;try{return decodeURIComponent(a)}catch(c){return b}};var ba=/(?:^[#?]?|&)([^=&]+)(?:=([^&]*))?/g;function p(a){var b=Object.create(null);if(!a)return b;for(var c;c=ba.exec(a);){var d=m(c[1],c[1]),e=c[2]?m(c[2],c[2]):"";b[d]=e}return b};var r="";var ca=Object.prototype.toString;function t(a){return"number"===typeof a&&isFinite(a)};self.log=self.log||{user:null,dev:null,userForEmbed:null};var u=self.log;function v(){if(!u.user)throw Error("failed to call initLogConstructor");return u.user}function w(){if(u.dev)return u.dev;throw Error("failed to call initLogConstructor");};function x(a){var b=Object.create(null);a&&Object.assign(b,a);return b}function y(a){return a||{}};function z(a){this.ha=a;this.w=Object.create(null)}z.prototype.get=function(a){if(this.w[a])return this.w[a].access=Date.now(),this.w[a].payload};z.prototype.put=function(a,b){var c=this;this.w[a]={payload:b,access:Date.now()};var d=Object.keys(this.w);d.length>this.ha&&(w().warn("lru-cache","Trimming template cache"),d.sort(function(a,b){return c.w[b].access-c.w[a].access}),delete this.w[d[d.length-1]])};function A(a,b){return b.length>a.length?!1:0==a.lastIndexOf(b,0)};y({c:!0,v:!0,a:!0,ad:!0});var B,C,da=["javascript:","data:","vbscript:"];function D(a,b,c){if(!b)return a;var d=a.split("#",2),e=d[0].split("?",2),f=e[0]+(e[1]?c?"?"+b+"&"+e[1]:"?"+e[1]+"&"+b:"?"+b);return f+=d[1]?"#"+d[1]:""}function ea(a){var b=[],c;for(c in a){var d=a[c];if(null!=d)if(Array.isArray(d))for(var e=0;e<d.length;e++){var f=d[e];b.push(encodeURIComponent(c)+"="+encodeURIComponent(f))}else e=d,b.push(encodeURIComponent(c)+"="+encodeURIComponent(e))}return b.join("&")}
function fa(a){if(!a)return!0;if("string"==typeof a){B||(B=self.document.createElement("a"),C=self.UrlCache||(self.UrlCache=new z(100)));var b=C.get(a);if(b)a=b;else{b=B;b.href=a;b.protocol||(b.href=b.href);var c={href:b.href,protocol:b.protocol,host:b.host,hostname:b.hostname,port:"0"==b.port?"":b.port,pathname:b.pathname,search:b.search,hash:b.hash,origin:null};"/"!==c.pathname[0]&&(c.pathname="/"+c.pathname);if("http:"==c.protocol&&80==c.port||"https:"==c.protocol&&443==c.port)c.port="",c.host=
c.hostname;c.origin=b.origin&&"null"!=b.origin?b.origin:"data:"!=c.protocol&&c.host?c.protocol+"//"+c.host:c.href;C.put(a,c);a=c}}return!da.includes(a.protocol)};function ga(a){if(a.nodeType){var b=(a.ownerDocument||a).defaultView;if(b=b!=(b.__AMP_TOP||b)&&ha(b,"action")?E(b,"action"):null)return b}return F(a,"action")}function ia(a,b){var c=G(a),d=H(c);a=d;var e=I(a),f=e["video-manager"];f||(f=e["video-manager"]={obj:null,promise:null,resolve:null,context:null,ctor:null});f.ctor||f.obj||(f.ctor=b,f.context=c,f.resolve&&E(a,"video-manager"))}function J(a,b){a=a.__AMP_TOP||a;return E(a,b)}function F(a,b){a=G(a);a=H(a);return E(a,b)}
function G(a){return a.nodeType?J((a.ownerDocument||a).defaultView,"ampdoc").getAmpDoc(a):a}function H(a){a=G(a);return a.isSingleDoc()?a.win:a}function E(a,b){ha(a,b);var c=I(a);a=c[b];a.obj||(a.obj=new a.ctor(a.context),a.ctor=null,a.context=null,a.resolve&&a.resolve(a.obj));return a.obj}function ja(a){var b=ka(a);if(b)return b;var c,d=new Promise(function(a){c=a});I(a)["video-service"]={obj:null,promise:d,resolve:c,context:null,ctor:null};return d}
function ka(a){var b=I(a)["video-service"];if(b){if(b.promise)return b.promise;E(a,"video-service");return b.promise=Promise.resolve(b.obj)}return null}function I(a){var b=a.services;b||(b=a.services={});return b}function ha(a,b){a=a.services&&a.services[b];return!(!a||!a.ctor&&!a.obj)};/*
 https://mths.be/cssescape v1.5.1 by @mathias | MIT license */
function la(a){a.parentElement&&a.parentElement.removeChild(a)}function ma(a){var b,c,d=b||function(a){return a},e=a.dataset;a={};var f=c?c:/^param(.+)/,g;for(g in e){var k=g.match(f);if(k){var l=k[1][0].toLowerCase()+k[1].substr(1);a[d(l)]=e[g]}}return a};function na(a){return a.ampExtendedElements?!!a.ampExtendedElements["amp-video-service"]:!1}function oa(a){return pa(a).then(function(a){return v().assert(a,"Service %s was requested to be provided through %s, but %s is not loaded in the current page. To fix this problem load the JavaScript file for %s in this page.","video-service","amp-video-service","amp-video-service","amp-video-service")})}
function pa(a){var b=G(a),c=ka(H(a));return c?c:Promise.resolve().then(function(){return na(b.win)?ja(H(a)):b.whenBodyAvailable().then(function(){return na(b.win)?ja(H(a)):null})})};function K(a){return J(a,"platform")}function L(a){return F(a,"viewport")};function qa(a){a:{var b;try{b=a.document.cookie}catch(k){b=""}if(a=b)for(a=a.split(";"),b=0;b<a.length;b++){var c=a[b].trim(),d=c.indexOf("="),e;if(e=-1!=d)e=c.substring(0,d).trim(),e="AMP_EXP"==m(e,void 0);if(e){a=c.substring(d+1).trim();a=m(a,a);break a}}a=null}var f=a,g=f?f.split(/\s*,\s*/g):[];a=Object.create(null);for(b=0;b<g.length;b++)0!=g[b].length&&("-"==g[b][0]?a[g[b].substr(1)]=!1:a[g[b]]=!0);return a};var M,ra="Webkit webkit Moz moz ms O o".split(" ");function N(a,b){for(var c in b){var d=a,e=b[c],f;f=d.style;var g=c;if(A(g,"--"))f=g;else{M||(M=x());var k=M[g];if(!k){k=g;if(void 0===f[g]){var l;l=g;l=l.charAt(0).toUpperCase()+l.slice(1);b:{for(var n=0;n<ra.length;n++){var q=ra[n]+l;if(void 0!==f[q]){l=q;break b}}l=""}void 0!==f[l]&&(k=l)}M[g]=k}f=k}f&&(d.style[f]=e)}};var O;function P(a,b,c){function d(a){try{return g(a)}catch(q){throw self.reportError(q),q;}}var e=void 0,f=a,g=c,k=sa(),l=!1;e&&(l=e.capture);f.addEventListener(b,d,k?e:l);return function(){f&&f.removeEventListener(b,d,k?e:l);d=f=g=null}}function sa(){if(void 0!==O)return O;O=!1;try{var a={get capture(){O=!0}};self.addEventListener("test-options",null,a);self.removeEventListener("test-options",null,a)}catch(b){}return O};function Q(a,b,c){return P(a,b,c)}function ta(a,b){var c=b,d=P(a,"load",function(a){try{c(a)}finally{c=null,d()}});return d}function ua(a){var b,c,d=new Promise(function(b){c=ta(a,b)});d.then(c,c);b&&b(c);return d};function va(){this.l=null}h=va.prototype;h.add=function(a){var b=this;this.l||(this.l=[]);this.l.push(a);return function(){b.remove(a)}};h.remove=function(a){this.l&&(a=this.l.indexOf(a),-1<a&&this.l.splice(a,1))};h.removeAll=function(){this.l&&(this.l.length=0)};h.fire=function(a){if(this.l)for(var b=this.l,c=0;c<b.length;c++)(0,b[c])(a)};h.getHandlerCount=function(){return this.l?this.l.length:0};function wa(a,b){var c=300;function d(d){g=null;f=a.setTimeout(e,c);b.apply(null,d)}function e(){f=0;g&&d(g)}var f=0,g=null;return function(a){for(var b=[],c=0;c<arguments.length;++c)b[c-0]=arguments[c];f?g=b:d(b)}};function R(a){this.O=xa(a.win,a)}function xa(a,b){var c=J(a,"extensions");a=G(b);return c.installExtensionForDoc(a,"amp-video-service").then(function(){return oa(b)})}R.prototype.register=function(a,b){b=void 0===b?!0:b;this.O.then(function(b){return b.register(a)})};R.prototype.delegateAutoplay=function(a,b){var c=b=void 0===b?null:b;this.O.then(function(b){return b.delegateAutoplay(a,c)})};R.prototype.getAnalyticsDetails=function(a){return this.O.then(function(b){return b.getAnalyticsDetails(a)})};function S(){this.I=!1;this.V=new va}S.prototype.onSessionEnd=function(a){this.V.add(a)};S.prototype.beginSession=function(){this.I=!0};S.prototype.endSession=function(){this.I&&this.V.fire();this.I=!1};S.prototype.isSessionActive=function(){return this.I};function T(a){var b=!1,c=null;return function(d){for(var e=[],f=0;f<arguments.length;++f)e[f-0]=arguments[f];b||(c=a.apply(self,e),b=!0,a=null);return c}};function ya(a,b){if(b)return Promise.resolve(!1);var c=a.document.createElement("video");c.setAttribute("muted","");c.setAttribute("playsinline","");c.setAttribute("webkit-playsinline","");c.setAttribute("height","0");c.setAttribute("width","0");c.muted=!0;c.playsinline=!0;c.webkitPlaysinline=!0;N(c,{position:"fixed",top:"0",width:"0",height:"0",opacity:"0"});(new Promise(function(){return c.play()})).catch(function(){});return Promise.resolve(!c.paused)}var U=null;var za={title:"",artist:"",album:"",artwork:[{src:""}]};function Aa(a,b,c,d){var e=a.navigator;"mediaSession"in e&&a.MediaMetadata&&(e.mediaSession.metadata=new a.MediaMetadata(za),Ba(b),e.mediaSession.metadata=new a.MediaMetadata(b),e.mediaSession.setActionHandler("play",c),e.mediaSession.setActionHandler("pause",d))}
function Ca(a){var b=a.querySelector('script[type="application/ld+json"]');if(b){var c;a:{try{c=JSON.parse(b.textContent);break a}catch(e){}c=void 0}var d=c;if(d&&d.image){if("string"===typeof d.image)return d.image;if(d.image["@list"]&&"string"===typeof d.image["@list"][0])return d.image["@list"][0];if("string"===typeof d.image.url)return d.image.url;if("string"===typeof d.image[0])return d.image[0]}}}
function Ba(a){a&&a.artwork&&(Array.isArray(a.artwork),a.artwork.forEach(function(a){if(a){var b="[object Object]"===ca.call(a)?a.src:a;v().assert(fa(b))}}))};function Da(a){var b=this;this.ampdoc=a;this.ea=L(this.ampdoc);this.j=null;this.$=!1;this.ca=J(a.win,"timer");this.ga=ga(a);this.U=function(){for(var a=0;a<b.j.length;a++){var d=b.j[a];if("paused"!==d.getPlayingState()){V(d,"video-seconds-played");var e,f=d.video.getCurrentTime(),g=d.video.getDuration();t(f)&&t(g)&&0<g&&(e=b.ampdoc.win,f={time:f,percent:f/g},g={detail:f},Object.assign(g,void 0),"function"==typeof e.CustomEvent?e=new e.CustomEvent("video-manager.timeUpdate",g):(e=e.document.createEvent("CustomEvent"),
e.initCustomEvent("video-manager.timeUpdate",!!g.bubbles,!!g.cancelable,f)),b.ga.trigger(d.video.element,"timeUpdate",e,1))}}b.ca.delay(b.U,1E3)};this.ia=T(function(){return new W(b.ampdoc)});this.ca.delay(this.U,1E3)}h=Da.prototype;h.register=function(a){Ea(a);a.supportsPlatform()&&(this.j=this.j||[],a=new Fa(this,a),Ga(this,a),this.j.push(a),a=a.video.element,a.dispatchCustomEvent("registered"),a.signals().signal("registered"),a.classList.add("i-amphtml-video-interface"))};
h.delegateAutoplay=function(a){var b=this;a.signals().whenSignal("registered").then(function(){b.D(a).delegateAutoplay()})};function Ea(a){var b=a,c=null;b.registerAction("play",function(){return a.play(!1)},1);b.registerAction("pause",function(){return a.pause()},1);b.registerAction("mute",function(){return a.mute()},1);b.registerAction("unmute",function(){return a.unmute()},1);b.registerAction("fullscreen",function(){return a.fullscreenEnter()},1)}
function Ga(a,b){var c=b.video.element;Q(c,"amp:video:visibility",function(a){var c=a.data;c&&1==c.visible?b.updateVisibility(!0):b.updateVisibility()});Q(c,"reloaded",function(){b.videoLoaded()});if(!a.$){var d=function(){for(var b=0;b<a.j.length;b++)a.j[b].updateVisibility()};a.ea.onScroll(d);a.ea.onChanged(d);a.$=!0}}function Ha(a,b){for(var c=0;c<a.j.length;c++)if(a.j[c].video===b)return a.j[c];w().error("video-manager","video is not registered to this video manager");return null}
h.D=function(a){for(var b=0;b<this.j.length;b++){var c=this.j[b];if(c.video.element===a)return c}w().error("video-manager","video is not registered to this video manager");return null};h.getAnalyticsDetails=function(a){return(a=this.D(a))?a.getAnalyticsDetails():Promise.resolve()};h.getPlayingState=function(a){return Ha(this,a).getPlayingState()};h.userInteractedWithAutoPlay=function(a){return Ha(this,a).userInteractedWithAutoPlay()};h.registerForAutoFullscreen=function(a){this.ia().register(a)};
function Fa(a,b){var c=this;this.la=a;this.h=a.ampdoc;this.video=b;this.T=!0;this.A=this.B=this.X=!1;this.N=new S;this.N.onSessionEnd(function(){return V(c,"video-session")});this.F=new S;this.F.onSessionEnd(function(){return V(c,"video-session-visible")});this.S=function(){var a=c.h.win,b=a||self;if(b.AMP_MODE)b=b.AMP_MODE;else{var f=p(b.location.originalHash||b.location.hash),g=p(b.location.search);r||(r=b.AMP_CONFIG&&b.AMP_CONFIG.v?b.AMP_CONFIG.v:"011525461683159");b=b.AMP_MODE={localDev:!1,
development:!("1"!=f.development&&!b.AMP_DEV_MODE),examiner:"2"==f.development,filter:f.filter,geoOverride:f["amp-geo"],minified:!0,lite:void 0!=g.amp_lite,test:!1,log:f.log,version:"1525461683159",rtvVersion:r}}b=b.lite;U||(U=T(ya));return U(a,b)};this.R=this.Y=this.L=!1;this.P=null;this.o=!1;this.hasAutoplay=b.element.hasAttribute("autoplay");this.C=za;ua(b.element).then(function(){return c.videoLoaded()});Q(b.element,"pause",function(){V(c,"video-pause");c.B=!1;c.R?c.R=!1:c.N.endSession()});
Q(b.element,"playing",function(){return Ia(c)});Q(b.element,"muted",function(){return c.o=!0});Q(b.element,"unmuted",function(){return c.o=!1});Q(b.element,"ended",function(){V(c,"video-ended")});b.element.signals().whenSignal("registered").then(function(){var a=c.video.element;(c.video.preimplementsAutoFullscreen()||!a.hasAttribute("rotate-to-fullscreen")?0:v().assert(c.video.isInteractive(),"Only interactive videos are allowed to enter fullscreen on rotate.","Set the `controls` attribute on %s to enable.",
a))&&c.la.registerForAutoFullscreen(c);c.updateVisibility();c.hasAutoplay&&Ja(c)})}h=Fa.prototype;h.delegateAutoplay=function(){this.T=!1;this.B&&this.video.pause()};function Ia(a){a.B=!0;a.video.preimplementsMediaSessionAPI()||Aa(a.h.win,a.C,function(){a.video.play(!1)},function(){a.video.pause()});a.N.beginSession();a.A&&a.F.beginSession();V(a,"video-play")}
h.videoLoaded=function(){this.X=!0;this.P=this.video.element.querySelector("video, iframe");if(!this.video.preimplementsMediaSessionAPI()){this.video.getMetadata()&&(this.C=x(this.video.getMetadata()));var a=this.h.win.document;if(!this.C.artwork||0==this.C.artwork.length){var b;(b=Ca(a))||(b=(b=a.querySelector('meta[property="og:image"]'))?b.getAttribute("content"):void 0);b||(b=(b=a.querySelector('link[rel="shortcut icon"]')||a.querySelector('link[rel="icon"]'))?b.getAttribute("href"):void 0);b&&
(this.C.artwork=[{src:b}])}!this.C.title&&(a=this.video.element.getAttribute("title")||this.video.element.getAttribute("aria-label")||this.P.getAttribute("title")||this.P.getAttribute("aria-label")||a.title)&&(this.C.title=a)}this.updateVisibility();this.A&&Ka(this)};
function Ka(a){F(a.h,"viewer").isVisible()&&a.S().then(function(b){var c=a.hasAutoplay&&!a.L;c&&b?a.T&&(a.A?(a.F.beginSession(),a.video.play(!0),a.Y=!0):(a.B&&a.F.endSession(),a.video.pause(),a.R=!0)):a.A?a.F.beginSession():a.B&&a.F.endSession()})}function Ja(a){a.video.isInteractive()&&a.video.hideControls();a.S().then(function(b){!b&&a.video.isInteractive()?a.video.showControls():(a.video.mute(),a.video.isInteractive()&&La(a))})}
function La(a){function b(b){a.video.mutateElement(function(){f.classList.toggle("amp-video-eq-play",b)})}function c(){this.L=!0;this.video.showControls();this.video.unmute();k.forEach(function(a){a()});la(f);la(g)}function d(){N(g,{display:"none"})}function e(){N(g,{display:"block"})}a.video.hideControls();var f=Ma(a),g=Na(a);a.video.mutateElement(function(){a.video.element.appendChild(f);a.video.element.appendChild(g)});var k=[];k.push(Q(g,"click",c.bind(a)));k.push(Q(f,"click",c.bind(a)));k.push(Q(a.video.element,
"pause",b.bind(a,!1)));k.push(Q(a.video.element,"playing",b.bind(a,!0)));k.push(Q(a.video.element,"ad_start",d.bind(a)));k.push(Q(a.video.element,"ad_end",e.bind(a)))}
function Ma(a){var b=a.h.win.document,c=b.createElement("i-amphtml-video-eq");c.classList.add("amp-video-eq");for(var d=1;4>=d;d++){var e=b.createElement("div");e.classList.add("amp-video-eq-col");for(var f=1;2>=f;f++){var g=b.createElement("div");g.classList.add("amp-video-eq-"+d+"-"+f);e.appendChild(g)}c.appendChild(e)}var k=K(a.h.win);k.isIos()&&c.setAttribute("unpausable","");return c}
function Na(a){a=a.h.win.document.createElement("i-amphtml-video-mask");a.classList.add("i-amphtml-fill-content");return a}h.updateVisibility=function(a){var b=this,c=this.A;this.video.measureMutateElement(function(){if(1==a)b.A=!0;else{var c=b.video.element.getIntersectionChangeEntry(),e=t(c.intersectionRatio)?100*c.intersectionRatio:0;b.A=75<=e}},function(){b.A!=c&&(b.X&&Ka(b),b.video.element.dispatchCustomEvent("amp:visibilitychanged"))})};
h.getPlayingState=function(){return this.B?this.B&&this.Y&&!this.L?"playing_auto":"playing_manual":"paused"};h.userInteractedWithAutoPlay=function(){return this.L};
h.getAnalyticsDetails=function(){var a=this,b=this.video;return this.S().then(function(c){var d=b.element.getLayoutBox(),e=d.width,d=d.height,f=a.hasAutoplay&&c,g=b.getPlayedRanges(),k=g.reduce(function(a,b){return a+b[1]-b[0]},0);return{autoplay:f,currentTime:b.getCurrentTime(),duration:b.getDuration(),height:d,id:b.element.id,muted:a.o,playedTotal:k,playedRangesJson:JSON.stringify(g),state:a.getPlayingState(),width:e}})};
function W(a){var b=this,c=a.win;this.h=a;this.ma=0;this.fa=c;this.H=this.G=null;this.M=[];this.j={};this.na=T(function(){return L(a).onScroll(wa(b.h.win,function(){X(b.h.win)||Oa(b)}))});Pa(this);Qa(this)}W.prototype.register=function(a){var b=this;if(Ra(this,a.video.element)){var c=this.ma++,d=a.video.element;d.__AMP_AUTO_FULLSCREEN_ID__=c.toString();this.j[c.toString()]=a;Q(d,"amp:visibilitychanged",function(a){X(b.h.win)||Sa(b,a.target)});this.na();Sa(this,d)}};
function Qa(a){function b(){a.G=null}var c=a.h.getRootNode();P(c,"webkitfullscreenchange",b);P(c,"mozfullscreenchange",b);P(c,"fullscreenchange",b);P(c,"MSFullscreenChange",b)}function Ra(a,b){var c=b.querySelector("video, iframe");if("video"==c.tagName.toLowerCase())return!0;a=K(a.h.win);return a.isIos()||a.isSafari()?"amp-dailymotion"==b.tagName.toLowerCase():!0}
function Pa(a){var b=a.h.win,c=b.screen;if(c&&"orientation"in c){var d=c.orientation;Q(d,"change",function(){return Ta(a)})}Q(b,"orientationchange",function(){return Ta(a)})}function Ta(a){X(a.h.win)?a.H&&Ua(a,a.D(a.H)):a.G&&Va(a,a.G)}function Ua(a,b){var c=b.video;if("playing_manual"===b.getPlayingState()){var d=K(a.fa);a.G=b;d.isAndroid()&&d.isChrome()?c.fullscreenEnter():Wa(a,c).then(function(){return c.fullscreenEnter()})}}
function Va(a,b){a.G=null;var c=b.video;Wa(a,c,"center").then(function(){return c.fullscreenExit()})}function Wa(a,b,c){c=void 0===c?null:c;var d=b.element,e=L(a.h),f="ease-in";return Xa(a).then(function(){var a=d.getIntersectionChangeEntry().boundingClientRect,b=a,l=b.top,b=b.bottom,n=e.getSize().height,q=0<=l&&b<=n;if(q)return Promise.resolve();var Za=c?c:b>n?"bottom":"top";return e.animateScrollIntoView(d,300,f,Za)})}function Xa(a){var b=330;return J(a.fa,"timer").promise(b)}
function Sa(a,b){var c=b.getIntersectionChangeEntry(),d=.75<c.intersectionRatio,e=a.M.indexOf(b);d?(0>e&&a.M.push(b),Oa(a)):0<=e&&a.M.splice(e,1)}function Oa(a){a.H=null;a.M.map(function(a){return Object.assign({target:a},a.getIntersectionChangeEntry())}).sort(function(b,c){return Ya(a,b,c)}).forEach(function(b,c){.8<=b.intersectionRatio&&0==c&&(a.H=b.target)})}
function Ya(a,b,c){var d=a.D(b.target).getPlayingState(),e=a.D(c.target).getPlayingState();if("playing_manual"==d&&"playing_manual"!=e)return-1;if("playing_manual"!=d&&"playing_manual"==e)return 1;var f=.1,g=b.intersectionRatio-c.intersectionRatio;if(g<-f)return-1;if(g>f)return 1;a=L(a.h);var k=$a(a,b.boundingClientRect),l=$a(a,c.boundingClientRect);if(k<l)return-1;if(k>l)return 1;var n=b.boundingClientRect.top-c.boundingClientRect.top;return 0>n?-1:0<n?1:0}W.prototype.D=function(a){return this.j[a.__AMP_AUTO_FULLSCREEN_ID__]};
function $a(a,b){var c=b.top+b.height/2,d=a.getSize().height/2;return Math.abs(c-d)}function X(a){return a.screen&&"orientation"in a.screen?A(a.screen.orientation.type,"landscape"):90==Math.abs(a.orientation)}function V(a,b){var c,d=a.video,e=c?Promise.resolve(c):a.getAnalyticsDetails();e.then(function(a){d.element.dispatchCustomEvent(b,a)})}
function ab(a){ia(a,function(a){var b;var d=a.win;if(d.__AMP__EXPERIMENT_TOGGLES)b=d.__AMP__EXPERIMENT_TOGGLES;else{d.__AMP__EXPERIMENT_TOGGLES=Object.create(null);b=d.__AMP__EXPERIMENT_TOGGLES;if(d.AMP_CONFIG)for(var e in d.AMP_CONFIG){var f=d.AMP_CONFIG[e];"number"===typeof f&&0<=f&&1>=f&&(b[e]=Math.random()<f)}if(d.AMP_CONFIG&&Array.isArray(d.AMP_CONFIG["allow-doc-opt-in"])&&0<d.AMP_CONFIG["allow-doc-opt-in"].length&&(e=d.AMP_CONFIG["allow-doc-opt-in"],f=d.document.head.querySelector('meta[name="amp-experiments-opt-in"]')))for(var f=
f.getAttribute("content").split(","),g=0;g<f.length;g++)-1!=e.indexOf(f[g])&&(b[f[g]]=!0);Object.assign(b,qa(d));if(d.AMP_CONFIG&&Array.isArray(d.AMP_CONFIG["allow-url-opt-in"])&&0<d.AMP_CONFIG["allow-url-opt-in"].length)for(e=d.AMP_CONFIG["allow-url-opt-in"],d=p(d.location.originalHash||d.location.hash),f=0;f<e.length;f++)g=d["e-"+e[f]],"1"==g&&(b[e[f]]=!0),"0"==g&&(b[e[f]]=!1)}return b["video-service"]?new R(a):new Da(a)})};function Y(a){a=AMP.BaseElement.call(this,a)||this;a.K="unstarted";a.da=null;a.m=null;a.o=!1;a.ka=!1;a.oa=null;a.J=null;a.Z=null;a.aa=null;a.ba=null;a.W=!1;return a}aa(Y,AMP.BaseElement);h=Y.prototype;h.preconnectCallback=function(a){this.preconnect.url("https://www.dailymotion.com",a);this.preconnect.url("https://static1.dmcdn.net",a)};h.supportsPlatform=function(){return!0};h.isInteractive=function(){return!0};
h.isLayoutSupported=function(a){return"fixed"==a||"fixed-height"==a||"responsive"==a||"fill"==a||"flex-item"==a||"fluid"==a||"intrinsic"==a};h.viewportCallback=function(a){this.element.dispatchCustomEvent("amp:video:visibility",{visible:a})};
h.buildCallback=function(){var a=this;this.da=v().assert(this.element.getAttribute("data-videoid"),"The data-videoid attribute is required for <amp-dailymotion> %s",this.element);ab(this.element);F(this.element,"video-manager").register(this);this.J=new Promise(function(b){a.Z=b});this.aa=new Promise(function(b){a.ba=b})};
h.layoutCallback=function(){var a=this.element.ownerDocument.createElement("iframe");a.setAttribute("frameborder","0");a.setAttribute("allowfullscreen","true");a.src=bb(this);this.applyFillContent(a);this.element.appendChild(a);this.m=a;this.oa=Q(this.win,"message",this.ja.bind(this));this.ka=this.element.hasAttribute("autoplay");return this.loadPromise(this.m)};
h.ja=function(a){if("https://www.dailymotion.com"==a.origin&&a.source==this.m.contentWindow&&a.data&&a.type&&"message"==a.type&&(a=p(a.data),void 0!==a))switch(a.event){case "apiready":this.Z(!0);this.element.dispatchCustomEvent("load");break;case "end":this.element.dispatchCustomEvent("ended");case "pause":this.element.dispatchCustomEvent("pause");this.K="pause";break;case "play":this.element.dispatchCustomEvent("playing");this.K="play";break;case "volumechange":if("unstarted"==this.K||this.o!=(0==
a.volume||"true"==a.muted))(this.o=0==a.volume||"true"==a.muted)?this.element.dispatchCustomEvent("muted"):this.element.dispatchCustomEvent("unmuted");break;case "progress":this.ba(!0);break;case "fullscreenchange":this.W="true"==a.fullscreen}};function Z(a,b,c){var d="https://www.dailymotion.com";a.J.then(function(){if(a.m&&a.m.contentWindow){var e=JSON.stringify(y({command:b,parameters:c||[]}));a.m.contentWindow.postMessage(e,d)}})}
function bb(a){var b="https://www.dailymotion.com/embed/video/"+encodeURIComponent(a.da||"")+"?api=1&html=1&app=amp",c="mute endscreen-enable sharing-enable start ui-highlight ui-logo info".split(" ");c.forEach(function(c){var d=a.element.getAttribute("data-"+c);if(d){var e=b,d=encodeURIComponent(c)+"="+encodeURIComponent(d);b=D(e,d,void 0)}});var d=ma(a.element);return b=D(b,ea(d))}h.pauseCallback=function(){this.pause()};
h.play=function(a){var b=this;Z(this,"play");a&&"pause"!=this.K&&this.aa.then(function(){Z(b,"play")})};h.pause=function(){Z(this,"pause")};h.mute=function(){var a=this;Z(this,"muted",[!0]);this.J.then(function(){a.element.dispatchCustomEvent("muted");a.o=!0})};h.unmute=function(){var a=this;Z(this,"muted",[!1]);this.J.then(function(){a.element.dispatchCustomEvent("unmuted");a.o=!1})};h.showControls=function(){Z(this,"controls",[!0])};h.hideControls=function(){Z(this,"controls",[!1])};
h.fullscreenEnter=function(){var a=K(this.win);if(a.isSafari()||a.isIos())Z(this,"fullscreen",[!0]);else if(this.m){var a=this.m,b=a.requestFullscreen||a.requestFullScreen||a.webkitRequestFullscreen||a.webkitRequestFullScreen||a.webkitEnterFullscreen||a.webkitEnterFullScreen||a.msRequestFullscreen||a.msRequestFullScreen||a.mozRequestFullscreen||a.mozRequestFullScreen;b&&b.call(a)}};
h.fullscreenExit=function(){var a=K(this.win);if(a.isSafari()||a.isIos())Z(this,"fullscreen",[!1]);else if(this.m){var a=this.m,b=a.cancelFullScreen||a.exitFullscreen||a.exitFullScreen||a.webkitExitFullscreen||a.webkitExitFullScreen||a.webkitCancelFullScreen||a.mozCancelFullScreen||a.msExitFullscreen;b?b.call(a):(a.ownerDocument&&(b=a.ownerDocument.cancelFullScreen||a.ownerDocument.exitFullscreen||a.ownerDocument.exitFullScreen||a.ownerDocument.webkitExitFullscreen||a.ownerDocument.webkitExitFullScreen||
a.ownerDocument.webkitCancelFullScreen||a.ownerDocument.mozCancelFullScreen||a.ownerDocument.msExitFullscreen),b&&b.call(a.ownerDocument))}};h.isFullscreen=function(){var a=K(this.win);a.isSafari()||a.isIos()?a=this.W:this.m?(a=this.m,a=a.webkitDisplayingFullscreen?!0:a.ownerDocument&&(a.ownerDocument.fullscreenElement||a.ownerDocument.webkitFullscreenElement||a.ownerDocument.mozFullScreenElement||a.webkitCurrentFullScreenElement)==a?!0:!1):a=!1;return a};h.getMetadata=function(){};
h.preimplementsMediaSessionAPI=function(){return!1};h.preimplementsAutoFullscreen=function(){return!1};h.getCurrentTime=function(){return 0};h.getDuration=function(){return 1};h.getPlayedRanges=function(){return[]};(function(a){a.registerElement("amp-dailymotion",Y)})(self.AMP);
})});
//# sourceMappingURL=amp-dailymotion-0.1.js.map

