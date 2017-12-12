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
	    <li><a href="<?php echo base_url(); ?>index.php/user/dwniosek"><span class="glyphicon glyphicon-plus"></span> Dodaj wniosek</a></li>
        <li><a href="#">Kalendarz</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  	<li><p class="navbar-zalogowany"><?php echo $_SESSION['username'];?></p></li>
		<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Ustawienia</a></li>
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
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    </div> 








<div id="home" class="tab-pane fade in active">
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
		$this->db->where(array('id_uzytkownika'=> $_SESSION['user_id']));
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













</div> 
</div>
<div class="col-sm-2 sidenav"><br>
	    <a href="<?php echo base_url(); ?>index.php/user/dwniosek" class="btn btn-default active" role="button">Dodaj nowy wniosek</a>         
 <span class="glyphicon glyphicon-plus"></span> 
        </button>
      </p><br>  	
	    </thead>		
      </div>

<footer class="container-fluid text-center">
<button type="button" class="btn btn-default">kontakt</button>
<button type="button" class="btn btn-default">pomoc</button>
</footer>

</body>
</html>