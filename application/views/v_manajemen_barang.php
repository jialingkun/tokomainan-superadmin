<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no">
	<title>Manajemen Barang</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/bootstrap/dist/css/bootstrap.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/font-awesome/css/font-awesome.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.2/dist/css/AdminLTE.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.2/dist/css/skins/skin-blue.css');?>">
	<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<!-- Main Header -->
		<?php include('application/views/v_navbar_top.php');?>

		<!-- Sidebar -->
		<?php include('application/views/v_navbar_left.php');?>

		<!-- Konten Halaman -->
		<div class="content-wrapper">

			<!-- Header -->
			<section class="content-header">
				<h1>Manajemen Barang</h1>
			</section>

			<!-- Konten Utama -->
			<section class="content container-fluid">
				<div class="row">
					<div class="col-xs-12">

						<!-- Lokasi pesan pemberitahuan akan ditampilkan -->
						<div id="pesanPemberitahuan"></div>

						<!-- Kotak berisi tabel data -->
						<div class="box">
							<div class="box-header">
								<button id="btnUpload" class="btn btn-primary pull-right"><i class="fa fa-upload"></i> Upload Gambar</button>
							</div>
							<div class="box-body">
								<table id="tabelBarang" class="table table-bordered table-striped">

								<!-- Header Tabel -->
								<thead>
								<tr>
									<th width="162.6px" rowspan="2">ID Barang</th>
									<th width="162.6px" rowspan="2">Nama Barang</th>
									<th width="162.6px" rowspan="2">Jumlah dlm Koli</th>
									<th width="162.6px" rowspan="2">Kategori</th>
									<th width="162.6px" rowspan="2">Fungsi</th>
									<th colspan="4">Harga Jual</th>
									<th rowspan="2">Menu</th>
								</tr>
								<tr>
									<th width="162.6px">Level 1</th>
									<th width="162.6px">Level 2</th>
									<th width="162.6px">Level 3</th>
									<th width="162.6px">Level 4</th>
								</tr>
								</thead>

								<!-- Isi Tabel -->
								<tbody>
								<!-- Baris untuk tambah data barang baru -->
								<tr>
									<td><input id="idBarangBaru" type="text" class="form-control" placeholder="ID barang" name="id_barang"></td>
									<td><input type="text" class="form-control" placeholder="Nama barang" name="nama_barang"></td>
									<td><input type="text" class="form-control" placeholder="Jumlah dlm Koli" name="jumlah_dlm_koli"></td>
									<td><input type="text" class="form-control" placeholder="Kategori" name="kategori"></td>
									<td><input type="text" class="form-control" placeholder="Fungsi" name="fungsi"></td>
									<td><input type="text" class="form-control" placeholder="Harga Jual 1" name="harga_jual_1"></td>
									<td><input type="text" class="form-control" placeholder="Harga Jual 2" name="harga_jual_2"></td>
									<td><input type="text" class="form-control" placeholder="Harga Jual 3" name="harga_jual_3"></td>
									<td><input type="text" class="form-control" placeholder="Harga Jual 4" name="harga_jual_4"></td>
									<td></td>
								</tr>

								<!-- Daftar data barang -->
								<?php for($i=0; $i<count($barang); $i++) { ?> 
								<tr data-id="<?php echo $barang[$i]['id_barang'];?>">
									<td><input type="text" class="form-control" name="id_barang" value="<?php echo $barang[$i]['id_barang'];?>"></td>
									<td><input type="text" class="form-control" name="nama_barang" value="<?php echo $barang[$i]['nama_barang'];?>"></td>
									<td><input type="text" class="form-control" name="jumlah_dlm_koli" value="<?php echo $barang[$i]['jumlah_dlm_koli'];?>"></td>
									<td><input type="text" class="form-control" name="kategori" value="<?php echo $barang[$i]['kategori'];?>"></td>
									<td><input type="text" class="form-control" name="fungsi" value="<?php echo $barang[$i]['fungsi'];?>"></td>
									<td><input type="text" class="form-control" name="harga_jual_1" value="<?php echo $barang[$i]['harga_jual_1'];?>"></td>
									<td><input type="text" class="form-control" name="harga_jual_2" value="<?php echo $barang[$i]['harga_jual_2'];?>"></td>
									<td><input type="text" class="form-control" name="harga_jual_3" value="<?php echo $barang[$i]['harga_jual_3'];?>"></td>
									<td><input type="text" class="form-control" name="harga_jual_4" value="<?php echo $barang[$i]['harga_jual_4'];?>"></td>
									<td>
										<button id="btnHapus" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
									</td>
								</tr>
								<?php } ?>
								</tbody>

								</table>
							</div> <!-- End box-body -->
						</div> <!-- End box -->
					</div> <!-- End col-xs-12 -->
				</div> <!-- End row -->
			</section> <!-- End section for content -->
		</div> <!-- End content-wrapper -->
	</div> <!-- End wrapper -->

	<script src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/jquery/dist/jquery.js');?>"></script>
	<script src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/bootstrap/dist/js/bootstrap.js');?>"></script>
	<script src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/datatables.net/js/jquery.dataTables.js');?>"></script>
	<script src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/datatables.net-bs/js/dataTables.bootstrap.js');?>"></script>
	<script src="<?php echo base_url('assets/AdminLTE-2.4.2/dist/js/adminlte.js');?>"></script>

	<script>
	$(document).ready(function() {
		// Tandai menu Manajemen Barang sebagai menu aktif pada sidebar
		$('#manajemenBarang').addClass('active');

		// Gunakan DataTable
		var tabel = $('#tabelBarang').DataTable( {
			'scrollX'	: true,
			'keys'		: true
		});

		// Fokuskan pada sel ID Barang pada baris input data barang baru
		$('#barisInput input[name="id_barang"]').focus();

		// Kumpulan event handler untuk baris input
		$('#tabelBarang').on('keypress', '#idBarangBaru', function (event) {
			if(event.code == 13) console.log('yes');
		})

		function refreshTabel(data) {
			// Hapus isi data tabel
			$('#tabelBarang tbody').remove();

			// Buat variabel baru yang berisi HTML untuk isi data
			var isi = '<tbody>';
			// Untuk baris input data barang baru
			isi += '<tr id="barisInput">';
			isi += '<td><input type="text" class="form-control" placeholder="ID barang" name="id_barang"></td>';
			isi += '<td><input type="text" class="form-control" placeholder="Nama barang" name="nama_barang"></td>';
			isi += '<td><input type="text" class="form-control" placeholder="Jumlah dlm Koli" name="jumlah_dlm_koli"></td>';
			isi += '<td><input type="text" class="form-control" placeholder="Kategori" name="kategori"></td>';
			isi += '<td><input type="text" class="form-control" placeholder="Fungsi" name="fungsi"></td>';
			isi += '<td><input type="text" class="form-control" placeholder="Harga Jual 1" name="harga_jual_1"></td>';
			isi += '<td><input type="text" class="form-control" placeholder="Harga Jual 2" name="harga_jual_2"></td>';
			isi += '<td><input type="text" class="form-control" placeholder="Harga Jual 3" name="harga_jual_3"></td>';
			isi += '<td><input type="text" class="form-control" placeholder="Harga Jual 4" name="harga_jual_4"></td>';
			isi += '<td></td>';
			isi += '</tr>';
			// Untuk daftar barang
			for(var i=0; i<data.length; i++) {
				isi += '<tr>';
				isi += '<td><input type="text" class="form-control" name="id_barang" value="'+data[i].id_barang+'"></td>';
				isi += '<td><input type="text" class="form-control" name="nama_barang" value="'+data[i].nama_barang+'"></td>';
				isi += '<td><input type="text" class="form-control" name="jumlah_dlm_koli" value="'+data[i].jumlah_dlm_koli+'"></td>';
				isi += '<td><input type="text" class="form-control" name="kategori" value="'+data[i].kategori+'"></td>';
				isi += '<td><input type="text" class="form-control" name="fungsi" value="'+data[i].fungsi+'"></td>';
				isi += '<td><input type="text" class="form-control" name="harga_jual_1" value="'+data[i].harga_jual_1+'"></td>';
				isi += '<td><input type="text" class="form-control" name="harga_jual_2" value="'+data[i].harga_jual_2+'"></td>';
				isi += '<td><input type="text" class="form-control" name="harga_jual_3" value="'+data[i].harga_jual_3+'"></td>';
				isi += '<td><input type="text" class="form-control" name="harga_jual_4" value="'+data[i].harga_jual_4+'"></td>';
				isi += '<td><button id="btnHapus" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button></td>';
				isi += '</tr>';
			}
			isi += '</tbody>';

			// Tambahkan data baru ke dalam tabel
			$('#tabelBarang').append(isi);
		}

		// Fungsi yang dijalankan ketika mengklik tombol Hapus (silang)
		$('#tabelBarang').on('click', '#btnHapus', function() {
			// Tampilkan pesan loading
			var loading = '<div class="overlay">';
			loading += '<i class="fa fa-refresh fa-spin"></i>';
			loading += '</div>';
			$('div[class="box"]').append(loading);

			// Ambil seluruh data pada baris di mana tombol Hapus diklik
			var data = tabel.row($(this).parents('td')).data();
			//console.log(data);

			// Ambil data id_barang dari data yang diambil sebelumnya
			var id_barang = data[0];
			// Karena data yang diperoleh berupa string <input type="text"... , data harus dibersihkan dulu
			id_barang = id_barang.split('value="').pop();
			id_barang = id_barang.replace('">', '');
			//console.log(id_barang);

			$.ajax({
				type	: 'post',
				url		: 'hapus-barang',
				cache	: 'false',
				dataType: 'json',
				data	: { id_barang : id_barang },
				success	: function(data) {
					//console.log(data);
					// Perbarui isi tabel
					refreshTabel(data);

					// Tambahkan pesan pemberitahuan bahwa data telah dihapus
					var alert = '<div class="alert alert-danger alert-dismissible" role="alert">';
					alert += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
					alert += 'Data telah dihapus.';
					alert += '</div>';
					$('#pesanPemberitahuan').append(alert);

					// Hapus pesan loading
					$('div.overlay').remove();
				}
			});
		});

	});

	/* Kumpulan kode tidak terpakai
	var table = $('#tabelBarang').DataTable();
	$('#tabelBarang tbody').on('click', 'tr', function () {
		var data = table.row( this ).data();
		alert( 'You clicked on '+data[0]+'\'s row' );
	} );

	// Fungsi yang dijalankan ketika mengklik tombol Tambah Data
	// Jika diklik, baris baru untuk memasukkan data baru akan muncul di bagian bawah tabel
	$('#btnTambah').click(function() {
		// Cek terlebih dahulu apakah baris input sudah ada
		// Jika tidak ada, tambah baris baru
		// Jika ada, tidak ada aksi yang dilakukan
		if($('#barisBaru').length == 0) {
			tabel.row.add( [
			'<input type="text" class="form-control" placeholder="ID barang" name="id_barang">',
			'<input type="text" class="form-control" placeholder="Nama barang" name="nama_barang">',
			'<input type="text" class="form-control" placeholder="Harga beli" name="harga_beli">',
			'<input type="text" class="form-control" placeholder="Jumlah dalam koli" name="jumlah_dlm_koli">',
			'<input type="text" class="form-control" placeholder="Kategori" name="kategori">',
			'<input type="text" class="form-control" placeholder="Fungsi" name="fungsi">',
			'<input type="text" class="form-control" placeholder="Harga Jual 1" name="harga_jual_1">',
			'<input type="text" class="form-control" placeholder="Harga Jual 2" name="harga_jual_2">',
			'<input type="text" class="form-control" placeholder="Harga Jual 3" name="harga_jual_3">',
			'<input type="text" class="form-control" placeholder="Harga Jual 4" name="harga_jual_4">',
			'<button id="btnInputData" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i></button>'
			] ).node().id = 'barisBaru';
			tabel.draw();
		}
	});

	// Fungsi yang dijalankan ketika mengklik tombol Tambah (+)
	$('#tabelBarang').on('click', '#btnInputData', function() {
		// Tampilkan pesan loading
		var loading = '<div class="overlay">';
		loading += '<i class="fa fa-refresh fa-spin"></i>';
		loading += '</div>';
		$('div[class="box"]').append(loading);

		// Dapatkan seluruh nilai dari input data baru
		var id_barang = $('input[name="id_barang"]').val();
		var nama_barang = $('input[name="nama_barang"]').val();
		var harga_beli = $('input[name="harga_beli"]').val();
		var jumlah_dlm_koli = $('input[name="jumlah_dlm_koli"]').val();
		var kategori = $('input[name="kategori"]').val();
		var fungsi = $('input[name="fungsi"]').val();
		var harga_jual_1 = $('input[name="harga_jual_1"]').val();
		var harga_jual_2 = $('input[name="harga_jual_2"]').val();
		var harga_jual_3 = $('input[name="harga_jual_3"]').val();
		var harga_jual_4 = $('input[name="harga_jual_4"]').val();

		$.ajax({
			type	: 'post',
			url		: 'tambah-barang',
			cache	: false,
			data	: {
				id_barang 		: id_barang,
				nama_barang		: nama_barang,
				harga_beli		: harga_beli,
				jumlah_dlm_koli	: jumlah_dlm_koli,
				kategori		: kategori,
				fungsi			: fungsi,
				harga_jual_1 	: harga_jual_1,
				harga_jual_2 	: harga_jual_2,
				harga_jual_3 	: harga_jual_3,
				harga_jual_4 	: harga_jual_4
			},
			success	: function(data) {
				// Tambahkan pesan pemberitahuan bahwa data telah ditambahkan ke database
				// var alert = '<div class="alert alert-info alert-dismissible" role="alert">';
				// alert += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
				// alert += 'Data baru berhasil disimpan.';
				// alert += '</div>';
				// $('#pesanPemberitahuan').append(alert);

				// Muat ulang data dalam tabel
				// tabel.clear().draw();
				alert(data);

				// Hapus pesan loading
				// $('div.overlay').remove();
			}
		});
	});

	*/
		
	</script>
</body>
</html>