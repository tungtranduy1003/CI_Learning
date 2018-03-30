<?php
class Demo_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    public function index()
    {
        $data = array(
            "username" => "Kaito",
            "email" => "codephpigniter2018",
            "website" => "tungtd2018.com",
            "gender" => "Male",
        );
        $this->session->set_userdata($data);
        $user = $this->session->userdata("username");
        $email = $this->session->userdata("email");
        $website = $this->session->userdata("website");
        $gender = $this->session->userdata("gender");
        echo "Username: $user"."</br>". "Email: $email, Website: $website, Gender: $gender";
        $data = $this->session->all_userdata();
        echo "</br>";
        print_r($data);
        echo "</br>";
        echo "</br>";
        echo "</br>";
        echo "</br>";
//        echo $data; Message: Array to string conversion
        var_dump($data);
    }

    public function destroy_session()
    {
        $this->session->sess_destroy();
        echo "Success";
    }
}