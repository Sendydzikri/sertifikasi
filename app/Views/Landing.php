<?= $this->include('template/header') ?>
<body>
    <div class="container text-center" style="margin-top:100px;">
        <img src="<?=base_url('image/unjani.png')?>" alt="UNJANI" height="200" width="200" class="rounded mx-auto d-block">
        <h1 class="mt-4">UNIVERSITAS JENDERAL ACHMAD YANI</h1>
    </div>
    <div class="container mt-5 galery">
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="<?=base_url('image/unjani.png')?>">
                <img src="<?=base_url('image/gambar1.jpg')?>" alt="Cinque Terre" width="600" height="500">
                </a>
                <div class="desc">Halaman Universitas Jenderal Achmad Yani</div>
            </div>
        </div>
    </div>
</body>
<?= $this->include('template/footer') ?>