<?php

class cutiBelajar extends CI_Controller{

    public function index()
    {
        $data['title'] = "Cuti/Ijin Belajar";
        $data['belajar'] = $this->kepegawaianModel->get_data('cuti_belajar')->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/cutiBelajar',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahData()
    {
        $data['title'] = "Tambah Data Cuti/Ijin Belajar";
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tambahCutiBelajar',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahDataAksi()
    {
        $surat_permohonan       = $_FILES['surat_permohonan']['nama'];
        if($surat_permohonan=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('surat_permohonan')){
                echo "Berkas Gagal Diupload";
            }else{
                $surat_permohonan=$this->upload->data('file_name');
            }
        }
        $disposisi          = $_FILES['disposisi']['nama'];
        if($disposisi=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('disposisi')){
                echo "Berkas Gagal Diupload";
            }else{
                $disposisi=$this->upload->data('file_name');
            }
        }
        $surat_pengantar        = $_FILES['surat_pengantar']['nama'];
        if($surat_pengantar=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('surat_pengantar')){
                echo "Berkas Gagal Diupload";
            }else{
                $surat_pengantar=$this->upload->data('file_name');
            }
        }
        $surat_pengantar_usulan     = $_FILES['surat_pengantar_usulan']['nama'];
        if($surat_pengantar_usulan=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('surat_pengantar_usulan')){
                echo "Berkas Gagal Diupload";
            }else{
                $surat_pengantar_usulan=$this->upload->data('file_name');
            }
        }

        $data = array(
            'surat_permohonan'          => $surat_permohonan,
            'disposisi'                 => $disposisi,
            'surat_pengantar'           => $surat_pengantar,
            'surat_pengantar_usulan'    => $surat_pengantar_usulan,
        );

        $this->kepegawaianModel->insert_data($data,'cuti_belajar');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('admin/cutiBelajar');
    }

    public function updateData($id)
    {
        $where = array('id_cutibelajar' => $id);
        $data['title'] = " Update Data Cuti/Ijin Belajar";
        $data['belajar'] = $this->db->query("SELECT * FROM cuti_belajar where id_cutibljr='$id'")->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/updateCutiBelajar',$data);
        $this->load->view('templates_admin/footer');
    }
}

?>