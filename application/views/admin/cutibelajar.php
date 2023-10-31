<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <a class="mb-2 mt-2 btn btn-sm btn-success" href="<?php echo base_url('admin/cutiBelajar/tambahData') ?>"><i class="fas fa-plus"></i> Tambah Data Cuti/Ijin Belajar</a>

    <tr>
        <th><p>Syarat :</p></th>
        <th><p>1. SURAT PERMOHONAN, BERKAS USULAN(PDF)</p></th>
        <th><p>2. DISPOSISI KEPALA DINAS, SEKRETARIS DINAS, KASUBAG KEPEGAWAIAN(PDF)</p></th>
        <th><p>3. KONSEP SURAT PENGANTAR, BERKAS USULAN(PDF)</p></th>
        <th><p>4. SURAT PENGANTAR USULAN SK TUBEL/IBEL(PDF)</p></th>
    </tr>

    <table class="table table-stripped table-bordered">
        <tr>
            <th class="text-center">NO</th>
            <th class="text-center">SURAT PERMOHONAN</th>
            <th class="text-center">DISPOSISI KADIS,SEKDIS,KASUBAG KEPEGUM</th>
            <th class="text-center">KONSEP SURAT PENGANTAR</th>
            <th class="text-center">SURAT PENGANTAR USULAN SK TUBEL/IBEL</th>
        </tr>

        <?php $no=1; foreach($belajar as $b) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $b->surat_permohonan ?></td>
            <td><?php echo $b->disposisi ?></td>
            <td><?php echo $b->surat_pengantar ?></td>
            <td><?php echo $b->surat_pengantar_usulan ?></td>
            <td>
            <center>
                <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/cutiBelajar/updateData/'.$b->id_cutibljr) ?>"><i class="fas fa-edit"></i></a>
                <a onclick="return confirm('Anda akan menghapus data?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/cutiBelajar/deleteData/'.$b->id_cutibljr) ?>"><i class="fas fa-trash"></i></a>
                </center>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    
    
</div>



