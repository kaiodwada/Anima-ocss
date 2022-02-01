<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="K.A.A">
    <meta name="description" content="<?php echo $this->getDescri()?>">
    <meta name="keywords" content="<?php echo $this->getKeywords()?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo DIRCSS.'style.css'?>">
    <title><?php echo  $this->getTitle()?></title>
    <?php echo $this->addHead();?>
</head>
<body>
    <header class="header">
        <!-- <img class="img" src="<?php echo DIRIMG.'deserto.jpg'?>" alt="banner"> -->
  <nav>
     <a href="<?php echo DIRPAGE?>">INICIO</a>
     <a href="<?php echo DIRPAGE."contato" ?>">CONTATO</a>
     <a href="">ADMIN</a>
  </nav>
        <?php echo $this->addHeader();?>
    </header>
    <main class="main">
    <?php echo $this->addMain();?>
    </main>
    <footer class="footer">
        <br>
        <br>
       <p>TODOS OS DIREITOS RESERVADOS 2022</p> 
    <?php echo $this->addFooter();?>
    </footer>
</body>
</html>