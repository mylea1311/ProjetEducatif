<?php

class Site extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();

      // On charge nos Model afin de s'appuyer dessus lors de la construction de notre controller
      $this->load->model('exercice_model');
      $this->load->model('cours_model');
      $this->load->model('auth_model');
   }

   public function index()
   {
      // On stock la variable title dans data afin d'afficher le titre d'une page


      $data["title"] = "Page d'accueil";
      $this->load->view('common/header', $data);
      $this->load->view('site/index', $data);
      $this->load->view('common/footer', $data);
   }


   // Fonction apropos, sert de page squellette...
   public function apropos()
   {
      // on recupère le titre
      $data["title"] = "A propos";

      // On charge les vues avec ses parametre 
      $this->load->view('common/header', $data);
      $this->load->view('site/apropos', $data);
      $this->load->view('common/footer', $data);
   }


   public function membres()
   {
      //Création de la page membres
      $data["title"] = "Membres";
      $this->load->view('common/header', $data);
      $this->load->view('site/membres', $data);
      $this->load->view('common/footer', $data);
   }



   public function cour()
   {
      //    // On stock la variable title dans data afin d'afficher le titre d'une page
      $data["title"] = "cours";

      // Dans la variable cours on utilise le model afin de récupérer la fonction getcours() 
      // getcours() qui nous affichera la totalité de nos cours stocker en BAse de DOnnée 
      $data['cours'] = $this->cours_model->getcours();

      $this->load->view('common/header', $data);
      $this->load->view('site/cour', $data);
      $this->load->view('common/footer', $data);
   }
}
