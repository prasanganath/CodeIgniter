<?php
	/**
	 * 
	 */
	class Post_model extends CI_Model{
		
		public function __construct(){
			$this->load->database();
			
		}
		public function get_posts($slug = FALSE){
			if ($slug === FALSE){
				 $this->db->order_by('posts.id', 'DESC');
				 $this->db->join('catagories', 'catagories.id = posts.catagory_id');
				 $query = $this->db->get('posts'); 
				 return $query->result_array();
				
			}
			$query = $this->db->get_where('posts', array('slug' => $slug));
			return $query->row_array();
		}

		public function create_post($post_image){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
				'catagory_id' => $this->input->post('catagory_id'),
				'user_id' => $this->session->userdata('user_id'),
				'post_image' => $post_image 



			);
			return $this->db->insert('posts', $data);
			

		}

		public function delete_post($id){
			$this->db->where('id', $id);
			$this->db->delete('posts');
			return true;


		}

		public function update_post(){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
				'catagory_id' => $this->input->post('catagory_id')



			);
            
            $this->db->where('id', $this->input->post('id'));
			return $this->db->update('posts', $data);


		}	

		public function get_catagories(){
			$this->db->order_by('name');
			$query = $this->db->get('catagories');
			return $query->result_array();

		}

		public function get_posts_by_category($catagory_id){
			$this->db->order_by('posts.id', 'DESC');
			
			$this->db->join('catagories', 'catagories.id = posts.catagory_id');
			  $query = $this->db->get_where('posts', array('catagory_id' => $catagory_id));
			return $query->result_array();  


		}
	}