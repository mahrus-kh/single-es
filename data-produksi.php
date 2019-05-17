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
  <link rel="stylesheet" href="assets/lte/plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="assets/pnotify/pnotify.custom.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/lte/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/lte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/lte/dist/css/skins/_all-skins.min.css">
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
      <div class="row">
        <div class="col-xs-12 col-md-8">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title" style="font-size: 14px !important;">
                Data Produksi
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="tableProduksi" class="table table-bordered table-hover" style="width: 100%;">
                  <thead>
                  <tr>
                    <th class="text-center">Tanggal Produksi</th>
                    <th class="text-center">Jumlah</th>
                    <th class="text-center">Tools</th>
                  </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <div class="col-xs-12 col-md-4">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title" style="font-size: 14px !important;">
                Tambah Data Produksi
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form class="form-horizontal" id="formAddProduksi">
                <div class="form-group">
                  <span for="" class="col-sm-4 control-label">Dari tanggal</span>
                  <div class="col-sm-7">
                      <input type="text" id="dari_tanggal" class="form-control tanggal-datepicker" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <span for="" class="col-sm-4 control-label">Sampai tanggal</span>
                  <div class="col-sm-7">
                      <input type="text" id="sampai_tanggal" class="form-control tanggal-datepicker" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <span for="" class="col-sm-4 control-label">Jumlah</span>
                  <div class="col-sm-7">
                      <input type="number" id="jml_produksi" class="form-control" min="0" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-4 control-label"></label>
                  <div class="col-sm-7">
                    <button type="button" id="btnSimpanProduksi" class="btn btn-success btn-sm">Simpan</button>
                    <button type="button" id="btnResetProduksi" class="btn btn-default btn-sm pull-right">Reset</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
                  </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    <div class="modal fade" id="modalProduksi">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">
              Edit Data Produksi
            </h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" id="formEditProduksi">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Dari tanggal</label>
                <div class="col-sm-7">
                    <input type="text" id="dari_tanggal_edit" class="form-control tanggal-datepicker" readonly>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Sampai tanggal</label>
                <div class="col-sm-7">
                    <input type="text" id="sampai_tanggal_edit" class="form-control tanggal-datepicker" readonly>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Jumlah</label>
                <div class="col-sm-7">
                    <input type="number" id="jml_produksi_edit" class="form-control" min="0" required="required">
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-success btn-sm" id="btnUpdateProduksi">Update</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalRemoveProduksi">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h5 class="modal-title">
              Hapus Data Produksi
            </h5>
          </div>
          <div class="modal-body">
            Yakin hapus permanen data produksi ?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-danger btn-sm" id="btnRemoveProduksi">Hapus</button>
          </div>
        </div>
      </div>
    </div>
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
<!-- AdminLTE App -->
<script src="assets/lte/dist/js/app.min.js"></script>
<script src="assets/lte/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="assets/pnotify/pnotify.custom.min.js"></script>
<script src="include/modify.js"></script>
<!-- page script -->
<script type="text/javascript">
  var dataProduksi = {
    selectedProduksi: null,
    table: $("#tableProduksi"),
    modal: $('#modalProduksi'),
    modalRemove: $('#modalRemoveProduksi')
  }
  var form = {
    addProduksi: $('#formAddProduksi'),
    editProduksi: $('#formEditProduksi')
  }
  $(document).ready(function () {
    $('.tanggal-datepicker').datepicker({
      format: 'dd MM yyyy',
      autoclose: true
    })

    dataProduksi.tableDT = dataProduksi.table.DataTable({
      "processing": true,
      "serverSide": true,
      "ajax": "php-file/list-data-produksi.php",
      "columns": [
        {
          data: "dari_tanggal", class: "text-center",
          render: function (id, display, obj) {
            return formatedDate(obj.dari_tanggal) + ' - ' + formatedDate(obj.sampai_tanggal)
          }
        },
        {data: "jml_produksi", class: "text-center"},
        {
          data: "id", class: "text-center",
          render: function (id) {
            return '<button type="button" class="btn btn-success btn-xs btn-edit-produksi"><i class="fa fa-edit"></i></button>' +
            ' <button type="button" class="btn btn-danger btn-xs btn-hapus-produksi" value="'+id+'"><i class="fa fa-trash"></i></button>'
          }
        },
      ],
      "columnDefs": [
        {"targets": [2], "orderable": false}
      ]
    });
  });

  dataProduksi.table.on( 'click', '.btn-hapus-produksi', function (e) {
    e.stopPropagation()
    let data = dataProduksi.tableDT.row($(this).parents('tr')).data()
    dataProduksi.selectedProduksi = data.id
    dataProduksi.modalRemove.modal('toggle')
  });

  $('#btnRemoveProduksi').click(function () {
    let self = $(this)
    let currentStr = self.html()
    self.html('<i class="fa fa-spinner fa-spin"></i>')
      .attr('disabled', true)

    $.ajax({
      type: 'POST',
      url: "php-file/hapus-data-produksi.php",
      data: {'id':dataProduksi.selectedProduksi},
      success: function () {
        dataProduksi.tableDT.ajax.reload()
        dataProduksi.modalRemove.modal('toggle')
        self.html(currentStr).removeAttr('disabled')
        simpleNotify('success', 'Berhasil Hapus', 'Berhasil hapus data produksi.')
      },
      error: function (response) {
        self.html(currentStr).removeAttr('disabled')
        simpleNotify('warning', 'Gagal Hapus', 'Gagal hapus data produksi.')
      }
    });
  });

  dataProduksi.table.on( 'click', '.btn-edit-produksi', function (e) {
    e.stopPropagation()
    let data = dataProduksi.tableDT.row($(this).parents('tr')).data()
    dataProduksi.selectedProduksi = data.id

    let formEdit = form.editProduksi
    formEdit.find('#dari_tanggal_edit').datepicker('update', new Date(data.dari_tanggal))
    formEdit.find('#sampai_tanggal_edit').datepicker('update', new Date(data.sampai_tanggal))
    formEdit.find('#jml_produksi_edit').val(data.jml_produksi)
    dataProduksi.modal.modal('toggle')
  });

  $('#btnSimpanProduksi').click(function () {
    let self = $(this)

    let data = {
      dariTanggal: form.addProduksi.find('#dari_tanggal').val(),
      sampaiTanggal: form.addProduksi.find('#sampai_tanggal').val(),
      jml_produksi: form.addProduksi.find('#jml_produksi').val()
    }

    if (data.dariTanggal == "") {
      simpleNotify('warning', 'Tanggal Kosong', 'Tanggal produksi tidak boleh kosong!')
      return
    }
    if (data.sampaiTanggal == "") {
      simpleNotify('warning', 'Tanggal Kosong', 'Tanggal produksi tidak boleh kosong!')
      return
    }
    if (data.jml_produksi == "") {
      simpleNotify('warning', 'Jumlah Kosong', 'Jumlah produksi tidak boleh kosong!')
      return
    }

    let currentStr = self.html()
    self.html('<i class="fa fa-spinner fa-spin"></i>').attr('disabled', true)
    $.ajax({
      type: 'POST',
      url: 'php-file/simpan-data-produksi.php',
      data: {
        dari_tanggal: toDateServer(data.dariTanggal),
        sampai_tanggal: toDateServer(data.sampaiTanggal),
        jml_produksi: data.jml_produksi
      },
      success: function (response) {
        if (response) {
          form.addProduksi.find('input').val('')
          dataProduksi.tableDT.ajax.reload()
          self.html(currentStr).removeAttr('disabled')
          simpleNotify('success', 'Berhasil Simpan', 'Berhasil simpan data produksi.')
        }
      },
      error: function () {
        self.html(currentStr).removeAttr('disabled')
        simpleNotify('warning', 'Gagal Simpan', 'Gagal simpan data produksi.')
      }
    })
  })

  $('#btnResetProduksi').click(function () {
    form.addProduksi.find('input').val('')
  });

  $('#btnUpdateProduksi').click(function () {
    let self = $(this)

    let data = {
      dariTanggal: form.editProduksi.find('#dari_tanggal_edit').val(),
      sampaiTanggal: form.editProduksi.find('#sampai_tanggal_edit').val(),
      jml_produksi: form.editProduksi.find('#jml_produksi_edit').val()
    }

    if (data.dariTanggal == "") {
      simpleNotify('warning', 'Tanggal Kosong', 'Tanggal produksi tidak boleh kosong!')
      return
    }
    if (data.sampaiTanggal == "") {
      simpleNotify('warning', 'Tanggal Kosong', 'Tanggal produksi tidak boleh kosong!')
      return
    }
    if (data.jml_produksi == "") {
      simpleNotify('warning', 'Jumlah Kosong', 'Jumlah produksi tidak boleh kosong!')
      return
    }

    let currentStr = self.html()
    self.html('<i class="fa fa-spinner fa-spin"></i>').attr('disabled', true)
    $.ajax({
      type: 'POST',
      url: 'php-file/edit-data-produksi.php',
      data: {
        id: dataProduksi.selectedProduksi,
        dari_tanggal: toDateServer(data.dariTanggal),
        sampai_tanggal: toDateServer(data.sampaiTanggal),
        jml_produksi: data.jml_produksi
      },
      success: function () {
        form.editProduksi.find('input').val('')
        dataProduksi.tableDT.ajax.reload()
        self.html(currentStr).removeAttr('disabled')
        dataProduksi.modal.modal('toggle')
        simpleNotify('success', 'Berhasil Update', 'Berhasil update data produksi.')
      },
      error: function () {
        self.html(currentStr).removeAttr('disabled')
        simpleNotify('warning', 'Gagal Update', 'Gagal update data produksi.')
      }
    })
  })

  function formatedDate(date) {
    resDate = new Date(date).toDateString().split(' ')
    resDate = resDate[2] + ' ' + resDate[1] + ' ' + resDate[3]
    return resDate
  }

  function toDateServer(date) {
    resDate = new Date(date)
    resDate=  resDate.getFullYear() + '-' + (resDate.getMonth()+1) + '-' + resDate.getDate()
    return resDate
  }

  function simpleNotify(type, title, text) {
    return new PNotify({
      type: type,
      title: title,
      text: text,
      delay: 1500,
      styling: 'bootstrap3',
    })
  }

  const monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
  ];
</script>
</body>
</html>
