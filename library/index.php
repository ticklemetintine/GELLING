<?php
	include('../includes/header.php');
	error_reporting(0);
?>
<body>
<div class="container">

	<form class="form-signin" action = "login/login-verification.php" method = "POST">
		<h2 class="form-signin-heading">Please sign in</h2>
		<input type="text" class="input-block-level" placeholder="Username" name = "username">
		<input type="password" class="input-block-level" placeholder="Password" name = "password">
		<?php

			if($_GET[err] == 1){
				echo "<div class = 'alert alert-error'>Please enter both username and password</div>";
			}
			if($_GET[err] == 2){
				echo "<div class = 'alert alert-error'>Invalid username and/or password</div>";
			}

		?>
		<input type = "submit" class="btn btn-large btn-primary" name = "login" value = "Sign In">
	</form>

</div> <!-- /container -->
</body>
</html>