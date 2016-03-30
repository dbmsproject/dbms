

<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript">
		<!--
			var image1 = new Image()
			image1.src = "image/1.jpg"
			var image2 = new Image()
			image2.src = "image/2.jpg"
			var image3 = new Image()
			image3.src = "image/3.jpg"
			
		//-->
		</script>
		<title>hospital management</title>
	</head>
	<body>
		<div id="header">
			<div id="headleft">
				<h1 id="type"></h1><h3> Taking care of students like home </h3>
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#patient">
				  Register a patient
			</div>
			<div id = "headright">
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#login">
				  LogIn

				</button>
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#reg">
				  Register As Doctor
				</button>

				<!-- Modal -->
				<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				    	<div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">logIn </h4>
				        <p>Both Doctor and Patient can logIn and see their profile</p>
				        <br>
				        	<form class="form-horizontal" action="login1.php" method="POST">
  								<div class="form-group">
   									 <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    								<div class="col-sm-10">
      									<input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
    								</div>
  								</div>
  								<div class="form-group">
    								<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    								<div class="col-sm-10">
      									<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
    								</div>
  								</div>
  								<div class="form-group">
    								<div class="col-sm-offset-2 col-sm-10">
      									<div class="checkbox">
        									<label>
          									<input type="checkbox"> Remember me
        									</label>
      									</div>
    								</div>
  								</div>
 								<div class="form-group">
    								<div class="col-sm-offset-2 col-sm-10">
      									<button type="submit" class="btn btn-default">Sign in</button>
    								</div>
  								</div>
							</form>
				      	</div>
				      
				      
				    </div>
				  </div>
				</div>
				<div class="modal fade" id="reg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				    	<div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Register As Doctor </h4>
				        <p>Register to view the Details of your patient</p>
				        <br>
				        	<form action="connection1.php" method="POST" class="form-horizontal">
				        		<div class="form-group">
   									 <label for="inputText3" class="col-sm-2 control-label"> Doctor ID</label>
    								<div class="col-sm-10">
      									<input name="doctor_id" type="text" class="form-control" id="inputText3" placeholder="Doctor ID">
    								</div>
  								</div>
				        		<div class="form-group">
   									 <label for="inputText3" class="col-sm-2 control-label">First Name</label>
    								<div class="col-sm-10">
      									<input  name="f_name" type="text" class="form-control" id="inputText3" placeholder="First Name">
    								</div>
  								</div>
  								<div class="form-group">
   									 <label for="inputText3" class="col-sm-2 control-label"> Last Name</label>
    								<div class="col-sm-10">
      									<input  name="l_name" type="text" class="form-control" id="inputText3" placeholder="last Name">
    								</div>
  								</div>
  								<div class="form-group">
   									 <label for="inputText3" class="col-sm-2 control-label"> Phone Number</label>
    								<div class="col-sm-10">
      									<input  name="phone_no" type="text" class="form-control" id="inputText3" placeholder="Phone Number">
    								</div>
  								</div>
  								

  								<div class="form-group">
   									 <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    								<div class="col-sm-10">
      									<input  name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
    								</div>
  								</div>
  								<div class="form-group">
   									 <label for="inputText3" class="col-sm-2 control-label"> Specilization</label>
    								<div class="col-sm-10">
      									<input  name="spec" type="text" class="form-control" id="inputText3" placeholder="Specilization">
    								</div>
  								</div>
  								<div class="form-group">
   									 <label for="inputText3" class="col-sm-2 control-label"> Qualification</label>
    								<div class="col-sm-10">
      									<input  name="qualification" type="text" class="form-control" id="inputText3" placeholder="Qualification">
    								</div>
  								</div>
  								

  								

  								<div class="form-group">
    								<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    								<div class="col-sm-10">
      									<input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password">
    								</div>
  								</div>
  								<div class="form-group">
    								<label for="inputPassword3" class="col-sm-2 control-label">Conform Password</label>
    								<div class="col-sm-10">
      									<input name="c_password" type="password" class="form-control" id="inputPassword3" placeholder="Conform Password">
    								</div>
  								</div>
 								<div class="form-group">
    								<div class="col-sm-offset-2 col-sm-10">
      									<button type="submit" class="btn btn-default" id="button" name ="submit" value="register">Register</button>
    								</div>
  								</div>
							</form>
				      	</div>
				      
				      
				    </div>
				  </div>
				</div>
			</div>
			<div class="modal fade" id="patient" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				    	<div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Register A Patient  </h4>
				        <p>You can register a patient to this site so that you can view all of your details online</p>
				        <br>
				        	<form action="connection2.php" method="POST" class="form-horizontal">
				        		<div class="form-group">
   									 <label for="inputText3" class="col-sm-2 control-label">First Name</label>
    								<div class="col-sm-10">
      									<input type="text" class="form-control" id="inputText3" placeholder="First Name">
    								</div>
  								</div>
  								<div class="form-group">
   									 <label for="inputText3" class="col-sm-2 control-label"> Last Name</label>
    								<div class="col-sm-10">
      									<input type="text" class="form-control" id="inputText3" placeholder="last Name">
    								</div>
  								</div>
  								<div class="form-group">
   									 <label for="inputText3" class="col-sm-2 control-label"> Phone Number</label>
    								<div class="col-sm-10">
      									<input type="text" class="form-control" id="inputText3" placeholder="Phone Number">
    								</div>
  								</div>
  								

  								<div class="form-group">
   									 <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    								<div class="col-sm-10">
      									<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    								</div>
  								</div>
  								<div class="form-group">
   									 <label for="inputText3" class="col-sm-2 control-label"> DOB</label>
    								<div class="col-sm-10">
      									<select name="time">
												<option value="na">Day</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="1">13</option>
												<option value="2">14</option>
												<option value="3">15</option>
												<option value="4">16</option>
												<option value="5">17</option>
												<option value="6">18</option>
												<option value="7">19</option>
												<option value="8">20</option>
												<option value="9">21</option>
												<option value="10">22</option>
												<option value="11">23</option>
												<option value="12">24</option>
												<option value="7">25</option>
												<option value="8">26</option>
												<option value="9">27</option>
												<option value="10">28</option>
												<option value="11">29</option>
												<option value="12">30</option>
												<option value="12">31</option>
											</select>
											<select name="month">
												<option value="na">time</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
											</select>
											<select name="year">
												<option value="na">Year</option>
												<option value="2009">2009</option>
												<option value="2008">2008</option>
												<option value="2007">2007</option>
												<option value="2006">2006</option>
												<option value="2005">2005</option>
												<option value="2004">2004</option>
												<option value="2003">2003</option>
												<option value="2002">2002</option>
												<option value="2001">2001</option>
												<option value="2000">2000</option>
												<option value="1999">1999</option>
												<option value="1998">1998</option>
												<option value="1997">1997</option>
												<option value="1996">1996</option>
												<option value="1995">1995</option>
												<option value="1994">1994</option>
												<option value="1993">1993</option>
												<option value="1992">1992</option>
												<option value="1991">1991</option>
												<option value="1990">1990</option>
												<option value="1989">1989</option>
												<option value="1988">1988</option>
												<option value="1987">1987</option>
												<option value="1986">1986</option>
												<option value="1985">1985</option>
												<option value="1984">1984</option>
												<option value="1983">1983</option>
												<option value="1982">1982</option>
												<option value="1981">1981</option>
												</select>
												<br>											
    								</div>
  								</div>
  								<div class="form-group">
   									 <label for="inputText3" class="col-sm-2 control-label">Gender</label>

  											<label class="radio-inline">
												<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">Male
											</label>
											<label class="radio-inline">
												<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">Female
											</label>
								</div>
  								<div class="form-group">
    								<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    								<div class="col-sm-10">
      									<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    								</div>
  								</div>
  								<div class="form-group">
    								<label for="inputPassword3" class="col-sm-2 control-label">Conform Password</label>
    								<div class="col-sm-10">
      									<input type="password" class="form-control" id="inputPassword3" placeholder="Conform Password">
    								</div>
  								</div>
 								<div class="form-group">
    								<div class="col-sm-offset-2 col-sm-10">
      									<button type="submit" class="btn btn-default" id="button" name ="submit" value="register">Register</button>
    								</div>
  								</div>
							</form>
				      	</div>
				      
				      
				    </div>
				  </div>
				</div>
			
		</div>
		<div id="content">
			<img src="image/1.jpg" name="slide" width="100%" height="600px">
		</div>
		<div id="footer">
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.js">
		</script>
		<script src="js/typed.js">
		</script>
		<script>
			$(function(){
      			$("#type").typed({
        			strings: ["<strong>MNNIT HOSPITAL</strong>"],
        			typeSpeed: 100
      			});
  			});
		</script>

		<script type="text/javascript">
		<!--
			var step=1
			function slideit() {
				document.images.slide.src=eval("image"+step+".src")
				if(step<3)
					step++
				else
					step=1
				setTimeout("slideit()",2500)
			}
			slideit()

		//-->
		</script>
	</body>
</html>