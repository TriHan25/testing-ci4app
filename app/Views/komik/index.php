<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/komik/create" class="btn btn-primary mt-2">Tambah Komik</a>
            <h1 class="mt-2">Daftar Komik</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('delete')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('delete'); ?>
                </div>
            <?php endif; ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($komik as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/<?= $k['sampul']; ?>" alt="sampul" class="sampul"></td>
                            <td><?= $k['judul']; ?></td>
                            <td><a class="btn btn-success" href="/komik/<?= $k['slug']; ?>">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>