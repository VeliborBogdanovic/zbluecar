<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminPanel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
                
	}

	public function _example_output($output = null)
	{       
                
		$this->load->view('example.php',$output);
	}

	public function modifyAds()
        {
            $this->load->model('meni_model','mm');
                $rez= $this->mm->meni();
                $data['meni']=$rez;
               
            $this->load->library('grocery_CRUD');
            $crud=new Grocery_CRUD();
            $crud->set_table('ads');
            $output=$crud->render();
            
            $this->load->view('meni',$data);
            $this->load->view('header',$data);
            $this->load->view('example.php',$output);
        
            
        }
        public function modifyMeni()
        {
            
            
            $this->load->model('admin_model','am');
            $data['meni']=$this->am->meni();
            $this->load->view('header',$data);
            $this->load->view('meni',$data);
            $this->load->view('admin/meni.php',$data);
            
        }
        public function modifyBrands()
        {
            $this->load->library('grocery_CRUD');
            $crud=new Grocery_CRUD();
            $crud->set_table('brands');
            $output=$crud->render();
            $this->load->model('meni_model','mm');
                $rez= $this->mm->meni();
                $data['meni']=$rez;
                 $this->load->view('header',$data);
            $this->load->view('meni',$data);
            $this->load->view('example.php',$output);
        
            
        }
        public function modifyFuels()
        {
            $this->load->library('grocery_CRUD');
            $crud=new Grocery_CRUD();
            $crud->set_table('fuels');
            $output=$crud->render();
            $this->load->model('meni_model','mm');
                $rez= $this->mm->meni();
                $data['meni']=$rez;
                 $this->load->view('header',$data);
            $this->load->view('meni',$data);
            $this->load->view('example.php',$output);
        
            
        }
        public function modifyUsers()
        {
            $this->load->library('grocery_CRUD');
            $crud=new Grocery_CRUD();
            $crud->set_table('users');
            $output=$crud->render();
            $this->load->model('meni_model','mm');
                $rez= $this->mm->meni();
                $data['meni']=$rez;
                 $this->load->view('header',$data);
            $this->load->view('meni',$data);
            $this->load->view('example.php',$output);
        
            
        }
        

	public function index()
	{
            $this->load->model('meni_model','mm');
                $rez= $this->mm->meni();
                $data['meni']=$rez;
                $this->load->view('meni',$data);
                 $this->load->view('header',$data);
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}
            public function modifyPolls()
        {
            $this->load->model('meni_model','mm');
                $rez= $this->mm->meni();
                $data['meni']=$rez;
               
            $this->load->library('grocery_CRUD');
            $crud=new Grocery_CRUD();
            $crud->set_table('polls');
            $output=$crud->render();
            
            $this->load->view('meni',$data);
            $this->load->view('header',$data);
            $this->load->view('example.php',$output);
        
            
        }
        public function modifyQuestions()
        {
            $this->load->model('meni_model','mm');
                $rez= $this->mm->meni();
                $data['meni']=$rez;
               
            $this->load->library('grocery_CRUD');
            $crud=new Grocery_CRUD();
            $crud->set_table('questions');
            $output=$crud->render();
            
            $this->load->view('meni',$data);
            $this->load->view('header',$data);
            $this->load->view('example.php',$output);
        
            
        }
        public function modifyAnswers()
        {
            $this->load->model('meni_model','mm');
                $rez= $this->mm->meni();
                $data['meni']=$rez;
               
            $this->load->library('grocery_CRUD');
            $crud=new Grocery_CRUD();
            $crud->set_table('answers');
            $output=$crud->render();
            
            $this->load->view('meni',$data);
            $this->load->view('header',$data);
            $this->load->view('example.php',$output);
        
            
        }
	

	

	
	
	}

