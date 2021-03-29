<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
  public function index()
  {
   $this->load->view('home.php');
  }

  function register()
	{
		$this->load->view('register.php');
	}

  function login()
	{
		$this->load->view('login.php');
	}
  function doregister()
  {
    $nim = $this->input->post("nim");
    $nama = $this->input->post("name");
    $email = $this->input->post("email");
    $password = $this->input->post("psw");
    $password = sha1($password);
    $data = array (
      'nim' => $nim,
      'nama' => $nama,
      'email' => $email,
      'password' => $password
    );
    $this->Control_Model->addAkun('mahasiswa', $data);
    redirect('control');
  }
  function dologin()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('psw');
    $password = sha1($password);
    $data['cek'] = $this->Control_Model->checklogin($email,$password);
    if ($data['cek'] != NULL)
    {
      foreach ($data['cek'] as $key)
      {
        $nim1 = $key->nim;
        $nama1 = $key->nama;
        $email1 = $key->email;
      }
      $data_session = array (
        'nim' =>$nim1,
        'nama' =>$nama1,
        'email' =>$email1
      );
      $this->session->set_userdata($data_session);
      redirect('control');
    }
    else
    {
      echo "Username atau password salah!";
    }
  }
}
