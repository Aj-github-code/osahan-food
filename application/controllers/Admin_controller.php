<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {
    function dashboard_3(){
        $this->load->view('admin_sidebar');
        $this->load->view('admin_home_3');
    }
    
    function dashboard_1(){   
        $this->load->view('admin_sidebar');
        $this->load->view('admin_home_1'); 
    }
    function dashboard_2(){ 
        $this->load->view('admin_sidebar');
        $this->load->view('admin_home_2');
    }
    function contact(){
        $this->load->view('admin_sidebar');
        $this->load->view('contact');
    }

    function action()
    {
        if($this->input->post('data_action'))
        {
            $data_action= $this->input->post('data_action');

            if($data_action == "fetch_all")
            {
                $api_url = "http://localhost/osahan/api/index";

                $client = curl_init($api_url);

                curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

                $response = curl_exec($client);

                curl_close($client);
                $result = json_decode($response);
                $output= '';
                if(count($result)>0)
                {
                    foreach($result as $row)
                    {
                        $output .= '
                        <tr>
                            <td>'.$row->id.'</td>
                            <td>'.$row->name.'</td>
                            <td>'.$row->email.'</td>
                            <td>'.$row->phone.'</td>
                            <td>'.$row->message.'</td>
                            <td>'.$row->status.'</td>
                            <td><button type="button" name="edit" class="btn btn-warning btn-xs edit" id ="'.$row->id.'">Edit</button></td>
                            <td><button type="button" name="delete" class="btn btn-danger btn-xs delete" id ="'.$row->id.'">Delete</button></td>
                        </tr>';
                    }
                }
                else{
                    $output .='
                    <tr>
                        <td colspan="4" align="center">No Data Found</td>
                    </tr>
                    ';
                }
                echo $output;
            }
        }
    }


    function edit_listing(){ 
        $this->load->view('admin_sidebar');
        $this->load->view('admin_edit_listing');
    }

    function list()
    {
        if($this->input->post('data_action'))
        {
            $data_action= $this->input->post('data_action');

            if($data_action == "fetch_list")
            {
                $api_url = "http://localhost/osahan/api/list";

                $client = curl_init($api_url);

                curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

                $response = curl_exec($client);

                curl_close($client);
                $result = json_decode($response);
                $output= '';
                if(count($result)>0)
                {
                    foreach($result as $row)
                    {
                         $output .= '
                          <tr>
                             <td>'.$row->id.'</td>
                             <td>'.$row->res_name.'</td>
                             <td>'.$row->res_type.'</td>
                             <td>'.$row->res_price.'</td>
                             <td>'.$row->res_time.'</td>
                             <td>'.$row->res_rating.'</td>
                             <td>'.$row->res_tag.'</td>
                            <td>'.$row->res_offer.'</td>
                             <td>'.$row->res_img.'</td>
                             <td><button type="button" name="edit" class="btn btn-warning btn-xs edit" id ="'.$row->id.'">Edit</button></td>
                             <td><button type="button" name="delete" class="btn btn-danger btn-xs delete" id ="'.$row->id.'">Delete</button></td>
                         </tr>';
                    }
                }
                else{
                    $output .='
                    <tr>
                        <td colspan="4" align="center">No Data Found</td>
                    </tr>
                    ';
                }
                echo $output;
            }
        }
    }


    


    
    function edit($Id){
        $this->load->model('admin_model');
        $crud = $this->admin_model->getUser($Id);
        $data = array();
        $data['crud'] = $crud;

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('phone','phone','required');
        $this->form_validation->set_rules('message','message','required');
        $this->form_validation->set_rules('status','status','required');
  
        if($this->form_validation->run() == false){
         
           
        }else{
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $formArray['phone'] = $this->input->post('phone');
            $formArray['message'] = $this->input->post('message');
            $formArray['status'] = $this->input->post('status');
            $this->admin_model->updateUser($Id,$formArray);
            $this->session->set_flashdata('success', 'Record updated successfully!');
           
            redirect(base_url().'index.php/admin_controller/contact');
            
        }
    }

    function delete($Id){
        $this->load->model('admin_model');
        $crud = $this->admin_model->getUser($Id);
        if(empty($crud)){
            $this->session->set_flashdata('failure','Record not found!');
            redirect(base_url().'index.php/admin_controller/contact');
        }
        $this->admin_model->deleteUser($Id);
        $this->session->set_flashdata('success','Record deleted successfully!');
        redirect(base_url().'index.php/admin_controller/contact');
    }
   
    
}
