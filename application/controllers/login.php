<?php
class login extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }
    function index()
    {
        if ($this->session->userdata('status')=='login') {
            redirect(base_url("admin"));
        }else {
            $this->load->view('v_login');
        }
    }
    function aksi_login()
    {
        if (isset($_POST['login'])) {
            $username = $this->input->post('username',true);
            $password = $this->input->post('password',true);
            //$cek = $this->m_login->proseslogin($username,md5($password));
            //$hasil = count($cek);
           // if ($hasil > 0) {
                $pelogin=$this->db->get_where('admin',array('username' => $username, 'password'=> md5($password) ))->row();
                if ($pelogin->level=='admin') {
                    $data_session=array(
                        'username' => $username,
                        'status' => "login");
                        $this->session->set_userdata($data_session);
                        redirect(base_url("admin"));
                }elseif ($pelogin->level=='master') {
                    $data_session=array(
                        'level'=> "master",
                        'username' => $username,
                        'status' => "login");
                        $this->session->set_userdata($data_session);
                        redirect(base_url("master"));
                }else {
                    echo "<script>alert('Password atau Username Salah!')</script>";
                    $this->load->view('v_login');
                }
            //}
        }

    }
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
    function tampilobat(){
        
    }
}

?>