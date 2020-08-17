<?php

class Exercice extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();

      //Appel du model exercice 
      $this->load->model('exercice_model');
      $this->load->helper('url');
      $this->load->library('session');
   }

   // METHODE VUE
   public function index($id = 0)
   {
      //$data['titre'] = $this->db->get('titre');
      //$data['id'] = $_GET['id'];
      $data['exercices'] = $this->exercice_model->getExo($id);

      //data['exercice'] = $this->exercice_model->exo();
      // Si l'id est different de nul dans le tableau data 
      // alors on récupère UN exerice en fonction de son Id
      // on utilise getexo pour nous renvoyé l'exercice.

      /* if ($data['id'] != '') {
         //$data['exercice'] = $this->exercice_model->getexo($data['id']);
         $data['exercice_html'] = $this->exercice_model->exo();


         //  include($data['id']);
      } else {
         // On renvoie tout
         $data['exercices'] = $this->exercice_model->getexo();
         //$data['exercice']['titre'] = 'tous les exos';
      }
      // vérification des données envoyé dans la vue.
      //  var_dump($data);*/
      $this->load->view('common/header', $data);
      $this->load->view('site/exercice', $data);
      $this->load->view('common/footer');
   }

   /*  get_by_id(id) {
      this->exercice_model->get_exo(id)
   }
   get_exo(id) {
      this->get()
   }
   */



   public function show($id, $difficulter)
   {

      $data['exercice'] = $this->exercice_model->getexo($id);

      $formulaire_exercice = '';
      $message_reponse = '';
      $lettres_mot = '';

      include('Exercices/' . $id . '.php');

      $plusdur = $difficulter + 10;
      $moindur = $difficulter - 10;

      if ($moindur < 5)
         $moindur = 5;

      $data['plusdur'] = $plusdur;
      $data['moindur'] = $moindur;

      $data['formulaire_exercice'] = $formulaire_exercice;
      $data['message_reponse'] = $message_reponse;
      if (isset($calcule))
         $data['calcule'] = $calcule;
      if (isset($_SESSION['point']))
         $data['point'] = $_SESSION['point'];

      $data['lettres_mot'] = $lettres_mot;

      if (isset($lettres_mot))
         $data['lettres_mot'] = $lettres_mot;
      if (isset($tableau))
         $data['tableau'] = $tableau;

      //      var_dump($_SESSION['point']);

      $this->load->view('common/header');
      $this->load->view('site/exercice/' . $id, $data);
      //$this->load->view('common/footer');
   }
}
