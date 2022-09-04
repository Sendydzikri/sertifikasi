<?= $this->include('template/header') ?>
<body>
    <div class="container bg-success mt-3" style="border-radius:5px; padding:30px; width:30%;">
        <img src="<?=base_url('image/unjani.png')?>" alt="UNJANI" height="100" width="100" class="rounded mx-auto d-block">
        <h1 class="text-center text-white mt-4">Register</h1>
        <form action="<?= base_url('action_register')?>" method="post" >
            <div class="mb-3 text-white">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 text-white">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 text-white">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-4 text-white">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-outline-light rounded mx-auto d-block">REGISTER</button>
        </form>
    </div>
</body>
<?= $this->include('template/footer') ?>