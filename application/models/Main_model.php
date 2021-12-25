<?php 
class Main_model extends CI_model{

    function fetch_list(){
        $this->db->order_by('id','Asc');
        return $list= $this->db->get('res_page');
    }
    function single_Products($id){
        $this->db->where('id',$id);
        return $crud = $this->db->get('res_page')->row_array();        
    }
    function cart_add($fromArray,$pro_id,$user_id){
        $sql = "SELECT pro_name FROM carts WHERE  user_id = ? AND pro_id= ? AND status = 0";
        $block = $this->db->query($sql,[$user_id,$pro_id])->result_array();
        if(count($block)>0){
            $sql1 = "UPDATE carts SET quantity = quantity+1,total_price = total_price+pro_price where user_id= ? AND pro_id = ?";
            $this->db->query($sql1, [$user_id,$pro_id]);
        }else{

            $this->db->insert('carts',$fromArray);
        }
    }
    function cart_list($user_id){
        $sql="SELECT pro_id,pro_name,pro_price,order_id,quantity,total_price FROM carts WHERE user_id =? AND status = 0";
        return $lists =$this->db->query($sql, [$user_id])->result_array();

    }
    function login($email,$pass){
        $this->db->where('email',$email);
        $this->db->where('password',$pass);
        return $pass = $this->db->get('auth')->row_array();
    }
    function sign($dataArray)
    {
        echo $dataArray['email'];
        $this->db->where('email',$dataArray['email']);
        $auth = $this->db->get('auth')->row_array();
        if(!empty($auth)){
            echo "<script>alert('email is already registered');</script>";
            $this->load->view('register');
        }
        else{
            $this->db->insert('auth',$dataArray);
            $this->load->view('login');
        }
        
    }

    function order_p($user_id){
        $sql = "SELECT user_id, order_id,pro_name,pro_price,quantity FROM carts WHERE user_id = ? AND status = 0";
        $block = $this->db->query($sql, [$user_id])->result_array();
        if(count($block)>0)
        {
            for($i=0;count($block)>$i;$i++){
                $this->db->insert('orders',$block[$i]);
                $sql1 = "UPDATE carts SET status = 2 WHERE user_id = ?";
                $this->db->query($sql1, [$user_id]);    
            }  
            redirect(base_url('thanks'));
        }
        else{
            redirect(base_url('home'));
            
        }
   
    }

    function incr($user_id,$pro_id)
    {
            $sql = "UPDATE carts SET quantity = quantity+1,total_price = total_price+pro_price WHERE user_id = ? AND pro_id = ? AND status = 0";
        $this->db->query($sql,[$user_id,$pro_id]);
     
        
    }

    function decr($user_id,$pro_id)
    {
        $sql1 = "SELECT  quantity FROM carts WHERE user_id = ? AND pro_id = ? AND status = 0";
        $quant = $this->db->query($sql1, [$user_id,$pro_id])->row_array();
        if($quant['quantity']>1)
        {
            $sql = "UPDATE carts SET quantity = quantity-1,total_price=total_price-pro_price WHERE user_id = ? AND pro_id = ? AND status = 0";
            $this->db->query($sql,[$user_id,$pro_id]); 
        }
        else{
            $sql = "UPDATE carts SET status = 2 WHERE user_id = ? AND pro_id = ? AND status = 0";
            $this->db->query($sql,[$user_id,$pro_id]);
        }
    }

    function home_add($user_id,$home_addr)
    {
        $sql = "UPDATE auth SET home_addr = ? WHERE email = ?";
        $this->db->query($sql,[$home_addr,$user_id]);
    }
    function work_add($user_id,$work_addr)
    {
        $sql = "UPDATE auth SET work_addr = ? WHERE email = ?";
        $this->db->query($sql,[$work_addr,$user_id]);
    }
}
?>