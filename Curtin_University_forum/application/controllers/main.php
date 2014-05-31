<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
//		$this->load->view('header');
//                $this->load->view('footer');
//                 $this->load->view('Home');
//                $this->load->view('leftside');
            $this->load->view('welcome');
            
	}
        public function login(){
            $this->load->view('login');
        }

         public function dashboard(){
            $this->load->view('header');
                $this->load->view('footer');
                $this->load->view('Home');
                $this->load->view('leftside');
        }
        
        public function post_problem(){
            $this->load->view('header');
                $this->load->view('footer');
                $this->load->view('view_post_problem');
                $this->load->view('leftside');
        }
        public function share_idea(){
            $this->load->view('header');
                $this->load->view('footer');
                $this->load->view('share_an_idea');
                $this->load->view('leftside');
        }
        public  function registration(){
         
              
                $this->load->view('view_registration');
              
        }
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */