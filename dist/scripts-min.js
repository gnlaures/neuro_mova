"use strict";function _createForOfIteratorHelper(e,t){var i,r="undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(!r){if(Array.isArray(e)||(r=_unsupportedIterableToArray(e))||t&&e&&"number"==typeof e.length)return r&&(e=r),i=0,{s:t=function(){},n:function(){return i>=e.length?{done:!0}:{done:!1,value:e[i++]}},e:function(e){throw e},f:t};throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var s,a=!0,o=!1;return{s:function(){r=r.call(e)},n:function(){var e=r.next();return a=e.done,e},e:function(e){o=!0,s=e},f:function(){try{a||null==r.return||r.return()}finally{if(o)throw s}}}}function _unsupportedIterableToArray(e,t){if(e){if("string"==typeof e)return _arrayLikeToArray(e,t);var i=Object.prototype.toString.call(e).slice(8,-1);return"Map"===(i="Object"===i&&e.constructor?e.constructor.name:i)||"Set"===i?Array.from(e):"Arguments"===i||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(i)?_arrayLikeToArray(e,t):void 0}}function _arrayLikeToArray(e,t){(null==t||t>e.length)&&(t=e.length);for(var i=0,r=new Array(t);i<t;i++)r[i]=e[i];return r}function goToSection__scroll(e,t,i,r,s){var a=$(window).scrollTop(),o=$(e).offset().top;o<a?setTimeout(function(){$("html, body").animate({scrollTop:o-t},r)},s):setTimeout(function(){$("html, body").animate({scrollTop:o-i},r)},s)}var iconsQtf,cleanClasses=function(e){for(var t=1;t<=12;t++)e.classList.remove("--col"+t);e.classList.remove("--colNaN"),e.classList.remove("u-jcc"),e.classList.remove("u-jcsb"),e.classList.remove("u-jcfs"),e.classList.remove("u-jcfe")},managePadds=function(e,t){for(var i=1;i<=50;i++){var r,s=_createForOfIteratorHelper(e);try{for(s.s();!(r=s.n()).done;)r.value.classList.remove("u-pad"+i)}catch(e){s.e(e)}finally{s.f()}}var a,o=_createForOfIteratorHelper(e);try{for(o.s();!(a=o.n()).done;)a.value.classList.add("u-pad"+t)}catch(e){o.e(e)}finally{o.f()}},initResponsiveGrids=function(){cResponsiveGrid.forEach(function(e,t){var i={breakVW:e.getAttribute("data-break-vw").split(", ").map(Number),breakCols:e.getAttribute("data-break-cols").split(", ").map(Number),breakPaddings:e.getAttribute("data-break-padds").split(", ").map(Number),breakJC:e.getAttribute("data-break-jc").split(", ").map(String),initCols:parseInt(e.getAttribute("data-init-cols")),initPadding:e.getAttribute("data-init-padd"),initJC:e.getAttribute("data-init-jc"),vw:window.innerWidth,childrens:e.children.length},r=Array.prototype.slice.call(e.children,0),s=(e.classList.add("js-responsiveGrid"),i.breakCols.length);if(s===i.breakVW.length)for(var a=0;a<=s;a++)i.breakVW[a]>=i.vw&&(cleanClasses(e),managePadds(r,i.breakPaddings[a]),e.classList.add("--col"+i.breakCols[a]),e.classList.add(i.breakJC[a]),e.classList.add("u-calcPositionNegative"+i.breakPaddings[a])),i.vw>i.breakVW[0]&&(cleanClasses(e),managePadds(r,i.initPadding),e.classList.add("--col"+i.initCols),e.classList.add(i.initJC),e.classList.add("u-calcPositionNegative"+i.initPadding));else console.log("Erro na construção do grid responsivo")})},cResponsiveGrid=document.querySelectorAll(".c-responsiveGrid"),cForm__attach=(window.addEventListener("load",initResponsiveGrids),window.addEventListener("resize",initResponsiveGrids),$(".js-send__cFormContact").on("click",function(e){e.preventDefault(),$(this).closest(".c-form").addClass("is-feedback"),$(this).closest(".c-form").find(".c-formFeedback__status.--trying").addClass("is-active")}),document.querySelectorAll(".c-form .js-field__attach")),cCopyright_element=(cForm__attach.forEach(function(t){t.addEventListener("change",function(){var e=t.value.split("fakepath")[1];t.closest(".--file").querySelectorAll(".js-field__text")[0].value=e})}),$(".c-photo").length&&Fancybox.bind("a.c-photo",{}),$(".js-c-copyright__date")),cCopyright_date=(new Date).getFullYear();function updateSliderPageInfo(e){var t=e.querySelector(".totalPages"),i=e.querySelector(".activePage"),r=e.querySelectorAll(".swiper-slide").length,e=e.querySelector(".swiper-slide-active").getAttribute("aria-label").split(" /")[0];t.textContent=r,i.textContent=e}$(".js-c-copyright__date").html(cCopyright_date),$(".c-hamburguer").on("click",function(){$(this).toggleClass("is-active")}),$(".c-scrollLink").on("click",function(e){e.preventDefault(),goToSection__scroll($(this).attr("href"),86,86,500,10)}),$(".c-toggleItem__head").on("click",function(e){e.preventDefault(),$(this).closest(".c-toggleItem").toggleClass("is-active")}),$(".c-tagsIconGrid")&&(iconsQtf=$(".c-tagsIconGrid li").length,$(".c-tagsIconGrid").find(".c-responsiveGrid").addClass("child__"+iconsQtf),console.log(iconsQtf));var sSliderCards__lancamentos=new Swiper(".js-swiperProductSlider__lancamentos",{slidesPerView:1,spaceBetween:10,navigation:{nextEl:".js-swiperProductSlider__lancamentos .c-arrowButton.--right",prevEl:".js-swiperProductSlider__lancamentos .c-arrowButton.--left"},breakpoints:{530:{slidesPerView:2,spaceBetween:15},840:{slidesPerView:3,spaceBetween:15},1240:{slidesPerView:4,spaceBetween:15}}}),sSliderCards__maisVendidos=new Swiper(".js-swiperProductSlider__maisVendidos",{slidesPerView:1,spaceBetween:10,navigation:{nextEl:".js-swiperProductSlider__maisVendidos .c-arrowButton.--right",prevEl:".js-swiperProductSlider__maisVendidos .c-arrowButton.--left"},breakpoints:{530:{slidesPerView:2,spaceBetween:15},840:{slidesPerView:3,spaceBetween:15},1240:{slidesPerView:4,spaceBetween:15}}}),sSliderCards__categorias=new Swiper(".js-swiperProductSlider__categories",{slidesPerView:1,spaceBetween:10,navigation:{nextEl:".js-swiperProductSlider__categories .c-arrowButton.--right",prevEl:".js-swiperProductSlider__categories .c-arrowButton.--left"},breakpoints:{620:{slidesPerView:3,spaceBetween:15},800:{slidesPerView:4,spaceBetween:15},1024:{slidesPerView:5,spaceBetween:15},1260:{slidesPerView:6,spaceBetween:15}}}),sSliderCards__quality=new Swiper(".js-swiperAboutSlider__quality",{slidesPerView:1,spaceBetween:10,navigation:{nextEl:".js-swiperAboutSlider__quality .c-arrowButton.--right",prevEl:".js-swiperAboutSlider__quality .c-arrowButton.--left"},breakpoints:{800:{slidesPerView:2,spaceBetween:15},1024:{slidesPerView:3,spaceBetween:15},1260:{slidesPerView:4,spaceBetween:15}}}),listSelectedJobs=($(".s-productGrid")&&$(window).on("load",function(){var e=$(window).width();console.log(e),e<=920&&$(".c-productsAside .c-toggleItem").removeClass("is-active")}),$(".c-cardOpenJob__head").on("click",function(){$(this).closest(".c-cardOpenJob").toggleClass("is-active")}),$(".c-cardOpenJob__selectedJobList")),btnToAddJobInList=$(".js-c-cardOpenJob__addToApplyList"),lNav=(btnToAddJobInList.on("click",function(){$(".c-field.--jobs").removeClass("u-dnone"),$(this).closest(".c-cardOpenJob").addClass("is-added"),$(this).find(".c-btn__caption").html("Selecionado");var e=$(this).closest(".c-cardOpenJob").attr("data-job-id"),t=$(this).closest(".c-cardOpenJob").find(".c-cardOpenJob__title").find("h4").html();listSelectedJobs.append("<li><p>"+t+" - "+e+'</p><span class="js-removeSelectedJob" data-job-id="'+e+'"></span></li>'),goToSection__scroll(".s-carrers__form",150,150,300,10)}),$(document).on("click",".js-removeSelectedJob",function(){var e=$(this).attr("data-job-id"),t=listSelectedJobs.children("li").length;$('.c-cardOpenJob[data-job-id="'+e+'"]').removeClass("is-added").find(".c-cardOpenJob__infos").find(".c-btn__caption").html("Inscreva-se"),$(this).closest("li").remove(),1===t&&$(".c-field.--jobs").addClass("u-dnone")}),document.querySelector(".l-nav")),lNavScrollInitPosition=0;function scrollEffect(){0===document.body.getBoundingClientRect().top?(lNav.classList.remove("--scrolledDown"),lNav.classList.remove("--scrolledUp")):document.body.getBoundingClientRect().top>lNavScrollInitPosition?(lNav.classList.add("--scrolledUp"),lNav.classList.add("--scrolled"),lNav.classList.remove("--scrolledDown")):(lNav.classList.remove("--scrolledUp"),lNav.classList.add("--scrolledDown"),lNav.classList.add("--scrolled")),lNavScrollInitPosition=document.body.getBoundingClientRect().top}$(window).on("scroll",function(){scrollEffect()}),$(window).on("load",function(){scrollEffect()}),$(".l-nav .c-hamburguer").on("click",function(){$(".l-navMobile").addClass("is-active"),$(".l-navMobile .c-hamburguer").addClass("is-active")}),$(".l-navMobile .c-hamburguer").on("click",function(){$(".l-navMobile").removeClass("is-active"),$(".l-nav .c-hamburguer").removeClass("is-active")}),$(".l-navMobile__mask").on("click",function(){$(".l-navMobile").removeClass("is-active"),$(".l-navMobile .c-hamburguer").removeClass("is-active"),$(".l-nav .c-hamburguer").removeClass("is-active")});var swiper=new Swiper(".l-headerHome__slider",{pagination:{el:".l-headerHome .swiper-pagination",clickable:!0},navigation:{nextEl:".l-headerHome__controls__arrows .c-arrowButton.--right",prevEl:".l-headerHome__controls__arrows .c-arrowButton.--left"},on:{init:function(){updateSliderPageInfo(document.querySelector(".l-headerHome"))},slideNextTransitionStart:function(){updateSliderPageInfo(document.querySelector(".l-headerHome"))},slidePrevTransitionEnd:function(){updateSliderPageInfo(document.querySelector(".l-headerHome"))}},autoplay:{delay:2e4}});$(".l-footer__menu .c-defaultContentStyle").on("click",function(e){e.preventDefault(),$(".c-siteMap__item").removeClass("is-active"),$(this).closest(".c-siteMap__item").addClass("is-active")});