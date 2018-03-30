<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Hello extends CI_Controller {
        public $x;
        function __construct() {
            parent::__construct();
            $this->load->library("session");
            $this->load->helper("url");
            $this->x = 1;
        }
        public function index( $message = NULL , $id = NULL ) {
            echo 'Freetuts.net Hello Controller'. "</br>";
            echo $id. "</br>";
            echo $message. "</br>";
            echo $this->x;
            print $this->x;

        }

        public function other()
        {
            $data=array(
                "username" => "Kaito",
                "email" => "codephp2013@gmail.com",
                "website" => "freetuts.net",
                "gender" => "Male",
            );

            $this->session->set_userdata($data);

            $user=$this->session->userdata("username");
            $level=$this->session->userdata("level");
            $email=$this->session->userdata("email");
            echo "Username: $user, Email: $email, Level: $level";


            $data=$this->session->all_userdata();
            echo "<pre>";
            print_r($data);
            echo "</pre>";

            echo 'Freetuts.net Other Controller';
        }
}

