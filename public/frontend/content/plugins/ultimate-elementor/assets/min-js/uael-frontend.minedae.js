!function(g){var I=[],S=!1,U=!1;window.is_fb_loggedin=!1,window.is_google_loggedin=!1;function l(e){e.css("width",""),e.css("height",""),max=-1,e.find("img").each(function(){max<g(this).width()&&(max=g(this).width())}),e.css("width",max+"px")}function e(i,a){if(void 0!==i){var e=i.find(".gform_confirmation_message"),t=i.find(".uael-gf-form-title"),n=i.find(".uael-gf-form-desc");i.find("select:not([multiple])").each(function(){var e=a(this);e.next().hasClass("chosen-container")?e.next().wrap("<span class='uael-gf-select-custom'></span>"):e.wrap("<span class='uael-gf-select-custom'></span>")}),i.hasClass("uael-gf-ajax-yes")?jQuery(document).on("gform_confirmation_loaded",function(e,a){t.hide(),n.hide()}):0<e.length?(t.hide(),n.hide()):(t.show(),n.show()),"undefined"!=typeof gform&&gform.addAction("gform_input_change",function(e,a,t){i.find(".gfield_radio .gchoice_button").length&&!i.hasClass("uael-gf-check-default-yes")&&"radio"==i.find(e).attr("type")&&(i.find(e).parent().hasClass("uael-radio-active")?i.find(e).parent().removeClass("uael-radio-active"):(i.find(".gchoice_button").removeClass("uael-radio-active"),i.find(e).parent().addClass("uael-radio-active")))},10,3)}}function a(e,a){function t(e){e.find("input:radio").each(function(){a(this).next().hasClass("uael-caf-radio-custom")||a(this).after("<span class='uael-caf-radio-custom'></span>")})}void 0!==e&&(e.find("select").wrap("<div class='uael-caf-select-custom'></div>"),t(e),a(document).on("cf.add",function(){t(e)}))}function t(a,e){if(void 0!==a){var t=a.find("select:not([multiple])"),i=a.find("span.ajax-loader");t.wrap("<span class='uael-cf7-select-custom'></span>"),i.wrap("<div class='uael-cf7-loader-active'></div>");var n=document.querySelector(".wpcf7");null!==n&&n.addEventListener("wpcf7submit",function(e){a.find(".wpcf7-not-valid-tip").wrap("<span class='uael-cf7-alert'></span>")},!1)}}function i(){var e=g(this).data("id"),a=g(this).find(".uael-fancy-text-node"),t=a.data("animation"),i=a.data("strings"),n=".elementor-element-"+e,o=a.data("type-speed"),l=a.data("back-speed"),s=a.data("start-delay"),r=a.data("back-delay"),d=a.data("loop"),c=a.data("show_cursor"),u=a.data("cursor-char"),f=a.data("speed"),m=a.data("pause"),p=a.data("mousepause");"type"==t?g(n+" .uael-typed-main").typed({strings:i,typeSpeed:o,startDelay:s,backSpeed:l,backDelay:r,loop:d,showCursor:c,cursorChar:u}):"slide"==t?(g(n+" .uael-fancy-text-slide").css("opacity","1"),g(n+" .uael-slide-main").vTicker("init",{strings:i,speed:f,pause:m,mousePause:p})):UAELEffects._animateHeadline(g(n).find(".uael-slide-main_ul"),a)}function n(i,n){if(void 0!==i){var a,e,o=i.data("id"),t=i.find(".uael-hotspot-container"),l=t.data("side"),s=t.data("hotspottrigger"),r=t.data("arrow"),d=t.data("distance"),c=t.data("delay"),u=t.data("animation"),f=t.data("animduration"),m="uael-tooltip-wrap-"+o+" uael-hotspot-tooltip",p=t.data("zindex"),g=t.data("autoplay"),h=t.data("repeat"),v=t.data("overlay"),_=t.data("length"),w=(i.find(".uael-hotspot-main-"+o).data("uaeltour"),t.data("tourinterval")),y=t.data("autoaction"),b=!1,k=t.data("hotspotviewport"),C=t.data("tooltip-maxwidth"),x=t.data("tooltip-minwidth");if(passtrigger="custom"==s?"click":s,clearInterval(I[o]),e=s,n(".uael-hotspot-main-"+o).tooltipster({theme:["tooltipster-noir","tooltipster-noir-customized"],minWidth:x,maxWidth:C,side:l,trigger:e,arrow:r,distance:d,delay:c,animation:u,uaelclass:m,zIndex:p,interactive:!0,animationDuration:f}),"custom"==s){var L=i.find(".uael-hotspot-overlay");i.find(".uael-overlay-button");T()}else clearInterval(I[o])}function E(){"yes"!=h&&(n(".uael-prev-"+o+'[data-tooltipid="1"]').addClass("inactive"),n(".uael-next-"+o+'[data-tooltipid="'+_+'"]').addClass("inactive"))}function A(){I[o]=setInterval(function(){if(a=n(".uael-hotspot-main-"+o+".open").data("uaeltour"),!S)if(n(".uael-hotspot-main-"+o+".open").trigger("click"),"yes"==h)if(elementorFrontend.isEditMode())a<_?n(".uael-hotspot-main-"+o+'[data-uaeltour="'+(a+=1)+'"]').trigger("click"):a==_&&(clearInterval(I[o]),T(),n(L).show());else{function e(){var e=n(window).height()/2,a=n(window).scrollTop(),t=i.find(".uael-hotspot-container");!(t.offset().top-e<a)&&t.offset().top+t.height()-e>a||(n(".uael-hotspot-main-"+o+".open").tooltipster("close"),n(".uael-hotspot-main-"+o+".open").removeClass("open"),clearInterval(I[o]),T(),n(L).show()),b=!1}a==_?a=1:a+=1,n(".uael-hotspot-main-"+o+'[data-uaeltour="'+a+'"]').trigger("click"),n(window).on("scroll",function(){b||(b=!0,window.requestAnimationFrame?window.requestAnimationFrame(e):setTimeout(e,300))})}else"no"==h&&(a<_?n(".uael-hotspot-main-"+o+'[data-uaeltour="'+(a+=1)+'"]').trigger("click"):a==_&&(clearInterval(I[o]),T(),n(L).show()));w=n(".uael-hotspot-container").data("tourinterval"),w=parseInt(w)},w)}function F(){clearInterval(I[o]),n(".uael-prev-"+o).off("click.prevtrigger").on("click.prevtrigger",function(e){clearInterval(I[o]);var a=n(this).data("tooltipid");a<=_&&(n(".uael-hotspot-main-"+o+'[data-uaeltour="'+a+'"]').trigger("click"),"yes"==h&&1==a&&(a=_+1),n(".uael-hotspot-main-"+o+'[data-uaeltour="'+--a+'"]').trigger("click")),"yes"==g&&A()}),n(".uael-next-"+o).off("click.nexttrigger").on("click.nexttrigger",function(e){clearInterval(I[o]);var a=n(this).data("tooltipid");a<=_&&(n(".uael-hotspot-main-"+o+'[data-uaeltour="'+a+'"]').trigger("click"),"yes"==h&&a==_&&(a=0),n(".uael-hotspot-main-"+o+'[data-uaeltour="'+(a+=1)+'"]').trigger("click")),"yes"==g&&A()}),n(".uael-tour-end-"+o).off("click.endtour").on("click.endtour",function(e){clearInterval(I[o]),e.preventDefault(),n(".uael-hotspot-main-"+o+".open").tooltipster("close"),n(".uael-hotspot-main-"+o+".open").removeClass("open"),"auto"==y&&"yes"==g?n(".uael-hotspot-main-"+o).css("pointer-events","none"):(T(),n(L).show())}),n(".uael-hotspot-main-"+o).off("click.triggertour").on("click.triggertour",function(e){n(this).hasClass("open")?(n(this).tooltipster("close"),n(this).removeClass("open"),"yes"==g&&n(this).css("pointer-events","none")):(n(this).tooltipster("open"),n(this).addClass("open"),"yes"==g&&(n(this).css("pointer-events","visible"),n(".uael-hotspot-main-"+o+".open").hover(function(){S=!0},function(){S=!1})))}),"yes"==g?(n(".uael-hotspot-main-"+o).css("pointer-events","none"),E(),n(".uael-hotspot-main-"+o+'[data-uaeltour="1"]').trigger("click"),A()):"no"==g&&(n(".uael-hotspot-main-"+o).css("pointer-events","none"),E(),n(".uael-hotspot-main-"+o+'[data-uaeltour="1"]').trigger("click"))}function T(){if("custom"==s)if("yes"==v){if("yes"==g){var a=i.find(".uael-hotspot-overlay"),e=i.find(".uael-overlay-button");U||n(e).off().on("click",function(e){n(a).hide(),F()})}}else"auto"==y&&"yes"==g?U||void 0!==elementorFrontend.waypoint&&elementorFrontend.waypoint(t,F,{offset:k+"%"}):F()}}function o(e,a){if(void 0!==e){var t,i=e.data("id"),n=e.find(".uael-price-table-features-list"),o=n.data("side"),l=n.data("hotspottrigger"),s=n.data("arrow"),r=n.data("distance"),d=n.data("delay"),c=n.data("animation"),u=n.data("animduration"),f="uael-price-table-wrap-"+i,m=n.data("zindex"),p=(n.data("length"),n.data("tooltip-maxwidth")),g=n.data("tooltip-minwidth"),h=n.data("tooltip-responsive"),v=n.data("enable-tooltip");f+=" uael-price-table-tooltip uael-features-tooltip-hide-"+h,n.addClass("uael-features-tooltip-hide-"+h),"yes"===v&&(t=l,a(".uael-price-table-content-"+i).tooltipster({theme:["tooltipster-noir","tooltipster-noir-customized"],minWidth:g,maxWidth:p,side:o,trigger:t,arrow:s,distance:r,delay:d,animation:c,zIndex:m,interactive:!0,animationDuration:u,uaelclass:f}))}}function s(a,e){if(void 0!==a){var t=a.find(".uael-ba-container"),i=t.data("offset"),n=t.data("move-on-hover"),o=t.data("orientation");a.css("width",""),a.css("height",""),n="yes"==n,a.imagesLoaded(function(){l(a),a.find(".uael-ba-container").twentytwenty({default_offset_pct:i,move_on_hover:n,orientation:o}),e(window).resize(function(e){l(a)})})}}function r(e,a){if(void 0!==e){var t=a(".elementor-element-"+e.data("id"));void 0!==elementorFrontend.waypoint&&elementorFrontend.waypoint(t,i,{offset:"90%"})}}function d(c,u){if(void 0!==c){var f=c.find(".uael-timeline-node"),m=c.find(".uael-timeline-main");if(m.length<1)return!1;var p=c.find(".animate-border"),g=c.find(".uael-timeline-marker"),h=(c.find(".uael-events"),c.find(".uael-timeline-widget"),c.find(".uael-timeline__line__inner")),v=c.find(".uael-timeline__line"),_=(c.find(".elementor-widget-uael-timeline"),c.find(".uael-timeline-marker")),w=c.find(".uael-timeline-field:last-child"),y=_.first().position(),b=_.last().position();v.css("top",y.top);var k,C,x=w.height(),L=w.offset().top-f.offset().top;if(c.hasClass("uael-timeline-arrow-center"))v.css("bottom",b.top),C=L-y.top,k=C+b.top;else if(c.hasClass("uael-timeline-arrow-top")){var e=x-b.top;v.css("bottom",e),k=L}else if(c.hasClass("uael-timeline-arrow-bottom")){var a=x-b.top;v.css("bottom",a),C=L-y.top,k=C+b.top}document.documentElement.clientHeight,f.offset().top,u(document).scrollTop();var E=k+20;h.height(0);window.addEventListener("load",n),window.addEventListener("resize",n),window.addEventListener("scroll",n);var t=c.find(".uael-days"),i=c.data("id");t.hasClass("uael-timeline-infinite-load")&&t.infinitescroll({navSelector:".elementor-element-"+i+" .uael-timeline-pagination",nextSelector:".elementor-element-"+i+" .uael-timeline-pagination a.next",itemSelector:".elementor-element-"+i+" .uael-timeline-field",prefill:!0,bufferPx:200,loading:{msgText:"Loading",finishedMsg:"",img:uael_post_loader_script.post_loader,speed:10}},function(e){e=u(e),window.addEventListener("load",n),window.addEventListener("resize",n),window.addEventListener("scroll",n)})}function n(){if((m=c.find(".uael-timeline-main")).length<1)return!1;var e=u(document);if(y=_.first().position(),b=_.last().position(),w=c.find(".uael-timeline-field").last(),v.css("top",y.top),x=w.height(),L=w.offset().top-f.offset().top,c.hasClass("uael-timeline-arrow-center"))v.css("bottom",b.top),C=L-y.top,k=C+b.top;else if(c.hasClass("uael-timeline-arrow-top")){var a=x-b.top;v.css("bottom",a),k=L}else if(c.hasClass("uael-timeline-arrow-bottom")){var t=x-b.top;v.css("bottom",t),C=L-y.top,k=C+b.top}E=k+20;var i,n,o,l,s=document.documentElement.clientHeight/2,r=(o=f.offset().top)+y.top-e.scrollTop();r=r<0?Math.abs(r):-Math.abs(r),o<s?s+Math.abs(r)<E?h.height(s+r):E<=r+s&&h.height(E):r+s<E?r<0?(h.height(s-Math.abs(r)),0):h.height(s+r):E<=r+s&&h.height(E),g=c.find(".uael-timeline-marker"),p=c.find(".animate-border");for(var d=0;d<g.length;d++)i=u(g[d]).offset().top,n=u(p[d]).offset().top,o=f.offset().top,f.offset().top,l=i-e.scrollTop(),n-e.scrollTop()<s?(p[d].classList.remove("out-view"),p[d].classList.add("in-view")):(p[d].classList.add("out-view"),p[d].classList.remove("in-view")),l<s?(g[d].classList.remove("out-view-timeline-icon"),g[d].classList.add("in-view-timeline-icon")):(g[d].classList.add("out-view-timeline-icon"),g[d].classList.remove("in-view-timeline-icon"))}}function c(e,a){if(void 0!==e){e.find(".uael-rbs-wrapper"),e.data("id");var t,i=e.find(".uael-rbs-section-1"),n=e.find(".uael-rbs-section-2"),o=e.find(".uael-main-btn").attr("data-switch-type"),l=e.find(".uael-sec-1"),s=e.find(".uael-sec-2");switch(o){case"round_1":t=".uael-switch-round-1";break;case"round_2":t=".uael-switch-round-2";break;case"rectangle":t=".uael-switch-rectangle";break;case"label_box":t=".uael-switch-label-box";break;default:t="No Class Selected"}var r=e.find(t);""!==b&&k&&("content-1"!==b&&"content-2"!==b||UAELContentToggle._openOnLink(e,r)),r.is(":checked")?(i.hide(),n.show()):(i.show(),n.hide()),r.on("click",function(e){i.toggle(),n.toggle()}),l.on("click",function(e){r.prop("checked",!1),i.show(),n.hide()}),s.on("click",function(e){r.prop("checked",!0),i.hide(),n.show()})}}var b=window.location.hash.substring(1),k=new RegExp("^[\\w\\-]+$").test(b);UAELContentToggle={_openOnLink:function(e,a){var t=e.data("id"),i=(e.find(".uael-main-btn").attr("data-switch-type"),"#uael-toggle-init"+(".elementor-element-"+t));g("html, body").animate({scrollTop:g("#uael-toggle-init").find(".uael-rbs-wrapper").offset().top},500),"content-1"===b?(g(i+" .uael-rbs-content-1").show(),g(i+" .uael-rbs-content-2").hide(),a.prop("checked",!1)):(g(i+" .uael-rbs-content-2").show(),g(i+" .uael-rbs-content-1").hide(),a.prop("checked",!0))}};function u(i,l){if(void 0!==i){var n=i.find(".uael-video-gallery-wrap"),e=n.data("layout"),a=n.data("action"),t=n.data("all-filters"),o=i.find(".uael-filters-dropdown-list");if(!(n.length<1)){if("lightbox"==a?i.find(".uael-vg__play_full").fancybox():"inline"==a&&i.find(".uael-vg__play_full").on("click",function(e){e.preventDefault();var a=l("<iframe/>"),t=l(this),i=t.data("url"),n=t.closest(".uael-video__gallery-item").find(".uael-vg__overlay"),o=t.closest(".uael-video__gallery-iframe");a.attr("src",i),a.attr("frameborder","0"),a.attr("allowfullscreen","1"),a.attr("allow","autoplay;encrypted-media;"),o.html(a),o.attr("style","background:#000;"),n.hide()}),"carousel"==e){var s=n.data("vg_slider");n.find(".uael-video__gallery-iframe").imagesLoaded({background:!0})&&n.slick(s)}if(l("html").click(function(){o.removeClass("show-list")}),i.on("click",".uael-filters-dropdown-button",function(e){e.stopPropagation(),o.addClass("show-list")}),n.hasClass("uael-video-gallery-filter")){var r=i.find(".uael-video__gallery-filters"),d="*";if(""!==b&&k){var c=r.find("[data-filter='."+b.toLowerCase()+"']");0<c.length&&(d="."+b.toLowerCase(),c.siblings().removeClass("uael-filter__current"),c.addClass("uael-filter__current"))}if(0<r.length)""!==(m=r.data("default"))&&(d=m,def_cat_sel=r.find('[data-filter="'+m+'"]'),0<def_cat_sel.length&&(def_cat_sel.siblings().removeClass("uael-filter__current"),def_cat_sel.addClass("uael-filter__current")),-1==t.indexOf(d.replace(".",""))&&(d="*"));var u={};if(n.imagesLoaded({background:".item"},function(e){u=n.isotope({filter:d,layoutMode:"masonry",itemSelector:".uael-video__gallery-item"}),n.find(".uael-video__gallery-item").resize(function(){u.isotope("layout")})}),i.find(".uael-video__gallery-filter").on("click",function(){l(this).siblings().removeClass("uael-filter__current"),l(this).addClass("uael-filter__current");var e=l(this).data("filter");if("*"===e?i.find(".uael-video-gallery-wrap").data("filter-default"):e.replace(".filter-",""),i.find(".uael-video__gallery-filters").data("default"))var a=i.find(".uael-video__gallery-filters").data("default").length-8;else a=i.find(".uael-video-gallery-wrap").data("filter-default").length;var t=i.find(".uael-filter__current").text();t=t.substring(a,t.length),i.find(".uael-filters-dropdown-button").text(t),n.isotope({filter:e})}),i.find(".uael-video__gallery-filters").data("default"))var f=(m=i.find(".uael-video__gallery-filters").data("default")).length-8;else{var m;f=(m=i.find(".uael-video-gallery-wrap").data("filter-default")).length}var p=i.find(".uael-filter__current").text();p=p.substring(f,p.length),i.find(".uael-filters-dropdown-button").text(p)}}}}function f(n,o){if(void 0!==n){var l=n.find(".uael-img-justified-wrap"),s=l.data("rowheight"),r=l.data("lastrow"),a=n.find(".uael-filters-dropdown-list"),e=n.find(".uael-image-lightbox-wrap"),t=[],i="uael-fancybox-gallery-"+n.data("id");0<e.length&&(t=JSON.parse(e.attr("data-lightbox_actions"))),n.find('[data-fancybox="uael-gallery"]').fancybox({buttons:t,animationEffect:"fade",baseClass:i}),0<l.length&&l.imagesLoaded(function(){}).done(function(e){l.justifiedGallery({rowHeight:s,lastRow:r,selector:"div",waitThumbnailsLoad:!0})}),o("html").click(function(){a.removeClass("show-list")}),n.on("click",".uael-filters-dropdown-button",function(e){e.stopPropagation(),a.addClass("show-list")});var d=n.find(".uael-img-carousel-wrap");if(0<d.length){function c(e,a){var t=a.$slider,i=t.find(".slick-slide.slick-active"),n=-1;i.each(function(e){var a=o(this).innerHeight();n<a&&(n=a)}),t.find(".slick-list.draggable").animate({height:n},{duration:200,easing:"linear"}),n=-1}var u=JSON.parse(d.attr("data-image_carousel"));d.on("init",c),n.imagesLoaded(function(e){d.slick(u),d.on("afterChange",c),d.find(".uael-grid-item").resize(function(){setTimeout(function(){d.slick("setPosition")},300)})})}if(!U){var f=n.find(".uael-img-grid-masonry-wrap");if(f.length<1)return;if(!f.hasClass("uael-masonry")&&!f.hasClass("uael-cat-filters"))return;var m="fitRows";f.hasClass("uael-masonry")&&(m="masonry");var p=n.find(".uael-masonry-filters"),g="*";if(""!==b&&k){var h=p.find("[data-filter='."+b.toLowerCase()+"']");0<h.length&&(g="."+b.toLowerCase(),h.siblings().removeClass("uael-current"),h.addClass("uael-current"))}if(0<p.length)""!==(w=p.attr("data-default"))&&(g=w,def_cat_sel=p.find('[data-filter="'+w+'"]'),0<def_cat_sel.length&&(def_cat_sel.siblings().removeClass("uael-current"),def_cat_sel.addClass("uael-current")));if(0<l.length)l.imagesLoaded(function(){}).done(function(e){l.justifiedGallery({filter:g,rowHeight:s,lastRow:r,selector:"div"})});else{var v={filter:g,itemSelector:".uael-grid-item",percentPosition:!0,layoutMode:m,hiddenStyle:{opacity:0}},_={};n.imagesLoaded(function(e){_=f.isotope(v)})}if(n.on("click",".uael-masonry-filter",function(){var e=o(this),a=e.attr("data-filter");if(e.siblings().removeClass("uael-current"),e.addClass("uael-current"),"*"===a?n.find(".uael-img-gallery-wrap").data("filter-default"):a.substr(1),n.find(".uael-masonry-filters").data("default"))var t=n.find(".uael-masonry-filters").data("default");else t="."+n.find(".uael-img-gallery-wrap").data("filter-default");var i=n.find(".uael-current").text();i=i.substring(t.length-1,i.length),n.find(".uael-filters-dropdown-button").text(i),0<l.length?l.justifiedGallery({filter:a,rowHeight:s,lastRow:r,selector:"div"}):_.isotope({filter:a})}),n.find(".uael-masonry-filters").data("default"))var w=n.find(".uael-masonry-filters").data("default");else w="."+n.find(".uael-img-gallery-wrap").data("filter-default");var y=n.find(".uael-current").text();y=y.substring(w.length-1,y.length),n.find(".uael-filters-dropdown-button").text(y)}}}UAELVideo={_play:function(e){var a=g("<iframe/>"),t=e.data("src");0==e.find("iframe").length&&(a.attr("src",t),a.attr("frameborder","0"),a.attr("allowfullscreen","1"),a.attr("allow","autoplay;encrypted-media;"),e.html(a)),e.closest(".uael-video__outer-wrap").find(".uael-vimeo-wrap").hide()}},UAELEffects={_animateHeadline:function(e,t){e.each(function(){var e=g(this),a=t.data("speed");setTimeout(function(){UAELEffects._hideWord(e.find(".uael-active-heading"),t)},a)})},_hideWord:function(e,a){var t=UAELEffects._takeNext(e),i=a.data("animation"),n=a.data("speed");if("clip"==i){var o=a.data("clip_speed"),l=a.data("pause_time");e.parents(".uael-slide-main_ul").animate({width:"0px"},o,function(){setTimeout(function(){UAELEffects._switchWord(e,t),UAELEffects._showWord(t,a)},l)})}else UAELEffects._switchWord(e,t),setTimeout(function(){UAELEffects._hideWord(t,a)},n)},_takeNext:function(e){return e.is(":last-child")?e.parent().children().eq(0):e.next()},_switchWord:function(e,a){e.removeClass("uael-active-heading").addClass("uael-inactive-heading"),a.removeClass("uael-inactive-heading").addClass("uael-active-heading")},_showWord:function(e,a){if("clip"==a.data("animation")){var t=a.data("clip_speed"),i=a.data("pause_time");e.parents(".uael-slide-main_ul").animate({width:e.width()+3},t,function(){setTimeout(function(){UAELEffects._hideWord(e,a)},i)})}}};function m(a,i){if(void 0!==a){var n=a.find(".uael-video__outer-wrap"),o=a.find(".uael-video-inner-wrap"),t=n.data("hidedesktop"),l=n.data("hidetablet"),s=n.data("hidemobile"),r=n.data("stickybottom"),e=n.data("vsticky-viewport"),d=n.hasClass("uael-video-play-lightbox");if(n.off("click").on("click",function(e){if("yes"==n.data("vsticky")){var a=e.target.className;if(0<=a.toString().indexOf("uael-sticky-close-icon")||0<=a.toString().indexOf("uael-video-sticky-close"))return!1}var t=i(this).find(".uael-video__play");d||UAELVideo._play(t)}),"1"!=n.data("autoplay")&&1!=n.data("device")||d||UAELVideo._play(a.find(".uael-video__play")),"yes"==n.data("vsticky")){if(void 0!==elementorFrontend.waypoint)var c=elementorFrontend.waypoint(n,function(e){"down"===e?(n.removeClass("uael-sticky-hide"),n.addClass("uael-sticky-apply"),i(document).trigger("uael_after_sticky_applied",[a])):(n.removeClass("uael-sticky-apply"),n.addClass("uael-sticky-hide"))},{offset:e+"%",triggerOnce:!1});a.find(".uael-video-sticky-close").off("click.closetrigger").on("click.closetrigger",function(e){c[0].disable(),n.removeClass("uael-sticky-apply"),n.removeClass("uael-sticky-hide")}),u(c),m(),window.addEventListener("scroll",m),i(window).resize(function(e){u(c)})}i(document).on("uael_after_sticky_applied",function(e,a){var t=a.find(".uael-video-sticky-infobar");if(0!==t.length){var i=t.outerHeight();if((a.hasClass("uael-video-sticky-center_left")||a.hasClass("uael-video-sticky-center_right"))&&(i=Math.ceil(i/2),o.css("top","calc( 50% - "+i+"px )")),(a.hasClass("uael-video-sticky-bottom_left")||a.hasClass("uael-video-sticky-bottom_right"))&&""!==r){var n=(i=Math.ceil(i))+r;o.css("bottom",n)}}})}function u(e){var a=elementorFrontend.getCurrentDeviceMode();""!==t&&a==t?f(e):""!==l&&a==l?f(e):""!==s&&a==s?f(e):e[0].enable()}function f(e){e[0].disable(),n.removeClass("uael-sticky-apply"),n.removeClass("uael-sticky-hide")}function m(){!U&&n.hasClass("uael-sticky-apply")&&o.draggable({start:function(){i(this).css({transform:"none",top:i(this).offset().top+"px",left:i(this).offset().left+"px"})},containment:"window"})}}function p(o,l){if(void 0!==o){var e,a,t,i,n=o.data("id"),s=uael_script.ajax_url,r=o.find(".uael-login-form-wrapper").find(".uael-form"),d=o.find(".uael-login-form-submit"),c=d.find(".elementor-button-text"),u=o.find(".uael-login-form-username"),f=o.find(".uael-login-form-password"),m=o.find(".uael-login-form-remember"),p=o.find(".uaelFacebookContentWrapper"),g=p.find(".uael-facebook-text"),h=o.find(".uaelGoogleContentWrapper"),v=o.find(".uael-login-form-wrapper").data("redirect-url"),_=o.find(".uael-login-form-social-wrapper").data("send-email"),w=o.find(".uael-login-form-wrapper").data("nonce"),y=d.data("ajax-enable"),b=o.find(".toggle-password");if(o.find(".elementor-field").on("keyup",function(e){l(this).siblings(".uael-register-field-message").remove()}),o.find(".uael-password-wrapper").on("keyup",function(e){l(this).next(".uael-register-field-message").remove()}),b.on("click",function(){var e=l(this);e.toggleClass("fa-eye fa-eye-slash");var a=e.parent().find("input");"password"==a.attr("type")?a.attr("type","text"):a.attr("type","password")}),d.on("click",function(){l(this);var e=!1,a=o.find(".uael-loginform-error");if(""===u.val()&&(x(o,u,uael_login_form_script.required),e=!0),""===f.val()&&(x(o,f,uael_login_form_script.required),e=!0),!elementorFrontend.isEditMode()){if("yes"!==y)return!e&&0===a.length&&(r.animate({opacity:"0.45"},500).addClass("uael-form-waiting"),c.hasClass("disabled")||(c.addClass("disabled"),c.append('<span class="uael-form-loader"></span>')),!0);if(event.preventDefault(),!e&&0===a.length){var t={username:u.val(),password:f.val(),rememberme:m.val()};l.post(s,{action:"uael_login_form_submit",data:t,nonce:w,method:"post",dataType:"json",beforeSend:function(){r.animate({opacity:"0.45"},500).addClass("uael-form-waiting"),c.hasClass("disabled")||(c.addClass("disabled"),c.append('<span class="uael-form-loader"></span>'))}},function(e){r.animate({opacity:"1"},100).removeClass("uael-form-waiting"),c.find(".uael-form-loader").remove(),c.removeClass("disabled"),!0===e.success?(o.find(".uael-register-field-message").remove(),o.find(".uael-form").trigger("reset"),void 0===v?location.reload():window.location=v):!1===e.success&&"incorrect_password"===e.data?x(o,f,uael_login_form_script.incorrect_password):!1===e.success&&"invalid_username"===e.data?x(o,u,uael_login_form_script.invalid_username):!1===e.success&&"invalid_email"===e.data&&x(o,u,uael_login_form_script.invalid_email)})}}}),!elementorFrontend.isEditMode()){if(0<p.length){p.on("click",function(){is_fb_loggedin||FB.login(function(e){e.authResponse&&FB.api("/me",{fields:"id, name, first_name, last_name, email, link, gender, locale, picture"},function(a){var e=FB.getAuthResponse().userID,t=FB.getAuthResponse().accessToken;window.is_fb_loggedin=!0;var i={id:a.id,name:a.name,first_name:a.first_name,last_name:a.last_name,email:a.email,link:a.link,send_email:_};l.post(s,{action:"uael_login_form_facebook",data:i,nonce:w,method:"post",dataType:"json",userID:e,security_string:t,beforeSend:function(){r.animate({opacity:"0.45"},500).addClass("uael-form-waiting"),g.hasClass("disabled")||(g.addClass("disabled"),g.append('<span class="uael-form-loader"></span>'))}},function(e){!0===e.success?(r.animate({opacity:"1"},100).removeClass("uael-form-waiting"),g.find(".uael-form-loader").remove(),g.removeClass("disabled"),o.find(".status").addClass("success").text(uael_login_form_script.logged_in_message+a.first_name+"!"),void 0===v?location.reload():window.location=v):location.reload()})})},{scope:"email"})}),window.fbAsyncInit=function(){var e=p.data("appid");FB.init({appId:e,cookie:!0,xfbml:!0,version:"v2.8"})},e=document,a="facebook-jssdk",i=e.getElementsByTagName("script")[0],e.getElementById(a)||((t=e.createElement("script")).id=a,t.src="//connect.facebook.net/en_US/sdk.js",i.parentNode.insertBefore(t,i))}if(0<h.length){var k=h.data("clientid"),C=document.getElementById("uael-google-login-"+n);gapi.load("auth2",function(){auth2=gapi.auth2.init({client_id:k,cookiepolicy:"single_host_origin"}),auth2.attachClickHandler(C,{},function(e){var a=e.getBasicProfile(),t=(a.getName(),a.getEmail(),{send_email:_});if(window.is_google_loggedin){var i=e.getAuthResponse().id_token,n=h.find(".uael-google-text");l.ajax({url:s,method:"post",dataType:"json",data:{nonce:w,action:"uael_login_form_google",data:t,id_token:i},beforeSend:function(){r.animate({opacity:"0.45"},500).addClass("uael-form-waiting"),n.hasClass("disabled")||(n.addClass("disabled"),n.append('<span class="uael-form-loader"></span>'))},success:function(e){!0===e.success&&(r.animate({opacity:"1"},100).removeClass("uael-form-waiting"),n.find(".uael-form-loader").remove(),n.removeClass("disabled"),o.find(".status").addClass("success").text(uael_login_form_script.logged_in_message+e.username+"!"),void 0===v?location.reload():window.location=v)}})}},function(e){})})}}h.on("click",function(){window.is_google_loggedin=!0})}function x(e,a,t){var i=a.attr("name"),n=e.find(".uael-password-wrapper"),o=n.next().hasClass("uael-register-field-message"),l=a.next().hasClass("uael-register-field-message");switch(i){case"password":if(o)return;n.after('<span class="uael-register-field-message"><span class="uael-loginform-error">'+t+"</span></span>");break;default:if(l)return;a.after('<span class="uael-register-field-message"><span class="uael-loginform-error">'+t+"</span></span>")}}}function h(e,a){var t=e.find(".uael-faq-accordion > .uael-accordion-content"),i=e.find(".uael-faq-container").data("layout");e.find(".uael-accordion-title").on("click keypress",function(e){e.preventDefault(),$this=a(this),function(e){if("toggle"==i)e.hasClass("uael-title-active")?(e.removeClass("uael-title-active"),e.attr("aria-expanded","false")):(e.addClass("uael-title-active"),e.attr("aria-expanded","true")),e.next(".uael-accordion-content").slideToggle("normal","swing");else if("accordion"==i)e.hasClass("uael-title-active")?(e.removeClass("uael-title-active"),e.next(".uael-accordion-content").slideUp("normal","swing",function(){a(this).prev().removeClass("uael-title-active"),e.attr("aria-expanded","false")})):(t.hasClass("uael-title-active")&&t.removeClass("uael-title-active"),t.slideUp("normal","swing",function(){a(this).prev().removeClass("uael-title-active")}),e.addClass("uael-title-active"),e.attr("aria-expanded","true"),e.next(".uael-accordion-content").slideDown("normal","swing"))}($this)})}function v(e,a){void 0!==e&&e.find("select:not([multiple])").each(function(){a(this).wrap("<span class='uael-ff-select-custom'></span>")})}g(window).on("elementor/frontend/init",function(){elementorFrontend.isEditMode()&&(U=!0),elementorFrontend.hooks.addAction("frontend/element_ready/uael-fancy-heading.default",r),elementorFrontend.hooks.addAction("frontend/element_ready/uael-ba-slider.default",s),elementorFrontend.hooks.addAction("frontend/element_ready/uael-hotspot.default",n),elementorFrontend.hooks.addAction("frontend/element_ready/uael-timeline.default",d),elementorFrontend.hooks.addAction("frontend/element_ready/uael-content-toggle.default",c),elementorFrontend.hooks.addAction("frontend/element_ready/uael-gf-styler.default",e),elementorFrontend.hooks.addAction("frontend/element_ready/uael-cf7-styler.default",t),elementorFrontend.hooks.addAction("frontend/element_ready/uael-image-gallery.default",f),elementorFrontend.hooks.addAction("frontend/element_ready/uael-video.default",m),elementorFrontend.hooks.addAction("frontend/element_ready/uael-video-gallery.default",u),elementorFrontend.hooks.addAction("frontend/element_ready/uael-caf-styler.default",a),elementorFrontend.hooks.addAction("frontend/element_ready/uael-login-form.default",p),elementorFrontend.hooks.addAction("frontend/element_ready/uael-faq.default",h),elementorFrontend.hooks.addAction("frontend/element_ready/uael-ff-styler.default",v),elementorFrontend.hooks.addAction("frontend/element_ready/uael-price-table.default",o),U&&elementor.channels.data.on("element:after:duplicate element:after:remove",function(e,a){g(".elementor-widget-uael-ba-slider").each(function(){s(g(this),g)})})})}(jQuery);