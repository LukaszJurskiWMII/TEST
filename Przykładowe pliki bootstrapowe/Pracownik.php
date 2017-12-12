<!DOCTYPE html>
<html lang="en">
<head>
  <title>Zarzadzanie urlopami</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  

	.navbar-zalogowany {
		font-size: 12px;
		color:white;
		margin-top:10px;margin-bottom:5px;
		margin-right:5px;margin-left:5px;
	}
	
	
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
		bottom: 100;
		width: 100%;
		
	}
    
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 10px;
      }
      .row.content {height:auto;} 
    }
	
	.icon-kolor {
    color: grey;
}

	.icon-red {
    color: red;
}

	.icon-green {
    color: green;
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

    </div>
	
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav navbar-right">
	  	<li><p class="navbar-zalogowany"><?php echo $_SESSION['username'];?></p></li>
	
        <li><a href="<?php echo base_url(); ?>index.php/auth/logout"><span class="glyphicon glyphicon-log-in"></span> Wyloguj</a></li>
      </ul>
    </div>
  </div>
</nav>
  

  
<a class="btn btn-danger" href="ssh">SSH</a>
<a class="btn btn-primary" href="torrent">Torrent Raspi</a>
<a class="btn btn-primary" href="download">Do pobrania</a>
  
  
  
</div>




</body>
</html>