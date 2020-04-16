/*
HTML5 Data Bindings
Version: 1.9.0
(c) 2016 DMXzone.com
@build 2016-02-05 14:09:01
*/
!function(a){function b(){console&&console.error&&console.error.apply(console,arguments)}function c(b,e,f){if(e=e||d.globalScope,"string"==typeof b){var g;return(g=/\{\{(.+?)\}\}/.exec(b))&&g[0]==b?(e.watch(b,f),d.$parse(b,e)):d.$parseTemplate(b,e,f)}return(a.isPlainObject(b)||a.isArray(b))&&a.each(b,function(a,d){b[a]=c(b[a],e,function(c){b[a]=c,f(c)})}),b}if(!a.dmxDataBindings)return void alert("DMXzone Data Bindings is required!");var d=a.dmxDataBindings,e=function(c){return c?c.id?this instanceof e?(this.cfg=a.extend({preventInitialLoad:!1,callback:null},c),this.id=c.id,this.data={},this.state="loading",void this.init()):new e(c):(b("ID for dataset is required!"),!1):(b("No options are set for dataset!",this,c),!1)};a.extend(e,{get:function(a){return e.dataSets[a]}}),e.dataSets={},e.prototype={init:function(){var b=this;e.dataSets[this.id]=this,this.fixCallbacks(),this.cfg.dataSet&&this.set(this.cfg.dataSet),this.cfg.url&&(this.cfg.data=c(this.cfg.data,d.globalScope,function(a){void 0!==a&&b.load()}),-1!=this.cfg.url.indexOf("{{")&&(this.cfg._url=this.cfg.url,this.cfg.url=d.$parseTemplate(this.cfg._url,d.globalScope,function(){b.load(!0)},"dataset:"+this.id),this.cfg.preventInitialLoad=!0),a.dmxSecurityProvider&&"database"==this.cfg.dataSourceType?d.globalScope.watch("$SECURITY",function(){b.load(!0)},"dataset:"+this.id,!0):this.cfg.preventInitialLoad||this.load())},fixCallbacks:function(){var b=this;a.each(["beforeSend","complete","error","unauthorized","forbidden","success","update","callback"],function(a,c){var d=b.cfg[c];"string"==typeof d&&(b.cfg[c]=function(){return new Function(d).call(),"undefined"!=typeof MM_returnValue&&null!==MM_returnValue?MM_returnValue:void 0})})},setPage:function(a,b){var c,d,e;if(this.data){var f=this.data;if(b&&f[b]&&(f=f[b]),"database"==this.cfg.dataSourceType||"serverConnect"==this.cfg.dataSourceType?(c=f.offset,d=f.limit,e=f.total):(f.data?(c=f.data.startIndex,d=f.data.itemsPerPage,e=f.data.totalItems):f.feed&&(c=f.feed.openSearch$startIndex.$t,d=f.feed.openSearch$itemsPerPage.$t,e=f.feed.openSearch$totalResults.$t),c&&(c-=1)),null!=c&&null!=d&&null!=e){if("string"==typeof a)switch(a){case"first":a=0;break;case"prev":a=c-d;break;case"next":a=c+d;break;case"last":a=(Math.ceil(e/d)-1)*d}else a=(a-1)*d;0>a||a>=e||("database"==this.cfg.dataSourceType||"serverConnect"==this.cfg.dataSourceType?this.load({data:{offset:a}}):this.load({data:{"start-index":a+1}}))}}},load:function(b){var c=this;b===!0&&(this.cfg.data&&(delete this.cfg.data.offset,delete this.cfg.data["start-index"]),b={}),"string"==typeof b&&(b={url:b}),b&&""===b.url||(b&&b.url&&this.cfg._url&&(this.cfg.data&&(delete this.cfg.data.offset,delete this.cfg.data["start-index"]),d.globalScope.unwatchNS(this.cfg._url,"dataset:"+this.id),delete this.cfg._url),a.extend(!0,this.cfg,b),b&&b.url&&-1!=b.url.indexOf("{{")?(this.cfg._url=b.url,this.cfg.url=d.$parseTemplate(this.cfg._url,d.globalScope,function(){c.load(!0)},"dataset:"+this.id)):this.cfg._url&&(this.cfg.url=d.$parseTemplate(this.cfg._url)),a.ajax(this.cfg).done(function(b){c.cfg.root?c.set(b[c.cfg.root]):c.set(b),a.isFunction(c.cfg.callback)&&c.cfg.callback.call(this)}).fail(function(b){c.state="error",d.globalScope.remove(this.id),401==b.status?a.isFunction(c.cfg.unauthorized)&&c.cfg.unauthorized.call(this):402==b.status?a.isFunction(c.cfg.forbidden)&&c.cfg.forbidden.call(this):a.isFunction(c.cfg.error)&&c.cfg.error.call(this)}))},set:function(b){if("string"==typeof b)try{this.data=a.parseJSON(b),this.state="ready"}catch(c){return this.state="error",void(a.isFunction(this.cfg.error)&&this.cfg.error.call(this))}else this.data=b,this.state="ready";d.globalScope.add(this.id,this.data),a.isFunction(this.cfg.update)&&this.cfg.update.call(this)}},a.dmxDataSet=e}(jQuery);