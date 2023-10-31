<?php

class cutiPns extends CI_Controller{

    public function index()
    {
        $data['title'] = "Cuti PNS";
        $data['pns'] = $this->kepegawaianModel->get_data('cuti_pns')->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/cutiPns',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahData()
    {
        $data['title'] = "Tambah Data Cuti PNS";
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tambahCutiPns',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahDataAksi()
    {
        $form_cuti          = $_FILES['form_cuti']['nama'];
        if($form_cuti=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('form_cuti')){
                echo "Berkas Gagal Diupload";
            }else{
                $form_cuti=$this->upload->data('file_name');
            }
        }
        $notadinas_bidang   = $_FILES['notadinas_bidang']['nama'];
        if($notadinas_bidang=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('notadinas_bidang')){
                echo "Berkas Gagal Diupload"; 
            }else{
                $notadinas_bidang=$this->upload->data('file_name');
            }
        }
        $surat_usulan       = $_FILES['surat_usulan']['nama'];
        if($surat_usulan=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('surat_usulan')){
                echo "Berkas Gagal Diupload";
            }else{
                $surat_usulan=$this->upload->data('file_name');
            }
        }

        $data = array(
            'form_cuti'             => $form_cuti,
            'notadinas_bidang'      => $notadinas_bidang,
            'surat_usulan'          => $surat_usulan,
        );

        $this->kepegawaianModel->insert_data($data,'cuti_pns');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('admin/cutiPns');
    }

    public function updateData($id)
    {
        $where = array('id_cutipns' => $id);
        $data['title'] = "Update Data Cuti PNS";
        $data['pns'] = $this->db->query("SELECT * FROM cuti_pns where id_cutipns='$id'")->result();
        $data['title'] = "Tambah Data Cuti PNS";
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/updateCutiPns',$data);
        $this->load->view('templates_admin/footer');
    }

    public function updateDataAksi()
    {
        $form_cuti          = $_FILES['form_cuti']['nama'];
        if($form_cuti){
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('form_cuti')){
                $form_cuti=$this->upload->data('file_name');
                $this->db->set('form_cuti',$form_cuti);
            }else{
                echo $this->upload->display_errors();
            }
        }
        $notadinas_bidang   = $_FILES['notadinas_bidang']['nama'];
        if($notadinas_bidang){
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('notadinas_bidang')){
                $notadinas_bidang=$this->upload->data('file_name');
                $this->db->set('notadinas_bidang',$notadinas_bidang); 
            }else{
                echo $this->upload->display_errors();
            }
        }
        $surat_usulan       = $_FILES['surat_usulan']['nama'];
        if($surat_usulan){
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('surat_usulan')){
                $surat_usulan=$this->upload->data('file_name');
                $this->db->set('surat_usulan',$surat_usulan);
            }else{
                echo $this->upload->display_errors();
            }
        }

        $data = array(
            'form_cuti'             => $form_cuti,
            'notadinas_bidang'      => $notadinas_bidang,
            'surat_usulan'          => $surat_usulan,
        );

        $where = array(
            'id_cutipns'        => $id
        );

        $this->kepegawaianModel->update_data('cuti_pns',$data,$where);
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Diupdate</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('admin/cutiPns');
    }

    public function deleteData($id)
    {
        $where = array('id_cutipns' => $id);
        $this->kepegawaianModel->delete_data($where, 'cuti_pns');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Dihapus</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/cutiPns');
    }
}

?>