<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Single ES</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="assets/lte/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/lte/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/lte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/lte/dist/css/skins/_all-skins.min.css">
  <style media="screen">
    .box-simple {
      border: 2px solid #ddeef7;
      padding: 5px;
      background: #f4f8fb;
    }
  </style>
</head>
<body class="hold-transition fixed skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'php-file/cek-session.php'?>
  <?php include "include/main-header.php"?>
  <?php include "include/sidebar.php"?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!--Main content -->
    <section class="content">
      <div class="box box-default hidden" id="contentPage">
        <div class="box-header with-border" style="padding: 5px;">
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-primary btn-sm btnTabMenu" page="summary">
              Hasil Peramalan </button>
            <button type="button" class="btn btn-default btn-sm btnTabMenu" page="detail">
              Detail Perhitungan
            </button>
            <button type="button" class="btn btn-default btn-sm btnTabMenu" page="grafik">
              Grafik Peramalan
            </button>
        </div>
        </div>
        <div class="box-body">
          <div id="tabMenuSummary">
            <div class="row">
              <div class="col-md-7">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped" id="tableSummarySES">
                    <thead>
                      <tr class="info">
                        <th class="text-center">Alpha</th>
                        <th class="text-center">MAPE</th>
                        <th class="text-center">Peramalan 1 Bulan Berikutnya</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
              <div class="col-md-5">
                <div class="box-simple">
                  <b>Kesimpulan</b> <br>
                  MAPE terkecil bernilai <span id="mapeTerkecil" style="margin-left: 20px;"></span> <br>
                  Dengan hasil peramalan <span id="nPeramalan" style="margin-left: 6px;"></span> <br>
                  Pada alpha <span id="padaAlpha" style="margin-left: 87px;"></span>
                </div>
              </div>
            </div>
          </div>
          <div id="tabMenuDetail" class="hidden">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tabDetail1" data-toggle="tab">Alfa 0.1</a></li>
                <li><a href="#tabDetail2" data-toggle="tab">Alfa 0.2</a></li>
                <li><a href="#tabDetail3" data-toggle="tab">Alfa 0.3</a></li>
                <li><a href="#tabDetail4" data-toggle="tab">Alfa 0.4</a></li>
                <li><a href="#tabDetail5" data-toggle="tab">Alfa 0.5</a></li>
                <li><a href="#tabDetail6" data-toggle="tab">Alfa 0.6</a></li>
                <li><a href="#tabDetail7" data-toggle="tab">Alfa 0.7</a></li>
                <li><a href="#tabDetail8" data-toggle="tab">Alfa 0.8</a></li>
                <li><a href="#tabDetail9" data-toggle="tab">Alfa 0.9</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tabDetail1">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="table-responsive">
                        <table class="table table-bordered table-hover tableDT">
                          <thead>
                            <tr class="info">
                              <th class="text-center">Tanggal Produksi</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">S'</th>
                              <th class="text-center">PE</th>
                              <th class="text-center">APE</th>
                            </tr>
                          </thead>
                        </table>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="box-simple">
                        <b>Kesimpulan</b> <br>
                        Alpha <span class="alpha" style="margin-left: 84px;"></span> <br>
                        MAPE <span class="mape" style="margin-left: 80px;"></span> <br>
                        Hasil peramalan <span class="nPeramalan" style="margin-left: 18px;"></span>
                      </div>
                   </div>
                  </div>
                </div>
                <div class="tab-pane" id="tabDetail2">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="table-responsive">
                        <table class="table table-bordered table-hover tableDT">
                          <thead>
                            <tr class="info">
                              <th class="text-center">Tanggal Produksi</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">S'</th>
                              <th class="text-center">PE</th>
                              <th class="text-center">APE</th>
                            </tr>
                          </thead>
                        </table>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="box-simple">
                        <b>Kesimpulan</b> <br>
                        Alpha <span class="alpha" style="margin-left: 84px;"></span> <br>
                        MAPE <span class="mape" style="margin-left: 80px;"></span> <br>
                        Hasil peramalan <span class="nPeramalan" style="margin-left: 18px;"></span>
                      </div>
                   </div>
                  </div>
                </div>
                <div class="tab-pane" id="tabDetail3">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="table-responsive">
                        <table class="table table-bordered table-hover tableDT">
                          <thead>
                            <tr class="info">
                              <th class="text-center">Tanggal Produksi</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">S'</th>
                              <th class="text-center">PE</th>
                              <th class="text-center">APE</th>
                            </tr>
                          </thead>
                        </table>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="box-simple">
                        <b>Kesimpulan</b> <br>
                        Alpha <span class="alpha" style="margin-left: 84px;"></span> <br>
                        MAPE <span class="mape" style="margin-left: 80px;"></span> <br>
                        Hasil peramalan <span class="nPeramalan" style="margin-left: 18px;"></span>
                      </div>
                   </div>
                  </div>
                </div>
                <div class="tab-pane" id="tabDetail4">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="table-responsive">
                        <table class="table table-bordered table-hover tableDT">
                          <thead>
                            <tr class="info">
                              <th class="text-center">Tanggal Produksi</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">S'</th>
                              <th class="text-center">PE</th>
                              <th class="text-center">APE</th>
                            </tr>
                          </thead>
                        </table>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="box-simple">
                        <b>Kesimpulan</b> <br>
                        Alpha <span class="alpha" style="margin-left: 84px;"></span> <br>
                        MAPE <span class="mape" style="margin-left: 80px;"></span> <br>
                        Hasil peramalan <span class="nPeramalan" style="margin-left: 18px;"></span>
                      </div>
                   </div>
                  </div>
                </div>
                <div class="tab-pane" id="tabDetail5">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="table-responsive">
                        <table class="table table-bordered table-hover tableDT">
                          <thead>
                            <tr class="info">
                              <th class="text-center">Tanggal Produksi</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">S'</th>
                              <th class="text-center">PE</th>
                              <th class="text-center">APE</th>
                            </tr>
                          </thead>
                        </table>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="box-simple">
                        <b>Kesimpulan</b> <br>
                        Alpha <span class="alpha" style="margin-left: 84px;"></span> <br>
                        MAPE <span class="mape" style="margin-left: 80px;"></span> <br>
                        Hasil peramalan <span class="nPeramalan" style="margin-left: 18px;"></span>
                      </div>
                   </div>
                  </div>
                </div>
                <div class="tab-pane" id="tabDetail6">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="table-responsive">
                        <table class="table table-bordered table-hover tableDT">
                          <thead>
                            <tr class="info">
                              <th class="text-center">Tanggal Produksi</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">S'</th>
                              <th class="text-center">PE</th>
                              <th class="text-center">APE</th>
                            </tr>
                          </thead>
                        </table>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="box-simple">
                        <b>Kesimpulan</b> <br>
                        Alpha <span class="alpha" style="margin-left: 84px;"></span> <br>
                        MAPE <span class="mape" style="margin-left: 80px;"></span> <br>
                        Hasil peramalan <span class="nPeramalan" style="margin-left: 18px;"></span>
                      </div>
                   </div>
                  </div>
                </div>
                <div class="tab-pane" id="tabDetail7">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="table-responsive">
                        <table class="table table-bordered table-hover tableDT">
                          <thead>
                            <tr class="info">
                              <th class="text-center">Tanggal Produksi</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">S'</th>
                              <th class="text-center">PE</th>
                              <th class="text-center">APE</th>
                            </tr>
                          </thead>
                        </table>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="box-simple">
                        <b>Kesimpulan</b> <br>
                        Alpha <span class="alpha" style="margin-left: 84px;"></span> <br>
                        MAPE <span class="mape" style="margin-left: 80px;"></span> <br>
                        Hasil peramalan <span class="nPeramalan" style="margin-left: 18px;"></span>
                      </div>
                   </div>
                  </div>
                </div>
                <div class="tab-pane" id="tabDetail8">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="table-responsive">
                        <table class="table table-bordered table-hover tableDT">
                          <thead>
                            <tr class="info">
                              <th class="text-center">Tanggal Produksi</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">S'</th>
                              <th class="text-center">PE</th>
                              <th class="text-center">APE</th>
                            </tr>
                          </thead>
                        </table>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="box-simple">
                        <b>Kesimpulan</b> <br>
                        Alpha <span class="alpha" style="margin-left: 84px;"></span> <br>
                        MAPE <span class="mape" style="margin-left: 80px;"></span> <br>
                        Hasil peramalan <span class="nPeramalan" style="margin-left: 18px;"></span>
                      </div>
                   </div>
                  </div>
                </div>
                <div class="tab-pane" id="tabDetail9">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="table-responsive">
                        <table class="table table-bordered table-hover tableDT">
                          <thead>
                            <tr class="info">
                              <th class="text-center">Tanggal Produksi</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">S'</th>
                              <th class="text-center">PE</th>
                              <th class="text-center">APE</th>
                            </tr>
                          </thead>
                        </table>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="box-simple">
                        <b>Kesimpulan</b> <br>
                        Alpha <span class="alpha" style="margin-left: 84px;"></span> <br>
                        MAPE <span class="mape" style="margin-left: 80px;"></span> <br>
                        Hasil peramalan <span class="nPeramalan" style="margin-left: 18px;"></span>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="tabMenuGrafik" class="hidden">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tabGrafik1" data-toggle="tab">Alfa 0.1</a></li>
                <li><a href="#tabGrafik2" data-toggle="tab">Alfa 0.2</a></li>
                <li><a href="#tabGrafik3" data-toggle="tab">Alfa 0.3</a></li>
                <li><a href="#tabGrafik4" data-toggle="tab">Alfa 0.4</a></li>
                <li><a href="#tabGrafik5" data-toggle="tab">Alfa 0.5</a></li>
                <li><a href="#tabGrafik6" data-toggle="tab">Alfa 0.6</a></li>
                <li><a href="#tabGrafik7" data-toggle="tab">Alfa 0.7</a></li>
                <li><a href="#tabGrafik8" data-toggle="tab">Alfa 0.8</a></li>
                <li><a href="#tabGrafik9" data-toggle="tab">Alfa 0.9</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tabGrafik1">
                  <canvas id="canvasGrafik1" width="600" height="250"></canvas>
                </div>
                <div class="tab-pane" id="tabGrafik2">
                  <canvas id="canvasGrafik2" width="600" height="250"></canvas>
                </div>
                <div class="tab-pane" id="tabGrafik3">
                  <canvas id="canvasGrafik3" width="600" height="250"></canvas>
                </div>
                <div class="tab-pane" id="tabGrafik4">
                  <canvas id="canvasGrafik4" width="600" height="250"></canvas>
                </div>
                <div class="tab-pane" id="tabGrafik5">
                  <canvas id="canvasGrafik5" width="600" height="250"></canvas>
                </div>
                <div class="tab-pane" id="tabGrafik6">
                  <canvas id="canvasGrafik6" width="600" height="250"></canvas>
                </div>
                <div class="tab-pane" id="tabGrafik7">
                  <canvas id="canvasGrafik7" width="600" height="250"></canvas>
                </div>
                <div class="tab-pane" id="tabGrafik8">
                  <canvas id="canvasGrafik8" width="600" height="250"></canvas>
                </div>
                <div class="tab-pane" id="tabGrafik9">
                  <canvas id="canvasGrafik9" width="600" height="250"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <div id="loadingPage" class="text-center" style="margin-top: 200px; margin-bottom: 200px;">
        <i class="fa fa-spinner fa-spin fa-3x"></i>
        <h4 style="margin-top: 5px;">Loading Peramalan...</h4>
      </div>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
  <?php include 'include/footer.php';?>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="assets/lte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="assets/lte/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="assets/lte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/lte/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="assets/lte/plugins/chartjs/chart.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/lte/dist/js/app.min.js"></script>
<script src="include/modify.js"></script>
<script src="js-file/grafik.js"></script>
<!-- page script -->
<script type="text/javascript">
  const page = {
    contentPage: $('#contentPage'),
    loadingPage: $("#loadingPage")
  }

  const tabMenu = {
    summary: page.contentPage.find('#tabMenuSummary'),
    detail: page.contentPage.find('#tabMenuDetail'),
    grafik: page.contentPage.find('#tabMenuGrafik')
  }


  $('.btnTabMenu').click(function () {
    let self = $(this)
    if (self.hasClass('btn-primary')) { return }
    self.parent().find('.btn-primary')
      .toggleClass('btn-primary btn-default')
    self.toggleClass('btn-default btn-primary')

    let page = self.attr('page')
    if (page === 'summary') {
      tabMenu.summary.removeClass('hidden')
      tabMenu.detail.addClass('hidden')
      tabMenu.grafik.addClass('hidden')
    } else if (page === 'detail') {
      tabMenu.summary.addClass('hidden')
      tabMenu.detail.removeClass('hidden')
      tabMenu.grafik.addClass('hidden')
    } else {
      tabMenu.summary.addClass('hidden')
      tabMenu.detail.addClass('hidden')
      tabMenu.grafik.removeClass('hidden')
    }
  });

</script>
<script type="text/javascript">
  const tab = {
    tabDetail1: $('#tabDetail1'),
    tabDetail2: $('#tabDetail2'),
    tabDetail3: $('#tabDetail3'),
    tabDetail4: $('#tabDetail4'),
    tabDetail5: $('#tabDetail5'),
    tabDetail6: $('#tabDetail6'),
    tabDetail7: $('#tabDetail7'),
    tabDetail8: $('#tabDetail8'),
    tabDetail9: $('#tabDetail9')
  }
  $(document).ready(function () {
    loadSingleES()
  });

  function loadSingleES() {
    $.ajax({
      type: 'GET',
      url: 'single-es/hitung-ses.php',
      dataType: 'JSON',
      success: function (response) {
        console.log(response);
        generateTableSummarySES(response.data)
        setKesimpulan(response.kesimpulan)
        generateTableDetailPerhitungan(response.data)
        page.contentPage.removeClass('hidden')
        page.loadingPage.addClass('hidden')
        setGrafikPeramalan(response)
      },
      error: function (response) {
        console.log(response);
      }
    })
  }

  function generateTableSummarySES(data) {
    let trAppend = ''
    $.each(data, (i, key) => {
      trAppend += '<tr>'+
                    '<td class="text-center">'+key.alpha+'</td>'+
                    '<td class="text-center">'+key.mape+'</td>'+
                    '<td class="text-center">'+key.n_peramalan+'</td>'+
                 '</tr>'
    })
    let table = $('#tableSummarySES')
    table.append(trAppend)
  }

  function setKesimpulan(data) {
    $('#mapeTerkecil').text(': '+ data.mape)
    $('#nPeramalan').text(': '+ data.n_peramalan)
    $('#padaAlpha').text(': '+ data.alpha)
  }

  function generateTableDetailPerhitungan(data) {
    generateTableDetail(tab.tabDetail1, data[0])
    generateTableDetail(tab.tabDetail2, data[1])
    generateTableDetail(tab.tabDetail3, data[2])
    generateTableDetail(tab.tabDetail4, data[3])
    generateTableDetail(tab.tabDetail5, data[4])
    generateTableDetail(tab.tabDetail6, data[5])
    generateTableDetail(tab.tabDetail7, data[6])
    generateTableDetail(tab.tabDetail8, data[7])
    generateTableDetail(tab.tabDetail9, data[8])
  }

  function generateTableDetail(tab, data) {
    let trAppend = ''
    $.each(data.data_peramalan, (i, key) => {
      trAppend += '<tr>'+
                    '<td class="text-center">'+
                      formatedDate(key.dari_tanggal)+' - '+ formatedDate(key.sampai_tanggal)+
                    '</td>'+
                    '<td class="text-center">'+key.jml_produksi+'</td>'+
                    '<td class="text-center">'+key.s_aksen+'</td>'+
                    '<td class="text-center">'+key.pe+'</td>'+
                    '<td class="text-center">'+key.ape+'</td>'+
                  '</tr>'
    })

    tab.find('.tableDT').append(trAppend).dataTable({
      ordering: false
    })
    tab.find('.alpha').text(': ' + data.alpha)
    tab.find('.mape').text(': ' + data.mape)
    tab.find('.nPeramalan').text(': ' + data.n_peramalan)
  }


</script>
<script type="text/javascript">
  function setGrafikPeramalan(response) {

      let dataProduksi = generateDataProduksi(response.data_produksi)
      let labelsProduksi =  dataProduksi.labels
      dataProduksi = dataProduksi.data

      new grafikPeramalan("canvasGrafik1", dataProduksi.slice(20),
        generateHasilPeramalan(response.data[0]).slice(20),
        labelsProduksi.slice(20)
      )
      new grafikPeramalan("canvasGrafik2", dataProduksi.slice(20),
        generateHasilPeramalan(response.data[1]).slice(20),
        labelsProduksi.slice(20)
      )
      new grafikPeramalan("canvasGrafik3", dataProduksi.slice(20),
        generateHasilPeramalan(response.data[2]).slice(20),
        labelsProduksi.slice(20)
      )
      new grafikPeramalan("canvasGrafik4", dataProduksi.slice(20),
        generateHasilPeramalan(response.data[3]).slice(20),
        labelsProduksi.slice(20)
      )
      new grafikPeramalan("canvasGrafik5", dataProduksi.slice(20),
        generateHasilPeramalan(response.data[4]).slice(20),
        labelsProduksi.slice(20)
      )
      new grafikPeramalan("canvasGrafik6", dataProduksi.slice(20),
        generateHasilPeramalan(response.data[5]).slice(20),
        labelsProduksi.slice(20)
      )
      new grafikPeramalan("canvasGrafik7", dataProduksi.slice(20),
        generateHasilPeramalan(response.data[6]).slice(20),
        labelsProduksi.slice(20)
      )
      new grafikPeramalan("canvasGrafik8", dataProduksi.slice(20),
        generateHasilPeramalan(response.data[7]).slice(20),
        labelsProduksi.slice(20)
      )
      new grafikPeramalan("canvasGrafik9", dataProduksi.slice(20),
        generateHasilPeramalan(response.data[8]).slice(20),
        labelsProduksi.slice(20)
      )
  }

  function generateDataProduksi(produksi) {
    let data = []
    let labels = []
    $.each(produksi, function (i, key) {
      data.push(key.jml_produksi)
      labels.push(formatedDate(key.dari_tanggal))
    })
    labels.push("Peramalan Berikutnya")
    return {
      "data": data,
      "labels": labels
    }
  }

  function generateHasilPeramalan(peramalan) {
    let res = []
    $.each(peramalan.data_peramalan, function (i, key) {
      res.push(key.s_aksen)
    })
    res.push(peramalan.n_peramalan)
    return res
  }


</script>
<script type="text/javascript">
  function formatedDate(date) {
    resDate = new Date(date).toDateString().split(' ')
    resDate = resDate[2] + ' ' + resDate[1] + ' ' + resDate[3]
    return resDate
  }
</script>
</body>
</html>
