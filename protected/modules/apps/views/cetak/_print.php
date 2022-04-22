<body onload="print()">
<?php if(isset($_GET['nouji'])){?> 
 <table width="100%" border="0">
   <tr>
     <td width="20%"></td>
     <td  style="text-align: center;font-size: 14px; vertical-align: top; font-weight: bold;">KARTU UJI BERKALA KENDARAAN BERMOTOR</td>
     <td width="20%" ><img src="https://chart.googleapis.com/chart?cht=qr&amp;chs=200x200&amp;choe=UTF-8&amp;chld=L|1&amp;chl=<?=@$data['nouji']?>" alt="" width="100"></td>
   </tr>
   <br> 
 </table> 

 <table width="100%" border="1" style="line-height: 1.5px; font-size: 12px; border-collapse: collapse; "> 
   <tr>
     <td width="50%" style="vertical-align: top;">
       <table  style=" font-size: 12px;">
         <tr>
          <td colspan="3">IDENTITAS PEMILIK KENDARAAN BERMOTOR</td>
        </tr>
        <tr>
         <td>Nama Pemilik</td>
         <td>:</td>
         <td><?=@$data['namapemilik']?></td>
       </tr>
       <tr>
         <td>Alamat Pemilik</td>
         <td>:</td>
         <td><?=@$data['alamatpemilik']?></td>
       </tr>
     </table> 
   </td>
   <td> 
     <table style=" font-size: 12px;">
       <tr>
        <td colspan="3">IDENTITAS KENDARAAN BERMOTOR</td>
      </tr>
      <tr>
       <td>Nomor dan Tanggal Sertifiat Registrasi Uji Tipe</td>
       <td>:</td>
       <td><?=@$data['nosrut']?></td>
     </tr>
     <tr>
       <td> </td>
       <td>:</td>
       <td><?=@$data['tanggalsrut']?></td>
     </tr>
     <tr>
       <td>Nomor Registrasi Kendaraan</td>
       <td>:</td>
       <td><?=@$data['nopol']?></td>
     </tr>
     <tr>
       <td>Nomor Rangka Kendaraan</td>
       <td>:</td>
       <td><?=@$data['norangka']?></td>
     </tr>
     <tr>
       <td>Nomor Motor Penggerak</td>
       <td>:</td>
       <td><?=@$data['nomotor']?></td>
     </tr>
     <tr>
       <td>Nomor Uji Kendaraan</td>
       <td>:</td>
       <td><?=@$data['nouji']?></td>
     </tr>
   </table> 
 </td>
</tr>
</table>
<table width="100%" border="1" style=" border-collapse: collapse;">
 <tr>
   <td colspan="4" style="text-align:center;font-size: 12px;">FOTO BERWARNA 4 SISI KENDARAAN</td>
 </tr>
 <tr style="text-align:center;font-size: 12px;">
   <td>Depan</td>
   <td>Belakang</td>
   <td>Kanan</td>
   <td>Kiri</td>
 </tr>
 <tr>
   <td  style="text-align: center;">
    <img width="45%" src="/simblue/static/<?=@$data['foto_depan']?>" >
  </td>
  <td style="text-align: center;">
    <img width="45%" src="/simblue/static/<?=@$data['foto_belakang']?>" ></td>
    <td style="text-align: center;">
      <img width="45%" src="/simblue/static/<?=@$data['foto_kanan']?>" ></td>
      <td style="text-align: center;">
        <img width="45%" src="/simblue/static/<?=@$data['foto_kiri']?>" ></td>
      </tr>
    </table>
    <table width="100%" border="1" style="line-height: 1.5px;font-size: 12px; border-collapse: collapse;"> 
       
     <tr><br>
       <td width="50%"> 
        <table style="font-size: 12px;">
          <tr>
            <td>SPESIFIKASI TEKNIS KENDARAAN BERMOTOR</td>
          </tr>
          <tr>
            <td>Jenis</td>
            <td>:</td>
            <td><?=@$data['jenis']?></td>
          </tr>
          <tr>
            <td>Merk/Tipe</td>
            <td>:</td>
            <td><?=@$data['merktipe']?></td>
          </tr>
          <tr>
            <td>Tahun Pembuatan/perakitan</td>
            <td>:</td>
            <td><?=@$data['tahunpembuatan']?></td>
          </tr>
          <tr>
            <td>Bahan Bakar/sumber energi</td>
            <td>:</td>
            <td><?=@$data['bahanbakar']?></td>
          </tr>
          <tr>
            <td>Isi Silinder</td>
            <td>:</td>
            <td><?=@$data['silinder']?> cc</td>
          </tr>
          <tr>
            <td>Daya Motor</td>
            <td>:</td>
            <td><?=@$data['dayamotor']?> KW/PS/HP</td>
          </tr>
          <tr>
            <td>Ukuran Ban</td>
            <td>:</td>
            <td><?=@$data['ukuranban']?></td>
          </tr>
          <tr>
            <td>Konfigurasi Sumbu</td>
            <td>:</td>
            <td><?=@$data['sumbu']?></td>
          </tr>
          <tr>
            <td>Berat Kosong kendaraan</td>
            <td>:</td>
            <td><?=@$data['beratkosong']?> kg</td>
          </tr> 
        </table>
        <table style="font-size: 12px;">
          <tr>
            <td colspan="9">Dimensi Utama Kendaraan Bermotor </td>
          </tr>
          <tr>
            <td>Panjang</td>
            <td>:</td>
            <td><?=@$data['dimensi_panjang']?> </td>
            <td>mm</td>
            <td></td>
            <td>Julur depan</td>
            <td>:</td>
            <td><?=@$data['dimensi_julurdepan']?> </td>
            <td>mm</td>
          </tr> 
          <tr>
            <td>Lebar</td>
            <td>:</td>
            <td><?=@$data['dimensi_lebar']?> </td>
            <td>mm</td>
            <td></td>
            <td>Julur belakang</td>
            <td>:</td>
            <td><?=@$data['dimensi_julurbelakang']?> </td>
            <td>mm</td>
          </tr> 
          <tr>
            <td>Tinggi</td>
            <td>:</td>
            <td><?=@$data['dimensi_tinggi']?> </td>
            <td>mm</td>
            <td></td> 
          </tr> 
        </table>
        <table style="font-size: 12px;">
          <tr>
            <td colspan="5">Jarak Sumbu</td>
          </tr>
          <tr>
            <td>Sumbu I - II</td>
            <td>:</td>
            <td><?=@$data['sumbu_1']?> </td>
            <td>mm</td>
            <td></td> 
          </tr>  
          <tr>
            <td>Sumbu II - III</td>
            <td>:</td>
            <td><?=@$data['sumbu_2']?> </td>
            <td>mm</td>
            <td></td> 
          </tr>  
          <tr>
            <td>Sumbu III - IV</td>
            <td>:</td>
            <td><?=@$data['sumbu_3']?> </td>
            <td>mm</td>
            <td></td> 
          </tr>  
        </table>
        <table style="font-size: 12px;">
          <tr>
            <td colspan="5">Dimensi Bak Muatan/Tangki : (pxlxt) mm</td>
          </tr> 
        </table>
        <table style="font-size: 12px;">
          <tr>
            <td >JBB/JBKB : <?=@$data['jbb']?>  kg/0 kg </td>
            <td >JBI/JBKI : <?=@$data['jbi_jbki']?>  kg/0 kg</td>
          </tr> 
        </table>
        <table style="font-size: 12px;"> 
          <tr>
            <td>Daya angkut</td>
            <td>:</td>
            <td><?=@$data['daya_angkut']?> orang/</td>
            <td>  </td>
            <td>kg</td> 
          </tr>  
          <tr>
            <td>Kelas Jalan terendah</td>
            <td>:</td>
            <td> <?=@$data['kelas_jalan']?>  </td>
            <td> </td>
            <td> </td> 
          </tr>      
        </table>
      </td>
      <td style="vertical-align: top;"> 
        <table width="100%" style="font-size: 12px;"> 
          <tr style="border-bottom: solid;">
            <td>Hasil Uji</td>
            <td>Ambang batas</td>
            <td>Hasil Uji </td> 
          </tr>    
          <tr>
            <td>Rem Utama</td>
            <td></td>
            <td></td>
          </tr>    
          <tr>
            <td>Lampu Utama</td>
            <td></td>
            <td></td>
          </tr>    
          <tr>
            <td>Emisi</td>
            <td></td>
            <td></td>
          </tr>    
        </table>
        <table style="font-size: 12px;"> 
          <tr>
            <td>KETERANGAN</td>
            <td>:</td>
            <td>orang/</td> 
          </tr>  
          <tr>
            <td>Masa Berlaku Uji </td>
            <td>:</td>
            <td> isi </td> 
          </tr>  
          <tr>
            <td>Nama Petugas Penguji</td>
            <td>:</td>
            <td> isi </td> 
          </tr>     
          <tr>
            <td>Tanda Tangan Petugas Penguji</td>
            <td>:</td>
            <td> isi </td> 
          </tr>     
        </table>
      </td>
    </tr> 
  </table>
  <?php } ?> 
  </body>