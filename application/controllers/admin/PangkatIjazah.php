<?php 

class pangkatIjazah extends CI_Controller{

    public function index()
    {
        $data['title'] = "Pangkat Penyesuaian Ijazah";
        $data['ijazah'] = $this->kepegawaianModel->get_data('pangkat_ijazah')->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/pangkatIjazah',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahData()
    {
        $data['title'] = "Tambah Data Pangkat Penyesuaian Ijazah";
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tambahPangkatIjazah',$data);
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
        $ijazah_transkrip           = $_FILES['ijazah_transkrip']['name'];
        if($ijazah_transkrip=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('ijazah_transkrip')){
                echo "Berkas Gagal Diupload";
            }else{
                $ijazah_transkrip=$this->upload->data('file_name');
            }
        }
        $surat_ijin_belajar        = $_FILES['surat_ijin_belajar']['name'];
        if($surat_ijin_belajar=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('surat_ijin_belajar')){
                echo "Berkas Gagal Diupload";
            }else{
                $surat_ijin_belajar=$this->upload->data('file_name');
            }
        }
        $surat_lulus_ujian          = $_FILES['surat_lulus_ujian']['name'];
        if($surat_lulus_ujian=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('surat_lulus_ujian')){
                echo "Berkas Gagal Diupload";
            }else{
                $surat_lulus_ujian=$this->upload->data('file_name');
            }
        }
        $uraian_tugas               = $_FILES['uraian_tugas']['name'];
        if($uraian_tugas=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('uraian_tugas')){
                echo "Berkas Gagal Diupload";
            }else{
                $uraian_tugas=$this->upload->data('file_name');
            }
        }
        $prestasi_kerja             = $_FILES['prestasi_kerja']['name'];
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

        $data = array(
            'sk_pangkat_terakhir'       => $sk_pangkat_terakhir,
            'ijazah_transkrip'          => $ijazah_transkrip,
            'surat_ijin_belajar'        => $surat_ijin_belajar,
            'surat_lulus_ujian'         => $surat_lulus_ujian,
            'uraian_tugas'              => $uraian_tugas,
            'prestasi_kerja'            => $prestasi_kerja,
        );

        $this->kepegawaianModel->insert_data($data,'pangkat_ijazah');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('admin/pangkatIjazah');
    }

    public function updateData($id)
    {
        $where = array('id_ijazah' => $id);
        $data['title'] = "Update Data Pangkat Penyesuaian Ijazah";
        $data['ijazah'] = $this->db->query("SELECT * FROM pangkat_ijazah where id_ijazah='$id'")->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/updatePangkatIjazah',$data);
        $this->load->view('templates_admin/footer');
    }

    public function updateDataAksi()
    {
        $sk_pangkat_terakhir        = $_FILES['sk_pangkat_terakhir']['name'];
        if($sk_pangkat_terakhir){
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('sk_pangkat_terakhir')){
                $sk_pangkat_terakhir=$this->upload->data('file_name');
                $this->db->set('sk_pangkat_terakhir',$sk_pangkat_terakhir);
            }else{
                echo $this->upload->display_erors();
            }
        }
        $ijazah_transkrip           = $_FILES['ijazah_transkrip']['name'];
        if($ijazah_transkrip){
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('ijazah_transkrip')){
                $ijazah_transkrip=$this->upload->data('file_name');
                $this->db->set('ijazah_transkrip',$ijazah_transkrip);
            }else{
                echo $this->upload->display_errors();
            }
        }
        $surat_ijin_belajar        = $_FILES['surat_ijin_belajar']['name'];
        if($surat_ijin_belajar){
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('surat_ijin_belajar')){
                $surat_ijin_belajar=$this->upload->data('file_name');
                $this->db->set('surat_ijin_belajar',$surat_ijin_belajar);
            }else{
                echo $this->upload->display_errors();
            }
        }
        $surat_lulus_ujian          = $_FILES['surat_lulus_ujian']['name'];
        if($surat_lulus_ujian){
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('surat_lulus_ujian')){
                $surat_lulus_ujian=$this->upload->data('file_name');
                $this->db->set('surat_lulus_ujian',$surat_lulus_ujian);
            }else{
                echo $this->upload->display_errors();
            }
        }
        $uraian_tugas               = $_FILES['uraian_tugas']['name'];
        if($uraian_tugas){
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('uraian_tugas')){
                $uraian_tugas=$this->upload->data('file_name');
                $this->db->set('uraian_tugas',$uraian_tugas);
            }else{
                echo $this->upload->display_errors();
            }
        }
        $prestasi_kerja             = $_FILES['prestasi_kerja']['name'];
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

        $data = array(
            'sk_pangkat_terakhir'       => $sk_pangkat_terakhir,
            'ijazah_transkrip'          => $ijazah_transkrip,
            'surat_ijin_belajar'        => $surat_ijin_belajar,
            'surat_lulus_ujian'         => $surat_lulus_ujian,
            'uraian_tugas'              => $uraian_tugas,
            'prestasi_kerja'            => $prestasi_kerja,
        );

        $where = array(
            'id_ijazah'     => $id
        );

        $this->kepegawaianModel->update_data('pangkat_ijazah',$data,$where);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('admin/pangkatIjazah');
    }

    public function deleteData($id)
    {
        $where = array('id_ijazah' => $id);
        $this->kepegawaianModel->delete_data($where, 'pangkat_ijazah');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Dihapus</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/pangkatIjazah');
    }
}

?>