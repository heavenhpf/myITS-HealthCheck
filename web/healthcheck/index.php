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
    <div class="container">
      <div>
        <h4 class="tx-poppins tx-medium mg-b-10 tx-16">Informasi</h4>
      </div>
    </div>
    <div class="card">
      <div class="card-header bd-0 pd-t-5 pd-b-10 d-flex justify-content-start align-items-center">
      </div>
      <div class="card-body bd-0 pd-0">
        <div class="row row-xs pd-x-20 pd-y-5">
          <div class="col-12">
            <p class="text-justify tx-poppins tx-medium mg-b-0 crop-text-1 tx-12">Pertanyaan di bawah ini ditujukan untuk memonitor kondisi kesehatan pegawai ITS pada masa pandemi COVID-19. Apabila Bapak/Ibu mengalami salah satu gejala atau keadaan sebagai berikut, klik pada kotak yang bersesuaian kemudian tekan tombol “Simpan”. Terima kasih.</p>
          </div>
        </div>
      </div>
      <div class="card-footer bd-0 pd-t-5">
      </div>
    </div>
    <p class="tx-poppins tx-medium mg-l-15 mg-t-30 tx-16">Kondisi Kesehatan</p>
    <div class="card mg-b-50">
      <div class="card-header bd-0 pd-t-5 pd-b-10 d-flex justify-content-start align-items-center">
      </div>
      <div class="card-body bd-0 pd-0">
        <div class="row row-xs pd-x-20 pd-y-5">
          <div class="col-12">
            <p class="tx-poppins tx-medium tx-16 mg-b-5 crop-text-1">Bagaimana kondisi Anda saat ini? Pilih salah satu:</p>
          </div>
        </div>
      </div>
      <div class="row row-xs pd-x-20 pd-y-5">
        <div class="col-md-3 form-group mg-b-0">
          <label for="a" onclick="javascript:CheckButton1();">
            <input type="radio" name="kondisi" class="radio-button-its-element" id="a" required checked>
              <div class="radio-button-its">
                <div class="dot mg-r-10"></div>
                <span>Saya Sehat</span>
              </div>
          </label>
        </div>
        <div class="col-md-3 form-group">
          <label for="b" onclick="javascript:CheckButton1();">
            <input type="radio" name="kondisi" class="radio-button-its-element" id="b">
              <div class="radio-button-its">
                <div class="dot mg-r-10"></div>
                <span>Saya Tidak Sehat</span>
              </div>
          </label>
        </div>
      </div>
      <div id="field1" style="display:none">
        <div class="card-body bd-0 pd-0">
          <div class="row row-xs pd-x-20 pd-y-5">
            <div class="col-12">
              <p class="tx-poppins tx-medium tx-16">Gejala yang Dialami</p>
              <p class="tx-poppins tx-medium mg-b-0 crop-text-1 tx-12 mg-b-10">Gejala yang paling umum (centang yang sesuai dengan kondisi Anda):</p>
            </div>
          </div>
          <div class="checkbox-its-2">
            <div class="label-its mg-md-r-650">
              <input type="checkbox" id="checkboxOne" value="App">
              <label for="checkboxOne">
                <div class="row">
                  <div class="col-1">
                    <img src="../../assets/img/healthcheck-gejala-1.png" class="wd-25" alt="">
                  </div>
                  <div class="col">
                    <p class="tx-poppins crop-text-1 mg-b-0 mg-t-5 tx-11" title="Demam (> 37,5 °C)">Demam (> 37,5 °C)</p>
                  </div>
                </div>
              </label>
            </div>
          </div>
          <div class="checkbox-its-2">
            <div class="label-its mg-md-r-650">
              <input type="checkbox" id="checkboxTwo" value="App">
              <label for="checkboxTwo">
                <div class="row">
                    <div class="col-1">
                      <img src="../../assets/img/healthcheck-gejala-2.png" class="wd-20" alt="">
                    </div>
                    <div class="col">
                      <p class="tx-poppins crop-text-1 mg-b-0 mg-t-3 tx-11" title="Batuk kering">Batuk kering</p>
                    </div>
                </div>
              </label>
            </div>
          </div>
          <div class="checkbox-its-2">
            <div class="label-its mg-md-r-650">
              <input type="checkbox" id="checkboxThree" value="App">
              <label for="checkboxThree">
                <div class="row">
                  <div class="col-1">
                    <img src="../../assets/img/healthcheck-gejala-3.png" class="wd-20" alt="">
                  </div>
                  <div class="col">
                    <p class="tx-poppins crop-text-1 mg-b-0 mg-t-3 tx-11" title="Kelelahan">Kelelahan</p>
                  </div>
                </div>
              </label>
            </div>
          </div>
          <div class="row row-xs pd-x-20 pd-y-5">
            <div class="col-12 mg-t-20">
              <p class="tx-poppins tx-medium mg-b-0 crop-text-1 mg-b-10 tx-12">Gejala yang sedikit tidak umum (centang yang sesuai dengan kondisi Anda):</p>
            </div>
          </div>
          <div class="checkbox-its-2">
            <div class="label-its mg-md-r-550">
              <input type="checkbox" id="checkboxFour" value="App">
              <label for="checkboxFour">
                <div class="row">
                  <div class="col-1">
                    <img src="../../assets/img/healthcheck-gejala-4.png" class="wd-20" alt="">
                  </div>
                  <div class="col">
                    <p class="tx-poppins crop-text-1 mg-b-0 mg-t-3 tx-11" title="Rasa tidak nyaman dan nyeri">Rasa tidak nyaman dan nyeri</p>
                  </div>
                </div>
              </label>
            </div>
          </div>
          <div class="checkbox-its-2">
            <div class="label-its mg-md-r-550">
              <input type="checkbox" id="checkboxFive" value="App">
              <label for="checkboxFive">
                <div class="row">
                  <div class="col-1">
                    <img src="../../assets/img/healthcheck-gejala-5.png" class="wd-20" alt="">
                  </div>
                  <div class="col">
                    <p class="tx-poppins crop-text-1 mg-b-0 mg-t-3 tx-11" title="Nyeri Tenggorokan">Nyeri tenggorokan</p>
                  </div>
                </div>
              </label>
            </div>
          </div>
          <div class="checkbox-its-2">
            <div class="label-its mg-md-r-550">
              <input type="checkbox" id="checkboxSix" value="App">
              <label for="checkboxSix">
                <div class="row">
                  <div class="col-1">
                    <img src="../../assets/img/healthcheck-gejala-6.png" class="wd-20" alt="">
                  </div>
                  <div class="col">
                    <p class="tx-poppins crop-text-1 mg-b-0 mg-t-3 tx-11" title="Diare">Diare</p>
                  </div>
                </div>
              </label>
            </div>
          </div>
          <div class="checkbox-its-2">
            <div class="label-its mg-md-r-550">
              <input type="checkbox" id="checkboxSeven" value="App">
              <label for="checkboxSeven">
                <div class="row">
                  <div class="col-1">
                    <img src="../../assets/img/healthcheck-gejala-7.png" class="wd-20" alt="">
                  </div>
                  <div class="col">
                    <p class="tx-poppins crop-text-1 mg-b-0 mg-t-3 tx-11" title="Konjungtivitis (mata merah)">Konjungtivitis (mata merah)</p>
                  </div>
                </div>
              </label>
            </div>
          </div>
          <div class="checkbox-its-2">
            <div class="label-its mg-md-r-550">
              <input type="checkbox" id="checkboxEight" value="App">
              <label for="checkboxEight">
                <div class="row">
                  <div class="col-1">
                    <img src="../../assets/img/healthcheck-gejala-8.png" class="wd-20" alt="">
                  </div>
                  <div class="col">
                    <p class="tx-poppins crop-text-1 mg-b-0 mg-t-3 tx-11" title="Sakit kepala">Sakit kepala</p>
                  </div>
                </div>
              </label>
            </div>
          </div>
          <div class="checkbox-its-2">
            <div class="label-its mg-md-r-550">
              <input type="checkbox" id="checkboxNine" value="App">
              <label for="checkboxNine">
                <div class="row">
                  <div class="col-1">
                    <img src="../../assets/img/healthcheck-gejala-9.png" class="wd-20" alt="">
                  </div>
                  <div class="col">
                    <p class="tx-poppins crop-text-1 mg-b-0 mg-t-3 tx-11" title="Hilangnya indera perasa atau penciuman">Hilangnya indera perasa atau penciuman</p>
                  </div>
                </div>
              </label>
            </div>
          </div>
          <div class="checkbox-its-2">
            <div class="label-its mg-md-r-550">
              <input type="checkbox" id="checkboxTen" value="App">
              <label for="checkboxTen">
                <div class="row">
                  <div class="col-1">
                  <img src="../../assets/img/healthcheck-gejala-10.png" class="wd-20" alt="">
                  </div>
                  <div class="col">
                    <p class="tx-poppins crop-text-1 mg-b-0 mg-t-3 tx-11" title="Ruam kulit atau perubahan warna pada jari">Ruam kulit atau perubahan warna pada jari</p>
                  </div>
                </div>
              </label>
            </div>
          </div>
          <div class="row row-xs pd-x-20 pd-y-5">
            <div class="col-12 mg-t-20">
              <p class="tx-poppins tx-medium mg-b-0 crop-text-1 mg-b-10 tx-12">Gejala serius (centang yang sesuai dengan kondisi Anda):</p>
            </div>
          </div>
          <div class="checkbox-its-2">
            <div class="label-its mg-md-r-500">
              <input type="checkbox" id="checkboxEleven" value="App">
              <label for="checkboxEleven">
                <div class="row">
                  <div class="col-1">
                  <img src="../../assets/img/healthcheck-gejala-11.png" class="wd-20" alt="">
                  </div>
                  <div class="col">
                    <p class="tx-poppins crop-text-1 mg-b-0 mg-t-3 tx-11" title="Kesulitan bernapas atau sesak napas">Kesulitan bernapas atau sesak napas</p>
                  </div>
                </div>
              </label>
            </div>
          </div>
          <div class="checkbox-its-2">
            <div class="label-its mg-md-r-500">
              <input type="checkbox" id="checkboxTwelve" value="App">
              <label for="checkboxTwelve">
                <div class="row">
                  <div class="col-1">
                  <img src="../../assets/img/healthcheck-gejala-12.png" class="wd-20" alt="">
                  </div>
                  <div class="col">
                    <p class="tx-poppins crop-text-1 mg-b-0 mg-t-3 tx-11" title="Nyeri dada atau rasa tertekan pada dada">Nyeri dada atau rasa tertekan pada dada</p>
                  </div>
                </div>
              </label>
            </div>
          </div>
          <div class="checkbox-its-2">
            <div class="label-its mg-md-r-500">
              <input type="checkbox" id="checkboxThirteen" value="App">
              <label for="checkboxThirteen">
                <div class="row">
                  <div class="col-1">
                  <img src="../../assets/img/healthcheck-gejala-13.png" class="wd-20" alt="">
                  </div>
                  <div class="col">
                    <p class="tx-poppins crop-text-1 mg-b-0 mg-md-t-2 tx-11" title="Hilangnya kemampuan berbicara atau bergerak">Hilangnya kemampuan berbicara atau bergerak</p>
                  </div>
                </div>
              </label>
            </div>
          </div>
          <div class="mg-b-20"></div>
        </div>
      </div>
      <div class="card-body bd-0 pd-0">
        <div class="row row-xs pd-x-20 pd-y-5">
          <div class="col-12">
            <p class="tx-poppins tx-medium tx-16">Status Kondisi</p>
            <p class="tx-poppins tx-medium mg-b-0 crop-text-1 mg-b-10 tx-12">Apakah Anda atau keluarga saat ini dalam status (centang yang sesuai dengan kondisi Anda):</p>
          </div>
        </div>
      </div>
      <div class="checkbox-its-2">
        <div class="label-its mg-md-r-300">
          <input type="checkbox" id="checkboxFourteen" value="App">
          <label for="checkboxFourteen">
            <img src="../../assets/img/healthcheck-status-1.png" class="wd-20 mg-l-5 mg-r-10">
            <p class="tx-poppins crop-text-1 mg-b-0 tx-11" title="Suspect"><i>Suspect</i></p>
          </label>
        </div>
      </div>
      <div class="checkbox-its-2">
        <div class="label-its mg-md-r-300">
          <input type="checkbox" id="checkboxFifteen" value="App">
          <label for="checkboxFifteen">
            <img src="../../assets/img/healthcheck-status-2.png" class="wd-20 mg-l-5 mg-r-10">
            <p class="tx-poppins crop-text-1 mg-b-0 tx-11" title="Probable"><i>Probable</i></p>
          </label>
        </div>
      </div>
      <div class="checkbox-its-2">
        <div class="label-its mg-md-r-300">
          <input type="checkbox" id="checkboxSixteen" value="App">
          <label for="checkboxSixteen">
            <img src="../../assets/img/healthcheck-status-3.png" class="wd-20 mg-l-5 mg-r-10">
            <p class="tx-poppins crop-text-1 mg-b-0 tx-11" title="Kontak Erat">Kontak Erat</p>
          </label>
        </div>
      </div>
      <div class="checkbox-its-2">
        <div class="label-its mg-md-r-300">
          <input type="checkbox" id="checkboxSeventeen" value="App">
          <label for="checkboxSeventeen">
            <img src="../../assets/img/healthcheck-status-4.png" class="wd-20 mg-l-5 mg-r-10">
            <p class="tx-poppins crop-text-1 mg-b-0 tx-11" title="Terkonfirmasi COVID-19">Terkonfirmasi COVID-19</p>
          </label>
        </div>
      </div>
      <div class="checkbox-its-2">
        <div class="label-its mg-md-r-300">
          <input type="checkbox" id="checkboxEighteen" value="App">
          <label for="checkboxEighteen">
            <img src="../../assets/img/healthcheck-status-5.png" class="wd-20 mg-l-5 mg-r-10">
            <p class="tx-poppins crop-text-1 mg-b-0 tx-11" title="Tidak ada yang berstatus <i>Suspect</i>/<i>Probable</i>/Kontak Erat/Terkonfirmasi COVID-19">Tidak ada yang berstatus <i>Suspect</i>/<i>Probable</i>/Kontak Erat/Terkonfirmasi COVID-19</p>
          </label>
        </div>
      </div>
      <div class="card-body bd-0 pd-0">
        <div class="row row-xs pd-x-20 pd-y-5">
          <div class="col-12 mg-l-0 mg-t-20">
            <p class="tx-poppins tx-medium mg-b-0 crop-text-1 mg-t-10 mg-b-10 tx-md-16">Daftar pertemuan/kontak di hari sebelumnya:</p>
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
            <input type="number" class="form-control" id="participants-amount" name="nama3" placeholder="Jumlah Orang" value="" required="" min="1">
            <label class="col-sm-12 tx-poppins" for="participants-amount">Jumlah Orang</label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group form-floating mg-r-20">
            <input type="time" class="form-control" id="started-at" name="nama4" placeholder="Jam Mulai" value="" required="">
            <label class="col-sm-12 tx-poppins input-time" for="started-at">Jam Mulai</label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group form-floating mg-r-20">
            <input type="time" class="form-control" id="ended-at" name="nama5" placeholder="Jam Selesai" value="" required="">
            <label class="col-sm-12 tx-poppins input-time" for="ended-at">Jam Selesai</label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group form-floating mg-t-10 mg-r-20">
              <label class="col-sm-12 d-none d-md-inline">&nbsp;</label>
              <div class="col-sm-12">
                  <input type="hidden" name="id_contact_history" id="id-contact-history">
                  <button type="button" class="btn btn-its-3 btn-block" id="btn-add-contact-history" style="display: inline;">
                      <i class="fa fa-plus"></i><span class="ml-10 mg-l-20 d-inline tx-poppins">Tambah</span>
                  </button>
              </div>
          </div>
        </div>
      </div>
      <div class="pos-fixed t-80 r-15" style="width: auto;">
        <div class="toast mg-l-auto" data-autohide="false">
          <div class="toast-header">
            <span class="mr-auto tx-poppins tx-medium tx-color-01">Notifikasi</span>
            <small class="text-muted">Baru saja</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
          </div>
          <div class="toast-body">
            <ion-icon name="checkmark-circle" class="tx-success tx-20 mg-r-5"></ion-icon>
            <p class="tx-medium mg-b-0">Berhasil Ditambahkan</p>
            <p class="mg-b-0">Daftar pertemuan/kontak Anda berhasil ditambahkan.</p>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="example1" class="table table-hover table-borderless" style="width: 100%;">
            <thead>
              <tr>
                <th class="table-its wd-10p sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 50px;" aria-sort="ascending" aria-label="No: activate to sort column descending">No</th>
                <th class="table-its wd-30p sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 150px;" aria-label="Nama Orang/Kegiatan: activate to sort column ascending">Nama Orang/Kegiatan</th>
                <th class="table-its wd-20p sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 120px;" aria-label="Lokasi: activate to sort column ascending">Lokasi</th>
                <th class="table-its wd-20p sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Jumlah Orang: activate to sort column ascending">Jumlah Orang</th>
                <th class="table-its wd-10p sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 70px;" aria-label="Jam Mulai: activate to sort column ascending">Jam Mulai</th>
                <th class="table-its wd-5p sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 70px;" aria-label="Jam Mulai: activate to sort column ascending">Jam Selesai</th>
                <th class="table-its wd-5p sorting_disabled" rowspan="1" colspan="1" style="width: 50px;" aria-label=""></th>
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
                      <a href="#kegiatan-hapus" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18 md hydrated" role="img" aria-label="trash sharp"></ion-icon></span></div> Hapus</a>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer mg-t-100">
        <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
        <a href="check-result.php">
          <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Simpan</button>
        </a>
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

  <script type="text/javascript">
    function CheckButton1() {
        if (document.getElementById('b').checked) {
            document.getElementById('field1').style.display = 'block';
        }
        else document.getElementById('field1').style.display = 'none';
    }
  </script>
</body>
</html>