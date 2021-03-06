<!-- <html>
    <head>
        <title>New User Registration...</title>        
    </head>
    <body>
        <center>
            <h3>... User Registration ...</h3>
            <div>
            <form action="Register User.php" method="post">
                <table border="1" cellpadding="10px">
                    <tr>
                        <td>Name </td>
                        <td><input type="text" name="txtname" id="txtname" size="30" placeholder="Name" required></td>
                    </tr>
                    <tr>
                        <td>Username </td>
                        <td><input type="text" name="txtusername" id="txtusername" size="30" placeholder="Username" required></td>
                    </tr>
                    <tr>
                        <td>Password </td>
                        <td><input type="password" name="txtpassword" id="txtpassword" size="30" placeholder="Password" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"> 
                            <input type="submit" name="submit" value="Register">
                            <input type="reset" value="Clear">
                        </td>
                    </tr>
                </table>
            </form>
            </div>
        </center>
    </body>
</html> -->





<!DOCTYPE html>
<html>
    
<head>
	<title>New User Registration</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="login.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>

<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="register_logo.jpg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="Register User.php" method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>

							<input type="text" name="txtname" id = "txtname" class="form-control input_user" value="" placeholder="Name" required>
						</div>

						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>

							<input type="text" name="txtusername" id = "txtusername" class="form-control input_user" value="" placeholder="Username" required>
						</div>

						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>

							<input type="password" name="txtpassword" id="txtpassword" class="form-control input_pass" value="" placeholder="password" required>
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">

				 	<button type="submit" name="submit" class="btn login_btn">Register</button>
				 	<button type="reset" name="button" class="btn login_btn">Clear</button>

				   </div>
					</form>
				</div>
		
				<!-- <div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="New User.php" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</body>
</html>
