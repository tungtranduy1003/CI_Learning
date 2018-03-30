<?php
class News_Controller extends CI_Controller
{
    function news_list()
    {
        $this->load->model('news_model');
        $news_list = $this->news_model->getList();
//        echo "abc";
    }
}