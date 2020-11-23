<?php

class skola_model extends CI_Model {

    
        function vloz_data($data) {
        $this->db->insert("skola", $data);
       
    }
    

    function nactiMesto() {
        $this->db->select('nazev_mesta');
        $this->db->from('mesto');
         $query = $this->db->get();
        return $query;
    }
  
}
        