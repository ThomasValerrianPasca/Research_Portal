<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>


<div class="full">

  <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                    <div class="container">
                      <?php
                      if(isset($msg) & !empty($msg)){
                       echo $msg;
                        }
                      ?>
                      <form class="form-signin" role="form" method="post" action="checklogin.php">
                        <h2 class="form-signin-heading">Please sign in</h2>
                        <input type="email" name="myusername" class="form-control" placeholder="Email address" required autofocus>
                        <input type="password" name="mypassword" class="form-control" placeholder="Password" required>
                        <label class="checkbox">
                        <input type="checkbox" value="remember-me"> Remember me
                        </label>
                        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>
                        
                      </form>
                    
                    </div> <!-- /container -->

                   
           
            </div>

        </div>
          <div id="buttonsignin">
                    <div class="container">
                    <a href="index.php"><button type="button" class=" btn  btn-info"><span class="glyphicon glyphicon-arrow-left"></span> Back to Home</button></a>
                    <a href="register.php"><button class="btn btn-success" name="register" type="button">Register here</button></a>
                    </div>
                    </div>

  </div>

</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
