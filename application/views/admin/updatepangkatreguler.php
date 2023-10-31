<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card" style="width: 60%; ">
        <div class="card-body">

        <?php foreach ($reguler as $r) : ?>    
        <form method="POST" action="<?php echo base_url('admin/pangkatReguler/updateDataAksi') ?>" enctype="multipart/form-data">

            <div class="form-group">
                <label>FC SAH SK PANGKAT TERAKHIR</label>
                <input type="file" name="sk_pangkat_terakhir" class="form-control">
            </div>

            <div class="form-group">
                <label>PENILAIAN PRESTASI KERJA 2 TAHUN TERAKHIR</label>
                <input type="file" name="prestasi_kerja" class="form-control">
            </div>

            <div class="form-group">
                <label>SURAT PENINGKATAN PENDIDIKAN</label>
                <input type="file" name="surat_peningkatan_pendidikan" class="form-control">
            </div>

            <div class="form-group">
                <label>FC SAH SERTIFIKAT UJIAN DINAS</label>
                <input type="file" name="sertifikat_ujian_dinas" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Input</button>

            </form>
            <?php endforeach; ?>

        </div>
    </div>

    
    
</div>