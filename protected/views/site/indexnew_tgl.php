  <style type="text/css">
  .gerak {
    animation: up-down 2s ease-in-out infinite alternate-reverse both;
    animation-name: up-down;
    animation-duration: 2s;
    animation-timing-function: ease-in-out;
    animation-delay: 0s;
    animation-iteration-count: infinite;
    animation-direction: alternate-reverse;
    animation-fill-mode: both;
    animation-play-state: running ;
  }  

.button3 {
  background-color: black; 
  color: black; 
  border: 2px solid black;
}

.button3:hover{
	background-color: white;
	color: black;
}

.button1 {
 border: 2px solid white;
  background-color: transparent;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}

.button2 {
  background-color: black; 
  color: black; 
  border: 2px solid black;
}

.button2:hover{
	background-color: #50b3de;
	color: white;
}

.button4 {
 border: 2px solid #50b3de;
  background-color: transparent;
  color: #50b3de;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: block;
  width: 100%;
}

html {
  scroll-behavior: smooth;
}


img {
  max-width: 100%;
  height: auto;
}
.b
{
	position: absolute;
  left: auto;
}


  .mobileHide { display: inline; }

  /* Smartphone Portrait and Landscape */
  @media only screen
    and (min-device-width : 320px)
    and (max-device-width : 600px){
     .mobileHide { display: none;}
  }

}


  </style>
<scroll-container>
  <div class="page-header" data-parallax="true" style="background-image: url('<?php echo Yii::app()->baseUrl; ?>/images/monumen.jpg'); margin-top: 60px;">
    <div class="container">
      <div class="row">
        
        <div class="col-md-12">
          <table>
          <td>

            <br><br>

            <img class="mobileHide" src="<?php echo Yii::app()->baseUrl; ?>/images/bg.png" width="300" height="auto">&nbsp;&nbsp;&nbsp;

          </td>

          <td style="color: white;">

          <h1 class="title" style="color: red;/*background-color: white; color: black; border-radius: 5px 5px 5px 5px;">&nbsp;Putus Penyebaran Corona,&nbsp; <br> &nbsp;JANGAN MUDIK DULU!&nbsp;</h1>

          <h2 style= "color: red;/*background-color: white; color: black; border-radius: 5px 5px 5px 5px;"> Tetap <strong>NEKAD</strong> mau mudik? </h2>

          <h3 style="margin-top: 2px; margin-bottom: 1px; color: red; /*background-color: white; color: black; border-radius: 5px 5px 5px 5px;">
            <i class="material-icons">check</i> Isi data dengan klik tombol <b>"Isi Data Pemudik"</b>
          </h3>

          <h3 style="margin-top: 2px; margin-bottom: 1px; color: red;/*background-color: white; color: black; border-radius: 5px 5px 5px 5px;">
            <i class="material-icons">check</i> <b>Karantina</b> diri selama 14 hari
          </h3>

          <h3 style="margin-top: 2px; margin-bottom: 1px; color: red;/*background-color: white; color: black; border-radius: 5px 5px 5px 5px;">
            <i class="material-icons">check</i> <b>Lapor RT / RW</b> tujuan Anda Mudik
          </h3>
          <br>
          <a href="#petunjuk2">
           <button class="button1 button3" style="border-radius: 25px; padding: 10px;">
	       <font style="font-size: 2rem;"><b>Petunjuk Pengisian</b></font>
	      </button></a>

          </td>
          </table>
          


          <!-- <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
            <i class="fa fa-book"> </i> <font style="font-size: 1.5rem;"> Petunjuk Pengisian Data Pemudik </font>
          </a> -->

        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised section-download" id="downloadSection">
    <div class="container" id="petunjuk2">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-12 ml-auto mr-auto">
            <h1 class="title" id="" style="margin-top: 5px;">- Petunjuk Pengisian -</h1>
            <h3 style="margin-bottom: 0px;">Perlu diperhatikan bahwa pengisian harus menggunakan data yang sebenarnya.</h3>
          </div>
        </div>
        <div class="features">
          <div class="row">
            <div class="col-md-6">
              <br><br>
              <div class="info" style="padding: 15px 0 30px;">
                <div class="icon icon-success">
                  <img src="<?php echo Yii::app()->baseUrl; ?>/images/id.png" width="150" height="100">
                  <!-- <i class="material-icons">verified_user</i> -->
                </div>
                <br><br><br>
                <h3 class="info-title">Menyiapkan Kartu Identitas/ KTP Anda</h3>
                <h3>Data diri yang anda inputkan harus sesuai dengan kartu identitas, kami membantu memudahkan input data anda dengan melakukan integrasi dengan Dinas Kependudukan dan Pencatatan Sipil Kabupaten Banyumas.</h3>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info" style="padding: 15px 0 30px;">
                <div class="icon icon-success">
                  <!-- <i class="material-icons">verified_user</i> -->
                <img src="<?php echo Yii::app()->baseUrl; ?>/images/link.png" width="260" height="200">
                </div>
                <br>
                <h3 class="info-title">Klik Link "Isi Data Pemudik"</h3>
                <h3>Formulir Isi Data Pemudik yang tersedia harus diisi dengan data yang benar, agar Pemerintah Kabupaten Banyumas mendapatkan data yang akurat untuk kepentingan bersama.</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="features">
        <div class="row">
	        <div class="col-md-12 ml-auto mr-auto">
		        <div class="col-md-6">
              <a href="<?php echo Yii::app()->baseUrl; ?>/images/poster3.png" target="_blank">
		        	<img src="<?php echo Yii::app()->baseUrl; ?>/images/poster3.png" width="500" height="auto">
		        </a>
		        </div>

		        <br>
		        <br>
		        <br>
		        <div class="col-md-6">
		        <div class="a" style="text-align: left;">
		        <h3><span>&check;</span> Isikan Nomor Induk Kependudukan (NIK).</h3>
		        <h3><span>&check;</span> Data diri Anda yaitu Tanggal Lahir, dan Jenis Kelamin otomatis akan terisi sesuai dengan Nomor Induk Kependudukan (NIK).</h3>
		        <h3><span>&check;</span> Isikan Nomor HP yang bisa dihubungi / WA ).</h3>
		        <h3><span>&check;</span> Pilih Negara Asal Anda sebelum mudik, Isikan INDONESIA jika anda berasal dari dalam negeri.</h3>
		        <h3><span>&check;</span> Jika Anda memilih INDONESIA pada point sebelumnya, Anda harus mengisi Kota / Kabupaten asal.</h3>
		        <h3><span>&check;</span> Isikan pertanyaan-pertanyaan lainnya dengan benar.</h3>
		        <h3><span>&check;</span> Setelah terisi semua dan sudah benar, klik <strong>KIRIM DATA</strong>.</h3>
		        </div>
		    	</div>
			</div>
    	</div>
		</div>

    <br>

        <div class="row">
	    <div class="col-md-6 ml-auto mr-auto text-center">
	    <a href="<?php echo Yii::app()->baseUrl; ?>/submit">
	      <button class="button2 button4" style="border-radius: 25px; padding: 10px;">
	       <font style="font-size: 2rem;"><b>ISI DATA PEMUDIK</b></font>
	      </button>
	  	</a>
	  	<br>
		
    	<a style="text-align: left; color: red;">* Semua pertanyaan di atas wajib diisi dengan jawaban yang sebenar-benarnya. Terima Kasih</a>
	  	
	    </div>
		</div>

    </div>
  </div>

     <!--Tampil data pemudik-->
    <div class="section text-center">

          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <h1 class="title" id="" style="margin-top: 5px;">  Data Pemudik Kabupaten Banyumas </h1>
              <p style="font-size: 16px;">Data Sampai : <?php $dttime = Utama::getdatalastinput();?><?=@$new_date = date("d F Y H:i:s", strtotime($dttime));?> WIB</p>
            </div>
          </div>
          <div class="features">
            <div class="row">
              <!-- <div class="col-md-1"></div> -->
              <div class="col-md-4" >
                <div class="card">
                  <div class="card-header card-header-danger">
                    <a href=""><h2 class="card-title">Total Pemudik</h2> </a>
                  </div>
                  <div class="card-body">
                    <p style="font-size: 20px;font-weight: bold;"><?=Utama::getcntkdata('');?> Orang</p>
                  </div>
                </div>
              </div> 
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header card-header-warning">
                    <h2 class="card-title">  Laki-Laki</h2> 
                  </div>
                  <div class="card-body">
                    <p style="font-size: 20px;font-weight: bold;"><?=Utama::getcntkdata('L');?> Orang</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h2 class="card-title">  Perempuan</h2> 
                  </div>
                  <div class="card-body">
                    <p style="font-size: 20px;font-weight: bold;"><?=Utama::getcntkdata('P');?> Orang</p>
                  </div>
                </div>
              </div> 
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <p class="text-center">
                            <strong>Periode <?= date('F') ?> <?= date('Y') ?></strong>
                        </p>
                       <canvas id="grafikBatang"  width="400" height="230"></canvas>
                    </div>
                    <div class="col-md-2"></div>
                </div>
          </div>
      </div>
</div>
</scroll-container>

<br>
<br>
<br>
<br>

<!-- <footer class="main main-raised section-download" id="downloadSection">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6" style="">
					<p style="font-size: 20px;"><u><b><strong>MUDIK KABUPATEN BANYUMAS</strong></b></u></p>
					<br>
					<img src="https://seeklogo.com/images/D/Departemen_Perhubungan-logo-8FEFD82495-seeklogo.com.png" width="100" height="auto">&nbsp;
					<img src="http://mpp.banyumaskab.go.id/logo/banyumas.png" width="100" height="auto">

				</div>
			
				<div class="col-md-6" style="">
					<p style="font-size: 20px;"><u><b><strong>KONTAK KAMI</strong></b></u></p>
            		<br>
            		<table>
            		<tr>
            		<td>
		            <p style="text-align: left; margin-bottom: 30px;">Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
		            </td>
		            <td>
		            <p style="text-align: left;">JL. Margantara, No. 460, Tanjung, Kecamatan Purwokerto Utara, Kabupaten Banyumas</p></td>
		            </tr>
		            <tr>
		            <td><p>Kode Pos :</p></td>
		            <td><p>53144</p></td>
		            </tr>
		            </tr>
		            <tr>
		            <td><p>Telephon &nbsp;:</p></td>
		            <td><p>(0281) 637211</p></td>
		            </tr>
		            </table>
				</div>
				</div>
			</div>
		<br>
			<hr> -->
			<!-- <table>
			<td>
			<img src="http://mpp.banyumaskab.go.id/logo/banyumas.png" width="50" height="auto" style="margin-top: 5px; margin-bottom: 2px; ">
			<p>&copy;Copyright <a href="https://www.banyumaskab.go.id/">Pemerintah Kabupaten Banyumas</a> 2020</p>
			<p>Created by <a href="http://dinkominfo.banyumaskab.go.id/">Dinas Kominfo</a> Kabupaten Banyumas</p>
			</td>

			</table>
		</div>


</footer> -->   
<script>
function myFunction() {
  document.documentElement.style.scrollBehavior = "smooth";
}
</script>
<script> 
var ctx = document.getElementById("grafikBatang").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [
        <?php 
			$query_date = date('Y-m-d');
			$date= "".date('Y-m-01', strtotime($query_date))."";  
			$end_date ="".date('Y-m-d')."";
			while (strtotime($date) <= strtotime($end_date)) {
                echo "'{$date}',";
                $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
			} ?>],
        datasets: [{
            label: '# of Votes',
            data: [<?php
					$query_date = date('Y-m-d');
					$date= "".date('Y-m-01', strtotime($query_date))."";  
					$end_date ="".date('Y-m-d')."";
					while (strtotime($date) <= strtotime($end_date)) {
					$jml = Utama::getlabel($date); 
					echo "'{$jml}',";
                	$date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
					} ?>
			],
            backgroundColor: [
            	<?php  
            		$query_date = date('Y-m-d');
					$date= "".date('Y-m-01', strtotime($query_date))."";  
					$end_date ="".date('Y-m-d')."";
					while (strtotime($date) <= strtotime($end_date)) {?>
				  	 'rgba(255, 99, 132, 0.2)', 
					
               <?php  	
               		$date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
				}?> 
            ],
            borderColor: [ 
            	<?php  
            		$query_date = date('Y-m-d');
					$date= "".date('Y-m-01', strtotime($query_date))."";  
					$end_date ="".date('Y-m-d')."";
					while (strtotime($date) <= strtotime($end_date)) {?>
				  	 'rgba(255, 99, 132, 0.2)', 
					
               <?php  	
               		$date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
				}?>  
            ],  
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true, 
                                steps: 5,
                                stepValue: 5,
                                max: 100
                }
            }]
        }
    }
});
</script>