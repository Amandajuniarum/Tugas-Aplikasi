<?php 
	/**
	 * 
	 */
	class modeldata extends CI_Model
	{
		
		public function GetDataAset()
		{
			return $this->db->get('tabel_aset')->result();
		}
		public function GetDataInvestor()
		{
			return $this->db->get('tabel_investor')->result();
		}
		public function GetDataUser()
		{
			return $this->db->get('tabel_user')->result();
		}
		public function tambahdataaset($nama_barang, $jumlah, $kondisi, $keterangan)
		{
			$isidata = array(
				'nama_barang' => $nama_barang,
				'jumlah' => $jumlah,
				'kondisi' => $kondisi,
				'keterangan' => $keterangan,
			 );
			$this->db->insert('tabel_aset', $isidata);
		}
		public function tambahdatainvestor($nama, $alamat, $keterangan)
		{
			$isidata = array(
				'nama' => $nama,
				'alamat' => $alamat,
				'keterangan' => $keterangan,
			 );
			$this->db->insert('tabel_investor', $isidata);
		}
		public function tambahdatauser($nama_lengkap, $username, $password)
		{
			$isidata = array(
				'nama_lengkap' => $nama_lengkap,
				'username' => $username,
				'password' => $password,
			 );
			$this->db->insert('tabel_user', $isidata);
		}
		public function getIdAset($id)
		{
			$this->db->where('id_aset', $id);
			return $this->db->get('tabel_aset');
		}
		public function hapusdataaset()
		{
			$hapusdata = $this->input->post('id_aset');
			$this->db->where('id_aset', $hapusdata);
			$this->db->delete('tabel_aset');
		}
		public function getIdDataAset($id_aset)
		{
			$this->db->where('id_aset', $id_aset);
			return $this->db->get('tabel_aset')->result();
		}
		public function updateaset($id_aset, $nama_barang, $jumlah, $kondisi, $keterangan)
		{
			$editdata = array(
				'nama_barang' => $nama_barang,
				'jumlah' => $jumlah,
				'kondisi' => $kondisi,
				'keterangan' => $keterangan,
			);
			$this->db->set($editdata);
			$this->db->where('id_aset', $id_aset);
			$this->db->update('tabel_aset');
		}
		public function getIdInvestor($id)
		{
			$this->db->where('id_investor', $id);
			return $this->db->get('tabel_investor');
		}
		public function hapusdatainvestor()
		{
			$hapusdata = $this->input->post('id_investor');
			$this->db->where('id_investor', $hapusdata);
			$this->db->delete('tabel_investor');
		}
		public function getIdDataInvestor($id_investor)
		{
			$this->db->where('id_investor', $id_investor);
			return $this->db->get('tabel_investor')->result();
		}
		public function updateinvestor($id_investor, $nama, $alamat, $keterangan)
		{
			$editdata = array(
				'nama' => $nama,
				'alamat' => $alamat,
				'keterangan' => $keterangan,
			);
			$this->db->set($editdata);
			$this->db->where('id_investor', $id_investor);
			$this->db->update('tabel_investor');
		}
		public function getIdUser($id)
		{
			$this->db->where('id_user', $id);
			return $this->db->get('tabel_user');
		}
		public function hapusdatauser()
		{
			$hapusdata = $this->input->post('id_user');//true
			$this->db->where('id_user', $hapusdata);
			$this->db->delete('tabel_user');
		}
		public function getIdDataUser($id_user)
		{
			$this->db->where('id_user', $id_user);
			return $this->db->get('tabel_user')->result();
		}
		public function updateuser($id_user, $nama_lengkap, $username, $password)
		{
			$editdata = array(
				'nama_lengkap' => $nama_lengkap,
				'username' => $username,
				'password' => $password,
			);
			$this->db->set($editdata);
			$this->db->where('id_user', $id_user);
			$this->db->update('tabel_user');
		}
	}
 ?>