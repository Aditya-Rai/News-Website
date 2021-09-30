<!-- <html>
    <head>
        <title>Login Example with Session...</title>
    </head>
    <body>
        <center>
            <h3>Login</h3>
            <form action="Verify.php" method="post">
                <table border="0" cellpadding="10px" style="background-color:cyan; color: navy;">
                    <tr>
                        <td>Username : </td>
                        <td><input type="text" name="txtusername" id="txtusername" required></td>
                    </tr>
                    <tr>
                        <td>Passowrd : </td>
                        <td><input type="password" name="txtpassword" id="txtpassword" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" value="Login">
                            <input type="reset" value="Cancel">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right" style="font-size:13px;"><a href="New User.php" style="text-decoration:none;">Sign Up / New User</a></td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html> -->





<!DOCTYPE html>
<html>
    
<head>
	<title>Login Page</title>
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
						<img src="login_logo3.jpg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="Verify.php" method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
                            
							<input type="text" name="txtusername" id="txtusername" class="form-control input_user" value="" placeholder="username" required>
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
				 	<button type="submit" name="button" class="btn login_btn">Login</button>
				 	<button type="reset" name="button" class="btn login_btn">Clear</button>

				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="New User.php" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
