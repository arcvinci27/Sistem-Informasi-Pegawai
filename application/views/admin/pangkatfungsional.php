<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <a class="mb-2 mt-2 btn btn-sm btn-success" href="<?php echo base_url('admin/pangkatFungsional/tambahData') ?>"><i class="fas fa-plus"></i> Tambah Data Pangkat Fungsional</a>

    <tr>
        <th><p>Syarat: </p></th>
        <th><p>1. FC SAH SK PANGKAT TERAKHIR           || 5. FC SAH IJAZAH TERAKHIR DAN TRANSKRIP NILAI (PDF)</p></th>
        <th><p>2. PENETAPAN ANGKA KREDIT(PAK)ASLI      || 6. FC SAH PENGANGKATAN JABATAN FUNGSIONAL</p></th>
        <th><p>3. FC SAH SK KENAIKAN JABATAN           || 7. PENILAIAN PRESTASI KERJA DUA TAHUN TERAKHIR</p></th>
        <th><p>4. PEJABAT FUNGSIONAL SELESAI TUGAS BELAJAR DAN DIANGKAT KEMBALI DALAM JABATAN FUNGSIONAL MELAMPIRKAN (PDF):</p></th>
        <th><p>- SK PEMBEBASAN SEMENTARA DARI JABATAN FUNGSIONAL</p></th>
        <th><p>- FC SAH SK TUBEL</p></th>
        <th><p>- FC SAH PUTUSAN PENGANGKATAN KEMBALI JABATAN FUNGSIONAL</p></th>
        <th><p>- FC SAH IJAZAH DAN TRANSKRIP NILAI</p></th>
        <th><p>- SERTIFIKAT AKREDITASI PRODI</p></th>
    </tr>

    <table class="table table-stripped table-bordered">
        <tr>
            <th class="text-center">NO</th>
            <th class="text-center">SK PANGKAT TERAKHIR</th>
            <th class="text-center">PENETAPAN ANGKA KREDIT</th>
            <th class="text-center">SK KENAIKAN JABATAN</th>
            <th class="text-center">SK PENGANGKATAN JABATAN FUNGSIONAL</th>
            <th class="text-center">SK IJAZAH&TRANSKRIP</th>
            <th class="text-center">PRESTASI KERJA</th>
            <th class="text-center">PEJABAT FUNGSIONAL SELESAI TUGAS BELAJAR&DIANGKAT KEMBALI</th>
            <th class="text-center">AKSI</th>
        </tr>

        <?php $no=1; foreach($fungsional as $f) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $f->sk_pangkat_terakhir ?></td>
                <td><?php echo $f->pak ?></td>
                <td><?php echo $f->sk_naik_jabatan ?></td>
                <td><?php echo $f->sk_pengangkatan ?></td>
                <td><?php echo $f->sk_ijazah_transkrip ?></td>
                <td><?php echo $f->prestasi_kerja ?></td>
                <td><?php echo $f->pejabat_fungsional ?></td>
                <td>
                    <center>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/pangkatFungsional/updateData/'.$f->id_fungsional) ?>"><i class="fas fa-edit"></i></a>
                        <a onclick="return confirm('Anda akan menghapus data?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/pangkatFungsional/deleteData/'.$f->id_fungsional) ?>"><i class="fas fa-trash"></i></a>
                    </center>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</div>