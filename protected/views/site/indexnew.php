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
  <div class="page-header" data-parallax="true" style="background-image: url('<?php echo Yii::app()->baseUrl; ?>/images/bg5.png'); margin-top: 60px;">
    <div class="container">
      <div class="row">
        
        <div class="col-md-12">
          <table>
          <td>

            <br><br>

            <!-- <img class="mobileHide" src="<?php echo Yii::app()->baseUrl; ?>/images/bg.png" width="400" height="auto">&nbsp;&nbsp;&nbsp; -->

          </td>

          <td style="color: white;">

          <h1 class="title" style="color: red;/*background-color: white; color: black; border-radius: 5px 5px 5px 5px;">&nbsp;Putus Penyebaran Corona,&nbsp; <br> &nbsp;JANGAN MUDIK DULU!&nbsp;</h1>

          <h2 style= "color: black;/*background-color: white; color: black; border-radius: 5px 5px 5px 5px;"> Tetap <strong>NEKAD</strong> mau mudik? </h2>

          <h3 style="margin-top: 2px; margin-bottom: 1px; color: black; /*background-color: white; color: black; border-radius: 5px 5px 5px 5px;">
            <i class="material-icons">check</i> Isi data dengan klik tombol <b>"Isi Data Pemudik"</b>
          </h3>

          <h3 style="margin-top: 2px; margin-bottom: 1px; color: black;/*background-color: white; color: black; border-radius: 5px 5px 5px 5px;">
            <i class="material-icons">check</i> <b>Karantina</b> diri selama 14 hari
          </h3>

          <h3 style="margin-top: 2px; margin-bottom: 1px; color: black;/*background-color: white; color: black; border-radius: 5px 5px 5px 5px;">
            <i class="material-icons">check</i> <b>Lapor RT / RW</b> tujuan Anda Mudik
          </h3>
          <br>
          <a href="#petunjuk2">
           <button class="button1 button3" style="border-radius: 25px; padding: 10px; background-color: red;">
         <font style="font-size: 2rem; color: white;"><b>Petunjuk Pengisian</b></font>
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

      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
      <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script> 
      <script src="https://api.mapbox.com/mapbox-gl-js/v1.9.0/mapbox-gl.js"></script>
      <link href="https://api.mapbox.com/mapbox-gl-js/v1.9.0/mapbox-gl.css" rel="stylesheet" />
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
                <div class="col-md-6" >
                <div class="col-md-12" >
                  
                  <div class="card" >
                    <div class="card-header card-header-danger">
                       <h2 class="card-title">Total Pemudik <?=Utama::getcntkdata('');?> Orang </h2> 
                    </div>
                    <div class="card-body" id="datadetail">
                      <!-- <div id="datadetail"></div>  -->
                    </div>
                  </div>
                  <!-- <br> 
                  <div class="card">
                    <div class="card-header card-header-warning">
                      <h2 class="card-title">  Laki-Laki</h2> 
                    </div>
                    <div class="card-body">
                      <p style="font-size: 20px;font-weight: bold;"><?=Utama::getcntkdata('L');?> Orang</p>
                    </div>
                  </div>
                  <br> 
                  <div class="card">
                    <div class="card-header card-header-primary">
                      <h2 class="card-title">  Perempuan</h2> 
                    </div>
                    <div class="card-body">
                      <p style="font-size: 20px;font-weight: bold;"><?=Utama::getcntkdata('P');?> Orang</p>
                    </div>
                  </div> -->
                </div>   
              </div>
                <div class="col-md-6">  
                      <div class="col-md-12" >
                          <div class="card">
                            <div class="card-header card-header-default">
                              <h2 class="card-title" style="color: black">  Peta Sebaran Pemudik</h2> 
                            </div>
                            <div class="card-body">
                                <div id="map" width="100%" height="100%" style="margin-top: 2px;height: calc(100vh - 20px);"></div> 
                            </div>
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script>
    function loadData() {
        $('#datadetail').html('memuat data...');
        $.ajax({
            type: "get",
            url: '<?php echo Yii::app()->baseUrl; ?>/site/detailmudik',
            success: function(z) {
                $('#datadetail').html(z);
            }
        })
    } 
    loadData(); 
</script>
<style>
    /*#map { position: absolute; top: 0; bottom: 0; width: 100%; }*/

    .mapboxgl-popup {
        max-width: 350px;
        font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
    }
</style>
<script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoia29taW5mb2JtcyIsImEiOiJjazg3OWN6ZWcwcTZkM2ZtY3N1dGppbDV1In0.cwJUCzzRVYrF94nQVTHKMQ';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [109.190677, -7.447272],
        zoom: 9.5
    });

    map.on('load', function() { 

        <?php foreach ($koor as $key => $value) : 
              $tt =  $value['total']; $desa =  $value['desa'];
                $color  = "f44336";
                $color2  = "dc0f00";

            $add = "";
            // $add = '<tr><td width="120px">PRA ODP</td><td width="30px">'.$tt.'</td></tr>');
        ?>
            map.addLayer({
                'id': '<?= str_replace(' ', '', $value['kecamatan']); ?>',
                'type': 'fill',
                'source': '<?= str_replace(' ', '', $value['kecamatan']); ?>_layer',
                'layout': {},
                "source": {
                    "type": "geojson",
                    "data": {
                        "type": "FeatureCollection",
                        "features": [{
                            'type': 'Feature',
                            'geometry': {
                                'type': 'Polygon',
                                'coordinates': [
                                    [<?= $value['polygon']; ?>]
                                ]
                            }
                        }]
                    }
                },
                'paint': {
                    'fill-color': '#<?= $color; ?>',
                    'fill-outline-color': '#000000',
                    'fill-opacity': 0.4
                },
                'filter': ['==', '$type', 'Polygon']
            });
            map.addLayer({
                'id': '<?= str_replace(' ', '', $value['kecamatan']); ?>_point',
                'type': 'circle',
                'paint': {
                    'circle-radius': 8,
                    'circle-color': '#<?= $color2; ?>',
                },
                'filter': ['==', '$type', 'Point'],
                "source": {
                    "type": "geojson",
                    "data": {
                        "type": "FeatureCollection",
                        "features": [{
                            "type": "Feature",
                            'properties': {
                                'description': '<h3>Kec. <?= $value['kecamatan']; ?></h3>\
                                 <table class="table" width="50%">\
                                 <tr><td style="font-size:12px">Desa</td><td style="font-size:12px"><?= $desa?></td></tr>\
                                 </table>',
                                'icon': 'theatre'
                            },
                            "geometry": {
                                "type": "Point",
                                'coordinates': [<?= $value['lang']; ?>, <?= $value['lat']; ?>]
                            }
                        }]
                    }
                }
            });

            map.on('click', '<?= str_replace(' ', '', $value['kecamatan']); ?>_point', function(e) {
                var coordinates = e.features[0].geometry.coordinates.slice();
                var description = e.features[0].properties.description;
                while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                    coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
                }
                new mapboxgl.Popup()
                    .setLngLat(coordinates)
                    .setHTML(description)
                    .addTo(map);
            });
            map.on('mouseenter', '<?= str_replace(' ', '', $value['kecamatan']); ?>_point', function() {
                map.getCanvas().style.cursor = 'pointer';
            });
            map.on('mouseleave', 'ponit2', function() {
                map.getCanvas().style.cursor = '';
            });

            var popup = new mapboxgl.Popup({
                closeButton: false,
                closeOnClick: false
            });
        <?php endforeach; ?>
    });
</script>
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
            label: 'Total Pemudik',
            fillColor: "rgba(255, 99, 132, 0.2)",
        backgroundColor: "rgba(255, 99, 132, 0.2)",
        highlightFill: "rgba255, 99, 132, 0.2)",
        borderColor: "rgba(255, 99, 132, 0.2)",
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
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true, 
                                steps: 1,
                                stepValue: 1,
                                max: 10
                }
            }]
        }
    }
});
</script>