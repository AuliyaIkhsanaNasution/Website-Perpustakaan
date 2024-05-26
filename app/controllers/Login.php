<?php 
 class Login extends Controller {

    public function index ()
    {
        $data['judul']='Login Admin Politeknik Negeri Medan';
        $this->view('templates/header',$data);
        $this->view('login/index');
    }
 }
?>