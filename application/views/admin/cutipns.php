<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <a class="mb-2 mt-2 btn btn-sm btn-success" href="<?php echo base_url('admin/cutiPns/tambahData') ?>"><i class="fas fa-plus"></i> Tambah Data Cuti PNS</a>

    <tr>
        <th><p>Syarat :</p></th>
        <th><p>1. FORMULIR PERMOHONAN CUTI</p></th>
        <th><p>2. NOTA DINAS BIDANG</p></th>
        <th><p>3. SURAT USULAN CUTI</p></th>
    </tr>

    <table class="table table-stripped table-bordered">
        <tr>
            <th class="text-center">NO</th>
            <th class="text-center">FORMULIR PERMOHONAN CUTI</th>
            <th class="text-center">NOTA DINAS BIDANG</th>
            <th class="text-center">SURAT USULAN CUTI</th>
            <th class="text-center">AKSI</th>
        </tr>

        <?php $no=1; foreach($pns as $n) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $n->form_cuti ?></td>
            <td><?php echo $n->notadinas_bidang ?></td>
            <td><?php echo $n->surat_usulan ?></td>
            <td>
                <center>
                <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/cutiPns/updateData/'.$n->id_cutipns) ?>"><i class="fas fa-edit"></i></a>
                <a onclick="return confirm('Anda akan menghapus data?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/cutiPns/deleteData/'.$n->id_cutipns) ?>"><i class="fas fa-trash"></i></a>
                </center>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    
    
</div>