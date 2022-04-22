<table width="100%"  style="border-collapse: collapse;">
	<tr style="background-color: #dddddd;">
		<td>No.</td>
		<td>Kecamatan</td>
		<td>Laki-Laki</td>
		<td>Perempuan</td>
		<td>Total</td>
	</tr>
	<?php 
		$no=1;
		foreach ($dtutam as $key => $vl) { 
	?>
	<tr>
		<td><?=@$no?></td>
		<td><?=@$vl['kecamatan']?></td>
		<td><?=@$vl['jml_l']?></td>
		<td><?=@$vl['jml_p']?></td>
		<td><?=@$vl['jml_l']+$vl['jml_p']?></td>
	</tr>
	<?php $no++; }?>
</table>