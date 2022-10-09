

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
                                <a class="nav-link text-light  bg-dark" href="logout.php">Logout</a>
                            </li>
                        </ul>
                        
                    </div>
                </div>

        </nav>

	<br>
    <h1 class="ms-3">Halaman Daftar Buku</h1>
    <p class="ms-3">Selamat datang di perpustakaan. Silahkan pilih buku yang ingin anda cari. Perpustakaan ini menyediakan berbagai macam buku yang memiliki cerita cerita seru serta ilmu yang berguna untuk segala jenjang pendidikan. Mari perbanyak literasi buku karena buku merupakan jendela dunia</p>
	
	
 
	<<div class="row">
		<div class="col-md-12 mx-auto">
			<div class="card">
				<h3 class="card-header ms-2 bg-light"><b>Data Buku Perpustakaan Online</b></h3>
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
</body>
</html>

