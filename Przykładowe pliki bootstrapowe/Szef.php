<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
		bottom: 100%;
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
      <a class="navbar-brand" href="#">Nazwa Firmy</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
	<li><a href="<?php echo base_url(); ?>index.php/user/dpracownika">Dodaj Pracownika</a></li>
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
    

<?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
    <?php
    } ?>

    <?php if (isset($_SESSION['error'])) { ?>
        <div class="alert alert-danger"> <?php echo $_SESSION['error']; ?></div>
    <?php
    } ?>
    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>



	<br><br>
	<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Wnioski Urlopowe</a></li>
    <li><a data-toggle="tab" href="#menu2">Twoje urlopy</a></li>
  </ul>



  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <table class="table table-bordered">
    <thead>
      <tr align="center" valign="middle">
        <th>Nr wniosku</th>
        <th>od - do</th>		
        <th>Data Utworzenia</th>
	    <th>Imie Nazwisko</th>
		<th>Dzial</th>
		<th>Stanowisko</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr align="center" valign="middle">
             </tr>
      		<?php 
		$this->db->select('*');
        	$this->db->from('wnioski');
		$query = $this->db->get();
		foreach ($query->result() as $row){
		if($row->status == oczekuje){
		?>
		<td><?php echo $row->id?></td>
		<td><?php echo $row->od?> ----- <?php echo $row->do?></td>
		<td><?php echo $row->data_utworzenie?></td>
	 	<?php
		$this->db->select('*');
        	$this->db->from('uzytkownicy');
		$this->db->where(array('id'=> $row->id_uzytkownika ));
		$asd = $this->db->get();
		foreach ($asd->result() as $row){
			$imienazwisko = $row->nazwa_uzytkownika;
			$dzial = $row ->id_dzialu;
			$stanowisko = $row -> id_stanowiska;
				}
		?>
		<td><?php echo $imienazwisko?></td>
		<?php
		$this->db->select('nazwa');
        $this->db->from('dzialy');
		$this->db->where(array('id_dzialu'=> $dzial ));
		$qwe = $this->db->get();
		foreach ($qwe->result() as $row){
			$dziall = $row -> nazwa;
				}
		?>
		<td><?php echo $dziall?></td>
		<?php
		$this->db->select('nazwa');
        $this->db->from('stanowiska');
		$this->db->where(array('id_stanowiska'=> $stanowisko ));
		$qwe = $this->db->get();
		foreach ($qwe->result() as $row){
			$stanowiskoo = $row -> nazwa;
				}
		?>
		<td><?php echo $stanowiskoo?></td>
  	 	<td><a data-toggle="tab" href="#menu3"><button type="button" class="btn btn-primary">Zobacz</button></a></td>

		</tr>
		<?php }} ?>

  	
      </tr>
</table>
<form action="" method="POST">	 
<form>
IdWniosku <input type="text" name="nrwniosku"><br><br>		
<button class="btn btn-success" name="zatwierdz">Akceptuj</button>
<button class="btn btn-danger"name="odrzuc">Odrzuc</button>
</form>


	</body>
	
	
    </div>
    <div id="menu1" class="tab-pane fade">
      <p>tekst</p>
    </div>
	
    <div id="menu2" class="tab-pane fade">
      
<table class="table table-bordered">
    <thead>
		<tr>
			<th>Status</th>
			<th>od - do</th>
			<th>Informacja</th>
			<th>Nr Wniosku</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		
		$this->db->select('*');
        	$this->db->from('wnioski');
		$this->db->where(array('id_uzytkownika'=> $_SESSION['user_id'], 'status' => 'zaakceptowany'));
		$query = $this->db->get();
		foreach ($query->result() as $row){

		?>
		<tr>	
			<?php if($row->status == oczekuje) { ?>
			<td><span class="glyphicon glyphicon-hourglass"></td>
			<?php }?>
			<?php if($row->status == odrzucony) { ?>
			<td><span class="glyphicon glyphicon-remove icon-grey"></td>
			<?php }?>
			<?php if($row->status == anulowany) { ?>
			<td><span class="glyphicon glyphicon-remove icon-red"></td>
			<?php }?>
			<?php if($row->status == zaakceptowany) { ?>
			<td><span class="glyphicon glyphicon-ok icon-green"></td>
			<?php }?>
				

			<td><?php echo $row->od?> ----- <?php echo $row->do?></td>
			<td><?php echo $row->status?></td>
			<td><?php echo $row->id?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>



    </div>
	
	
      <div id="menu3" class="tab-pane fade">
     <table class="table table-bordered">
    <thead>
      <tr align="center" valign="middle">
        <th>Nr wniosku</th>
        <th>UZASADNIENIE</th>
        <th>Imie Nazwisko</th>
      </tr>
    </thead>
    <tbody>
      <tr align="center" valign="middle">
             </tr>
      		<?php 
		$this->db->select('*');
        	$this->db->from('wnioski');
		$query = $this->db->get();
		foreach ($query->result() as $row){
		if($row->status == oczekuje){
		?>
		
		<td><?php echo $row->id?></td>
		<td><?php echo $row->uzasadnienie?></td>
	 	<?php
		$this->db->select('nazwa_uzytkownika');
        	$this->db->from('uzytkownicy');
		$this->db->where(array('id'=> $row->id_uzytkownika ));
		$asd = $this->db->get();
		foreach ($asd->result() as $row){
			$imienazwisko = $row->nazwa_uzytkownika;
				}
		?>
		<td><?php echo $imienazwisko?></td>
  	 	

		</tr>
		<?php }} ?>

  	
      </tr>
</table>
	  <td><a data-toggle="tab" href="#home"><button type="button" class="btn btn-primary">Powrót</button></a></td>
    </div>
	
	<br>
	<hr>
	
	<h4><kbd>Wykorzystanie Twojego urlopu</kbd></h4>
     <table class="table">
    <thead>
      <tr>
        <th>Rok</th>
        <th>Limit [dni]</th>
        <th>Wykorzystano [dni]</th>
		<th>Do wykorzystania [dni]</th>
      </tr>
    </thead>
    <tbody>
	<?php 
		$this->db->select('*');
        $this->db->from('uzytkownicy');
		$this->db->where(array('id'=> $_SESSION['user_id']));
		$query = $this->db->get();
		foreach ($query->result() as $row){
		
		?>
           
      <tr class="active">
        <td>2017</td>
        <td><?php echo $row->dni_rok?></td>
        <td><?php echo $row->ilosc_wykorzystana?></td>
		<td><?php echo $row->ilosc_dni?></td>
      </tr>

		<?php } ?>
     
    </tbody>
	
  </table>
  </div>
	
    </div>
    <div class="col-sm-2 sidenav"><br>
	<p>
	<a href="<?php echo base_url(); ?>index.php/user/durlop" class="btn btn-default " role="button">Dodaj urlop</a>   
          <span class="glyphicon glyphicon-plus"></span>
        </button>
	      </p><br>  
	<a href="<?php echo base_url(); ?>index.php/user/dpracownika" class="btn btn-default " role="button">Dodaj pracownika</a>   
          <span class="glyphicon glyphicon-plus"></span>
        </button>
<br><br>
		<p><h4><b>Status wniosku:</h2></p>

	<table class="table">
    <thead>
      <tr>
        <th>Utworzenie wniosku</th>
        <th>Zatwierdzenie przez szefa</th>
      </tr>
    </thead>
    <tbody>     
      <tr class="success">
        <td><span class="glyphicon glyphicon-hourglass"></td>
        <td><span class="glyphicon glyphicon-ok icon-green"></td>
      </tr>
      <tr class="danger">
        <td><span class="glyphicon glyphicon-remove icon-grey"></td>
        <td><span class="glyphicon glyphicon-remove icon-red"></td>
      </tr>
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







