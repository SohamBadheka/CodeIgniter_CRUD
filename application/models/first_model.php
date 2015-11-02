<?php

class First_model extends CI_Model {

	function getAll(){

						//get('table_name','no of records from the table','offset')
						
						//$this->db->select('title');
						$q = $this->db->get('wp_app_business');

						if($q->num_rows() > 0){
								
									foreach ($q->result() as $row)
									{
										$data[] = $row;
									}
									return $data;
						}
					}
}

	function insert(){
		$q = $this->db->query("insert into wp_app_business");

						if($q->num_rows() > 0){
								
									foreach ($q->result() as $row)
									{
										$data[] = $row;
									}
									return $data;
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