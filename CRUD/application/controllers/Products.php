<?php
class Products extends CI_Controller {

	public function __construct(){
			parent::__construct();
 			$this->load->model('products_modal');
	}
	 public function index()
	   {
	   	$this->load->helper('url');
       $data['data']=$this->products_modal->get_products();
   	
      $this->load->view('header');
       $this->load->view('list',$data);
      $this->load->view('footer');      
   }
      public function create()
   {
   	$this->load->helper('url');
      $this->load->view('header');
      $this->load->view('create');
      $this->load->view('footer');      
   }
   public function store()
   {
       $products=new products_modal;

       $products->insert_product();
       redirect(base_url('index.php/Products/create'));
    }
       public function edit($id)
   {
       $product = $this->db->get_where('proddb.product', array('id' => $id))->row();
       $this->load->view('header');
       $this->load->view('edit',array('product'=>$product));
       $this->load->view('footer');   
   }
      public function update($id)
   {	
   	
       $this->load->database();
       $this->load->model('products_modal');
          $n=$this->input->post('title');
           $d=$this->input->post('description');
      
           $this->products_modal->update_product($n,$d,$id);

       redirect(base_url('index.php/Products/index'));
   }
    public function delete($id)
   {
       $this->db->where('id', $id);
       $this->db->delete('proddb.product');
       redirect(base_url('index.php/Products/index'));
   }

}
?>
