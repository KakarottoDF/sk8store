$(document).ready(function(){
    $('.menu li:has(ul)').click(function(e){
        e.preventDefault();
        
        if ($(this).hasClass('ativo')){
            $(this).removeClass('ativo');
            $(this).children('ul').slideUp();
        } else {
            $('.menu li ul').slideUp();
            $('.menu li').removeClass('ativo');
            $(this).addClass('ativo');
            $(this).children('ul').slideDown();
        }
    });
});

// botão de atividade do usuario

$(document).ready(function(){
    $('.activity li').click(function(e){
        e.preventDefault();
        
        if ($(this).hasClass('ativo')){
            $(this).removeClass('ativo');
            $(this).children('ul').slideUp();
        } else {
            $('.activity li ul').slideUp();
            $('.activity li').removeClass('ativo');
            $(this).addClass('ativo');
            $(this).children('ul').slideDown();
        }
    });
});

// botão de notificações 

$(document).ready(function(){
    $('.notifications li').click(function(e){
        e.preventDefault();
        
        if ($(this).hasClass('ativo')){
            $(this).removeClass('ativo');
            $(this).children('ul').slideUp();
        } else {
            $('.notifications li ul').slideUp();
            $('.notifications li').removeClass('ativo');
            $(this).addClass('ativo');
            $(this).children('ul').slideDown();
        }
    });
});

// caixa de pesquisa

$(document).ready(function(){
    $('.search li').click(function(e){
        e.preventDefault();
        
        if ($(this).hasClass('ativo')){
            $(this).removeClass('ativo');
            $(this).children('ul').slideUp();
        } else {
            $('.search li ul').slideUp();
            $('.search li').removeClass('ativo');
            $(this).addClass('ativo');
            $(this).children('ul').slideDown();
        }
    });
});

// configurações do usuário

$(document).ready(function(){
    $('.name-user li').click(function(e){
        e.preventDefault();
        
        if ($(this).hasClass('ativo')){
            $(this).removeClass('ativo');
            $(this).children('ul').slideUp();
        } else {
            $('.name-user li ul').slideUp();
            $('.name-user li').removeClass('ativo');
            $(this).addClass('ativo');
            $(this).children('ul').slideDown();
        }
    });
});