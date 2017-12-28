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

        if ($this->session->userdata('status') != "login") {
            echo "
           <script>alert('Anda Belum Login!')</script>";
            redirect(base_url("index.php/welcome/loginpage"));
        }
    }



    public function tabel()
    {
        $this->load->view('admin/table');
    }

    public function isitabel()
    {
        //$this->load->view('admin/kontak');
        $data = $this->ksr_model->GetSurat('surat');
        $data = array ('data'=> $data);
        $this->load->view('admin/kontak', $data);

    }

    public function editt($no_surat)
    {
        $this->load->model('ksr_model');
        $surat = $this->ksr_model->GetWhere('surat', array('no_surat'=>$no_surat));
        $data = array(
            'no_surat'=>$surat[0]['no_surat'],
            'instansi'=>$surat[0]['instansi'],
            'nama_acara'=>$surat[0]['acara'],
            'tanggal_acara'=>$surat[0]['tanggal'],
            'tempat_acara'=>$surat[0]['tempat'],
            'kontak'=>$surat[0]['telepon'],
            'status_surat'=>$surat[0]['status_surat']
        );
        $this->load->view('admin/editStatus', $data);
    }




}