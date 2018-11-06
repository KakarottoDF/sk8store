<DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <script type="text/javascript" language="javascript" src="js/jquery.min.js"></script>
    
    <style type="text/css">
    
        body{
        font-family:Calibri, Verdana, Tahoma, Arial
    }
    .navBar{
        height:auto;
        overflow:hidden;
    }
 
    .grupo{
        height:auto;
        border:solid 1px;      
    }
 
    .titulo{
        padding:5px;
        height:20px;
    }
 
    .conteudo{
        display:none;
        padding:5px;
    }
 
    .cabecalho{
        border:solid 1px;
        border-radius:5px 5px 0 0;
        padding: 5px;
        height:20px;
        background: rgb(112, 156, 190)
    }
 
    .rodape{
        border:solid 1px;
        border-radius: 0 0 5px 5px;
        padding: 5px;
        height:20px;
        background: rgb(112, 156, 190);
    } 
    
    </style>
    
</head>
<body>
    <div class="navBar">
        <div class="cabecalho">
            Barra de navegação
        </div>
        <div class="grupo">
            <div class="titulo">Grupo 1</div>
            <div class="conteudo">Conteudo 1</div>
        </div>
        <div class="grupo">
            <div class="titulo">Grupo 2</div>
            <div class="conteudo">Conteudo 2</div>
        </div>
        <div class="grupo">
            <div class="titulo">Grupo 3</div>
            <div class="conteudo">Conteudo 3</div>
        </div>
        <div class="rodape">
            Rodapé
        </div>
    </div> 
    
      <script type="text/javascript">
$(function(){
    $(".titulo").click(function(){
        $(".conteudo").slideUp();
        var cont = $(this).next();
        $(cont).slideDown("fast");     
    });
});
</script>
          
    </body>
</html>
