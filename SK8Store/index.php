<html>
    
    <head>
        
        <title>Login | SK8 Store</title>
        <meta charset="utf-8">
        
        <?php include "fonte-icons.php"; ?>
        
        <link href="css/login.css" rel="stylesheet">
        
    </head>
    
    <body>
        
        <div class="container">
           
           <div class="area-form">
               
               <div class="logo">
                   
                   <h1>SK8<b>STORE</b></h1>
                   
               </div>
               
               <h1 class="titulo">Funcionário? Entre com o seu login.</h1>
               
               <form class="form-login">
                   
                   <input type="text" name="login" placeholder="Usuário">
                   <input type="password" name="senha" placeholder="Senha">
                   
                   <div class="lembrar-user">
                       
                       <input type="checkbox" name="lembrar-senha" id="lembrar">
                       <label for="lembrar">Lembrar</label>
                       
                   </div>
                   
                   <label for="btm-logar">
                       
                       <div class="btm-logar">
                           
                           <i class="fas fa-check-circle"></i> 
                           
                           Entrar
                           
                       </div>
                       
                   </label>
                   <input id="btm-logar" type="submit" value="Entrar">
                   
               </form>
               
               <a href="" class="esqueci-senha">Esqueceu sua senha?</a>
               
           </div>
            
        </div>
        
    </body>
    
</html>