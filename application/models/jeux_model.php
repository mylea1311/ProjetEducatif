<?php

class Jeux_model extends CI_Model
{
   function __construct()
   {
      $this->load->database();
      $this->load->helper('array');
   }

   //recupère l'exercice en bdd en fonction de son ID

   public function getjeux($id = 0)
   {
      if ($id == 0) {
         $query = $this->db->get('jeux');
         return $query->result_array();
      } else {
         $query = $this->db->get_where('jeux', array('idJeux' => $id));
         return $query->row_array();
      }
   }


   // public function getexomath($id = 0)
   // {
   //    if ($id == 0) {
   //       $query = $this->db->get('exerciceMath');
   //       return $query->result_array();
   //    } else {
   //       $query = $this->db->get_where('exerciceMath', array('idExercice1' => $id));
   //       return $query->row_array();
   //    }
   // }
}
