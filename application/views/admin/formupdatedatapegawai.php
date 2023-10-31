<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card" style="width: 60%; margin-bottom:100px">
        <div class="card-body">


            <?php foreach ($pegawai as $p) : ?>
            <form method="POST" action="<?php echo base_url('admin/dataPegawai/updateDataAksi') ?>" enctype="multipart/form-data">
            
            <div class="form-group">
                <label>NAMA</label>
                <input type="hidden" name="id_pegawai" class="form-control" value="<?php echo $p->id_pegawai ?>">
                <input type="text" name="nama" class="form-control" value="<?php echo $p->nama ?>">
                <?php echo form_error('nama','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>NIP</label>
                <input type="text" name="nip" class="form-control" value="<?php echo $p->nip ?>">
                <?php echo form_error('nip','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>TEMPAT/TGL LAHIR</label>
                <input type="date" name="ttl" class="form-control" value="<?php echo $p->ttl ?>">
                <?php echo form_error('ttl','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>TMT CPNS</label>
                <input type="date" name="tmt_cpns" class="form-control" value="<?php echo $p->tmt_cpns ?>">
                <?php echo form_error('tmt_cpns','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>GOL.RUANG</label>
                <input type="text" name="gol_ruang" class="form-control" value="<?php echo $p->gol_ruang ?>">
                <?php echo form_error('gol_ruang','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>TMT PANGKAT</label>
                <input type="date" name="tmt_pangkat" class="form-control" value="<?php echo $p->tmt_pangkat ?>">
                <?php echo form_error('tmt_pangkat','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>JABATAN</label>
                <input type="text" name="jabatan" class="form-control" value="<?php echo $p->jabatan ?>">
                <?php echo form_error('jabatan','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>TMT_JABATAN</label>
                <input type="date" name="tmt_jabatan" class="form-control" value="<?php echo $p->tmt_jabatan ?>">
                <?php echo form_error('tmt_jabatan','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>ESELON</label>
                <input type="text" name="eselon" class="form-control" value="<?php echo $p->eselon ?>">
                <?php echo form_error('eselon','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>LEMBAGA PENDIDIKAN</label>
                <input type="text" name="lembaga_pendidikan" class="form-control" value="<?php echo $p->lembaga_pendidikan ?>">
                <?php echo form_error('lembaga_pendidikan','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>TAHUN LULUS</label>
                <input type="text" name="tahun_lulus" class="form-control" value="<?php echo $p->tahun_lulus ?>">
                <?php echo form_error('tahun_lulus','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>TK IJAZAH</label>
                <input type="text" name="tk_ijazah" class="form-control" value="<?php echo $p->tk_ijazah ?>">
                <?php echo form_error('tk_ijazah','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>JURUSAN</label>
                <input type="text" name="jurusan" class="form-control" value="<?php echo $p->jurusan ?>">
                <?php echo form_error('jurusan','<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="form-group">
                <label>AGAMA</label>
                <select name="agama" class="form-control">
                <option value="<?php echo $p->agama ?>"><?php echo $p->agama ?></option>
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
                <option value="<?php echo $p->jenis_kelamin ?>"><?php echo $p->jenis_kelamin ?></option>
                <option value="Laki-Laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
                <?php echo form_error('jenis_kelamin','<div class="text-small text-danger"></div>') ?>
            </div>

            <button type="submit" class="btn btn-primary">Input</button>
            </form>    
            <?php endforeach; ?>   
        </div>
    </div>

    
    
</div>