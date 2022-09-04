<?= $this->include('template/header') ?>
<body>
    <div class="container text-center" style="margin-top:100px;">
        <img src="<?=base_url('image/unjani.png')?>" alt="UNJANI" height="200" width="200" class="rounded mx-auto d-block">
        <h1 class="mt-4">UNIVERSITAS JENDERAL ACHMAD YANI</h1>
    </div>

    
    <div class="bg-success mt-5" style="height:100px;">
        
    </div>

    <div class="container mt-5">
        <h1>FAKULTAS</h1>
        <hr style="width:200px; height:5px; margin-bottom:30px; background-color: #132622;">
        <div class="card-section" style="display:grid;">
            <div class="card bg-success text-white text-center" style="width: 18rem; ">
                <div class="card-body">
                    <h5 class="card-title">KEDOKTERAN</h5>
                    <hr>
                    <p class="card-text">Fakultas Kedokteran Universitas Jenderal Achmad Yani Merupakan Fakultas Unggulan Dengan Akreditasi A</p>
                </div>
            </div>
            <div class="card bg-success text-white text-center" style="width: 18rem; display:flex;">
                <div class="card-body">
                    <h5 class="card-title">FISIP</h5>
                    <hr>
                    <p class="card-text">Fakultas FISIP Universitas Jenderal Achmad Yani Merupakan Fakultas Unggulan Dengan Akreditasi B</p>
                </div>
            </div>
            <div class="card bg-success text-white text-center" style="width: 18rem; display:flex;">
                <div class="card-body">
                    <h5 class="card-title">FSI</h5>
                    <hr>
                    <p class="card-text">Fakultas FSI Universitas Jenderal Achmad Yani Merupakan Fakultas Unggulan Dengan Akreditasi B</p>
                </div>
            </div>
            <div class="card bg-success text-white text-center" style="width: 18rem; display:flex;">
                <div class="card-body">
                    <h5 class="card-title">TEKNIK SIPIL</h5>
                    <hr>
                    <p class="card-text">Fakultas Teknik Sipil Universitas Jenderal Achmad Yani Merupakan Fakultas Unggulan Dengan Akreditasi A</p>
                </div>
            </div>
            <div class="card bg-success text-white text-center" style="width: 18rem; display:flex;">
                <div class="card-body">
                    <h5 class="card-title">ELEKTRO</h5>
                    <hr>
                    <p class="card-text">Fakultas Elektro Universitas Jenderal Achmad Yani Merupakan Fakultas Unggulan Dengan Akreditasi B</p>
                </div>
            </div>
            <div class="card bg-success text-white text-center" style="width: 18rem; display:flex;">
                <div class="card-body">
                    <h5 class="card-title">EKONOMI & BISNIS</h5>
                    <hr>
                    <p class="card-text">Fakultas Ekonomi Dan Bisnis Universitas Jenderal Achmad Yani Merupakan Fakultas Unggulan Dengan Akreditasi A</p>
                </div>
            </div>
        </div>

    </div>

    <div class="bg-success mt-5" style="height:100px;">
        
    </div>
    <div class="container mt-5 galery">
        <h1>GALERY</h1>
        <hr style="width:200px; height:5px; background-color: #132622;">
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="<?=base_url('image/gambar1.jpg')?>">
                <img src="<?=base_url('image/gambar1.jpg')?>" alt="unjani" width="100" height="100">
                </a>
                <div class="desc">Halaman Universitas Jenderal Achmad Yani</div>
            </div>
        </div>
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="<?=base_url('image/gambar2.jpg')?>">
                <img src="<?=base_url('image/gambar2.jpg')?>" alt="unjani" width="100" height="100">
                </a>
                <div class="desc">Universitas Jenderal Achmad Yani</div>
            </div>
        </div>
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="<?=base_url('image/gambar3.jpg')?>">
                <img src="<?=base_url('image/gambar3.jpg')?>" alt="unjani" width="100" height="100">
                </a>
                <div class="desc">Gedung FISIP Universitas Jenderal Achmad Yani</div>
            </div>
        </div>
    </div>

    <div class="bg-success mt-5" style="height:100px;">
        
    </div>
    
    <div class="container mt-5" style="margin-bottom:200px;">
        <h1>KONTAK KAMI</h1>
        <hr style="width:200px; height:5px; background-color: #132622;">
        <h5>Jalan Terusan Jendral Sudirman, Cimahi, Jawa Barat, 40285</h5>
        <h5>022 - 6656190</h5>
        <h5>022 - 6652069</h5>
    </div>


</body>
<?= $this->include('template/footer') ?>