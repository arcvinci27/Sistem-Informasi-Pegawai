<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card" style="width: 60%; margin-bottom:100px">
        <div class="card-body">
            <form method="POST" action="<?php echo base_url('admin/dataPegawai/tambahDataAksi') ?>" enctype="multipart/form-data">
            
            <div class="form-group">
                <label>NAMA</label>
                <input type="text" name="nama" class="form-control">
                <?php echo form_error('nama','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>NIP</label>
                <input type="text" name="nip" class="form-control">
                <?php echo form_error('nip','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>TEMPAT/TGL LAHIR</label>
                <input type="date" name="ttl" class="form-control">
                <?php echo form_error('ttl','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>TMT CPNS</label>
                <input type="date" name="tmt_cpns" class="form-control">
                <?php echo form_error('tmt_cpns','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>GOL.RUANG</label>
                <input type="text" name="gol_ruang" class="form-control">
                <?php echo form_error('gol_ruang','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>TMT PANGKAT</label>
                <input type="date" name="tmt_pangkat" class="form-control">
                <?php echo form_error('tmt_pangkat','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>JABATAN</label>
                <input type="text" name="jabatan" class="form-control">
                <?php echo form_error('jabatan','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>TMT_JABATAN</label>
                <input type="date" name="tmt_jabatan" class="form-control">
                <?php echo form_error('tmt_jabatan','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>ESELON</label>
                <input type="text" name="eselon" class="form-control">
                <?php echo form_error('eselon','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>LEMBAGA PENDIDIKAN</label>
                <input type="text" name="lembaga_pendidikan" class="form-control">
                <?php echo form_error('lembaga_pendidikan','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>TAHUN LULUS</label>
                <input type="text" name="tahun_lulus" class="form-control">
                <?php echo form_error('tahun_lulus','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>TK IJAZAH</label>
                <input type="text" name="tk_ijazah" class="form-control">
                <?php echo form_error('tk_ijazah','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>JURUSAN</label>
                <input type="text" name="jurusan" class="form-control">
                <?php echo form_error('jurusan','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>AGAMA</label>
                <select name="agama" class="form-control">
                <option>--Pilih Agama--</option>
                <option value="Islam">Islam</option>
                <option value="Protestan">Protestan</option>
                <option value="Khatolik">Khatolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
                </select>
                <?php echo form_error('agama','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>JENIS KELAMIN</label>
                <select name="jenis_kelamin" class="form-control">
                <option>--Pilih Jenis Kelamin--</option>
                <option value="Laki-Laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
                <?php echo form_error('jenis_kelamin','<div class="text-small text-danger"></div>') ?>
            </div>

            <button type="submit" class="btn btn-primary">Input</button>
            </form>       
        </div>
    </div>

    
    
</div>