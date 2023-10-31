<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card" style="width: 60%; margin-bottom:100px">
        <div class="card-body">

        <?php foreach ($ijazah as $i) : ?>
        <form method="POST" action="<?php echo base_url('admin/pangkatIjazah/updateDataAksi') ?>" enctype="multipart/form-data">

            <div class="form-group">
                <label>SK PANGKAT TERAKHIR</label>
                <input type="file" name="sk_pangkat_terakhir" class="form-control">

            <div class="form-group">
                <label>IJAZAH TERAKHIR DAN TRANSKRIP NILAI</label>
                <input type="file" name="ijazah_transkrip" class="form-control">
            </div>

            <div class="form-group">
                <label>SURAT KEPUTUSAN IJIN BELAJAR</label>
                <input type="file" name="surat_ijin_belajar" class="form-control">
            </div>

            <div class="form-group">
                <label>SURAT TANDA LULUS UJIAN PENYESUAIN IJAZAH</label>
                <input type="file" name="surat_lulus_ujian" class="form-control">
            </div>

            <div class="form-group">
                <label>URAIAN TUGAS SESUAI IJAZAH OLEH PIMPINAN UNIT KERJA</label>
                <input type="file" name="uraian_tugas" class="form-control">
            </div>

            <div class="form-group">
                <label>PENILAIAN PRESTASI KERJA DUA TAHUN TERAKHIR</label>
                <input type="file" name="prestasi_kerja" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Input</button>
        </form>
        <?php endforeach; ?>
        
        </div>
    
    </div>

    
    
</div>