<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Reservation extends Model {
	public function showAllReserve() {
		$this->call->database(); 
        return $this->db->table('reserve')->get_all();
	}
	public function savetodatabase($reservedata){
		$this->call->database(); 
		return $this->db->table('reserve')->insert($reservedata);
	}
	public function deletefromdatabase($deletereserve){
		$this->call->database(); 
		$this->db->table('reserve')->where('name',$deletereserve);
		$this->db->delete('reserve');
	}
	// public function editfromdatabase($editreservation){
	// 	$data = [
	// 		'name' => $_POST["name"],
	// 		'email' => $_POST["emailadd"],
	// 		'address' => $_POST["add"],
	// 		'contactnum' => $_POST["contact"],
	// 		'Date' => $_POST["date"],
	// 		'themedetails' => $_POST["theme"],
	// 	];
	// 	$this->call->database();
	// 	$this->db->table('reserve')->where('name',$_POST["name"])->update($data);
	// }
	public function editfromdatabase($editreservation){
		$this->deletefromdatabase($editreservation["name"]);
		$this->savetodatabase($editreservation);
	}
	public function checkdateandtime($check){
		$this->call->database(); 
		$readdatetime=$this->db->table('reserve')->where('Date',$check)->get();
		if ($readdatetime!=false ) {
			return true;
		  	} 
		  else {
			return false;
		  	}
		return $this->db->table('reserve')->get();
	}
	public function getdatedata($gmonth){
		$where = [
			'month(date)' => $gmonth,
			'year(date)' => 2023
		];
		$this->call->database();
		$readpass=$this->db->table('reserve')->where($where)->get_all();
		return count($readpass);
	}
}
?>