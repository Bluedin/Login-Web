<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section id="bodyIn" class="container theme-showcase" role="main">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<form action="loginTempt.php" method="post">
				<h3>USER</h3>
				<input type="text" name="user" />
				<h3>PASSWORD</h3>
				<input id="password" type="password" name="pass" />
				<div id="actionner">
					<div class="col-md-6">
						<input type="submit" value="Envoyer" />
					</div>
					
				</div>
				
			</form>
			<div id="actionner" class="col-md-6">
				<button onclick="inscription()">INSCRIPTION</button>
			</div>
		</div>
		
	</section>
	<script type="text/javascript">
		function inscription(){
			document.location.href='inscription.php';
		}
	</script>
	
</body>
</html>