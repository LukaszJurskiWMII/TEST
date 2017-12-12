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
      <a class="navbar-brand" href="#">Nazwa Firmy</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
	  <p class="navbar-text">Zarządzanie urlopami</p>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://espectro.asuscomm.com/index.php/auth/login"><span class="glyphicon glyphicon-log-in"></span> Logowanie</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://espectro.asuscomm.com/index.php/auth/register"><span class="glyphicon glyphicon-log-out"></span> Rejestracja</a></li>
      </ul>
    </div>
  </div>
</nav>
  </form>
    </div>
        </div>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<footer class="container-fluid text-center">
<button type="button" class="btn btn-default">kontakt</button>
<button type="button" class="btn btn-default">pomoc</button>
</footer>

</body>
</html>



