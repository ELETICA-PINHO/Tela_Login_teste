<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tela de longin</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <header>
        <h1>Tela de longin</h1>
    </header>

    <section>
        <fieldset>
            <legend>Acesso Restrito</legend>
        <form name="form">
        Usuario:  <input type="text" name="usuario" id="usuario" autocomplete="off"><br><br>
        Senha:    <input type="password" name="senha" id="senha" autocomplete="off"><br><br>
        <input type="button" value="LOGIN" onclick="logar()"> 
        <input type="reset" value="LIMPAR">

        <?php
         echo "teste"
         

         
        ?>
        </form>
        </fieldset>

        <div id="res">

             

        </div>
        
        
      

    </section>
  

    <script src="script.js"></script>
</body>
</html>