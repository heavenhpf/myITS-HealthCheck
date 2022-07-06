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
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="mn-ht-100v d-flex flex-column">
  <?php include "../partial/navbar-healthcheck.php" ?>
  <div class="container">
    <div class="content-body mg-t-90">
      <div class="d-flex flex-row">
          <div>
            <p class="tx-poppins tx-black tx-s-14 tx-md-16 mg-b-0">Selamat Siang,</p>
            <p class="tx-poppins tx-black tx-medium tx-s-20 tx-md-22">Lorem Ipsum</p>
          </div>
          <div class="ms-auto">
            <p class="tx-poppins tx-black tx-s-14 tx-md-16 mg-t-5">Senin, 2 April 2022</p>
          </div>
      </div>
    </div>
    <div class="container">
      <div>
        <p class="tx-poppins tx-medium mg-b-10 tx-md-18">Informasi</p>
      </div>
    </div>
    <div class="card">
      <div class="card-header bd-0 pd-md-t-5 pd-md-b-10 d-flex justify-content-start align-items-center">
      </div>
      <div class="card-body bd-0 pd-0">
        <div class="row row-xs pd-x-20 pd-y-5">
          <div class="col-12">
            <p class="tx-poppins tx-medium mg-b-0 crop-text-1 tx-md-14">Pertanyaan di bawah ini ditujukan untuk memonitor kondisi kesehatan pegawai ITS pada masa pandemi COVID-19. Apabila Bapak/Ibu mengalami salah satu gejala atau keadaan sebagai berikut, klik pada kotak yang bersesuaian kemudian tekan tombol “Simpan”. Terima kasih.</p>
          </div>
        </div>
      </div>
      <div class="card-footer bd-0 pd-md-t-5">
      </div>
    </div>
    <div class="card mg-t-10">
      <div class="card-header bd-0 pd-md-t-5 pd-md-b-10 d-flex justify-content-start align-items-center">
      </div>
      <div class="card-body bd-0 pd-0">
        <div class="row row-xs pd-x-20 pd-y-5">
          <div class="col-12">
            <p class="tx-poppins tx-medium tx-md-18">Kondisi Kesehatan</p>
            <p class="tx-poppins tx-medium mg-b-0 crop-text-1 tx-md-14">Bagaimana kondisi Anda saat ini? Pilih yang sesuai kondisi Anda.</p>
          </div>
        </div>
      </div>
      <div class="radiokondisi">
        <div class="custom-control-inline custom-radio" style="padding-left: 44px;">
          <input class="custom-control-input" type="radio" id="hcheck-1-healthy" name="hcheck-1" value="1">
          <label class="custom-control-label tx-poppins" for="hcheck-1-healthy">Saya sehat</label>
        </div>
        <div class="custom-control-inline custom-radio mg-l-50">
          <input class="custom-control-input" type="radio" id="hcheck-1-unhealthy" name="hcheck-1" value="0" checked="">
          <label class="custom-control-label tx-poppins" for="hcheck-1-unhealthy">Saya kurang sehat</label>
        </div>
      </div>

      <div class="card-body bd-0 pd-0">
        <div class="row row-xs pd-x-20 pd-y-5">
          <div class="col-12 mg-t-20">
            <p class="tx-poppins tx-medium tx-md-18 mg-t-20">Status Kontak</p>
            <p class="tx-poppins tx-medium mg-b-0 crop-text-1 mg-b-10">Gejala yang paling umum (centang yang sesuai dengan kondisi Anda):</p>
          </div>
        </div>
      </div>

      <div class="formstatus mg-l-20 mg-r-450" style="border-style:outset; border: 1px solid rgba(121, 135, 161, 0.5); border-radius: 5px;">
        <div class="custom-control custom-checkbox mg-l-20 mg-t-10">
          <input class="custom-control-input" type="checkbox" id="hcheck-2" name="hcheck-2" value="1">
          <label class="custom-control-label tx-poppins" for="hcheck-2">Demam (> 37,5 °C)</label>
        </div>
        <div class="custom-control custom-checkbox mg-l-20">
          <input class="custom-control-input" type="checkbox" id="hcheck-3" name="hcheck-3" value="1">
          <label class="custom-control-label tx-poppins" for="hcheck-3">Batuk kering</label>
        </div>
        <div class="custom-control custom-checkbox mg-l-20 mg-b-10">
          <input class="custom-control-input" type="checkbox" id="hcheck-4" name="hcheck-4" value="1">
          <label class="custom-control-label tx-poppins" for="hcheck-4">Kelelahan</label>
        </div>
      </div>

      <div class="card-body bd-0 pd-0">
        <div class="row row-xs pd-x-20 pd-y-5">
          <div class="col-12 mg-t-20">
            <p class="tx-poppins tx-medium mg-b-0 crop-text-1 mg-b-10">Gejala yang sedikit tidak umum (centang yang sesuai dengan kondisi Anda):</p>
          </div>
        </div>
      </div>

      <div class="formstatus mg-l-20 mg-r-450" style="border-style:outset; border: 1px solid rgba(121, 135, 161, 0.5); border-radius: 5px;">
        <div class="custom-control custom-checkbox mg-l-20 mg-t-10">
          <input class="custom-control-input" type="checkbox" id="hcheck-5" name="hcheck-5" value="1">
          <label class="custom-control-label tx-poppins" for="hcheck-5">Rasa tidak nyaman dan nyeri</label>
        </div>
        <div class="custom-control custom-checkbox mg-l-20">
          <input class="custom-control-input" type="checkbox" id="hcheck-6" name="hcheck-6" value="1">
          <label class="custom-control-label tx-poppins" for="hcheck-6">Nyeri tenggorokan</label>
        </div>
        <div class="custom-control custom-checkbox mg-l-20">
          <input class="custom-control-input" type="checkbox" id="hcheck-7" name="hcheck-7" value="1">
          <label class="custom-control-label tx-poppins" for="hcheck-7">Diare</label>
        </div>
        <div class="custom-control custom-checkbox mg-l-20">
          <input class="custom-control-input" type="checkbox" id="hcheck-8" name="hcheck-8" value="1">
          <label class="custom-control-label tx-poppins" for="hcheck-8">Konjungtivitis (mata merah)</label>
        </div>
        <div class="custom-control custom-checkbox mg-l-20">
          <input class="custom-control-input" type="checkbox" id="hcheck-9" name="hcheck-9" value="1">
          <label class="custom-control-label tx-poppins" for="hcheck-9">Sakit kepala</label>
        </div>
        <div class="custom-control custom-checkbox mg-l-20">
          <input class="custom-control-input" type="checkbox" id="hcheck-10" name="hcheck-10" value="1">
          <label class="custom-control-label tx-poppins" for="hcheck-10">Hilangnya indera perasa atau penciuman</label>
        </div>
        <div class="custom-control custom-checkbox mg-l-20 mg-b-10">
          <input class="custom-control-input" type="checkbox" id="hcheck-11" name="hcheck-11" value="1">
          <label class="custom-control-label tx-poppins" for="hcheck-11">Ruam pada kulit, atau perubahan warna pada jari tangan atau jari kaki</label>
        </div>
      </div>

      <div class="card-body bd-0 pd-0">
        <div class="row row-xs pd-x-20 pd-y-5">
          <div class="col-12 mg-t-20">
            <p class="tx-poppins tx-medium mg-b-0 crop-text-1 mg-b-10">Gejala serius (centang yang sesuai dengan kondisi Anda):</p>
          </div>
        </div>
      </div>

      <div class="formstatus mg-l-20 mg-r-450" style="border-style:outset; border: 1px solid rgba(121, 135, 161, 0.5); border-radius: 5px;">
        <div class="custom-control custom-checkbox mg-l-20 mg-t-10">
          <input class="custom-control-input" type="checkbox" id="hcheck-12" name="hcheck-12" value="1">
          <label class="custom-control-label tx-poppins" for="hcheck-12">Kesulitan bernapas atau sesak napas</label>
        </div>
        <div class="custom-control custom-checkbox mg-l-20">
          <input class="custom-control-input" type="checkbox" id="hcheck-13" name="hcheck-13" value="1">
          <label class="custom-control-label tx-poppins" for="hcheck-13">Nyeri dada atau rasa tertekan pada dada</label>
        </div>
        <div class="custom-control custom-checkbox mg-l-20 mg-b-10">
          <input class="custom-control-input" type="checkbox" id="hcheck-14" name="hcheck-14" value="1">
          <label class="custom-control-label tx-poppins" for="hcheck-14">Hilangnya kemampuan berbicara atau bergerak</label>
        </div>
      </div>

      <div class="card-body bd-0 pd-0">
        <div class="row row-xs pd-x-20 pd-y-5">
          <div class="col-12 mg-t-20">
            <p class="tx-poppins tx-medium mg-b-0 crop-text-1 mg-b-10">Apakah Anda atau keluarga saat ini dalam status (centang yang sesuai dengan kondisi Anda):</p>
          </div>
        </div>
      </div>

      <div class="formstatus mg-l-20 mg-r-450" style="border-style:outset; border: 1px solid rgba(121, 135, 161, 0.5); border-radius: 5px;">
        <div class="custom-control custom-checkbox mg-l-20 mg-t-10">
          <input class="custom-control-input" type="checkbox" id="hcheck-15" name="hcheck-15" value="1">
          <label class="custom-control-label tx-poppins" for="hcheck-15">
            <i>Suspect</i>
          </label>
        </div>
        <div class="custom-control custom-checkbox mg-l-20">
          <input class="custom-control-input" type="checkbox" id="hcheck-16" name="hcheck-16" value="1">
          <label class="custom-control-label tx-poppins" for="hcheck-16">
            <i>Probable</i>
          </label>
        </div>
        <div class="custom-control custom-checkbox mg-l-20">
          <input class="custom-control-input" type="checkbox" id="hcheck-17" name="hcheck-17" value="1">
          <label class="custom-control-label tx-poppins" for="hcheck-17">Kontak Erat</label>
        </div>
        <div class="custom-control custom-checkbox mg-l-20">
          <input class="custom-control-input" type="checkbox" id="hcheck-18" name="hcheck-18" value="1">
          <label class="custom-control-label tx-poppins" for="hcheck-18">Terkonfirmasi COVID-19</label>
        </div>
        <div class="custom-control custom-checkbox mg-l-20 mg-b-10">
          <input class="custom-control-input" type="checkbox" id="hcheck-19" name="hcheck-19" value="1" checked="">
          <label class="custom-control-label tx-poppins" for="hcheck-19">
            Tidak ada yang berstatus <i>Suspect</i>/<i>Probable</i>/Kontak Erat/Terkonfirmasi COVID-19
          </label>
        </div>
      </div>

      <div class="card-body bd-0 pd-0">
        <div class="row row-xs pd-x-20 pd-y-5">
          <div class="col-12 mg-l-0 mg-t-20">
            <p class="tx-poppins tx-medium mg-b-0 crop-text-1 mg-t-10 mg-b-10">Daftar pertemuan/kontak di hari sebelumnya:</p>
          </div>
        </div>
      </div>

      <div class="row mg-l-20 no-gutters">
        <div class="col-md-2">
          <div class="form-group form-floating mg-r-20">
            <input type="text" class="form-control" id="nama-panggilan" name="nama1" placeholder="Nama Orang/Kegiatan" value="" required="">
            <label class="col-sm-12 tx-poppins" for="namaorangkegiatan">Nama Kegiatan</label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group form-floating mg-r-20">
            <input type="text" class="form-control" id="location" name="nama2" placeholder="Lokasi" value="" required="">
            <label class="col-sm-12 tx-poppins" for="location">Lokasi</label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group form-floating mg-r-20">
            <input type="text" class="form-control" id="participants-amount" name="nama3" placeholder="Jumlah Orang" value="" required="" min="1">
            <label class="col-sm-12 tx-poppins" for="participants-amount">Jumlah Orang</label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group form-floating mg-r-20">
            <input type="text" class="form-control" id="started-at" name="nama4" placeholder="Jam Mulai" value="" required="">
            <label class="col-sm-12 tx-poppins input-time" for="started-at">Jam Mulai</label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group form-floating mg-r-20">
            <input type="text" class="form-control" id="ended-at" name="nama5" placeholder="Jam Selesai" value="" required="">
            <label class="col-sm-12 tx-poppins input-time" for="ended-at">Jam Selesai</label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group form-floating mg-r-40 mg-l-30 mg-t-10">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20 d-flex align-items-center justify-content-start">
              <a href="#kegiatan-tambah" class="btn btn-its-3 tx-poppins tx-medium d-flex align-items-center" data-toggle="modal" data-animation="effect-scale" style="background-color: #FF5818; border: none"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus mg-r-5" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/></svg>Tambah
              </a>
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
                  <th class="table-its wd-10p sorting_disabled" rowspan="1" colspan="1" style="width: 50px;" aria-label=""></th>
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

                  <td class="table-its">                            
                    <div class="dropdown">
                      <a href="" data-toggle="dropdown" class="btn btn-icon pd-0">
                        <div class="avatar"><span class="avatar-initial rounded-circle btn-its-custom-1 tx-color-01" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Menu"><ion-icon name="ellipsis-vertical" class="tx-18 md hydrated" role="img" aria-label="ellipsis vertical"></ion-icon></span></div>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent">
                        <a href="#kegiatan-edit" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18 md hydrated" role="img" aria-label="pencil sharp"></ion-icon></span></div> Edit</a>
                        <a href="#kegiatan-hapus" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18 md hydrated" role="img" aria-label="trash sharp"></ion-icon></span></div> Hapus</a>
                      </div>
                    </div>
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

                  <td class="table-its">                            
                    <div class="dropdown">
                      <a href="" data-toggle="dropdown" class="btn btn-icon pd-0">
                        <div class="avatar"><span class="avatar-initial rounded-circle btn-its-custom-1 tx-color-01" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Menu"><ion-icon name="ellipsis-vertical" class="tx-18 md hydrated" role="img" aria-label="ellipsis vertical"></ion-icon></span></div>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent">
                        <a href="#kegiatan-edit" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18 md hydrated" role="img" aria-label="pencil sharp"></ion-icon></span></div> Edit</a>
                        <a href="#kegiatan-hapus" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18 md hydrated" role="img" aria-label="trash sharp"></ion-icon></span></div> Hapus</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="row justify-content-end no-gutters mg-t-70 mg-4-10 mg-b-20">
          <div class="col-ms-1 col-md-1">
            <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
          </div>
          <div class="col-ms-1 col-md-1 mg-r-20">
            <a href="check-result-tidak-sehat.php">
              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Simpan</button>
            </a>
          </div>
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
      $(function(){
        'use strict'

        $('[data-toggle="tooltip"]').tooltip()

        $('.df-example .btn-primary').tooltip({
          template: '<div class="tooltip tooltip-primary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        })

        $('.df-example .btn-secondary').tooltip({
          template: '<div class="tooltip tooltip-secondary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        })

        $('.df-example .btn-success').tooltip({
          template: '<div class="tooltip tooltip-success" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        })

        $('.df-example .btn-danger').tooltip({
          template: '<div class="tooltip tooltip-danger" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        })
      });
    </script>
  </body>
</html>