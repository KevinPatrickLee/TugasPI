<?php

class Control_Model extends CI_Model
{
  function addAkun($table,$data)
  {
    $this->db->insert($table,$data);
  }
  function checklogin($email,$password)
  {
    return $this->db->query("SELECT * FROM mahasiswa WHERE email = '$email' AND password = '$password'")->result();
  }
}

 ?>
