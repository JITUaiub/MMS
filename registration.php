<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.2/css/bulma.css">
<script type="text/javascript" src="js/registrationValidate.js"></script>
<title>Sign Up - MMS</title>
</head>
<body>
	<!-- Top Menu -->
	<div class="block" style="padding-left: 40px; padding-right: 40px">
		<nav class="level">
			<div class="level-left">
				<a href="index.php" class="is-primary" style="padding-top: 20px;"><b
						class="title is-3"><b>Meal Management System</b></b></a>
			</div>
			<div class="level-right">
				<a href="registration.php"
					style="padding-top: 30px;padding-right: 60px; display: flex; align-items: center; justify-content:center" class="is-block is-primary is-large is-inverted"><b>Sign Up</b></a> <a
					href="login.php" style="padding-top: 30px;padding-right: 60px; display: flex; align-items: center; justify-content:center" class="is-block is-primary is-large is-inverted"><b>Login</b></a>
			</div>
		</nav>
		<div><hr size="2" /></div>
	</div>
	<!-- Body -->
	<section class="hero ">
		<div class="hero-body">
			<div class="container has-text-centered">
				<div class="column is-6 is-offset-3">
				<p class="subtitle is-smaill" style="color: RED" id="errorMessage"><?php 
				if (isset($_REQUEST['m'])) {
					$m = mysql_real_escape_string($_REQUEST['m']);
					if ($m == 0) {
						echo "Error occured during registration.";
					}elseif ($m == 1) {
						echo "Registration Successfull. <a href='login.php'>Login</a> now.";
					}
				} ?></p>
					<h3 class="title has-text-grey">Sign up for an account</h3>
					<p class="subtitle has-text-grey">Please fill all informations.</p>
					<div class="box">
						<form action="action/registrationSubmit.php" method="post" onsubmit="return validate()">
							<div class="field">
								<div class="control">
									<p class="field" style="color: RED" id="errorName"></p>
									<input class="input is-large" id="name" name="name" type="text"
										value=""
										placeholder="Full Name">
								</div>
							</div>
							<div class="field">
								<div class="control">
									<p class="field" style="color: RED" id="errorEmail"></p>
									<input class="input is-large" id="email" name="email" type="email"
										value=""
										placeholder="Email" oninput="validateEmail(this.value)">
										<p class="field" id="validEmail" style="color: RED"></p>
								</div>
							</div>

							<div class="field">
								<div class="control">
									<p class="field" style="color: RED" id="errorPassword"></p>
									<input class="input is-large" id="password" name="password" type="password"
										placeholder="Password">
								</div>
							</div>
							<div class="field">
								<div class="control">
									<p class="field" style="color: RED" id="errorConPassword"></p>
									<input class="input is-large" id="conPassword" name="conPassword" type="password"
										placeholder="Confirm Password">
								</div>
							</div>
							<input type="submit" name="registrationSubmit"
								value="Finish Sign Up"
								class="button is-block is-primary is-large is-fullwidth" />
						</form>
					</div>

					<p class="has-text-grey">
						Already have an account? <a href="login.php">Login
							Now</a>
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer -->
	<div class="block">
		<div class="box is-green">
			<div class="columns is-centered">
				Developed by - <a href="https://www.facebook.com/nashid.jitu">Md. Nashid Kamal (Jitu)</a>
			</div>
		</div>

	</div>
	<div style="margin-top: 50px"></div>
</body>
</html>