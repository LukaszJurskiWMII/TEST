<!DOCTYPE html>
<html ng-app="ui.bootstrap.demo">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
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
  
  
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

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
		bottom: 0;
		width: 100%;
		
	}
    
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
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

	.lista {
    width: 200px;
}

.full button span {
    background-color: limegreen;
    border-radius: 32px;
    color: black;
  }
  .partially button span {
    background-color: orange;
    border-radius: 32px;
    color: black;
  }
.material-switch > input[type="checkbox"] {
    display: none;   
}

.material-switch > label {
    cursor: pointer;
    height: 0px;
    position: relative; 
    width: 40px;  
}

.material-switch > label::before {
    background: rgb(0, 0, 0);
    box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.5);
    border-radius: 8px;
    content: '';
    height: 16px;
    margin-top: -8px;
    position:absolute;
    opacity: 0.3;
    transition: all 0.4s ease-in-out;
    width: 40px;
}
.material-switch > label::after {
    background: rgb(255, 255, 255);
    border-radius: 16px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    content: '';
    height: 24px;
    left: -4px;
    margin-top: -8px;
    position: absolute;
    top: -4px;
    transition: all 0.3s ease-in-out;
    width: 24px;
}
.material-switch > input[type="checkbox"]:checked + label::before {
    background: inherit;
    opacity: 0.5;
}
.material-switch > input[type="checkbox"]:checked + label::after {
    background: inherit;
    left: 20px;
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
      <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/user/pracownik">Nazwa Firmy</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">  
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
    
	
    <br>
	 <h4><p class="text-center">Nowy wniosek</p></h4>
	 
	 
<?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
    <?php
    } ?>
    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>



<!-- Form code begins -->
<form action="" method="POST">	 
<form>


<div class="form-group">
  <label  for="sel1">Rodzaj wniosku:</label>
  <select class="lista" class="form-control" id="wybor" name="wybor">
		<?php 
		$this->db->select('nazwa');
        	$this->db->from('nazwywnioski');
		$query = $this->db->get();
		foreach ($query->result() as $row){
		?>
   <option><?php echo $row->nazwa?></option> 
	<?php } ?>
  </select>
</div>

<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="date">Od</label>
        <input class="form-control" id="dataod" name="dataod" placeholder="YYYY/MM/DD" type="text"/>
      </div>
     
	 
      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="date">Do</label>
        <input class="form-control" id="datado" name="datado" placeholder="YYYY/MM/DD" type="text"/>
      </div>
     

    </div>
  </div>    
 </div>
</div>

<script>
    $(document).ready(function(){
      var date_input=$('input[name="dataod"]'); //our date input has the name "date"
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

<script>
    $(document).ready(function(){
      var date_input=$('input[name="datado"]'); //our date input has the name "date"
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



<div class="form-group">
      <label for="iloscdni">IloscDni:</label>
      <input type="text" class="form-control" name="iloscdni" id="iloscdni" placeholder="Ile dni">
</div>

<div class="form-group">
  <label for="comment">Uzasadnienie:</label>
  <textarea class="form-control" rows="5" id="uzasadnienie" name="uzasadnienie"></textarea>
</div>

<p class="text-center">
<button class="btn btn-primary" name="dwniosek">Utwórz wniosek</button>
</p>
</form>

	
    </div>
    <div class="col-sm-2 sidenav"><br>
		
	<table class="table">
    <thead>
     
    </thead>
    <tbody>     
          </tbody>
	</table>
		
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







