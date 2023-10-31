<?php 

class DataBagian extends CI_Controller{
    
    public function index()
    {
        $data['title'] = "Data Bagian";
        $data['bagian'] = $this->kepegawaianModel->get_data('data_bagian')->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataBagian',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahData()
    {
        $data['title'] = "Tambah Data Bagian";
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tambahDataBagian',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        }else{
            $nama_pegawai       =$this->input->post('nama_pegawai');
            $nip                =$this->input->post('nip');
            $jabatan            =$this->input->post('jabatan');
            $golongan           =$this->input->post('golongan');
            $tanggal_masuk      =$this->input->post('tanggal_masuk');
            $status             =$this->input->post('status');

            $data = array(

                'nama_pegawai'  => $nama_pegawai,
                'nip'           => $nip,
                'jabatan'       => $jabatan,
                'golongan'      => $golongan,
                'tanggal_masuk' => $tanggal_masuk,
                'status'        => $status,
            );

            $this->kepegawaianModel->insert_data($data,'data_bagian');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
          redirect('admin/dataBagian');
        }
    }

    public function updateData($id)
    {
        $where = array('id_bagian' => $id);
        $data['bagian'] = $this->db->query("SELECT * FROM data_bagian WHERE id_bagian='$id'")->result();
        $data['title'] = "Tambah Data Bagian";
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/updateDataBagian',$data);
        $this->load->view('templates_admin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->updateData();
        }else{
            $id                 =$this->input->post('id_bagian');
            $nama_pegawai       =$this->input->post('nama_pegawai');
            $nip                =$this->input->post('nip');
            $jabatan            =$this->input->post('jabatan');
            $golongan           =$this->input->post('golongan');
            $tanggal_masuk      =$this->input->post('tanggal_masuk');
            $status             =$this->input->post('status');

            $data = array(

                'nama_pegawai'  => $nama_pegawai,
                'nip'           => $nip,
                'jabatan'       => $jabatan,
                'golongan'      => $golongan,
                'tanggal_masuk' => $tanggal_masuk,
                'status'        => $status,
            );

            $where = array(
                'id_bagian' => $id
            );

            $this->kepegawaianModel->update_data('data_bagian',$data, $where);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
          redirect('admin/dataBagian');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_pegawai','nama pegawai','required');
        $this->form_validation->set_rules('nip','nip','required');
        $this->form_validation->set_rules('jabatan','jabatan','required');
        $this->form_validation->set_rules('golongan','golongan','required');
        $this->form_validation->set_rules('tanggal_masuk','tanggal masuk','required');
        $this->form_validation->set_rules('status','status','required');
    }

    public function deleteData($id)
    {
        $where = array('id_bagian' => $id);
        $this->kepegawaianModel->delete_data($where, 'data_bagian');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Dihapus</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
          redirect('admin/dataBagian');
    }
}
?>