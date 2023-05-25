<?php
    $aDiretorios = scandir(getcwd()); // Verifica todas as pastas que temos no diretório
    $aExclusoes = []; // Array de pastas que eu quero excluir da listagem
?>  
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>LocalHost</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="./style.css">
  <link rel="icon" type="imagem/png" href="img/LocalLogo.png"/>

</head>
<body>
<!-- partial:index.partial.html -->
<div class='canvas'>
  <div style="z-index: 1000 !important;">
    <ul>
      <?php foreach($aDiretorios as $diretorio){
              if( (is_dir($diretorio)) AND (!in_array($diretorio, $aExclusoes))){ //Verifica se realmente é um diretório e se não está no array de exclusões
                  // echo "<span><button class='btnPrincipal'><a style='text-decoration: none;font-weight: bold;color: black !important;' href='/".$diretorio."/'>".$diretorio."</a></button></span><br>";
                  echo "<span><button class='btnPrincipal'><a style='text-decoration: none;font-weight: bold;color: black !important;'>Botão</a></button></span><br>";
              }
          }
          ?>
    </ul>
  </div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
  <div class='bubble'></div>
</div>
<!-- partial -->
</body>
</html>
