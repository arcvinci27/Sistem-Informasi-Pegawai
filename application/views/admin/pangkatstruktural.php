<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <a class="mb-2 mt-2 btn btn-sm btn-success" href="<?php echo base_url('admin/pangkatStruktural/tambahData') ?>"><i class="fas fa-plus"></i> Tambah Data Pangkat Struktural</a>

    <tr>
        <th><p>Syarat: </p></th>
        <th><p>1. FC SAH SK PANGKAT TERAKHIR</p></th>
        <th><p>2. FC SAH PEMBEBASAN SEMENTARA JABATAN FUNGSIONAL</p></th>
        <th><p>3. FC SAH SERTIFIKAT UJIAN DINAS TK.II/SERTIFIKAT DIKLAT PIM III</p></th>
        <th><p>4. FC SAH PENGANGKATAN JABATAN STRUKTURAL, SURAT PERNYATAAN PELANTIKAN, SPMJ BARU (PDF)</p></th>
        <th><p>5. FC SAH PENGANGKATAN JABATAN STRUKTURAL, SURAT PERNYATAAN PELANTIKAN, SPMJ LAMA (PDF)</p></th>
        <th><p>6. PENILAIAN PRESTASI KERJA 2 TAHUN TERAKHIR</p></th>
        <th><p>7. FC SAH SK JABATAN ATASAN LANGSUNG DAN SK PANGKAT ATASAN LANGSUNG (PDF)</p></th>
    </tr>

    <table class="table table-stripped table-bordered">
        <tr>
            <th class="text-center">NO</th>
            <th class="text-center">SK PANGKAT TERAKHIR</th>
            <th class="text-center">PENGANGKATAN JABATAN, SURAT PERNYATAAN PELANTIKAN, SPMJ BARU</th>
            <th class="text-center">PENGANGKATAN JABATAN, SURAT PERNYATAAN PELANTIKAN, SPMJ LAMA</th>
            <th class="text-center">PEMBEBASAN SEMENTARA JABATAN FUNGSIONAL</th>
            <th class="text-center">SERTIFIKAT UJIAN DINAS TK.II</th>
            <th class="text-center">PRESTASI KERJA</th>
            <th class="text-center">SK JABATAN&PANGKAT ATASAN LANGSUNG</th>
            <th class="text-center">AKSI</th>
        </tr>

        <?php $no=1; foreach($struktural as $s) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $s->sk_pangkat_terakhir ?></td>
            <td><?php echo $s->spmj_baru ?></td>
            <td><?php echo $s->spmj_lama ?></td>
            <td><?php echo $s->pembebasan_sementara_jabatan ?></td>
            <td><?php echo $s->sertifikat_ujian_dinas ?></td>
            <td><?php echo $s->prestasi_kerja ?></td>
            <td><?php echo $s->jabatan_pangkat_atasan ?></td>
            <td>
                <center>
                <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/pangkatStruktural/updateData/'.$s->id_struktural) ?>"><i class="fas fa-edit"></i></a>
                <a onclick="return confirm('Anda akan menghapus data?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/pangkatStruktural/deleteData/'.$s->id_struktural) ?>"><i class="fas fa-trash"></i></a>
                </center>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    
    
</div>