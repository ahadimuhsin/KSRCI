<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('ksr_model');
        $this->load->helper('file');
        $this->load->library('session');

    }

    public function index()
    {
        $this->load->view('user/index',array('error' => ' ' ));
        $this->load->helper('url');

    }


    public function loginpage()
    {
        $this->load->view('admin/log');
    }

    public function loginform()
    {
        $this->load->view('admin/login');
    }

    public function tambah(){
        $data = array();

        if($this->input->post('userSubmit')){ // Jika user menekan tombol Submit (Simpan) pada form
            // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
            $upload = $this->ksr_model->upload();

            if($upload['result'] == "success"){ // Jika proses upload sukses
                // Panggil function save yang ada di ksr_model.php untuk menyimpan data ke database
                $this->ksr_model->save($upload);

                redirect(base_url(),'refresh'); // Redirect kembali ke halaman awal / halaman view data
            }else{ // Jika proses upload gagal
                $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
            }
        }

        $this->load->view('user/index', $data);
    }

    /*Melakukan login
     *
     *
     */
    function aksi_login()
    {
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $where=array( //memeriksa inputan ke dalam database
            'user_name'=>$username,
            'password'=>md5($password)
        );
        $cek=$this->ksr_model->cek_login("admin",$where)->num_rows();
        if($cek>0){ //kalau username ada di database, redirect ke function tabel
            $data_session=array(
                'user_name'=>$username,
                'status'=>"login"
            );
            $this->session->set_userdata($data_session);
            redirect(base_url("index.php/admin/tabel"));
        } else{ //kalau salah, muncul peringatan
            echo"
            <script> alert('Username atau Password Salah!')</script>";
            $this->load->view('admin/log');
        }


    }
    //untuk logout
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url("index.php/welcome/index"));
    }



}







