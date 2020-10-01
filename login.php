<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>
<body>

		<!--form area start-->
		<div class="form">
			<!--login form start-->
			<form action="login process.php" method="POST"></form>
				<h2>Login</h2>
				<div class="icons">
					<a href="#"><i class="fab fa-facebook"></i></a>
					<a href="https://www.instagram.com/ah__so1/"><i class="fab fa-instagram"></i></a>
					<a href="https://twitter.com/ah__so1"><i class="fab fa-twitter"></i></a>
				</div>

<center>

    <p>Login</p>

<form action="login process.php" method="POST">
<input type="text" id="user" name="username" placeholder="username" required>
    <input type="text" id="pass" name="password" placeholder="password" required>
                <button type="submit" id="btn" name="login" default>login</button>
 
            
    
</form>

</center>
   
<script language="javascript">
    document.onmousedown=disableclick;
    status="";
    function disableclick(event)
    {
      if(event.button==2)
       {
         alert(status);
         return false;    
       }
    }
    
    
    document.onkeydown = function(e) {
      if(event.keyCode == 123) {
         return false;
      }
      if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
         return false;
      }
      if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
         return false;
      }
      if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
         return false;
      }
      if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
         return false;
      }
    }
    
    </script>

</body>
</html>
