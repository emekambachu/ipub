(self.AMP=self.AMP||[]).push({n:"amp-twitter",v:"1525461683159",f:(function(AMP){function aa(a,b){function d(){}d.prototype=b.prototype;a.prototype=new d;a.prototype.constructor=a;for(var c in b)if(Object.defineProperties){var e=Object.getOwnPropertyDescriptor(b,c);e&&Object.defineProperty(a,c,e)}else a[c]=b[c]}function r(a,b){b=void 0===b?"":b;try{return decodeURIComponent(a)}catch(d){return b}};var ba=/(?:^[#?]?|&)([^=&]+)(?:=([^&]*))?/g;function t(a){var b=Object.create(null);if(!a)return b;for(var d;d=ba.exec(a);){var c=r(d[1],d[1]),e=d[2]?r(d[2],d[2]):"";b[c]=e}return b};var v="";function w(){var a=void 0,b=a||self,d;if(b.AMP_MODE)d=b.AMP_MODE;else{d=b;var c=t(d.location.originalHash||d.location.hash),e=t(d.location.search);v||(v=d.AMP_CONFIG&&d.AMP_CONFIG.v?d.AMP_CONFIG.v:"011525461683159");d=b.AMP_MODE={localDev:!1,development:!("1"!=c.development&&!d.AMP_DEV_MODE),examiner:"2"==c.development,filter:c.filter,geoOverride:c["amp-geo"],minified:!0,lite:void 0!=e.amp_lite,test:!1,log:c.log,version:"1525461683159",rtvVersion:v}}return d};self.log=self.log||{user:null,dev:null,userForEmbed:null};var z=self.log;function A(){if(!z.user)throw Error("failed to call initLogConstructor");return z.user}function B(){if(z.dev)return z.dev;throw Error("failed to call initLogConstructor");};function C(a){return a||{}};function D(a){this.l=a;this.h=Object.create(null)}D.prototype.get=function(a){if(this.h[a])return this.h[a].access=Date.now(),this.h[a].payload};D.prototype.put=function(a,b){var d=this;this.h[a]={payload:b,access:Date.now()};var c=Object.keys(this.h);c.length>this.l&&(B().warn("lru-cache","Trimming template cache"),c.sort(function(a,b){return d.h[b].access-d.h[a].access}),delete this.h[c[c.length-1]])};function G(a,b){return b.length>a.length?!1:0==a.lastIndexOf(b,0)};var H=self.AMP_CONFIG||{},I=H.thirdPartyUrl||"https://3p.ampproject.net",ca=H.thirdPartyFrameHost||"ampproject.net";C({c:!0,v:!0,a:!0,ad:!0});var J,K;
function L(a){var b;J||(J=self.document.createElement("a"),K=self.UrlCache||(self.UrlCache=new D(100)));var d=K.get(a);if(d)return d;var c=J;c.href=a;c.protocol||(c.href=c.href);var e={href:c.href,protocol:c.protocol,host:c.host,hostname:c.hostname,port:"0"==c.port?"":c.port,pathname:c.pathname,search:c.search,hash:c.hash,origin:null};"/"!==e.pathname[0]&&(e.pathname="/"+e.pathname);if("http:"==e.protocol&&80==e.port||"https:"==e.protocol&&443==e.port)e.port="",e.host=e.hostname;e.origin=c.origin&&
"null"!=c.origin?c.origin:"data:"!=e.protocol&&e.host?e.protocol+"//"+e.host:e.href;var g=e,f=g;if(b)return f;K.put(a,f);return f}function da(a){"string"==typeof a&&(a=L(a));var b;(b="https:"==a.protocol||"localhost"==a.hostname)||(a=a.hostname,b=a.length-10,b=0<=b&&a.indexOf(".localhost",b)==b);return b};function M(a,b){try{return JSON.parse(a)}catch(d){b&&b(d)}};function N(a,b){a=O(a);a=O(a);a=a.isSingleDoc()?a.win:a;return P(a,b)}function O(a){if(a.nodeType){var b=(a.ownerDocument||a).defaultView,b=b.__AMP_TOP||b;a=P(b,"ampdoc").getAmpDoc(a)}return a}function P(a,b){var d=a.services;d||(d=a.services={});var c=d;a=c[b];a.obj||(a.obj=new a.ctor(a.context),a.ctor=null,a.context=null,a.resolve&&a.resolve(a.obj));return a.obj};/*
 https://mths.be/cssescape v1.5.1 by @mathias | MIT license */
function ea(a){var b=Q(a);return!!b["no-sync-xhr-in-ads"]}
function Q(a){if(a.__AMP__EXPERIMENT_TOGGLES)return a.__AMP__EXPERIMENT_TOGGLES;a.__AMP__EXPERIMENT_TOGGLES=Object.create(null);var b=a.__AMP__EXPERIMENT_TOGGLES;if(a.AMP_CONFIG)for(var d in a.AMP_CONFIG){var c=a.AMP_CONFIG[d];"number"===typeof c&&0<=c&&1>=c&&(b[d]=Math.random()<c)}if(a.AMP_CONFIG&&Array.isArray(a.AMP_CONFIG["allow-doc-opt-in"])&&0<a.AMP_CONFIG["allow-doc-opt-in"].length){var e=a.AMP_CONFIG["allow-doc-opt-in"];if(d=a.document.head.querySelector('meta[name="amp-experiments-opt-in"]')){var g=d.getAttribute("content").split(",");
for(d=0;d<g.length;d++)-1!=e.indexOf(g[d])&&(b[g[d]]=!0)}}Object.assign(b,fa(a));if(a.AMP_CONFIG&&Array.isArray(a.AMP_CONFIG["allow-url-opt-in"])&&0<a.AMP_CONFIG["allow-url-opt-in"].length){d=a.AMP_CONFIG["allow-url-opt-in"];a=t(a.location.originalHash||a.location.hash);for(var f=0;f<d.length;f++){var h=a["e-"+d[f]];"1"==h&&(b[d[f]]=!0);"0"==h&&(b[d[f]]=!1)}}return b}
function fa(a){a:{var b;try{b=a.document.cookie}catch(h){b=""}if(a=b)for(a=a.split(";"),b=0;b<a.length;b++){var d=a[b].trim(),c=d.indexOf("="),e;if(e=-1!=c)e=d.substring(0,c).trim(),e="AMP_EXP"==r(e,void 0);if(e){a=d.substring(c+1).trim();a=r(a,a);break a}}a=null}var g=a,f=g?g.split(/\s*,\s*/g):[];a=Object.create(null);for(b=0;b<f.length;b++)0!=f[b].length&&("-"==f[b][0]?a[f[b].substr(1)]=!1:a[f[b]]=!0);return a};function ga(a){for(var b=a.nodeName,d=0,c=0,e=a.previousElementSibling;e&&25>c&&100>d;)e.nodeName==b&&c++,d++,e=e.previousElementSibling;return 25>c&&100>d?"."+c:""};var R,S="Webkit webkit Moz moz ms O o".split(" ");function ha(a){var b,d;d=a.style;if(G("border","--"))d="border";else{R||(R=Object.create(null));var c=R.border;if(!c){c="border";if(void 0===d.border){var e;b:{for(e=0;e<S.length;e++){var g=S[e]+"Border";if(void 0!==d[g]){e=g;break b}}e=""}void 0!==d[e]&&(c=e)}R.border=c}d=c}d&&(a.style[d]=b?"none"+b:"none")};function T(a){a=parseFloat(a);return"number"===typeof a&&isFinite(a)?a:void 0};var U={};
function ia(a,b){A().assert("twitter","Attribute type required for <amp-ad>: %s",b);for(var d=0,c=a;c&&c!=c.parent;c=c.parent)d++;var d=String(d)+"-"+V(a),e=c={},g=b.dataset,f;for(f in g)G(f,"vars")||(e[f]=g[f]);if(f=b.getAttribute("json")){f=M(f);if(void 0===f)throw A().createError("Error parsing JSON in json attribute in element %s",b);for(var h in f)e[h]=f[h]}h=c;c=Date.now();e=b.getAttribute("width");f=b.getAttribute("height");h=h?h:{};h.width=T(e);h.height=T(f);b.getAttribute("title")&&(h.title=
b.getAttribute("title"));var n=a.location.href;"about:srcdoc"==n&&(n=a.parent.location.href);var p=N(b,"documentInfo").get(),q=N(b,"viewer"),e=q.getUnconfirmedReferrerUrl(),l=b.getPageLayoutBox();f=h;for(var g=p.sourceUrl,k=p.canonicalUrl,p=p.pageViewId,n={href:n},E=b.tagName,u={localDev:!1,development:w().development,filter:w().filter,minified:!0,lite:w().lite,test:!1,log:w().log,version:w().version,rtvVersion:w().rtvVersion},ka=!(!a.AMP_CONFIG||!a.AMP_CONFIG.canary),q=!q.isVisible(),l=l?{left:l.left,
top:l.top,width:l.width,height:l.height}:null,la=b.getIntersectionChangeEntry(),m=b,F=[],x=0;m&&1==m.nodeType&&25>x;){var y="";m.id&&(y="/"+m.id);var ma=m.nodeName.toLowerCase();F.push(""+ma+y+ga(m));x++;m=m.parentElement}m=F.join();F=m.length;x=5381;for(y=0;y<F;y++)x=33*x^m.charCodeAt(y);f._context=C({ampcontextVersion:"1525461683159",ampcontextFilepath:I+"/1525461683159/ampcontext-v0.js",sourceUrl:g,referrer:e,canonicalUrl:k,pageViewId:p,location:n,startTime:c,tagName:E,mode:u,
canary:ka,hidden:q,initialLayoutRect:l,initialIntersection:la,domFingerprint:String(x>>>0),experimentToggles:Q(a),sentinel:d});(a=b.getAttribute("src"))&&(h.src=a);c=h;c.type="twitter";Object.assign(c._context,void 0);return c}
function ja(a,b){var d,c=ia(a,b),e=a.document.createElement("iframe");U[c.type]||(U[c.type]=0);U[c.type]+=1;var g=W(a,"twitter",d),f=L(g).hostname,h=JSON.stringify(C({host:f,type:c.type,count:U[c.type],attributes:c}));e.src=g;e.ampLocation=L(g);e.name=h;c.width&&(e.width=c.width);c.height&&(e.height=c.height);c.title&&(e.title=c.title);e.setAttribute("scrolling","no");ha(e);e.onload=function(){this.readyState="complete"};ea(a)&&e.setAttribute("allow","sync-xhr 'none';");e.setAttribute("data-amp-3p-sentinel",
c._context.sentinel);return e}
function W(a,b,d){var c=void 0,e=a.bootstrapBaseUrl;if(e)a=e;else{var g;g=c;var f=a.document.querySelector('meta[name="amp-3p-iframe-src"]');if(f)if(d)A().error("3p-frame","3p iframe url disabled for "+(b||"unknown")),g=null;else{b=f.getAttribute("content");var h;h=void 0===h?"source":h;A().assert(null!=b,"%s %s must be available",f,h);A().assert(da(b)||/^(\/\/)/.test(b),'%s %s must start with "https://" or "//" or be relative and served from either https or from localhost. Invalid value: %s',f,h,
b);A().assert(-1==b.indexOf("?"),"3p iframe url must not include query string %s in element %s.",b,f);h=L(b);A().assert("localhost"==h.hostname&&!g||h.origin!=L(a.location.href).origin,"3p iframe url must not be on the same origin as the current document %s (%s) in element %s. See https://github.com/ampproject/amphtml/blob/master/spec/amp-iframe-origin-policy.md for details.",b,h.origin,f);g=b+"?1525461683159"}else g=null;g||(a.defaultBootstrapSubDomain=a.defaultBootstrapSubDomain||"d-"+
V(a),g="https://"+a.defaultBootstrapSubDomain+("."+ca+"/1525461683159/")+"frame.html");a=a.bootstrapBaseUrl=g}return a}function V(a){var b;if(a.crypto&&a.crypto.getRandomValues){var d=new Uint32Array(2);a.crypto.getRandomValues(d);b=String(d[0])+d[1]}else b=String(a.Math.random()).substr(2)+"0";return b};function na(a){if(!X(a))return null;var b=a.indexOf("{");try{return JSON.parse(a.substr(b))}catch(d){return B().error("MESSAGING","Failed to parse message: "+a,d),null}}function X(a){return"string"==typeof a&&0==a.indexOf("amp-")&&-1!=a.indexOf("{")};function Y(a,b,d){var c=a.listeningFors;!c&&d&&(c=a.listeningFors=Object.create(null));a=c||null;if(!a)return a;var e=a[b];!e&&d&&(e=a[b]=[]);return e||null}function oa(a,b){var d=!0,c=L(b.src).origin,e=d?b.getAttribute("data-amp-3p-sentinel"):"amp";a=Y(a,e,!0);for(var g,e=0;e<a.length;e++){var f=a[e];if(f.frame===b){g=f;break}}g||(g={frame:b,origin:c,events:Object.create(null)},a.push(g));return g.events}
function pa(a){for(var b=C({sentinel:"unlisten"}),d=a.length-1;0<=d;d--){var c=a[d];if(!c.frame.contentWindow){a.splice(d,1);var e=c.events,g;for(g in e)e[g].splice(0,Infinity).forEach(function(a){a(b)})}}}
function qa(a){if(!a.listeningFors){var b=function(b){if(b.data){var c=ra(b.data);if(c&&c.sentinel){var d;d=c.sentinel;var g=b.origin,f=b.source,h=Y(a,d);if(h){for(var n,p=0;p<h.length;p++){var q=h[p],l=q.frame.contentWindow;if(l)if("amp"===d){if(q.origin===g&&l==f){n=q;break}}else{var k;if(!(k=f==l))b:{for(k=f;k&&k!=k.parent;k=k.parent)if(k==l){k=!0;break b}k=!1}if(k){n=q;break}}else setTimeout(pa,0,h)}d=n?n.events:null}else d=h;var E=d;if(E){var u=E[c.type];if(u)for(u=u.slice(),d=0;d<u.length;d++)(0,u[d])(c,
b.source,b.origin)}}}};a.addEventListener("message",b)}}function sa(a,b,d){function c(b,c,f){if(e||c==a.contentWindow)"unlisten"==b.sentinel?h():d(b,c,f)}var e,g=a.ownerDocument.defaultView;qa(g);var g=oa(g,a),f=g[b]||(g[b]=[]),h;f.push(c);h=function(){if(c){var a=f.indexOf(c);-1<a&&f.splice(a,1);d=f=c=null}}}
function ra(a){"string"==typeof a&&(a="{"==a.charAt(0)?M(a,function(a){B().warn("IFRAME-HELPER","Postmessage could not be parsed. Is it in a valid JSON format?",a)})||null:X(a)?na(a):null);return a};function Z(a){a=AMP.BaseElement.call(this,a)||this;a.j=null;return a}aa(Z,AMP.BaseElement);Z.prototype.preconnectCallback=function(a){var b=this.preconnect,d=W(this.win,void 0,void 0);b.preload(d,"document");b.preload(I+"/1525461683159/f.js","script");this.preconnect.preload("https://platform.twitter.com/widgets.js","script");this.preconnect.url("https://syndication.twitter.com",a);this.preconnect.url("https://pbs.twimg.com",a);this.preconnect.url("https://cdn.syndication.twimg.com",a)};
Z.prototype.isLayoutSupported=function(a){return"fixed"==a||"fixed-height"==a||"responsive"==a||"fill"==a||"flex-item"==a||"fluid"==a||"intrinsic"==a};Z.prototype.firstLayoutCompleted=function(){};
Z.prototype.layoutCallback=function(){var a=this,b=ja(this.win,this.element);this.applyFillContent(b);sa(b,"embed-size",function(b){a.togglePlaceholder(!1);a.changeHeight(b.height)});sa(b,"no-content",function(){a.getFallback()&&(a.togglePlaceholder(!1),a.toggleFallback(!0))});this.element.appendChild(b);this.j=b;return this.loadPromise(b)};Z.prototype.unlayoutOnPause=function(){return!0};
Z.prototype.unlayoutCallback=function(){if(this.j){var a=this.j;a.parentElement&&a.parentElement.removeChild(a);this.j=null}return!0};(function(a){a.registerElement("amp-twitter",Z)})(self.AMP);
})});
//# sourceMappingURL=amp-twitter-0.1.js.map

