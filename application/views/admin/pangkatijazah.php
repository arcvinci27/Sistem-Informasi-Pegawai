<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <a class="mb-2 mt-2 btn btn-sm btn-success" href="<?php echo base_url('admin/pangkatIjazah/tambahData') ?>"><i class="fas fa-plus"></i> Tambah Data Pangkat Penyesuaian Ijazah</a>

    <tr>
        <th><p>Syarat :</p></th>
        <th><p>1. FC SAH SK PANGKAT TERAKHIR</p></th>
        <th><p>2. FC SAH IJAZAH TERAKHIR DAN TRANSKRIP NILAI</p></th>
        <th><p>3. FC SAH SURAT KEPUTUSAN IJIN BELAJAR</p></th>
        <th><p>4. FC SAH SURAT TANDA LULU PENYESUAIAN IJAZAH</p></th>
        <th><p>5. URAIAN TUGAS SESUAI IJAZAH(ASLI) OLEH PIMPINAN UNIT KERJA</p></th>
        <th><p>6. PENILAIAN PRESTASI KERJA DUA TAHUN TERAKHIR</p></th>
    </tr>

    <table class="table table-stripped table-bordered">
        <tr>
            <th class="text-center">NO</th>
            <th class="text-center">SK PANGKAT TERAKHIR</th>
            <th class="text-center">IJAZAH TERAKHIR&TRANSKRIP NILAI</th>
            <th class="text-center">SURAT KEPUTUSAN IJIN BELAJAR</th>
            <th class="text-center">SURAT TANDA LULUS UJIAN PENYESUAIAN IJAZAH</th>
            <th class="text-center">URAIAN TUGAS SESUAI IJAZAH OLEH PIMPINAN UNIT KERJA</th>
            <th class="text-center">PRESTASI KERJA DUA TAHUN TERAKHIR</th>
            <th class="text-center">AKSI</th>
        </tr>

        <?php $no=1; foreach($ijazah as $i) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $i->sk_pangkat_terakhir ?></td>
            <td><?php echo $i->ijazah_transkrip ?></td>
            <td><?php echo $i->surat_ijin_belajar ?></td>
            <td><?php echo $i->surat_lulus_ujian ?></td>
            <td><?php echo $i->uraian_tugas ?></td>
            <td><?php echo $i->prestasi_kerja ?></td>
            <td>
                <center>
                <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/pangkatIjazah/updateData/'.$i->id_ijazah) ?>"><i class="fas fa-edit"></i></a>
                <a onclick="return confirm('Anda akan menghapus data?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/pangkatIjazah/deleteData/'.$i->id_ijazah) ?>"><i class="fas fa-trash"></i></a>
                </center>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    
    
</div>