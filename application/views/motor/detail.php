<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Motor
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $motor['nama_motor']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $motor['merek']; ?></h6>
                    <p class="card-text"><?= $motor['tahun']; ?></p>
                    <p class="card-text"><?= $motor['transmisi']; ?></p>
                    <p class="card-text"><?= $motor['harga']; ?></p>
                    <p class="card-text"><?= $motor['gambar']; ?></p>
                    <a href="<?= base_url(); ?>motor" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>