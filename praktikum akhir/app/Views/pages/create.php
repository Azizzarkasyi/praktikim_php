<?php $error = session()->getFlashdata("error") ?? []?> 
<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div style="margin-top: 50px;padding: 10px 150px 10px 150px;">
  <div><?= array_shift($error)?? ""?></div>
  <div style="width: 55%;" class="mx-auto mt-5">
    <form action="/save" method="post" enctype="multipart/form-data">
      <?= csrf_field(); ?>

      <h1> Tambah Komik</h1>
      <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul">
      </div>
      <div class="form-floating">
        <input type="text" class="form-control " placeholder="Leave a comment here" id="sinopsis" name="sinopsis">
        <label for="sinopsis">Sinopsis</label>
      </div>
      <div class="mb-3">
        <label for="penulis" class="form-label">Penulis</label>
        <input type="text" class="form-control" id="penulis" placeholder="Penulis" name="penulis">
      </div>
      
      <div class="mb-3">
        <label for="gambar" class="form-label">Default file input example</label>
        <input class="form-control" type="file" id="gambar" name="gambar">
      </div>

      <div class="d-grid gap-4 d-md-flex justify-content-md-center">
        <button class="btn btn-success me-md-4" type="submit">Tambah</button>
      </div>
    </form>
  </div>



  <?= $this->endSection() ?>