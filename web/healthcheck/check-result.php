<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "../partial/head-healthcheck.php" ?>
  <style>
    .crop-text-1 {
      -webkit-line-clamp: inherit;
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-box-orient: vertical;
    }
  </style>
</head>

<body class="mn-ht-100v d-flex flex-column">
  <?php include "../partial/navbar-healthcheck.php" ?>
  <div class="container">
    <div class="content-body mg-t-90">
      <div class="d-flex flex-row">
        <div>
          <p class="tx-poppins tx-black tx-18 mg-b-0">Selamat Siang,</p>
          <p class="tx-poppins tx-black tx-medium tx-s-20 tx-md-22 tx-14">Heaven Happyna P. F.</p>
        </div>
        <div class="ms-auto">
          <p class="text-right tx-poppins tx-black tx-s-14 tx-md-18 tx-14 mg-md-t-5">Senin, 2 April 2022</p>
        </div>
      </div>
    </div>
    <div class="pos-fixed t-80 r-15 z-index-10" style="width: auto;">
      <div class="toast mg-l-auto" data-autohide="false">
        <div class="toast-header">
          <span class="mr-auto tx-poppins tx-medium tx-color-01">Notifikasi</span>
          <small class="text-muted">Baru saja</small>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
        </div>
        <div class="toast-body">
          <ion-icon name="checkmark-circle" class="tx-success tx-20 mg-r-5"></ion-icon>
          <p class="tx-medium mg-b-0">Berhasil Diubah</p>
          <p class="mg-b-0">Form Healthcheck Anda hari ini berhasil diubah.</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="content-body">
        <div class="d-flex flex-row-reverse no-gutters">
          <a href="https://google.com">
            <img src="../../assets/img/button-forward-icon.png" class="ht-20 ht-md-25 mg-md-t-0 mg-l-10">
          </a>
          <a href="https://google.com">
            <p class="tx-poppins tx-medium tx-14 tx-md-18 tx-color-02 mg-b-0">Ke MyITS Worktime</p>
          </a>
        </div>
      </div>
    </div>
    <div class="card mg-t-20">
      <div class="card-header bd-0 pd-t-5 pd-b-10 d-flex justify-content-start align-items-center">
      </div>
      <div class="card-body bd-0 pd-0">
        <div class="row row-xs text-center">
          <div class="col-12">
            <p class="tx-poppins tx-medium mg-b-0 crop-text-1">Terima Kasih</p>
            <p class="tx-poppins tx-medium mg-b-0 crop-text-1">Anda sudah mengisi form HealthCheck hari ini.</p>
          </div>
        </div>
      </div>
      <div class="card-footer bd-0 pd-t-5">
      </div>
    </div>
    <div class="card mg-t-20 mg-b-50">
      <div class="card-header card-list bd-0 pd-t-5 pd-b-10 mg-t-10">
        <div class="d-flex align-items-center justify-content-between mg-b-15">
          <h5 class="tx-poppins tx-medium mg-t-20">Edit Hasil Screening</h5>
          <a href="index.php" >
            <ion-icon name="pencil" class="btn btn-icon btn-its-custom-2 rounded-its-50p d-flex align-items-center  tx-18" data-toggle="modal" data-animation="effect-scale"></ion-icon>
          </a>
        </div>
      </div>
      <div class="card-body bd-0 pd-0">
        <div class="row row-xs pd-x-20 pd-y-5">
          <div class="col-12">
            <p class="tx-poppins tx-medium mg-b-5">Kondisi Kesehatan</p>
            <ul>
              <li class="tx-poppins tx-11">Tidak Sehat</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body bd-0 pd-0">
        <div class="row row-xs pd-x-20 pd-y-5">
          <div class="col-12">
            <p class="tx-poppins tx-medium mg-b-5">Gejala Umum yang Dialami</p>
            <ul>
              <li class="tx-poppins tx-12">Batuk kering</li>
              <li class="tx-poppins tx-12">Kelelahan</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body bd-0 pd-0">
        <div class="row row-xs pd-x-20 pd-y-5">
          <div class="col-12">
            <p class="tx-poppins tx-medium mg-b-5">Gejala Tidak Umum yang Dialami</p>
            <ul>
              <li class="tx-poppins tx-12">Rasa tidak nyaman dan nyeri</li>
              <li class="tx-poppins tx-12">Nyeri tenggorokan</li>
              <li class="tx-poppins tx-12">Diare</li>
              <li class="tx-poppins tx-12">Konjungtivitis (mata merah)</li>
              <li class="tx-poppins tx-12">Ruam pada kulit, atau perubahan warna pada jari tangan atau jari kaki</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body bd-0 pd-0">
        <div class="row row-xs pd-x-20 pd-y-5">
          <div class="col-12">
            <p class="tx-poppins tx-medium mg-b-5">Gejala Serius yang Dialami</p>
            <ul>
              <li class="tx-poppins tx-12">Kesulitan bernapas atau sesak napas</li>
              <li class="tx-poppins tx-12">Nyeri dada atau rasa tertekan pada dada</li>
              <li class="tx-poppins tx-12">Hilangnya kemampuan berbicara atau bergerak</li>
            </ul>
          </div>
        </div>
      </div>
      <div>
        <div class="row row-xs pd-x-20 pd-y-5">
          <div class="col-12">
            <p class="tx-poppins tx-medium mg-b-5">Status Kontak</p>
            <ul>
              <li class="tx-poppins tx-12"><i>Suspect</i></li>
              <li class="tx-poppins tx-12"><i>Probable</i></li>
              <li class="tx-poppins tx-12">Kontak Erat</li>
              <li class="tx-poppins tx-12">Terkonfirmasi COVID-19</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
        <table id="example1" class="table table-hover table-borderless dataTable no-footer dtr-inline" style="width: 100%;" role="grid" aria-describedby="example1_info">
          <thead>
            <tr role="row">
              <th class="table-its wd-10p sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 50px;" aria-sort="ascending" aria-label="No: activate to sort column descending">No</th>
              <th class="table-its wd-30p sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 150px;" aria-label="Nama Orang/Kegiatan: activate to sort column ascending">Nama Orang/Kegiatan</th>
              <th class="table-its wd-20p sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 120px;" aria-label="Lokasi: activate to sort column ascending">Lokasi</th>
              <th class="table-its wd-20p sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Jumlah Orang: activate to sort column ascending">Jumlah Orang</th>
              <th class="table-its wd-10p sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 80px;" aria-label="Jam Mulai: activate to sort column ascending">Jam Mulai</th>
              <th class="table-its wd-10p sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 80px;" aria-label="Jam Mulai: activate to sort column ascending">Jam Selesai</th>
            </tr>
          </thead>
          <tbody>
            <tr class="bd-b odd" role="row">
                <td class="table-its sorting_1" tabindex="0">
                  <p class="mg-b-0">1</p>
                </td>
                <td class="table-its">
                  <p class="mg-b-0">Rapat Terbatas Staff Ditmawa</p>
                </td>
                <td class="table-its">
                  <p class="mg-b-0">Gedung Perpustakaan Lt. 4</p>
                </td>
                <td class="table-its">
                  <p class="mg-b-0">25</p>
                </td>
                <td class="table-its">
                  <p class="mg-b-0">12.00</p>
                </td>
                <td class="table-its">
                  <p class="mg-b-0">15.00</p>
                </td>
            </tr>
            <tr class="bd-b odd" role="row">
              <td class="table-its sorting_1" tabindex="0">
                <p class="mg-b-0">2</p>
              </td>
              <td class="table-its">
                <p class="mg-b-0">Rapat Terbuka dengan Mahasiswa Dep. Teknologi Informasi Angkatan 2019</p>
              </td>
              <td class="table-its">
                <p class="mg-b-0">Gedung Perpustakaan Lt. 4</p>
              </td>
              <td class="table-its">
                <p class="mg-b-0">50</p>
              </td>
              <td class="table-its">
                <p class="mg-b-0">12.00</p>
              </td>
              <td class="table-its">
                <p class="mg-b-0">15.00</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
      </div>
      <div class="card-footer bd-0 pd-t-5">
      </div>
    </div>
  </div>

  <?php include "../partial/footer.php" ?>
  <?php include "../partial/script.php" ?>

  <script src="../../lib/select2/js/select2.min.js"></script>
  <script src="../../lib/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../../lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script>
    $(function(){
      'use strict'

      $('#example1').DataTable({
        language: {
          searchPlaceholder: 'Cari',
          sSearch: '',
          lengthMenu: '_MENU_ data/halaman',
          zeroRecords: 'Tidak ada data.',
          infoEmpty: 'Tidak ada data.',
          info: 'Menampilkan halaman _PAGE_ dari _PAGES_',
          infoFiltered: '(filtered from _MAX_ total records)',
          paginate: { 'first': '<i class="fas fa-angle-double-left"></i>',
                      'last': '<i class="fas fa-angle-double-right"></i>',
                      'next': '<i class="fas fa-angle-right"></i>',
                      'previous': '<i class="fas fa-angle-left"></i>'
                    },
        },
        responsive: true,
        columnDefs: [
          { orderable: false, targets: -1 }
        ]
      });

      // Select2
      $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
  </script>

  <script>
    $(document).ready(function(){
      $('.toast').toast('show');
    });
  </script>
</body>
</html>