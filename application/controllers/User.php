<?php

class User extends CI_Controller
{


   public function __construct()
   {
      parent::__construct();
      $this->load->helper('url');
      $this->load->library('session');
      if ($_SESSION['user_logged'] == FALSE) {
         $this->session->set_flashdata("error", " please login first");
         redirect("auth/login");
      }
   }



   public function profile()
   {
      $this->load->view('profile');
   }
}
