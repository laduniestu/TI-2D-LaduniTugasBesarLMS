<?php
    $conn=mysqli_connect("localhost","root","","lmssma");

    //SEARCH
    function queryguru($query_kedua)
    {
        $result=mysqli_query($conn,"S   ");
        global $conn;
        $result = mysqli_query($conn, $query_kedua);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $rows[]=$row;
        }
        return $rows;
    }
    function querysiswa($query_kedua)
    {
        $result=mysqli_query($conn,"SELECT * FROM siswa");
        global $conn;
        $result = mysqli_query($conn, $query_kedua);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $rows[]=$row;
        }
        return $rows;
    }
    function carisiswa($keyword){
        $sql="SELECT * FROM siswa
                WHERE
                nama LIKE '%$keyword%' OR
                nisn  LIKE '%$keyword%' OR
                email  LIKE '%$keyword%' OR
                jurusan  LIKE '%$keyword%'
                ";
            return querysiswa($sql);
    }
    function cariguru($keyword){
        $sql="SELECT * FROM guru
                WHERE
                nama LIKE '%$keyword%' OR
                nik  LIKE '%$keyword%' OR
                email  LIKE '%$keyword%' OR
                pns  LIKE '%$keyword%'
                ";
            return queryguru($sql);
    }

    //INSERT DATA
    function tambahguru ($data)
    {
        global $conn;

        $namaGuru = htmlspecialchars($data["NamaGuru"]);
        $nikGuru = htmlspecialchars($data["NikGuru"]);
        $emailGuru = htmlspecialchars($data["EmailGuru"]);
        $pns = htmlspecialchars($data["pns"]);

        $gambarGuru = uploadguru();
        if(!$gambar){
            return false;
        }

        $query = " INSERT INTO guru VALUES
            ('','$namaGuru','$nikGuru','$emailGuru','$pns','$gambarGuru')";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }
    function tambahsiswa ($data)
    {
        global $conn;

        $namaSiswa = htmlspecialchars($data["NamaSiswa"]);
        $nisniswa = htmlspecialchars($data["NisnSiswa"]);
        $emailSiswa = htmlspecialchars($data["EmailSiswa"]);
        $jurusanSiswa = htmlspecialchars($data["JurusanSiswa"]);

        $gambarSiswa = uploadsiswa();
        if(!$gambar){
            return false;
        }

        $query = " INSERT INTO siswa VALUES
            ('','$namaSiswa','$nisnSiswa','$emailSiswa','$jurusanSiswa','$gambarSiswa')";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }

    //HAPUS DATA
    function hapusguru ($id)
    {
        global $conn;
        mysqli_query($conn,"DELETE FROM guru WHERE id=$id ");
        return mysqli_affected_rows($conn);
    }
    function hapussiswa ($id)
    {
        global $conn;
        mysqli_query($conn,"DELETE FROM siswa WHERE id=$id ");
        return mysqli_affected_rows($conn);
    }

    //EDIT DATA
    function editguru ($data){
        global $conn;
        $id=$data["id"];
        $namaGuru = htmlspecialchars($data["NamaGuru"]);
        $nikGuru = htmlspecialchars($data["NikGuru"]);
        $emailGuru = htmlspecialchars($data["EmailGuru"]);
        $pns = htmlspecialchars($data["pns"]);
        $GambarLamaGuru=htmlspecialchars($data["GambarLamaGuru"]);
        if($_FILES['gambar'][error]===4)
        {
            $gambarGuru=$GambarLamaGuru;
        }else {
            $gambarGuru=upload();
        }
        $query=" UPDATE mahasiswa SET
                    nama = '$namaGuru',
                    nik = '$nikGuru',
                    email = '$emailGuru',
                    pns = '$pns',
                    gambar = '$gambarGuru'
                    WHERE id = '$id'";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }
    function editsiswa ($data){
        global $conn;
        $id=$data["id"];
        $namaSiswa = htmlspecialchars($data["NamaSiswa"]);
        $nisniswa = htmlspecialchars($data["NisnSiswa"]);
        $emailSiswa = htmlspecialchars($data["EmailSiswa"]);
        $jurusanSiswa = htmlspecialchars($data["JurusanSiswa"]);
        $GambarLamaSiswa=htmlspecialchars($data["GambarLamaSiswa"]);
        if($_FILES['gambar'][error]===4){
            $gambarGuru=$GambarLamaSiswa;
        }else {
            $gambarGuru=upload();
        }
        $query=" UPDATE mahasiswa SET
                    nama = '$namaSiswa',
                    nisn = '$nimSiswa',
                    email = '$emailSiswa',
                    jurusan = '$jurusanSiswa',
                    gambar = '$gambarSiswa'
                    WHERE id = '$id'";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }

    //UPLOAD GAMBAR
    function uploadguru() {
        $nama_file   = $_FILES['gambar']['name'];
        $ukuran_file = $_FILES['gambar']['size'];
        $error       = $_FILES['gambar']['error'];
        $tmpfile     = $_FILES['gambar']['tmp_name'];

        if($error===4){
            echo "
                <script>
                    alert('Tidak ada gambar diupload');
                </script>
            ";
            return false;
        }
        $jenis_gambar = ['jpg', 'jpeg', 'gif'];
        $pecah_gambar = explode('.', $nama_file);
        $pecah_gambar = strtolower(end($pecah_gambar));
        if(!in_array($pecah_gambar, $jenis_gambar)){
            echo "
                <script>
                    alert('Yang anda upload bukan file gambar');
                </script>
            ";
            return false;
        }
        if($ukuran_file > 1000000){
            echo "
                <script>
                    alert('Ukuran gambar terlalu besar');
                </script>
            ";
            return false;
        }
        $namafilebaru = uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $pecah_gambar; 
        move_uploaded_file($tmpfile, 'image/guru/'. $namafilebaru);
        return $namafilebaru;
    }
    function uploadsiswa() {
        $nama_file   = $_FILES['gambar']['name'];
        $ukuran_file = $_FILES['gambar']['size'];
        $error       = $_FILES['gambar']['error'];
        $tmpfile     = $_FILES['gambar']['tmp_name'];
        if($error===4){
            echo "
                <script>
                    alert('Tidak ada gambar diupload');
                </script>
            ";
            return false;
        }
        $jenis_gambar = ['jpg', 'jpeg', 'gif'];
        $pecah_gambar = explode('.', $nama_file);
        $pecah_gambar = strtolower(end($pecah_gambar));
        if(!in_array($pecah_gambar, $jenis_gambar)){
            echo "
                <script>
                    alert('Yang anda upload bukan file gambar');
                </script>
            ";
            return false;
        }
        if($ukuran_file > 1000000){
            echo "
                <script>
                    alert('Ukuran gambar terlalu besar');
                </script>
            ";
            return false;
        }
        $namafilebaru = uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $pecah_gambar; 
        move_uploaded_file($tmpfile, 'image/siswa/'. $namafilebaru);
        return $namafilebaru;
    }

    function registrasi($data){
        global $conn;
        //stripclashes digunakan untuk enghilangkan blackslashes
        $username = strtolower(stripcslashes($data['username']));
        $hakAkses = strtolower(stripcslashes($data['hakAkses']));
        $nama = strtolower(stripcslashes($data['nama']));
        $password = mysqli_real_escape_string($conn, $data['password']);
        $password2 = mysqli_real_escape_string($conn, $data['password2']);
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
        if(mysqli_fetch_assoc($result)){
            echo "
                <script>
                    alert('Username sudah ada');
                </script>
            ";
            return false;
        }
        //cek konfirmasi pasword
        if($password !== $password2){
            echo "
                <script>
                    alert('Password anda tidak sama');
                </script>
            ";
            return false;
        }
        $password = md5($password);
        echo "Registrasi Berhasil";      

        mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password', '$hakAkses', '$nama')");
        $id_user = $conn->insert_id;
        if($hakAkses=='siswa'){
            mysqli_query($conn, "INSERT INTO siswa VALUES ('', '$nama', '', '', '', '', '$id_user')");
        }else if ($hakAkses=='guru'){
            mysqli_query($conn, "INSERT INTO guru VALUES ('', '$nama', '', '', '', '', '$id_user')");
        }

        return mysqli_affected_rows($conn);
    }

    function postingpelajaran($data){
        global $conn;
        //stripclashes digunakan untuk enghilangkan blackslashes
        $judul = $data['judul'];
        $isi = $data['isi'];
        $result = mysqli_query($conn, "SELECT judul FROM despelajaran WHERE judul = '$judul' ");
        if(mysqli_fetch_assoc($result)){
            echo "
                <script>
                    alert('Pelajaran sudah ada');
                </script>
            ";
            return false;
        }
        echo "Posting Berhasil";      

        mysqli_query($conn, "INSERT INTO despelajaran VALUES ('', '$judul', '$isi')");

        return mysqli_affected_rows($conn);
    }

?>
