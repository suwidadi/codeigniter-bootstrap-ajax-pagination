<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Page example
 *
 * A Web Page display list with Ajax Pagination
 *
 * @package		Publication
 * @author		Suwi D. Utomo
 * @copyright	Copyright (c) 2016, Brainsofmedia.com.
 * @license		MIT License
 * @link		http://www.brainsoftmedia.com
 * @since		Version 1.0
 * 
 */

class Page_example extends CI_Controller {
	
	function __construct()
    {
    	parent::__construct();
	}
	
	function index(){
		$this->load->library('Ajax_pagination');
		
		$per_page 						= 5;
		$page_name 						= 'book';
		$fields_name 					= array();
		$offset 						= $this->uri->segment(3,0)=="" ? '0' : $this->uri->segment(3,0);
		$order_by 						= array();
		$where 							= array('prd_tipe'=>'1');
		$where_like 					= array();
			
		$hasil 							= $this->db->query('SELECT * FROM tbl_students LIMIT '.$per_page.' OFFSET '.$offset);
		$all_data 						= $this->db->query('SELECT * FROM tbl_students');
		
		$config['base_url']				= 'index.php/page_example/students';
		$config['total_rows']			= count($all_data->result_array());
		$config['per_page']				= $per_page;
		$config['num_links']			= 5;
		$config['uri_segment'] 			= 3;
		$config['div'] 					= 'postList-'.$page_name;
		
		$config['full_tag_open'] 		= "<ul class='pagination'>";
		$config['full_tag_close'] 		="</ul>";
		
		$config['num_tag_open'] 		= '<li>';
		$config['num_tag_close'] 		= '</li>';
		
		$config['cur_tag_open'] 		= "<li class='disabled'><li class='active'><a href='#' data-url='index.php/page_example/book/1'>";
		$config['cur_tag_close'] 		= "<span class='sr-only'></span></a></li>";
		
		$config['next_tag_open'] 		= '<li id="idNext">';
		$config['next_link'] 			= '&gt;';
		$config['next_tag_close'] 		= "</li>";
		
		$config['prev_tag_open'] 		= '<li class="prev" id="idPrev">';
		$config['prev_link'] 			= '&lt;';
		$config['prev_tagl_close'] 		= "</li>";
		
		$config['first_tag_open'] 		= '<li id="idFirst">';
		$config['first_link'] 			= '&laquo;';
		$config['first_tagl_close'] 	= "</li>";
		
		$config['last_tag_open'] 		= '<li id="idLast">';
		$config['last_link'] 			= '&raquo;';
		$config['last_tagl_close'] 		= "</li>";
		
		$this->ajax_pagination->initialize($config);
		$this->data['pagination'] 		= $this->ajax_pagination->create_links();
		$this->data['records'] 			= $hasil->result();
		$this->data['page_name'] 		= $page_name;
		
		$this->data['page'] 			= "students";
		
		$this->load->view('v_example',$this->data);
	}
	
	function students(){
		$this->load->library('Ajax_pagination');
		
		$per_page 						= 5; 
		$page_name 						= 'students';
		$fields_name 					= array();
		$offset 						= $this->uri->segment(3,0)=="" ? '0' : $this->uri->segment(3,0);
		
		$hasil 							= $this->db->query('SELECT * FROM tbl_students LIMIT '.$per_page.' OFFSET '.$offset);
		$all_data 						= $this->db->query('SELECT * FROM tbl_students');
				
		$num_links 						= 5;
		
		$config['base_url']				= 'index.php/page_example/students';
		$config['total_rows']			= count($all_data->result_array());
		$config['per_page']				= $per_page;
		$config['num_links']			= $num_links;
		$config['uri_segment'] 			= 3;
		$config['div'] 					= 'postList-'.$page_name;
			
		$config['first_link'] 			= "<<";
		$config['full_tag_open'] 		= "<ul class='pagination'>";
		$config['full_tag_close'] 		="</ul>";
		$config['num_tag_open'] 		= '<li>';
		$config['num_tag_close'] 		= '</li>';
		$config['cur_tag_open'] 		= "<li class='disabled'><li class='active'><a href='#' data-url='index.php/publication/students/1'>";
		$config['cur_tag_close'] 		= "<span class='sr-only'></span></a></li>";
		
		$config['next_tag_open'] 		= '<li id="idNext">';
		$config['next_link'] 			= '&gt;';
		$config['next_tag_close'] 		= "</li>";
		
		$config['prev_tag_open'] 		= '<li class="prev">';
		$config['prev_link'] 			= '&lt;';
		$config['prev_tagl_close'] 		= "</li>";
		
		$config['first_tag_open'] 		= "<li>";
		$config['first_link'] 			= '&laquo;';
		$config['first_tagl_close'] 	= "</li>";
		
		$config['last_tag_open'] 		= "<li>";
		$config['last_link'] 			= '&raquo;';
		$config['last_tagl_close'] 		= "</li>";
		
		$this->ajax_pagination->initialize($config); 
		$this->data['pagination'] 		= $this->ajax_pagination->create_links();
		
		$this->data['records'] 			= $hasil->result();
		$this->data['page_name'] 		= $page_name;
		
		$this->load->view('v_example_content',$this->data);
		
	}
	
	function Record_add(){
		$faker = Faker\Factory::create();
		for ($i=1; $i < 101; $i++) {
			//echo $faker->address, "<br/>";
			$data = array('id'=>$i,'name'=>$faker->name,'address'=>$faker->address,'email'=>$faker->email);
			$this->db->insert('tbl_students',$data);
			echo '<pre>';
			print_r($data);
			echo '</pre>';
		}
	}
}