<?php

class model extends CI_Model {
    
   /**
       //funkce, která načte všechna data z databáze
    function nacti() {
        $this->db->select("*");
        $this->db->from("uzivatel");
        $query = $this->db->get();
        return $query;
    }
 
    * 
    * @return type
    */ 
    
   function lokace(){
       $this->db->select("*"); 
       $this->db->from("skola");
        $query = $this->db->get();
        return $query;
       
   }
           
    function nacti(){
    
 
   $this->db->select("m.nazev_mesta, s.nazev_skoly, o.nazev, p.pocet");
   $this->db->from("mesto AS m");
   $this->db->order_by('nazev_mesta');
    $this->db->join("skola AS s", "m.id = s.mesto", 'inner');
    $this->db->join("pocet_prijatych AS p", "p.skola = s.id", 'inner');
    $this->db->join("obor AS o", "o.id = p.obor", 'inner');

    
          $query = $this->db->get();
        return $query;

    }


    function nactiPrijate(){
         $this->db->select('nazev');
         $this->db->from('obor');
        
    } 
    

}
