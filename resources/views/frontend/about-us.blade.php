<!DOCTYPE html>
<!--[if lte IE 8]>         <html lang="en-US" class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->


<!-- Mirrored from bloombreedschools.org/about-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Mar 2021 14:54:36 GMT -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- First cut begin -->
<head>
	<meta charset="utf-8">
	
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"87d38be11c","applicationID":"11580779","transactionName":"JVgLEhBaXg4BSxgTWQFSFkkKVFwGCFxoEFQTUA==","queueTime":4,"applicationTime":1034,"agent":""}</script>
<script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"UwMPVVVUGwIBUVlSAAYO"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}
({1:[function(t,e,n){function r(t){try{s.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(23),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,s){try{p?p-=1:o(s||new UncaughtException(t,e,n),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}
function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t,e){var n=e?null:c.now();i("err",[t,n])}var i=t("handle"),a=t(24),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(13),t(12),"addEventListener"in window&&t(6),c.xhrWrappable&&t(14),d=!0)}s.on("fn-start",function(t,e,n){d&&(p+=1)}),s.on("fn-err",function(t,e,n){d&&!n[l]&&(f(n,l,function(){return!0}),this.thrown=!0,o(n))}),s.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,e,n)
{t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(){M++,j=y.hash,this[u]=x.now()}function o(){M--,y.hash!==j&&i(0,!0);var t=x.now();this[h]=~~this[h]+t-this[u],this[d]=t}function i(t,e){E.emit("newURL",[""+y,e])}function a(t,e){t.on(e,function(){this[e]=x.now()})}var s="-start",c="-end",f="-body",u="fn"+s,d="fn"+c,l="cb"+s,p="cb"+c,h="jsTime",m="fetch",v="addEventListener",w=window,y=w.location,x=t("loader");if(w[v]&&x.xhrWrappable){var g=t(10),b=t(11),E=t(8),R=t(6),O=t(13),C=t(7),P=t(14),T=t(9),L=t("ee"),S=L.get("tracer");t(16),x.features.spa=!0;var j,M=0;L.on(u,r),L.on(l,r),L.on(d,o),L.on(p,o),L.buffer([u,d,"xhr-done","xhr-resolved"]),R.buffer([u]),O.buffer(["setTimeout"+c,"clearTimeout"+s,u]),P.buffer([u,"new-xhr","send-xhr"+s])
,C.buffer([m+s,m+"-done",m+f+s,m+f+c]),E.buffer(["newURL"]),g.buffer([u]),b.buffer(["propagate",l,p,"executor-err","resolve"+s]),S.buffer([u,"no-"+u]),T.buffer(["new-jsonp","cb-start","jsonp-error","jsonp-end"]),a(P,"send-xhr"+s),a(L,"xhr-resolved"),a(L,"xhr-done"),a(C,m+s),a(C,m+"-done"),a(T,"new-jsonp"),a(T,"jsonp-end"),a(T,"cb-start"),E.on("pushState-end",i),E.on("replaceState-end",i),w[v]("hashchange",i,!0),w[v]("load",i,!0),w[v]("popstate",function(){i(0,M>1)},!0)}},{}],5:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(13),s=t(12),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,v="fn"+h,w="bstTimer",y="pushState",x=t("loader");x.features.stn=!0,t(8);var g=NREUM.o.EV;o.on(m,function(t,e){var n=t[0];n instanceof g&&(this.bstStart=x.now())}),o.on(v,function(t,e){var n=t[0];n instanceof g&&i("bst",[n,e,this.bstStart,x.now()])}),a.on(m,function(t,e,n){this.bstStart=x.now(),this.bstType=n}),a.on(v,function(t,e){i(w,[e,this.bstStart,x.now(),this.bstType])}),s.on(m,function(){this.bstStart=x.now()}),s.on(v,function(t,e){i(w,[e,this.bstStart,x.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=x.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t)
{i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],6:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),s=t(26)(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1],r=c(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?s(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],7:[function(t,e,n){function r(t,e,n){var r=t[e];"function"==typeof r&&(t[e]=function(){var t=r.apply(this,arguments);return o.emit(n+"start",arguments,t),t.then(function(e)
{return o.emit(n+"end",[null,e],t),e},function(e){throw o.emit(n+"end",[e],t),e})})}var o=t("ee").get("fetch"),i=t(23);e.exports=o;var a=window,s="fetch-",c=s+"body-",f=["arrayBuffer","blob","json","text","formData"],u=a.Request,d=a.Response,l=a.fetch,p="prototype";u&&d&&l&&(i(f,function(t,e){r(u[p],e,c),r(d[p],e,c)}),r(a,"fetch",s),o.on(s+"end",function(t,e){var n=this;if(e){var r=e.headers.get("content-length");null!==r&&(n.rxSize=r),o.emit(s+"done",[null,e],n)}else o.emit(s+"done",[t],n)}))},{}],8:[function(t,e,n){var r=t("ee").get("history"),o=t(26)(r);e.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],9:[function(t,e,n){function r(t){function e(){c.emit("jsonp-end",[],l),t.removeEventListener("load",e,!1),t.removeEventListener("error",n,!1)}function n(){c.emit("jsonp-error",[],l),c.emit("jsonp-end",[],l),t.removeEventListener("load",e,!1),t.removeEventListener("error",n,!1)}var r=t&&"string"==typeof t.nodeName&&"script"===t.nodeName.toLowerCase();if(r){var o="function"==typeof t.addEventListener;if(o){var a=i(t.src);if(a){var u=s(a),d="function"==typeof u.parent[u.key];if(d){var l={};f.inPlace(u.parent,[u.key],"cb-",l),t.addEventListener("load",e,!1),t.addEventListener("error",n,!1),c.emit("new-jsonp",[t.src],l)}}}}}function o(){return"addEventListener"in window}function i(t){var e=t.match(u);return e?e[1]:null}function a(t,e){var n=t.match(l),r=n[1],o=n[3];return o?a(o,e[r]):e[r]}
function s(t){var e=t.match(d);return e&&e.length>=3?{key:e[2],parent:a(e[1],window)}:{key:t,parent:window}}var c=t("ee").get("jsonp"),f=t(26)(c);if(e.exports=c,o()){var u=/[?&](?:callback|cb)=([^&#]+)/,d=/(.*)\.([^.]+)/,l=/^(\w+)(\.|$)(.*)$/,p=["appendChild","insertBefore","replaceChild"];f.inPlace(HTMLElement.prototype,p,"dom-"),f.inPlace(HTMLHeadElement.prototype,p,"dom-"),f.inPlace(HTMLBodyElement.prototype,p,"dom-"),c.on("dom-start",function(t){r(t[0])})}},{}],10:[function(t,e,n){var r=t("ee").get("mutation"),o=t(26)(r),i=NREUM.o.MO;e.exports=r,i&&(window.MutationObserver=function(t){return this instanceof i?new i(o(t,"fn-")):i.apply(this,arguments)},MutationObserver.prototype=i.prototype)},{}],11:[function(t,e,n){function r(t){var e=a.context(),n=s(t,"executor-",e),r=new f(n);return a.context(r).getCtx=function(){return e},a.emit("new-promise",[r,e],e),r}function o(t,e){return e}var i=t(26),a=t("ee").get("promise"),s=i(a),c=t(23),f=NREUM.o.PR;e.exports=a,f&&(window.Promise=r,["all","race"].forEach(function(t){var e=f[t];f[t]=function(n){function r(t){return function(){a.emit("propagate",[null,!o],i),o=o||!t}}var o=!1;c(n,function(e,n){Promise.resolve(n).then(r("all"===t),r(!1))});var i=e.apply(f,arguments),s=f.resolve(i);return s}}),["resolve","reject"].forEach(function(t){var e=f[t];f[t]=function(t){var n=e.apply(f,arguments);return t!==n&&a.emit("propagate",[t,!0],n),n}}),f.prototype["catch"]=function(t){return this.then(null,t)},f.prototype=Object.create(f.prototype,{constructor:{value:r}}),c(Object.getOwnPropertyNames(f),function(t,e){try{r[e]=f[e]}catch(n){}}),a.on("executor-start",function(t){t[0]=s(t[0],"resolve-",this),t[1]=s(t[1],"resolve-",this)}),a.on("executor-err",function(t,e,n){t[1](n)}),s.inPlace(f.prototype,["then"],"then-",o),a.on("then-start",function(t,e){this.promise=e,t[0]=s(t[0],"cb-",this),t[1]=s(t[1],"cb-",this)}),a.on("then-end",function(t,e,n){this.nextPromise=n;var r=this.promise;a.emit("propagate",[r,!0],n)}),a.on("cb-end",function(t,e,n){a.emit("propagate",[n,!0],this.nextPromise)}),a.on("propagate",function(t,e,n){this.getCtx&&!e||(this.getCtx=function(){if(t instanceof Promise)var e=a.context(t);return e&&e.getCtx?e.getCtx():this})}),r.toString=function(){return""+f})},{}],12:[function(t,e,n){var r=t("ee").get("raf"),o=t(26)(r),i="equestAnimationFrame";e.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],13:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t(26)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";e.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],14:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",s)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){x.push(t),h&&(b?b.then(a):v?v(a):(E=-E,R.data=E))}function a(){for(var t=0;t<x.length;t++)r([],x[t]);x.length&&(x=[])}function s(t,e){return e}function c(t,e){for(var n in t)e[n]=t[n];return e}t(6);var f=t("ee"),u=f.get("xhr"),d=t(26)(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,v=l.SI,w="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],x=[];e.exports=u;var g=window.XMLHttpRequest=function(t){var e=new p(t);try{u.emit("new-xhr",[e],e),e.addEventListener(w,o,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(c(p,g),g.prototype=p.prototype,d.inPlace(g.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),h){var b=m&&m.resolve();if(!v&&!m){var E=1,R=document.createTextNode(E);new h(a).observe(R,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===w||a()})},{}],15:[function(t,e,n){function r(){var t=window.NREUM,e=t.info.accountID||null,n=t.info.agentID||null,r=t.info.trustKey||null,i="btoa"in window&&"function"==typeof window.btoa;if(!e||!n||!i)return null;var a={v:[0,1],d:{ty:"Browser",ac:e,ap:n,id:o.generateCatId(),tr:o.generateCatId(),ti:Date.now()}};return r&&e!==r&&(a.d.tk=r),btoa(JSON.stringify(a))}var o=t(21);e.exports={generateTraceHeader:r}},{}],16:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<p;r++)t.removeEventListener(l[r],this.listener,!1);e.aborted||(n.duration=s.now()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==e.status&&(e.status=0):a(this,t),n.cbTime=this.cbTime,d.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime]))}}function o(t,e){var n=t.responseType;if("json"===n&&null!==e)return e;var r="arraybuffer"===n||"blob"===n||"json"===n?t.response:t.responseText;return v(r)}function i(t,e){var n=f(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}function a(t,e){t.params.status=e.status;var n=o(e,t.lastSize);if(n&&(t.metrics.rxSize=n),t.sameOrigin){var r=e.getResponseHeader("X-NewRelic-App-Data");r&&(t.params.cat=r.split(", ").pop())}t.loadCaptureCalled=!0}var s=t("loader");if(s.xhrWrappable){var c=t("handle"),f=t(17),u=t(15).generateTraceHeader,d=t("ee"),l=["load","error","abort","timeout"],p=l.length,h=t("id"),m=t(20),v=t(19),w=window.XMLHttpRequest;s.features.xhr=!0,t(14),d.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,e.loadCaptureCalled=!1,t.addEventListener("load",function(n){a(e,t)},!1),m&&(m>34||m<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),d.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),d.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid);var n=!1;if("init"in NREUM&&"distributed_tracing"in NREUM.init&&(n=!!NREUM.init.distributed_tracing.enabled),n&&this.sameOrigin){var r=u();r&&e.setRequestHeader("newrelic",r)}}),d.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var i=v(r);i&&(n.txSize=i)}this.startTime=s.now(),this.listener=function(t){try{"abort"!==t.type||o.loadCaptureCalled||(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{d.emit("internal-error",[n])}catch(r){}}};for(var a=0;a<p;a++)e.addEventListener(l[a],this.listener,!1)}),d.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),d.on("xhr-load-added",function(t,e){var n=""+h(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),d.on("xhr-load-removed",function(t,e){var n=""+h(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),d.on("addEventListener-end",function(t,e){e instanceof w&&"load"===t[0]&&d.emit("xhr-load-added",[t[1],t[2]],e)}),d.on("removeEventListener-end",function(t,e){e instanceof w&&"load"===t[0]&&d.emit("xhr-load-removed",[t[1],t[2]],e)}),d.on("fn-start",function(t,e,n){e instanceof w&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=s.now()))}),d.on("fn-end",function(t,e){this.xhrCbStart&&d.emit("xhr-cb-time",[s.now()-this.xhrCbStart,this.onload,e],e)})}},{}],17:[function(t,e,n){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("index-2.html")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!e.protocol||":"===e.protocol||e.protocol===n.protocol,a=e.hostname===document.domain&&e.port===n.port;return r.sameOrigin=i&&(!e.hostname||a),r}},{}],18:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[f.now()].concat(s(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(23),s=t(24),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,e){u[e]=o(l+e,!0,"api")}),u.addPageAction=o(l+"addPageAction",!0),u.setCurrentRouteName=o(l+"routeName",!0),e.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(p+"tracer",[f.now(),t,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],n),o)try{return e.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],n),t}finally{c.emit("fn-end",[f.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){h[e]=o(p+e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now(),!1,e])}},{}],19:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],20:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],21:[function(t,e,n){function r(){function t(){return e?15&e[n++]:16*Math.random()|0}var e=null,n=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&(e=r.getRandomValues(new Uint8Array(31)));for(var o,i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",a="",s=0;s<i.length;s++)o=i[s],"x"===o?a+=t().toString(16):"y"===o?(o=3&t()|8,a+=o.toString(16)):a+=o;return a}function o(){function t(){return e?15&e[n++]:16*Math.random()|0}var e=null,n=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&Uint8Array&&(e=r.getRandomValues(new Uint8Array(31)));for(var o=[],i=0;i<16;i++)o.push(t().toString(16));return o.join("")}e.exports={generateUuid:r,generateCatId:o}},{}],22:[function(t,e,n){function r(t,e){if(!o)return!1;if(t!==o)return!1;if(!e)return!0;if(!i)return!1;for(var n=i.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var s=navigator.userAgent,c=s.match(a);c&&s.indexOf("Chrome")===-1&&s.indexOf("Chromium")===-1&&(o="Safari",i=c[1])}e.exports={agent:o,version:i,match:r}},{}],23:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],24:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],25:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],26:[function(t,e,n){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(24),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;e.exports=function(t,e){function n(t,e,n,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof n?n(r,a):n||{}}catch(f){l([f,"",[r,a,o],s])}u(e+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(e+"err",[r,a,d],s),d}finally{u(e+"end",[r,a,c],s)}}return r(t)?t:(e||(e=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,e,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<e.length;c++)s=e[c],a=t[s],r(a)||(t[s]=n(a,f?s+o:o,i,s))}function u(n,r,o){if(!c||e){var i=c;c=!0;try{t.emit(n,r,o,e)}catch(a){l([a,n,r,o])}c=i}}function d(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){l([r])}for(var o in t)s.call(t,o)&&(e[o]=t[o]);return e}function l(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=o),n.inPlace=f,n.flag=a,n}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function n(n,r,o,i){if(!l.aborted||i){t&&t(n,r,o);for(var a=e(o),s=m(n),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[x[n]];return d&&d.push([g,n,r,a]),a}}function p(t,e){y[t]=m(t).concat(e)}function h(t,e){var n=y[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return y[t]||[]}function v(t){return d[t]=d[t]||o(n)}function w(t,e){f(t,function(t,n){e=e||"feature",x[n]=e,e in u||(u[e]=[])})}var y={},x={},g={on:p,addEventListener:p,removeEventListener:h,emit:n,get:v,listeners:m,context:e,buffer:w,abort:a,aborted:!1};return g}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var s="nr@context",c=t("gos"),f=t(23),u={},d={},l=e.exports=o();l.backlog=u},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!E++){var t=b.info=NREUM.info,e=p.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return u.abort();f(x,function(e,n){t[e]||(t[e]=n)}),c("mark",["onload",a()+b.offset],null,"api");var n=p.createElement("script");n.src="https://"+t.agent,e.parentNode.insertBefore(n,e)}}function o(){"complete"===p.readyState&&i()}function i(){c("mark",["domContent",a()+b.offset],null,"api")}function a(){return R.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-b.offset}var s=(new Date).getTime(),c=t("handle"),f=t(23),u=t("ee"),d=t(22),l=window,p=l.document,h="addEventListener",m="attachEvent",v=l.XMLHttpRequest,w=v&&v.prototype;NREUM.o={ST:setTimeout,SI:l.setImmediate,CT:clearTimeout,XHR:v,REQ:l.Request,EV:l.Event,PR:l.Promise,MO:l.MutationObserver};var y=""+location,x={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-spa-1123.min.js"},g=v&&w&&w[h]&&!/CriOS/.test(navigator.userAgent),b=e.exports={offset:s,now:a,origin:y,features:{},xhrWrappable:g,userAgent:d};t(18),p[h]?(p[h]("DOMContentLoaded",i,!1),l[h]("load",r,!1)):(p[m]("onreadystatechange",o),l[m]("onload",r)),c("mark",["firstbyte",s],null,"api");var E=0,R=t(25)},{}]},{},["loader",2,16,5,3,4]);</script>
	<title>About Us  |  Bloombreed Schools</title>
		<link rel="icon" href="uploaded/photos/default/favicon.png">
	<meta name="description" content="Bloombreed Schools (BBS) is a diverse, private, co-educational day school, offering an international curriculum, guided by British educational values and principles for Preschool students through Grade 12.">
	<meta name="keywords" content="About Us, Bloombreed Schools">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
			<link rel="canonical" href="about-us.php">
			<meta property="og:url" content="http://www.bloombreedschools.org/">
		<meta property="og:description" content="Bloombreed Schools (BBS) is a diverse, private, co-educational day school, offering an international curriculum, guided by British educational values and principles for Preschool students through Grade 12.">
            <meta property="og:image" content="http://www.bloombreedschools.org/img/logo.png">
            <meta property="og:image:secure_url" content="http://www.bloombreedschools.org/img/logo.png">
	<meta property="og:title" content="Bloombreed Schools  |  Striving Towards Excellence">
	<meta property="og:type" content="website">

	<link rel="stylesheet" media="all" href="static.finalsite.net/assets/application-77900acfe201cfa76bd4491aad6b102286acc086bdca1ab41c5ce47f3fdcea62.css" />

	

	<!-- CF Styles Manager -->
	<link href="styles92eb92eb.css?b" media="screen" rel="stylesheet">

		<link rel="stylesheet" media="all" href="uploaded/themes/default_18/maincd06cd06.css?1549034920" />

	<script src="static.finalsite.net/assets/in_layout_head-49a75163b68835cb4e0be81700e5027338e69a26cfafb834887c08dd9fb22057.js"></script>

		<link rel="stylesheet" href="use.typekit.net/aem6phf.css">                       

<meta name="format-detection" content="telephone=no">   

<!-- <script type="text/javascript">document.documentElement.className = document.documentElement + ' wf-loading';</script> -->

<!-- baidu analytics code -->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "hm.baidu.com/hm7b997b99.js?eda61a3a32c536a1f4b4d870488b3d7f";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<link rel="stylesheet" type="text/css" href="cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<script src="cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#003363"
    },
    "button": {
      "background": "#bb141b"
    }
  },
  "theme": "edgeless",
  "position": "bottom-right",
  "content": {
    "message": "This website uses cookies to ensure you get the best experience. By clicking below you accept using cookies. ",
    "href": "#"
  }
})});

</script>
<meta name="google-site-verification" content="DbvAch-hmHkLSrStejg_dAGJWPd1GGA1brmtkre37ks" />

<link rel="apple-touch-icon" href="uploaded/themes/default_16/images/ios_logo_57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="uploaded/themes/default_16/images/ios_logo_72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="uploaded/themes/default_16/images/ios_logo_114.png" />

<script type='text/javascript' src='platform-api.sharethis.com/js/sharethis.js#property=5c46717d058f100011a5ac93&product=inline-share-buttons' async='async'></script>
		

	<script type="text/javascript">
		(function(window) {
			window.FS.currentPage = {
				dateFormat: 'md',
				timeFormat: '12'
			};
		})(window);
	</script>

	
</head>

<!-- First cut end -->
<body data-logged-in="false" data-pageid="363" class="fsHasHeader fsHasMenu fsHasFooter fsHasOneColumnLayout fsSection363 landing-template-2 has-hero fsHasTheme2">

		<script>
			dataLayer = [{ 'schoolDomain': 'www.bloombreedschools.org/' }];
		</script>



<div id="fsPageWrapper">



				<!-- Second cut start -->
				<div id="fsMenu">
					<div class=" fsMenu fsStyleAutoclear" id="fsEl_493" >

			<div class="fsElement fsContainer search-menu-button-container" id="fsEl_1879" data-use-new="true" >

				<div class="fsElementContent">
			<div class="fsElement fsSearchElement fsSearchForm header-search" id="fsEl_1877"  >

				<div class="fsElementContent">
		<form action="http://www.bloombreedschools.org/" method="get" novalidate="novalidate"><label class="fsFieldLabel" for="fsSearchInput_1877">Search</label><div class="fsSearchElementKeyword"><input class="fsStyleSearchField fsStyleDefaultField" id="fsSearchInput_1877" name="q" placeholder="Search" required="required" type="text"><button aria-label="Clear" class="fsButtonClear fsStateHidden" type="reset"><span>Clear</span></button></div><button class="fsSearchElementSearchButton fsStyleUpdateButton" type="submit">Search</button></form>
	</div>


	</div>
	<div class="fsElement fsContent mobile-toggle" id="fsEl_1875" data-use-new="true" >

				<div class="fsElementContent">
			<div><button>Close Menu</button></div>


	</div>


	</div>



	</div>


	</div>
	<div class="fsElement fsNavigation fsList mobile-menu" id="fsEl_494" data-use-new="true" >

				<div class="fsElementContent">
		<nav><ul class="fsNavLevel1"><li class="fsNavParentPage fsNavCurrentPage"><a href="about-us.php">About Us</a><div class="fsNavPageInfo"><ul class="fsNavLevel2"><li><a href="about-us/directors-welcome.html">Principal's Welcome</a></li><li><a href="about-us/our-history.html">Our History</a></li><li><a href="about-us/our-mission-and-vision.html">Our Mission and Vision</a></li><li><a href="about-us/leadership.html">Leadership</a></li><li><a href="about-us/school-board.html">School Board</a></li><!--<li><a href="about-us/our-campuses.html">Our Campuses</a></li> --><!--<li class="fsNavParentPage"><a href="about-us/news-publications.html">Publications &amp; News</a><div class="fsNavPageInfo"><ul class="fsNavLevel3"><li><a href="about-us/news-publications/publications.html">Publications</a></li></ul></div></li> --></ul></div></li><li class="fsNavParentPage"><a href="admissions.html">Admissions</a><div class="fsNavPageInfo"><!-- <ul class="fsNavLevel2"><li><a href="admissions/visit-aisg.html">Visit AISG</a></li><li class="fsNavParentPage"><a href="admissions/apply-to-aisg.html">Apply To AISG</a><div class="fsNavPageInfo"><ul class="fsNavLevel3"><li><a href="admissions/apply-to-aisg/cny-holiday.html">CNY Holiday</a></li></ul></div></li><li><a href="admissions/tuition-and-fees.html">Tuition and Fees</a></li><li><a href="admissions/frequently-asked-questions.html">Frequently Asked Questions</a></li></ul> --></div></li><li class="fsNavParentPage"><a href="learning.html">Learning</a><div class="fsNavPageInfo"><ul class="fsNavLevel2"><li><a href="learning/preschool.html">Preschool</a></li><li><a href="learning/es.html">Elementary School</a></li><li><a href="learning/middle-school.html">Middle School</a></li><li><a href="learning/high-school.html">High School </a></li><li><a href="learning/the-innovation-initiative.html">The Innovation Initiative</a></li></ul></div></li><li class="fsNavParentPage"><a href="student-life.html">Student Life</a><div class="fsNavPageInfo"><ul class="fsNavLevel2"><!-- <li><a href="student-life/student-counseling.html">Student Counseling</a></li> --><!-- <li><a href="student-life/college-counseling.html">College Counseling</a></li> --><!-- <li><a href="student-life/community-service.html">Community Service</a></li> --><!-- <li><a href="student-life/child-protection.html">Child Protection</a></li> --></ul></div></li><li class="fsNavParentPage"><a href="student-life/child-protection.html">Child Protection</a><div class="fsNavPageInfo"><ul class="fsNavLevel2"><!-- <li><a href="aaa/the-arts.html">The Arts</a></li> --><!-- <li><a href="aaa/athletics.html">Athletics</a></li> --><!-- <li><a href="aaa/activities.html">Activities</a></li> --></ul></div></li><li class="fsNavParentPage"><!-- <a href="community.html">Community</a> --><div class="fsNavPageInfo"><ul class="fsNavLevel2"><!-- <li><a href="community/pta.html">Our PTA</a></li> --><!-- <li><a href="community/alumni.html">Alumni</a></li> --><!--<li><a href="community/giving-to-aisg.html">Giving to AISG</a></li> --></ul></div></li><li class="fsNavParentPage"><a href="http://bloombreedschools.vm-host.net/">Bloombreed EMIS</a><div class="fsNavPageInfo"><ul class="fsNavLevel2"><!-- <li><a href="careers/why-choose-aisg.html">Why Choose AISG?</a></li> --><!-- <li><a href="careers/current-opportunities.html">Current Opportunities</a></li> --></ul></div></li></ul></nav>
	</div>


	</div>
	<div class="fsElement fsNavigation fsList nav-utility-header-mobile" id="fsEl_1878" data-use-new="true" >

				<div class="fsElementContent">
		<nav><ul class="fsNavLevel1"><li class="fsNavParentPage language"><!--<a href="language.html">Language</a> --><div class="fsNavPageInfo"><ul class="fsNavLevel2"><!-- <li class="english"><a href="index.html">English</a></li><li class="chinese"><a href="index.html">Chinese</a></li></ul></div></li> -->
		<!-- <li class="fsNavParentPage ramsnet"><a href="login.html">myRamsnet</a><div class="fsNavPageInfo"><ul class="fsNavLevel2"><li><a href="ramsnet-student.html" target="_blank">Students</a></li><li><a href="ramsnet-parent.html" target="_blank">Parents</a></li><li><a href="ramsnet-employee.html" target="_blank">Employees</a></li></ul></div></li> -->
		<li class="fsNavParentPage quicklinks"><a href="calendar.html">QUICKLINKS</a><div class="fsNavPageInfo"><ul class="fsNavLevel2"><!-- <li><a href="calendar.html">Calendar</a></li> --><li><a href="https://bloombreedschools.educare.school/enquiry">Inquire</a></li><li><a href="https://bloombreedschools.educare.school/admission-form">Apply Now</a></li><!-- <li><a href="https://outlook.office.com/owa/">Outlook</a></li> --></ul></div></li><li class="contact-us"><a href="contact-us.html">CONTACT US</a></li><!-- <li class="search"><a href="search.html">SEARCH</a></li> --><li class="child-protection"><a href="student-life/child-protection.html">Child Protection</a></li></ul></nav>
	</div>


	</div>
	<!-- <div class="fsElement fsNavigation fsList footer-social-nav nav-social" id="fsEl_3886" data-use-new="true" >

				<div class="fsElementContent">
		<nav><ul class="fsNavLevel1"><li><a href="https://www.facebook.com/aisgzschool" target="_blank">Facebook</a></li><li><a href="https://www.instagram.com/aisgzram/" target="_blank">Instagram</a></li><li><a href="https://twitter.com/AISGZ" target="_blank">Twitter</a></li><li><a href="wechat-qr-code.html" target="_blank">WeChat</a></li></ul></nav>
	</div>


	</div> -->



</div>


				</div>
				</div>
				
	<!-- Second cut ends -->

			<!-- Last cut start -->
	
			<header id="fsHeader" class="fsHeader">
				<div class=" fsBanner fsStyleAutoclear" id="fsEl_7" >

			<div class="fsElement fsContainer header-container" id="fsEl_1767" data-use-new="true" >

				<div class="fsElementContent">
			<div class="fsElement fsEmbed" id="fsEl_19763" data-use-new="true" >

				<div class="fsElementContent">
		    <!-- Global site tag (gtag.js) - Google Analytics --> 
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112519897-1"></script> 
<script> 
window.dataLayer = window.dataLayer || []; 
function gtag(){dataLayer.push(arguments);} 
gtag('js', new Date());

gtag('config', 'UA-112519897-1'); 
</script>

	</div>


	</div>
	<div class="fsElement fsContent skip-link" id="fsEl_7734" data-use-new="true" >

				<div class="fsElementContent">
			<div><a href="#fsPageContent">Skip to Main Content</a></div>


	</div>


	</div>
	<div class="fsElement fsContent ramsnet-portals" id="fsEl_1958" data-use-new="true" >

				<div class="fsElementContent">
			

	</div>


	</div>
	<div class="fsElement fsContent site-info" id="fsEl_69" data-use-new="true" >

				<div class="fsElementContent">
			<div><a href="index.php">Bloombreed Schools</a></div>


	</div>


	</div>
	<div class="fsElement fsContainer nav-utility-header-container" id="fsEl_1822" data-use-new="true" >

				<div class="fsElementContent">
			<div class="fsElement fsNavigation fsList nav-utility-header" id="fsEl_1768" data-use-new="true" >

				<div class="fsElementContent">
		<nav><ul class="fsNavLevel1"><!-- <li class="fsNavParentPage language"><a href="language.html">Language</a><div class="fsNavPageInfo"><ul class="fsNavLevel2"><li class="english"><a href="index.html">English</a></li><li class="chinese"><a href="index.html">Chinese</a></li></ul></div></li> -->
		<li class="fsNavParentPage ramsnet"><!-- <a href="login.html">myRamsnet</a> --><!-- <div class="fsNavPageInfo"><ul class="fsNavLevel2"><li><a href="ramsnet-student.html" target="_blank">Students</a></li><li><a href="ramsnet-parent.html" target="_blank">Parents</a></li><li><a href="ramsnet-employee.html" target="_blank">Employees</a></li></ul></div> --></li>
		<li class="fsNavParentPage quicklinks"><a href="calendar.html">QUICKLINKS</a><div class="fsNavPageInfo"><ul class="fsNavLevel2"><!-- <li><a href="calendar.html">Calendar</a></li> --><li><a href="https://bloombreedschools.educare.school/enquiry">Inquire</a></li><li><a href="https://bloombreedschools.educare.school/admission-form">Apply Now</a></li><!-- <li><a href="https://outlook.office.com/owa/">Outlook</a></li> --></ul></div></li><li class="contact-us"><a href="contact-us.html">CONTACT US</a></li><!-- <li class="search"><a href="search.html">SEARCH</a></li> --><li class="child-protection"><a href="student-life/child-protection.html">Child Protection</a></li></ul></nav>
	</div>


	</div>
	<div class="fsElement fsSearchElement fsSearchForm header-search" id="fsEl_1873"  >

				<!-- <div class="fsElementContent">
		<form action="https://www.aisgz.org/search-results" method="get" novalidate="novalidate"><label class="fsFieldLabel" for="fsSearchInput_1873">Search</label><div class="fsSearchElementKeyword"><input class="fsStyleSearchField fsStyleDefaultField" id="fsSearchInput_1873" name="q" placeholder="Search" required="required" type="text"><button aria-label="Clear" class="fsButtonClear fsStateHidden" type="reset"><span>Clear</span></button></div><button class="fsSearchElementSearchButton fsStyleUpdateButton" type="submit">Search</button></form>
	</div> -->


	</div>



	</div>


	</div>
	<div class="fsElement fsContent mobile-toggle" id="fsEl_1874" data-use-new="true" >

				<div class="fsElementContent">
			<div><button>Toggle Menu</button></div>


	</div>


	</div>



	</div>


	</div>
	<div class="fsElement fsContainer navigation-container" id="fsEl_1769" data-use-new="true" >

				<div class="fsElementContent">
			<div class="fsElement fsNavigation fsList nav-main" id="fsEl_70" data-use-new="true" >

				<div class="fsElementContent">
		<nav><ul class="fsNavLevel1"><li class="fsNavParentPage fsNavCurrentPage"><a href="about-us.php">About Us</a><div class="fsNavPageInfo"><ul class="fsNavLevel2"><li><a href="about-us/directors-welcome.html">Principal's Welcome</a></li><li><a href="about-us/our-history.html">Our History</a></li><li><a href="about-us/our-mission-and-vision.html">Our Mission and Vision</a></li><li><a href="about-us/leadership.html">Leadership</a></li><!-- <li><a href="about-us/school-board.html">School Board</a></li> --><!--<li><a href="about-us/our-campuses.html">Our Campuses</a></li> --><!-- <li><a href="about-us/news-publications.html">Publications &amp; News</a></li> --></ul></div></li><li class="fsNavParentPage"><a href="admissions.html">Admissions</a><div class="fsNavPageInfo"><ul class="fsNavLevel2"><!-- <li><a href="admissions/visit-aisg.html">Visit AISG</a></li><li><a href="admissions/apply-to-aisg.html">Apply To AISG</a></li><li><a href="admissions/tuition-and-fees.html">Tuition and Fees</a></li><li><a href="admissions/frequently-asked-questions.html">Frequently Asked Questions</a></li></ul> --></div></li><li class="fsNavParentPage"><a href="learning.html">Learning</a><div class="fsNavPageInfo"><ul class="fsNavLevel2"><li><a href="learning/preschool.html">Preschool</a></li><li><a href="learning/es.html">Elementary School</a></li><li><a href="learning/middle-school.html">Middle School</a></li><li><a href="learning/high-school.html">High School </a></li><li><a href="learning/the-innovation-initiative.html">The Innovation Initiative</a></li></ul></div></li><li class="fsNavParentPage"><a href="student-life.html">Student Life</a><div class="fsNavPageInfo"><ul class="fsNavLevel2"><!-- <li><a href="student-life/student-counseling.html">Student Counseling</a></li> --><!-- <li><a href="student-life/college-counseling.html">College Counseling</a></li> --><!-- <li><a href="student-life/community-service.html">Community Service</a></li> --><!-- <li><a href="student-life/child-protection.html">Child Protection</a></li> --></ul></div></li><li class="fsNavParentPage"><a href="student-life/child-protection.html">Child Protection</a><div class="fsNavPageInfo"><ul class="fsNavLevel2"><!-- <li><a href="aaa/the-arts.html">The Arts</a></li> --><!-- <li><a href="aaa/athletics.html">Athletics</a></li> --><!-- <li><a href="aaa/activities.html">Activities</a></li> --></ul></div></li><li class="fsNavParentPage"><a href="http://bloombreedschools.vm-host.net/">Bloombreed EMIS</a><div class="fsNavPageInfo"><ul class="fsNavLevel2"><!-- <li><a href="community/pta.html">Our PTA</a></li> --><!-- <li><a href="community/alumni.html">Alumni</a></li> --><!-- <li><a href="community/giving-to-aisg.html">Giving to AISG</a></li> --></ul></div></li><li class="fsNavParentPage"><!-- <a href="careers.html">Careers</a> --><div class="fsNavPageInfo"><ul class="fsNavLevel2"><!--<li><a href="careers/why-choose-aisg.html">Why Choose AISG?</a></li> --><!--<li><a href="careers/current-opportunities.html">Current Opportunities</a></li> --></ul></div></li></ul></nav>
	</div>


	</div>



	</div>


	</div>
	<div class="fsElement fsNavigation fsBreadcrumb" id="fsEl_1798" data-use-new="true" >

				<div class="fsElementContent">
		<nav>
    <ul>
        <li>
			About Us
</li>

    </ul>
</nav>

	</div>


	</div>
	<section class="fsElement fsNavigation fsList nav-sub" id="fsEl_1799" data-use-new="true" >

				<header>
			<h2 class="fsElementTitle">In This Section</h2>
	</header>
	<div class="fsElementContent">
		<nav></nav>
	</div>


	</section>



</div>


			</header>
			
			
	<!-- Last cut end -->

		<div id="fsPageBodyWrapper" class="fsPageBodyWrapper">
			<div id="fsPageBody" class="fsStyleAutoclear fsPageBody">

				<main id="fsPageContent" class="fsPageContent">




							<div class="fsPageLayout fsLayout fsOneColumnLayout fsStyleAutoclear" id="fsEl_1411" data-use-new="true" >

				<div class=" fsDiv fsStyleAutoclear" id="fsEl_1412"  >

				<div class="fsElement fsResourceElement fsSingleItem hero-banner hero-image" id="fsEl_10519" data-use-new="true" data-source-element-id="10519" data-source-page-id="363" >

				<div class="fsElementContent">
		<article class="fsResource fsResourceTypeImage"><figure><picture><img alt="Students walking together" data-aspect-ratio="0.6666666666666666" data-image-sizes="[{%22url%22:%22https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_1/v1530812548/aisgzorg/qn4z9j3aqt2cawupptxp/hero-about-us.jpg%22,%22width%22:256},{%22url%22:%22https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_2/v1530812548/aisgzorg/qn4z9j3aqt2cawupptxp/hero-about-us.jpg%22,%22width%22:512},{%22url%22:%22https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_3/v1530812548/aisgzorg/qn4z9j3aqt2cawupptxp/hero-about-us.jpg%22,%22width%22:800},{%22url%22:%22https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_4/v1530812548/aisgzorg/qn4z9j3aqt2cawupptxp/hero-about-us.jpg%22,%22width%22:1200},{%22url%22:%22https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_5/v1530812548/aisgzorg/qn4z9j3aqt2cawupptxp/hero-about-us.jpg%22,%22width%22:1600},{%22url%22:%22https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_6/v1530812548/aisgzorg/qn4z9j3aqt2cawupptxp/hero-about-us.jpg%22,%22width%22:2200}]" data-resource-title="hero-about-us.jpg" data-resource-uuid="2ef2a28b-5cd8-4c5c-aa2d-27c333ae78f9"></picture></figure></article>
	</div>


	</div>
	<section class="fsElement fsContainer" id="fsEl_9435" data-use-new="true" >

				<header>
			<h2 class="fsElementTitle">Row 1</h2>
	</header>
	<div class="fsElementContent">
			<div class="fsElement fsContent the-difference" id="fsEl_9436" data-use-new="true" >

				<header>
			<div class="fsElementHeaderContent">
				<h2><span class="fs_style_45"><strong>A Future-Ready</strong> Learning Community</span></h2>

			</div>
	</header>
	<div class="fsElementContent">
			

	</div>


	</div>
	<div class="fsElement fsContent" id="fsEl_9437" data-use-new="true" >

				<div class="fsElementContent">
			<h5>Our mission is one that places great importance on the concept of being &ldquo;future-ready.&rdquo;</h5>

<p>BMS exists solely to &ldquo;nurture future-ready individuals to aspire, achieve, and contribute.&rdquo; We prepare our students&nbsp;by equipping them with 21st Century innovation skills, with an explicit focus on creativity, critical thinking, communication, collaboration, and resilience. It&rsquo;s important for students to be equipped with the skills they need to thrive in an ever-changing environment.&nbsp;</p>

<p>When the future looks so very different from what it is today, being prepared for it requires forward thinking and a robust understanding of current trends in a multitude of different areas.&nbsp;What impact will technology have on schooling? What impact will the future of employment have on education? Just how will we prepare balanced global citizens with compassionate hearts in an increasingly stressful, secular, internationalized, technology-driven and fast changing world?</p>

<p>Our ambition is to offer the kind of learning that will prepare each student for his or her future.</p>


	</div>


	</div>



	</div>


	</section>
	
	<!-- 
	<section class="fsElement fsContainer" id="fsEl_10344" data-use-new="true" >
	

				<header>
			<h2 class="fsElementTitle">Row 2</h2>
	</header>
	<div class="fsElementContent">
			<div class="fsElement fsLayout fsThreeColumnLayout fsStyleAutoclear" id="fsEl_9648" data-use-new="true" >

						<div class=" fsDiv fsStyleColumn fsStyleColumn-1 fsStyleAutoclear" id="fsEl_9649"  >

				<div class="fsElement fsContent" id="fsEl_9650" data-use-new="true" >

				<header>
			<div class="fsElementHeaderContent">
				<div style="text-align:center">
<figure class="fsImage" style="display:inline-block"><a data-page-name="Director's Welcome" href="about-us/directors-welcome.html" title="Director's Welcome Message"><picture><img alt="icon for directors welcome message" data-image-sizes="[{%22url%22:%22https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_1/v1530809932/aisgzorg/q2zwqffmvug2fn57y251/Directors-Msg-icon-text.png%22,%22width%22:256},{%22url%22:%22https://resources.finalsite.net/images/f_auto,q_auto/v1530809932/aisgzorg/q2zwqffmvug2fn57y251/Directors-Msg-icon-text.png%22,%22width%22:500}]" data-resource-description="" data-resource-filename="Directors-Msg-icon-text.png" data-resource-uuid="2ee6a029-9447-4ec2-9639-8a55984e8e0b" id="" src="#" style="" title="Director's Welcome" width="250"></picture></a></figure>
</div>

			</div>
	</header>
	<div class="fsElementContent">
			

	</div>


	</div>




	</div>
	<div class=" fsDiv fsStyleColumn fsStyleColumn-2 fsStyleAutoclear" id="fsEl_9651"  >

				<div class="fsElement fsContent" id="fsEl_9652" data-use-new="true" >

				<header>
			<div class="fsElementHeaderContent">
				<div style="text-align:center">
<figure class="fsImage" style="display:inline-block"><a data-page-name="Our History" href="about-us/our-history.html" title="Our History"><picture><img alt="icon for our history" data-image-sizes="[{%22url%22:%22https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_1/v1530809938/aisgzorg/se2hcghxry9jm7xmennn/Our-History-icon-text.png%22,%22width%22:256},{%22url%22:%22https://resources.finalsite.net/images/f_auto,q_auto/v1530809938/aisgzorg/se2hcghxry9jm7xmennn/Our-History-icon-text.png%22,%22width%22:500}]" data-resource-description="" data-resource-filename="Our-History-icon-text.png" data-resource-uuid="550beccc-307d-4b06-ab6e-c20062b32221" id="" src="#" style="" title="Our History" width="250"></picture></a></figure>
</div>

			</div>
	</header>
	<div class="fsElementContent">
			

	</div>


	</div>




	</div>
	<div class=" fsDiv fsStyleColumn fsStyleColumn-3 fsStyleColumn-last fsStyleAutoclear" id="fsEl_9653"  >

				<div class="fsElement fsContent" id="fsEl_9654" data-use-new="true" >

				<header>
			<div class="fsElementHeaderContent">
				<div style="text-align:center">
<figure class="fsImage" style="display:inline-block"><a data-page-name="Our Mission and Vision" href="about-us/our-mission-and-vision.html" title="Strategic Vision"><picture><img alt="icon for strategic vision" data-image-sizes="[{%22url%22:%22https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_1/v1530809939/aisgzorg/mfrtrjmj0p8do5wjkvfp/Stategic-Vision-icon-text.png%22,%22width%22:256},{%22url%22:%22https://resources.finalsite.net/images/f_auto,q_auto/v1530809939/aisgzorg/mfrtrjmj0p8do5wjkvfp/Stategic-Vision-icon-text.png%22,%22width%22:500}]" data-resource-description="" data-resource-filename="Stategic-Vision-icon-text.png" data-resource-uuid="8105e6d8-9667-4977-bd72-15fbb9cbfd5c" id="" src="#" title="Strategic Vision" width="250"></picture></a></figure>
</div>

			</div>
	</header>
	<div class="fsElementContent">
			

	</div>


	</div>




	</div>





	</div>
	<div class="fsElement fsLayout fsThreeColumnLayout fsStyleAutoclear" id="fsEl_9655" data-use-new="true" >

						<div class=" fsDiv fsStyleColumn fsStyleColumn-1 fsStyleAutoclear" id="fsEl_9656"  >

				<div class="fsElement fsContent" id="fsEl_9657" data-use-new="true" >

				<header>
			<div class="fsElementHeaderContent">
				<div style="text-align:center">
<figure class="fsImage" style="display:inline-block"><a data-page-name="Leadership" href="about-us/leadership.html" title="Leadership"><picture><img alt="icon for leadership" data-image-sizes="[{%22url%22:%22https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_1/v1530809936/aisgzorg/k5xqgxhhdeyb98i6zxqg/Leadership-icon-text.png%22,%22width%22:256},{%22url%22:%22https://resources.finalsite.net/images/f_auto,q_auto/v1530809936/aisgzorg/k5xqgxhhdeyb98i6zxqg/Leadership-icon-text.png%22,%22width%22:500}]" data-resource-description="" data-resource-filename="Leadership-icon-text.png" data-resource-uuid="1334f914-77df-442f-bfc5-fc27367243db" id="" src="#" title="Leadership" width="250"></picture></a></figure>
</div>

			</div>
	</header>
	<div class="fsElementContent">
			

	</div>


	</div>




	</div>
	<div class=" fsDiv fsStyleColumn fsStyleColumn-2 fsStyleAutoclear" id="fsEl_9658"  >

				<div class="fsElement fsContent" id="fsEl_9659" data-use-new="true" >

				<header>
			<div class="fsElementHeaderContent">
				<div style="text-align:center">
<figure class="fsImage" style="display:inline-block"><a data-page-name="School Board" href="about-us/school-board.html" title="School Board"><picture><img alt="icon for school board" data-image-sizes="[{%22url%22:%22https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_1/v1530809938/aisgzorg/kvdudfejrujvjgws51qe/School-Board-icon-text.png%22,%22width%22:256},{%22url%22:%22https://resources.finalsite.net/images/f_auto,q_auto/v1530809938/aisgzorg/kvdudfejrujvjgws51qe/School-Board-icon-text.png%22,%22width%22:500}]" data-resource-description="" data-resource-filename="School-Board-icon-text.png" data-resource-uuid="0481d434-6d4c-41d4-ab23-90a5b7e6efae" id="" src="#" title="School Board Information" width="250"></picture></a></figure>
</div>

			</div>
	</header>
	<div class="fsElementContent">
			

	</div>


	</div>




	</div>
	<div class=" fsDiv fsStyleColumn fsStyleColumn-3 fsStyleColumn-last fsStyleAutoclear" id="fsEl_9660"  >

				<div class="fsElement fsContent" id="fsEl_9661" data-use-new="true" >

				<header>
			<div class="fsElementHeaderContent">
				<div style="text-align:center">
<figure class="fsImage" style="display:inline-block"><a data-page-name="Our Campuses" href="about-us/our-campuses.html" title="Our Campuses"><picture><img alt="icons for our campus" data-image-sizes="[{%22url%22:%22https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_1/v1530809937/aisgzorg/rloalo1so54ru9z1mcmx/Our-Campus-icon-text.png%22,%22width%22:256},{%22url%22:%22https://resources.finalsite.net/images/f_auto,q_auto/v1530809937/aisgzorg/rloalo1so54ru9z1mcmx/Our-Campus-icon-text.png%22,%22width%22:500}]" data-resource-description="" data-resource-filename="Our-Campus-icon-text.png" data-resource-uuid="80e91ef7-2450-4e63-a293-4722fc1aa4e0" id="" src="#" title="Our Campus" width="250"></picture></a></figure>
</div>

			</div>
	</header>
	<div class="fsElementContent">
			

	</div>


	</div>




	</div>





	</div>



	</div>


	</section>
	
	-->
	
	<section class="fsElement fsContainer" id="fsEl_9445" data-use-new="true" >

				<header>
			<h2 class="fsElementTitle">Row 3</h2>
	</header>
	<div class="fsElementContent">
			<div class="fsElement fsContent" id="fsEl_9446" data-use-new="true" >

				<div class="fsElementContent">
			<p>&nbsp;</p>

<p><span class="fs_style_43">Why BMS?</span></p>

<h4 style="text-align: center;">We strive to design educational experiences and environments that will ensure our students are ready to lead successful, well-balanced, happy lives.</h4>

<p>&nbsp;</p>


	</div>


	</div>
	
	
	<!--<div class="fsElement fsPostElement fsSlideshow testimonial-slider fsThumbnailRectangle fsThumbnailMedium fsItemCount_7 fsSlideshowHorizontal" id="fsEl_9447" data-use-new="true" >

				<div class="fsElementContent">
		


<div class="fsElementSlideshow"
     aria-label="Slideshow"
	 data-adaptive-height="true"
	 data-autoplay="false"
	 data-autoplay-speed="0"
	 data-arrows="true"
	 data-dots="true"
	 data-fade="false"
	 data-slides-to-show="1"
	 data-vertical="false">


			
				
<article class="fsStyleAutoclear fsBoard-10" data-post-id="41" data-authenticated-comments="true" aria-labelledby="fsArticle_9447_41">

	<div class="fsThumbnail fsPostLink"><div data-aspect-ratio="0.6666666666666666" data-image-sizes="[{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_1/v1526938251/aisgzorg/ot0uuva2jg1jmpqlcjvh/the-aisg-difference-2.jpg&quot;,&quot;width&quot;:256},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_2/v1526938251/aisgzorg/ot0uuva2jg1jmpqlcjvh/the-aisg-difference-2.jpg&quot;,&quot;width&quot;:512},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_3/v1526938251/aisgzorg/ot0uuva2jg1jmpqlcjvh/the-aisg-difference-2.jpg&quot;,&quot;width&quot;:800},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_4/v1526938251/aisgzorg/ot0uuva2jg1jmpqlcjvh/the-aisg-difference-2.jpg&quot;,&quot;width&quot;:1200},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_5/v1526938251/aisgzorg/ot0uuva2jg1jmpqlcjvh/the-aisg-difference-2.jpg&quot;,&quot;width&quot;:1600},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto/v1526938251/aisgzorg/ot0uuva2jg1jmpqlcjvh/the-aisg-difference-2.jpg&quot;,&quot;width&quot;:1800}]" class="fsCroppedImage" title="picture of the AISG gymnasium"><img data-aspect-ratio="0.6666666666666666" data-image-sizes="[{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_1/v1526938251/aisgzorg/ot0uuva2jg1jmpqlcjvh/the-aisg-difference-2.jpg&quot;,&quot;width&quot;:256},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_2/v1526938251/aisgzorg/ot0uuva2jg1jmpqlcjvh/the-aisg-difference-2.jpg&quot;,&quot;width&quot;:512},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_3/v1526938251/aisgzorg/ot0uuva2jg1jmpqlcjvh/the-aisg-difference-2.jpg&quot;,&quot;width&quot;:800},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_4/v1526938251/aisgzorg/ot0uuva2jg1jmpqlcjvh/the-aisg-difference-2.jpg&quot;,&quot;width&quot;:1200},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_5/v1526938251/aisgzorg/ot0uuva2jg1jmpqlcjvh/the-aisg-difference-2.jpg&quot;,&quot;width&quot;:1600},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto/v1526938251/aisgzorg/ot0uuva2jg1jmpqlcjvh/the-aisg-difference-2.jpg&quot;,&quot;width&quot;:1800}]" alt="picture of the AISG gymnasium" class="fsStyleSROnly"></img></div></div>


		<div class="fsTitle" id="fsArticle_9447_41">
				Facilities
		</div>

	





		<div class="fsSummary">
			<p>Our purpose-built facilities include a brand new, state-of-the-art theater, a cutting-edge innovation lab, two modern gyms, and creative multimedia spaces.</p>

		</div>




</article>

			
			
				
<article class="fsStyleAutoclear fsBoard-10" data-post-id="40" data-authenticated-comments="true" aria-labelledby="fsArticle_9447_40">

	<div class="fsThumbnail fsPostLink"><div data-aspect-ratio="0.6666666666666666" data-image-sizes="[{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_1/v1526175518/aisgzorg/sanffnhzvlrybv9uzjfo/Makey_Makey_Technology2_1.jpg&quot;,&quot;width&quot;:256},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_2/v1526175518/aisgzorg/sanffnhzvlrybv9uzjfo/Makey_Makey_Technology2_1.jpg&quot;,&quot;width&quot;:512},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_3/v1526175518/aisgzorg/sanffnhzvlrybv9uzjfo/Makey_Makey_Technology2_1.jpg&quot;,&quot;width&quot;:800},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_4/v1526175518/aisgzorg/sanffnhzvlrybv9uzjfo/Makey_Makey_Technology2_1.jpg&quot;,&quot;width&quot;:1200},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_5/v1526175518/aisgzorg/sanffnhzvlrybv9uzjfo/Makey_Makey_Technology2_1.jpg&quot;,&quot;width&quot;:1600},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_6/v1526175518/aisgzorg/sanffnhzvlrybv9uzjfo/Makey_Makey_Technology2_1.jpg&quot;,&quot;width&quot;:2200}]" class="fsCroppedImage" title="girl connecting circuits on makey board"><img data-aspect-ratio="0.6666666666666666" data-image-sizes="[{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_1/v1526175518/aisgzorg/sanffnhzvlrybv9uzjfo/Makey_Makey_Technology2_1.jpg&quot;,&quot;width&quot;:256},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_2/v1526175518/aisgzorg/sanffnhzvlrybv9uzjfo/Makey_Makey_Technology2_1.jpg&quot;,&quot;width&quot;:512},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_3/v1526175518/aisgzorg/sanffnhzvlrybv9uzjfo/Makey_Makey_Technology2_1.jpg&quot;,&quot;width&quot;:800},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_4/v1526175518/aisgzorg/sanffnhzvlrybv9uzjfo/Makey_Makey_Technology2_1.jpg&quot;,&quot;width&quot;:1200},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_5/v1526175518/aisgzorg/sanffnhzvlrybv9uzjfo/Makey_Makey_Technology2_1.jpg&quot;,&quot;width&quot;:1600},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_6/v1526175518/aisgzorg/sanffnhzvlrybv9uzjfo/Makey_Makey_Technology2_1.jpg&quot;,&quot;width&quot;:2200}]" alt="girl connecting circuits on makey board" class="fsStyleSROnly"></img></div></div>


		<div class="fsTitle" id="fsArticle_9447_40">
				Innovation and Creativity
		</div>

	





		<div class="fsSummary">
			<p>Advancements in our technology programs help our students develop the skills they need to adapt and thrive in an ever-changing, digital world.</p>

		</div>




</article>

			
			
				
<article class="fsStyleAutoclear fsBoard-10" data-post-id="39" data-authenticated-comments="true" aria-labelledby="fsArticle_9447_39">

	<div class="fsThumbnail fsPostLink"><div data-aspect-ratio="0.7998207349865551" data-image-sizes="[{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_1/v1522949667/aisgzorg/aacvs6lapbr6fzb4ojza/hero-learning-student-programs-high-school.jpg&quot;,&quot;width&quot;:256},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_2/v1522949667/aisgzorg/aacvs6lapbr6fzb4ojza/hero-learning-student-programs-high-school.jpg&quot;,&quot;width&quot;:512},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_3/v1522949667/aisgzorg/aacvs6lapbr6fzb4ojza/hero-learning-student-programs-high-school.jpg&quot;,&quot;width&quot;:800},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_4/v1522949667/aisgzorg/aacvs6lapbr6fzb4ojza/hero-learning-student-programs-high-school.jpg&quot;,&quot;width&quot;:1200},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_5/v1522949667/aisgzorg/aacvs6lapbr6fzb4ojza/hero-learning-student-programs-high-school.jpg&quot;,&quot;width&quot;:1600},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_6/v1522949667/aisgzorg/aacvs6lapbr6fzb4ojza/hero-learning-student-programs-high-school.jpg&quot;,&quot;width&quot;:2200}]" class="fsCroppedImage" title="high school students throwing their graduation caps "><img data-aspect-ratio="0.7998207349865551" data-image-sizes="[{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_1/v1522949667/aisgzorg/aacvs6lapbr6fzb4ojza/hero-learning-student-programs-high-school.jpg&quot;,&quot;width&quot;:256},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_2/v1522949667/aisgzorg/aacvs6lapbr6fzb4ojza/hero-learning-student-programs-high-school.jpg&quot;,&quot;width&quot;:512},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_3/v1522949667/aisgzorg/aacvs6lapbr6fzb4ojza/hero-learning-student-programs-high-school.jpg&quot;,&quot;width&quot;:800},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_4/v1522949667/aisgzorg/aacvs6lapbr6fzb4ojza/hero-learning-student-programs-high-school.jpg&quot;,&quot;width&quot;:1200},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_5/v1522949667/aisgzorg/aacvs6lapbr6fzb4ojza/hero-learning-student-programs-high-school.jpg&quot;,&quot;width&quot;:1600},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_6/v1522949667/aisgzorg/aacvs6lapbr6fzb4ojza/hero-learning-student-programs-high-school.jpg&quot;,&quot;width&quot;:2200}]" alt="high school students throwing their graduation caps " class="fsStyleSROnly"></img></div></div>


		<div class="fsTitle" id="fsArticle_9447_39">
				University Matriculation
		</div>

	





		<div class="fsSummary">
			<p>Our class of 2017 received offers from more than 107 universities, and will be attending over 40 top universities in more than 13 countries.</p>

		</div>




</article>

			
			
				
<article class="fsStyleAutoclear fsBoard-10" data-post-id="38" data-authenticated-comments="true" aria-labelledby="fsArticle_9447_38">

	<div class="fsThumbnail fsPostLink"><div data-aspect-ratio="0.66625" data-image-sizes="[{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_1/v1534791602/aisgzorg/odl6pztle898u8awxnzn/difference.jpg&quot;,&quot;width&quot;:256},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_2/v1534791602/aisgzorg/odl6pztle898u8awxnzn/difference.jpg&quot;,&quot;width&quot;:512},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_3/v1534791602/aisgzorg/odl6pztle898u8awxnzn/difference.jpg&quot;,&quot;width&quot;:800},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_4/v1534791602/aisgzorg/odl6pztle898u8awxnzn/difference.jpg&quot;,&quot;width&quot;:1200},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto/v1534791602/aisgzorg/odl6pztle898u8awxnzn/difference.jpg&quot;,&quot;width&quot;:1600}]" class="fsCroppedImage" title="Picture of students taking a bow"><img data-aspect-ratio="0.66625" data-image-sizes="[{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_1/v1534791602/aisgzorg/odl6pztle898u8awxnzn/difference.jpg&quot;,&quot;width&quot;:256},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_2/v1534791602/aisgzorg/odl6pztle898u8awxnzn/difference.jpg&quot;,&quot;width&quot;:512},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_3/v1534791602/aisgzorg/odl6pztle898u8awxnzn/difference.jpg&quot;,&quot;width&quot;:800},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_4/v1534791602/aisgzorg/odl6pztle898u8awxnzn/difference.jpg&quot;,&quot;width&quot;:1200},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto/v1534791602/aisgzorg/odl6pztle898u8awxnzn/difference.jpg&quot;,&quot;width&quot;:1600}]" alt="Picture of students taking a bow" class="fsStyleSROnly"></img></div></div>


		<div class="fsTitle" id="fsArticle_9447_38">
				Truly International Environment
		</div>

	





		<div class="fsSummary">
			<p>With over 1000 students and 50+ nationalities, we embrace multiculturalism, inclusiveness, and global-mindedness.</p>

		</div>




</article>

			
			
				
<article class="fsStyleAutoclear fsBoard-10" data-post-id="37" data-authenticated-comments="true" aria-labelledby="fsArticle_9447_37">

	<div class="fsThumbnail fsPostLink"><div data-aspect-ratio="0.6666666666666666" data-image-sizes="[{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_1/v1526938252/aisgzorg/k4khcj9mtckn379usumq/the-aisg-difference-1.jpg&quot;,&quot;width&quot;:256},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_2/v1526938252/aisgzorg/k4khcj9mtckn379usumq/the-aisg-difference-1.jpg&quot;,&quot;width&quot;:512},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_3/v1526938252/aisgzorg/k4khcj9mtckn379usumq/the-aisg-difference-1.jpg&quot;,&quot;width&quot;:800},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_4/v1526938252/aisgzorg/k4khcj9mtckn379usumq/the-aisg-difference-1.jpg&quot;,&quot;width&quot;:1200},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_5/v1526938252/aisgzorg/k4khcj9mtckn379usumq/the-aisg-difference-1.jpg&quot;,&quot;width&quot;:1600},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto/v1526938252/aisgzorg/k4khcj9mtckn379usumq/the-aisg-difference-1.jpg&quot;,&quot;width&quot;:1800}]" class="fsCroppedImage" title="picture of a teacher helping a student"><img data-aspect-ratio="0.6666666666666666" data-image-sizes="[{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_1/v1526938252/aisgzorg/k4khcj9mtckn379usumq/the-aisg-difference-1.jpg&quot;,&quot;width&quot;:256},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_2/v1526938252/aisgzorg/k4khcj9mtckn379usumq/the-aisg-difference-1.jpg&quot;,&quot;width&quot;:512},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_3/v1526938252/aisgzorg/k4khcj9mtckn379usumq/the-aisg-difference-1.jpg&quot;,&quot;width&quot;:800},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_4/v1526938252/aisgzorg/k4khcj9mtckn379usumq/the-aisg-difference-1.jpg&quot;,&quot;width&quot;:1200},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_5/v1526938252/aisgzorg/k4khcj9mtckn379usumq/the-aisg-difference-1.jpg&quot;,&quot;width&quot;:1600},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto/v1526938252/aisgzorg/k4khcj9mtckn379usumq/the-aisg-difference-1.jpg&quot;,&quot;width&quot;:1800}]" alt="picture of a teacher helping a student" class="fsStyleSROnly"></img></div></div>


		<div class="fsTitle" id="fsArticle_9447_37">
				World-Class High Caliber Faculty
		</div>

	





		<div class="fsSummary">
			<p>We invest in the most highly qualified and experienced teachers and offer smaller class sizes to create a more personal relationship between teachers and students.</p>

		</div>




</article>

			
			
				
<article class="fsStyleAutoclear fsBoard-10" data-post-id="36" data-authenticated-comments="true" aria-labelledby="fsArticle_9447_36">

	<div class="fsThumbnail fsPostLink"><div data-aspect-ratio="0.6666666666666666" data-image-sizes="[{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_1/v1526938249/aisgzorg/papepduzwonuabewgimj/the-aisg-difference.jpg&quot;,&quot;width&quot;:256},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_2/v1526938249/aisgzorg/papepduzwonuabewgimj/the-aisg-difference.jpg&quot;,&quot;width&quot;:512},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_3/v1526938249/aisgzorg/papepduzwonuabewgimj/the-aisg-difference.jpg&quot;,&quot;width&quot;:800},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_4/v1526938249/aisgzorg/papepduzwonuabewgimj/the-aisg-difference.jpg&quot;,&quot;width&quot;:1200},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_5/v1526938249/aisgzorg/papepduzwonuabewgimj/the-aisg-difference.jpg&quot;,&quot;width&quot;:1600},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto/v1526938249/aisgzorg/papepduzwonuabewgimj/the-aisg-difference.jpg&quot;,&quot;width&quot;:1800}]" class="fsCroppedImage" title=" picture of a teacher reading a book to students"><img data-aspect-ratio="0.6666666666666666" data-image-sizes="[{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_1/v1526938249/aisgzorg/papepduzwonuabewgimj/the-aisg-difference.jpg&quot;,&quot;width&quot;:256},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_2/v1526938249/aisgzorg/papepduzwonuabewgimj/the-aisg-difference.jpg&quot;,&quot;width&quot;:512},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_3/v1526938249/aisgzorg/papepduzwonuabewgimj/the-aisg-difference.jpg&quot;,&quot;width&quot;:800},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_4/v1526938249/aisgzorg/papepduzwonuabewgimj/the-aisg-difference.jpg&quot;,&quot;width&quot;:1200},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_5/v1526938249/aisgzorg/papepduzwonuabewgimj/the-aisg-difference.jpg&quot;,&quot;width&quot;:1600},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto/v1526938249/aisgzorg/papepduzwonuabewgimj/the-aisg-difference.jpg&quot;,&quot;width&quot;:1800}]" alt=" picture of a teacher reading a book to students" class="fsStyleSROnly"></img></div></div>


		<div class="fsTitle" id="fsArticle_9447_36">
				Rich Heritage
		</div>

	





		<div class="fsSummary">
			<p>Over the course of our 37-year history, we have established an outstanding reputation for academic, cultural and social contributions.</p>

		</div>




</article>

			
</div>

	<button class="fsPrevButton fsLeftArrow">&lt;</button>
	<button class="fsNextButton fsRightArrow">&gt;</button>


	</div>


	</div> -->
	<!-- <div class="fsElement fsContent" id="fsEl_11471" data-use-new="true" >

				<div class="fsElementContent">
			<p>&nbsp;</p>

<p>&nbsp;</p>


	</div>


	</div> -->
	<!-- <div class="fsElement fsLayout fsTwoColumnLayout image-button-container fsStyleAutoclear" id="fsEl_11466" data-use-new="true" >

				<header>
			<div class="fsElementHeaderContent">
				<h1 style="text-align: center;">&nbsp;</h1>

<h1 style="text-align: center;"><span class="fs_style_43">Learn More</span></h1>

			</div>
	</header>
			<div class=" fsDiv fsStyleColumn fsStyleColumn-1 fsStyleAutoclear" id="fsEl_11467"  >

				<section class="fsElement fsContent image-button" id="fsEl_11468" data-use-new="true" data-image-sizes="[{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_1/v1522949646/aisgzorg/hz7b1nbiyr7pr6bgbrf8/hero-about-us-AISG-difference.jpg&quot;,&quot;width&quot;:256},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_2/v1522949646/aisgzorg/hz7b1nbiyr7pr6bgbrf8/hero-about-us-AISG-difference.jpg&quot;,&quot;width&quot;:512},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_3/v1522949646/aisgzorg/hz7b1nbiyr7pr6bgbrf8/hero-about-us-AISG-difference.jpg&quot;,&quot;width&quot;:800},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_4/v1522949646/aisgzorg/hz7b1nbiyr7pr6bgbrf8/hero-about-us-AISG-difference.jpg&quot;,&quot;width&quot;:1200},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_5/v1522949646/aisgzorg/hz7b1nbiyr7pr6bgbrf8/hero-about-us-AISG-difference.jpg&quot;,&quot;width&quot;:1600},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_6/v1522949646/aisgzorg/hz7b1nbiyr7pr6bgbrf8/hero-about-us-AISG-difference.jpg&quot;,&quot;width&quot;:2200}]" data-aspect-ratio="0.6666666666666666" >

				<header>
			<h2 class="fsElementTitle">Student Wellbeing</h2>
			<div class="fsElementHeaderContent">
				<p><a data-page-name="Student Wellbeing" href="student-life/student-counseling.html" title="Student Wellbeing">Student Wellbeing</a></p>

			</div>
	</header>
	<div class="fsElementContent">
			

	</div>


	</section>




	</div>
	<div class=" fsDiv fsStyleColumn fsStyleColumn-2 fsStyleColumn-last fsStyleAutoclear" id="fsEl_11469"  >

				<section class="fsElement fsContent image-button" id="fsEl_11470" data-use-new="true" data-image-sizes="[{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_1/v1527839021/aisgzorg/n4xfcc1lopzuer9prudw/SY1718_PRESCHOOL_ELEMENTARY2.jpg&quot;,&quot;width&quot;:256},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_2/v1527839021/aisgzorg/n4xfcc1lopzuer9prudw/SY1718_PRESCHOOL_ELEMENTARY2.jpg&quot;,&quot;width&quot;:512},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_3/v1527839021/aisgzorg/n4xfcc1lopzuer9prudw/SY1718_PRESCHOOL_ELEMENTARY2.jpg&quot;,&quot;width&quot;:800},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_4/v1527839021/aisgzorg/n4xfcc1lopzuer9prudw/SY1718_PRESCHOOL_ELEMENTARY2.jpg&quot;,&quot;width&quot;:1200},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_5/v1527839021/aisgzorg/n4xfcc1lopzuer9prudw/SY1718_PRESCHOOL_ELEMENTARY2.jpg&quot;,&quot;width&quot;:1600},{&quot;url&quot;:&quot;https://resources.finalsite.net/images/f_auto,q_auto,t_image_size_6/v1527839021/aisgzorg/n4xfcc1lopzuer9prudw/SY1718_PRESCHOOL_ELEMENTARY2.jpg&quot;,&quot;width&quot;:2200}]" data-aspect-ratio="0.6666666666666666" >

				<header>
			<h2 class="fsElementTitle">Student Life</h2>
			<div class="fsElementHeaderContent">
				<p><a data-page-name="Student Life" href="student-life.html" title="Student Life">Optional Link</a></p>

			</div>
	</header>
	<div class="fsElementContent">
			

	</div>


	</section>




	</div>





	</div> -->



	</div>


	</section> 
	<div class="fsElement fsContent language-toggle chinese" id="fsEl_11649" data-use-new="true" >

				<div class="fsElementContent">
			<pre data-fulltext="" data-placeholder="Translation" dir="ltr" id="tw-target-text">
<a data-page-name="About Us clone" href="fs/pages/826.html" title="Switch to Chinese language">Chinese - 中文</a></pre>


	</div>


	</div>




	</div>




	</div>



				</main>
			</div>
		</div>

			<!-- Start footer -->

			<footer id="fsFooter" class="fsFooter">
				<div class=" fsBanner fsStyleAutoclear" id="fsEl_9" >

			<div class="fsElement fsContainer footer-container" id="fsEl_2011" data-use-new="true" >

				<header>
			<div class="fsElementHeaderContent">
				<h3><strong>how to find us</strong></h3>

			</div>
	</header>
	<div class="fsElementContent">
			<div class="fsElement fsContainer col-1" id="fsEl_2014" data-use-new="true" >

				<div class="fsElementContent">
			<div class="fsElement fsContent site-info" id="fsEl_2015" data-use-new="true" >

				<div class="fsElementContent">
			<div><a href="index.php">Bloombreed Schools</a></div>


	</div>


	</div>
	<div class="fsElement fsNavigation fsList footer-social-nav nav-social" id="fsEl_2016" data-use-new="true" >

				<div class="fsElementContent">
		<nav><ul class="fsNavLevel1"><li><a href="https://web.facebook.com/bloombreedschools.org/?_rdc=1&amp;_rdr" target="_blank">Facebook</a></li><li><a href="https://www.instagram.com/bloombreedschools_day/" target="_blank">Instagram</a></li><li><a href="https://twitter.com/bloombreeddayph?lang=en" target="_blank">Twitter</a></li><!-- <li><a href="wechat-qr-code.html" target="_blank">WeChat</a></li> --></ul></nav>
	</div>


	</div>



	</div>


	</div>
	<div class="fsElement fsContainer col-2" id="fsEl_2013" data-use-new="true" >

				<div class="fsElementContent">
			<div class="fsElement fsContent" id="fsEl_2017" data-use-new="true" >

				<div class="fsElementContent">
			<h4>Campus 1</h4>

<p>Boskel Road,
Off Port Harcourt/Aba Expressway,
After Eleme junction
Port Harcourt.
,&nbsp;<br />
TEL: +234 703 904 7680<br />
E-mail: info@bloombreedschools.org</p>

<!-- 
<ul>
	<li><a class="fs_style_29" data-page-name="Ersha Island Map" href="ersha-island-map.html" target="_blank" title="Directions to Ersha Island Campus">directions</a></li>
</ul> -->


	</div>


	</div>



	</div>


	</div>
	<div class="fsElement fsContainer col-3" id="fsEl_2012" data-use-new="true" >

				<div class="fsElementContent">
			<div class="fsElement fsContent" id="fsEl_11432" data-use-new="true" >

				<div class="fsElementContent">
			<h4>Campus 2</h4>

<p>Opposite NTA,
Off NTA-Choba Road
Port-Harcourt

<br />
TEL:+2348075154825<br />
E-mail: info@bloombreedschools.org</p>

<!--
<ul>
	<li><a class="fs_style_29" data-page-name="Science Park Map" href="science-park-map.html" target="_blank" title="Directions to Science Park Campus">directions</a></li>
</ul> -->


	</div>


	</div>



	</div>


	</div>



	</div>


	</div>
	<div class="fsElement fsContainer footer-bottom" id="fsEl_2071" data-use-new="true" >

				<div class="fsElementContent">
			<div class="fsElement fsContent footer-copyright" id="fsEl_2072" data-use-new="true" >

				<div class="fsElementContent">
			<p>&copy; 2020. Bloombreed Schools.</p>


	</div>


	</div>
	<div class="fsElement fsNavigation fsList footer-utility" id="fsEl_2073" data-use-new="true" >

				<div class="fsElementContent">
		<nav><ul class="fsNavLevel1"><!-- <li><a href="feedback.html">Website Feedback</a></li> --><li><a href="data-protection-policy.html">Data Protection</a></li><li><a href="http://educare.ng/">Powered by Educare</a></li></ul></nav>
	</div>


	</div>
	<!-- <div class="fsElement fsContent powered-by-placeholder" id="fsEl_2074" data-use-new="true" >

				<div class="fsElementContent">
			

	</div>


	</div> -->



	</div>


	</div>




</div>


			</footer>


<!-- end footer -->

				<!-- <div id="fsPoweredByFinalsite" role="complementary">
		<div>
			<a href="https://www.finalsite.com/international" title="Powered by Finalsite opens in a new window" target="_blank">Powered by Finalsite</a>
		</div>
	</div> -->



</div>





<script src="static.finalsite.net/assets/application-68cde192f24b45686fbde668b1e947d872fa64a7b0e1a566b96ea5699a3c4fe5.js"></script>

	<script src="uploaded/themes/default_18/maincd06cd06.js?1549034920"></script>





</body>
<!-- Mirrored from www.aisgz.org/about-us by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 May 2019 20:15:34 GMT -->

<!-- Mirrored from bloombreedschools.org/about-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Mar 2021 14:54:38 GMT -->
</html>
