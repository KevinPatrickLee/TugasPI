<?php

class Control_Model extends CI_Model
{
  function addAkun($table,$data)
  {
    $this->db->insert($table,$data);
  }
}

 ?>
