<!DOCTYPE html>
<html lang="en" dir="ltr">
<style>
body {
  background: #3498db;
  font-family: sans-serif;
}

h1 {
  color: #fff;
  font-size: 30pt;
}

form {
  padding: 2em;
  margin: 1em auto;
  width: 17em;
  background: #fff;
  border-radius: 3px;
  box-shadow: 15px 15px 30px rgba(0, 0, 0, 0.15);
}

h3 {
  font-size: 10pt;
  color: #555;
}

input[type="email"],
input[type="password"],
textarea {
  padding: 10px;
  width: 93%;
  background: #efefef;
  border: 0;
  font-size: 10pt;
  margin: 6px 0px;
}

.loginbtn {
  background: #3498db;
  color: #fff;
  border: 0;
  padding: 5px 8px;
  margin: 20px 0px;
  font-size: 14pt;
}
a{
  font-size: 13pt;
}
</style>
<head>
  <title>Login</title>
</head>
<body>
  <center><h1>Login</h1></center>
  <form action="<?php echo base_url('control/dologin'); ?>" method="post">
  <h3>Email</h3>
  <input type="email" placeholder="Enter Email" name="email" id="email" required>
  <h3>Password</h3>
  <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
  <br>
  <center>
  <button type="submit" class="loginbtn">Login</button>
  <br>
  <a href="<?php echo base_url('control/register') ?>">Register Here</a>
  </center>
  </form>

</body>
</html>
