<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Profile Information</title>
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap.css"/>
<script type="text/javascript" src="bootstrap-3.3.6-dist/js/bootstrap.js"></script>

</head>

<body>

<div class=" jumbotron">
    	<h1>Profile Information of the candidates</h1>
        <hr style="border-color:#333" />
</div>
<div class="container-fluid">
    <div class="row">
    	<div class="col-md-4 col-md-offset-4">
			<div class="well well-lg">
              <h3 style="text-align:center;">Personal Infomation</h3>
              <hr style="border-color:#F00" />
              <form class="form-horizontal" action="GET">
  					<div class="form-group">
    					<label for="inputName" class="col-sm-4 control-label">Name:</label>
    					<div class="col-sm-8">
      						<input type="text" class="form-control" id="inputName">
    					</div>
  					</div>
  					<div class="form-group">
    					<label for="department" class="col-sm-4 control-label">Department:</label>
    					<div class="col-sm-8">
      						<input type="text" class="form-control" />
    					</div>
  					</div>
                    <div class="form-group">
    					<label for="inputMobile" class="col-sm-4 control-label">Mobile Phone:</label>
    					<div class="col-sm-8">
      						<input type="text" class="form-control" id="inputName">
    					</div>
  					</div>
                    <div class="form-group">
                    	<label class="control-label col-sm-4" for="gender">Gender:</label>
                        <div class="col-sm-8">
                        	<div class="radio">
                            	<label>
                                	<input type="radio" name="male" id="male" value="" />
                                     Male
                                </label>
                                &nbsp;&nbsp;
                                <label>
                                	<input type="radio" name="male" id="male" value="" />
                                     Female
                                </label>
                            </div>
                        </div>
                    </div>
                   <div class="form-group">
    					<label for="dob" class="col-sm-4 control-label">Date Of Birth:</label>
                        <br />
						<div class="col-sm-8">    					
      						<select>
                            	<option>DAY</option>
                                <option>---</option>
        						<option>1</option>
        						<option>2</option>
        						<option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
        						<option>12</option>
        						<option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
        						<option>22</option>
        						<option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
      						</select>    
    					
                        
                        	<select>
                            	<option>MONTH</option>
                                <option>-------</option>
                            	<option>January</option>
                                <option>February</option>
                            </select>
                        
                        
                        	<select>
                            	<option>YEAR</option>
                                <option>------</option>
                            	<option>2000</option>
                                <option>1996</option>
                            </select> 
                                              
                  </div><br />
                  <div class="form-group">
    					<label for="doj" class="col-sm-4 control-label">Joined on:</label>
                        <br />
						<div class="col-sm-8">    					
      						<select>
                            	<option>DAY</option>
                                <option>---</option>
        						<option>1</option>
        						<option>2</option>
        						<option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
        						<option>12</option>
        						<option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
        						<option>22</option>
        						<option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
      						</select>    
    					
                        
                        	<select>
                            	<option>MONTH</option>
                                <option>-------</option>
                            	<option>January</option>
                                <option>February</option>
                            </select>
                        
                        
                        	<select>
                            	<option>YEAR</option>
                                <option>------</option>
                            	<option>2000</option>
                                <option>1996</option>
                            </select> 
                                              
                  		</div>
                  </div><br />

                  <div class="form-group">
                  	<label class="control-label col-sm-4">Skills:</label>
                    <br />
                     <div class="col-sm-8">
                    	<textarea class="form-control" rows="3"></textarea>
                     </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                    	<div class="col-sm-4 col-sm-offset-4">
                  	     <button type="button" class="btn btn-primary center-block">SAVE</button>
                        </div>
                    </div>
                  </div>      
  				</form>
            </div>        	
        </div>
    </div>
</div>
</body>
</html>