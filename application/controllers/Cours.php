
<?php

class Cours extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();

      $this->load->model('cours_model');
   }

   public function index()
   {

      // On récupère le titre du cours en fonction de son ID en BDD
      $data['titre'] = $this->db->get('titre');
      // On applique la methode GET afin de recupérer son ID
      $data['id'] = $_GET['id'];
      // Si l'id est different de nul dans le tableau data 
      // alors on récupère UN exerice en fonction de son Id
      // on utilise getexo pour nous renvoyé le cours.
      if ($data['id'] != '') {
         $data['cour'] = $this->cours_model->getcours($data['id']);
         $data['cours_html'] = $this->cours_model->cour();
      } else {
         // On renvoie tout
         $data['cours'] = $this->cours_model->getcours();
         $data['cour']['titre'] = 'tous les cours';
      }

      $this->load->view('common/header', $data);
      $this->load->view('site/cours', $data);
      $this->load->view('common/footer');
   }
   // public function views()
   // {
   //    $data['cours'] =  $this->cours_model->getcours();
   //    $data['titre'] = 'Liste des cours';

   //    $this->load->view('templates/header', $data);
   //    $this->load->view('cour/coursView', $data);
   //    $this->load->view('templates/footer');
   // }

   // public function OnCours($id)
   // {
   //    $data['cour'] = $this->cours_model->getcours($id);
   //    $data['title'] = $data['cour']['titre'];
   //    $this->load->view('templates/header', $data);
   //    $this->load->view('cour/OnCours', $data);
   //    $this->load->view('templates/footer');
   // }
}
