<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        
        $this->load->model('user_model');
        $this->load->library('session');
        $this->load->library('encryption');
      }
    public function index()
	{
        $data['users'] = $this->user_model->getResult('users');
		$this->load->view('header');
		$this->load->view('users/list',$data);
		$this->load->view('footer');
    }
    public function add_new()
	{
        $memberIdMax = $this->user_model->getMaxRow('users','member_id');
        $member_id = ($memberIdMax['member_id']) ? ($memberIdMax['member_id']+1) : 854321;
        if(isset($_POST['submit'])){
           $email_exists = $this->user_model->getRow('users',array('email'=>$_POST['email']));
           $alreadyEmailExists = ($email_exists['email']) ? true: false;
           if($alreadyEmailExists==true){
            $this->session->set_flashdata('message', 'Email already exists');
            redirect('/index.php/user/add_new','location',301);
           }
           
            $dataArray['username'] = $_POST['username'];
            $dataArray['email'] = $_POST['email'];
            $dataArray['password'] = $this->encryption->encrypt($_POST['password']);
            $dataArray['pin'] = $_POST['pin'];
            $dataArray['company'] = $_POST['company'];
            $dataArray['created_date'] = date("Y-m-d H:i:s");
            $dataArray['member_id'] = $member_id;
            $dataArray['token'] = $this->RandomString();
            $dataArray['wallet_balance'] = 0.0;
            $this->user_model->insert_entry('users',$dataArray);
            redirect('/index.php/user','location',301);
        }
        $data['member_id'] = $member_id;
		$this->load->view('header');
		$this->load->view('users/add_new',$data);
		$this->load->view('footer');
    }
    public function test(){
         $memberIdMax = $this->user_model->getMaxRow('users','member_id');
        // print_r($memberIdMax);

         $plain_text = 'This is a plain-text message!';
echo $ciphertext = $this->encryption->encrypt($plain_text);
echo "<br>";
// Outputs: This is a plain-text message!
echo $this->encryption->decrypt($ciphertext);
    }
    function RandomString($length = 32) {
        $randstr="";
        srand((double) microtime(TRUE) * 1000000);
        //our array add all letters and numbers if you wish
        $chars = array(
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'p',
            'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5',
            '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 
            'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
    
        for ($rand = 0; $rand <= $length; $rand++) {
            $random = rand(0, count($chars) - 1);
            $randstr .= $chars[$random];
        }
        return $randstr;
    }
    
}
