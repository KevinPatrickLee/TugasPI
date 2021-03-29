<html>
<head>
  <title>Login</title>
</head>
<body>
  <form action="<?php echo base_url('control/dologin'); ?>" method="post">
  <h1>Login</h1>
  <h3>Email</h3>
  <input type="email" placeholder="Enter Email" name="email" id="email" required>

  <h3>Password</h3>
  <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
  <br><br>
  <button type="submit" class="loginbtn">Login</button>
  <br><br>
  <a href="<?php echo base_url('control/register') ?>">Register Here</a>
  </form>

</body>
</html>
