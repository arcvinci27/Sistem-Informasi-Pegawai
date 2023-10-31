<?php 

class pangkatFungsional extends CI_Controller{

    public function index()
    {
        $data['title'] = "Pangkat Fungsional";
        $data['fungsional'] = $this->kepegawaianModel->get_data('pangkat_fungsional')->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/pangkatFungsional',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahData()
    {
        $data['title'] = "Tambah Data Pangkat Fungsional";
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tambahPangkatFungsional',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahDataAksi()
    {
        $sk_pangkat_terakhir      = $_FILES['sk_pangkat_terakhir']['nama'];
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
        $pak        = $_FILES['pak']['nama'];
        if($pak=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('pak')){
                echo "Berkas Gagal Diupload";
            }else{
                $pak=$this->upload->data('file_name');
            }
        }
        $sk_naik_jabatan        = $_FILES['sk_naik_jabatan']['nama'];
        if($sk_naik_jabatan=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('sk_naik_jabatan')){
                echo "Berkas Gagal Diupload";
            }else{
                $sk_naik_jabatan=$this->upload->data('file_name');
            }
        }
        $sk_pengangkatan        = $_FILES['sk_pengangkatan']['nama'];
        if($sk_pengangkatan=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('sk_pengangkatan')){
                echo "Berkas Gagal Diupload";
            }else{
                $sk_pengangkatan=$this->upload->data('file_name');
            }
        }
        $sk_ijazah_transkrip    = $_FILES['sk_ijazah_transkrip']['name'];
        if($sk_ijazah_transkrip=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('sk_ijazah_transkrip')){
                echo "Berkas Gagal Diupload";
            }else{
                $sk_ijazah_transkrip=$this->upload->data('file_name');
            }
        }
        $prestasi_kerja         = $_FILES['prestasi_kerja']['nama'];
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
        $pejabat_fungsional     = $_FILES['pejabat_fungsional']['nama'];
        if($pejabat_fungsional=''){}else{
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('pejabat_fungsional')){
                echo "Berkas Gagal Diupload";
            }else{
                $pejabat_fungsional=$this->upload->data('file_name');
            }
        }

        $data = array(
            'sk_pangkat_terakhir'           => $sk_pangkat_terakhir,
            'pak'                           => $pak,
            'sk_naik_jabatan'               => $sk_naik_jabatan,
            'sk_pengangkatan'               => $sk_pengangkatan,
            'sk_ijazah_transkrip'           => $sk_ijazah_transkrip,
            'prestasi_kerja'                => $prestasi_kerja,
            'pejabat_fungsional'            => $pejabat_fungsional,
        );

        $this->kepegawaianModel->insert_data($data,'pangkat_fungsional');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('admin/pangkatFungsional');
    }

    public function updateData($id)
    {
        $where = array('id_fungsional' => $id);
        $data['title'] = 'Update Data Pangkat Fungsional';
        $data['fungsional'] = $this->db->query("SELECT * FROM pangkat_fungsional WHERE id_fungsional='$id'")->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/updatePangkatFungsional',$data);
        $this->load->view('templates_admin/footer');
    }

    public function updateDataAksi()
    {
        $sk_pangkat_terakhir      = $_FILES['sk_pangkat_terakhir']['nama'];
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
        $pak        = $_FILES['pak']['nama'];
        if($pak){
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('pak')){
                $pak=$this->upload->data('file_name');
                $this->db->set('pak',$pak);
            }else{
                echo $this->upload->display_errors();
            }
        }
        $sk_naik_jabatan        = $_FILES['sk_naik_jabatan']['nama'];
        if($sk_naik_jabatan){
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('sk_naik_jabatan')){
                $sk_naik_jabatan=$this->upload->data('file_name');
                $this->db->set('sk_naik_jabatan',$sk_naik_jabatan);
            }else{
                echo $this->upload->display_errors();
            }
        }
        $sk_pengangkatan        = $_FILES['sk_pengangkatan']['nama'];
        if($sk_pengangkatan){
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('sk_pengangkatan')){
                $sk_pengangkatan=$this->upload->data('file_name');
                $this->db->set('sk_pengangkatan',$sk_pengangkatan);
            }else{
                echo $this->upload->display_errors();
            }
        }
        $sk_ijazah_transkrip    = $_FILES['sk_ijazah_transkrip']['name'];
        if($sk_ijazah_transkrip){
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('sk_ijazah_transkrip')){
                $sk_ijazah_transkrip=$this->upload->data('file_name');
                $this->db->set('sk_ijazah_transkrip',$sk_ijazah_transkrip);
            }else{
                echo $this->upload->display_errors();
            }
        }
        $prestasi_kerja         = $_FILES['prestasi_kerja']['nama'];
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
        $pejabat_fungsional     = $_FILES['pejabat_fungsional']['nama'];
        if($pejabat_fungsional){
            $config ['upload_path']     = './assets/folder';
            $config ['allowed_types']   = 'jpg|jpeg|png|pdf';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('pejabat_fungsional')){
                $pejabat_fungsional=$this->upload->data('file_name');
                $this->db->set('pejabat_fungsional',$pejabat_fungsional);
            }else{
                echo $this->upload->display_errors();
            }
        }

        $data = array(
            'sk_pangkat_terakhir'       => $sk_pangkat_terakhir,
            'pak'                       => $pak,
            'sk_naik_jabatan'           => $sk_naik_jabatan,
            'sk_pengangkatan'           => $sk_pengangkatan,
            'sk_ijazah_transkrip'       => $sk_ijazah_transkrip,
            'prestasi_kerja'            => $prestasi_kerja,
            'pejabat_fungsional'        => $pejabat_fungsional,
        );

        $where = array(
            'id_fungsional'     => $id
        );

        $this->kepegawaianModel->update_data('pangkat_fungsional',$data,$where);
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Diupdate</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
        redirect('admin/pangkatFungsional');
    }

    public function deleteData($id)
        {
            $where = array('id_fungsional' => $id);
            $this->kepegawaianModel->delete_data($where, 'pangkat_fungsional');
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Data Berhasil Dihapus</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('admin/pangkatFungsional');
        }
}
?>