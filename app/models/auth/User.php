<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User extends Model {
	public function showAllUsers() {
		$this->call->database(); 
        return $this->db->table('customer')->get_all();
	}
	public function savedatabase($userdata){
		$this->call->database(); 
		return $this->db->table('customer')->insert($userdata);
	}
	public function deletedatabase($userid){
		$this->call->database(); 
		$this->db->table('customer')->where('id',$userid);
		$this->db->delete('customer');
	}
	public function editdatabase($edituserid){
		$this->deletedatabase($edituserid["id"]);
		$this->savedatabase($edituserid);
	}

	public function checkuser($check){
		$this->call->database(); 
		$readuser=$this->db->table('customer')->where('emailadd',$check["user"])->get();
		$readpass=$this->db->table('customer')->where('password',$check["pass"])->get();
		if ($readuser!=false && $readpass!=false) {
			return true;
		  } else {
			return false;
		  }
		//return $this->db->table('user')->get();
	}
}
?>