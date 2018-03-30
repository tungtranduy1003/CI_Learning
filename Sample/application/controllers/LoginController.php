<?php
class LoginController extends CI_Controller
{
    public function load_form()
    {
        $this->load->view('login_view');
    }

    public function form()
    {
        $data = array(
            'title' => 'Login Page',
            'message' => 'Please Enter Your Account Infomation'
        );
        $this->load->view('login_form' , $data);
    }
}
