<html>
<head>
  <title>Home</title>
</head>
<body>
<h1>Hello</h1>
<a href="<?php echo base_url('control/login') ?>">Login</a>
<br>
<a href="<?php echo base_url('control/register') ?>"> Register</a>
<table>
  <tr>
    <td>NIM</td>
    <td>Nama</td>
    <td>Email</td>
    <td colspan="2">Edit</td>
  </tr>
<?php foreach ($mahasiswa as $key): ?>
  <tr>
    <td><?php echo $key->nim; ?></td>
    <td><?php echo $key->nama; ?></td>
    <td><?php echo $key->email; ?></td>
    <td><a href="<?php echo base_url('control/edit/'.$key->id); ?>">Edit</a></td>
    <td><a href="<?php echo base_url('control/delete/'.$key->id); ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
  </tr>
<?php endforeach; ?>
</table>


</body>
</html>
