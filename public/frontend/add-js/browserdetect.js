if(typeof(AC)==="undefined"){AC={}}AC.Detector={getAgent:function(){return navigator.userAgent.toLowerCase()
},isMac:function(b){var a=b||this.getAgent();return !!a.match(/mac/i)},isWin:function(b){var a=b||this.getAgent();
return !!a.match(/win/i)},isWin2k:function(b){var a=b||this.getAgent();return this.isWin(a)&&(a.match(/nt\s*5/i))
},isWinVista:function(b){var a=b||this.getAgent();return this.isWin(a)&&(a.match(/nt\s*6/i))
},isWebKit:function(b){if(this._isWebKit===undefined){var a=b||this.getAgent();
this._isWebKit=!!a.match(/AppleWebKit/i);this.isWebKit=function(){return this._isWebKit
}}return this._isWebKit},isSafari2:function(c){if(this._isSafari2===undefined){if(!this.isWebKit()){this._isSafari2=false
}else{var b=navigator.userAgent.toLowerCase();var a=parseInt(parseFloat(b.substring(b.lastIndexOf("safari/")+7)),10);
this._isSafari2=(a>=419)}this.isSafari2=function(){return this._isSafari2}}return this._isSafari2
},isOpera:function(b){var a=b||this.getAgent();return !!a.match(/opera/i)},isIE:function(b){var a=b||this.getAgent();
return !!a.match(/msie/i)},isIEStrict:function(b){var a=b||this.getAgent();return a.match(/msie/i)&&!this.isOpera(a)
},isFirefox:function(b){var a=b||this.getAgent();return !!a.match(/firefox/i)},isiPhone:function(b){var a=b||this.getAgent();
return this.isMobile(a)},iPhoneOSVersion:function(d){var c=d||this.getAgent(),a=this.isMobile(c),e,f,b;
if(a){var e=c.match(/.*CPU ([\w|\s]+) like/i);if(e&&e[1]){f=e[1].split(" ");b=f[2].split("_");
return b}else{return[1]}}else{return null}},isMobile:function(b){var a=b||this.getAgent();
return this.isWebKit(a)&&a.match(/Mobile/i)},isiTunesOK:function(b){var a=b||this.getAgent();
return this.isMac(a)||this.isWin2k(a)},_isQTInstalled:undefined,isQTInstalled:function(){if(this._isQTInstalled===undefined){var a=false;
if(navigator.plugins&&navigator.plugins.length){for(var b=0;b<navigator.plugins.length;
b++){var c=navigator.plugins[b];if(c.name.indexOf("QuickTime")>-1){a=true}}}else{if(typeof(execScript)!="undefined"){qtObj=false;
execScript('on error resume next: qtObj = IsObject(CreateObject("QuickTimeCheckObject.QuickTimeCheck.1"))',"VBScript");
a=qtObj}}this._isQTInstalled=a}return this._isQTInstalled},getQTVersion:function(){var a="0";
if(navigator.plugins&&navigator.plugins.length){for(var c=0;c<navigator.plugins.length;
c++){var d=navigator.plugins[c];var b=d.name.match(/quicktime\D*([\.\d]*)/i);if(b&&b[1]){a=b[1]
}}}else{if(typeof(execScript)!="undefined"){ieQTVersion=null;execScript('on error resume next: ieQTVersion = CreateObject("QuickTimeCheckObject.QuickTimeCheck.1").QuickTimeVersion',"VBScript");
if(ieQTVersion){a=ieQTVersion.toString(16);a=[a.charAt(0),a.charAt(1),a.charAt(2)].join(".")
}}}return a},isQTCompatible:function(c,e){function b(g,i){var f=parseInt(g[0],10);
if(isNaN(f)){f=0}var h=parseInt(i[0],10);if(isNaN(h)){h=0}if(f===h){if(g.length>1){return b(g.slice(1),i.slice(1))
}else{return true}}else{if(f<h){return true}else{return false}}}var d=c.split(/\./);
var a=e?e.split(/\./):this.getQTVersion().split(/\./);return b(d,a)},isValidQTAvailable:function(a){return this.isQTInstalled()&&this.isQTCompatible(a)
},isSBVDPAvailable:function(a){return false}};
