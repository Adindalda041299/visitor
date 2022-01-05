<?php 
include 'koneksi.php';
$data = mysqli_query($konek ,"SELECT * FROM tamu WHERE tglkunjung ORDER BY tglkunjung ASC");
 ?>
 
 <html>
<head>
<style type="text/css">
body{
background:#8BD9CA; 
}
</style>
</head>
</html>


        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Library Visitor</h2>
                    <h3 class="section-subheading text-muted">Fill your personal data to visit the library</h3>
                   

 <style >
  @media print{
 		.print{
 			color: yellow 
 			background-color: yellow;
 		
 		}
 		.id{
 			display: none;
 		}

 	}
 	.print{
 		border-collapse: collapse;
 	}
 	.print{
 		border-collapse: collapse;
 	}
 </style>
 <h2>LAPORAN </h2>
 <hr/>
 <table class="print" style="margin-top: 50px;" border="1" align="center" width="100%">
 	<tr>
 		<th>NO</th>
 		<th>NIM</th>
 		<th>NAMA</th>
		<th>PRODI</th>
		<th>semester</th>
 		<th>TGL KUNJUNG</th>
 		
 	</tr>
 	<?php 
 	$i=1;
 	while($dta = mysqli_fetch_assoc($data)) :
 	 ?>
 	<tr>
 		<td align="center"><?= $i ?></td>
 		<td align="center"><?= $dta['NIM'] ?></td>
 		<td align="left"><?= $dta['nama'] ?></td>
		<td align="center"><?= $dta['Prodi'] ?></td>
 		<td align="center"><?= $dta['Semester']?></td>
 		<td align="center"><?= $dta['tglkunjung']?></td>
		 
		 <td>
		<a href="delete.php?id='.$dta['id'].'" class="btn btn-danger btn-sm" onclick="return confirm (\'Yakin ingin menghapus data ini?\')">Delete</a>
		</td>
 	</tr>
 	
 	<?php $i++; ?>
 <?php endwhile; ?>
 </table>
 <table width="100%">
	<tr>
		<td></td>
		<td width="200px">
			<BR/>
			<p>Mantingan, <?= date('d/m/y') ?> <br/>
				
			<br/>
			<br/>
			<br/>
		<p>__________________________</p>
		</td>
	</tr>
</table>
<a class ="id" href="#" onclick="window.print();">CETAK</a>