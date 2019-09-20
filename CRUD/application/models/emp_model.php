<?php 
	class emp_model extends CI_Model 
	{

 		public function get_count()
		{
    	return $this->db->count_all('empdb.tb2');
  	}
		public function get_authors($limit, $start)
		{
    	$this->db->limit($limit, $start);
    	$query = $this->db->get('empdb.tb2');
			return $query->result();
  	}
 

		function emp_list()
		{
			$hasil=$this->db->get('empdb.tb2');
			return $hasil->result();
		}
		function save_emp()
 		{
    	$checkarr = $_POST['hobbies'];
      $newValues = implode(",", $checkarr);
      $data = array(
      							'namedb'  => $this->input->post('sname'), 
      							'phonenumber'  => $this->input->post('phonenumber'), 
      							'department' => $this->input->post('department'), 
      							'gender' => $this->input->post('gender'),
      							'hobbies' => $newValues,
      							'address' => $this->input->post('address'),
            			);
       							$result=$this->db->insert('empdb.tb2',$data);
       							return $result;
    }
     function fetchrowid( $id )
  	{
    	$empdata = $this->db->get_where('empdb.tb2',array('id'=>$id))->row();
    	return $empdata;
  	}
			function update_emp($id)
			{
				$checkarr = $_POST['hobbies'];
      	$newValues = implode(",", $checkarr);
      	/*$data = array(

      							
      								'namedb'  => $this->input->post('username'), 
      								'phonenumber'  => $this->input->post('userphonenumber'), 
      								'department' => $this->input->post('userdepartment'), 
      								'gender' => $this->input->post('usergender'),
      								'hobbies' => $newValues,
      								'address' => $this->input->post('address'),
            				);
      							$result=$this->db->insert('empdb.tb2',$data);
       							return $result;
      								//$empdata = $this->db->update('empdb.tb2',array('id'=>$id))->row();
    									//return $empdata;
      								//$this->db->where('id', $id);
       								//$result=$this->db->update('empdb.tb2',$data);
       								//return $result;*/
        $name=$this->input->post('username');
        $phonenumber=$this->input->post('userphonenumber');
        $department=$this->input->post('userdepartment');
        $gender=$this->input->post('usergender');
        $hobbies=$this->input->post('hobbies');
       	$address=$this->input->post('address');

 				$newValues = implode(",", $hobbies);
       	$this->db->set('namedb', $name);
        $this->db->set('phonenumber', $phonenumber);
        $this->db->set('department', $department);
        $this->db->set('gender', $gender);
        $this->db->set('hobbies', $newValues);
        $this->db->set('address', $address);
        $this->db->where('id', $id);
        $result=$this->db->update('empdb.tb2');

        //echo $this->db->last_query();
        //return $result;
    	}
 			function delete_emp($id)
 			{
        $this->db->where('id', $id);
        $this->db->delete('empdb.tb2');
        return $result;
    	}
  }
   /* function displayrecords($name,$phonenumber,$department,$gender)
    {
      if($name !="")
      {
      	$this->db->where('name',$name);
      }
			if($phonenumber !="")
      {
      	$this->db->where('phonenumber',$phonenumber);
      }
      if($department !="")
      {
     		$this->db->where('department',$department);
      }
			if($gender !="")
      {
      	$this->db->where('gender',$gender);
      }
     	$query = $this->db->get("empdb.tb2");
      return $query->result();
  	}
    function saverecords($data)
    {
      
      $result = $this->db->insert("empdb.tb2",$data);
      return $result;
    }
    function fetchrowid( $id )
  	{
    	$empdata = $this->db->get_where('empdb.tb2',array('id'=>$id))->row();
    	return $empdata;
  	}
		function update_emp($name,$phonenumber,$department,$gender,$hobbies,$address,$id)
  	{
    	$newValues = implode(",", $hobbies);
   		$data=array(
      'name' => $name,
      'phonenumber' => $phonenumber,
      'department' => $department,
      'gender' => $gender,
      'hobbies' => $newValues,
      'address' => $address,
      );
 			$this->db->where('id',$id);
      return $this->db->update('empdb.tb2',$data);
    }
 
  }*/
 ?>