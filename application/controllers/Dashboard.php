<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('model_daftarkegiatan');
    }

    public function index()
    {
        
        $data = array(

            'title'     => 'Data Kegiatan',
            'dashboard' => $this->model_daftarkegiatan->get_all(),

        );

        $this->load->view('dashboard', $data);
    }

    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data Kegiatan'

        );

        $this->load->view('tambah', $data);
    }

    public function simpan()
    {
        $data = array(

            'no_isbn'       => $this->input->post("no_isbn"),
            'Kegiatan'         => $this->input->post("Kegiatan"),
            'Tanggal_Acara'    => $this->input->post("Tanggal_Acara"),
            'Waktu'         => $this->input->post("Waktu"),
            'Tempat'         => $this->input->post("Tempat"),

        );

        $this->model_daftarkegiatan->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('dashboard/');

    }

    public function edit($id_kegiatan)
    {
        $id_kegiatan = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data Kegiatan',
            'data_Kegiatan' => $this->model_daftarkegiatan->edit($id_kegiatan)

        );

        $this->load->view('edit', $data);
    }

    public function update()
    {
        $id['id_kegiatan'] = $this->input->post("id_kegiatan");
        $data = array(

            'Kegiatan'         => $this->input->post("Kegiatan"),
            'Tanggal_Acara'    => $this->input->post("Tanggal_Acara"),
            'Waktu'           => $this->input->post("Waktu"),
            'Tempat'         => $this->input->post("Tempat"),

        );

        $this->model_daftarkegiatan->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('dashboard/');

    }

    public function hapus($id_kegiatan)
    {
        $id['id_kegiatan'] = $this->uri->segment(3);

        $this->model_daftarkegiatan->hapus($id);

        //redirect
        redirect('dashboard/');

    }

}
