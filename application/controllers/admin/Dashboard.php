<?php 

class Dashboard extends CI_Controller{
    public function Index()
    {
        $data['title'] = "Dashboard";
        $pegawai = $this->db->query("SELECT * FROM data_pegawai");
        $bagian = $this->db->query("SELECT * FROM data_bagian");
        $data['pegawai']=$pegawai->num_rows();
        $data['bagian']=$bagian->num_rows();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard',$data);
        $this->load->view('templates_admin/footer');
    }
}
?>