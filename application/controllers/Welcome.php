<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            
        $this->load->model("model");
        $data["nacti"] = $this->model->nacti();

        
        
		$this->load->view('header');
                $this->load->view('index',$data);
                $this->load->view('footer');
	
        } 
        
        public function login()
        {
          $this->load->view('header');  
          $this->load->view('login');  
        }
        
        public function map()
        {
          $this->load->model("model");
        $data["lokace"] = $this->model->lokace();  
            
          $this->load->view('header');  
          $this->load->view('map', $data);  
          $this->load->view('footer');
        }


        
        //ADMIN-------------------------------------------------------------
        public function indexA()
	{
             $this->load->model("model");
        $data["nacti"] = $this->model->nacti();

            
		$this->load->view('headerAdmin');
                $this->load->view('index', $data);
                $this->load->view('footer');
	}
        
         public function mapA()
        {
          $this->load->model("model");
        $data["lokace"] = $this->model->lokace();  
            
          $this->load->view('headerAdmin');  
          $this->load->view('map', $data);  
          $this->load->view('footer');
        }

        public function dataAdd() {
              $this->load->model("skola_model");
        $data["nactiMesto"] = $this->skola_model->nactiMesto(); 
            $this->load->view('headerAdmin');
             $this->load->view('pridatMesto');
                $this->load->view('pridatSkolu', $data);
                
             $this->load->view('footer');
        }
        
        
        public function mestoAdd()
        {
          $this->load->library('form_validation');   
           $this->form_validation->set_rules("nazev_mesta", "Název města", 'required');
           
           if ($this->form_validation->run()) {
            //true  
            $this->load->model("mesto_model");
            $data = array(
                "nazev_mesta" => $this->input->post("nazev_mesta")
                   );
         
          if ($this->input->post("insert")) {
                $this->mesto_model->vloz_data($data);
                redirect(base_url() . "welcome/inserted");
          }
         } 
         else {
            //false  
            $this->dataAdd();
        }
        }
        
        public function skolaAdd()
        {
          $this->load->library('form_validation');   
           $this->form_validation->set_rules("nazev_skoly", "Název školy", 'required');
           $this->form_validation->set_rules("geo_lat", "Geo lat", 'required');
           $this->form_validation->set_rules("geo_long", "Geo long", 'required');
           
           if ($this->form_validation->run()) {
            //true  
               
            $this->load->model("skola_model");
            $data = array(
                "nazev_skoly" => $this->input->post("nazev_skoly"),
                "geo_lat" => $this->input->post("geo_lat"),
                "geo_long" => $this->input->post("geo_long"),
                   );
         
          if ($this->input->post("insert")) {
                $this->skola_model->vloz_data($data);
                redirect(base_url() . "welcome/inserted");
          }
         } 
         else {
            //false  
            $this->dataAdd();
        }
        }
        
        public function inserted() {
        $this->dataAdd();
    } 
    
        public function odhlasit()
        {
             // zjistí relaci
        session_start();

//zruší všechny proměnné relace
        $_SESSION = array();

//zruší relaci
        session_destroy();

// přesměruje na přihlašovací stránku
        header("location:  index");
        exit;
        }
}
