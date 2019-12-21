$(function(){
    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');

        if(listaMenu.is(':hidden') == true){
           var icone = $('.botao-menu-mobile').find('i');
           icone.removeClass('fa-bars');
           icone.addClass('fa-times');
            listaMenu.slideToggle();
        } else{
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
             listaMenu.slideToggle();
            listaMenu.slideToggle();
        }
     
    })

    if($('target').lenght > 0){
        //O elemento existe portanto precisamos dar o scroll em algum elemento.
        var elemento ='#'+$('target').attr('target');
    }
})