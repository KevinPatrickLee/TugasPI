<html>
<head>
  <title>Register</title>
</head>
<body>
  <form>
  <h1>Register</h1>
  <h3>Name</h3>
  <input type="text" placeholder="Enter Name" name="name" id="name" required>

  <h3>Email</h3>
  <input type="text" placeholder="Enter Email" name="email" id="email" required>

  <h3>Password</h3>
  <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
  <br><br>
  <button type="submit" class="registerbtn">Register</button>
  <br><br>
  <a href="<?php echo base_url('control/login') ?>">Login Here</a>
  </form>


</body>
</html>
