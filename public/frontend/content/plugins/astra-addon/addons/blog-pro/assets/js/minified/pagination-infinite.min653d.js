!function(e){var o=parseInt(astra.infinite_total)||"",r=parseInt(astra.infinite_count)||"",i=astra.ajax_url||"",n=astra.infinite_nonce||"",a=astra.pagination||"",s=astra.masonryEnabled||!1,d=!0,t=astra.infinite_scroll_event||"",l=jQuery(".ast-pagination-infinite .ast-loader"),f=astra.astinfiniteposttype;if(typeof a&&"infinite"==a){if("undefined"!=typeof wp&&void 0!==wp.customize)return;if(typeof t)switch(t){case"click":e(".ast-load-more").click(function(a){if(a.preventDefault(),"undefined"!=r&&""!=r&&"undefined"!=o&&""!=o){if(o<r)return!1;p(r),r++}});break;case"scroll":if(e(".ast-load-more").hide(),0<e("#main").find("article:last").length){var c=jQuery(window).outerHeight()/1.25;e(window).scroll(function(){if(e(window).scrollTop()+c>=e("#main").find("article:last").offset().top){if(o<r)return!1;1==d&&(p(r),r++,d=!1)}})}}function p(a){e(".ast-load-more").removeClass(".active").hide(),l.show();var t={action:"astra_pagination_infinite",page_no:a,post_type:f,nonce:n,query_vars:astra.query_vars,astra_infinite:"astra_pagination_ajax"};e.post(i,t,function(a){e(window).trigger("astAddedAjaxPosts");var t=e(a);l.hide(),e(".ast-load-more").addClass("active").show(),e("#main > .ast-row").append(t);var i=astra.grid_layout||"3";1==s&&1<i&&(e("#main > .ast-row").masonry("appended",t,!0),e("#main > .ast-row").imagesLoaded(function(){e("#main > .ast-row").masonry("reload")}),e("#main > .ast-row").trigger("masonryItemAdded"));var n=astra.no_more_post_message||"";o<r&&e(".ast-pagination-infinite").html('<span class="ast-load-more no-more active" style="display: inline-block;">'+n+"</span>"),e(window).trigger("astBlogProAjaxPostsAdded"),d=!0})}}}(jQuery);