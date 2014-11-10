/**
 * Функция добавления показа окна для добавлеия заявки на перезвон
 * 
 * @param int id id товара
 */
function show_callme()
{    
    var lang = 'ru';
    var href = location.href;
    if (href.search('/en/') != -1)
        lang = 'en';
    if (href.search('/os/') != -1)
        lang = 'os';
    var url = lang + '/main/main/show_callme';    
    TINY.box.show({url:url,
                   width:380,
                   height:320,
                   opacity:20,
                   topsplit:3
               });
}

/**
 * Фунцкция добавления заявки на обратный звонок
 */
function add_callme()
{
    var lang = 'ru';
    var href = location.href;
    if (href.search('/en/') != -1)
        lang = 'en';
    if (href.search('/os/') != -1)
        lang = 'os';
    var url = lang + '/main/main/show_callme';
    $("#preload").show();
    $.post( url, 
            $( "#show_callme_form" ).serialize(), 
            function(data){
                if (data.message == 'success'){
                    $('#show_callme_form').trigger( 'reset' );
                    $(".tinner").css('height', 380);
                    $("#div-success").fadeIn();
                    $("#div-errors").hide();
                    $("#preload").hide();
                }
                else if(data.message == 'error'){
                    $(".tinner").css('height', 380);
                    $("#div-success").hide();
                    $("#div-errors").fadeIn();      
                    $("#preload").hide();             
                }
            } 
    );
}