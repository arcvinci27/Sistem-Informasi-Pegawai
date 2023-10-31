<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card" style="width: 60%; margin-bottom:100px">
        <div class="card-body">

        <form method="POST" action="<?php echo base_url('admin/cutiBelajar/tambahDataAksi') ?>" enctype="multipart/form-group">
    
            <div class="form-group">
                <label>SURAT PERMOHONAN, BERKAS USULAN</label>
                <input type="file" name="surat_permohonan" class="form-control">
            </div>

            <div class="form-group">
                <label>DISPOSISI KADIS,SEKDIS,KASUBAG KEPEGUM</label>
                <input type="file" name="disposisi" class="form-control">
            </div>

            <div class="form-group">
                <label>KONSEP SURAT PENGANTAR, BERKAS USULAN</label>
                <input type="file" name="surat_pengantar" class="form-control">
            </div>

            <div class="form-group">
                <label>SURAT PENGANTAR USULAN SK TUBEL/IBEL</label>
                <input type="file" name="surat_pengantar_usulan" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Input</button>

        </form>
        </div>
    </div>

    
    
</div>



