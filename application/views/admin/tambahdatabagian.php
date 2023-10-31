<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>


    <div class="card" style="width: 60%; margin-bottom: 70px">
        <div class="card-body">

            <form method="POST" action="<?php echo base_url('admin/dataBagian/tambahDataAksi') ?>">

            <div class="form-group">
                <label>Nama Pegawai</label>
                <input type="text" name="nama_pegawai" class="form-control">
                <?php echo form_error('nama_pegawai','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>NIP</label>
                <input type="text" name="nip" class="form-control">
                <?php echo form_error('nip','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>Jabatan</label>
                <input type="text" name="jabatan" class="form-control">
                <?php echo form_error('jabatan','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>Golongan</label>
                <input type="text" name="golongan" class="form-control">
                <?php echo form_error('golongan','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>Tanggal Masuk</label>
                <input type="date" name="tanggal_masuk" class="form-control">
                <?php echo form_error('tanggal_masuk','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                <option>--Pilih Status--</option>
                <option value="ASN">Pegawai ASN</option>
                <option value="PPPK">Pegawai Kontrak</option>
                <?php echo form_error('status','<div class="text-small text-danger"></div>') ?>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Input</button>
        
        </form>
        </div>
    </div>

    
    
</div>