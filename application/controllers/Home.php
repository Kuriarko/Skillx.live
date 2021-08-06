<?php
class Home extends CI_controller
{
   function __construct()
   {
		parent::__construct();
		$this->load->database();
		 $this->load->helper(array('form','url','file','text')); 
		$this->load->library('session');
   }
   function index()
   {
	  if($this->session->userdata('username'))
	  {
		  $this->load->model('Skillmodel');
		  $result['data']=$this->Skillmodel->display_records();
		  $this->load->view('home1',$result);
      }
	  
	  else{
		  $this->load->model('Skillmodel');
		  $result['data']=$this->Skillmodel->display_records();
		 
		  $this->load->view('home',$result);
	  }
  
   }
   function joinus()
   {
	   
	   $this->load->view('join');
   }
   
   function skilledprof()
   {
	   $this->load->view('skilledprof');
   }
   function skillbuy()
   {
	   $this->load->view('skillbuy');
   }
   function skilllearn()
   {
	   $this->load->view('skilllearn');
   }
  function study()
  {
	   $this->load->view('study');
  }  
   function wc()
   {
	     $data=array("fname"=>$this->input->post("firstname"),"lname"=>$this->input->post("lastname"),"city"=>$this->input->post("city"),"zipcode"=>$this->input->post("zipcode"),"country"=>$this->input->post("country"),"email"=>$this->input->post("email"),"username"=>$this->input->post("username"),"password"=>$this->input->post("password"));
         $this->load->model('Skillmodel');
		  if($this->Skillmodel->add($data))
		  {
			  $this->session->set_userdata('username',$this->input->post("username"));
			  $this->load->view('success');
		  }
   }
   function ccavRequestHandler()
	{
		$order=$this->input->post("order_id");
		
	    $data=array("tid"=>$this->input->post("tid"),"oid"=>$this->input->post("order_id"),"amount"=>$this->input->post("amount"),"name"=>$this->input->post("name"),"city"=>$this->input->post("city"),"state"=>$this->input->post("state"),"zip"=>$this->input->post("zip"),"country"=>$this->input->post("country"),"phone"=>$this->input->post("phone"),"email"=>$this->input->post("email"),"course_id"=>$this->input->post("course"),"purchased_on"=>$this->input->post("date"));
		$this->load->model('Skillmodel');
		$this->session->set_userdata('order',$order);
		if($this->Skillmodel->addttn($data))
		{
			$this->load->view('ccavRequestHandler');
			
		}
		
	}
	
	function ccavRequestHandler1()
	{
		$order=$this->input->post("order_id");
	  	    $data=array("tid"=>$this->input->post("tid"),"oid"=>$this->input->post("order_id"),"amount"=>$this->input->post("amount"),"name"=>$this->input->post("name"),"city"=>$this->input->post("city"),"state"=>$this->input->post("state"),"zip"=>$this->input->post("zip"),"country"=>$this->input->post("country"),"phone"=>$this->input->post("phone"),"email"=>$this->input->post("email"),"course_id"=>$this->input->post("course"),"purchased_on"=>$this->input->post("date"));

	        $data1=array("student_name"=>$this->input->post("name"),"student_email"=>$this->input->post("email"),"student_phone"=>$this->input->post("phone"),"city"=>$this->input->post("city"),"state"=>$this->input->post("state"),"country"=>$this->input->post("country"),"zip"=>$this->input->post("zip"),"password"=>$this->input->post("password"),"company_id"=>$this->input->post("company_id"));
	        $this->load->model('Skillmodel');
			
			$this->session->set_userdata('order',$order);
			
			$this->Skillmodel->addstud1($data1);
			if($this->Skillmodel->addttn($data))
		{
			$this->load->view('ccavRequestHandler');
			
		}


	}
	
	function hashtagcommafullstop()
	{
		$this->load->view('hashtagcommafullstop');
	}
	
   function sl()
   {
	     $data=array("fname"=>$this->input->post("firstname"),"lname"=>$this->input->post("lastname"),"cname"=>$this->input->post("companyname"),"city"=>$this->input->post("city"),"zipcode"=>$this->input->post("zipcode"),"country"=>$this->input->post("country"),"email"=>$this->input->post("email"),"password"=>$this->input->post("password"));
         $this->load->model('Learnmodel');
		  if($this->Learnmodel->add($data))
		  {
			  $this->session->set_userdata('email',$this->input->post("email"));
			 $this->load->view('slsuccess');
		  }
   }
   function sb()
   {
	     $data=array("fname"=>$this->input->post("firstname"),"lname"=>$this->input->post("lastname"),"city"=>$this->input->post("city"),"zipcode"=>$this->input->post("zipcode"),"country"=>$this->input->post("country"),"email"=>$this->input->post("email"),"password"=>$this->input->post("password"));
         $this->load->model('Buyermodel');
		  if($this->Buyermodel->add($data))
		  {
			  $this->session->set_userdata('email',$this->input->post("email"));
			  $this->load->view('sbsuccess');
		  }
   }
   
   function proflogin()
   {
	   $data=array("username"=>$this->input->post('username'),"password"=>$this->input->post('password'));
	    $query=$this->db->get_where("skilledprof",$data);
		 $res=$query->result_array();
    if ($res)
	{
  	 
	  $this->session->set_userdata('username',$this->input->post('username'));
      
	  redirect("/Home/home");
	}
	else
	  //echo "Wrong userid or password";  
     $this->load->view('loginerror');
   }
   function home()
   {
	   if($this->session->userdata('username'))
	   {
		   redirect("/Home/newdash");
	   }
	  else
       $this->load->view('professionals');
   }
   function logout()
 {
	 $this->session->unset_userdata('email');
	 $this->session->sess_destroy();
	 $this->load->view('signin');
 }
 
 /*function welcomeuser()
 {
	 $uid=$this->uri->segment('3');
     $this->db->where('pid',$uid);	 
	 $query=$this->db->get('skilledprof');
	 $data['records']=$query->result();
	 $this->load->view('welcomedashboard',$data); 
 
 }
 */
 function signin()
 {
	 $this->load->view('signin');
 }
 function professionals()
 {
	 $this->load->view('professionals');
 }
 function professionals1()
 {
	 $this->load->view('professionals1');
 }
 function professionals2()
 {
	 $this->load->view('professionals2');
 }
 
 function learnlogin()
 {
	 $data=array("email"=>$this->input->post('email'),"password"=>$this->input->post('password'));
	    $query=$this->db->get_where("skilledlearn",$data);
		 $res=$query->result_array();
		 if ($res)
	{
  	 
	  $this->session->set_userdata('email',$this->input->post('email'));
      
	  redirect("/Home/home1");
	}
	else
	  //echo "Wrong userid or password";  
     $this->load->view('loginerror1');
 }
 function buylogin()
 {
	 $data=array("email"=>$this->input->post('email'),"password"=>$this->input->post('password'));
	    $query=$this->db->get_where("skilledbuyer",$data);
		 $res=$query->result_array();
		 if ($res)
	{
  	 
	  $this->session->set_userdata('email',$this->input->post('email'));
      
	  redirect("/Home/home2");
	}
	else
	  //echo "Wrong userid or password";  
     $this->load->view('loginerror2');
 }
 
 function home1()
 {
	 if($this->session->userdata('email'))
	   {
		   $BB['bb'] = $this->session->email;
		  
        $this->load->view('welcomedashboard',$BB);
	   }
	  else
       $this->load->view('professionals1');
 } 
 function home2()
 {
	 if($this->session->userdata('email'))
	   {
		   $BB['bb'] = $this->session->email;
		  
        $this->load->view('welcomedashboard',$BB);
	   }
	  else
       $this->load->view('professionals2');
 }

function profile()
{
	if($this->session->userdata('username'))
	{
		
		$this->load->view('profile', array('error' => ' ' ));
	}
	else
	{
		$this->load->view('professionals');
	}
	
} 

 function do_upload()
 {
	 	if($this->session->userdata('username'))
		{
			$username=$this->session->userdata('username');
	        $new_name= $username."profile.jpg";
			
			$config['upload_path']= './uploads/';
	        $config['allowed_types'] = 'jpg';
	        $config['max_size'] = 10000;
            $config['max_width'] = 1928;
            $config['max_height']= 1024;
            $config['file_name']= $new_name;	 
	 
	  $this->load->library('upload', $config);
	  
	   if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('profile', $error); 
         }
		  else
		 {
			 $username=$this->session->userdata('username');
			 
			 $this->load->model('Skillmodel');
			 $user=$this->Skillmodel->get_user($username);
			 
			 if($user->profile_photo && file_exists('uploads/'.$user->profile_photo))
			 {
				 unlink('uploads/'.$user->profile_photo);
			 }
			 
			 $uploaddata=$this->upload->data(); 
			  $filename = $uploaddata['file_name'];
			  
			  $userdata = array(
			  
			  'profile_photo' => $filename
			  
			  );
			  
			    //$this->load->model('Skillmodel');
				$this->Skillmodel->updatepic($username, $userdata);
			  
			 if($this->session->userdata('username'))
			  redirect("/Home/newdash");
		      else
             $this->load->view('professionals');	
			 
		 }
		 
		 
		
	
		}
		
		else
		 {
			$this->load->view('professionals'); 
		 }

 }
 function newdash()
 {
	 
	 if($this->session->userdata('username'))
	 {
		 
		$username= $this->session->username; 
		 $this->load->model('Skillmodel');
		 $data['user'] = $this->Skillmodel->get_user($username);
	  
	   
	 $this->load->view('welcomedashboard1',$data); 
 }
 else{
	$this->load->view('professionals'); 
}	 
 }
 
 function skillgallery()
 {
	 $this->load->view('skillgallery');
 }
 
 function deleteprofpic()
 {
	 if($this->session->userdata('username'))
	 {
		 $data['bb']=$this->session->username;
	    
	     $this->load->view('welcomedashboard', $data);
	 }
else{
	$this->load->view('professionals'); 
}	 
 }
 
 function skillimg()
 {
	 if($this->session->userdata('username'))
	{
		
		$this->load->view('skillimg', array('error' => ' ' ));
	}
	else
	{
		$this->load->view('professionals');
	}
 }
 
 function do_upld()
 {
	 if($this->session->userdata('username'))
	 {
	   $config['upload_path']= './uploads/';
	   $config['allowed_types'] = 'jpg';
	   $config['max_size'] = 10000;
	 }
	 else
	{
		$this->load->view('professionals');
	}
	 
 }
 
 function editbio()
 {
	 if($this->session->userdata('username'))
	 {
		 $username=$this->session->username;
		 $this->load->model('Skillmodel');
		 $record['bb']=$this->Skillmodel->fetchbio($username);
		 if($record['bb']==null)
		 {
			  $this->load->view('editbio');
			
		 }
		 else{
		   
            $this->load->view('editbio1',$record);		   
		 
		 }
	 }
	  else
	{
		$this->load->view('professionals');
	}
	 
 }
 
 function bio()
 {
	 if($this->session->userdata('username'))
	 {
		 $data=array(
		 "name" => $this->input->post("username"),"email" => $this->input->post("email"),"birthday" => $this->input->post("birthday"),
		 "age" => $this->input->post("age"),"degree" => $this->input->post("degree"),"phone" => $this->input->post("phone"),"city" => $this->input->post("city"),
		 "status" => $this->input->post("status"),"occupation" => $this->input->post("occupation"),"skills" => $this->input->post("skills"),
		 "message" => $this->input->post("message")
		 
		 );
		 
		 $this->load->model('Skillmodel');
		 if($this->Skillmodel->bioadd($data));
		 {
            $username=$this->session->username;			
			$this->load->model('Skillmodel');
			 
			 $record['bb']=$this->Skillmodel->fetchbio($username);
			 
		   	 
	       $this->load->view('bio',$record);
		 }
	 }
	  else
	{
		$this->load->view('professionals');
	}
	 
 }
 function modifybio()
 {
	 if($this->session->userdata('username'))
	 {
		 $data=array(
		 "name" => $this->input->post("username"),"email" => $this->input->post("email"),"birthday" => $this->input->post("birthday"),
		 "age" => $this->input->post("age"),"degree" => $this->input->post("degree"),"phone" => $this->input->post("phone"),"city" => $this->input->post("city"),
		 "status" => $this->input->post("status"),"occupation" => $this->input->post("occupation"),"skills" => $this->input->post("skills"),
		 "message" => $this->input->post("message")
		 
		 );
		 $username=$this->session->username;
		 $this->db->where('name',$username);
		 $this->db->update('profbio',$data);
		 redirect("Home/loadbio");
	 }
  else
	{
		$this->load->view('professionals');
	}
   
 }
 
 function loadbio()
 {
	 if($this->session->userdata('username'))
	 {
		 $username=$this->session->username;
		 $this->load->model('Skillmodel');
		 $record['bb']=$this->Skillmodel->fetchbio($username);
		 $this->load->view('bio',$record);
	 }
	 else
	{
		$this->load->view('professionals');
	}
 }

 
 function lms()
 {
	 $this->load->model('Skillmodel');
	 $data['records']=$this->Skillmodel->selectAllcourse();
	

	 $this->load->view('test',$data);
 }
 
 
 function checkbio()
 {
	 if($this->session->userdata('username'))
	 {
		 $username=$this->session->username;
		 $this->load->model('Skillmodel');
		 $data['bb']=$this->Skillmodel->fetchbio($username);
		 if($data['bb']==null)
		 {
			 redirect("Home/editbio");
		 }
		 else
		 {
		 $this->load->view('bio',$data);
		 }
	 }
	 else
	{
		$this->load->view('professionals');
	}
 }
 
 //company-wise courses function....trending courses of each company
 function company_courses(){
	 $id=$this->uri->segment('3');
	 $this->load->model('Skillmodel');
	 $data['records']=$this->Skillmodel->company_courses($id);
	 $this->load->view('company_courses',$data);
 }
 
 function testslide()
 {
	 $this->load->view('slider1');
 }
 
 function coursecheckout($id)
 {
	 if($this->session->userdata('email'))
	 {
	    $this->load->model('Skillmodel');
        $data['bb']=$this->Skillmodel->getcoursebyid($id);
        $data['id']=$this->Skillmodel->getorderid();
        $this->load->view('checkoutform',$data);
	 }
	 else{
		 
		 $this->load->model('Skillmodel');
        $data['bb']=$this->Skillmodel->getcoursebyid($id);
        $data['id']=$this->Skillmodel->getorderid();
		$data['records']= $this->Skillmodel->getallcompanies();
        $this->load->view('checkoutform1',$data);
	 }
	 
	
 }
 
 function encrypt($plainText,$key)
{
	$key = $this->hextobin(md5($key));
	$initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
	$openMode = openssl_encrypt($plainText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
	$encryptedText = bin2hex($openMode);
	return $encryptedText;
}

function decrypt($encryptedText,$key)
{
	$key = $this->hextobin(md5($key));
	$initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
	$encryptedText = $this->hextobin($encryptedText);
	$decryptedText = openssl_decrypt($encryptedText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
	return $decryptedText;
}

function hextobin($hexString) 
 { 
	$length = strlen($hexString); 
	$binString="";   
	$count=0; 
	while($count<$length) 
	{       
	    $subString =substr($hexString,$count,2);           
	    $packedString = pack("H*",$subString); 
	    if ($count==0)
	    {
			$binString=$packedString;
	    } 
	    
	    else 
	    {
			$binString.=$packedString;
	    } 
	    
	    $count+=2; 
	} 
        return $binString; 
  } 
 
 
	
	function response()
	{
	                 $this->load->library('Crypto');
             $workingKey='6DF9BBE766434FA45F754238AE07D448';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=$this->decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	echo "<center>";

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==3)	$order_status=$information[1];
	}

	if($order_status=="Success")
	{
		$this->load->model('Skillmodel');
		$uid=$this->session->userdata('order');
		$this->Skillmodel->setapprove($uid);
		
		echo "<br>Thank you for shopping with us.You have bought the course successfully.You have been registered in skillx";
		
	}
	else if($order_status=="Aborted")
	{
		echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
	
	}
	else if($order_status=="Failure")
	{
		echo "<br>Thank you for shopping with us.However,the transaction has been declined.";
	}
	else
	{
		echo "<br>Security Error. Illegal access detected";
	
	}

	echo "<br><br>";

	echo "<table cellspacing=4 cellpadding=4>";
	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
	    	echo '<tr><td>'.$information[0].'</td><td>'.urldecode($information[1]).'</td></tr>';
	}

	echo "</table><br>";
	echo "</center>";
}


 public function checkUser()
  {
      
    $phone=$this->input->post('phone');
    //$email=$this->input->post('email');
	
	$this->load->model('Skillmodel');
    
    $result=$this->Skillmodel->checkuser($phone);
    if($result)
    {
    echo  1;  
    }
    else
    {
    echo  0;  
    }
  }
  
  
 public function checkInstructor()
  {
      
    $phone=$this->input->post('phone');
    //$email=$this->input->post('email');
	
	$this->load->model('Skillmodel');
    
    $result=$this->Skillmodel->checkInstructor($phone);
    if($result)
    {
    echo  1;  
    }
    else
    {
    echo  0;  
    }
  }
  
  
   public function studcheckUser()
  {
      
    $phone=$this->input->post('phone');
    //$email=$this->input->post('email');
	
	$this->load->model('Skillmodel');
    
    $result=$this->Skillmodel->studcheckuser($phone);
    if($result)
    {
    echo  1;  
    }
    else
    {
    echo  0;  
    }
  }
  
   public function checkUserEmail()
  {
      
    $email=$this->input->post('email');
    //$email=$this->input->post('email');
	
	$this->load->model('Skillmodel');
    
    $result=$this->Skillmodel->checkUserEmail($email);
    if($result)
    {
    echo  1;  
    }
    else
    {
    echo  0;  
    }
  }
  
    public function checkInstructoremail()
  {
      
    $email=$this->input->post('email');
    //$email=$this->input->post('email');
	
	$this->load->model('Skillmodel');
    
    $result=$this->Skillmodel->checkInstructoremail($email);
    if($result)
    {
    echo  1;  
    }
    else
    {
    echo  0;  
    }
  }
  
     public function studcheckUseremail()
  {
      
    $email=$this->input->post('email');
    //$email=$this->input->post('email');
	
	$this->load->model('Skillmodel');
    
    $result=$this->Skillmodel->studcheckUseremail($email);
    if($result)
    {
    echo  1;  
    }
    else
    {
    echo  0;  
    }
  }



function studentsignup() 
 {
	 $this->load->model('Skillmodel');
	 $data['records']=$this->Skillmodel->getallcompanies();
	$this->load->view('studentsignup',$data);
 }

 function companysignup()
 {
  $this->load->view('companysignup');
 }
 
  function studentsignupdo()  
 { 
  $company=$this->input->post("company");
  $this->load->model('Skillmodel');
  $records=$this->Skillmodel->fetchcompanyid($company);
  
  //echo $records->id;
  
  
  $data=array("student_name"=>$this->input->post("name"),"student_email"=>$this->input->post("email"),"student_phone"=>$this->input->post("phone"),"password"=>$this->input->post("password"),"city"=>$this->input->post("city"),"state"=>$this->input->post("state"),"country"=>$this->input->post("country"),"zip"=>$this->input->post("zip"),"company_id"=>$records->id);
 
  
  if($this->Skillmodel->addstud($data)) 
    $this->load->view('studentlogin');
 else
   $this->load->view('studentsignup'); 
 }
 
  function companysignupdo()  
 {
	 $binod=array(

'upload_path'=>'./uploads',
'allowed_types'=>'jpg|png|jpeg',
'max_size'=>4000

);

$this->load->library("upload",$binod);

if(!$this->upload->do_upload('userfile'))
{
	echo $this->upload->display_errors();
}
else
{
	$fd=$this->upload->data();
	$fn=$fd['file_name'];
}
 
  $data=array("name"=>$this->input->post("name"),"email"=>$this->input->post("email"),"phone"=>$this->input->post("phone"),"password"=>$this->input->post("password"),"address"=>$this->input->post("address"),"file_name"=>$fn);
  $this->load->model('Skillmodel');
  if($this->Skillmodel->addcompany($data)) 
  {
	  $this->session->set_flashdata('signal','Signup successful, Now Login');
	  $this->load->view('adminlogin');
	  
  }
    
  else
    $this->load->view('companysignup'); 
 }
 
   function studentlogin(){
    $this->load->view('studentlogin');
  }
  
    function studentlogindo()
  { 
    $email   = $this->input->post('email',TRUE);
    $password = $this->input->post('password',TRUE);
	$this->load->model('Skillmodel');
    $validate = $this->Skillmodel->validate($email,$password);
	
	$data1['records']=$this->Skillmodel->getstudent($email);

    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $password  = $data['password'];
        $email = $data['student_email'];
        $type = $data['isapprove'];
        $id = $data['student_id'];
        $sesdata = array(
            'password'  => $password,
            'email'     => $email,
            "isapprove"     => $type,
            'logged_in' => TRUE,
            'student_id' => $id
        );


        $this->session->set_userdata($sesdata);

        if($type == 1) {
          $this->load->view('studentheader',$data1);
		  $this->load->view('studdashboard');
          
        } else {
            $this->session->set_flashdata('msg1',"Admin approval needed");
            $this->session->set_flashdata('msg_class','alert-success');
            $this->load->view('studentlogin');
        }
     }
     else
     {
       $this->session->set_flashdata('msg1',"wrong Number or password");
        $this->session->set_flashdata('msg_class','alert-success');
        $this->load->view('studentlogin');

     }
  }
  
      function companylogindo()
  { 
    $email   = $this->input->post('email',TRUE);
    $password = $this->input->post('password',TRUE);
	$this->load->model('Skillmodel');
    $validate = $this->Skillmodel->companyvalidate($email,$password);
	$bb['records']=$this->Skillmodel->getcompany($email);
	

    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $password  = $data['password'];
        $email = $data['email'];
        $type = $data['isapprove'];
        $id = $data['id'];
        $sesdata = array(
            'password'  => $password,
            'email'     => $email,
            "isapprove"     => $type,
            'logged_in' => TRUE,
            'id' => $id
        );


        $this->session->set_userdata($sesdata);

        if($type == 1) {
          $this->load->view('companyheader',$bb);
		  $this->load->view('companydashboard');
          
        } else {
            $this->session->set_flashdata('msg1',"Admin approval needed");
            $this->session->set_flashdata('msg_class','alert-success');
            $this->load->view('adminlogin');
        }
     }
     else
     {
       $this->session->set_flashdata('msg1',"wrong Number or password");
        $this->session->set_flashdata('msg_class','alert-success');
        $this->load->view('adminlogin');

     }
  }
  
  
   function instructorsignup() 
 {
	 $this->load->model('Skillmodel');
	 $data['records']=$this->Skillmodel->getallcompanies();
     $this->load->view('instructorsignup',$data);
 }
 
  function instructorsignupdo()  
 {
	   $company=$this->input->post("company");
  $this->load->model('Skillmodel');
  $records=$this->Skillmodel->fetchcompanyid($company);
  $data=array("instructor_name"=>$this->input->post("name"),"instructor_email"=>$this->input->post("email"),"instructor_phone"=>$this->input->post("phone"),"password"=>$this->input->post("password"),"company_id"=>$records->id);
  
  if($this->Skillmodel->add1($data)) 
    $this->load->view('instructorlogin');
  else
    echo "Data is not Added"; 
 }
  
   function instructorlogin(){
    $this->load->view('instructorlogin');
  }

  function instructorlogindo()
  { 
    $email   = $this->input->post('email',TRUE);
    $password = $this->input->post('password',TRUE);
	$this->load->model('Skillmodel');
    $validate = $this->Skillmodel->validate1($email,$password);
	
	$data1['records']=$this->Skillmodel->getinstructor($email);
	
	

    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $password  = $data['password'];
        $email = $data['instructor_email'];
        $type = $data['isapprove'];
        $id = $data['id'];
        $sesdata = array(
            'password'  => $password,
            'email'     => $email,
            "isapprove"     => $type,
            'logged_in' => TRUE,
            'id' => $id
        );


        $this->session->set_userdata($sesdata);

        if($type == 1) {
          $this->load->view('instructorheader',$data1);
         $this->load->view('instructordashboard');
          
        } else {
            $this->session->set_flashdata('msg1',"Admin approval needed");
            $this->session->set_flashdata('msg_class','alert-success');
            $this->load->view('instructorlogin');
        }
     }
     else
     {
       $this->session->set_flashdata('msg1',"wrong Number or password");
        $this->session->set_flashdata('msg_class','alert-success');
        $this->load->view('instructorlogin');

     }
  }
  
  function instructordash()
  {
	  $this->load->view('instructorheader');
         $this->load->view('instructordashboard');
  }
  
   function instructornotification(){

    $query=$this->db->get('skillxinstructor');
    $data['records']=$query->result();
    $this->load->view('adminheader');
    $this->load->view('instructornotification',$data);
    
  }
  
   function companynotification(){ 
    $query=$this->db->get("company");
    $data['records']=$query->result();
    $this->load->view('adminheader');
    $this->load->view('companynotification',$data);
    
  }
  
    public function instructor_update_status()
    {
      $id=$this->uri->segment(3);
      $status=$this->uri->segment(4);
      if($status==0)
      {
      $this->db->set('isapprove',1);
      $this->db->where('id',$id);
      $this->db->update('skillxinstructor');
      }
      elseif($status==1)
      {
      $this->db->set('isapprove',0);
      $this->db->where('id',$id);
      $this->db->update('skillxinstructor');
      }
      $this->instructornotification();
    }
	
	public function company_update_status()
    {
      $id=$this->uri->segment(3);
      $status=$this->uri->segment(4);
      if($status==0)
      {
      $this->db->set('isapprove',1);
      $this->db->where('id',$id);
      $this->db->update('company');
      }
      elseif($status==1)
      {
      $this->db->set('isapprove',0);
      $this->db->where('id',$id);
      $this->db->update('company');
      }
      $this->companynotification();
    }
  
   function adminview()
 {
  if($this->session->userdata('email'))
  {
    $this->load->view('admindashboard'); 
  	
  }else{
    $this->load->view('homepage');
  } 
 }
  
  function adminlogin(){
    $this->load->view('adminlogin');
  }
  
    function adminlogindo()
  { 
    $email   = $this->input->post('email',TRUE);
    $password = $this->input->post('password',TRUE);
	$this->load->model('Skillmodel');
    $validate = $this->Skillmodel->validate2($email,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $password  = $data['password'];
        $email = $data['email'];
        $id = $data['id'];
        $sesdata = array(
            'password'  => $password,
            'email'     => $email,
            'logged_in' => TRUE,
            'id' => $id
        );
        $this->session->set_userdata($sesdata);
        $this->adminview();
     }
     else
     {
       $this->session->set_flashdata('msg1',"wrong Number or password");
        $this->session->set_flashdata('msg_class','alert-success');
        $this->load->view('adminlogin');

     }
  }
  
   function studentnotification(){ 
   
    $query=$this->db->get('skillxstudent');
    $data['records']=$query->result();
    $this->load->view('adminheader');
    $this->load->view('notification',$data);
    
  }
  
    function companystudentnotification(){ 
	$id=$this->uri->segment('3');
	$email=$this->uri->segment('4');
	
	$this->db->where('company_id',$id);
    $query=$this->db->get("skillxstudent");
    $data['records']=$query->result();
	$this->load->model('Skillmodel');
	$data1['records']=$this->Skillmodel->getcompany($email);
    $this->load->view('companyheader',$data1);
    $this->load->view('comstudnotification',$data);
    
  }
  
 
  

  
    function companyinstructornotification(){ 
	$id=$this->uri->segment('3');
	$email=$this->uri->segment('4');
	

	
	$this->db->where('company_id',$id);
    $query=$this->db->get("skillxinstructor");
    $data['records']=$query->result();
	$this->load->model('Skillmodel');
	$data1['records']=$this->Skillmodel->getcompany($email);
    $this->load->view('companyheader',$data1);
    $this->load->view('cominstnotification',$data);
    
  }
  
    function companystudentnotification1(){ 
	$id=$this->session->userdata('id');
	$email=$this->session->userdata('email');
	$this->load->model('Skillmodel');
	$this->db->where('company_id',$id);
    $query=$this->db->get("skillxstudent");
    $data['records']=$query->result();
	
	$data1['records']=$this->Skillmodel->getcompany($email);
    $this->load->view('companyheader',$data1);
    $this->load->view('comstudnotification',$data);
    
  }
  
    function companyinstructornotification1(){ 
	$id=$this->session->userdata('id');
	$email=$this->session->userdata('email');
	
	$this->db->where('company_id',$id);
    $query=$this->db->get("skillxinstructor");
    $data['records']=$query->result();
	$this->load->model('Skillmodel');
	$data1['records']=$this->Skillmodel->getcompany($email);
    $this->load->view('companyheader',$data1);
    $this->load->view('cominstnotification',$data);
    
  }
  
  
    public function update_status()
    {
      $id=$this->uri->segment(3);
      $status=$this->uri->segment(4);
      if($status==0)
      {
        $this->db->set('isapprove', 1);
        $this->db->where('student_id',$id);
        $this->db->update('skillxstudent');
      }
      else if($status==1)
      {
        $this->db->set('isapprove', 0);
        $this->db->where('student_id',$id);
        $this->db->update('skillxstudent');
      }
      $this->studentnotification(); 
  }
  
      public function comstudupdate_status()
    {
      $id=$this->uri->segment(3);
      $status=$this->uri->segment(4);
      if($status==0)
      {
        $this->db->set('isapprove', 1);
        $this->db->where('student_id',$id);
        $this->db->update('skillxstudent');
      }
      elseif($status==1)
      {
        $this->db->set('isapprove', 0);
        $this->db->where('student_id',$id);
        $this->db->update('skillxstudent');
      }
      $this->companystudentnotification1(); 
  }
  
    public function cominstructor_update_status()
    {
      $id=$this->uri->segment(3);
      $status=$this->uri->segment(4);
      if($status==0)
      {
        $this->db->set('isapprove', 1);
        $this->db->where('id',$id);
        $this->db->update('skillxinstructor');
      }
      elseif($status==1)
      {
        $this->db->set('isapprove', 0);
        $this->db->where('id',$id);
        $this->db->update('skillxinstructor');
      }
      //$this->companystudentnotification1();
 $this->companyinstructornotification1();	  
  }
  
  function admindash()
  {
	  $this->load->view('admindashboard');
  }
  
  function adminlogout(){
    unset($_SESSION['email']);
    $this->lms();
  }
  
  function superadminlogout()
  {
	  unset($_SESSION['email']);
    $this->superadminlogin();
  }
  
   function companylogout(){
    unset($_SESSION['email']);
    $this->adminlogin();
  }
  
    //Admin add course 
  function addcourse(){
	  $this->load->model('Skillmodel');
	  $data['records']=$this->Skillmodel->getallcompanies();
    $this->load->view('adminheader');
    $this->load->view('addcourse',$data);
   

  }
  
    function compaddcourse(){
		
    if($this->session->userdata('email'))
	{
		
		$email=$this->session->userdata('email');
		$this->load->model('Skillmodel');
	$data1['records']=$this->Skillmodel->getcompany($email);
    $this->load->view('companyheader',$data1);
		
       $this->load->view('compaddcourse',$data1);
	}
	else
	{
		$this->load->view('adminlogin');
	}
 
  }
  
  function notunformesechay()
  {
		//the document upload script
$binod=array(

'upload_path'=>'./uploads/courses',
'allowed_types'=>'jpg|png|jpeg',
'max_size'=>4000

);

$this->load->library("upload",$binod);

if(!$this->upload->do_upload('userfile'))
{
	echo $this->upload->display_errors();
}
else
{
	$fd=$this->upload->data();
	$fn=$fd['file_name'];
}
	  
      $data=array("course_name"=>$this->input->post("course_name"),"description"=>$this->input->post("description"),"duration"=>$this->input->post("duration"),"course_price"=>$this->input->post("course_price"),"company_id"=>$this->input->post("company_id"),'thumbnail' => $fn);
      $this->load->model('Skillmodel');
	  $response=$this->Skillmodel->addnotuncourse($data); 
      $this->session->set_flashdata('msg1',"Course Inserted Successfully");
      $this->session->set_flashdata('msg_class','alert-success');
      
	  $email=$this->session->userdata('email');
	 $data1['records']=$this->Skillmodel->getcompany($email);
     $this->load->view('companyheader',$data1);
     $this->load->view('compaddcourse');
     
  }
  
   function aviewcourse(){
 if($this->session->userdata('email'))
  {
	   $this->db->select('*');
	  $this->db->from('skillxcourse');
	  $this->db->join('company', 'skillxcourse.company_id=company.id');
	 
    $query=$this->db->get();
    $data['records']=$query->result();
    $this->load->view('adminheader');
    $this->load->view('aviewcourse',$data);
    
  }else{
    $this->load->view('adminlogin');
  }
 }
 
    function compaviewcourse(){
 if($this->session->userdata('email'))
  {  
    $id=$this->uri->segment('3');
	$email=$this->session->userdata('email');
    $this->db->where('company_id',$id);
    $query=$this->db->get("skillxcourse");
    $data['records']=$query->result();
	$this->load->model('Skillmodel');
	$data1['records']=$this->Skillmodel->getcompany($email);
    $this->load->view('companyheader',$data1);
    
    $this->load->view('companyviewcourse',$data);
    
  }else{
    $this->load->view('adminlogin');
  }
 }
 
  function deleteadmincourse()
  {
	  if($this->session->userdata('email'))
	  {
		 $id=$this->uri->segment('3');
	$this->load->model('Skillmodel');
    $this->Skillmodel->admindel($id);
	
	
	$uid=$this->session->userdata('id');
	$email=$this->session->userdata('email');
    $this->db->where('company_id',$uid);
    $query=$this->db->get("skillxcourse");
    $data['records']=$query->result();
	
	$data1['records']=$this->Skillmodel->getcompany($email);
    $this->load->view('companyheader',$data1);
    
    $this->load->view('companyviewcourse',$data);
    
	  }
	  
	  else{
    $this->load->view('adminlogin');
   } 
    
  }
  

  
   function deletesuperadmincourse()
  {
	  if($this->session->userdata('email'))
	  {
		 $id=$this->uri->segment('3');
	$this->load->model('Skillmodel');
    $this->Skillmodel->admindel($id);
	
	
	$this->aviewcourse();
    
	  }
	  
	  else{
    $this->load->view('superadminlogin');
   } 
    
  }
  
    function instructorlist(){ 
	 $this->db->select('*');
	  $this->db->from('skillxinstructor');
	  $this->db->join('company', 'skillxinstructor.company_id=company.id');
	 $array=array(
	 "skillxinstructor.isapprove" => 1,
	 "company.isapprove" => 1
	 
	 );
    $this->db->where($array);
    $query=$this->db->get();
    $data['records']=$query->result();
    $this->load->view('adminheader');
    $this->load->view('instructorlist',$data);
   
  }
  
  
    function studentlist(){ 
	
  if($this->session->userdata('email'))
   {
	    $this->db->select('*');
	  $this->db->from('skillxstudent');
	  $this->db->join('company', 'skillxstudent.company_id=company.id');
	   
    $this->db->where("skillxstudent.isapprove",1);
	$this->db->where("company.isapprove",1);
	
    $query=$this->db->get();
    $data['records']=$query->result();
    $this->load->view('adminheader');
    $this->load->view('studentlist',$data);
   
   }else{
    $this->load->view('adminlogin');
   } 
  }
  
     function companylist(){ 
	
  if($this->session->userdata('email'))
   {
    $this->db->where("isapprove",1);
	
    $query=$this->db->get('company');
    $data['records']=$query->result();
    $this->load->view('adminheader');
    $this->load->view('companylist',$data);
   
   }else{
    $this->load->view('adminlogin');
   } 
  }
  
     function companystudentlist(){ 
	$id=$this->uri->segment('3');
  if($this->session->userdata('email'))
   {
    $query=$this->db->where("isapprove",1);
	$query=$this->db->where("company_id",$id);
    $query=$this->db->get("skillxstudent");
	$this->load->model('Skillmodel');
	$data1['records']=$this->Skillmodel->getcompany($this->session->userdata('email'));
    $data['records']=$query->result();
    $this->load->view('companyheader',$data1);
    $this->load->view('companystudentlist',$data);
   
   }else{
    $this->load->view('adminlogin');
   } 
  }
  
   function companyinstructorlist(){ 
	$id=$this->uri->segment('3');
  if($this->session->userdata('email'))
   {
    $query=$this->db->where("isapprove",1);
	$query=$this->db->where("company_id",$id);
    $query=$this->db->get("skillxinstructor");
	$this->load->model('Skillmodel');
	$data1['records']=$this->Skillmodel->getcompany($this->session->userdata('email'));
    $data['records']=$query->result();
    $this->load->view('companyheader',$data1);
    $this->load->view('companyinstructorlist',$data);
   
   }else{
    $this->load->view('adminlogin');
   } 
  }
  
  function deletestudent()
  {
	   if($this->session->userdata('email'))
	   {
		    $id=$this->uri->segment('3');
	$this->load->model('SkillModel');
    $this->SkillModel->delstudent($id);
    $uid=$this->session->userdata('id');
	$query=$this->db->where("isapprove",1);
	$query=$this->db->where("company_id",$uid);
    $query=$this->db->get("skillxstudent");
	
	$data1['records']=$this->SkillModel->getcompany($this->session->userdata('email'));
    $data['records']=$query->result();
    $this->load->view('companyheader',$data1);
	 $this->load->view('companystudentlist',$data);
	   }
	   
	   else{
    $this->load->view('adminlogin');
   }
   
  }
  
    function superdeletestudent()
  {
	   if($this->session->userdata('email'))
	   {
		    $id=$this->uri->segment('3');
	$this->load->model('SkillModel');
    $this->SkillModel->delstudent($id);
    
	$this->studentlist();
	   }
	   
	   else{
    $this->load->view('superadminlogin');
   }
   
  }
  
   function deletecompany()
  {
	   if($this->session->userdata('email'))
	   {
		    $id=$this->uri->segment('3');
	$this->load->model('SkillModel');
    $this->SkillModel->delcompany($id);
   $this->companylist();
	   }
	   
	   else{
    $this->load->view('adminlogin');
   }
   
  }
  
   function updatestudent()
  {
	  if($this->session->userdata('email'))
	  {
		   $id=$this->uri->segment('3');
    $query=$this->db->get_where("skillxstudent",array("student_id"=>$id));
    $data['records']=$query->result();
   $this->load->model('Skillmodel');
$email=$this->session->userdata('email');
	$data1['records']=$this->Skillmodel->getcompany($email);
    $this->load->view('companyheader',$data1);
    $this->load->view('updatestudent',$data);
		  
	  }
	  else{
		  $this->load->view('adminlogin');
	  }
   
   
  }
  
     function updateadmincourse()
  {
	  if($this->session->userdata('email'))
	  {
		   $id=$this->uri->segment('3');
    $query=$this->db->get_where("skillxcourse",array("course_id"=>$id));
    $data['records']=$query->result();
  
   $this->load->model('Skillmodel');
$email=$this->session->userdata('email');
	$data1['records']=$this->Skillmodel->getcompany($email);
    $this->load->view('companyheader',$data1);
    $this->load->view('updateadmincourse',$data);
		  
	  }
	  else{
		  $this->load->view('adminlogin');
	  }
   
   
  }
  
     function superupdatestudent()
  {
	  if($this->session->userdata('email'))
	  {
		   $id=$this->uri->segment('3');
    $query=$this->db->get_where("skillxstudent",array("student_id"=>$id));
    $data['records']=$query->result();
   $this->load->model('Skillmodel');

    $this->load->view('adminheader');
    $this->load->view('superupdatestudent',$data);
		  
	  }
	  else{
		  $this->load->view('superadminlogin');
	  }
   
   
  }
  
 
  
     function updatecompany()
  {
	  if($this->session->userdata('email'))
	  {
		   $id=$this->uri->segment('3');
    $query=$this->db->get_where("company",array("id"=>$id));
    $data['records']=$query->result();
   $this->load->model('Skillmodel');

    $this->load->view('adminheader');
    $this->load->view('updatecompany',$data);
		  
	  }
	  else{
		  $this->load->view('adminlogin');
	  }
   
   
  }
  
  
  
    function updatedostudent()
  {
	  if($this->session->userdata('email'))
	  {
		  $data=array("student_name"=>$this->input->post("name"),"student_email"=>$this->input->post("email"),"student_phone"=>$this->input->post("phone"),"city"=>$this->input->post("city"),"state"=>$this->input->post("state"),"country"=>$this->input->post("country"),"zip"=>$this->input->post("zip"));
    $id=$this->input->post('student_id');
	$this->load->model('Skillmodel');
    $this->Skillmodel->updatestudent($data,$id);
    
	
	$id=$this->session->userdata('id');
	$query=$this->db->where("isapprove",1);
	$query=$this->db->where("company_id",$id);
    $query=$this->db->get("skillxstudent");
	
	$data1['records']=$this->Skillmodel->getcompany($this->session->userdata('email'));
    $data['records']=$query->result();
    $this->load->view('companyheader',$data1);
    $this->load->view('companystudentlist',$data);
		  
	  }
	  else{
		  $this->load->view('adminlogin');
	  }
    
  }
  
      function updatedocourse()
  {
	  if($this->session->userdata('email'))
	  {
		  $data=array("course_name"=>$this->input->post("name"),"description"=>$this->input->post("description"),"duration"=>$this->input->post("duration"),"course_price"=>$this->input->post("price"));
    $id=$this->input->post('course_id');
	$this->load->model('Skillmodel');
    $this->Skillmodel->updatecourse($data,$id);
    
	$id=$this->session->userdata('id');
	$email=$this->session->userdata('email');
    $this->db->where('company_id',$id);
    $query=$this->db->get("skillxcourse");
    $data['records']=$query->result();
	$this->load->model('Skillmodel');
	$data1['records']=$this->Skillmodel->getcompany($email);
    $this->load->view('companyheader',$data1);
    
    $this->load->view('companyviewcourse',$data);
	
	
		  
	  }
	  else{
		  $this->load->view('adminlogin');
	  }
    
  }
  
    
    function superupdatedostudent()
  {
	  if($this->session->userdata('email'))
	  {
		  $data=array("student_name"=>$this->input->post("name"),"student_email"=>$this->input->post("email"),"student_phone"=>$this->input->post("phone"),"city"=>$this->input->post("city"),"state"=>$this->input->post("state"),"country"=>$this->input->post("country"),"zip"=>$this->input->post("zip"));
    $id=$this->input->post('student_id');
	$this->load->model('Skillmodel');
    $this->Skillmodel->updatestudent($data,$id);
    
	$this->studentlist();
		  
	  }
	  else{
		  $this->load->view('adminlogin');
	  }
    
  }
  
    
    function updatedocompany()
  {
	  if($this->session->userdata('email'))
	  {
		  $data=array("name"=>$this->input->post("name"),"email"=>$this->input->post("email"),"phone"=>$this->input->post("phone"),"address"=>$this->input->post("address"));
    $id=$this->input->post('id');
	$this->load->model('Skillmodel');
    $this->Skillmodel->updatecompany($data,$id);
	
	$this->companylist();
		  
	  }
	  else{
		  $this->load->view('adminlogin');
	  }
    
  }
  
    function deleteinstructor()
  {
	   if($this->session->userdata('email'))
	   {
		    $id=$this->uri->segment('3');
	$this->load->model('Skillmodel');
    $this->Skillmodel->delinstructor($id);
    
	$uid=$this->session->userdata('id');
	$query=$this->db->where("isapprove",1);
	$query=$this->db->where("company_id",$uid);
    $query=$this->db->get("skillxinstructor");
	
	$data1['records']=$this->Skillmodel->getcompany($this->session->userdata('email'));
    $data['records']=$query->result();
    $this->load->view('companyheader',$data1);
    $this->load->view('companyinstructorlist',$data);
		   
	   }
	   
	   else{
		   $this->load->view('adminlogin');
	   }
   
  }
  
  
     function superdeleteinstructor()
  {
	   if($this->session->userdata('email'))
	   {
		    $id=$this->uri->segment('3');
	$this->load->model('Skillmodel');
    $this->Skillmodel->delinstructor($id);
	$this->instructorlist();
    

		   
	   }
	   
	   else{
		   $this->load->view('superadminlogin');
	   }
   
  }
  
  
  
    function addcertificate(){
    $query2=$this->db->get("skillxcourse");
    $data2['records2']=$query2->result();
    $query2=$this->db->get("skillxstudent");
    $data2['records']=$query2->result();
    $this->load->view('adminheader');
    $this->load->view('addcertificate',$data2);
    
  }
  
    function addcertificatedo(){
    $data=array("course_id"=>$this->input->post("cat_id"), "student_id"=>$this->input->post("cat"),"from"=>$this->input->post("from"),"to"=>$this->input->post("to"));
    $this->session->set_flashdata('msg1',"Certificate added Successfully");
    $this->session->set_flashdata('msg_class','alert-success');
	$this->load->model('Skillmodel');
    $response=$this->Skillmodel->addcertificate($data); 
    $this->addcertificate();
  }
  
    function addmodule(){
    $query2=$this->db->get("skillxcourse");
    $data2['records2']=$query2->result();
    $this->load->view('adminheader');
    $this->load->view('addmodule',$data2);
    
  }
  
   function compaddmodule(){
	if($this->session->userdata('email'))
	{
		$id=$this->uri->segment('3');
		$this->db->where('company_id',$id);
	$query2=$this->db->get("skillxcourse");
    $data2['records2']=$query2->result();
    $this->load->model('Skillmodel');
	$email=$this->session->userdata('email');
	$data1['records']=$this->Skillmodel->getcompany($email);
    $this->load->view('companyheader',$data1);
    $this->load->view('addmodule',$data2);
		
	}
	else{
		$this->load->view('adminlogin');
	}
  
  }
  
  function addmoduledo(){
        
    $data=array("course_id"=>$this->input->post("cat_id"), "module_name"=>$this->input->post("module_name"));
    $this->session->set_flashdata('msg1',"Module Inserted Successfully");
    $this->session->set_flashdata('msg_class','alert-success');
	$this->load->model('Skillmodel');
    $response=$this->Skillmodel->addmodule($data); 
    $this->addmodule();
  }
  
   function compaddmoduledo(){
        
    $data=array("course_id"=>$this->input->post("cat_id"), "module_name"=>$this->input->post("module_name"));
    $this->session->set_flashdata('msg1',"Module Inserted Successfully");
    $this->session->set_flashdata('msg_class','alert-success');
	$this->load->model('Skillmodel');
    $response=$this->Skillmodel->addmodule($data); 
    $this->compaddmodule();
  }
  
  function displaycourses()
  {
	 $this->load->model('Skillmodel');
	 $data['records']=$this->Skillmodel->display_courses();
	 $this->load->view('adminheader'); 
	 $this->load->view('displaycourses',$data); 
  }
  
   function compdisplaycourses()
  {
	  if($this->session->userdata('email'))
	  {
		  $id=$this->uri->segment('3');
		  $this->load->model('Skillmodel');
	 $data['records']=$this->Skillmodel->display_courses1($id);
	 $email=$this->session->userdata('email');
	$data1['records']=$this->Skillmodel->getcompany($email);
    $this->load->view('companyheader',$data1);
	 $this->load->view('compdisplaycourses',$data); 
		  
	  }
	  else{
		  $this->load->view('adminlogin');
	  }
	 
  }
  
    function addcontent(){
    $query2=$this->db->get("skillxcourse");
    $data2['records2']=$query2->result();
    $query2=$this->db->get("skillxcourse_module");
    $data2['records']=$query2->result();
    $this->load->view('adminheader');
    $this->load->view('addcontent',$data2);
    
  }
  
     function compaddcontent(){
		 if($this->session->userdata('email'))
		 {
			 $id=$this->uri->segment('3');
			 $this->db->where('company_id',$id);
			 $query2=$this->db->get("skillxcourse");
    $data2['records2']=$query2->result();
    $query2=$this->db->get("skillxcourse_module");
    $data2['records']=$query2->result();
	$this->load->model('Skillmodel');
	$email=$this->session->userdata('email');
	$data1['records']=$this->Skillmodel->getcompany($email);
    $this->load->view('companyheader',$data1);
   
    $this->load->view('addcontent',$data2);
			 
		 }
		 
		 else{
			 $this->load->view('adminlogin');
		 }
    
    
  }
  
   function viewmodule(){
  if($this->session->userdata('email'))
  {
    $course_id=$this->uri->segment(3);

    $query=$this->db->get_where("skillxcourse",array("course_id"=>$course_id));
    $data1['records1']=$query->result();
   
    $query=$this->db->get_where("skillxcourse_module",array("course_id"=>$course_id));
    $data1['records2']=$query->result();
       
    $query=$this->db->get_where("skillxcourse_content",array("course_id"=>$course_id));
    //$query=substr(($this->db->get('course_content')->result()), 0, 10);
    $data1['records3']=$query->result();
    
    $this->load->view('adminheader1');
    $this->load->view('adminmoduleview1',$data1);
    
  }else{
    $this->load->view('adminlogin');
  }
 }
 
    function compviewmodule(){
  if($this->session->userdata('email'))
  {
    $course_id=$this->uri->segment(3);

    $query=$this->db->get_where("skillxcourse",array("course_id"=>$course_id));
    $data1['records1']=$query->result();
   
    $query=$this->db->get_where("skillxcourse_module",array("course_id"=>$course_id));
    $data1['records2']=$query->result();
       
    $query=$this->db->get_where("skillxcourse_content",array("course_id"=>$course_id));
    //$query=substr(($this->db->get('course_content')->result()), 0, 10);
    $data1['records3']=$query->result();
    
    $this->load->model('Skillmodel');
$email=$this->session->userdata('email');
	$data2['records']=$this->Skillmodel->getcompany($email);
    $this->load->view('companyheader',$data2);
    $this->load->view('adminmoduleview1',$data1);
    
  }else{
    $this->load->view('adminlogin');
  }
 }
  
    function addcontentdo(){

       		//the document upload script
$binod=array(

'upload_path'=>'./uploads/images',
'allowed_types'=>'jpg|png|jpeg|pdf',
'max_size'=>4000

);

$this->load->library("upload",$binod);

if(!$this->upload->do_upload('userfile'))
{
	echo $this->upload->display_errors();
}
else
{
	$fd=$this->upload->data();
	$fn=$fd['file_name'];
}
        
        $data=array("course_id"=>$this->input->post("cat_id"), "module_id"=>$this->input->post("cat"),'file_name' => $fn,'status'=>$this->input->post('status'));
        $this->session->set_flashdata('msg1',"Content Inserted Successfully");
        $this->session->set_flashdata('msg_class','alert-success');
		$this->load->model('Skillmodel');
        $response=$this->Skillmodel->addcontent($data); 
        $this->compaddcontent();
  }
  
   function deletemodule()
  {
	  if($this->session->userdata('email'))
	  {
		  $id=$this->uri->segment('3');
	$this->load->model('Skillmodel');
    $this->Skillmodel->deletemodule($id);

    $course_id=$this->uri->segment(4);
    $query=$this->db->get_where("skillxcourse",array("course_id"=>$course_id));
    $data1['records1']=$query->result();
   
    $query=$this->db->get_where("skillxcourse_module",array("course_id"=>$course_id));
    $data1['records2']=$query->result();
       
    $query=$this->db->get_where("skillxcourse_content",array("course_id"=>$course_id));
    $data1['records3']=$query->result();
	
	$email=$this->session->userdata('email');
	$data2['records']=$this->Skillmodel->getcompany($email);
    $this->load->view('companyheader',$data2);
 
    $this->load->view('moduleview1',$data1);
		  
	  }
	  else{
		  $this->load->view('adminlogin');
	  }
    
    
  }
  
    function instructordeletemodule()
  {
	  if($this->session->userdata('email'))
	  {
		  $id=$this->uri->segment('3');
	$this->load->model('Skillmodel');
    $this->Skillmodel->deletemodule($id);

    $course_id=$this->uri->segment(4);
    $query=$this->db->get_where("skillxcourse",array("course_id"=>$course_id));
    $data1['records1']=$query->result();
   
    $query=$this->db->get_where("skillxcourse_module",array("course_id"=>$course_id));
    $data1['records2']=$query->result();
       
    $query=$this->db->get_where("skillxcourse_content",array("course_id"=>$course_id));
    $data1['records3']=$query->result();
	
	$email=$this->session->userdata('email');
	$data2['records']=$this->Skillmodel->getinstructor($email);
    $this->load->view('instructorheader',$data2);
 
    $this->load->view('moduleview1',$data1);
		  
	  }
	  else{
		  $this->load->view('adminlogin');
	  }
    
    
  }
  
  function deletecontent()
  {
	  if($this->session->userdata('email'))
	  {
		  $id=$this->uri->segment('3');
	$this->load->model('Skillmodel');
    $this->Skillmodel->deletecontent($id);

    $course_id=$this->uri->segment(4);
    $query=$this->db->get_where("skillxcourse",array("course_id"=>$course_id));
    $data1['records1']=$query->result();
   
    $query=$this->db->get_where("skillxcourse_module",array("course_id"=>$course_id));
    $data1['records2']=$query->result();
       
    $query=$this->db->get_where("skillxcourse_content",array("course_id"=>$course_id));
    $data1['records3']=$query->result();
    
    $email=$this->session->userdata('email');
	$data2['records']=$this->Skillmodel->getcompany($email);
    $this->load->view('companyheader',$data2);
    $this->load->view('moduleview1',$data1);
		  
	  }
	  else{
		  $this->load->view('adminlogin');
	  }
    
   
  }
  
    function instructordeletecontent()
  {
	  if($this->session->userdata('email'))
	  {
		  $id=$this->uri->segment('3');
	$this->load->model('Skillmodel');
    $this->Skillmodel->deletecontent($id);

    $course_id=$this->uri->segment(4);
    $query=$this->db->get_where("skillxcourse",array("course_id"=>$course_id));
    $data1['records1']=$query->result();
   
    $query=$this->db->get_where("skillxcourse_module",array("course_id"=>$course_id));
    $data1['records2']=$query->result();
       
    $query=$this->db->get_where("skillxcourse_content",array("course_id"=>$course_id));
    $data1['records3']=$query->result();
    
    $email=$this->session->userdata('email');
$data2['records']=$this->Skillmodel->getinstructor($email);
    $this->load->view('instructorheader',$data2);
    $this->load->view('moduleview1',$data1);
		  
	  }
	  else{
		  $this->load->view('adminlogin');
	  }
    
   
  }
  
  function loadstudent()
  {
	  if($this->session->userdata('email'))
	  {
		  $this->load->view('studentheader');
		   $this->load->view('studdashboard');
	  }
	  else{
		  $this->lms();
	  }
  }
  
  function sviewcourse()
  {
	  if($this->session->userdata('email'))
	  {
		  $email=$this->session->userdata('email');
	 
	  $this->load->model('Skillmodel');
	  $data['records']=$this->Skillmodel->purchasedcourses($email);
	  $data1['records']=$this->Skillmodel->getstudent($email);
	  $this->load->view('studentheader',$data1);
	  $this->load->view('purchasedcourses',$data);
		  
	  }
	  else
	  {
		  $this->load->view('studentlogin');
	  }
	  
  }
  
  function studpurchasecourse()
  {
	  $email=$this->session->userdata('email'); 
	 $this->load->model('Skillmodel');
     $data['records']=$this->Skillmodel->studpurchasecourse($email);
	 $data1['records']=$this->Skillmodel->getstudent($email);
	  $this->load->view('studentheader',$data1);
	  $this->load->view('studpurchasecourse',$data);
     	 
  }
  
   function studentviewmodule()
 {
  $course_id=$this->uri->segment(3);

  $query=$this->db->get_where("skillxcourse",array("course_id"=>$course_id));
  $data1['records1']=$query->result();
 
  $query=$this->db->get_where("skillxcourse_module",array("course_id"=>$course_id));
  $data1['records2']=$query->result();
     
  $query=$this->db->get_where("skillxcourse_content",array("course_id"=>$course_id));
  $data1['records3']=$query->result();
  
  $this->load->view('studentheader1');
  $this->load->view('studentmoduleview',$data1);
 
 }
 
   function studentviewmodule1()
 {
  $course_id=$this->uri->segment(3);

  $query=$this->db->get_where("free_skillxcourse",array("course_id"=>$course_id));
  $data1['records1']=$query->result();
 
  $query=$this->db->get_where("free_skillxcourse_module",array("course_id"=>$course_id));
  $data1['records2']=$query->result();
     
  $query=$this->db->get_where("free_skillxcourse_content",array("course_id"=>$course_id));
  $data1['records3']=$query->result();
  
  $this->load->view('free_studentheader1');
  $this->load->view('free_studentmoduleview',$data1);
 
 }
 
 function fetchcontent()
 {
	 $content_id=$this->uri->segment(3);
	 $query=$this->db->get_where("skillxcourse_content",array("content_id"=>$content_id));
	 $data1['records4']=$query->result();
	 $this->load->view('studentheader1');
	 $this->load->view('studentiframe',$data1);
 }
  function fetchcontent1()
 {
	 $content_id=$this->uri->segment(3);
	 $query=$this->db->get_where("free_skillxcourse_content",array("content_id"=>$content_id));
	 $data1['records4']=$query->result();
	 $this->load->view('free_studentheader1');
	 $this->load->view('studentiframe',$data1);
 }
 function instructorfetchcontent()
 {
	 $content_id=$this->uri->segment(3);
	 $query=$this->db->get_where("skillxcourse_content",array("content_id"=>$content_id));
	 $data1['records4']=$query->result();
	 $this->load->model('Skillmodel');
	 $email=$this->session->userdata('email');
	 $data1['records']=$this->Skillmodel->getinstructor($email);
	 $this->load->view('instructorheader',$data1);
	 $this->load->view('studentiframe',$data1);
 }
 
 function adminfetchcontent()
 {
	 if($this->session->userdata('email'))
	 {
		 $content_id=$this->uri->segment(3);
	 $query=$this->db->get_where("skillxcourse_content",array("content_id"=>$content_id));
	 $data1['records4']=$query->result();
	 $this->load->model('Skillmodel');
     $email=$this->session->userdata('email');
	$data2['records']=$this->Skillmodel->getcompany($email);
    $this->load->view('companyheader',$data2);
	 $this->load->view('studentiframe',$data1);
		 
	 }
	 else{
		 $this->load->view('adminlogin');
	 }
	 
 }
 
 
 function instructoraddcourse()
 {
	 if($this->session->userdata('email'))
	 {
		 $id=$this->uri->segment('3');
		 $email=$this->session->userdata('email');
		 $this->load->model('Skillmodel');
		 $data1['records']=$this->Skillmodel->getinstructor($email);
		 $data2['records']=$this->Skillmodel->getcompany1($id);
		$this->load->view('instructorheader',$data1);
	    $this->load->view('instructoraddcourse',$data2); 
	 }
	 else{
		 $this->load->view('instructorlogin');
	 }
	 
 }
 
 function notunformesechay2()
 {
	 		//the document upload script
$binod=array(

'upload_path'=>'./uploads/courses',
'allowed_types'=>'jpg|png|jpeg',
'max_size'=>4000

);

$this->load->library("upload",$binod);

if(!$this->upload->do_upload('userfile'))
{
	echo $this->upload->display_errors();
}
else
{
	$fd=$this->upload->data();
	$fn=$fd['file_name'];
}

	 
	 
	
      $data=array("course_name"=>$this->input->post("course_name"),"description"=>$this->input->post("description"),"duration"=>$this->input->post("duration"),"course_price"=>$this->input->post("course_price"),'thumbnail' => $fn,"company_id"=>$this->input->post("company_id"));
      $this->load->model('Skillmodel');
	  $response=$this->Skillmodel->addnotuncourse($data); 
      $this->session->set_flashdata('msg1',"Course Inserted Successfully");
      $this->session->set_flashdata('msg_class','alert-success');
	  $email=$this->session->userdata('email');
	  $data1['records']=$this->Skillmodel->getinstructor($email);
      $this->load->view('instructorheader',$data1);
      print "<script type=\"text/javascript\">alert('Course added successfully');</script>";
 }
 
 function newstudentsignup()
 {
	 $this->load->view('newstudentsignup');
 }
 
 function instructoraddmodule()
 {
	 $id=$this->uri->segment('3');
	 $this->db->where('company_id',$id);
	 $query2=$this->db->get("skillxcourse");
    $data2['records2']=$query2->result();
	
	$this->load->model('Skillmodel');
	$email=$this->session->userdata('email');
	$data1['records']=$this->Skillmodel->getinstructor($email);
    $this->load->view('instructorheader',$data1);
    $this->load->view('instructoraddmodule',$data2);
    
 }
 
 function addmoduledo2()
 {
	  $data=array("course_id"=>$this->input->post("cat_id"), "module_name"=>$this->input->post("module_name"));
    $this->session->set_flashdata('msg1',"Module Inserted Successfully");
    $this->session->set_flashdata('msg_class','alert-success');
	$this->load->model('Skillmodel');
    $response=$this->Skillmodel->addmodule($data); 
	print "<script type=\"text/javascript\">alert('Module added successfully');</script>";
	$email=$this->session->userdata('email');
	$data1['records']=$this->Skillmodel->getinstructor($email);
    $this->load->view('instructorheader',$data1);
   
 }
 
 function instructoraddcontent()
 {
	 $id=$this->uri->segment('3');
	 $this->db->where('company_id',$id);
	 $query2=$this->db->get("skillxcourse");
    $data2['records2']=$query2->result();
    $query2=$this->db->get("skillxcourse_module");
    $data2['records']=$query2->result();
	
   $email=$this->session->userdata('email');
   $this->load->model('Skillmodel');
	$data1['records']=$this->Skillmodel->getinstructor($email);
    $this->load->view('instructorheader',$data1);
    $this->load->view('instructoraddcontent',$data2);
 }
 
 function instructoraddcontentdo()
 {
	  //the document upload script
$binod=array(

'upload_path'=>'./uploads/images',
'allowed_types'=>'jpg|png|jpeg|pdf',
'max_size'=>4000

);

$this->load->library("upload",$binod);

if(!$this->upload->do_upload('userfile'))
{
	echo $this->upload->display_errors();
}
else
{
	$fd=$this->upload->data();
	$fn=$fd['file_name'];
}
        
        $data=array("course_id"=>$this->input->post("cat_id"), "module_id"=>$this->input->post("cat"),'file_name' => $fn,'status'=>$this->input->post('status'));
        $this->session->set_flashdata('msg1',"Content Inserted Successfully");
        $this->session->set_flashdata('msg_class','alert-success');
		$this->load->model('Skillmodel');
        $response=$this->Skillmodel->addcontent($data); 
			print "<script type=\"text/javascript\">alert('Content added successfully');</script>";

        $email=$this->session->userdata('email');

	$data1['records']=$this->Skillmodel->getinstructor($email);
    $this->load->view('instructorheader',$data1);
 }
 
 function iviewcourse()
 {
	 if($this->session->userdata('email'))
	 {
		
		$id=$this->uri->segment('3');
		
		$email=$this->session->userdata('email');
		
		 $this->load->model('Skillmodel');
		 $data1['records']=$this->Skillmodel->getinstructor($email);
		 
		 $data['records']=$this->Skillmodel->iviewcourse($id);
		 $this->load->view('instructorheader',$data1);
		 $this->load->view('iviewcourse',$data);
	 }
	 else
	 {
		 $this->load->view('instructorlogin');
	 }
 }
 
 function instructorviewmodule()
 {
	 if($this->session->userdata('email'))
  {
    $course_id=$this->uri->segment(3);

    $query=$this->db->get_where("skillxcourse",array("course_id"=>$course_id));
    $data1['records1']=$query->result();
   
    $query=$this->db->get_where("skillxcourse_module",array("course_id"=>$course_id));
    $data1['records2']=$query->result();
       
    $query=$this->db->get_where("skillxcourse_content",array("course_id"=>$course_id));
    //$query=substr(($this->db->get('course_content')->result()), 0, 10);
    $data1['records3']=$query->result();
    $this->load->model('Skillmodel');
	$email=$this->session->userdata('email');
	$data1['records']=$this->Skillmodel->getinstructor($email);
    $this->load->view('instructorheader',$data1);
    $this->load->view('moduleview1',$data1);
    
  }else{
    $this->load->view('instructorlogin');
  }
 }
 
 
 
 function amigo()
 {
	 $this->load->view('amigo');
 }
 
 function isac()
 {
	  $this->load->view('isac');
 }
 
 function sirena()
 {
	 $this->load->view('sirena');
 } 
 
 function lsbr()
 {
	 $this->load->view('lsbr');
 }

 function superadminlogin()
 {
  $this->load->view('superadminlogin');
 }

 
	
}




?>