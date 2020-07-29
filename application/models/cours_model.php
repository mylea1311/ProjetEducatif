<?php

class Cours_model extends CI_Model
{
   function __construct()
   {
      $this->load->database();
   }

   // Si l'id est egale à 0, dans query on retourne la table cour
   // et on récupère les resultat du contenue  sous form de tableau 
   // sinon, on récupère dans la table 'cour' son contenu en fonction de son ID
   public function getcours($id = 0)
   {
      if ($id == 0) {
         $query = $this->db->get('cour');
         return $query->result_array();
      } else {
         $query = $this->db->get_where('cour', array('idCour' => $id));
         return $query->row_array();
      }
   }
   public function cour($id = 0)
   {
   }
}
