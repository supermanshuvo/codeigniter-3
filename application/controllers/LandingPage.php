<?php
class LandingPage extends CI_Controller {
	public function index(){
		$this->load->view('landingPage_index');
	}
	function __construct()
	{
		parent::__construct();
		$this->load->model('crud');
	}

	public function post() {
		$data['data'] = $this->crud->get_records('posts');
		$this->load->view('post',$data);
	}
	public function create(){
		$this->load->view('create');
	}
	public function store()
	{
		$data['title'] = $this->input->post('title');
		$data['description'] = $this->input->post('description');

		$this->crud->insert('posts', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been saved successfully.</div>');
		redirect(base_url().'index.php/LandingPage/post');
	}
	public function edit($id){
		$data['data'] = $this->crud->find_record_by_id('posts', $id);
		$this->load->view('edit', $data);
	}
	public function update($id)
	{
		$data['title'] = $this->input->post('title');
		$data['description'] = $this->input->post('description');

		$this->crud->update('posts', $data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been updated successfully.</div>');
		redirect(base_url().'index.php/LandingPage/post');
	}

	public function delete($id)
	{
		$this->crud->delete('posts', $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been deleted successfully.</div>');
		redirect(base_url().'index.php/LandingPage/post');
	}

}
