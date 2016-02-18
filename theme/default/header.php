<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>%title%</title>
    <link href="<?php echo SITE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo SITE_URL; ?>assets/style.css" rel="stylesheet">
    <link href="<?php echo SITE_URL; ?>assets/css/prism.css" rel="stylesheet">
    <link href="<?php echo SITE_URL; ?>assets/css/bootstrap-treeview.css" rel="stylesheet">
    <style>
    .jumbotron p { font-size: 13px;}
    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo SITE_URL; ?>">%SITE_URL%</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="<?php echo SITE_URL; ?>">Home</a></li>
            <li><a href="<?php echo SITE_URL."about";?>">About</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">OO Patterns <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo SITE_URL; ?>oopatterns/adapter">Adapter</a></li>
                <li><a href="<?php echo SITE_URL; ?>oopatterns/factory">Factory</a></li>
                <li><a href="<?php echo SITE_URL; ?>oopatterns/lawofdemeter">Law Of Demeter</a></li>
                <li><a href="<?php echo SITE_URL; ?>oopatterns/polymorphism">Polymorphism</a></li>
                <li><a href="<?php echo SITE_URL; ?>oopatterns/singleton">Singleton</a></li>
                <li><a href="<?php echo SITE_URL; ?>oopatterns/traits">Traits</a></li>
              </ul>
            </li>
            <?php if($_SESSION[PREFIX.'logged']) { ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo SITE_URL; ?>sms">Send a SMS</a></li>
                <li><a href="<?php echo SITE_URL; ?>action/logout">Logout</a></li>
              </ul>
            </li>
          <?php }else{ ?>
            <li><a href="<?php echo SITE_URL."login";?>">Login/Register</a></li>
          <?php } ?>
          </ul>

        </div>
      </div>
    </div>

    <div class="container">

      <div class="jumbotron clearfix">
          <h2>%secondary%</h2>
