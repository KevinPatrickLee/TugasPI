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
  function get_data()
  {
    return $this->db->query("SELECT * FROM mahasiswa")->result();
  }
  function edit_data($id)
  {
    return $this->db->query("SELECT * FROM mahasiswa WHERE id = '$id'")->result();
  }
  function update($where,$table,$data)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function delete($where,$table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
}

 ?>
