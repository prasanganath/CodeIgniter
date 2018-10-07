<?php
	/**
	 * 
	 */
	class Category_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function get_catagories(){
			$this->db->order_by('name');
			$query = $this->db->get('catagories');
			return $query->result_array();

		}

		
		public function create_category(){
			$data = array(
				'name'=> $this->input->post('name')


			);
			return $this->db->insert('categories', $data);

			# code...
		}
	}