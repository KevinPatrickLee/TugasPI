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

input[type="number"],
input[type="text"],
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

.registerbtn {
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
    <meta charset="utf-8">
    <title>Edit</title>
  </head>
  <body>
    <center><h1>Edit data</h1></center>
    <form action="<?php echo base_url('control/update'); ?>" method="post">
    <?php foreach ($edit1 as $key): ?>
    <h3>NIM</h3>
    <input type="number" placeholder="Enter Name" name="nim" id="nim" value="<?php echo $key->nim; ?>" required>
    <input type="hidden" name="id" id="id" value="<?php echo $key->id; ?>">
    <h3>Name</h3>
    <input type="text" placeholder="Enter Name" name="nama" id="name" value="<?php echo $key->nama; ?>" required>

    <h3>Email</h3>
    <input type="email" placeholder="Enter Email" name="email" id="email" value="<?php echo $key->email; ?>" required>

    <h3>Password</h3>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" value="<?php echo $key->password; ?>" required>
    <?php endforeach; ?>
    <br><br>
    <center><button type="submit" class="registerbtn">Update</button></center>
    </form>
  </body>
</html>
