<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
class Reservation_model extends Model {

	

	public function add_reservation($date,$fullname,$address,$contact,$email,$venue){
		$data = array(
			'date' => $date,
			'fullname' => $fullname,
			'address'=>$address,
			'contact'=>$contact,
			'email'=>$email,
			'venue'=>$venue

		);
		return $this->db->table('tblreservation')->insert($data);
	}



}

?>