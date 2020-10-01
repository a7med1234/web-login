<?php session_start();
if(empty($_SESSION['id'])):
    header('Location:login.php');
endif;
?>
<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="style1.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	
        <div class="loader">
			<div></div>
			<div></div>
			<div></div>
		</div>

		<script type="text/javascript">
		setTimeout(function(){
			$('.loader').fadeToggle();
		},3000);
		</script>

    <?php 
     include('database connection.php');
     session_destroy();

     echo '<meta http-equiv="refresh" content="2;url=login.php">';
     echo '<progress max=100><strong>Progress: 60% done.</strong></progress><br>';
     echo '<span class="itext">Logging out please wait!...</span>';

    ?>
    </div>

</body>
</html>

