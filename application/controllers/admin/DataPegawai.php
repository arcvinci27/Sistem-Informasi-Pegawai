<?php 

class dataPegawai extends CI_Controller{

    public function index()
        {
            $data['title'] = "Data Pegawai";
            $data['pegawai'] = $this->kepegawaianModel->get_data('data_pegawai')->result();
            $this->load->view('templates_admin/header',$data);
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/dataPegawai',$data);
            $this->load->view('templates_admin/footer');
        }

        public function tambahData()
        {
            $data['title'] = "Tambah Data Pegawai";
            $this->load->view('templates_admin/header',$data);
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/formTambahDataPegawai',$data);
            $this->load->view('templates_admin/footer');
        }

        public function tambahDataAksi()
        {
            $this->_rules();

            if($this->form_validation->run() == FALSE) {
                $this->tambahData();
            }else{
                $nama                   = $this->input->post('nama');
                $nip                    = $this->input->post('nip');
                $ttl                    = $this->input->post('ttl');
                $tmt_cpns               = $this->input->post('tmt_cpns');
                $gol_ruang              = $this->input->post('gol_ruang');
                $tmt_pangkat            = $this->input->post('tmt_pangkat');
                $jabatan                = $this->input->post('jabatan');
                $tmt_jabatan            = $this->input->post('tmt_jabatan');
                $eselon                 = $this->input->post('eselon');
                $lembaga_pendidikan     = $this->input->post('lembaga_pendidikan');
                $tahun_lulus            = $this->input->post('tahun_lulus');
                $tk_ijazah              = $this->input->post('tk_ijazah');
                $jurusan                = $this->input->post('jurusan');
                $agama                  = $this->input->post('agama');
                $jenis_kelamin          = $this->input->post('jenis_kelamin');

                $data = array(
                    'nama'                  => $nama,
                    'nip'                   => $nip,
                    'ttl'                   => $ttl,
                    'tmt_cpns'              => $tmt_cpns,
                    'gol_ruang'             => $gol_ruang,
                    'tmt_pangkat'           => $tmt_pangkat,
                    'jabatan'               => $jabatan,
                    'tmt_jabatan'           => $tmt_jabatan,
                    'eselon'                => $eselon,
                    'lembaga_pendidikan'    => $lembaga_pendidikan,
                    'tahun_lulus'           => $tahun_lulus,
                    'tk_ijazah'             => $tk_ijazah,
                    'jurusan'               => $jurusan,
                    'agama'                 => $agama,
                    'jenis_kelamin'         => $jenis_kelamin,
                );

                $this->kepegawaianModel->insert_data($data,'data_pegawai');
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data Berhasil Ditambahkan</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
                redirect('admin/dataPegawai');
            }
        }

        public function updateData($id)
        {
            $where = array('id_pegawai' => $id);
            $data['title'] = 'Update Data Pegawai';
            $data['pegawai'] = $this->db->query("SELECT * FROM data_pegawai WHERE id_pegawai='$id'")->result();
            $this->load->view('templates_admin/header',$data);
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/formUpdateDataPegawai',$data);
            $this->load->view('templates_admin/footer');
        }

        public function updateDataAksi()
        {
            $this->_rules();

            if($this->form_validation->run() == FALSE) {
                $this->updateData();
            }else{
                $id                     = $this->input->post('id_pegawai');
                $nama                   = $this->input->post('nama');
                $nip                    = $this->input->post('nip');
                $ttl                    = $this->input->post('ttl');
                $tmt_cpns               = $this->input->post('tmt_cpns');
                $gol_ruang              = $this->input->post('gol_ruang');
                $tmt_pangkat            = $this->input->post('tmt_pangkat');
                $jabatan                = $this->input->post('jabatan');
                $tmt_jabatan            = $this->input->post('tmt_jabatan');
                $eselon                 = $this->input->post('eselon');
                $lembaga_pendidikan     = $this->input->post('lembaga_pendidikan');
                $tahun_lulus            = $this->input->post('tahun_lulus');
                $tk_ijazah              = $this->input->post('tk_ijazah');
                $jurusan                = $this->input->post('jurusan');
                $agama                  = $this->input->post('agama');
                $jenis_kelamin          = $this->input->post('jenis_kelamin');

                $data = array(
                    'nama'                  => $nama,
                    'nip'                   => $nip,
                    'ttl'                   => $ttl,
                    'tmt_cpns'              => $tmt_cpns,
                    'gol_ruang'             => $gol_ruang,
                    'tmt_pangkat'           => $tmt_pangkat,
                    'jabatan'               => $jabatan,
                    'tmt_jabatan'           => $tmt_jabatan,
                    'eselon'                => $eselon,
                    'lembaga_pendidikan'    => $lembaga_pendidikan,
                    'tahun_lulus'           => $tahun_lulus,
                    'tk_ijazah'             => $tk_ijazah,
                    'jurusan'               => $jurusan,
                    'agama'                 => $agama,
                    'jenis_kelamin'         => $jenis_kelamin,
                );

                $where = array(
                    'id_pegawai' => $id
                );

                $this->kepegawaianModel->update_data('data_pegawai',$data,$where);
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data Berhasil Diupdate</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
                redirect('admin/dataPegawai');
            }
        }

        public function _rules()
    {
        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('nip','nip','required');
        $this->form_validation->set_rules('ttl','ttl','required');
        $this->form_validation->set_rules('tmt_cpns','tmt cpns','required');
        $this->form_validation->set_rules('gol_ruang','gol ruang','required');
        $this->form_validation->set_rules('tmt_pangkat','tmt pangkat','required');
        $this->form_validation->set_rules('jabatan','jabatan','required');
        $this->form_validation->set_rules('tmt_jabatan','tmt jabatan','required');
        $this->form_validation->set_rules('eselon','eselon','required');
        $this->form_validation->set_rules('lembaga_pendidikan','lembaga pendidikan','required');
        $this->form_validation->set_rules('tahun_lulus','tahun lulus','required');
        $this->form_validation->set_rules('tk_ijazah','tk ijazah','required');
        $this->form_validation->set_rules('jurusan','jurusan','required');
        $this->form_validation->set_rules('agama','agama','required');
        $this->form_validation->set_rules('jenis_kelamin','jenis kelamin','required');
    }


    public function deleteData($id)
    {
        $where = array('id_pegawai' => $id);
        $this->kepegawaianModel->delete_data($where, 'data_pegawai');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Dihapus</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
          redirect('admin/dataPegawai');
    }

        
}


?>