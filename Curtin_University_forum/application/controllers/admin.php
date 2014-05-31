<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->view('header');
                $this->load->view('footer');
                $this->load->view('admin_leftside');
	}
        public function view_admin_post_problem(){
            $this->load->view('header');
                $this->load->view('footer');
                $this->load->view('admin_post_problems');
                $this->load->view('admin_leftside');
        }
        public function view_admin_share_idea(){
            $this->load->view('header');
                $this->load->view('footer');
                $this->load->view('admin_post_ideas');
                $this->load->view('admin_leftside');
        }
        public function admin_edit_other_profile(){
               $this->load->view('header');
                $this->load->view('footer');
                $this->load->view('edit_other_profile');
                $this->load->view('admin_leftside');
        }
        
}