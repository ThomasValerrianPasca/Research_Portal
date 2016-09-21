<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

  <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>

    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <?php wp_head(); ?>
    
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  

  </head>

  <body>



    <div class="navbar navbar-default navbar-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        </div>

      
       

      
        <div class="collapse navbar-collapse">


            <ul class="navbar-nav nav">
              <?php wp_list_pages(array('title_li' => '', 'exclude_tree' => '4,131' , 'depth'=> 1)) ?>

            </ul>


             <div class="navbar-btn pull-right">
               <a href="http://localhost:81/wordpress/user-profile/"><button type="button" class="btn btn-default" target="http://localhost:81/wordpress/user-profile/"><?php if(is_user_logged_in()){ echo'My Profile ';} else {wp_register();} ?></button></a>
              <button class="btn btn-default" id="signinbtn"><?php wp_loginout(); ?></button>
            </div>

            <!--
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 navbar-right">
            
            <form action="search.php" method="GET">
              <div class="input-group custom-search-form">
                <input type="text" class="form-control" name="term">
                <span class="input-group-btn">
                <button class="btn btn-default" type="submit" value="Search">
                <span class="glyphicon glyphicon-search"></span>
                </button>
                </span>
              </div> --><!-- /input-group 
            </form>
            </div> -->

        </div><!--/.nav-collapse -->


      </div>
    </div>

<div class="container">