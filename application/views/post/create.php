<!doctype html>
<html lang="en">

<head>
  <?php $this->load->view('includes/header'); ?>
  <title>Tambah Produk Baru</title>
</head>

<body>

  <div class="container">
    <div class="row">

      <div class="col-lg-12 my-5">
        <h2 class="text-center mb-3">Level 3 - Tugas 10 Pijar Camp</h2>
      </div>

      <div class="col-lg-12">

        <div class="d-flex justify-content-between ">
          <h4>Tambah Produk Baru</h4>
          <a class="btn btn-warning" href="<?php echo base_url(); ?>"> <i class="fas fa-angle-left"></i> Kembali</a>
        </div>

        <form method="post" action="<?php echo base_url('post/store'); ?>">

          <div class="form-group">
            <label>Nama Produk</label>
            <input class="form-control" type="text" name="nama_produk">
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan"></textarea>
          </div>

          <div class="form-group">
            <label>Harga</label>
            <input class="form-control" type="text" name="harga">
          </div>

          <div class="form-group">
            <label>Jumlah</label>
            <textarea class="form-control" name="jumlah"></textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-success"> <i class="fas fa-check"></i> Submit </button>
          </div>

        </form>


      </div>
    </div>
  </div>



  <?php $this->load->view('includes/footer'); ?>

</body>

</html>