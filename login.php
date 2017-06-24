<?php require "header.php"; ?>

<div class="container">
	<div class = "row">
		<!-- blank div -->
		<div class="col-md-4"></div>
		<div class="col-md-4 loginbox">
			<center><h1 style="color: whitesmoke;">Login</h1></center><br>
			<form id="login_form"  action="loginAction.php" method="post">
				<input type="textfield" class="input_all" name="username" placeholder="Username">
				<input type="password" class="input_all" name="password" placeholder="password">
				<input type="submit" name="Login"><br>
			</form>
		</div>
		<!-- blank div -->
		<div class="col-md-4"></div>
	</div>
</div>

<?php require "footer.php";  ?>