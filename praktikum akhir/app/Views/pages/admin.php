<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div style="margin-top: 50px;padding: 10px 150px 10px 150px;">
    <h1> Komik</h1>
</div>
<div class="d-flex justify-content-center gap-3 flex-wrap container mx-auto" style="width: 80%; margin: 50px;">
    <?php foreach ($ambil as $k) : ?>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/img/<?= $k['Gambar']; ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $k['Judul']; ?></h5>
                <p class="card-text"><?= $k['Sinopsis']; ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?= $k['Penulis']; ?></li>
                <li class="list-group-item"><?= $k['Tanggal_Rilis']; ?></li>
            </ul>
            <div class="card-body d-flex gap-2">
                <form action="/admin/<?= $k['id_komik']; ?>" method="post">
                <input type="hidden" name="method" value="DELETE">
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus barang ini ??')">Delete</button>
                </form>

                <a href="/edit/<?= $k['id_komik']; ?>"><button href="" class="btn btn-success btn-block">Update</button></a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</div>

<div class="d-grid gap-2 col-6" style="position:fixed; bottom: 0; margin-bottom: 10px; background-color: aqua; margin-left: 40%; width: auto;">
<a href="/create" class="text-decoration-none text-light"><button class="btn btn-primary " style="padding: 10px 150px 10px 150px;" type="button">Tambah</button></a>
    
</div>

<?= $this->endSection() ?>