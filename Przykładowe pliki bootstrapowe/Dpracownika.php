  <title>Dodaj nowego pracownika</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-animate.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-sanitize.js"></script>
  <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-2.5.0.js"></script>
  <script src="example.js"></script>
	 
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  


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
        padding: 35px;
      }
      .row.content {height:150;} 
    }
		.lista {
    width: 200px;
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
      <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/user/szef">Nazwa Firmy</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
	<li><a href="<?php echo base_url(); ?>index.php/user/durlop">Dodaj Urlop</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  	<li><p class="navbar-zalogowany"><?php echo $_SESSION['username'];?></p></li>
        <li><a href="<?php echo base_url(); ?>index.php/auth/logout"><span class="glyphicon glyphicon-log-in"></span> Wyloguj</a></li>
      </ul>
    </div>
  </div>
</nav>

  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">

    </div>


    <div class="col-sm-8 text-left"> 
    <h3><p class="text-center">Dodaj nowego pracownika</p></h2>

<?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
    <?php
    } ?>
    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

<!-- Form code begins -->
<form action="" method="POST">	 
<form>

    <div class="form-group">
      <label for="email">Adres email:</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Adres e-mail pracownika">
    </div>
	   <div class="form-group">
      <label for="Imie">Imie i nazwisko pracownika:</label>
      <input type="Imie" class="form-control" name="imie" id="imie" placeholder="Podaj Imie i Nazwisko pracownika">
    </div>
	   

<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="date">Data Zatrudnienia</label>
        <input class="form-control" id="data" name="data" placeholder="YYYY/MM/DD" type="text"/>
      </div>

    </div>
  </div>    
 </div>
</div>

<script>
    $(document).ready(function(){
      var date_input=$('input[name="data"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy/mm/dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>

    <br>
<div class="form-group">
  <label  for="sel1">Dzial pracowniczy:</label>
  <select class="lista" class="form-control" id="wybordzial" name="wybordzial">
		<?php 
		$this->db->select('nazwa');
        	$this->db->from('dzialy');
		$query = $this->db->get();
		foreach ($query->result() as $row){
		?>
   <option><?php echo $row->nazwa?></option> 
	<?php } ?>
  </select>
</div>

<div class="form-group">
  <label  for="sel1">Stanowisko pracownika:</label>
  <select class="lista" class="form-control" id="wyborstanowiska" name="wyborstanowiska">
		<?php 
		$this->db->select('nazwa');
        	$this->db->from('stanowiska');
		$query = $this->db->get();
		foreach ($query->result() as $row){
		?>
   <option><?php echo $row->nazwa?></option> 
	<?php } ?>
  </select>
</div>

	<p class="text-center">
	<button class="btn btn-primary" name="dpracownika">Dodaj Pracownika</button>	
</p>
	 </form>
 </div>
   
    <div class="col-sm-2 sidenav">
<a href="<?php echo base_url(); ?>index.php/user/durlop" class="btn btn-default " role="button">Dodaj urlop</a>   
          <span class="glyphicon glyphicon-plus"></span>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<footer class="container-fluid text-center">
<button type="button" class="btn btn-default">kontakt</button>
<button type="button" class="btn btn-default">pomoc</button>
</footer>


</body>
</html>



