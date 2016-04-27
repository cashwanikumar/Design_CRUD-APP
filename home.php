<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>paper with TAB</title>
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/body2.css"/>
<script type="text/javascript" src="js/jquery-1.12.3.js"></script>
<script type="text/javascript" src="js/link.js"></script>
</head>

<body style="background-color:#09F;">
<div class="container">
	<div class="row">
    	<div class="col-lg-6 first">
        	<div class="panel panel-info">
            	<div class="panel-heading">
                  <div class="row">
                		<div class="col-xs-6">
                    		<a href="#" class="active" id="login-form-link">Login</a>
                    	</div>
                    	<div class="col-xs-6">
                    		<a href="#" id="register-form-link">Register</a>
                    	</div>
                   </div>
                </div>
                
                <div class="panel-body">
                	<form role="form" id="login-form" role="form" style="display:block;">
                		<!--<div class="heading acc">
                    		<h2>LOGIN</h2>
                    	</div> -->
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
                	<form role="form" id="register-form" style=" display:none" >
                		<!--<div class="heading acc">
                    		<h2>REGISTER</h2>
                    	</div> -->
                        <div class="form-group">
                        	<label for="user">Username</label>
                            <input type="text" class="form-control input-lg" id="user" placeholder="Username" />
                        </div>
                        <div class="form-group">
                        	<label for="email">Email Address</label>
                        	<input type="text" class="form-control input-lg" id="email" placeholder="Email Address" />
                        </div>
                        <div class="form-group">
                        	<label for="pass">Password</label>
                        	<input type="password" class="form-control input-lg" id="pass" placeholder="Password" />
                        </div>
                        <div class="form-group">
                        	<label for="confirm">Confirm Password</label>
                        	<input type="password" class="form-control input-lg" id="confirm" placeholder="Confirm Password" />
                        </div>
                        <div class="form-group">
                        	<div class="row">
								<div class="col-sm-6 col-sm-offset-3">
									<input type="submit" class=" form-control btn btn-register" value="Register Now">
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