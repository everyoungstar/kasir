<?php 
include "../pages/sidebar.php";

		if(isset($_GET['pesan'])){
			if($_GET['pesan']=="simpan"){?>
				<div class="alert alert-success" role="alert">
					Data Berhasil Di Simpan
				</div>
			<?php } ?>
			<?php if($_GET['pesan']=="update"){?>
				<div class="alert alert-success" role="alert">
					Data Berhasil Di Update
				</div>
			<?php } ?>
			<?php if($_GET['pesan']=="hapus"){?>
				<div class="alert alert-success" role="alert">
					Data Berhasil Di Hapus
				</div>
			<?php } ?>
			<?php 
		}
		?>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Produk</th>
					<th>Harga</th>
					<th>Stok</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				include '../config/koneksi.php';
				$no = 1;
				$data = mysqli_query($koneksi,"select * from produk");
				while($d = mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['nama_produk']; ?></td>
						<td>Rp. <?php echo $d['harga']; ?></td>
						<td><?php echo $d['stok']; ?></td>
						<td>
							<button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit-data<?php echo $d['id_produk']; ?>">
								Edit
							</button>
							<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus-data<?php echo $d['id_produk']; ?>">
								Hapus
							</button>
						</td>
					</tr>

					<!-- Modal Edit Data-->
					<div class="modal fade" id="edit-data<?php echo $d['id_produk']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<form action="../barang/update-barang.php" method="post">
									<div class="modal-body">
										<div class="form-group">
											<label>Nama Produk</label>
											<input type="hidden" name="id_produk" value="<?php echo $d['id_produk']; ?>">
											<input type="text" name="nama_produk" class="form-control" value="<?php echo $d['nama_produk']; ?>">
										</div>
										<div class="form-group">
											<label>Harga Produk</label>
											<input type="number" name="harga" class="form-control" value="<?php echo $d['harga']; ?>">
										</div>
										<div class="form-group">
											<label>Stok Produk</label>
											<input type="number" name="stok" class="form-control" value="<?php echo $d['stok']; ?>">
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Update</button>
									</div>
								</form>
							</div>
						</div>
					</div>

					<!-- Modal Hapus Data-->
					<div class="modal fade" id="hapus-data<?php echo $d['id_produk']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<form method="post" action="../barang/hapus-barang.php">
									<div class="modal-body">
										<input type="hidden" name="id_produk" value="<?php echo $d['id_produk']; ?>">
										Apakah anda yakin akan menghapus data <b><?php echo $d['nama_produk']; ?></b>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Hapus</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<!-- Modal Tambah Data-->
<div class="modal fade" id="tambah-data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="../barang/simpan-barang.php" method="post">
				<div class="modal-body">				
					<div class="form-group">
						<label>Nama Produk</label>
						<input type="text" name="nama_produk" class="form-control">
					</div>
					<div class="form-group">
						<label>Harga Produk</label>
						<input type="number" name="harga" class="form-control">
					</div>
					<div class="form-group">
						<label>Stok Produk</label>
						<input type="number" name="stok" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>

