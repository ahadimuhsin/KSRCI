<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * Created by PhpStorm.
 * User: Muhsin Ahadi
 * Date: 12/12/2017
 * Time: 9:07 PM
 */
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('ksr_model');
        $this->load->helper('file');
        $this->load->library('session');
        $this->load->helper('download');
        //apabila ada user yang langung masuk ke halaman admin, akan dicek statusnya terlebih dahulu
        if ($this->session->userdata('status') != "login") {
            echo "
           <script>alert('Anda Belum Login!')</script>";
            redirect(base_url("index.php/welcome/loginpage"));
        }
    }


    //function tabel meload tabel surat kemudian membuat array isinya menjadi variabel $data
    //variabel $data ditampilkan pada halaman table

    public function tabel()
    {
        $data = $this->ksr_model->GetSurat('surat');
        $data = array ('data'=> $data);
        $this->load->view('admin/table',$data);
    }

    public function isitabel()
    {
        //$this->load->view('admin/kontak');
        $data = $this->ksr_model->GetSurat('surat');
        $data = array ('data'=> $data);
        $this->load->view('admin/kontak', $data);

    }

    public function editt($no_surat) //untuk menampilkan data berdasarkan nomor surat
    {
        $this->load->model('ksr_model');
        $surat = $this->ksr_model->GetWhere('surat', array('no_surat'=>$no_surat));
        $data = array(
            'no_surat'=>$surat[0]['no_surat'],
            'instansi'=>$surat[0]['instansi'],
            'nama_acara'=>$surat[0]['nama_acara'],
            'tanggal_acara'=>$surat[0]['tanggal_acara'],
            'tempat_acara'=>$surat[0]['tempat_acara'],
            'kontak'=>$surat[0]['kontak'],
            'status_surat'=>$surat[0]['status_surat']
        );
        $this->load->view('admin/editStatus', $data);
    }
    public function update_data() //untuk mengupdate data
    {
        $no_surat=$_POST['no_surat'];
        $instansi=$_POST['instansi'];
        $nama_acara=$_POST['nama_acara'];
        $tanggal_acara=$_POST['tanggal_acara'];
        $tempat_acara=$_POST['tempat_acara'];
        $kontak=$_POST['kontak'];
        $status_surat=$_POST['status_surat'];
        $data=array(
            'no_surat'=>$no_surat,
            'instansi'=>$instansi,
            'nama_acara'=>$nama_acara,
            'tanggal_acara'=>$tanggal_acara,
            'tempat_acara'=>$tempat_acara,
            'kontak'=>$kontak,
            'status_surat'=>$status_surat
        );
        $where = array(
            'no_surat' =>$no_surat,
        );
        $this->load->model('ksr_model');
        $res=$this->ksr_model->Update('surat', $data, $where);
        if ($res>0){

            redirect('index.php/admin/tabel', 'refresh');
        }
    }

    //untuk mendownload file dari folder uploads
    public function download($fileName = NULL) {
        if ($fileName) {
            $file = realpath ( "uploads" ) . "\\" . $fileName;
            // check file exists
            if (file_exists ( $file )) {
                // get file content
                $data = file_get_contents ( $file );
                //force download
                force_download ( $fileName, $data );
            } else {
                // Redirect to base url
                redirect ( base_url () );
            }
        }
    }

}