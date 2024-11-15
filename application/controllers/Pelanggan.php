<?php

class Pelanggan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        checklogin();
        $this->load->model('Model_pelanggan');
        $this->load->model('Model_cabang');
    }
    function index()
    {
        $data['pelanggan'] = $this->Model_pelanggan->getDataPelanggan()->result();
        $this->template->load('template/template', 'pelanggan/view_pelanggan', $data);
    }

    function inputpelanggan()
    {
        $data['cabang'] = $this->Model_cabang->getDataCabang()->result();
        $this->load->view('pelanggan/input_pelanggan', $data);
    }

    function simpanpelanggan(){
        $kodepelanggan = $this->input->post('kodepelanggan');
        $namapelanggan = $this->input->post('namapelanggan');
        $alamatpelanggan = $this->input->post('alamatpelanggan');
        $nohp = $this->input->post('nohp');
        $cabang = $this->input->post('cabang');

        $data = array(
            'kode_pelanggan' => $kodepelanggan,
            'nama_pelanggan' => $namapelanggan,
            'alamat_pelanggan' => $alamatpelanggan,
            'no_hp' => $nohp,
            'kode_cabang' => $cabang

        );

        $simpan = $this->Model_pelanggan->insertPelanggan($data);
        if($simpan ==1){
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
            Data Berhasil Ditambahkan
            </div>');
            redirect("pelanggan");
        }else{
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="9" /><line x1="12" y1="8" x2="12" y2="12" /><line x1="12" y1="16" x2="12.01" y2="16" /></svg>
            Data Gagal Ditambahkan
            </div>');
            redirect("pelanggan");
        }
    }

    function editpelanggan()
    {
        $kodepelanggan = $this->uri->segment(3);
        $data['cabang'] = $this->Model_cabang->getDataCabang()->result();
        $data['pelanggan'] = $this->Model_pelanggan->getPelanggan($kodepelanggan)->row_array();
        $this->load->view('pelanggan/edit_pelanggan', $data);
    }

    function updatepelanggan()
    {
        $kodepelanggan = $this->input->post('kodepelanggan');
        $namapelanggan = $this->input->post('namapelanggan');
        $alamatpelanggan = $this->input->post('alamatpelanggan');
        $nohp = $this->input->post('nohp');
        $cabang = $this->input->post('cabang');

        $data = array(
            'nama_pelanggan' => $namapelanggan,
            'alamat_pelanggan' => $alamatpelanggan,
            'no_hp' => $nohp,
            'kode_cabang' => $cabang
        );

        $simpan = $this->Model_pelanggan->updatePelanggan($data, $kodepelanggan);
        if($simpan ==1){
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
            Data Berhasil Diedit
            </div>');
            redirect("pelanggan");
        }else{
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="9" /><line x1="12" y1="8" x2="12" y2="12" /><line x1="12" y1="16" x2="12.01" y2="16" /></svg>
            Data Gagal Diedit
            </div>');
            redirect("pelanggan");
        }
    }

    function hapuspelanggan(){
        $kodepelanggan = $this->uri->segment(3);
        $hapus = $this->Model_pelanggan->deletePelanggan($kodepelanggan);
        if($hapus ==1){
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
            Data Berhasil Dihapus
            </div>');
            redirect("pelanggan");
        }else{
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="9" /><line x1="12" y1="8" x2="12" y2="12" /><line x1="12" y1="16" x2="12.01" y2="16" /></svg>
            Data Gagal Dihapus
            </div>');
            redirect("pelanggan");
        }
    }
}