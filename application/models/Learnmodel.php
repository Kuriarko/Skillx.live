<?php
class Learnmodel extends CI_Model
{
 function __construct()
 {
  parent::__construct();
 } 
 function add($data)
 {
	if($this->db->insert("skilledlearn",$data))
      return true;		
 }
 function update($data,$uid)
 {
  $this->db->set($data);
  $this->db->where("uid",$uid);
  $this->db->update("user",$data);
 }	 
 function del($uid) 
 {
	 $this->db->delete("user","uid=".$uid);
	 
 }
}

?>	
	