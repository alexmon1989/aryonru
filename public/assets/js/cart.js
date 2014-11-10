/**
 * Функция добавления товара в корзину
 * 
 * @param int id id товара
 */
function add_to_cart(id)
{
    // Узнаём язык
    var href = location.href;
    var lang = 'ru';
    if (href.search('/en/') != -1)
        lang = 'en';
    if (href.search('/os/') != -1)
        lang = 'os';
    
    var url = lang + '/main/catalog/add_to_cart';    
    TINY.box.show({url:url,
                   post:'id='+id,
                   width:450,
                   height:270,
                   opacity:20,
                   topsplit:3,
                   openjs:function(){
                       // Обновляем данные корзины
                       $.getJSON( 'api/price_count_cart.json?lang='+lang, function( data ) {
                           $('#total_price').html(data.price);
                           $('#total_count').html(data.count);
                       });
                   }
               });
}