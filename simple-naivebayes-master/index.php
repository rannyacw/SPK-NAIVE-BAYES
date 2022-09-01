<?php

require_once('functions.php');

$tablename = query("SELECT * FROM tablename dk JOIN tbl_matem tu ON dk.matem_id=tu.id JOIN tbl_pemrog tp ON dk.pemrog_id=tp.id JOIN tbl_pbo th ON dk.pbo_id=th.id JOIN tbl_multi ta ON dk.multi_id=ta.id JOIN tbl_jarkom bayar ON dk.jarkom_id=bayar.id JOIN tbl_konsentrasi tk ON dk.konsentarsi_id=tk.id");

?>

<!DOCTYPE html>
<html>

<head>
	<title>Sistem Pendukung Keputusan</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">

	<style>
		table {
			text-align: center;
		}

		.table>tbody>tr>* {
			vertical-align: middle;
		}
	</style>

</head>

<body>

	<div class="container">
		<div class="row mt-4 justify-content-center">
			<div class="col">
				<div class="card">
					<div class="card-header">
						<h1>Program Naive Bayes</h1>
						<a href="dataset_latih.php" class="btn btn-success"><i class="fa fa-plus"></i> Dataset Latih</a>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-striped">
							<thead>
								<th>Matematika</th>
								<th>Pemrog</th>
								<th>PBO</th>
								<th>Multimedia</th>
								<th>Jarkom</th>
								<th>Konsentrasi</th>
							</thead>
							<tbody>
								<?php foreach ($tablename as $num => $row) : ?>
									<tr>
										<td><?= $row[`matematika`]; ?></td>
										<td><?= $row[`pemrog`]; ?></td>
										<td><?= $row[`pbo`]; ?></td>
										<td><?= $row[`multi`]; ?></td>
										<td><?= $row[`jarkom`]; ?></td>
										<td><?= $row[`konsentrasi`]; ?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>



</body>

</html>