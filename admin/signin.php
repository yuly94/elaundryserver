<?php
session_start();
require_once 'class.user.php';
$user_login = new USER();

if($user_login->is_logged_in()!="")
{
	$user_login->redirect('index.php');
	
	//header("location:../index.php");
}


if(isset($_POST['btn-login']))
{
	$email = trim($_POST['txtemail']);
	$upass = trim($_POST['txtupass']);
	
	if($user_login->login($email,$upass))
	{
		$user_login->redirect('index.php');
	}
}
?>

<!DOCTYPE html>
<html lang="en">

  <!-- #Head. -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Materialize Landing Page</title>
    
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
   <link href="https://yuly94.github.io/assets/css/login-style.css"       type="text/css" rel="stylesheet" media="screen,projection"/>
   <link href="https://yuly94.github.io/assets/css/weather-style.css"       type="text/css" rel="stylesheet" media="screen,projection"/>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>

  <!-- #Let's Begin -->
   <body id="login">

    <!-- #Dropdown Structure (Must Be Before Nav) -->
    <ul id='dropdown1' class='dropdown-content'>
      <li><a id="cta__why" href="#!">Why?</a></li>
      <li><a class="modal-trigger" href="#modal-price">Pricing</a></li>
      <li><a id="cta__faq" href="#!">FAQ</a></li>
      <li class="divider">&nbsp;</li>
      <li><a id="cta__nav" href="#!"><strong>Hire Me</strong></a></li>
    </ul>

    <!-- #Main Nav (Must Be After Dropdown Structure) -->
    <nav role="navigation">
      <div class="container">
        <div class="nav-wrapper">
          <ul class="right">
            <li><a class="modal-trigger" href="#modal-about">
                About
            </a></li>
            <!-- Dropdown Trigger ** -->
            <li> <a class="dropdown-button" href="#!" data-activates="dropdown1">
                Hire Me
                <i class="mdi-navigation-arrow-drop-down right">&nbsp;</i>
              </a> </li>
          </ul>
        </div>
      </div> 
    </nav>




    <!-- #Hero Section -->
    <div class="section section__hero" id="index-banner">
      <div class="container">
      
      		<?php 
		if(isset($_GET['inactive']))
		{
			?>
            <div class='alert alert-error'>
				<button class='close' data-dismiss='alert'>&times;</button>
				<strong>Sorry!</strong> This Account is not Activated Go to your Inbox and Activate it. 
			</div>
            <?php
		}
		?>
   
                <div class="row">
          <div class="col s12 m5 section__login">
            
          
             <form class=" card z-depth-3" action="" method="post" id="form-element" >
           
                   <?php
        if(isset($_GET['error']))
		{
			?>
            <div class='alert alert-success'>
				<button class='close' data-dismiss='alert'>&times;</button>
				<strong>Wrong Details!</strong> 
			</div>
            <?php
		}
		?>
           
            <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input class="validate" id="email" type="email">
            <label for="email" data-error="wrong" data-success="right" class="center-align">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Remember me</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <a href="login.html" class="btn waves-effect waves-light col s12">Login</a>
          </div>
        </div>
            
 <a id="lupa_pass" class"lupa_pass" href="lupapassword.php" >Lupa Password &raquo;</a>

            
          </form>
          
         
          <!-- End of the form -->
          </div>
          
        
          
              <div class="col s12 m7 gorilla"> </div>
              
              
                	<div class="stormy"></div>
                      <div class="row center">



  <a id="cta__main" href="signup.php" class="btn btn-large">Daftar sekarang &raquo;</a>
        </div>
        </div>

      </div>
    </div>




    <!-- #About Me Modal -->
    <div id="modal-about" class="modal">
      <div class="modal-content center">
        <h4>About</h4>
        <p>Halaman login untuk admin </p>
        <small>
          <a href="#" class="btn__modal | modal-action modal-close">
            <i class="large mdi-navigation-close flow-text">&nbsp;</i>
          </a>
        </small>
      </div>
    </div>
    
        <!-- #About Me Modal -->
    <div id="modal-price" class="modal">
      <div class="modal-content center">
        


   <!-- #Pricing -->
    <div id="pricing" class="section section__pricing | center"> 
      <div class="row">
         <h2 class="center">Pricing</h2>
        <div class="col s12 m12 l6"> 
          <div class="card">
            <h4>Option #1</h4>
            <i class="small mdi-action-done-all">&nbsp;</i>
            <p class="bold">Information about this option.</p>
            <a class="btn btn-large | activator" href="#!">Pricing</a>
            <!-- Hidden Pricing/Info Panel -->
            <div class="card-reveal">
              <span class="card-title"> <i class="mdi-navigation-close right">&nbsp;</i><br />More information.</span>
              <p>Beep.</p>
              <p class="price">Beep.</p>
            </div>
          </div>
        </div>
        <div class="col s12 m12 l6"> 
          <div class="card">
           <h4>Option #1</h4>
            <i class="small mdi-action-done">&nbsp;</i>
            <p class="bold">Information here about this option.</p>
            <a class="btn btn-large | activator" href="#!">Pricing</a>
            <!-- Hidden Pricing/Info Panel -->
            <div class="card-reveal">
              <span class="card-title"> <i class="mdi-navigation-close right"></i><br /> More information.</span>
              <p> Beep. </p>
              <p class="price">Beep.</p>
            </div>
          </div>
        </div>
      </div>          
    </div> 


        <small>
          <a href="#" class="btn__modal | modal-action modal-close">
            <i class="large mdi-navigation-close flow-text">&nbsp;</i>
          </a>
        </small>
      </div>
    </div>
    

      <!--  #Scripts -->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
      <script src="https://yuly94.github.io/assets/js/landingpage-init.js"></script>
      

    </body>
  </html>

