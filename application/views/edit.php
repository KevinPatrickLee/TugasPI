<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit</title>
  </head>
  <body>
    <form action="<?php echo base_url('control/update'); ?>" method="post">
    <?php foreach ($edit1 as $key): ?>
    <h1>Edit data</h1>
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
    <button type="submit" class="registerbtn">Update</button>
    </form>
  </body>
</html>
