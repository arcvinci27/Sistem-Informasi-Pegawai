<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/dataBagian/tambahData/') ?>"><i class="fas fa-plus"></i> Tambah Data Bagian</a>
    <?php echo $this->session->flashdata('pesan') ?>
    <table class="table table-bordered tabel-striped mt-2">
        <tr>
            <th class="text-center">NO</th>
            <th class="text-center">NAMA PEGAWAI</th>
            <th class="text-center">NIP</th>
            <th class="text-center">JABATAN</th>
            <th class="text-center">GOLONGAN</th>
            <th class="text-center">TANGGAL MASUK</th>
            <th class="text-center">STATUS</th>
            <th class="text-center">AKSI</th>
        </tr>

        <?php $no=1; foreach($bagian as $b) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $b->nama_pegawai ?></td>
                <td><?php echo $b->nip ?></td>
                <td><?php echo $b->jabatan ?></td>
                <td><?php echo $b->golongan ?></td>
                <td><?php echo $b->tanggal_masuk ?></td>
                <td><?php echo $b->status ?></td>
                <td>
                    <center>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataBagian/updateData/'.$b->id_bagian) ?>"><i class="fas fa-edit"></i></a>
                        <a onclick="return confirm('Anda akan menghapus data?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataBagian/deleteData/'.$b->id_bagian) ?>"><i class="fas fa-trash"></i></a>
                    </center>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    
    
</div>