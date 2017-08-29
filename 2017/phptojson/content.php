<link rel = "stylesheet"
   type = "text/css"
   href = "css/style.css" />
   <script type="text/javascript" src="js/convert.js"></script>
   
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

                   
    				
						
                    
<!--Content area starts-->
<div class="container">
<div class="col-md">
    <div class="form-area">  
        
        <br style="clear:both">
		<div id="content">
		
			 <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
			<div id="form2">
				<form action="" method="post">
					<table> 
					<div class="form-group">
					
					 
  
						<tr>
							<label for="usr">Name:</label>
							
							<input type="text" class="form-control" name="u_name" placeholder="Enter your name" id="usr" required="required"/>
							
						</tr>
					</div>
					<div class="form-group">
						<tr>
							<label for="pass">Password:</label>
							
							<input type="password" class="form-control" name="u_pass" placeholder="Enter your password" id="pass" required="required"/>
							
						</tr>
						</div>
						<div class="form-group">
						<tr>
							<label for="email">email:</label>
							<input type="email" class="form-control"  name="u_email" placeholder="Enter your mail" id = "email" required="required">
						</tr>
						</div>
						<div class="form-group">
						<tr>
							<label for="ctry">Country:</label>
							<select name="u_country" class="form-control" id="ctry" required="required">
								<option>Select a Country</option>
								<option>Afghanistan</option>
								<option>India</option>
								<option>Pakistan</option>
								<option>United States</option>
								<option>United Arab Emirates</option>
							</select>
						</tr>
						</div>
						<div class="form-group">
						<tr>
							<label for="gender">Gender:</label>
							<select name="u_gender" class="form-control" id="gender">
								<option>Select a Gender</option>
								<option>Male</option>
								<option>Female</option>
								
							</select>
						</tr>
						</div>
						<div class="form-group">
						
						<tr>
							<label for="bday">BirthDay:</label>
							<input type="date" class="form-control" id="bday" name="u_birthday"/>
							</td>
						</tr>
						</div>
						<div class="form-group">
						<tr>
							<td colspan="6">
							<button class="btn btn-primary pull-right btn btn-info" name="sign_up">Sign Up</button>
							</td>
						</tr>
						</div>
					</table>
				</form>
				<?php 
				include("user_insert.php");
				?>
			</div>
		</div>
		 </div>
</div>
</div>
		<!--Content area ends-->