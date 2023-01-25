<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_master extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_felly');
		
	}
	public function index()
	{
		$this->load->view('v_login');
	}
	public function tampilan()
	{
		// $recordobat = $this->m_felly->tampildataobat();
		// $recordktgr = $this->m_felly->tampildatakategori();
		// $recordstn = $this->m_felly->tampildatasatuan();
		// $recordtr = $this->m_felly->tampildatatransaksi();
		// $data= array('obat' => $recordobat,
		// 			'kategori' => $recordktgr,
		// 			'satuan' => $recordstn,
		// 			'transaksi' => $recordtr);
		$data['nilai']=$this->m_felly->nilai()->result();
		$data['grafik']=$this->m_felly->grafik()->result();
		$data['obatsaatini']=$this->m_felly->obatsaatini();
		$data['terlaris']=$this->m_felly->transaksisaatini();
		$data['sum']=$this->m_felly->jumalajual();
		$this->load->view('master/tampilan',$data);
	}
	public function satuan()
	{
		$recordstn = $this->m_felly->tampildatasatuan();
		$data= array('satuan' => $recordstn);
		$this->load->view('master/satuan',$data);
	}

	public function kategori()
	{		
		$recordktgr = $this->m_felly->tampildatakategori();
		$data= array('ktgr' => $recordktgr);
		$this->load->view('master/kategori',$data);
	}

	public function obat()
	{	
		// $sisa=$this->m_felly->sisa();
		// $total =$this->m_felly->total()->result();
		$recordobat = $this->m_felly->tampildataobat();
		$recordktgr = $this->m_felly->tampildatakategori();
		$recordstn = $this->m_felly->tampildatasatuan();
		$recordtransaksi = $this->m_felly->tampildatatransaksi();
		$data= array('obat' => $recordobat,
					'transaksi' => $recordtransaksi,
					'kategori' => $recordktgr,
					'satuan' => $recordstn);
					//'total' =>$total
					//'sisa'=>$sisa
		$this->load->view('master/obat',$data);
	}

	public function transaksi()
	{
		$recordtransaksi = $this->m_felly->tampildatatransaksi();
		$recordo = $this->m_felly->tampildataobat();
		$data= array(
			'transaksi' => $recordtransaksi,
			'obat' => $recordo
		);
		//dari sum model================
		$data['sum']=$this->m_felly->jumalajual();
		//---------------------
		$this->load->view('master/transaksi',$data);
	}
	
	public function admin()
	{
		$recordadmin = $this->m_felly->tampildataadmin();
		$data= array(
			'admin' => $recordadmin,
		);
		$this->load->view('master/admin',$data);
	}


	//bagian kategori
	public function aksiinsertkategori()
	{
		$namaktgr = $this->input->post('kategori_obat');
		$datainsert = array(
			'kategori_obat' => $namaktgr,
		);
		$this->m_felly->insertdatakategori($datainsert);


		redirect(base_url('C_master/kategori'));
	}

	public function formeditkategori($id)
	{
		$recordktgr = $this->m_felly->getkategoridetail($id);
		$data=array('ulang' => $recordktgr);
		$this->load->view('master/edit/editkategori', $data);
	}
	public function aksieditkategori()
	{
		$idktgr = $this->input->post('id_kategori');
		$namaktgr =$this->input->post('kategori_obat');

		$data = array(
			'kategori_obat' => $namaktgr,
			 );
		$this->m_felly->editkategori($data,$idktgr);
		redirect(base_url('C_master/kategori'));
	}
	public function aksihapuskategori($id)
	{
		$this->m_felly->hapuskategori($id);
		redirect(base_url('C_master/kategori'));
	}

	//bagian obat
	public function aksiinsertobat()
	{
		$idobat = $this->input->post('id_obat');
		$nama =$this->input->post('nama_obat');
		$idktgr = $this->input->post('id_kategori');
		$idstn =$this->input->post('id_satuan');
		$stok = $this->input->post('stok');

		$datainsertobat = array(
			'nama_obat' => $nama,
			'id_kategori' => $idktgr,
			'id_satuan' => $idstn,
			'stok_obat' => $stok
			 );
		$this->m_felly->insertdataobat($datainsertobat);
		redirect(base_url('C_master/obat'));
	}
	public function formeditobat($id)
	{
		$recordid = $this->m_felly->getobatdetail($id);
		$recordktgr = $this->m_felly->tampildatakategori();
		$recordstn = $this->m_felly->tampildatasatuan();
		$data=array(
			'ulang' => $recordid,
			'kategori' => $recordktgr,
			'satuan' => $recordstn
		);
		$this->load->view('master/edit/editobat', $data);
	}
	public function aksieditobat()
	{
		$id = $this->input->post('id_obat');
		$nama =$this->input->post('obat');
		$idk = $this->input->post('id_kategori');
		$ids =$this->input->post('id_satuan');
		$stok =$this->input->post('stok');

		$data = array(
			'nama_obat' => $nama,
			'id_kategori' => $idk,
			'id_satuan' => $ids,
			'stok_obat' => $stok
			);
		$this->m_felly->editobat($data,$id);
		redirect(base_url('C_master/obat'));
	}
	public function aksihapusobat($id)
	{
		$this->m_felly->hapusobat($id);
		redirect(base_url('C_master/obat'));
	}

	//bagian satuan
	public function aksiinsertsatuan()
	{
		$namaktgr = $this->input->post('satuan_obat');
		$datainsert = array(
			'satuan_obat' => $namaktgr,
		);
		$this->m_felly->insertdatasatuan($datainsert);


		redirect(base_url('C_master/satuan'));
	}

	public function formeditsatuan($id)
	{
		$recordktgr = $this->m_felly->getsatuandetail($id);
		$data=array('ulang' => $recordktgr);
		$this->load->view('master/edit/editsatuan', $data);
	}
	public function aksieditsatuan()
	{
		$idktgr = $this->input->post('id_satuan');
		$namaktgr =$this->input->post('satuan_obat');

		$data = array(
			'satuan_obat' => $namaktgr,
			 );
		$this->m_felly->editsatuan($data,$idktgr);
		redirect(base_url('C_master/satuan'));
	}
	public function aksihapussatuan($id)
	{
		$this->m_felly->hapussatuan($id);
		redirect(base_url('C_master/satuan'));
	}

	//bagian transaksi
	public function aksiinserttransaksi()
	{
		$user = $this->input->post('username');
		$tgl =$this->input->post('tanggal');
		$ido = $this->input->post('id_obat');
		$jmlh =$this->input->post('jumlah');

		$datainserttransaksi = array(
			'tanggal_transaksi' => $tgl,
			'username' => $user,
			'id_obat' => $ido,
			'jumlah_jual' => $jmlh
			 );
		$this->m_felly->insertdatatransaksi($datainserttransaksi);
		redirect(base_url('C_master/transaksi'));
	}
	public function formedittransaksi($id)
	{
		$recordid = $this->m_felly->gettransaksidetail($id);
		$recordktgr = $this->m_felly->tampildataobat();
		$data=array(
			'ulang' => $recordid,
			'obat' => $recordktgr,
		);
		$this->load->view('master/edit/edittransaksi', $data);
	}
	public function aksiedittransaksi()
	{
		$id = $this->input->post('id_transaksi');
		$user = $this->input->post('username');
		$tanggal =$this->input->post('tanggal_transaksi');
		$ido = $this->input->post('id_obat');
		$jumlah =$this->input->post('jumlah_jual');

		$data = array(
			'tanggal_transaksi' => $tanggal,
			'username' => $user,
			'id_obat' => $ido,
			'jumlah_jual' => $jumlah
			);
		$this->m_felly->edittransaksi($data,$id);
		redirect(base_url('C_master/transaksi'));
	}
	public function aksihaputtransaksi($id)
	{
		$this->m_felly->hapustransaksi($id);
		redirect(base_url('C_master/transaksi'));
	}
	

	
	//bagian admin
	public function aksiinsertadmin()
	{

		$nama =$this->input->post('nama');
		$email = $this->input->post('email');
		$username =$this->input->post('username');
		$password =$this->input->post('password');
		$lvl=$this->input->post('level');

		$datainsertadmin = array(
			'username' => $username,
			'nama' => $nama,
			'email' => $email,
			'password' => md5($password),
			'level' => $lvl
			 );
		$this->m_felly->insertdataadmin($datainsertadmin);
		redirect(base_url('C_master/admin'));
	}
	public function formeditadmin($id)
	{
		$recordid = $this->m_felly->getadmindetail($id);
		$data=array(
			'ulang' => $recordid
		);
		$this->load->view('master/edit/editadmin', $data);
	}
	public function aksieditadmin()
	{
		$id = $this->input->post('id_admin');
		$nama =$this->input->post('nama_admin');
		$email = $this->input->post('email');
		$user = $this->input->post('username');
		$pas =$this->input->post('password');

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'username' => $user,
			'password' => md5($pas)
			);
		$this->m_felly->editadmin($data,$id);
		redirect(base_url('C_master/admin'));
	}
	public function aksihapusadmin($id)
	{
		$this->m_felly->hapusadmin($id);
		$pelogin=$this->db->get_where('admin',array('username'=> $id ))->row();
		if ($pelogin->username==$id) {
			$this->session->sess_destroy();
			redirect(base_url('login'));
		}else {
			redirect(base_url('C_master/admin'));
		}
        
		
	}
}
