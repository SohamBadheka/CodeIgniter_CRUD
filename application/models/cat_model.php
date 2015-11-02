<?php

class Cat_model extends CI_Model {

	function get_data(){

						//get('table_name','no of records from the table','offset')
						
						//$this->db->select('title');
						$q = $this->db->get('wp_app_category');

						return $q->result();
					}


	function add_data($data)
						{
						
							$this->db->insert('wp_app_category',$data);
							return;

						}

function update_data($data)
						{
						
							$q = $this->db->where('cat_id',$this->uri->segment(3));
							$this->db->update('wp_app_category',$data);
							
						}
function del_data()
						{
						
							$this->db->where('cat_id',$this->uri->segment(3));
							$this->db->delete('wp_app_category');

						}
}


/*

//To bypass the sql injection problem, we are performing query binding//
 	
 	function getAll(){

						$sql = "select * from posts where id=?";

						$q = $this->db->query($sql,1);

						if($q->num_rows() > 0){
								
									foreach ($q->result() as $row)
									{
										$data[] = $row;
									}
									return $data;
						}
					}
}


//Another way of fetching data from the table changing the query
 	
 	function getAll(){

						$this->db->select(title);
						$q = $this->db->get('posts');

						if($q->num_rows() > 0){
								
									foreach ($q->result() as $row)
									{
										$data[] = $row;
									}
									return $data;
						}
					}
}



//Another way of fetching data from the database
 	
 	function getAll(){

						$q = $this->db->query("select * from posts");

						if($q->num_rows() > 0){
								
									foreach ($q->result() as $row)
									{
										$data[] = $row;
									}
									return $data;
						}
					}
}


*/

?>