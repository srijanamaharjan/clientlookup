<?php
include ('User.php');
class Guest extends User{
	var $db = null;
	
	function __construct(Database $db) {
		$this->db = $db;
	}
	
	function getGuestList(){
		$sql = "SELECT * FROM guest";
		$rs = $this->db->query($sql)->fetch_all(MYSQLI_BOTH);;
		return $rs;
	}
	function getGuestDetails($id){
		$sql = "SELECT * FROM guest 
		WHERE id = $id";
		$rs = $this->db->query($sql);
		$guest;
		while ($row = $rs->fetch_array()){
			$guest['id'] = $row['id'];
			$guest['fname'] = $row['fname'];
			$guest['lname'] = $row['lname'];
			$guest['address'] = $row['address'];
			$guest['mailing_address'] = $row['mailing_address'];
		}
		return $guest;
	}

	function addGuest($values){
		$guest['fname'] = $this->db->escape_string(trim($values['fname']));
		$guest['lname'] = $this->db->escape_string(trim($values['lname']));
		
		$guest['address'] = $this->db->escape_string(trim($values['address']));
		$guest['mailing_address'] = $this->db->escape_string(trim($values['mailing_address']));
		$result = $this->db->insert("guest", $guest);
		return $result;
	}

	function updateGuest($values){
		$guest['id'] = $this->db->escape_string(trim($values['id']));
		$guest['fname'] = $this->db->escape_string(trim($values['fname']));
		$guest['lname'] = $this->db->escape_string(trim($values['lname']));
		
		$guest['address'] = $this->db->escape_string(trim($values['address']));
		$guest['mailing_address'] = $this->db->escape_string(trim($values['mailing_address']));
		$where['id'] = $values['id'];
		$result = $this->db->update("guest", $guest, $where);
		return $result;
	}

	function deleteGuest($id){
		$sql = "DELETE FROM guest WHERE id = $id";		
		$this->db->query($sql);
		return true;		
	}


}
