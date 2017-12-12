 <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <title>Logowanie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
	  background-color: #001133;
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
      <a class="navbar-brand" href="#">espectro.pw</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
	  <p class="navbar-text"> </p>
      </ul>
	 <ul class="nav navbar-nav navbar-right">
        <li><a href="http://espectro.asuscomm.com/index.php/auth/login"><span class="glyphicon glyphicon-log-out"></span> Logowanie</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
	</div>
	
	
 
    <div class="col-sm-8 text-left"> 
	
<h3><p class="text-center">Signup</p></h3>

    
    <?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
    <?php
    } ?>
    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
    <form action="" method="POST">
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" name="email" id="email" type="text">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input class="form-control" name="password" id="password" type="password">
        </div>

        <div class="form-group">
            <label for="password">Repeat Password:</label>
            <input class="form-control" name="password2" id="password" type="password">
        </div>

	<div class="form-group">
            <label for="email">Name:</label>
            <input class="form-control" name="imie" id="imie" type="text">
        </div>

	<div class="form-group">
            <label for="email">Surname:</label>
            <input class="form-control" name="nazwisko" id="nazwisko" type="text">
        </div>

	   <div>
            <button class="btn btn-primary" name="register">Signup</button>
        </div>
    </form>
    </div>
	
    <div class="col-sm-2 sidenav">

      </div>
    </div>
  </div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<footer class="container-fluid text-center">
<button type="button" class="btn btn-default">Contact</button>
<button type="button" class="btn btn-default">Help</button>
</footer>

</body>
</html>

