<!DOCTYPE html>
<html lang="en">
  <head>
<title>Developer's Version</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS-->
<style>

.my-class{
background:white;
}
.column {
  float: left;
  width: 23.33%;
  padding: 30px;
  margin-left:10px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}
.nav-item{
font-size:1.3em;
}

.navbar .navbar-brand{
font-size: 25px;
color: #ffa500 !important;
}

h4 {  
	padding-top: 0.2em;
  	margin-bottom: 0.83em;
  	margin-right:12px;
	color:#FFA500;	 
}
.topnav-right {
  	float: right;
	padding-left:190px;
}
.modal-login {		
		color: #636363;
		width: 350px;
		margin: 80px auto 0;
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;   
        position: relative;
        justify-content: center;
	}
	.modal-login h4 {
		text-align: center;
		font-size: 26px;
		margin: 30px 0 -15px;
	}
	.modal-login .form-control:focus {
		border-color: #70c5c0;
	}
	.modal-login .form-control, .modal-login .btn {
		min-height: 60px;
		border-radius: 3px; 
	}
	.modal-login .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}	
	.modal-login .modal-footer {
		background: #ecf0f1;
		border-color: #dee4e7;
		text-align: center;
        justify-content: center;
		margin: 0 -20px -20px;
		border-radius: 5px;
		font-size: 13px;
	}
	.modal-login .modal-footer a {
		color: #999;
	}		
	.modal-login .avatar {
		position: absolute;
		margin: 0 auto;
		left: 0;
		right: 0;
		top: -100px;
		width: 75px;
		height: 65px;
		border-radius: 50%;
		z-index: 9;
		background: #60c7c1;
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
	.modal-login .avatar img {
		width: 100%;
	}
    .modal-login .btn {
        color: #fff;
        border-radius: 4px;
		background: #60c7c1;
		text-decoration: none;
		transition: all 0.4s;
        line-height: normal;
        border: none;
    }
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #45aba6;
		outline: none;
	}
.loader {
  border: 16px solid #f3f3f3; /* Light grey */
  border-top: 16px solid #3498db; /* Blue */
  border-radius: 50%;
  width: 120px;
  height: 120px;
 -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>

  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<script src="<?php echo base_url(); ?>assets/css/fontawesome-free-5.14.0-web/js/fontawesome.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<script>

    $(document).ready(function(){

        $("#myModal").modal('show');

    });

</script>
  </head>

 <body>
<div id="loader"></div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand">
<img src="<?php echo base_url(); ?>assets/images/Dev.png" width="80" height="58" alt="logo">
</a>
  
	
 <div class="collapse navbar-collapse" id="navbarText">
    <ul class="nav navbar-nav ">
      <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" colour="blue">Languages<span  class=" sr-only">(current)</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Java</a>
          <a class="dropdown-item" href="#">Java Script</a>	
	  <a class="dropdown-item" href="#">Php</a>
        </div>
      </li>
 <li class="nav-item dropdown">
        <a class=" nav-link  dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FrontEnd<span class="sr-only">(current)</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Html</a>
          <a class="dropdown-item" href="#">css</a>	
	  <a class="dropdown-item" href="#">Jquery</a>
        </div>
      </li>
	<li class="nav-item">
        <a class="nav-link" href="#">IDE'S</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Servers</a>
      </li>
	<li class="nav-item">
        <a class="nav-link" href="#">Databases</a>
      </li>
    </ul>

<!--<ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/login') }}">Login</a>
            </li>
           
        </ul>-->

<form class="form ml-auto" action="">
    <div class="input-group text-center topnav-right" >
             <h4>Subscribe</h4>
                <input type="text" placeholder="Enter your email address" class="form-control input-lg ">
                <span class="input-group-btn"><button type="button" class="btn btn-md btn-warning">OK</button></span>
            </div>

        </form>


     
	
   
  </div>
</nav>
 
<div class="container-fluid my-class">

<div style="padding-top:10px;padding-botton:1px">

<?php 
$imageProperties=['src'=>'assets/images/index.jpg','alt'=>'Responsive Image','width'=>'65%','class'=>"img-fluid, mx-auto d-block",'display'=>'block','margin-left'=>'10%','margin-right'=>'10%'];
echo img($imageProperties) ;
?>

</div>

</div>
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
								
				<h4 class="modal-title">Member Login</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="/examples/actions/confirmation.php" method="post">	
			<div class="avatar">
			<img src="<?php echo base_url(); ?>assets/images/avatar.png" alt="Avatar">
			</div>
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<a href="#">Forgot Password?</a>
			</div>
		</div>
	</div>
</div>     

<!--<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="defaultForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
        </div>

      </div>

      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>-->



<!-- Footer -->
<footer>
	<div class="container"> 
 	<div class="row justify-content-center">
    	<div class="column">
      	<img  src="http://localhost/CodeIgniter-3.1.9/assets/images/java.jpg" alt="Java" width="150" height="100">
   	 </div>
    	<div class="column">
      	<img  src="http://localhost/CodeIgniter-3.1.9/assets/images/js.png" alt="JS" width="80" height="80">
    	</div>
    	<div class="column">
      	<img src="http://localhost/CodeIgniter-3.1.9/assets/images/jquery.jpg"  alt="jquery" width="130" height="100">
    	</div>
	<div class="column" >
      	<img src="http://localhost/CodeIgniter-3.1.9/assets/images/php.jpg"  alt="php" width="120" height="120">
    	</div>
 	</div>        
	</div> 
</footer>
  
 
</body>
<!-- Footer -->
</html>


