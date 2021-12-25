<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_page extends CI_Controller {


	public function index()
	{
        $this->load->model('main_model');
        $user_id = $this->session->userdata('user_id');
        $carts = $this->main_model->cart_list($user_id);
        $datas['lists'] = $carts;
        
        // $this->session->unset_userdata('user_id');
        echo $user_id;
        $this->load->view('header',$datas);
		$this->load->view('home_page_view');
        $this->load->view('footer');
	}
    public function listings()
    {
        $this->load->view('header');
        $this->load->view('listing');
        $this->load->view('footer');
    }
    
    public function details()
    {
        $this->load->view('header');
        $this->load->view('detail');
        $this->load->view('footer');
    }
    public function checkouts()
    {
        $this->load->model('main_model');
        $this->load->library('session');
        $user_id = $this->session->userdata('user_id');
        $carts = $this->main_model->cart_list($user_id);
        $datas = array();   
        // $home_addr = $this->session->userdata('home_addr');
        // echo $home_addr;
        // $home_addr =$this->input->post('home');
        $datas['lists'] = $carts;
        $this->load->view('header');
        $this->load->view('checkout',$datas);
        $this->load->view('footer');
    }
    public function invoices()
    {
        $this->load->view('header');
        $this->load->view('invoice');
        $this->load->view('footer');
    }
    public function offerss()
    {
        $this->load->view('header');
        $this->load->view('offers');
        $this->load->view('footer');
    }
    public function registers()
    {
    
        $this->load->view('register');
    
    }
    public function orderss()
    {
        $this->load->view('header');
        $this->load->view('orders');
        $this->load->view('footer');
    }
    public function track_orders()
    {
        $this->load->view('header');
        $this->load->view('track_order');
        $this->load->view('footer');
    }
    public function thankss()
    {
        $this->load->view('header');
        $this->load->view('thanks');
        $this->load->view('footer');
    }
    public function extras()
    {
        $this->load->view('header');
        $this->load->view('extra');
        $this->load->view('footer');
    }
    public function error_404s()
    {
        $this->load->view('header');
        $this->load->view('error_404');
        $this->load->view('footer');
    }
  
    public function logins()
    {
       
        $this->load->view('login');
      
    }
    
    public function auth(){
        $this->load->library('session');
        $this->load->model('main_model');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('pass','Password','required');
        if($this->form_validation->run() == false){
            $this->load->view('login');
        }else{
            $this->load->model('main_model');
            $email = $this->input->post('email');
            $pass = $this->input->post('pass');
            $auth = $this->main_model->login($email,$pass);
            $this->session->set_userdata('user_data',$auth);
            if($auth == null || $auth == '')
            {
                echo "<script>alert('Wrong credentials');</script>";
                $this->load->view('login');
            }else{
                $this->session->set_userdata('user_id',$email);
                echo "<script>alert('Login Successfull');</script>";
                redirect(base_url('home'));
            }
        }
       
    }

    public function signin()
    {
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('pass','Password','required');
        if($this->form_validation->run() == false){
            $this->load->view('register');
        }else{   
            $this->load->model('main_model');
            $promo = $this->input->post('promo');
            if(empty($promo)){$promo = 'null';}
            $dataArray = array();
            $dataArray['email'] = $this->input->post('email');
            $dataArray['password'] = $this->input->post('pass');
            $dataArray['promo'] = $promo;
            $this->main_model->sign($dataArray);
        }
       
    }
    function lists()
    {
        if($this->input->post('data_action'))
        {
            $data_action= $this->input->post('data_action');

            if($data_action == "fetch_all")
            {
                $api_url = "http://localhost/osahan/main_api/list";

                $client = curl_init($api_url);

                curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

                $response = curl_exec($client);

                curl_close($client);
                $result = json_decode($response);
                $this->load->view('listing',$result);
            
                $output= '';
                if(count($result)>0)
                {
                    foreach($result as $row)
                    {
                        $output.='
                        <div class="col-md-4 col-sm-6 mb-4 pb-2" id="detail">
                            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                <div class="list-card-image">
                                    <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> '.$row->res_rating.'</span></div>
                                    <div class="favourite-heart text-danger position-absolute"><a href=""><i class="icofont-heart"></i></a></div>
                                    <div class="member-plan position-absolute"><span class="badge badge-dark">'.$row->res_tag.'</span></div>
                                    <a href="main_page/singleProduct/'.$row->id.'">
                                    <img src="'.$row->res_img.'" class="img-fluid item-img" >
                                    </a>
                                </div>
                                <div class="p-3 position-relative">
                                    <div class="list-card-body">
                                    <h6 class="mb-1"><a href="main_page/singleProduct/'.$row->id.'" class="text-black">'.$row->res_name.'</a></h6>
                                    <p class="text-gray mb-3">'.$row->res_type.'</p>
                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> '.$row->res_time.' min</span> <span class="float-right text-black-50"> $'.$row->res_price.' FOR TWO</span></p>
                                    </div>
                                    <div class="list-card-badge">
                                        <span class="badge badge-success">OFFER</span> <small>'.$row->res_offer.' off | Use Coupon OSAHAN50</small>
                                    </div>
                                </div>
                            </div>
                        </div>';  
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


    
    public function singleProduct($id)
    {
        
        $this->load->library('session');
        $user_id = $this->session->userdata('user_id');
      
        $this->load->model('main_model');
        $crud = $this->main_model->single_Products($id);
        $datas = array();
        $datas['data'] = $crud;
        $carts = $this->main_model->cart_list($user_id);
        $datas['lists'] = $carts;
        $this->load->view('header');
        $this->load->view('detail',$datas);
        $this->load->view('footer');
    
    }
  
    function add_to_cart()
    {
        $this->load->library('session');
        $user_id = $this->session->userdata('user_id');
        $pro_id =  $this->input->post('id');
        if(!empty($user_id))
        {
            if(isset($_SESSION['order_id']))
            {
                $this->load->model('main_model');
                if (isset($_POST['submit'])) {
                    $fromArray= array();
                    $fromArray['order_id'] = $this->session->userdata('order_id');
                    $fromArray['user_id'] =$user_id;
                    $fromArray['pro_id'] = $this->input->post('id');
                    $fromArray['pro_name'] = $this->input->post('res_name');
                    $fromArray['quantity'] = 1;
                    $fromArray['pro_price'] = $this->input->post('res_price');
                    $fromArray['total_price'] = $this->input->post('res_price');
                    $this->main_model->cart_add($fromArray,$pro_id,$user_id);
                }
            }
            else
            {
                $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                $password = array(); 
                $alpha_length = strlen($alphabet) - 1; 
                for ($i = 0; $i < 9; $i++) 
                {
                    $n = rand(0, $alpha_length);
                    $password[] = $alphabet[$n];
                }
                $random= implode($password); 
                $this->session->set_userdata('order_id',$random);
            }
        
            $id = $this->input->post('id');        
            // $this->session->set_flashdata('success', 'Product Added Successfully!');
            redirect(base_url('main_page/singleProduct/'.$id));
            
        }
        else
        {
            echo "<script>alert('Please Login');</script>";
            $this->load->view('login');
        }
      
        ////////////////////////auto generated id ///////////////////////////////////////
        
    }

    // public function list_cart(){
    //     $this->load->model('main_model');
    //     $carts = $this->main_model->cart_list();
    //     $list = array();
    //     $list['lists'] = $carts;
    //     print_r($list);
    //     exit();
    //     $this->load->view('detail',$list);
        
    // }

    // public function home_addr()
    // {
    //     $this->load->model('main_model');
    //     $user_id = $this->session->userdata('user_id');
    //     $home_addr = $_POST['home'];
    //     $this->main_model->home_add($user_id,$home_addr);
    //     redirect(base_url('checkout'));
    // }
    // public function work_addr()
    // {
    //     $this->load->model('main_model');
    //     $user_id = $this->session->userdata('user_id');
    //     $work_addr = $_POST['home'];
    //     $this->main_model->work_add($user_id,$work_addr);
    //     redirect(base_url('checkout'));
    // }

    public function order_place(){

        $this->session->unset_userdata('order_id');
        $this->load->model('main_model');
        $user_id = $this->session->userdata('user_id');
        $this->main_model->order_p($user_id);
        
    }

    public function increment(){
        $this->load->model('main_model');
        $pro_id = $this->input->post('ids');
        $id = $this->input->post('id');
        $user_id = $this->session->userdata('user_id');
        $this->main_model->incr($user_id,$pro_id);
        redirect(base_url('main_page/singleProduct/'.$id));
    }

    public function decrement(){
        $this->load->model('main_model');
        $pro_id = $this->input->post('ids');
        $id = $this->input->post('id');
        $user_id = $this->session->userdata('user_id');
        $this->main_model->decr($user_id,$pro_id);
        redirect(base_url('main_page/singleProduct/'.$id));
    }

}
