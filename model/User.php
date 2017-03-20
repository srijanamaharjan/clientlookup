<?php
class User{
	var $db = null;
	
	function __construct(Database $db) {
		$this->db = $db;
	}
	
	function addNewUser($user){		
		$sql = "SELECT * FROM user WHERE username = '". $user['username']."'";

		$rs = $this->db->query($sql);
		
		if($rs->num_rows > 0 )
			return false;
		
		$this->db->insert('user', $user);
		$id = $this->db->insertId();
		return $id;
		
	}
	
	function updateUser($user){
		if(isset($user['password']) && $user['password']!='')
			$user['password'] = md5($user['password']);
		else
			unset($user['password']);
				
		$where['id'] = $user['id'];
		$this->db->update('user', $user, $where);
		return true;
	
	}
}