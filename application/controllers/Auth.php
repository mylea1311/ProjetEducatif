<?php

class Auth extends CI_Controller
{

   public function __construct()
   {

      parent::__construct();
      $this->load->helper('url');
      $this->load->library('session');
      $this->load->library('email');
   }

   public function login()
   {

      // Verification des règle du formulaire
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      if ($this->form_validation->run() == TRUE) {


         $username = $_POST['username'];
         $password = md5($_POST['password']);

         // check user in database 
         $this->db->select('*');
         $this->db->from('users');
         $this->db->where(array('username' => $username, 'password' => $password));
         $query =   $this->db->get();

         $user = $query->row();
         // if user exist :

         if ($user->email) {
            // tempory message
            $this->session->set_flashdata("success", "Tu es connecté");

            // set session variable 
            $_SESSION['user_logged'] = TRUE;
            $_SESSION['username'] = $user->username;

            // redirect to profil page 

            redirect("user/profile", "refresh");
         } else {
            $this->session->set_flashdata("error", "une erreur s'est produite");
            redirect("auth/login", "refresh");
         }
      }
      // echo 'login page';
      $this->load->view('login');
   }

   public function register()
   {
      //load view 

      if (isset($_POST['register'])) {
         $this->form_validation->set_rules('username', 'Username', 'required');
         $this->form_validation->set_rules('email', 'Email', 'required');
         $this->form_validation->set_rules('password', 'Password', 'required');
         $this->form_validation->set_rules('password', 'Confirm Password', 'required|matches[password]');
         $this->form_validation->set_rules('phone', ' Phone', 'required');

         // if form validation true : 
         if ($this->form_validation->run() == TRUE) {
            // echo 'form validated';

            //add user in database


            $data = array(
               'username' => $_POST['username'],
               'email ' => $_POST['email'],
               'password' => md5($_POST['password']),
               'gender' => $_POST['gender'],
               'created_date' => date('Y-m-d'),
               'phone' => $_POST['phone'],
            );

            $this->db->insert('users', $data);

            $this->session->set_flashdata("success", "ton compte a etait enregistré tu peux login now");


            $this->email->from('inscriptionMonsite@kikoo.com', 'Kikoo');
            $this->email->to($_POST['email']);

            $this->email->subject('Inscription Kikoo');
            $this->email->message('Bienvenue sur Kikoo votre inscription est prise en compte.');

            $this->email->send();



            // $config = array();
            // $config['protocol'] = 'smtp';
            // $config['smtp_host'] = 'localhost';
            // $config['smtp_user'] = 'inscriptionMonsite@kikoo.com';
            // $config['smtp_pass'] = '';
            // $config['smtp_port'] = 25;
            // $this->email->initialize($config);
            // $this->email->set_newline("\r\n");

            if ($this->email->send(FALSE)) {
               echo "if " . $_POST['email'];
               exit;
            } else {
               echo "else " . $_POST['email'];
               exit;
            }

            redirect("auth/register", "refresh");
         }
      }
      $this->load->view('register');
   }

   public function logout()
   {

      unset($_SESSION);
      session_destroy();
      redirect('auth/login', "refresh");
   }
}
