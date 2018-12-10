
<h1 class="page-header">Registrasi</h1>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="Nama" class="col-sm-4 control-label">Nama</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Anda" name="nama" required>
        </div>
    </div>
    <div class="form-group">
        <label for="Hak Akses" class="col-sm-4 control-label">Hak Akses</label>
        <div class="col-sm-5">
            <select type="text" class="form-control" id="hakAkses" placeholder="Masukkan Hak Akses" name="hakAkses" required>
                <option>Admin</option>
                <option>Guru</option>
                <option>Siswa</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="Username" class="col-sm-4 control-label">Username</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username" required>
        </div>
    </div>
    <div class="form-group">
        <label for="Password" class="col-sm-4 control-label">Password</label>
        <div class="col-sm-5">
            <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" required>
        </div>
    </div>
    <div class="form-group">
        <label for="Password" class="col-sm-4 control-label"></label>
        <div class="col-sm-5">
            <input type="password" class="form-control" id="password2" placeholder="Masukkan ulang Password" name="password2" required>
        </div>
    </div>
    <div class="form-group">
        <center><button type="submit" name="register" class="btn btn-primary">Tambah</button>
    </div>
</form>