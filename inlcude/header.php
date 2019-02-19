<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Repository UIN SUSKA RIAU</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>e
      styl
    <![endif]-->


    <style type="text/css">
      .navbar {
        color: green;  
      }

    </style>
   
  </head>
  <body>

 

  <nav class="navbar navbar-teal navbar-fixed-top">
    <!-- <img src="images/sitelogo.png"> -->
  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="index.php"> <img alt="Brand" class="Brand" src="images/uin-suska.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Tentang <span class="sr-only">(current)</span></a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pencarian <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="tahun.php">Pencarian Berdasarkan Tahun</a></li>
            <li><a href="subjeck.php">Pencarian Berdasarkan Subjek</a></li>
             <li><a href="jurusan.php">Pencarian Berdasarkan Jurusan</a></li>
            <li><a href="pengarang.php">Pencarian Berdasarkan Pengarang</a></li>
            
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-right">
           <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
      
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Login</a></li>
        <li><a href="#">| Create Account</a></li>
        
      </ul>
      
     
    </div><!-- /.navbar-collapse -->
     
  </div><!-- /.container-fluid -->
</nav>