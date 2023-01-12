<?php

class User extends Controller
{
  public function index()
  {
    $data['title'] = 'User';
    $this->view('templates/header', $data);
    $this->view('user/index');
    $this->view('templates/footer');
  }
  public function profile($nama = "Linux", $pekerjaan = "Devs")
  {
    // echo "Salam kenal saya $nama, saya seorang $pekerjaan";
    $data['title'] = 'Profile';
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $this->view('templates/header', $data);
    $this->view('user/profile', $data);
    $this->view('templates/footer');
  }
}
