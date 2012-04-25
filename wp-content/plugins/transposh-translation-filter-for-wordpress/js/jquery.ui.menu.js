/*
 * jQuery UI Menu @VERSION
 * 
 * Copyright 2010, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Menu
 *
 * Depends:
 *	jquery.ui.core.js
 *	jquery.ui.widget.js
 */
(function(c){var i=0;c.widget("ui.menu",{_create:function(){var a=this;this.menuId=this.element.attr("id")||"ui-menu-"+i++;this.element.addClass("ui-menu ui-widget ui-widget-content ui-corner-all").attr({id:this.menuId,role:"listbox"}).bind("click.menu",function(b){if(a.options.disabled)return false;c(b.target).closest(".ui-menu-item a").length&&(b.preventDefault(),a.select(b))}).bind("mouseover.menu",function(b){if(!a.options.disabled){var e=c(b.target).closest(".ui-menu-item");e.length&&e.parent()[0]===
a.element[0]&&a.activate(b,e)}}).bind("mouseout.menu",function(b){if(!a.options.disabled){var e=c(b.target).closest(".ui-menu-item");e.length&&e.parent()[0]===a.element[0]&&a.deactivate(b)}});this.refresh();if(!this.options.input)this.options.input=this.element.attr("tabIndex",0);this.options.input.bind("keydown.menu",function(b){if(!a.options.disabled)switch(b.keyCode){case c.ui.keyCode.PAGE_UP:a.previousPage();b.preventDefault();b.stopImmediatePropagation();break;case c.ui.keyCode.PAGE_DOWN:a.nextPage();
b.preventDefault();b.stopImmediatePropagation();break;case c.ui.keyCode.UP:a.previous();b.preventDefault();b.stopImmediatePropagation();break;case c.ui.keyCode.DOWN:a.next();b.preventDefault();b.stopImmediatePropagation();break;case c.ui.keyCode.ENTER:a.select(),b.preventDefault(),b.stopImmediatePropagation()}})},destroy:function(){c.Widget.prototype.destroy.apply(this,arguments);this.element.removeClass("ui-menu ui-widget ui-widget-content ui-corner-all").removeAttr("tabIndex").removeAttr("role").removeAttr("aria-activedescendant");
this.element.children(".ui-menu-item").removeClass("ui-menu-item").removeAttr("role").children("a").removeClass("ui-corner-all").removeAttr("tabIndex").unbind(".menu")},refresh:function(){this.element.children("li:not(.ui-menu-item):has(a)").addClass("ui-menu-item").attr("role","menuitem").children("a").addClass("ui-corner-all").attr("tabIndex",-1)},activate:function(a,b){var e=this;this.deactivate();if(this._hasScroll()){var d=parseFloat(c.curCSS(this.element[0],"borderTopWidth",true))||0,f=parseFloat(c.curCSS(this.element[0],
"paddingTop",true))||0,d=b.offset().top-this.element.offset().top-d-f,f=this.element.attr("scrollTop"),g=this.element.height(),h=b.height();d<0?this.element.attr("scrollTop",f+d):d+h>g&&this.element.attr("scrollTop",f+d-g+h)}this.active=b.first().children("a").addClass("ui-state-hover").attr("id",function(a,b){return e.itemId=b||e.menuId+"-activedescendant"}).end();this.element.removeAttr("aria-activedescenant").attr("aria-activedescenant",e.itemId);this._trigger("focus",a,{item:b})},deactivate:function(a){if(this.active)this.active.children("a").removeClass("ui-state-hover"),
c("#"+this.menuId+"-activedescendant").removeAttr("id"),this.element.removeAttr("aria-activedescenant"),this._trigger("blur",a),this.active=null},next:function(a){this._move("next",".ui-menu-item","first",a)},previous:function(a){this._move("prev",".ui-menu-item","last",a)},first:function(){return this.active&&!this.active.prevAll(".ui-menu-item").length},last:function(){return this.active&&!this.active.nextAll(".ui-menu-item").length},_move:function(a,b,c,d){this.active?(a=this.active[a+"All"](".ui-menu-item").eq(0),
a.length?this.activate(d,a):this.activate(d,this.element.children(b)[c]())):this.activate(d,this.element.children(b)[c]())},nextPage:function(a){if(this._hasScroll())if(!this.active||this.last())this.activate(a,this.element.children(".ui-menu-item").first());else{var b=this.active.offset().top,e=this.element.height(),d;this.active.nextAll(".ui-menu-item").each(function(){d=c(this);return c(this).offset().top-b-e<0});this.activate(a,d)}else this.activate(a,this.element.children(".ui-menu-item")[!this.active||
this.last()?"first":"last"]())},previousPage:function(a){if(this._hasScroll())if(!this.active||this.first())this.activate(a,this.element.children(".ui-menu-item").last());else{var b=this.active.offset().top,e=this.element.height(),d;this.active.prevAll(".ui-menu-item").each(function(){d=c(this);return c(this).offset().top-b+e>0});this.activate(a,d)}else this.activate(a,this.element.children(".ui-menu-item")[!this.active||this.first()?":last":":first"]())},_hasScroll:function(){return this.element.height()<
this.element.attr("scrollHeight")},select:function(a){this._trigger("select",a,{item:this.active})}})})(jQuery);
