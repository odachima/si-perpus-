
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Daftar Buku</title>
    <link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark navbar-expand-xl">
        <!-- Navbar content -->

            <div class="container-fluid">
                
                <div class="collapse navbar-collapse navigasi" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
                        <li class="nav-item">
                            <a class="nav-link text-light  bg-dark" href="admin_depan.php">Daftar Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light  bg-dark" href="admin_tambah_user.php">Daftar User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light  bg-dark" href="admin_tambah_admin.php">Daftar Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light  bg-dark" href="logout.php">Logout</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>

    </nav>	

	<br>
	<br>
	<h1 class="display-6 text-center">Halaman Daftar Buku (Admin)</h1>
	<br>
	<div class="row">
		<div class="col-md-12 mx-auto">
			<div class="card">
				<h3 class="card-header ms-2 bg-light"><b>Data Buku (Admin)</b></h3>
				<div class="card-body">
					<table border="1" class="table">
						<tr>
							<th>No</th>
							<th>ID</th>
							<th>Title</th>
							<th>Author</th>
							<th>Publisher</th>
							<th>Category</th>	
							<th>Year</th>
							<th>Status</th>
							<th>Type</th>	
							<th>Condition</th>
						</tr>
						<?php 
						include "inc_koneksi.php";
						$query_mysql = mysqli_query($koneksi, "SELECT * From databuku") or die(mysql_error());
						$nomor = 1;
						while($data = mysqli_fetch_array($query_mysql)){
						?>
						<tr>
							<td><?php echo $nomor++; ?></td>
							<td><?php echo $data['ID']; ?></td>
							<td><?php echo $data['Title']; ?></td>
							<td><?php echo $data['Author']; ?></td>
							<td><?php echo $data['Publisher']; ?></td>
							<td><?php echo $data['Category']; ?></td>
							<td><?php echo $data['Year']; ?></td>
							<td><?php echo $data['Status']; ?></td>
							<td><?php echo $data['Type']; ?></td>
							<td><?php echo $data['Condition']; ?></td>
						</tr>
						<?php } ?>
					</table>
					
				</div>
			</div>
		</div>
	</div>

    <?php 
    if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "input"){
            $alert_input = "<script>alert('Data berhasil diinput');</script>";
			echo $alert_input;
        }else if($pesan == "update"){
            echo "Data berhasil di update.";
        }else if($pesan == "hapus"){
            echo "Data berhasil di hapus.";
        }
    }
    ?>
    <br>
	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card">
				<h3 class="card-header ms-2 bg-white"></h3>
				<div class="card-body">
					<h3 class="text-center">Tambah Data Buku</h3>
					<br>
					<form action="input-aksi_buku.php" method="post" class="row g-3">
						<div class="col-md-4">
							<label class="form-label">ID Buku</label>
							<input type="text" name="ID" class="form-control">
						</div>
						<div class="col-md-4">
							<label class="form-label">Judul Buku</label>
							<input type="text" name="Title" class="form-control">
						</div>
						<div class="col-4">
							<label class="form-label">Penulis</label>
							<input type="text" name="Author" class="form-control">
						</div>
						<div class="col-4">
							<label class="form-label">Penerbit</label>
							<input type="text" name="Publisher" class="form-control">
						</div>
						<div class="col-md-4">
							<label class="form-label">Kategori</label>
							<input type="text" name="Category" class="form-control">
						</div>
						<div class="col-md-4">
							<label class="form-label">Tahun Terbit</label>
							<input type="number" name="Year" class="form-control">
						</div>
						<div class="col-md-4">
							<label class="form-label">Status Buku</label>
							<input type="text" name="Status" class="form-control">
						</div>
						<div class="col-md-4">
							<label class="form-label">Tipe Buku</label>
							<input type="text" name="Type" class="form-control">
						</div>
						<div class="col-md-4">
							<label class="form-label">Kondisi Buku</label>
							<input type="text" name="Condition" class="form-control">
						</div>
						<div class="col-6">
							<button type="submit" value="Tambah" class="btn btn-primary">Tambah Data</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
	
</body>
</html>

