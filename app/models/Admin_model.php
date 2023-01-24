<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
class Admin_model extends Model {

	
	public function showAllUsers() {
		$this->call->database(); 
        return $this->db->table('customer')->get_all();
	}
    
    public function get_customer()
    {               
        $row = $this->db->table('customer')->get_all();
        return $row;
    }
    public function add_new_user($customer_name,$age,$gender){
        $data=array(
            'customer_name'=>$customer_name,
            'age'=>$age,
            'gender'=>$gender
           
        );
        $this->db->table('customer')->insert($data);
        return true;

    }
 public function update_user($customer_id,$customer_name,$age,$gender){
        $data=array(
            'customer_name'=>$custommer_name,
            'age'=>$age,
            'gender'=>$gender
            
        );
         $this->db->table('customer')->where('customer_id', $customer_id)->update($data);
        return true;

    }
    public function delete_user($customer_id){
        $del = $this->db->table('customer')->where('customer_id', $customer_id)->delete();
        if($del){
            return true;

        }else{
            return false;
        }
    }

    
}

?>