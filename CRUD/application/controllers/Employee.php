<?php 
  class Employee extends CI_Controller 
  {
    function show()
    {
      $this->load->library("pagination");
      $config = array();
      $config["base_url"] = base_url('index.php/Employee/show');
      $config["total_rows"] = $this->emp_model->get_count();
      $config["per_page"] = 1;
      $config["uri_segment"] = 2;

      $this->pagination->initialize($config);

      $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

      $data["links"] = $this->pagination->create_links();

      $data['authors'] = $this->emp_model->get_authors($config["per_page"], $page);

      $this->load->view('show.php', $data);
    }
    function __construct()
    {
      parent::__construct();
      $this->load->model('emp_model');
    }
    function index()
    {
      $this->load->view('index.php');
    }
    function emp_data()
    {
      $data=$this->emp_model->emp_list();
      echo json_encode($data);
    }
    public function edit()
    {
      $id = $this->input->post('id');
      $empdata = $this->emp_model->fetchrowid($id);
      echo json_encode($empdata);
    }
    function save()
    {
      $data=$this->emp_model->save_emp();
      echo json_encode($data);
    }
    function update()
    {
      $id = $this->input->post('userid');
      $data=$this->emp_model->update_emp($id);
      echo json_encode($data);
    }
    function delete($id)
    {
      
      $this->db->where('id', $id);
      $this->db->delete('empdb.tb2');
      redirect(base_url('index.php/Employee/index'));
    }
  }
    /*public function index() 
    {
      $name = $this->input->post('name');
      $phonenumber = $this->input->post('phonenumber');
      $department = $this->input->post('department');
      $gender = $this->input->post('gender');
      $this->load->model('emp_model');
      $result['data'] = $this->emp_model->displayrecords($name,$phonenumber,$department,$gender);
      $this->load->view('index.php',$result); 
    }
    public function add()
    {
      $this->load->view('addemp.php');    
    }
    public function insert()
    {
      
      $checkarr = $_POST['hobbies'];
      $newValues = implode(",", $checkarr);
      $data = array(
      'name' => $this->input->post('name'),
      'phonenumber' => $this->input->post('phonenumber'),
      'department' => $this->input->post('department'),
      'gender' => $this->input->post('gender'),
      'hobbies' => $newValues,
      'address' => $this->input->post('address'),
      );
      $this->load->model('emp_model');
      $this->emp_model->saverecords($data);
      echo "Records Saved Successfully"; 
      //redirect("Employee/index");
    }
    public function delete($id)
    {
      $this->db->where('id', $id);
      $this->db->delete('empdb.tb2');
      redirect(base_url('index.php/Employee/index'));
    }
    public function edit($id)
    {
      $this->load->model('emp_model');
      $data['empdata'] = $this->emp_model->fetchrowid($id);
      $this->load->view('header');
      $this->load->view('updateemp',$data);
      $this->load->view('footer');
    }
    public function update($id)
    {
      $this->load->database();
      $this->load->model('emp_model');
    
      $name=$this->input->post('name');
      $phonenumber=$this->input->post('phonenumber');
      $department=$this->input->post('department');
      $gender=$this->input->post('gender');
      $hobbies=$this->input->post('hobbies');
      $address=$this->input->post('address');
      $this->emp_model->update_emp($name,$phonenumber,$department,$gender,$hobbies,$address,$id);
      redirect(base_url('index.php/Employee/index'));
    }
  }*/
?>
