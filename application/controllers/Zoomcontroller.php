<?php
class Zoomcontroller extends CI_Controller
{
  function __construct()
 {
  parent::__construct();
  $this->load->database(); 
  $this->load->helper('url');
  $this->load->helper('file'); 
  $this->load->library('session');
 }
 
 function index()
 {
	 echo "zoom controller arrived";
 }
 
 function liveclass()
 {
	 $this->load->model('Skillmodel');
	 if($this->Skillmodel->checktoken()==0)
	 {
		 $this->load->view('liveclass');
	 }
	 else{
		 $this->Skillmodel->deletetoken();
		 redirect('/Zoomcontroller/liveclass');
	 }

 }
 

 
 function studentliveclass()
 {
	 $this->load->model('Skillmodel');
	 if($this->Skillmodel->meetingdetails()==0)
	 {
		 echo "<h1>No meeting as of now to attend</h1>";
	 }
	 else
	 {
		 $data['records']=$this->Skillmodel->meetingdetails();
		 $this->load->view('studentslive',$data);
	 }
	 
	 
 }
 
 
 
 
}


?>