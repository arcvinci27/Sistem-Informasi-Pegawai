<?php 

class pangkatReguler extends CI_Controller{

    public function index()
        {
            $data['title'] = "Pangkat Reguler";
            $data['reguler'] = $this->kepegawaianModel->get_data('pangkat_reguler')->result();
            $this->load->view('templates_admin/header',$data);
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/pangkatReguler',$data);
            $this->load->view('templates_admin/footer');
        }

        public function tambahData()
        {
            $data['title'] = "Tambah Data Pangkat Reguler";
            $this->load->view('templates_admin/header',$data);
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/tambahPangkatReguler',$data);
            $this->load->view('templates_admin/footer');
        }

        public function tambahDataAksi()
        {
            $sk_pangkat_terakhir    = $_FILES['sk_pangkat_terakhir']['name'];
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
            $prestasi_kerja         = $_FILES['prestasi_kerja']['name'];
            if($prestasi_kerja=''){}else{
                $config ['upload_path']     = './assets/folder';
                $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('prestasi_kerja')){
                    echo "Berkas Gagal Diupload";
                }else{
                    $prestasi_kerja=$this->upload->data('file_name');
                }
            }
            $surat_peningkatan_pendidikan         = $_FILES['surat_peningkatan_pendidikan']['name'];
            if($surat_peningkatan_pendidikan=''){}else{
                $config ['upload_path']     = './assets/folder';
                $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('surat_peningkatan_pendidikan')){
                    echo "Berkas Gagal Diupload";
                }else{
                    $surat_peningkatan_pendidikan=$this->upload->data('file_name');
                }
            }
            $sertifikat_ujian_dinas         = $_FILES['sertifikat_ujian_dinas']['name'];
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

            $data = array(
                'sk_pangkat_terakhir'           => $sk_pangkat_terakhir,
                'prestasi_kerja'                => $prestasi_kerja,
                'surat_peningkatan_pendidikan'  => $surat_peningkatan_pendidikan,
                'sertifikat_ujian_dinas'        => $sertifikat_ujian_dinas,
            );

            $this->kepegawaianModel->insert_data($data,'pangkat_reguler');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('admin/pangkatReguler');
        }

        public function updateData($id)
        {
            $where = array('id_reguler' => $id);
            $data['title'] = 'Update Data Pangkat Reguler';
            $data['reguler'] = $this->db->query("SELECT * FROM pangkat_reguler WHERE id_reguler='$id'")->result();
            $this->load->view('templates_admin/header',$data);
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/updatePangkatReguler',$data);
            $this->load->view('templates_admin/footer');
        }

        public function updateDataAksi()
        {
            $id                     = $this->input->post('id_reguler');
            $sk_pangkat_terakhir    = $_FILES['sk_pangkat_terakhir']['name'];
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
            $prestasi_kerja         = $_FILES['prestasi_kerja']['name'];
            if($prestasi_kerja){
                $config ['upload_path']     = './assets/folder';
                $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
                $this->load->library('upload',$config);
                if($this->upload->do_upload('prestasi_kerja')){
                    $prestasi_kerja=$this->upload->data('file_name');
                    $this->db->set('prestasi_kerja',$prestasi_kerja);
                }else{
                    echo $this->upload->display_errors();
                }
            }
            $surat_peningkatan_pendidikan         = $_FILES['surat_peningkatan_pendidikan']['name'];
            if($surat_peningkatan_pendidikan){
                $config ['upload_path']     = './assets/folder';
                $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
                $this->load->library('upload',$config);
                if($this->upload->do_upload('surat_peningkatan_pendidikan')){
                    $surat_peningkatan_pendidikan=$this->upload->data('file_name');
                    $this->db->set('surat_peningkatan_pendidikan',$surat_peningkatan_pendidikan);
                }else{
                    echo $this->upload->display_errors();
                }
            }
            $sertifikat_ujian_dinas         = $_FILES['sertifikat_ujian_dinas']['name'];
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

            $data = array(
                'sk_pangkat_terakhir'           => $sk_pangkat_terakhir,
                'prestasi_kerja'                => $prestasi_kerja,
                'surat_peningkatan_pendidikan'  => $surat_peningkatan_pendidikan,
                'sertifikat_ujian_dinas'        => $sertifikat_ujian_dinas,
            );

            $where = array(
                'id_reguler'    => $id
            );

            $this->kepegawaianModel->update_data('pangkat_reguler',$data,$where);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('admin/pangkatReguler');
        }

        public function deleteData($id)
        {
            $where = array('id_reguler' => $id);
            $this->kepegawaianModel->delete_data($where, 'pangkat_reguler');
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Data Berhasil Dihapus</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('admin/pangkatReguler');
        }
        
    
}

?>