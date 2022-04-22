<?php if (!empty($data)) { ?>

  <?php $no = 1; foreach ($data as $row) { ?>
    <tr>
        <td class="text-center"><?= $no++; ?></td> 
        <!-- <td><?= strtoupper($row['nik']); ?></td> -->
        <td><?= strtoupper($row['nama']); ?></td>
        <td><?= $row['ut_provinsi']; ?></td>
        <td><?= $row['ut_kabupaten']; ?></td>
        <td><?= $row['ut_kecamatan']; ?></td>
        <td><?= $row['ut_desa']; ?></td>
        <td><?= $row['ut_rt']; ?></td>
        <td><?= $row['ut_rw']; ?></td>
        <td><?= $row['asal_mudik']; ?></td>
        <td><?= $row['provinsi_mudik']; ?></td>
        <td><?= $row['kabupaten_mudik']; ?></td>
        <td><?= $row['tu_kecamatan']; ?></td>
        <td><?= $row['tu_desa']; ?></td>
        <td><?= $row['tu_rt']; ?></td>
        <td><?= $row['tu_rw']; ?></td>
        <td><?= $row['ut_telp']; ?></td>
        <td><?= $row['ut_keperluan']; ?></td>
        <td><?= $row['ut_alasan']; ?></td>
        <td><?= $row['transportasi']; ?></td>
        <td><?= $row['hubungan_tujuan']; ?></td>
        <td><?= $row['tgl_datang']; ?></td>
    </tr>
  <?php } ?>

  <tr>
      <td colspan='23' class='text-left'>
        
        <?php if ($jml_page > 1) { ?>
        <br>
        <ul class="pagination pagination-sm no-margin pull-left">

          <?php $pg = 1; if (isset($_GET['page'])){ $pg = $_GET['page']; } ?>
          <?php 
            if ($pg == 1) {
              $pgz = 1;
            }else{
              $pgz = $pg-1;
            }
          ?>
          <li><a onclick="tentukanpage(<?=$pgz;?>);caridata();" href="javascript:void(0)">«</a></li>

          <?php for ($i=1; $i <= $jml_page ; $i++) {  ?>
            <li <?php if($i == $defaultpage) {echo "class=\"active\"";} ?>>
              <a onclick="tentukanpage(<?=$i;?>);caridata();" href="javascript:void(0)"><?= $i; ?></a>
            </li>
          <?php } ?>

          <?php 
            if ($pg == $jml_page) {
              $pgx = $jml_page;
            }else{
              $pgx = $pg+1;
            }
          ?>
          <li><a onclick="tentukanpage(<?=$pgx;?>);caridata();" href="javascript:void(0)">»</a></li>

        </ul>
        <?php } ?>
        <div class="text-success pull-right" style="margin-right: 20px;">Jumlah data: <strong><?= $totaldata; ?></strong></div>

      </td>
  </tr>

<?php }else{ ?>
  <tr>
      <td colspan='7' class='text-left text-danger'>Data tidak ditemukan...!!!</td>
  </tr>
<?php } ?>

<script type="text/javascript">
  /*$(document).ready(function () {
    $('#dtBasicExample').DataTable({
      "searching": false,
      "ordering": false
    });
    $('.dataTables_length').addClass('bs-select');
  });*/
</script>