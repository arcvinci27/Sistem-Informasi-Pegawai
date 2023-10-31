<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <a class="mb-2 mt-2 btn btn-sm btn-success" href="<?php echo base_url('admin/dataPegawai/tambahData') ?>"><i class="fas fa-plus"></i> Tambah Data Pegawai</a>

    <table class="table table-striped table-bordered">
        <tr>
            <th class="text-center">NO</th>
            <th class="text-center">NAMA</th>
            <th class="text-center">NIP</th>
            <th class="text-center">TEMPAT/TGL LAHIR</th>
            <th class="text-center">TMT CPNS</th>
            <th class="text-center">GOL.RUANG</th>
            <th class="text-center">TMT PANGKAT</th>
            <th class="text-center">JABATAN</th>
            <th class="text-center">TMT JABATAN</th>
            <th class="text-center">ESELON</th>
            <th class="text-center">LEMBAGA PENDIDIKAN</th>
            <th class="text-center">TAHUN LULUS</th>
            <th class="text-center">TK IJAZAH</th>
            <th class="text-center">JURUSAN</th>
            <th class="text-center">AGAMA</th>
            <th class="text-center">JENIS KELAMIN</th>
            <th class="text-center">AKSI</th>
        </tr>

        <?php $no=1; foreach($pegawai as $p) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $p->nama ?></td>
                <td><?php echo $p->nip ?></td>
                <td><?php echo $p->ttl ?></td>
                <td><?php echo $p->tmt_cpns ?></td>
                <td><?php echo $p->gol_ruang ?></td>
                <td><?php echo $p->tmt_pangkat ?></td>
                <td><?php echo $p->jabatan ?></td>
                <td><?php echo $p->tmt_jabatan ?></td>
                <td><?php echo $p->eselon ?></td>
                <td><?php echo $p->lembaga_pendidikan ?></td>
                <td><?php echo $p->tahun_lulus ?></td>
                <td><?php echo $p->tk_ijazah ?></td>
                <td><?php echo $p->jurusan ?></td>
                <td><?php echo $p->agama ?></td>
                <td><?php echo $p->jenis_kelamin ?></td>
                <td>
                    <center>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataPegawai/updateData/'.$p->id_pegawai) ?>"><i class="fas fa-edit"></i></a>
                        <a onclick="return confirm('Anda akan menghapus data?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataPegawai/deleteData/'.$p->id_pegawai) ?>"><i class="fas fa-trash"></i></a>
                    </center>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    
    
</div>