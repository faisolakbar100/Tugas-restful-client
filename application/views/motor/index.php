<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>motor/tambah" class="btn btn-primary"><img src="https://img.icons8.com/ios-glyphs/30/000000/add-property.png"/></a>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-md-12">
            <h3>Daftar Motor</h3>
            <?php if (empty($motor)) : ?>
                <div class="alert alert-danger" role="alert">
                data motor tidak ditemukan.
                </div>
            <?php endif; ?>
            
<table class="table table-bordered">
<table class="table caption-top">
<thead class="table-primary">
<tr>
      <th scope="col">No</th>
      <th scope="col">Motor</th>
      <th scope="col">Merek</th>
      <th scope="col">Tahun</th>
      <th scope="col">Transmisi</th>
      <th scope="col">Harga</th>
      <th scope="col">Gambar</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead> 
  <tbody>
  <?php foreach ($motor as $mtr) : ?>
    <tr>
        <th scope="row"><?= $mtr['id_motor']; ?></th>
      <td><?= $mtr['nama_motor']; ?></td>
      <td><?= $mtr['merek']; ?></td>
      <td><?= $mtr['tahun']; ?></td>
      <td><?= $mtr['transmisi']; ?></td>
      <td><?= $mtr['harga']; ?></td>
      <td><img src=<?= $mtr['gambar']; ?> width="100" height="70"></td>
      <td><a href="<?= base_url(); ?>motor/hapus/<?= $mtr['id_motor']; ?>"
          class="badge badge-warning float-right tombol-hapus"><img src="https://img.icons8.com/material-rounded/18/000000/filled-trash.png"/></a>
          <a href="<?= base_url(); ?>motor/ubah/<?= $mtr['id_motor']; ?>"
          class="badge badge-success float-right"><img src="https://img.icons8.com/material-rounded/18/000000/edit--v2.png"/></a>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</table>
        </div>
    </div>

</div>