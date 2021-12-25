<?php 
class Admin_model extends CI_model{
    function all(){
        return $crud = $this->db->get('contact')->result_array();
    }
    function admin_insert($formArray){
        $this->db->insert('contact',$data);
    }
    function getUser($Id){
        $this->db->where('id',$Id);
        return $cruds = $this->db->get('contact')->row_array();
    }
    function updateUser($Id,$formArray){
        $this->db->where('id',$Id);
        $this->db->update('contact',$formArray);
    }
    function deleteUser($Id){
        $this->db->where('id',$Id);
        $this->db->delete('contact');
    }

    function fetch_all(){
        $this->db->order_by('id','Asc');
        return $this->db->get('contact');
    }
    function fetch_list(){
        $this->db->order_by('id','Asc');
        return $this->db->get('res_page');
    }
}



// function getUser($cruId){
//     $this->db->where('srno',$cruId);
//     return $cruds = $this->db->get('crud')->row_array();
// }
// function updateUser($crudId,$formArray){
//     $this->db->where('srno',$crudId);
//     $this->db->update('crud',$formArray);
// }

// function deleteUser($crudId){
//     $this->db->where('srno',$crudId);
//     $this->db->delete('crud');
// }

// function create($formArray){
//     $this->db->insert('crud',$formArray);
// }
