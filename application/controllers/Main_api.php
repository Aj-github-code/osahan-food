<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_api extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('main_model');
        $this->load->library('form_validation');
    }

    function list()
    {
        $data = $this->main_model->fetch_list();
        echo json_encode($data->result_array());
    }
    // function sample($id)
    // {
    //     $data = $this->main_model->single_Products($id);
    //     echo json_encode($data->result_array());
    // }
   
}
?>