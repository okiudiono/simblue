<section class="content">
  <div class="row"> 
    <div class="col-md-1">
    </div>
    <div class="col-md-10"> 
      <div class="box box-success">
        <div class="box-header ">
          <h3 class="box-title">Form Cetak Hasil Uji</h3>
          <div class="box-tools pull-right">
          <a href="/simblue/apps/" type="button" class="btn bg-yellow btn-flat margin"> <li class="fa fa-home"></li> Home</a>  
          </div> 
        </div>
        <div class="box-body"> 
          <br><br> 
            <form class="form-horizontal" method="GET"  action="/simblue/apps/cetak"> 
              <?php if(isset($_GET['nouji'])) {
                $nouji ="";$nopol ="";
                if(!empty($_GET['nouji'])){
                  $nouji = $_GET['nouji'] ;
                }
                if(!empty($_GET['nopol'])){
                  $nopol = $_GET['nopol'] ;
                }
               }?>
              <div class="form-group">
                <label for="opd" class="col-sm-3 control-label">No Uji</label> 
                <div class="col-sm-6"> 
                 <input type="text" name="nouji" id="nouji" class="form-control" placeholder="Masukan Nomor Uji" value="<?=@$nouji?>">
               </div>
             </div>  
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-3 control-label">Nomor Kendaraan</label> 
              <div class="col-sm-6">  
               <input type="text" name="nopol" class="form-control"  placeholder="Masukan Nomor Kendaraan" value="<?=@$nopol?>">
              </div>
            </div>  
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-3 control-label"> </label> 
              <div class="col-sm-4">  
               <button  type="submit" class="btn bg-orange margin"><li class="fa fa-search"></li> Cari Data</button>
               <a href="/simblue/apps/cetak" type="button" class="btn bg-blue margin"><li class="fa fa-refresh"></li> Refresh  </a>
              </div>
            </div> 
           </form> 

           <?php if(isset($_GET['nouji'])){?>
           <a href="/simblue/apps/cetak/print?nouji=<?=@$_GET['nouji']?>&nopol=<?=@$_GET['nopol']?>" type="button" class="btn bg-green margin" target="_blank"><li class="fa fa-print"></li> Cetak Hasil Uji </a>
           <table width="100%" border="1">
             <tr>
               <td width="20%"></td>
               <td  style="text-align: center;">KARTU UJI BERKALA KENDARAAN BERMOTOR</td>
               <td width="20%" ><img src="https://chart.googleapis.com/chart?cht=qr&amp;chs=200x200&amp;choe=UTF-8&amp;chld=L|1&amp;chl=<?=@$data['nouji']?>" alt="" width="100"></td>
             </tr>
             <br> 
           </table> 

           <table width="100%" border="1" style="line-height: 1.5px; font-size: 11px;"> 
             <tr>
               <td width="50%" style="vertical-align: top;">
                 <table>
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
                 <table>
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
           <table width="100%" border="1">
             <tr>
               <td colspan="4" style="text-align:center;">FOTO BERWARNA 4 SISI KENDARAAN</td>
             </tr>
             <tr style="text-align:center;">
               <td>Depan</td>
               <td>Belakang</td>
               <td>Kanan</td>
               <td>Kiri</td>
             </tr>
             <tr>
               <td  style="text-align: center;">
                <img width="35%" src="../static/<?=@$data['foto_depan']?>" >
               </td>
               <td style="text-align: center;">
                <img width="35%" src="../static/<?=@$data['foto_belakang']?>" ></td>
               <td style="text-align: center;">
                <img width="35%" src="../static/<?=@$data['foto_kanan']?>" ></td>
               <td style="text-align: center;">
                <img width="35%" src="../static/<?=@$data['foto_kiri']?>" ></td>
             </tr>
           </table>
           <table width="100%" border="1" style="line-height: 1px;">
              
             <tr>
               <td width="50%">SPESIFIKASI KENDARAAN
                  <table>
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
                  <table>
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
                  <table>
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
                  <table>
                    <tr>
                      <td colspan="5">Dimensi Bak Muatan/Tangki : (pxlxt) mm</td>
                    </tr> 
                  </table>
                  <table>
                    <tr>
                      <td >JBB/JBKB : <?=@$data['jbb']?>  kg/0 kg </td>
                      <td >JBI/JBKI : <?=@$data['jbi_jbki']?>  kg/0 kg</td>
                    </tr> 
                  </table>
                  <table> 
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
                  <table width="100%"> 
                    <tr style="border-bottom: solid;">
                      <td>Hasil Uji</td>
                      <td>Ambang batas</td>
                      <td>Hasil Uji/</td> 
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
                  <table> 
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
         </div>
        </div>
      </div>
    </div>
  </div>
    <div class="col-md-1">
    </div>
</section> 