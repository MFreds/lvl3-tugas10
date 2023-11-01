<!doctype html>
<html lang="en">

<head>
  <?php $this->load->view('includes/header'); ?>
  <title>Edit Produk</title>
</head>

<body>

  <div class="container">
    <div class="row">

      <div class="col-lg-12 my-5">
        <h2 class="text-center mb-3">Level 3 - Tugas 10 Pijar Camp</h2>
      </div>

      <div class="col-lg-12">

        <div class="d-flex justify-content-between ">
          <h4>Edit Produk</h4>
          <a class="btn btn-warning" href="<?php echo base_url(); ?>"> <i class="fas fa-angle-left"></i> Kembali</a>
        </div>

        <form method="post" action="<?php echo base_url('post/update/' . $data->id); ?>">

          <div class="form-group">
            <label>Nama Produk</label>
            <input class="form-control" type="text" name="nama_produk" value="<?php echo $data->nama_produk; ?>">
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan"><?php echo $data->keterangan; ?></textarea>
          </div>

          <div class="form-group">
            <label>Harga</label>
            <input class="form-control" type="text" name="harga" value="<?php echo $data->harga; ?>">
          </div>

          <div class="form-group">
            <label>Jumlah</label>
            <textarea class="form-control" name="jumlah"><?php echo $data->jumlah; ?></textarea>
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