<?php
$form=array('id' => 'form-login', 'class' => 'form-horizontal','role'=>'form');
$usuario=array('name' => 'nome', 'id' => 'nome', 'class' => 'form-control');
//$lusuario=array('class' => 'control-label');
$password=array('name' => 'password', 'id' => 'password', 'class' => 'form-control');
//$lpassword=array('class' => 'control-label');
?>
<!DOCTYPE html>
<html>
<head>
	<title>SisBack 2.0</title>
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/reset.css">
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/bootstrap.min.css">
  	<link rel="stylesheet" href="<?=base_url()?>asset/css/bootstrap-theme.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  	<script src="<?=base_url()?>asset/js/bootstrap.min.js"></script>
</head>
<body>
	<div style="width:200px; height:200px; position:absolute;
	top:50%;
	left:50%;
	margin-top:-170px;
	margin-left:-50px;">
		
		<div class="form-group">
		<!--<div class="row-fluid">-->
			<h2 class="form-signin-heading" align="center">Bem Vindo ao SisBack 2.0</h2>
			<?php 
				echo form_open('main/loginValidation',$form);
				echo validation_errors();
		
				echo form_label('Usuario:','nome');//,$lusuario);
				//echo "<div class='col-xs-4'>";
				echo form_input($usuario);
				//echo "</div>";
			?>
		</div>
		<br>
		<div class="form-group">
			<?php
				echo form_label('Senha:','password');//,$lpassword);
				//echo "<div class='col-xs-4'>";
				echo form_password($password);
				//echo "</div>";
				//echo "<p>";
				//echo form_submit('login_submit','Login');
				echo "<div class='form-group'>";
	    		echo "<div class='col-sm-offset-2 col-sm-10'>";
	    		echo "<br>";
		        echo '<input type="submit" class="btn btn-lg btn-primary pull-right" value="Entrar">';
				//echo "</p>";
				echo "</div>";
				echo "</div>";
				echo form_close();
			?>
		</div>
	</div>
</body>
</html>