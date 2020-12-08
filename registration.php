
<html>
	<head>
		<title>Registration</title>
		<script src="../js/validate_registration.js"></script>
			

</head>
	<body>
		<div class="container">



		<fieldset id="register_form" >
      <h1>Welcome to Registration.</h1>

			<form action="" method="post" onsubmit="return validateform()" name="registerform"   >
				<table>
					<tr>
						<td align="right">
							 Full Name:
						</td>
						<td>
							<input type="text" name="name">
							<span> 
                              <?php
                                echo $errName;
                              ?>
							</span>
							
						</td>
					</tr>
					<tr>
						<td align="right">
							Username:
						</td>
						<td>
							<input type="text" name="username">
							<span>
							<span> 
                              <?php
                                echo $errUsername;
                              ?>
							</span>
						</td>
					</tr>
					<tr>
						<td align="right">
							Password:
						</td>
						<td>
							<input type="Password" name="pass">
							<span>
								<?php
                                  echo $pass;
								?>
							</span>
						</td>
					</tr>
					<tr>
						<td align="right">
						     Confirm Password:
						</td>
						<td>
							<input type="Password" name="cpass">
							<span>
								<?php
                                  echo $cpass;
								?>
							</span>
						</td>
					</tr>
					
					<tr>
						<td align="right">
							Email:
						</td>
						<td>
							<input type="text" name="email">
							<span>
								<?php
                                  echo $errMail;
								?>
							</span>
						</td>
					</tr>
					<tr>
						<td align="right">
							Phone:
						</td>
						<td>
							<input type="text" size="5" > - <input type="text" size="7" name = "phone">
							<span>
								<?php
                                  echo $errPhone;
								?>
						<tr>
          <td  align="left">
          <input type="submit" name="signup" value="Register">
          </td>
          </tr>
				</table>
			</form>
			
		</fieldset>
				</div>
	</body>
</html>	