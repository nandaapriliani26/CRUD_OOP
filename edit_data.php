<?php 	
include('koneksi6.php');
$db = new dbh();
$id_user = $_GET['id'];
if(! is_null($id_user))
{
	$data_user = $db->get_by_id($id_user);
}
else
{
	header('location:crud1.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Update Data User</h3>
<hr/>
<form method="post" action="proses_data.php?action=update">
<input type="hidden" name="id" value="<?php echo $data_user['id']; ?>"/>
<table>
	<tr>
		<td>Id</td>
		<td>:</td>
		<td><input type="text" name="id" value="<?php echo $data_user['id']; ?>"/></td>
	</tr>
	<tr>
		<td>judul</td>
		<td>:</td>
		<td><input type="text" name="judul" value="<?php echo $data_user['judul']; ?>"/></td>
	</tr>
	<tr>
		<td>author</td>
		<td>:</td>
		<td><input type="text" name="author" value="<?php echo $data_user['author']; ?>"/></td>
	</tr>
    <tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
	</tr>
</table>
</form>
</body>
</html>