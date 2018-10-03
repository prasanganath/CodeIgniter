<?php
	/**
	 * 
	 */
	class Post_model extends CI_Model{
		
		public function __construct(){
			$this->load->database();
			# code...
		}
		public function get_posts($slug = FALSE){
			if ($slug === FALSE){
				 $query = $this->db->get('posts');
				 return $query->result_array();
				# code...
			}
			$query = $this->db->get_where('posts', array('slug' => $slug));
			return $query->row_array();
		}
	}