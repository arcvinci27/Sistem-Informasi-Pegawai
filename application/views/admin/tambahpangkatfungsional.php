<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card" style="width: 60%; margin-bottom:100px" >
        <div class="card-body">

        <form method="POST" action="<?php echo base_url('admin/pangkatFungsional/tambahDataAksi') ?>" enctype="multipart/form-data">

        <div class="form-group">
            <label>FC SAH SK PANGKAT TERAKHIR</label>
            <input type="file" name="sk_pangkat_terakhir" class="form-control">
        </div>

        <div class="form-group">
            <label>PENETAPAN ANGKA KREDIT(ASLI)</label>
            <input type="file" name="pak" class="form-control">
        </div>

        <div class="form-group">
            <label>FC SAH SK KENAIKAN JABATAN</label>
            <input type="file" name="sk_naik_jabatan" class="form-control">
        </div>

        <div class="form-group">
            <label>FC SAH SK PENGANGKATAN JABATAN FUNGSIONAL</label>
            <input type="file" name="sk_pengangkatan" class="form-control">
        </div>

        <div class="form-group">
            <label>FC SAH SK IJAZAH TERAKHIR&TRANSKRIP NILAI</label>
            <input type="file" name="sk_ijazah_transkrip" class="form-control">
        </div>
        
        <div class="form-group">
            <label>PENILAIAN PRESTASI KERJA 2 TAHUN TERAKHIR</label>
            <input type="file" name="prestasi_kerja" class="form-control">
        </div>

        <div class="form-group">
            <label>PEJABAT FUNGSIONAL SELESAI TUGAS BELAJAR&DIANGKAT KEMBALI</label>
            <input type="file" name="pejabat_fungsional" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Input</button>
        
        </form>

        </div>
    </div>

    
    
</div>