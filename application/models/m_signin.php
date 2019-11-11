<?php

Class M_Signin extends CI_Model{

	function proseslogin($user, $pass){
		$this->db->where('nama',$user);
		$this->db->where('password',$pass);
		return $this->db->get('user')->row();
	}
}