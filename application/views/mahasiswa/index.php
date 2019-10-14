<!-- hanya untuk test datanya masuk atau gak -->
<!-- <?php var_dump($mahasiswa); ?> -->

<div class="container">

<div class="row mt-3">
  <div class="col-md-6">
    <ul class="list-group">
      <h3>Daftar Mahasiswa</h3>
      <?php foreach($mahasiswa as $mhs) : ?>
        <li class="list-group-item"><?= $mhs['nama']; ?></li>
      <?php endforeach; ?>
    </ul>
  </div>

</div>