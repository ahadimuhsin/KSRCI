<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Muhsin Ahadi
 * Date: 12/9/2017
 * Time: 1:07 PM
 */
class ksr_model extends CI_Model
{

    public function GetSurat()
    {
        $data = $this->db->query("Select * from surat");

        return $data->result_array(); // TODO: Change the autogenerated stub
    }

    public function __construct()
    {
        $this->load->helper('url','file');
        $this->load->library('form_validation');
        $this->load->helper('url');

    }

    public function Insert($table, $data)
    {
    $result=$this->db->insert($table,$data);
    return $result;
    }

    public function upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg|pdf|doc|docx';
        $config['max_size']  = '10000';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        }else{
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    // Fungsi untuk menyimpan data ke database
    public function save($upload){
        $data = array(
            'no_surat' => $this->input->post('no_surat'),
            'instansi' => $this->input->post('instansi'),
            'nama_acara' => $this->input->post('acara'),
            'tanggal_acara' => $this->input->post('tanggal'),
            'tempat_acara' => $this->input->post('tempat'),
            'kontak' => $this->input->post('telepon'),
            'url_lampiran'=>$upload['file']['file_name']

        );

        $this->db->insert('surat', $data);
    }

    function cek_login($table,$where)
    {
        return $this->db->get_where($table,$where);
    }

}