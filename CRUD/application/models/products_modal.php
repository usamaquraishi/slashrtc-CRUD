<?php
class Products_modal extends CI_Model{
    
    public function get_products(){
        if(!empty($this->input->get("search"))){
          $this->db->like('title', $this->input->get("search"));
          $this->db->or_like('description', $this->input->get("search")); 
        }
        $query = $this->db->get("proddb.product");
        return $query->result();
    }
        public function insert_product()
    {    
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description')
        );
        return $this->db->insert('proddb.product', $data);
    }
     public function update_product($title,$description,$id) 
    {
        $data=array(
            'title' =>$title,
            'description'=>$description
        );
       
            $this->db->where('id',$id);
            return $this->db->update('proddb.product',$data);
                
    }
    }
    ?>