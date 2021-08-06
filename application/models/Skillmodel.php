<?php
class Skillmodel extends CI_Model
{
 function __construct()
 {
  parent::__construct();
 } 
 function add($data)
 {
	if($this->db->insert("skilledprof",$data))
      return true;		
 }
 function addttn($data)
 {
	 if($this->db->insert("transactions",$data))
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
 
 function updatepic($username, $userdata)
 {
	 $this->db->where('username', $username);
	 $this->db->update('skilledprof', $userdata);
 }
 
 function get_user($username)
 {
	$this->db->where('username', $username); 
	$query = $this->db->get('skilledprof');
	return $query->row();
 }
 
 function display_records()
	{
	$query=$this->db->query("select * from skilledprof");
	return $query->result();
	}
	
 function getcoursebyid($id)
 {
	$this->db->where('course_id', $id);
	$query = $this->db->get('skillxcourse');
	return $query->row();
 }	
 
 function getorderid()
 {
	 $query=$this->db->query("SELECT COUNT(*) FROM transactions");
	 return $query->result_array();
 }
 
 	
	 function display_courses()
	{
			  $this->db->select('*');
	  $this->db->from('skillxcourse');
	  $this->db->join('company', 'skillxcourse.company_id=company.id');
		
	$query=$this->db->get();
	return $query->result();
	}
	
	 function display_courses1($id)
	{
		$this->db->where('company_id',$id);
	$query=$this->db->get('skillxcourse');
	return $query->result();
	}
	
	function bioadd($data)
	{
		if($this->db->insert("profbio",$data))
      return true;	
	}
	function fetchbio($username)
	{
		$query=$this->db->query("
		select profbio.name, profbio.birthday, profbio.skills, profbio.phone, skilledprof.city, profbio.age, profbio.degree, skilledprof.email, profbio.status, skilledprof.profile_photo, profbio.occupation, 
		profbio.message
		from profbio join skilledprof
		on profbio.email = skilledprof.email
		where profbio.name = $username;
		
		");

		
		return $query->row();
	}
	
	function getcourses()
	{
		$query=$this->db->query("select course.coursename, module.modulename
            from course left join module
              on course.courseid =	module.courseid		");
	    return $query->result();
	}
	
	function addstud($data)
 {
	if($this->db->insert("skillxstudent",$data))
      return true;		
 }
 
 	function addcompany($data)
 {
	if($this->db->insert("company",$data))
      return true;		
 }
 
 	function addstud1($data)
 {
	$this->db->insert("skillxstudent",$data);
      	
 }
 
 public function setapprove($uid)
 {
	 
	 $this->db->set(array(
           'isapprove'=> 1
           ));
   $this->db->where('oid',$uid);
   $this->db->update('transactions');
 }
 
  function validate($email,$password){
    $this->db->where("(skillxstudent.student_email = '$email' OR skillxstudent.student_phone = '$email')");
    $this->db->where('password',$password);
    $result = $this->db->get('skillxstudent');
    return $result;
  }
  
  function companyvalidate($email,$password){
    $this->db->where("(company.email = '$email' OR company.phone = '$email')");
    $this->db->where('password',$password);
    $result = $this->db->get('company');
    return $result;
  }
  
  function getcompany($email)
  {
	  $this->db->where('email',$email);
	  $query=$this->db->get('company');
	  return $query->row();
  }
  
   function getcompany1($id)
  {
	  $this->db->where('id',$id);
	  $query=$this->db->get('company');
	  return $query->row();
  }
  
  function getallcompanies()
  {
	  $this->db->where('isapprove',1);
	  $query=$this->db->get('company');
	  return $query->result();
  }
  
  function getFreecourses()
  {
	  $query=$this->db->get('free_skillxcourse');
	  return $query->result();
  }
  
  function company_courses($id)
  {
	  $this->db->where('company_id',$id);
	  $query=$this->db->get('skillxcourse');
	  return $query->result();
	  
  }
  
  function fetchcompanyid($name)
  {
	 $this->db->where('name',$name); 
	 $query=$this->db->get('company');
	 return $query->row();
  }
  
   function validate2($email,$password){
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $result = $this->db->get('skillxadmin');
    return $result;
  }


 function addnotuncourse($data)
 {
  $this->db->insert("skillxcourse",$data);
  $response['message'] = 'course added successfully';
  return $response;        
 }
 
 function admindel($id)
 {
  $this->db->delete("skillxcourse","course_id=".$id);
 }
 
  function delstudent($id)
 {
  $this->db->delete("skillxstudent","student_id=".$id);
 }
 
 function delcompany($id)
 {
  $this->db->delete("company","id=".$id);
 }
 
  function updatestudent($data,$id)
  {
    $this->db->set($data);
    $this->db->where("student_id",$id);
    $this->db->update("skillxstudent",$data);
  }
  
   function updatecourse($data,$id)
  {
    $this->db->set($data);
    $this->db->where("course_id",$id);
    $this->db->update("skillxcourse",$data);
  }
  
  function updatecompany($data,$id)
  {
    $this->db->set($data);
    $this->db->where("id",$id);
    $this->db->update("company",$data);
  }
  
   public function checkuser($phone) 
  {
    $this->db->where('phone',$phone);
    //$this->db->where('email',$email);
    $query=$this->db->get('company');
    if($query->num_rows()>0)
    {
    return 1; 
    }
    else
    {
    return 0; 
    }
  }
  
     public function checkInstructor($phone) 
  {
    $this->db->where('instructor_phone',$phone);
    //$this->db->where('email',$email);
    $query=$this->db->get('skillxinstructor');
    if($query->num_rows()>0)
    {
    return 1; 
    }
    else
    {
    return 0; 
    }
  }
  
     public function studcheckuser($phone) 
  {
    $this->db->where('student_phone',$phone);
    //$this->db->where('email',$email);
    $query=$this->db->get('skillxstudent');
    if($query->num_rows()>0)
    {
    return 1; 
    }
    else
    {
    return 0; 
    }
  }
  
     public function checkUserEmail($email) 
  {
    $this->db->where('email',$email);
    //$this->db->where('email',$email);
    $query=$this->db->get('company');
    if($query->num_rows()>0)
    {
    return 1; 
    }
    else
    {
    return 0; 
    }
  }
  
       public function checkInstructoremail($email) 
  {
    $this->db->where('instructor_email',$email);
    //$this->db->where('email',$email);
    $query=$this->db->get('skillxinstructor');
    if($query->num_rows()>0)
    {
    return 1; 
    }
    else
    {
    return 0; 
    }
  }
  
     public function studcheckUseremail($email) 
  {
    $this->db->where('student_email',$email);
    //$this->db->where('email',$email);
    $query=$this->db->get('skillxstudent');
    if($query->num_rows()>0)
    {
    return 1; 
    }
    else
    {
    return 0; 
    }
  }
  
  
  
  
   function add1($data)
 {
	if($this->db->insert("skillxinstructor",$data))
      return true;		
 }
 
  function validate1($email,$password){
    $this->db->where('instructor_email',$email);
    $this->db->where('password',$password);
    $result = $this->db->get('skillxinstructor');
    return $result;
  }
  
  function delinstructor($id)
 {
  $this->db->delete("skillxinstructor","id=".$id);
 }
 
  function addmodule($data)
 {
  //$id=$this->input->post('module_id');
  $this->db->insert('skillxcourse_module', $data);
  $response['message'] = 'module added successfully';
  return $response;        
 }
 
  function addcertificate($data)
 {
  $this->db->insert('skillxcertificate', $data);
  $response['message'] = 'certificate added successfully';
  return $response;        
 }
 
 
 function addcontent($data)
 {
  //$id=$this->input->post('module_id');
  $this->db->insert('skillxcourse_content', $data);
  $response['message'] = 'Content added successfully';
  return $response;        
 }
 
  function deletemodule($id)
 {
  $this->db->delete("skillxcourse_module","module_id=".$id);
 }
 
  function deletecontent($id)
 {
  $this->db->delete("skillxcourse_content","content_id=".$id);
 }
 
 function purchasedcourses($email)
 {
	 // $this->db->join("transactions","transactions.course_id = skillxcourse.course_id"); 
	   // $query=$this->db->get("skillxcourse");
       //return $query->result();
	   
	  $this->db->select('*');
	  $this->db->from('skillxcourse');
	  $this->db->join('transactions', 'skillxcourse.course_id=transactions.course_id');
	  $array = array(
	  'email' => $email,
	  'isapprove' => 1
	  );
	   $this->db->where($array);
	  $query=$this->db->get();
	  return $query->result();

 }
 
 function studpurchasecourse($email)
 {
	  $this->db->select('*');
	  $this->db->from('skillxcourse');
	  $this->db->join('skillxstudent', 'skillxcourse.company_id=skillxstudent.company_id');
	   $this->db->where('student_email', $email);
	  $query=$this->db->get();
	  return $query->result();

 }
 
 function deletestudrequest($id)
 {
	 $this->db->where('student_id',$id);
	 $this->db->delete('skillxstudent');
	
 }
 
 function iviewcourse($id)
 {
	$this->db->where('company_id',$id);
	 $query=$this->db->get('skillxcourse');
	 return $query->result();
 }
 
 function getcompanyid($uid)
 {
	 $this->db->where('id',$uid);
	 $query=$this->db->get('skillxinstructor');
	 return $query->result_array();
	 
 }
 
 
 
 function getinstructor($email)
 {
	 $this->db->select('*');
	  $this->db->from('skillxinstructor');
	  $this->db->join('company','skillxinstructor.company_id=company.id');
	
	 $this->db->where('instructor_email',$email);
	 $query=$this->db->get();
	 return $query->row();
 }
 
  function getstudent($email)
 {
	 $this->db->select('*');
	  $this->db->from('skillxstudent');
	  $this->db->join('company','skillxstudent.company_id=company.id');
	
	 $this->db->where('student_email',$email);
	 $query=$this->db->get();
	 return $query->row();
 }
 
  function checktoken()
 {
	 $query=$this->db->query("SELECT * FROM skillxtoken");
	 if($query->num_rows() > 0)
	 return $query->result();
     else
		 return 0;
	 
 }
 
 function deletetoken()
 {
	 $query=$this->db->query("DELETE FROM skillxtoken");
	 
 }
 
 function meetingdetails()
 {
	 $query=$this->db->query("SELECT * FROM skillxlivemeeting");
	 if($query->num_rows() > 0)
	 return $query->result();
     else
		 return 0;
 
}

function selectAllcourse()
{
	$query=$this->db->get('skillxcourse');
	return $query->result();
}

}

?>	
	