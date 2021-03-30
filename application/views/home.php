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

.home {
  padding: 1em;
  margin: 2em auto;
  width: 17em;
  background: #fff;
  border-radius: 3px;
}

a {
  background: #fff;
  border-radius: 3px;
  padding: 5px 8px;
  margin: 20px 0px;
  font-size: 20pt;
}
.button-2 {
  background: #fff;
  border-radius: 3px;
  padding: 5px 8px;
  margin: 20px 0px;
  font-size: 15pt;
}
.table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 20px;
  box-shadow: 15px 15px 30px rgba(0, 0, 0, 0.15);
}
.table thead tr {
    background-color: #fff;
    text-align: center;
}
.table th,
.table td {
    padding: 12px 15px;
}

.table tbody tr:last-of-type {
    border-bottom: 2px solid #fff;
}
</style>
<head>
  <title>Home</title>
</head>
<body>
<center>
<h1>Hello!!!</h1>
&nbsp&nbsp&nbsp&nbsp   
<a href="<?php echo base_url('control/login') ?>" class="button">Login</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
<a href="<?php echo base_url('control/register') ?>" class="button"> Register</a>
<br><br><br>
<table class="table">
  <thead>
    <tr>
      <td width=100px>NIM</td>
      <td width=200px>Nama</td>
      <td width=300px>Email</td>
      <td colspan="2" width=200px>Edit</td>
    </tr>
  </thead>
<?php foreach ($mahasiswa as $key): ?>
  <tbody>
    <tr>
      <td><center><?php echo $key->nim; ?></center></td>
      <td><center><?php echo $key->nama; ?></center></td>
      <td><center><?php echo $key->email; ?></center></td>
      <td><center><a href="<?php echo base_url('control/edit/'.$key->id); ?>" class="button-2" >Edit</a></center></td>
      <td><center><a href="<?php echo base_url('control/delete/'.$key->id); ?>" class="button-2"  onclick="return confirm('Are you sure?')">Delete</a></center></td>
    </tr>
  </tbody>
<?php endforeach; ?>
</table>
</center>
</body>
</html>
