(self.AMP=self.AMP||[]).push({n:"amp-brightcove",v:"1525461683159",f:(function(AMP){var f;function m(a,d){function g(){}g.prototype=d.prototype;a.prototype=new g;a.prototype.constructor=a;for(var e in d)if(Object.defineProperties){var b=Object.getOwnPropertyDescriptor(d,e);b&&Object.defineProperty(a,e,b)}else a[e]=d[e]};self.log=self.log||{user:null,dev:null,userForEmbed:null};var n=self.log;/*
 https://mths.be/cssescape v1.5.1 by @mathias | MIT license */
function p(a){var d,g,e=d||function(a){return a},b=a.dataset;a={};var k=g?g:/^param(.+)/,c;for(c in b){var h=c.match(k);if(h){var l=h[1][0].toLowerCase()+h[1].substr(1);a[e(l)]=b[c]}}return a};function q(a){a=AMP.BaseElement.call(this,a)||this;a.c=null;return a}m(q,AMP.BaseElement);f=q.prototype;f.preconnectCallback=function(){this.preconnect.url("https://players.brightcove.net")};f.isLayoutSupported=function(a){return"fixed"==a||"fixed-height"==a||"responsive"==a||"fill"==a||"flex-item"==a||"fluid"==a||"intrinsic"==a};f.buildCallback=function(){this.c=null};
f.layoutCallback=function(){var a=this.element.ownerDocument.createElement("iframe");a.setAttribute("frameborder","0");a.setAttribute("allowfullscreen","true");a.src=r(this);this.applyFillContent(a);this.element.appendChild(a);this.c=a;return this.loadPromise(a)};
function r(a){if(!n.user)throw Error("failed to call initLogConstructor");var d=n.user.assert(a.element.getAttribute("data-account"),"The data-account attribute is required for <amp-brightcove> %s",a.element),g=a.element.getAttribute("data-player")||a.element.getAttribute("data-player-id")||"default",e=a.element.getAttribute("data-embed")||"default",b="https://players.brightcove.net/"+encodeURIComponent(d)+("/"+encodeURIComponent(g))+("_"+encodeURIComponent(e)+"/index.html");a.element.getAttribute("data-playlist-id")?
b=b+"?playlistId="+t(a.element.getAttribute("data-playlist-id")):a.element.getAttribute("data-video-id")&&(b=b+"?videoId="+t(a.element.getAttribute("data-video-id")));a=p(a.element);var k=[],c;for(c in a){var h=a[c];if(null!=h)if(Array.isArray(h))for(var l=0;l<h.length;l++){var u=h[l];k.push(encodeURIComponent(c)+"="+encodeURIComponent(u))}else k.push(encodeURIComponent(c)+"="+encodeURIComponent(h))}if(c=k.join("&"))a=b.split("#",2),b=a[0].split("?",2),c=b[0]+(b[1]?"?"+b[1]+"&"+c:"?"+c),b=c+=a[1]?
"#"+a[1]:"";return b}f.mutatedAttributesCallback=function(a){var d=a["data-player"]||a["data-player-id"],g=a["data-embed"],e=a["data-playlist-id"],b=a["data-video-id"];void 0===a["data-account"]&&void 0===d&&void 0===e&&void 0===g&&void 0===b||!this.c||(this.c.src=r(this))};function t(a){return"ref:"===a.substring(0,4)?"ref:"+encodeURIComponent(a.substring(4)):encodeURIComponent(a)}f.pauseCallback=function(){this.c&&this.c.contentWindow&&this.c.contentWindow.postMessage("pause","https://players.brightcove.net")};
f.unlayoutOnPause=function(){return!0};f.unlayoutCallback=function(){if(this.c){var a=this.c;a.parentElement&&a.parentElement.removeChild(a);this.c=null}return!0};(function(a){a.registerElement("amp-brightcove",q)})(self.AMP);
})});
//# sourceMappingURL=amp-brightcove-0.1.js.map

