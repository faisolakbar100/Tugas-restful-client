<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Motor
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_motor" value="<?= $motor['id_motor']; ?>">
                        <div class="form-group">
                            <label for="nama_motor">Nama Motor</label>
                            <input type="text" name="nama_motor" class="form-control" id="nama_motor" value="<?= $motor['nama_motor']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_motor'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="merek">Merek</label>
                            <input type="text" name="merek" class="form-control" id="merek" value="<?= $motor['merek']; ?>">
                            <small class="form-text text-danger"><?= form_error('merek'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="text" name="tahun" class="form-control" id="tahun" value="<?= $motor['tahun']; ?>">
                            <small class="form-text text-danger"><?= form_error('tahun'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="transmisi">Transmisi</label>
                            <input type="text" name="transmisi" class="form-control" id="transmisi" value="<?= $motor['transmisi']; ?>">
                            <small class="form-text text-danger"><?= form_error('transmisi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="form-control" id="harga" value="<?= $motor['harga']; ?>">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="text" name="gambar" class="form-control" id="gambar" value="<?= $motor['gambar']; ?>">
                            <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                        </div>
                        
                        
                        <button type="submit" name="ubah" class="btn btn-success float-right"><img src="https://img.icons8.com/material-rounded/18/000000/edit--v2.png"/></button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>