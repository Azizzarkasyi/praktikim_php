<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

  <div style="margin-top: 50px;padding: 10px 150px 10px 150px;">
    <div style="width: 55%;" class="mx-auto mt-5">
      <form action="/update/<?= $datacomic['id_komik']; ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>

        <input type="hidden" name="img_lama" value="<?= $datacomic['Gambar']; ?>">

        <h1> Update Komik</h1>
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?= $datacomic['Judul']; ?>">
        </div>
        <div class="form-floating">
          <input type="text" class="form-control " placeholder="Leave a comment here" id="sinopsis"  name="sinopsis" value="<?= $datacomic['Sinopsis']; ?>">
          <label for="sinopsis"></label>
        </div>
        <div class="mb-3">
          <label for="penulis" class="form-label">Penulis</label>
          <input type="text" class="form-control" id="penulis" placeholder="Penulis" name="penulis" value="<?= $datacomic['Penulis']; ?>">
        </div>
        <!-- <div class="mb-3">
          <label for="tanggalPerilisan" class="form-label">Tanggal Perilisan</label>
          <input type="text" class="form-control" id="tanggalPerilisan" placeholder="Tanggal Perilisan" name="tanggalPerilisan">
        </div> -->

        <div class="mb-3">
          <label for="gambar" class="form-label">Default file input example</label>
          <input class="form-control" type="file" id="gambar" name="gambar" value="<?= $datacomic['Gambar']; ?>">
        </div>

        <div class="d-grid gap-4 d-md-flex justify-content-md-center">
          <button class="btn btn-success me-md-4" type="submit">Update</button>
        </div>
      </form>
    </div>
  </div>





<?= $this->endSection() ?>