<?php

class Jeux extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();

      //Appel du model exercice 
      $this->load->model('jeux_model');
      $this->load->helper('url');
      $this->load->library('session');
   }

   public function index($id = 0)
   {

      $data['jeux'] = $this->jeux_model->getjeux($id);



      $this->load->view('common/header', $data);
      $this->load->view('site/jeux', $data);
      // $this->load->view('common/footer');
      var_dump($data['jeux']);
   }
   public function show($id)
   {
      $data['jeux'] = $this->jeux_model->getjeux($id);

      include('jeux/' . $id . '.php');

      $this->load->view('common/header');
      $this->load->view('site/jeux/' . $id,  $data);
   }
}
