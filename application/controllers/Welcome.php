<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	public function beranda()
	{
		$this->load->view('beranda');
	}
	public function login()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$LoginSukses = $this->db->get('tabel_user')->row_array();
		if ($LoginSukses > 0) {
			redirect('Welcome/beranda');
		}else{
			redirect('Welcome/');
		}
	}
	public function data_user()
	{
		$this->load->model('modeldata');
		$data['data_user'] = $this->modeldata->GetDataUser();
		$this->load->view('beranda', $data);
	}
	public function data_investor()
	{
		$this->load->model('modeldata');
		$data['data_investor'] = $this->modeldata->GetDataInvestor();
		$this->load->view('beranda', $data);
	}
	public function data_aset()
	{
		$this->load->model('modeldata');
		$data['data_aset'] = $this->modeldata->GetDataAset();
		$this->load->view('beranda', $data);
	}
	public function tambahdatauser()
	{
		$this->load->view('beranda');
	}
	public function tambahdatainvestor()
	{
		$this->load->view('beranda');
	}
	public function tambahdataaset()
	{
		$this->load->view('beranda');
	}
	public function simpanAset()
	{
		$this->load->model('modeldata');
		$nama_barang=$this->input->post('nama_barang');
		$jumlah=$this->input->post('jumlah');
		$kondisi=$this->input->post('kondisi');
		$keterangan=$this->input->post('keterangan');
		$this->modeldata->tambahdataaset($nama_barang, $jumlah, $kondisi, $keterangan);
		redirect('Welcome/data_aset');
	}
	public function simpanInvestor()
	{
		$this->load->model('modeldata');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$keterangan=$this->input->post('keterangan');
		$this->modeldata->tambahdatainvestor($nama, $alamat, $keterangan);
		redirect('Welcome/data_investor');
	}
	public function simpanUser()
	{
		$this->load->model('modeldata');
		$nama_lengkap=$this->input->post('nama_lengkap');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$this->modeldata->tambahdatauser($nama_lengkap, $username, $password);
		redirect('Welcome/data_user');
	}
	public function getIdAset($id)
	{
		$this->load->model('modeldata');
		$data = $this->modeldata->getIdAset($id)->row();
		echo json_encode($data);
	}
	public function hapusdataaset()
	{
		$this->load->model('modeldata');
		$this->modeldata->hapusdataaset();
		redirect('Welcome/data_aset');
	}
	public function editdataaset($id_aset = null)
	{
		$this->load->model('modeldata');
		$data['getIdDataAset'] = $this->modeldata->getIdDataAset($id_aset);
		$this->load->view('beranda', $data);
	}
	public function updateaset()
	{
		$this->load->model('modeldata');
		$id_aset = $this->input->post('id_aset');
		$nama_barang = $this->input->post('nama_barang');
		$jumlah = $this->input->post('jumlah');
		$kondisi = $this->input->post('kondisi');
		$keterangan = $this->input->post('keterangan');
		$this->modeldata->updateaset($id_aset, $nama_barang, $jumlah, $kondisi, $keterangan);
		redirect('Welcome/data_aset');
	}
	public function getIdInvestor($id)
	{
		$this->load->model('modeldata');
		$data = $this->modeldata->getIdInvestor($id)->row();
		echo json_encode($data);
	}
	public function hapusdatainvestor()
	{
		$this->load->model('modeldata');
		$this->modeldata->hapusdatainvestor();
		redirect('Welcome/data_investor');
	}
	public function editdatainvestor($id_investor = null)
	{
		$this->load->model('modeldata');
		$data['getIdDataInvestor'] = $this->modeldata->getIdDataInvestor($id_investor);
		$this->load->view('beranda', $data);
	}
	public function updateinvestor()
	{
		$this->load->model('modeldata');
		$id_investor = $this->input->post('id_investor');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$keterangan = $this->input->post('keterangan');
		$this->modeldata->updateinvestor($id_investor, $nama, $alamat, $keterangan);
		redirect('Welcome/data_investor');
	}
	public function getIdUser($id)
	{
		$this->load->model('modeldata');
		$data = $this->modeldata->getIdUser($id)->row();
		echo json_encode($data);
	}
	public function hapusdatauser()
	{
		$this->load->model('modeldata');
		$this->modeldata->hapusdatauser();
		redirect('Welcome/data_user');
	}
	public function editdatauser($id_user = null)
	{
		$this->load->model('modeldata');
		$data['getIdDataUser'] = $this->modeldata->getIdDataUser($id_user);
		$this->load->view('beranda', $data);
	}
	public function updateuser()
	{
		$this->load->model('modeldata');
		$id_user = $this->input->post('id_user');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->modeldata->updateuser($id_user, $nama_lengkap, $username, $password);
		redirect('Welcome/data_user');
	}
}
