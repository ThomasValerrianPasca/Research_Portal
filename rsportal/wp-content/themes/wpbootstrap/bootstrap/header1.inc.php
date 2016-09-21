<?php

$file_name = basename(__FILE__, '.php');



?>



    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">IIT Hyderabad Research Portal</a>
        </div>

      
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 navbar-right">
            
          <form action="search.php" method="GET">
            <div class="input-group custom-search-form">
              <input type="text" class="form-control" name="term">
              <span class="input-group-btn">
              <button class="btn btn-default" type="submit" value="Search">
              <span class="glyphicon glyphicon-search"></span>
             </button>
             </span>
             </div><!-- /input-group -->
          </form>
        </div>


      
        <div class="collapse navbar-collapse">
            <div class="navbar-btn pull-right">
                <a href="signin.php"><button type="button" id="signinbtn" class="btn btn-info">Sign In</button></a>
                <a href="register.php"><button type="button" class="btn btn-default">Register</button></a>
            </div>          
            <ul class="nav navbar-nav">
                                
                <li><a href="index.php">Home</a></li>
                <li><a href="people.php">People</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="alumni.php">Alumni</a></li>
                <li><a href="contactus.php"> Contact Us </a></li>
                
              

            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
