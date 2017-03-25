(function($) {
   $().ready(function() { 




   			


   			/*--- carrinho ------------------------------------------------------------------------*/
   			/* exibe o carrinho no mouseover */

   			/*$('.page-header .block-commerce-cart').mouseenter(function(){               
   				$('.page-header .block-commerce-cart .cart-empty-block').show();
   			}).mouseleave(function(){
   				$('.page-header .block-commerce-cart .cart-empty-block').hide();
   			});   			*/

            $('.page-header .line-item-quantity').appendTo('.page-header .cart-contents');

            $('.page-header .cart-contents').mouseenter(function(){
               $('.page-header .cart-contents .view-commerce-cart-block').show();
            }).mouseleave(function(){
               $('.page-header .cart-contents .view-commerce-cart-block').hide();
            });

   			
    });
})(jQuery);