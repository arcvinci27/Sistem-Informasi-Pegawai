<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card" style="width: 60%; margin-bottom:100px">
        <div class="card-body">

            <?php foreach($pns as $n) : ?>
            <form method="POST" action="<?php echo base_url('admin/cutiPns/updateDataAksi') ?>" enctype="multipart/form-group">

                <div class="form-group">
                    <label>FORMULIR PERMOHONAN CUTI</label>
                    <input type="file" name="form_cuti" class="form-control">
                </div>

                <div class="form-group">
                    <label>NOTA DINAS BIDANG</label>
                    <input type="file" name="notadinas_bidang" class="form-control">
                </div>

                <div class="form-group">
                    <label>SURAT USULAN CUTI</label>
                    <input type="file" name="surat_usulan" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Input</button>
            </form>
            <?php endforeach; ?>
        </div>
    </div>

    
    
</div>



