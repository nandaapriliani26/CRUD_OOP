<?php 	
include('koneksi6.php');
$db = new dbh();
$data = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="tambah_data.php">Tambah Data</a>
<table border="1">
		<tr>
			<th>No</th>
			<th>Id</th>
			<th>judul</th>
			<th>author</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['judul']; ?></td>
				<td><?php echo $row['author']; ?></td>
				<td>
					<a href="edit_data.php?id=<?php echo $row['id']; ?>">Update</a>
					<a href="proses_data.php?action=delete&id=<?php echo $row['id']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>