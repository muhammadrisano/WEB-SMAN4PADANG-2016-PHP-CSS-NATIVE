var CONTROL_KEY=1;var SHIFT_KEY=2;var CONTROL_SHIFT_KEY=3;function roundcube_browser(){var a=navigator;this.ver=parseFloat(a.appVersion);this.appver=a.appVersion;this.agent=a.userAgent;this.agent_lc=a.userAgent.toLowerCase();this.name=a.appName;this.vendor=a.vendor?a.vendor:"";this.vendver=a.vendorSub?parseFloat(a.vendorSub):0;this.product=a.product?a.product:"";this.platform=String(a.platform).toLowerCase();this.lang=(a.language)?a.language.substring(0,2):(a.browserLanguage)?a.browserLanguage.substring(0,2):(a.systemLanguage)?a.systemLanguage.substring(0,2):"en";this.win=(this.platform.indexOf("win")>=0);this.mac=(this.platform.indexOf("mac")>=0);this.linux=(this.platform.indexOf("linux")>=0);this.unix=(this.platform.indexOf("unix")>=0);this.dom=document.getElementById?true:false;this.dom2=(document.addEventListener&&document.removeEventListener);this.ie=(document.all&&!window.opera);this.ie4=(this.ie&&!this.dom);this.ie5=(this.dom&&this.appver.indexOf("MSIE 5")>0);this.ie8=(this.dom&&this.appver.indexOf("MSIE 8")>0);this.ie7=(this.dom&&this.appver.indexOf("MSIE 7")>0);this.ie6=(this.dom&&!this.ie8&&!this.ie7&&this.appver.indexOf("MSIE 6")>0);this.ns=((this.ver<5&&this.name=="Netscape")||(this.ver>=5&&this.vendor.indexOf("Netscape")>=0));this.chrome=(this.agent_lc.indexOf("chrome")>0);this.safari=(!this.chrome&&(this.agent_lc.indexOf("safari")>0||this.agent_lc.indexOf("applewebkit")>0));this.mz=(this.dom&&!this.ie&&!this.ns&&!this.chrome&&!this.safari&&this.agent.indexOf("Mozilla")>=0);this.konq=(this.agent_lc.indexOf("konqueror")>0);this.iphone=(this.safari&&this.agent_lc.indexOf("iphone")>0);this.ipad=(this.safari&&this.agent_lc.indexOf("ipad")>0);this.opera=window.opera?true:false;if(this.opera&&window.RegExp){this.vendver=(/opera(\s|\/)([0-9\.]+)/.test(this.agent_lc))?parseFloat(RegExp.$2):-1}else{if(this.chrome&&window.RegExp){this.vendver=(/chrome\/([0-9\.]+)/.test(this.agent_lc))?parseFloat(RegExp.$1):0}else{if(!this.vendver&&this.safari){this.vendver=(/(safari|applewebkit)\/([0-9]+)/.test(this.agent_lc))?parseInt(RegExp.$2):0}else{if((!this.vendver&&this.mz)||this.agent.indexOf("Camino")>0){this.vendver=(/rv:([0-9\.]+)/.test(this.agent))?parseFloat(RegExp.$1):0}else{if(this.ie&&window.RegExp){this.vendver=(/msie\s+([0-9\.]+)/.test(this.agent_lc))?parseFloat(RegExp.$1):0}else{if(this.konq&&window.RegExp){this.vendver=(/khtml\/([0-9\.]+)/.test(this.agent_lc))?parseFloat(RegExp.$1):0}}}}}}if(this.safari&&(/;\s+([a-z]{2})-[a-z]{2}\)/.test(this.agent_lc))){this.lang=RegExp.$1}this.dhtml=((this.ie4&&this.win)||this.ie5||this.ie6||this.ns4||this.mz);this.vml=(this.win&&this.ie&&this.dom&&!this.opera);this.pngalpha=(this.mz||(this.opera&&this.vendver>=6)||(this.ie&&this.mac&&this.vendver>=5)||(this.ie&&this.win&&this.vendver>=5.5)||this.safari);this.opacity=(this.mz||(this.ie&&this.vendver>=5.5&&!this.opera)||(this.safari&&this.vendver>=100));this.cookies=a.cookieEnabled;this.xmlhttp_test=function(){var b=new Function("try{var o=new ActiveXObject('Microsoft.XMLHTTP');return true;}catch(err){return false;}");this.xmlhttp=(window.XMLHttpRequest||(window.ActiveXObject&&b()));return this.xmlhttp};this.set_html_class=function(){var b=" js";if(this.ie){b+=" ie";if(this.ie5){b+=" ie5"}else{if(this.ie6){b+=" ie6"}else{if(this.ie7){b+=" ie7"}else{if(this.ie8){b+=" ie8"}}}}}else{if(this.opera){b+=" opera"}else{if(this.konq){b+=" konqueror"}else{if(this.safari){b+=" safari"}}}}if(this.chrome){b+=" chrome"}else{if(this.iphone){b+=" iphone"}else{if(this.ipad){b+=" ipad"}}}if(document.documentElement){document.documentElement.className+=b}}}var rcube_event={get_target:function(a){a=a||window.event;return a&&a.target?a.target:a.srcElement},get_keycode:function(a){a=a||window.event;return a&&a.keyCode?a.keyCode:(a&&a.which?a.which:0)},get_button:function(a){a=a||window.event;return a&&a.button!==undefined?a.button:(a&&a.which?a.which:0)},get_modifier:function(b){var a=0;b=b||window.event;if(bw.mac&&b){a+=(b.metaKey&&CONTROL_KEY)+(b.shiftKey&&SHIFT_KEY)}else{if(b){a+=(b.ctrlKey&&CONTROL_KEY)+(b.shiftKey&&SHIFT_KEY)}}return a},get_mouse_pos:function(c){if(!c){c=window.event}var b=(c.pageX)?c.pageX:c.clientX,a=(c.pageY)?c.pageY:c.clientY;if(document.body&&document.all){b+=document.body.scrollLeft;a+=document.body.scrollTop}if(c._offset){b+=c._offset.left;a+=c._offset.top}return{x:b,y:a}},add_listener:function(b){if(!b.object||!b.method){return}if(!b.element){b.element=document}if(!b.object._rc_events){b.object._rc_events=[]}var a=b.event+"*"+b.method;if(!b.object._rc_events[a]){b.object._rc_events[a]=function(c){return b.object[b.method](c)}}if(b.element.addEventListener){b.element.addEventListener(b.event,b.object._rc_events[a],false)}else{if(b.element.attachEvent){b.element.detachEvent("on"+b.event,b.object._rc_events[a]);b.element.attachEvent("on"+b.event,b.object._rc_events[a])}else{b.element["on"+b.event]=b.object._rc_events[a]}}},remove_listener:function(b){if(!b.element){b.element=document}var a=b.event+"*"+b.method;if(b.object&&b.object._rc_events&&b.object._rc_events[a]){if(b.element.removeEventListener){b.element.removeEventListener(b.event,b.object._rc_events[a],false)}else{if(b.element.detachEvent){b.element.detachEvent("on"+b.event,b.object._rc_events[a])}else{b.element["on"+b.event]=null}}}},cancel:function(a){var b=a?a:window.event;if(b.preventDefault){b.preventDefault()}if(b.stopPropagation){b.stopPropagation()}b.cancelBubble=true;b.returnValue=false;return false},touchevent:function(a){return{pageX:a.pageX,pageY:a.pageY,offsetX:a.pageX-a.target.offsetLeft,offsetY:a.pageY-a.target.offsetTop,target:a.target,istouch:true}}};function rcube_event_engine(){this._events={}}rcube_event_engine.prototype={addEventListener:function(a,b,d){if(!this._events){this._events={}}if(!this._events[a]){this._events[a]=[]}var c={func:b,obj:d?d:window};this._events[a][this._events[a].length]=c},removeEventListener:function(a,d,e){if(e===undefined){e=window}for(var c,b=0;this._events&&this._events[a]&&b<this._events[a].length;b++){if((c=this._events[a][b])&&c.func==d&&c.obj==e){this._events[a][b]=null}}},triggerEvent:function(a,g){var b,d;if(g===undefined){g=this}else{if(typeof g==="object"){g.event=a}}if(this._events&&this._events[a]&&!this._event_exec){this._event_exec=true;for(var c=0;c<this._events[a].length;c++){if((d=this._events[a][c])){if(typeof d.func==="function"){b=d.func.call?d.func.call(d.obj,g):d.func(g)}else{if(typeof d.obj[d.func]==="function"){b=d.obj[d.func](g)}}if(b!==undefined&&!b){break}}}if(b&&b.event){try{delete b.event}catch(f){$(b).removeAttr("event")}}}this._event_exec=false;if(g.event){try{delete g.event}catch(f){$(g).removeAttr("event")}}return b}};function rcube_layer(b,a){this.name=b;this.create=function(m){var d=(m.x)?m.x:0,k=(m.y)?m.y:0,j=m.width,f=m.height,g=m.zindex,c=m.vis,i=m.parent,e=document.createElement("DIV");e.id=this.name;e.style.position="absolute";e.style.visibility=(c)?(c==2)?"inherit":"visible":"hidden";e.style.left=d+"px";e.style.top=k+"px";if(j){e.style.width=j.toString().match(/\%$/)?j:j+"px"}if(f){e.style.height=f.toString().match(/\%$/)?f:f+"px"}if(g){e.style.zIndex=g}if(i){i.appendChild(e)}else{document.body.appendChild(e)}this.elm=e};if(a!=null){this.create(a);this.name=this.elm.id}else{this.elm=document.getElementById(b)}if(!this.elm){return false}this.css=this.elm.style;this.event=this.elm;this.width=this.elm.offsetWidth;this.height=this.elm.offsetHeight;this.x=parseInt(this.elm.offsetLeft);this.y=parseInt(this.elm.offsetTop);this.visible=(this.css.visibility=="visible"||this.css.visibility=="show"||this.css.visibility=="inherit")?true:false;this.move=function(c,d){this.x=c;this.y=d;this.css.left=Math.round(this.x)+"px";this.css.top=Math.round(this.y)+"px"};this.resize=function(c,d){this.css.width=c+"px";this.css.height=d+"px";this.width=c;this.height=d};this.show=function(c){if(c==1){this.css.visibility="visible";this.visible=true}else{if(c==2){this.css.visibility="inherit";this.visible=true}else{this.css.visibility="hidden";this.visible=false}}};this.write=function(c){this.elm.innerHTML=c}}function rcube_check_email(n,m){if(n&&window.RegExp){var b="[^\\x0d\\x22\\x5c\\x80-\\xff]",e="[^\\x0d\\x5b-\\x5d\\x80-\\xff]",l="[^\\x00-\\x20\\x22\\x28\\x29\\x2c\\x2e\\x3a-\\x3c\\x3e\\x40\\x5b-\\x5d\\x7f-\\xff]+",h="\\x5c[\\x00-\\x7f]",c="\\x22("+b+"|"+h+")*\\x22",j="([^@\\x2e]+\\x2e)+([^\\x00-\\x40\\x5b-\\x60\\x7b-\\x7f]{2,}|xn--[a-z0-9]{2,})",k=["\\u0645\\u062b\\u0627\\u0644\\x2e\\u0625\\u062e\\u062a\\u0628\\u0627\\u0631","\\u4f8b\\u5b50\\x2e\\u6d4b\\u8bd5","\\u4f8b\\u5b50\\x2e\\u6e2c\\u8a66","\\u03c0\\u03b1\\u03c1\\u03ac\\u03b4\\u03b5\\u03b9\\u03b3\\u03bc\\u03b1\\x2e\\u03b4\\u03bf\\u03ba\\u03b9\\u03bc\\u03ae","\\u0909\\u0926\\u093e\\u0939\\u0930\\u0923\\x2e\\u092a\\u0930\\u0940\\u0915\\u094d\\u0937\\u093e","\\u4f8b\\u3048\\x2e\\u30c6\\u30b9\\u30c8","\\uc2e4\\ub840\\x2e\\ud14c\\uc2a4\\ud2b8","\\u0645\\u062b\\u0627\\u0644\\x2e\\u0622\\u0632\\u0645\\u0627\\u06cc\\u0634\u06cc","\\u043f\\u0440\\u0438\\u043c\\u0435\\u0440\\x2e\\u0438\\u0441\\u043f\\u044b\\u0442\\u0430\\u043d\\u0438\\u0435","\\u0b89\\u0ba4\\u0bbe\\u0bb0\\u0ba3\\u0bae\\u0bcd\\x2e\\u0baa\\u0bb0\\u0bbf\\u0b9f\\u0bcd\\u0b9a\\u0bc8","\\u05d1\\u05f2\\u05b7\\u05e9\\u05e4\\u05bc\\u05d9\\u05dc\\x2e\\u05d8\\u05e2\\u05e1\\u05d8"],i="mailtest\\x40("+k.join("|")+")",a="("+l+"|"+c+")",d="[,;s\n]",g=a+"(\\x2e"+a+")*",o="(("+g+"\\x40"+j+")|("+i+"))",f=m?new RegExp("(^|<|"+d+")"+o+"($|>|"+d+")","i"):new RegExp("^"+o+"$","i");return f.test(n)?true:false}return false}function rcube_clone_object(c){var a={};for(var b in c){if(c[b]&&typeof c[b]==="object"){a[b]=clone_object(c[b])}else{a[b]=c[b]}}return a}function urlencode(a){if(window.encodeURIComponent){return encodeURIComponent(a).replace("*","%2A")}return escape(a).replace("+","%2B").replace("*","%2A").replace("/","%2F").replace("@","%40")}function rcube_find_object(i,g){var h,a,c,b;if(!g){g=document}if(g.getElementsByName&&(b=g.getElementsByName(i))){c=b[0]}if(!c&&g.getElementById){c=g.getElementById(i)}if(!c&&g.all){c=g.all[i]}if(!c&&g.images.length){c=g.images[i]}if(!c&&g.forms.length){for(a=0;a<g.forms.length;a++){if(g.forms[a].name==i){c=g.forms[a]}else{if(g.forms[a].elements[i]){c=g.forms[a].elements[i]}}}}if(!c&&g.layers){if(g.layers[i]){c=g.layers[i]}for(h=0;!c&&h<g.layers.length;h++){c=rcube_find_object(i,g.layers[h].document)}}return c}function rcube_mouse_is_over(b,c){var a=rcube_event.get_mouse_pos(b),d=$(c).offset();return((a.x>=d.left)&&(a.x<(d.left+c.offsetWidth))&&(a.y>=d.top)&&(a.y<(d.top+c.offsetHeight)))}function setCookie(c,e,a,g,d,f){var b=c+"="+escape(e)+(a?"; expires="+a.toGMTString():"")+(g?"; path="+g:"")+(d?"; domain="+d:"")+(f?"; secure":"");document.cookie=b}function getCookie(c){var b=document.cookie,e=c+"=",d=b.indexOf("; "+e);if(d==-1){d=b.indexOf(e);if(d!=0){return null}}else{d+=2}var a=b.indexOf(";",d);if(a==-1){a=b.length}return unescape(b.substring(d+e.length,a))}roundcube_browser.prototype.set_cookie=setCookie;roundcube_browser.prototype.get_cookie=getCookie;function rcube_console(){this.log=function(b){var a=rcube_find_object("dbgconsole");if(a){if(b.charAt(b.length-1)=="\n"){b+="--------------------------------------\n"}else{b+="\n--------------------------------------\n"}if(bw.konq){a.innerText+=b;a.value=a.innerText}else{a.value+=b}}};this.reset=function(){var a=rcube_find_object("dbgconsole");if(a){a.innerText=a.value=""}}}var bw=new roundcube_browser();bw.set_html_class();RegExp.escape=function(a){return String(a).replace(/([.*+?^=!:${}()|[\]\/\\])/g,"\\$1")};Date.prototype.getStdTimezoneOffset=function(){var a=12,c=new Date(null,a,1),b=c.getTimezoneOffset();while(--a){c.setUTCMonth(a);if(b!=c.getTimezoneOffset()){return Math.max(b,c.getTimezoneOffset())}}return b};if(bw.ie){document._getElementById=document.getElementById;document.getElementById=function(c){var a=0,b=document._getElementById(c);if(b&&b.id!=c){while((b=document.all[a])&&b.id!=c){a++}}return b}}var Base64=(function(){var a="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";var b={encode:function(f){if(typeof(window.btoa)==="function"){return btoa(f)}var n,l,j,m,k,h,g,d=0,c="",e=f.length;do{n=f.charCodeAt(d++);l=f.charCodeAt(d++);j=f.charCodeAt(d++);m=n>>2;k=((n&3)<<4)|(l>>4);h=((l&15)<<2)|(j>>6);g=j&63;if(isNaN(l)){h=g=64}else{if(isNaN(j)){g=64}}c=c+a.charAt(m)+a.charAt(k)+a.charAt(h)+a.charAt(g)}while(d<e);return c},decode:function(f){if(typeof(window.atob)==="function"){return atob(f)}var n,l,j,m,k,h,g,e,d=0,c="";f=f.replace(/[^A-Za-z0-9\+\/\=]/g,"");e=f.length;do{m=a.indexOf(f.charAt(d++));k=a.indexOf(f.charAt(d++));h=a.indexOf(f.charAt(d++));g=a.indexOf(f.charAt(d++));n=(m<<2)|(k>>4);l=((k&15)<<4)|(h>>2);j=((h&3)<<6)|g;c=c+String.fromCharCode(n);if(h!=64){c=c+String.fromCharCode(l)}if(g!=64){c=c+String.fromCharCode(j)}}while(d<e);return c}};return b})();