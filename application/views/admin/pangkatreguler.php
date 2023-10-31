<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <a class="mb-2 mt-2 btn btn-sm btn-success" href="<?php echo base_url('admin/pangkatReguler/tambahData') ?>"><i class="fas fa-plus"></i> Tambah Data Naik Pangkat Reguler</a>

    <tr>
        <th><p>Syarat: </p></th>
        <th><p>1. FC SAH SK PANGKAT TERAKHIR                ||    3. SURAT PENINGKATAN PENDIDIKAN</p></th>
        <th><p>2. PENILAIAN PRESTASI KERJA 2 TAHUN TERAKHIR ||    4. FC SAH SERTIFIKAT UJIAN DINAS</p></th>
    </tr>
    
    <table class="table table-striped table-bordered">
        <tr>
            <th class="text-center">NO</th>
            <th class="text-center">SK PANGKAT TERAKHIR</th>
            <th class="text-center">PRESTASI KERJA</th>
            <th class="text-center">SURAT PENINGKATAN PENDIDIKAN</th>
            <th class="text-center">SERTIFIKAT UJIAN DINAS</th>
            <th class="text-center">AKSI</th>
        </tr>

        <?php $no=1; foreach($reguler as $r) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $r->sk_pangkat_terakhir ?></td>
                <td><?php echo $r->prestasi_kerja ?></td>
                <td><?php echo $r->surat_peningkatan_pendidikan ?></td>
                <td><?php echo $r->sertifikat_ujian_dinas ?></td>
                <td>
                    <center>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/pangkatReguler/updateData/'.$r->id_reguler) ?>"><i class="fas fa-edit"></i></a>
                        <a onclick="return confirm('Anda akan menghapus data?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/pangkatReguler/deleteData/'.$r->id_reguler) ?>"><i class="fas fa-trash"></i></a>
                    </center>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    
    
</div>