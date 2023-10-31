<?php

class pangkatStruktural extends CI_Controller{

    public function index()
    {
        $data['title'] = "Pangkat Struktural";
        $data['struktural'] = $this->kepegawaianModel->get_data('pangkat_struktural')->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/pangkatStruktural',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahData()
    {
        $data['title'] = "Tambah data Pangkat Struktural";
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tambahPangkatStruktural',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahDataAksi()
    {
        $sk_pangkat_terakhir        = $_FILES['sk_pangkat_terakhir']['name'];
        if($sk_pangkat_terakhir=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('sk_pangkat_terakhir')){
                echo "Berkas Gagal Diupload";
            }else{
                $sk_pangkat_terakhir=$this->upload->data('file_name');
            }
        }
        $spmj_baru      = $_FILES['spmj_baru']['name'];
        if($spmj_baru=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('spmj_baru')){
                echo "Berkas Gagal Diupload";
            }else{
                $spmj_baru=$this->upload->data('file_name');
            }
        }

        $spmj_lama      = $_FILES['spmj_lama']['name'];
        if($spmj_lama=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('spmj_lama')){
                echo "Berkas Gagal Diupload";
            }else{
                $spmj_lama=$this->upload->data('file_name');
            }
        }

        $pembebasan_sementara_jabatan       = $_FILES['pembebasan_sementara_jabatan']['name'];
        if($pembebasan_sementara_jabatan=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('pembebasan_sementara_jabatan')){
                echo "Berkas Gagal Diuplaod";
            }else{
                $pembebasan_sementara_jabatan=$this->upload->data('file_name');
            }
        }

        $sertifikat_ujian_dinas             = $_FILES['sertifikat_ujian_dinas']['name'];
        if($sertifikat_ujian_dinas=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('sertifikat_ujian_dinas')){
                echo "Berkas Gagal Diupload";
            }else{
                $sertifikat_ujian_dinas=$this->upload->data('file_name');
            }
        }

        $prestasi_kerja                     = $_FILES['prestasi_kerja']['name'];
        if($prestasi_kerja=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpf|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('prestasi_kerja')){
                echo "Berkas Gagal Diuplaod";
            }else{
                $prestasi_kerja=$this->upload->data('file_name');
            }
        }

        $jabatan_pangkat_atasan             = $_FILES['jabatan_pangkat_atasan']['name'];
        if($jabatan_pangkat_atasan=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('jabatan_pangkat_atasan')){
                echo "Berkas Gagal Diupload";
            }else{
                $jabatan_pangkat_atasan=$this->upload->data('file_name');
            }
        }

        $data = array(
            'sk_pangkat_terakhir'               => $sk_pangkat_terakhir,
            'spmj_baru'                         => $spmj_baru,
            'spmj_lama'                         => $spmj_lama,
            'pembebasan_sementara_jabatan'      => $pembebasan_sementara_jabatan,
            'sertifikat_ujian_dinas'            => $sertifikat_ujian_dinas,
            'prestasi_kerja'                    => $prestasi_kerja,
            'jabatan_pangkat_atasan'            => $jabatan_pangkat_atasan,
        );

        $this->kepegawaianModel->insert_data($data,'pangkat_struktural');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('admin/pangkatStruktural');
    }

    public function updateData($id)
    {
        $where = array('id_struktural' => $id);
        $data['title'] = 'Update Data Pangkat Struktural';
        $data['struktural'] = $this->db->query("SELECT * FROM pangkat_struktural WHERE id_struktural='$id'")->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/updatePangkatStruktural',$data);
        $this->load->view('templates_admin/footer');
    }

    public function updateDataAksi()
    {
        $sk_pangkat_terakhir        = $_FILES['sk_pangkat_terakhir']['nama'];
        if($sk_pangkat_terakhir){
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('sk_pangkat_terakhir')){
                $sk_pangkat_terakhir=$this->upload->data('file_name');
                $this->db->set('sk_pangkat_terakhir',$sk_pangkat_terakhir);
            }else{
                echo $this->upload->display_errors();
            }
        }
        $spmj_baru      = $_FILES['spmj_baru']['nama'];
        if($spmj_baru){
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('spmj_baru')){
                $spmj_baru=$this->upload->data('file_name');
                $this->db->set('spmj_baru',$spmj_baru);
            }else{
                echo $this->upload->display_errors();
            }
        }

        $spmj_lama      = $_FILES['spmj_lama']['nama'];
        if($spmj_lama){
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('spmj_lama')){
                $spmj_lama=$this->upload->data('file_name');
                $this->db->set('spmj_lama',$spmj_lama);
            }else{
                echo $this->upload->display_errors();
            }
        }

        $pembebasan_sementara_jabatan       = $_FILES['pembebasab_sementara_jabatan']['nama'];
        if($pembebasan_sementara_jabatan){
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('pembebasan_sementara_jabatan')){
                $pembebasan_sementara_jabatan=$this->upload->data('file_name');
                $this->db->set('pembebasan_sementara_jabatan',$pembebasan_sementara_jabatan);
            }else{
                echo $this->upload->display_errors();
            }
        }

        $sertifikat_ujian_dinas             = $_FILES['sertifikat_ujian_dinas']['nama'];
        if($sertifikat_ujian_dinas){
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('sertifikat_ujian_dinas')){
                $sertifikat_ujian_dinas=$this->upload->data('file_name');
                $this->db->set('sertifikat_ujian_dinas',$sertifikat_ujian_dinas);
            }else{
                echo $this->upload->display_errors();
            }
        }

        $prestasi_kerja                     = $_FILES['prestasi_kerja']['nama'];
        if($prestasi_kerja){
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpf|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('prestasi_kerja')){
                $prestasi_kerja=$this->upload->data('file_name');
                $this->db->set('prestasi_kerja',$prestasi_kerja);
            }else{
                echo $this->upload->display_errors();
            }
        }

        $jabatan_pangkat_atasan             = $_FILES['jabatan_pangkat_atasan']['nama'];
        if($jabatan_pangkat_atasan){
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('jabatan_pangkat_atasan')){
                $jabatan_pangkat_atasan=$this->upload->data('file_name');
                $this->db->set('jabatan_pangkat_atasan',$jabatan_pangkat_atasan);
            }else{
                echo $this->upload->display_errors();
            }
        }

        $data = array(
            'sk_pangkat_terakhir'               => $sk_pangkat_terakhir,
            'spmj_baru'                         => $spmj_baru,
            'spmj_lama'                         => $spmj_lama,
            'pembebasan_sementara_jabatan'      => $pembebasan_sementara_jabatan,
            'sertifikat_ujian_dinas'            => $sertifikat_ujian_dinas,
            'prestasi_kerja'                    => $prestasi_kerja,
            'jabatan_pangkat_atasan'            => $jabatan_pangkat_atasan,
        );

        $where = array(
            'id_struktural'     => $id
        );

        $this->kepegawaianModel->update_data('pangkat_struktural',$data,$where);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('admin/pangkatStruktural');
    }

    public function deleteData($id)
    {
        $where = array('id_struktural' => $id);
        $this->kepegawaianModel->delete_data($where, 'pangkat_struktural');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Dihapus</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/pangkatStruktural');
    }
}

?>