<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card" style="width: 60%; margin-bottom:100px">
        <div class="card-body">

        <form method="POST" action="<?php echo base_url('admin/pangkatStruktural/tambahDataAksi') ?>" enctype="multipart/form-data">

            <div class="form-group">
                <label>FC SAH SK PANGKAT TERAKHIR</label>
                <input type="file" name="sk_pangkat_terakhir" class="form-control">
            </div>

            <div class="form-group">
                <label>PENGANGKATAN JABATAN,SURAT PERNYATAAN PELANTIKAN,SPMJ BARU</label>
                <input type="file" name="spmj_baru" class="form-control">
            </div>

            <div class="form-group">
                <label>PENGANGKATAN JABATAN,SURAT PERNYATAAN PELANTIKAN,SPMJ LAMA</label>
                <input type="file" name="spmj_lama" class="form-control">
            </div>

            <div class="form-group">
                <label>PEMBEBASAN SEMENTARA JABATAN FUNGSIONAL</label>
                <input type="file" name="pembebasan_sementara_jabatan" class="form-control">
            </div>

            <div class="form-group">
                <label>SERTIFIKAT UJIAN DINAS TK.II</label>
                <input type="file" name="sertifikat_ujian_dinas" class="form-control">
            </div>

            <div class="form-group">
                <label>PENILAIAN PRESTASI KERJA 2 TAHUN TERAKHIR</label>
                <input type="file" name="prestasi_kerja" class="form-control">
            </div>

            <div class="form-group">
                <label>SK JABATAN&PANGKAT ATASAN LANGSUNG</label>
                <input type="file" name="jabatan_pangkat_atasan" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Input</button>

        </form>

        </div>
    </div>

    
    
</div>