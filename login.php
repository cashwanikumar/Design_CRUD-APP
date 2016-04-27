<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/body.css"/>
</head>

<body style="background-color:#09F;">

<div class="container-fluid">
	<div class="row">
    	<div class="col-lg-5 first">
        	<div class="panel panel-primary">
            	<div class="panel-body">
                	<form role="form">
                		<div class="heading acc">
                    		<h2>LOGIN</h2>
                    	</div>
                        <div class="form-group">
                        	<label for="user">Username</label>
                            <input type="text" class="form-control input-lg" id="user" placeholder="Username" />
                        </div>
                        <div class="form-group">
                        	<label for="pass">Password</label>
                        	<input type="password" class="form-control input-lg" id="pass" placeholder="Password" />
                        </div>
                        <div class="checkbox text-center">
                        	<label><input type="checkbox">Rememeber Me</label>
                        </div>
                        <div class="form-group">
                        	<div class="row">
								<div class="col-sm-6 col-sm-offset-3">
									<input type="submit" class=" form-control btn btn-login btn-lg" value="Login">
								</div>
							</div>
                        </div>
                        <div class="form-group">
							<div class="row">
								<div class="col-lg-12">
									<div class="text-center">
										<a href="#" class="forgot-password">Forgot Password?</a>
									</div>
								</div>
							</div>
						</div>
                    </form>
                </div>
            </div> 
        </div>
    </div>
</div>
</body>
</html>