<div class="container-fluid">
    <div class="row">
    <?php foreach ($barang as $brg) : ?>

        <div class="card ml-3 mb-4" style="width: 18rem;">
            <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
                <p class="card-text"><?php echo $brg->keterangan ?></p>
                <span class="badge badge-success mb-3">Rp. <?php echo number_format($brg->harga, 0, ',', '.') ?></span><br>
                <?php echo anchor('admin/data_barang/edit/' .$brg->id_brg, '<div class="btn btn-primary btn-sm">Edit</div>')?> 
                <?php echo anchor('admin/data_barang/hapus/' .$brg->id_brg, '<div class="btn btn-danger btn-sm">Hapus</div>') ?>

            </div>
        </div>
            
        <?php endforeach ?>
    </div>
</div>