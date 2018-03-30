<?php
class Demo_Users_Database_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
//        $query = $this->db->query("select * FROM users ORDER BY 'username' ");
//        $query = $this->db->first("users"); //DEO COOOOOOOOOO
        $query = $this->db->get("users");
//        $query = $this->db->all("users"); //DEO COOOOOOOO
        $data=$query->result_array(); //lay tat ca record
//        $data=$query->row_array(); //chi lay 1 record
        var_dump($data);
    }

    public function select_all()
    {
//        $this->db->from($this->'users');
//        $this->db->select('id','username');
//        $this->db->order_by('username','desc')
//   $query = $this->db->get("users");


//        $this->db->select('*');
//        $this->db->from('users');
//        $this->db->order_by("UPPER(username)","desc");
//        $query = $this->db->get();

//        $query = $this->db->query("select * from users order by id desc ");
//        $query = $this->db->query("select * from users where id = 1 ");

        $this->db->select('*');
        $this->db->from('users');
        $this->db->order_by('id','DESC');
        $query = $this->db->get();

        $data = $query->result_array();
//        var_dump($query);
        print_r($data);
    }

    public function select_min_max()
    {
//        $sql = $this->db->query("select min(id) as id from users");
        $this->db->select_min("id");
        $query = $this->db->get('users');
        $this->db->select_max("id");
        $sql = $this->db->get("users");
        $data1 = $sql->result_array();
        $data2 = $query->result_array();
        echo "Max ID:";
        var_dump($data1);
        echo "</br>";
        echo "Min ID:";
        var_dump($data2);
    }

    public function insert()
    {
        $data = array(
            "username" => "ahihi",
            "password" => "123",
            "level" => "2",
        );
        $this->db->insert("users",$data);
        echo "success";
    }

    public function update()
    {
        $old_data = $this->db->query("select * from users where id='17'")->result_array();
//        var_dump($old_data);
//        die();
        $old_data_username = $old_data[0]['username'];
//        var_dump($old_data_username);
        $data = array(
            "username" => "lololo",
            "password" => "321",
            "level" => "1",
        );
//        var_dump($data['username']);
        $this->db->where('id','17');
        $this->db->update('users',$data);
        echo "Update"."  ".$old_data_username ."   into   ".$data['username'];
    }

    public function delete()
    {
        $this->db->where("id","20");
        if($this->db->delete("users"))
        {
            echo "Delete Success";
        }
        else
        {
            echo "Delete Failed";
        }
    }
}