<?php
include ('User.php');
class Member extends User{
	var $db = null;
	
	function __construct(Database $db) {
		$this->db = $db;
	}
	
	function getMemberList(){
		$sql = "SELECT * FROM member";
		$rs = $this->db->query($sql)->fetch_all(MYSQLI_BOTH);;
		return $rs;
	}

	function getMemberListExpiring(){
		$today = date('Y-m-d', strtotime("+30 days"));
		//die($today);
		
		$sql = "SELECT * FROM member WHERE expiry_date < '".$today."'";
		//die($sql);
		$rs = $this->db->query($sql)->fetch_all(MYSQLI_BOTH);;
		return $rs;
	}


	function getMemberDetails($id){
		$sql = "SELECT * FROM member 
		WHERE id = $id";
		$rs = $this->db->query($sql);
		$member;
		while ($row = $rs->fetch_array()){
			$member['id'] = $row['id'];
			$member['fname'] = $row['fname'];
			$member['lname'] = $row['lname'];
			$member['phone'] = $row['phone'];
			$member['membership_type'] = $row['membership_type'];
			$member['expiry_date'] = $row['expiry_date'];
			$member['address'] = $row['address'];
			$member['mailing_address'] = $row['mailing_address'];
		}
		return $member;
	}

	function getSearchedMembers($search){
		$sql = "SELECT * FROM member WHERE fname LIKE '%".$search."%' OR lname LIKE '%".$search."%' or phone LIKE '%".$search."%'";
		//die($sql);
		$rs = $this->db->query($sql)->fetch_all(MYSQLI_BOTH);;
		return $rs;
	}

	function addMember($values){

		//$member['id'] = $this->db->escape_string(trim($values['id']));
		$member['fname'] = $this->db->escape_string(trim($values['fname']));
		$member['lname'] = $this->db->escape_string(trim($values['lname']));
		$member['phone'] = $this->db->escape_string(trim($values['phone']));
		$member['membership_type'] = $this->db->escape_string(trim($values['membership_type']));
		$member['address'] = $this->db->escape_string(trim($values['address']));
		$member['mailing_address'] = $this->db->escape_string(trim($values['mailing_address']));
		$member['expiry_date'] = $this->db->escape_string(trim($values['expiry_date']));
		$result = $this->db->insert("member", $member);

		echo $result;
		return $result;
	}

	function updateMember($values){
		$member['id'] = $this->db->escape_string(trim($values['id']));
		$member['fname'] = $this->db->escape_string(trim($values['fname']));
		$member['lname'] = $this->db->escape_string(trim($values['lname']));
		$member['phone'] = $this->db->escape_string(trim($values['phone']));
		$member['membership_type'] = $this->db->escape_string(trim($values['membership_type']));
		$member['address'] = $this->db->escape_string(trim($values['address']));
		$member['mailing_address'] = $this->db->escape_string(trim($values['mailing_address']));
		$member['expiry_date'] = $this->db->escape_string(trim($values['expiry_date']));
		$where['id'] = $values['id'];
		$result = $this->db->update("member", $member, $where);
		return $result;
	}

	function deleteMember($id){
		$sql = "DELETE FROM member WHERE id = $id";		
		$this->db->query($sql);
		return true;		
	}


}
