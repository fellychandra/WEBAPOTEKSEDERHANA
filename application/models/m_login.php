<?php 
class M_login extends CI_Model
{
	
	function cek_login($table,$where)
	{
		return $this->db->get_where($table,$where);
	}
	function insert_data($table,$data)
	{
		return $this->db->insert($table,$data);
	}
	function tampil_data(){
		return $this->db->get('user');
	}
	function proseslogin($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('admin');

	}

	public function profileadmin($username){
		$sql="SELECT * as admin FROM admin WHERE username='$username'";
		return $this->db->query($sql)->result();
	}
}
?>