<?php
    session_start();
    if(!isset($_SESSION["login"]))
    {
        header("Location:../login/index.php");
        exit;
    }
    
    if($_SESSION["hakAkses"]!="admin"){
        header("Location:../login/index.php");
    }

    require '../functions.php';
    if(isset($_POST['register'])){
        if(registrasi($_POST) > 0) {
            echo "
                <script>
                    alert('User berhasil ditambahkan');
                </script>
            ";
        }else {
            echo mysqli_error($conn);
        }
    }
    if(isset($_POST['postingpelajaran'])){
        if(postingpelajaran($_POST) > 0) {
            echo "
                <script>
                    alert('Posting berhasil');
                </script>
            ";
        }else {
            echo mysqli_error($conn);
        }
    }
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="index.css">
<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<link href="dashboard.css" rel="stylesheet">
<script src="../../assets/js/ie-emulation-modes-warning.js"></script>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>LEARNING MANAGEMENT SYSTEM</title>
    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand">Admin Learning Management System</a>
            </div>
        </div>
        </nav>

        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="#" class="klik_menu" id="registrasi">Registrasi</a></li>
                <li><a href="#" class="klik_menu" id="postpelajaran">Posting Pelajaran</a></li>
                <li><a href="#" class="klik_menu" id="editpelajaran">Edit Pelajaran</a></li>
                <li><a href="../login/logout.php">Logout</a></li>
            </ul>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main output">
                <h4>SELAMAT DATANG</h4>
            </div>
        </div>
        </div>

        
    </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="../../assets/js/vendor/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


<script type="text/javascript">
	$(document).ready(function(){
		$('.klik_menu').click(function(){
			var menu = $(this).attr('id');
			if(menu == "postpelajaran"){
				$('.output').load('postpelajaran.php');						
			}else if(menu == "registrasi"){
				$('.output').load('registrasi.php');						
			}else if(menu == "editpelajaran"){
				$('.output').load('editpelajaran.php');						
			}
		});
		// halaman yang di load default pertama kali
		// $('.output').load('index.php');						
	});
</script>