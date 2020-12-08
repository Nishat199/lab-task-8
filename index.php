<html>
<html>
    <head>
        <title>Login</title>
<script src="../js/validate_index.js"></script>
	
    </head>

    <body >

      <div class="container">



      <fieldset id="login_form">
<h1>Login</h1>

        <form action="" method="post" name="loginform" onsubmit="return validateform()" >
       
<table>
<tr>
 <td>
   Username:
   </td>
   <td>
    <input type="text" id="uname" name="uname">
	</td>
	</tr>
<tr>
 <td>
   password:
  </td>
  <td>
    <input type="Password" id="pass" name="pass">
	</td>
	</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="login" value="login">
</td>
</tr>
</table>
</form>
</fieldset>
<a href="registration.php">Register</a>
 </div>
</body>
</html>