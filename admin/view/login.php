<!DOCTYPE html>
<html>
<title>Login</title>
<body>
<h1>Login</h1>
<h4 style="color:red;"><?php if(isset($error)){ echo $error; }  ?></h4>
<form action="../controller/action_login.php" method="POST" >
  <label for="uname">Username: </label>
  <input type="text" id="uname" name="uname" placeholder="Enter your unsername" >
  <span class="error"><?php if(isset($unameErr)) { echo $unameErr; }  ?></span><br><br>
  <label for="pwd">Password: </label>
  <input type="password" id="pwd" name="pwd" placeholder="Enter your password" >
  <span class="error"><?php if(isset($passwordErr)){ echo $passwordErr; }  ?></span>
  <br><br>
  <input type="submit" name="formLogin" value="Login" >
</form>

</body>
</html>