!function(t){var e={};function n(a){if(e[a])return e[a].exports;var o=e[a]={i:a,l:!1,exports:{}};return t[a].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=t,n.c=e,n.d=function(t,e,a){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:a})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var a=Object.create(null);if(n.r(a),Object.defineProperty(a,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)n.d(a,o,function(e){return t[e]}.bind(null,o));return a},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="/",n(n.s=11)}({11:function(t,e,n){t.exports=n("s/U8")},"7DHn":function(t,e){function n(t){return(n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}t.exports={getElementsThatAreInViewport:function(t,e){var n=$(window).scrollTop(),a=n+$(window).height(),o=e?null:[],r=!0,c=!1,i=void 0;try{for(var d,l=t[Symbol.iterator]();!(r=(d=l.next()).done);r=!0){var s=d.value,u=(s=$(s)).offset().top,p=u+s.height();if(e){if(n>=u&&n<=p||a<=p&&a>=u)return o=s}else n<=u&&a>=p&&o.push(s)}}catch(t){c=!0,i=t}finally{try{r||null==l.return||l.return()}finally{if(c)throw i}}return o},checkNested:function(t){for(var e=Array.prototype.slice.call(arguments,1),n=0;n<e.length;n++){if(!t||!t.hasOwnProperty(e[n]))return!1;t=t[e[n]]}return!0},getUniqueId:function(){return"xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g,function(t){var e=16*Math.random()|0;return("x"==t?e:3&e|8).toString(16)})},isElementFullyInViewport:function(t){var e=t.offset().top,n=e+t.height(),a=$(window).scrollTop(),o=a+$(window).height();return e>=a&&n<=o},setCookie:function(t,e,a){var o;if(a){var r=new Date;r.setTime(r.getTime()+24*a*60*60*1e3),o="; expires="+r.toGMTString()}else o="";"object"==n(e)&&(e=JSON.stringify(e)),document.cookie=t+"="+e+o+"; path=/"},getCookie:function(t){if(document.cookie.length>0&&(c_start=document.cookie.indexOf(t+"="),-1!=c_start)){c_start=c_start+t.length+1,c_end=document.cookie.indexOf(";",c_start),-1==c_end&&(c_end=document.cookie.length);var e=function(t){try{JSON.parse(t)}catch(e){return t}return!0}(document.cookie.substring(c_start,c_end));return e="object"==n(e)?e:unescape(e)}return null},numberToDollarsFormat:function(t){return"$ "+t.toFixed(2).replace(/\d(?=(\d{3})+\.)/g,"$&,")},buildStarsIconsFromScore:function(t){var e=Math.floor(t),n=t-e,a="";for(i=1;i<=5;i++)i<=e?a+='<i class="fas fa-star"></i>':i==e+1?a+=n>=.5?'<i class="fas fa-star-half-alt"></i>':'<i class="far fa-star"></i>':a+='<i class="far fa-star"></i>';return a},getNaturallyCurlyDomain:function(){var t=window.location.host,e=window.location.protocol,n=t.split(".");return 3===n.length?"curltalk"===n[0]?"".concat(e,"//www.naturallycurly.com"):"".concat(e,"//").concat(t):"diana.test"===t?"".concat(e,"//diana.test"):"https://www.naturallycurly.com"},showHideLoadingIcon:function(t,e){var n=t.find(".loading-icon");n.length?(n.remove(),e.show(),t.removeClass("clicked")):(e.hide(),t.append('<i class="fas fa-circle-notch fa-spin loading-icon"></i>'),t.addClass("clicked"))}}},"97Hv":function(t,e,n){var a=n("7DHn"),o=a.getNaturallyCurlyDomain(),r=window.innerWidth>=992,c='<i class="fas fa-circle-notch fa-spin loading-icon"></i>';function i(){var t=JSON.parse(localStorage.getItem("basket-data")),e="",n=d(),s=n.shoppingCartSubMenuContainer,u=n.numberItemsRedCircleElement;s.html(' <div style="text-align: center; font-size: 15px;">\n                                            '.concat(c," Refreshing shopping cart ...\n                                        </div>")),u.hide();l(function(n){if(t&&t.cartProducts.length&&n){if(u.html(t.cartProducts.length),u.show(),e+=function(t,e){var n="",o=t.cartProducts.length,r=0;n+='<div class="row top-cart-item">\n                                <div class="number-products">'.concat(o," items in basket</div>\n                            </div>"),n+='<div class="shopping-cart-items">';var c=!0,i=!1,d=void 0;try{for(var l,s=t.cartProducts[Symbol.iterator]();!(c=(l=s.next()).done);c=!0){var u=l.value;try{var p=u.id,m=u.quantity,f=u.product_id,h=t.dataProducts[f],g=h.images.url_standard,v=h.brandData.name,b=h.name.replace(v,""),y=h.price;n+='<div class="row shopping-cart-item" data-cart-item-id="'.concat(p,'" data-product-id="').concat(f,'">\n                                        <div class="col-12 col-md-3">\n                                            <img class="img-fluid product-image" src="').concat(g,'"/>\n                                        </div>\n                                        <div class="col-12 col-md-6">\n                                            <div class="product-brand">').concat(v,'</div>\n                                            <div class="product-name">').concat(b,'</div>\n                                            <div class="product-quantity">Quantity: ').concat(m,'</div>\n                                        </div>\n                                        <div class="col-12 col-md-3">\n                                            <div class="product-price">').concat(a.numberToDollarsFormat(y*m),'</div>\n                                            <div class="product-remove-btn"><span class="btn-text"><i class="fas fa-trash-alt"></i> Remove</span></div>\n                                        </div>\n                                    </div>'),r+=y*m}catch(t){console.log(t),console.error("Error adding product to the submenu, productData below: "),console.log(u)}}}catch(t){i=!0,d=t}finally{try{c||null==s.return||s.return()}finally{if(i)throw d}}return n+="</div>",n+='<div class="row bottom-cart-item">\n                                <div class="col-12 col-md-7 total-products-price">\n                                    Basket total ('.concat(o,' items): <br><span class="total-price">').concat(a.numberToDollarsFormat(r),'</span>\n                                </div>\n                                <div class="col-12 col-md-5 checkout-btn-container">\n                                    <button class="btn btn-primary btn-checkout" data-cart-url="').concat(e,'">\n                                        <span class="btn-text">Checkout</span>\n                                    </button>\n                                </div>\n                            </div>')}(t,n),!r){var d=$(".number-notifications");d.html(t.cartProducts.length),d.show()}$("#shopping-cart-container:not(.btn-checkout-click-event-added)").addClass("btn-checkout-click-event-added").on("click",".btn-checkout",function(){var t=$(this),e=t.find(".btn-text"),n=t.data("cart-url");t.prop("disabled",!0),e.hide(),t.append(c);var a=window.open(n);if(!a||a.closed||void 0===a.closed)t.after('<div class="popup-blocker-message" style="color: red;">Please disable the popup blocker for this page.</div>');else{var o=t.find(".popup-blocker-message");o.length&&o.remove()}var r=function(n){var a=t.find(".loading-icon");n&&t.data("cart-url",n),t.prop("disabled",!1),a.hide(),e.show()};setTimeout(function(){l(r)},3e3)}),$("#shopping-cart-container:not(.btn-remove-click-event-added)").addClass("btn-remove-click-event-added").on("click",".product-remove-btn",function(){var t=$(this),e=t.find(".btn-text"),n=t.parents(".shopping-cart-item"),a=n.data("cart-item-id"),r=n.data("product-id"),d=[{id:a}],l=localStorage.getItem("shopping-cart-id"),s={products:d,shoppingCartId:l};e.hide(),t.append(c),$.ajax({type:"POST",dataType:"json",contentType:"application/json",headers:{"X-CSRF-TOKEN":csrfToken},url:o+"/bigCommerce/deleteProductsFromShoppingCart",data:JSON.stringify(s),success:function(n){200!=n[a].status&&204!=n[a].status||function(t,e){var n=JSON.parse(localStorage.getItem("basket-data"));if(n){delete n.dataProducts[e];for(var a=0;a<n.cartProducts.length;a++)if(n.cartProducts[a].id===t){n.cartProducts.splice(a,1);break}n.cartProducts.length>0?localStorage.setItem("basket-data",JSON.stringify(n)):(localStorage.removeItem("shopping-cart-id"),localStorage.removeItem("basket-data")),i()}}(a,r),t.find(".loading-icon").remove(),e.show()},error:function(n){console.error("Error deleting product from shopping cart"),console.log(n),t.find(".loading-icon").remove(),e.show()}})})}else e='<div class="row top-cart-item">\n                                        No items in the basket\n                                    </div>';s.html(e)})}function d(){var t=null,e=null;if(r){var n=$(".navbar.navbar-expand-lg");t=n.find("#shopping-cart-container"),e=n.find(".number-cart-items")}else{var a=$("#navbarCollapser");t=a.find("#shopping-cart-container"),e=a.find(".number-cart-items"),t.parents(".dropdown-menu").on("click",function(t){t.stopPropagation()})}return{shoppingCartSubMenuContainer:t,numberItemsRedCircleElement:e}}function l(t){var e=localStorage.getItem("shopping-cart-id"),n=null;$.ajax({type:"GET",url:o+"/bigCommerce/getCartUrls/"+e,dataType:"json",success:function(e){var o=a.checkNested(e,"status");if(o&&201==e.status&&a.checkNested(e,"body","data"))n=e.body.data.cart_url;else if(o&&404==e.status)localStorage.removeItem("shopping-cart-id"),localStorage.removeItem("basket-data");else if(o&&403==e.status){d().shoppingCartSubMenuContainer.html(' <div style="text-align: center; font-size: 15px;">\n                                                            '.concat(c," Unable to get data from Bigcommerce\n                                                        </div>"))}t(n)},error:function(e){console.error("Error getting shopping cart urls"),console.log(e),t(n)}})}$(document).ready(function(){window.shoppingCartReadyCalled||(r||$(".navbar").find("#shopping-cart-container").remove(),function(){var t=r?$(".navbar-top-part").find("#shopping-cart-button"):$("#navbarCollapser").find("#shopping-cart-button");if(r){var e=t.parents(".nav-item"),n=e.find(".nc-dropdown-menu"),a=n.find(".nc-dropdown-item");n.css({left:"unset",right:"0px",width:"500px"}),a.css({cursor:"default"})}else{var o=$(".navbar-top-part").find("#shopping-cart-button"),c=o.parents(".nav-item");c.hide()}t.show()}(),window.shoppingCartReadyCalled=!0)}),t.exports={fillShoppingCartSubMenu:i}},"s/U8":function(t,e,n){var a=n("97Hv"),o=n("7DHn"),r=o.getNaturallyCurlyDomain();function c(t){t.btnAddCart.find(".loading-icon").remove(),t.btnText.show(),t.btnAddCart.prop("disabled",!1),t.modalContainer.modal("hide")}$(document).ready(function(){window.productDetailsModalReadyCalled||($(document).on("click",".btn-quick-look",function(){var t=$(this),e=t.parents(".product-container"),n=e.data("big-commerce-data");!function(t){var e=$("#product-details-modal"),n=e.find(".product-image"),a=e.find(".product-brand"),r=e.find(".product-name"),c=e.find(".product-description"),i=e.find(".product-score"),d=e.find(".product-price"),l=e.find(".product-quantity"),s=e.find(".btn-add-cart"),u={};u.productImageElement=n,u.productBrandElement=a,u.productNameElement=r,u.productDescriptionElement=c,u.productScore=i,u.productPriceElement=d,u.productQuantityElement=l,u.productBtnAddCartElement=s,function(t){var e=t.productBtnAddCartElement.find(".btn-text");t.productQuantityElement.show(),t.productBtnAddCartElement.prop("disabled",!1),e.html('Add to cart <i class="fas fa-cart-plus"></i>'),t.productImageElement.html(""),t.productNameElement.html(""),t.productDescriptionElement.html(""),t.productPriceElement.html("")}(u),function(t,e){var n=o.buildStarsIconsFromScore(t.reviewsData.reviewsAverage);if(0==t.inventory_level){var a=e.productBtnAddCartElement.find(".btn-text");e.productQuantityElement.hide(),e.productBtnAddCartElement.prop("disabled",!0),a.html("Out of stock")}else{var r=t.order_quantity_minimum?t.order_quantity_minimum:1,c=t.order_quantity_maximum?t.order_quantity_maximum:t.inventory_level;e.productQuantityElement.val(r),e.productQuantityElement.attr("min",r),e.productQuantityElement.attr("max",c)}e.productImageElement.html('<a target="_blank" href="https://shop.naturallycurly.com'.concat(t.custom_url.url,'"><img src="').concat(t.images.url_standard,'" class="img-fluid" /></a>')),e.productNameElement.html('<a target="_blank" href="https://shop.naturallycurly.com'.concat(t.custom_url.url,'">').concat(t.name,"</a>")),e.productDescriptionElement.html(t.meta_description+"<br><br>"+t.warranty),e.productScore.html('<a target="_blank" href="https://shop.naturallycurly.com'.concat(t.custom_url.url,'#stamped-main-widget" style="color: #7d7d7d;">\n                                    <span class="product-stars">\n                                        ').concat(n,'\n                                    </span>\n                                    <span class="product-number-reviews">\n                                        ').concat(t.reviewsData.reviewsCount," REVIEWS\n                                    </span>\n                                </a>")),e.productPriceElement.html("Price: "+o.numberToDollarsFormat(t.price))}(t,u),e.data("product-details",t),e.modal("show")}(n)}),$("#product-details-modal:not(.product-quantity-change-event-added)").addClass("product-quantity-change-event-added").on("change",".product-quantity",function(){var t=$(this),e=parseInt(t.attr("min")),n=parseInt(t.attr("max")),a=parseInt(t.val());a>n&&t.val(n),a<e&&t.val(e)}),$("#product-details-modal:not(.btn-add-cart-click-event-added)").addClass("btn-add-cart-click-event-added").on("click",".btn-add-cart",function(){var t=$(this),e=t.find(".btn-text"),n=t.parents(".modal"),i=n.data("product-details"),d=n.find(".product-quantity"),l=d.val(),s={btnAddCart:t,btnText:e,modalContainer:n};e.hide(),t.append('<i class="fas fa-circle-notch fa-spin loading-icon"></i>'),t.prop("disabled",!0),function(t,e,n){var i={products:[{id:t.id,quantity:e}]},d="",l=localStorage.getItem("shopping-cart-id");l?(d=r+"/bigCommerce/addProductsToShoppingCart",i.shoppingCartId=l):d=r+"/bigCommerce/createShoppingCartBigCommerce",$.ajax({type:"POST",dataType:"json",headers:{"X-CSRF-TOKEN":csrfToken},contentType:"application/json",data:JSON.stringify(i),url:d,success:function(e){!function(t,e,n,r){if(!o.checkNested(n,"status")||201!==n.status&&200!==n.status)throw c(r),new Error("Error adding the product to cart, probably no items available on stock.");if(o.checkNested(n,"body","data")){e||201!==n.status||localStorage.setItem("shopping-cart-id",n.body.data.id);var i=JSON.parse(localStorage.getItem("basket-data")),d=null;i?d=i.dataProducts:(d={},i={}),d[t.id]=t,i.dataProducts=d,i.cartProducts=n.body.data.line_items.physical_items,localStorage.setItem("basket-data",JSON.stringify(i)),a.fillShoppingCartSubMenu()}c(r)}(t,l,e,n)},error:function(t){console.error("Error adding product to shopping cart on shop.nc.com"),console.log(t),c(n)}})}(i,l,s)}),window.productDetailsModalReadyCalled=!0)})}});