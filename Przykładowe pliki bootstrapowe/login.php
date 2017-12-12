   <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
	  background-color: #1F26E5;
    }   

    .row.content {height: 450px}    

    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 200%;
    }

	footer {
		background-color: #555;
		
        padding: 15px;
		position: fixed;
		bottom: 0;
		width: 100%;
	}
    
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 30px;
      }
      .row.content {height:150;} 
    }

.alert-danger {

margin-top: 20px;
margin-right: 20%;
margin-left: 20%;
text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
border: 1px solid #fbeed5;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
color: #b94a48;
background-color: #f2dede;
border-color: #eed3d7;
text-align: center;
}


.alert-success {

margin-top: 20px;
margin-right: 20%;
margin-left: 20%;
text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
border: 1px solid #fbeed5;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
text-align: center;
}


  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  
	<?php
	/*
	
	<a class="navbar-brand" href="#">Nazwa Firmy</a>
	
	*/
	?>
	
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
	 <?php
	/*

	  <p class="navbar-text">Zarządzanie urlopami</p>
	*/
	?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://www.espectro.pw/index.php/auth/register"><span class="glyphicon glyphicon-log-out"></span> Register</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
	</div>
	
	
 
    <div class="col-sm-8 text-left"> 
	
	 <form action="" method="POST">
	
		<?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
    <?php
    } ?>

    <?php if (isset($_SESSION['error'])) { ?>
        <div class="alert alert-danger"> <?php echo $_SESSION['error']; ?></div>
    <?php
    } ?>
    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
	
	
   
	
    <h3><p class="text-center">Login</p></h3>

    <div class="form-group">
      <label for="email">Username (e-mail) :</label>
      <input type="text" class="form-control" name="username" id="username" placeholder="E-mail">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>

	
	
	<p class="text-center">
	
 <div>
            <button class="btn btn-primary" name="login">Sign in</button>
        </div>
	</p>
  </form>
    </div>
	
    <div class="col-sm-2 sidenav">

      </div>
    </div>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<footer class="container-fluid text-center">
<a class="btn btn-default" href="kontakt">Kontakt  | Informacje dotyczące serwera</a>

</footer>

</body>
</html>
