<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
     * Class of User controller
     * 
     * @author Samu Rintala
     */
class User extends CI_Controller {
  
/**
     * Lataa user modellin ja helpereita
     * 
     * @param       -
     * @return      -
     */
public function __construct(){
        parent::__construct();
  			$this->load->helper('url','url_helper','form');
  	 		$this->load->model('user_model');
        //$this->load->libraries('session');
}
/**
     * Lataa register näkymän ja templatet
     * 
     * @param       -
     * @return      -
     */
public function index()
{
$data['title'] = 'Rekisteröityminen';
$this->load->view('templates/header',$data);
$this->load->view('register');
$this->load->view('templates/footer');  
}
/**
     * Asettaa rekisteröitymislomakkeen säännöt
     * 
     * @param       -
     * @return      -
     */
private function set_rules() {
        $this->form_validation->set_rules('tunnus', 'tunnus',
        'trim|required');
        $this->form_validation->set_rules('sposti', 'sposti',
        'trim|required');
        $this->form_validation->set_rules('salasana', 'salasana', 
        'trim|required');
        $this->form_validation->set_rules('asnimi', 'asnimi',
        'trim|required');
         $this->form_validation->set_rules('osoite', 'osoite',
        'trim|required');
         $this->form_validation->set_rules('postitmp', 'postitmp',
        'trim|required');
         $this->form_validation->set_rules('postinro', 'postinro',
        'trim|required');
}
/**
     * Rekisteröi asiakkaan ja tarkistaa onko sähköpostia ennestään tietokannassa
     * 
     * @param       -
     * @return      -
     */
public function register_user(){
      $this->set_rules();
      $user=array(
      'tunnus'=>$this->input->post('tunnus'),
      'sposti'=>$this->input->post('sposti'),
      'salasana'=>md5($this->input->post('salasana')),
      'asnimi'=>$this->input->post('asnimi'),
      'osoite'=>$this->input->post('osoite'),
        );
        print_r($user);
        
      $post=array(
      'tunnus'=>$this->input->post('tunnus'),
      'postitmp'=>$this->input->post('postitmp'),
      'postinro'=>$this->input->post('postinro')
        );  
 
$email_check=$this->user_model->email_check($user['sposti']);
 
if($email_check){
  $this->user_model->register_user($user,$post);
  $this->session->set_flashdata('success_msg', 'Register successful. You may log in now.');
  redirect('login');
 
}
else{
 
  $this->session->set_flashdata('error_msg', 'An error has occured, try again.');
  redirect('user');
 
 
  }
}

/**
     * Lataa login näkymän ja templatet
     * 
     * @param       -
     * @return      -
     */
public function login_view(){
 
 $data['title'] = 'Kirjautuminen';
        $this->load->view('templates/header',$data);
        $this->load->view('login');
        $this->load->view('templates/footer');
}

/**
     * Kirjaa asiakkaan sisään ja uudelleen ohjaa etusivulle
     * 
     * @param       -
     * @return      -
     */
function login_user(){ 
  
  
  $user_login=array(
 
  'sposti'=>$this->input->post('sposti'),
  'salasana'=>md5($this->input->post('salasana'))
  
    ); 
    $data['users']=$this->user_model->login_user($user_login);
      if($data)
      {
        
        if ($data['users'] == 'Väärä salasana') {
          $this->session->set_flashdata('error_msg', 'The password or email you entered is wrong.');
          redirect('printshop/login');
        }
        else {
        $this->session->set_userdata('user_id',$data['users'][0]['tunnus']);
        $this->session->set_userdata('sposti',$data['users'][0]['sposti']);
        $this->session->set_userdata('asnimi',$data['users'][0]['asnimi']);
        $this->session->set_userdata('osoite',$data['users'][0]['osoite']);
        $this->session->set_userdata('postitmp',$data['users'][0]['postitmp']);
        $this->session->set_userdata('postinro',$data['users'][0]['postinro']);
        
        //$data['title'] = 'Profile';
        $data['posti'] = $this->user_model->get_post($data['users'][0]['tunnus']);
        redirect('printshop/index');
        }
      }
     else{
       $this->session->set_flashdata('error_msg', 'An error has occured, Try again.');
       //$this->load->view("login.php");
 
      }
}

/**
     * Lataa käyttäjän tiedot tietokannasta sekä näkymän ja templaten
     * 
     * @param       -
     * @return      -
     */
     
function user_profile() {
  $data['title'] = 'Profile';
  //$data['users'] = $this->user_model->get_post('user_id',$user);
  //$data['posti'] = $this->user_model->get_post();
  $this->load->view('templates/header',$data);
  $this->load->view('user_profile',$data);
  $this->load->view('templates/footer'); 
}

/**
     * Lopettaa istunnon ja uudelleenohjaa login näkymään
     * 
     * @param       -
     * @return      -
     */
public function user_logout(){
 
  $this->session->sess_destroy();
  redirect('login', 'refresh');
}
 
}
 
?>