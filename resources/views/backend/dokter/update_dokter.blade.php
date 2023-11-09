{{-- <div class="modal fade" id="edit{{ $d->id_dokter }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-editLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-editLabel">Edit dokter <strong>{{ $d->nama_dokter }}</strong></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('dokter.update', $d->id_dokter) }}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" class="form-control" name="id" id="v_id" value=""/>
              <div class="mb-3">
                  <label for="userID" class="form-label">User ID</label>
                  <input type="number" id="v_id_user" min="1" max="" class="form-control @error('id_user') is-invalid @enderror" name="user_id" value="{{ $d->user_id }}"/>
  
                  @error('user_id')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="poliID" class="form-label">Poli ID</label>
                  <input type="number" id="v_id_poli" min="1" max="" class="form-control @error('id_poli') is-invalid @enderror" name="poli_id" value="{{ $d->poli_id }}"/>
  
                  @error('poli_id')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="namadokter" class="form-label">Nama dokter</label>
                  <input type="text" id="v_nama_dokter" class="form-control @error('nama_dokter') is-invalid @enderror" name="nama_dokter" value="{{ $d->nama_dokter }}" />
  
                  @error('nama_dokter')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>

              <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" id="v_nim" class="form-control @error('nama_nim') is-invalid @enderror" name="nim" value="{{ $d->nim }}" />

                @error('nama_nim')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
  
              <div class="mb-3">
                  <label for="img_dokter" class="form-label" >Image dokter</label>
                  <input type="file" class="form-control mb-4 @error('img_dokter') is-invalid @enderror" id="v_img_mahaiswa" name="img_dokter" value="{{ $d->img_dokter }}">
                  <img src="{{ asset('storage/' . $d->img_dokter) }}" alt="Gambar dokter" width="100">
  
                  @error('img_dokter')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="alamatdokter" class="form-label" >Alamat</label>
                  <input type="text" id="v_alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $d->alamat }}" />
  
                  @error('alamat')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="notelpon" class="form-label" >No. Tlp</label>
                  <input type="text" id="v_no_tlp" class="form-control @error('no_tlp') is-invalid @enderror" name="no_tlp" value="{{ $d->no_tlp }}" />
  
                  @error('no_tlp')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="tempatkerja" class="form-label" >Tempat Kerja</label>
                  <input type="text" id="v_tempat_kerja" class="form-control @error('tempat_kerja') is-invalid @enderror" name="tempat_kerja" value="{{ $d->tempat_kerja }}" />
  
                  @error('tempat_kerja')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="tahunlulus" class="form-label" >Tahun Lulus</label>
                  <input type="text" id="v_tahun_lulus" class="form-control @error('tahun_lulus') is-invalid @enderror" name="tahun_lulus" value="{{ $d->tahun_lulus }}" />
  
                  @error('tahun_lulus')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="tglmulaiaktif" class="form-label" >Tgl Mulai Aktif</label>
                  <input type="date" id="v_tgl_mulai_aktif" class="form-control @error('tgl_mulai_aktif') is-invalid @enderror" name="tgl_mulai_aktif" value="{{ $d->tgl_mulai_aktif }}" />
  
                  @error('tgl_mulai_aktif')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="alumnikampus" class="form-label" >Alumni Kampus</label>
                  <select class="form-select" id="v_alumni_kampus" name="alumni_kampus" aria-label="Default select example">
                      <option selected>{{ $d->alumni_kampus }}</option>
                      <option value="Unair">Universitas Airlangga</option>
                      <option value="UGM">Universitas Gajah Mada</option>
                      <option value="UMY">Universitas Muhammadiyah Yogyakarta</option>
                      <option value="UI">Universitas Indonesia</option>
                      <option value="UII">Universitas Islam Indonesia</option>
                      <option value="Unpad">Universitas Padjadjaran</option>
                      <option value="UB">Universitas Brawijaya</option>
                      <option value="UPH">Universitas Pelita harapan</option>
                      <option value="UNS">Universitas Sebelas Maret</option>
                      <option value="Undip">Universitas Diponegoro</option>
                  </select
  
                  @error('alumni_kampus')
                  <span >class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="noreg" class="form-label" >No Reg</label>
                  <input type="text" id="v_no_reg" class="form-control @error('no_reg') is-invalid @enderror" name="no_reg" value="{{ $d->no_reg }}" />
  
                  @error('no_reg')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="jnskelamin" class="form-label" >Jenis Kelamin</label>
                  <select class="form-select" id="v_jenis_kelamin" name="jenis_kelamin" aria-label="Default select example">
                      <option selected>{{ $d->jenis_kelamin }}</option>
                      <option value="L">L</option>
                      <option value="P">P</option>
                  </select>
  
                  @error('jenis_kelamin')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="statusstatus" class="form-label" >Status</label>
                  <select class="form-select" id="v_status" name="status" aria-label="Default select example">
                      <option selected>{{ $d->status }}</option>
                      <option value="Panding">Panding</option>
                      <option value="Approve">Approve</option>
                      <option value="Reject">Reject</option>
                      <option value="Suspend">Suspend</option>
                  </select
  
                  @error('status')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
  </div>
  
  <script>
    CKEDITOR.replace( 'content' );
  </script>
   --}}
<div class="modal fade" id="edit{{ $d->id_dokter }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-editLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-editLabel">Edit Dokter <strong>{{ $d->title_depan }} {{ $d->nama_dokter }} {{ $d->title_belakang }}</strong></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('dokter.update', $d->id_dokter) }}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" class="form-control" name="id" id="v_id" value=""/>
              <div class="mb-3">
                  <label for="userID" class="form-label">User ID</label>
                  <input type="number" id="v_id_user" min="1" max="" class="form-control @error('id_user') is-invalid @enderror" name="user_id" value="{{ $d->user_id }}"/>
  
                  @error('user_id')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="spesialisID" class="form-label">Spesialis ID</label>
                  <input type="number" id="v_id_spesialis" min="1" max="" class="form-control @error('id_spesialis') is-invalid @enderror" name="spesialis_id" value="{{ $d->spesialis_id }}"/>
  
                  @error('spesialis_id')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="titledepan" class="form-label">Title Depan</label>
                  <select class="form-select" id="v_title_depan" name="title_depan" aria-label="Default select example">
                      <option selected>{{ $d->title_depan }}</option>
                      <option value="Dr.">Dr.</option>
                      <option value="Drg.">Drg.</option>
                  </select>
  
                  @error('title_depan')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="namadokter" class="form-label">Nama Dokter</label>
                  <input type="text" id="v_nama_dokter" class="form-control @error('nama_dokter') is-invalid @enderror" name="nama_dokter" value="{{ $d->nama_dokter }}" />
  
                  @error('nama_dokter')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="titlebelakang" class="form-label">Title Belakang</label>
                  <select class="form-select" id="v_title_belakang" name="title_belakang" aria-label="Default select example">
                      <option selected>{{ $d->title_belakang }}</option>
                      <option value="Sp.THT">Dokter Spesialis Penyakit Telingat, Hidung dan Tenggorokan</option>
                      <option value="Sp.OG">Dokter Spesialis Kandungan dan Kebidanan</option>
                      <option value="Sp.A">Dokter Spesialis Anak / Pediatrik</option>
                      <option value="Sp.PD">Dokter Spesialis Penyakit Dalam</option>
                      <option value="Sp.JP">Dokter Spesialis Jantung</option>
                      <option value="Sp.P">Dokter Spesialis Paru</option>
                      <option value="Sp.S">Dokter Spesialis Saraf</option>
                      <option value="Sp.M">Dokter Spesialis Mata</option>
                      <option value="Sp.KGA">Dokter Gigi Spesialis Kedokteran Gigi Anak</option>
                  </select>
  
                  @error('title_belakang')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="img_dokter" class="form-label" >Image Dokter</label>
                  <input type="file" class="form-control mb-4 @error('img_dokter') is-invalid @enderror" id="v_img_spesialis" name="img_dokter" value="{{ $d->img_dokter }}">
                  <img src="{{ asset('storage/' . $d->img_dokter) }}" alt="Gambar Dokter" width="100">
  
                  @error('img_spesialis')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="alamatdokter" class="form-label" >Alamat</label>
                  <input type="text" id="v_alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $d->alamat }}" />
  
                  @error('alamat')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="notelpon" class="form-label" >No. Tlp</label>
                  <input type="text" id="v_no_tlp" class="form-control @error('no_tlp') is-invalid @enderror" name="no_tlp" value="{{ $d->no_tlp }}" />
  
                  @error('no_tlp')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="tempatkerja" class="form-label" >Tempat Kerja</label>
                  <input type="text" id="v_tempat_kerja" class="form-control @error('tempat_kerja') is-invalid @enderror" name="tempat_kerja" value="{{ $d->tempat_kerja }}" />
  
                  @error('tempat_kerja')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="tahunlulus" class="form-label" >Tahun Lulus</label>
                  <input type="text" id="v_tahun_lulus" class="form-control @error('tahun_lulus') is-invalid @enderror" name="tahun_lulus" value="{{ $d->tahun_lulus }}" />
  
                  @error('tahun_lulus')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="tglmulaiaktif" class="form-label" >Tgl Mulai Aktif</label>
                  <input type="date" id="v_tgl_mulai_aktif" class="form-control @error('tgl_mulai_aktif') is-invalid @enderror" name="tgl_mulai_aktif" value="{{ $d->tgl_mulai_aktif }}" />
  
                  @error('tgl_mulai_aktif')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="alumnikampus" class="form-label" >Alumni Kampus</label>
                  <select class="form-select" id="v_alumni_kampus" name="alumni_kampus" aria-label="Default select example">
                      <option selected>{{ $d->alumni_kampus }}</option>
                      <option value="Unair">Universitas Airlangga</option>
                      <option value="UGM">Universitas Gajah Mada</option>
                      <option value="UMY">Universitas Muhammadiyah Yogyakarta</option>
                      <option value="UI">Universitas Indonesia</option>
                      <option value="UII">Universitas Islam Indonesia</option>
                      <option value="Unpad">Universitas Padjadjaran</option>
                      <option value="UB">Universitas Brawijaya</option>
                      <option value="UPH">Universitas Pelita harapan</option>
                      <option value="UNS">Universitas Sebelas Maret</option>
                      <option value="Undip">Universitas Diponegoro</option>
                  </select
  
                  @error('alumni_kampus')
                  <span >class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="noreg" class="form-label" >No Reg</label>
                  <input type="text" id="v_no_reg" class="form-control @error('no_reg') is-invalid @enderror" name="no_reg" value="{{ $d->no_reg }}" />
  
                  @error('no_reg')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="jnskelamin" class="form-label" >Jenis Kelamin</label>
                  <select class="form-select" id="v_jenis_kelamin" name="jenis_kelamin" aria-label="Default select example">
                      <option selected>{{ $d->jenis_kelamin }}</option>
                      <option value="L">L</option>
                      <option value="P">P</option>
                  </select>
  
                  @error('jenis_kelamin')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="statusdokter" class="form-label" >Status</label>
                  <select class="form-select" id="v_status" name="status" aria-label="Default select example">
                      <option selected>{{ $d->status }}</option>
                      <option value="Panding">Panding</option>
                      <option value="Approve">Approve</option>
                      <option value="Reject">Reject</option>
                      <option value="Suspend">Suspend</option>
                  </select
  
                  @error('status')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
  </div>
  
  <script>
    CKEDITOR.replace( 'content' );
  </script>

<div class="modal fade" id="edit{{ $d->id_dokter }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-editLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-editLabel">Edit Dokter <strong>{{ $d->title_depan }} {{ $d->nama_dokter }} {{ $d->title_belakang }}</strong></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('dokter.update', $d->id_dokter) }}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" class="form-control" name="id" id="v_id" value=""/>
              <div class="mb-3">
                  <label for="userID" class="form-label">User ID</label>
                  <input type="number" id="v_id_user" min="1" max="" class="form-control @error('id_user') is-invalid @enderror" name="user_id" value="{{ $d->user_id }}"/>
  
                  @error('user_id')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="spesialisID" class="form-label">Spesialis ID</label>
                  <input type="number" id="v_id_spesialis" min="1" max="" class="form-control @error('id_spesialis') is-invalid @enderror" name="spesialis_id" value="{{ $d->spesialis_id }}"/>
  
                  @error('spesialis_id')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="titledepan" class="form-label">Title Depan</label>
                  <select class="form-select" id="v_title_depan" name="title_depan" aria-label="Default select example">
                      <option selected>{{ $d->title_depan }}</option>
                      <option value="Dr.">Dr.</option>
                      <option value="Drg.">Drg.</option>
                  </select>
  
                  @error('title_depan')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="namadokter" class="form-label">Nama Dokter</label>
                  <input type="text" id="v_nama_dokter" class="form-control @error('nama_dokter') is-invalid @enderror" name="nama_dokter" value="{{ $d->nama_dokter }}" />
  
                  @error('nama_dokter')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="titlebelakang" class="form-label">Title Belakang</label>
                  <select class="form-select" id="v_title_belakang" name="title_belakang" aria-label="Default select example">
                      <option selected>{{ $d->title_belakang }}</option>
                      <option value="Sp.THT">Dokter Spesialis Penyakit Telingat, Hidung dan Tenggorokan</option>
                      <option value="Sp.OG">Dokter Spesialis Kandungan dan Kebidanan</option>
                      <option value="Sp.A">Dokter Spesialis Anak / Pediatrik</option>
                      <option value="Sp.PD">Dokter Spesialis Penyakit Dalam</option>
                      <option value="Sp.JP">Dokter Spesialis Jantung</option>
                      <option value="Sp.P">Dokter Spesialis Paru</option>
                      <option value="Sp.S">Dokter Spesialis Saraf</option>
                      <option value="Sp.M">Dokter Spesialis Mata</option>
                      <option value="Sp.KGA">Dokter Gigi Spesialis Kedokteran Gigi Anak</option>
                  </select>
  
                  @error('title_belakang')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="img_dokter" class="form-label" >Image Dokter</label>
                  <input type="file" class="form-control mb-4 @error('img_dokter') is-invalid @enderror" id="v_img_spesialis" name="img_dokter" value="{{ $d->img_dokter }}">
                  <img src="{{ asset('storage/' . $d->img_dokter) }}" alt="Gambar Dokter" width="100">
  
                  @error('img_spesialis')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="alamatdokter" class="form-label" >Alamat</label>
                  <input type="text" id="v_alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $d->alamat }}" />
  
                  @error('alamat')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="notelpon" class="form-label" >No. Tlp</label>
                  <input type="text" id="v_no_tlp" class="form-control @error('no_tlp') is-invalid @enderror" name="no_tlp" value="{{ $d->no_tlp }}" />
  
                  @error('no_tlp')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="tempatkerja" class="form-label" >Tempat Kerja</label>
                  <input type="text" id="v_tempat_kerja" class="form-control @error('tempat_kerja') is-invalid @enderror" name="tempat_kerja" value="{{ $d->tempat_kerja }}" />
  
                  @error('tempat_kerja')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="tahunlulus" class="form-label" >Tahun Lulus</label>
                  <input type="text" id="v_tahun_lulus" class="form-control @error('tahun_lulus') is-invalid @enderror" name="tahun_lulus" value="{{ $d->tahun_lulus }}" />
  
                  @error('tahun_lulus')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="tglmulaiaktif" class="form-label" >Tgl Mulai Aktif</label>
                  <input type="date" id="v_tgl_mulai_aktif" class="form-control @error('tgl_mulai_aktif') is-invalid @enderror" name="tgl_mulai_aktif" value="{{ $d->tgl_mulai_aktif }}" />
  
                  @error('tgl_mulai_aktif')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="alumnikampus" class="form-label" >Alumni Kampus</label>
                  <select class="form-select" id="v_alumni_kampus" name="alumni_kampus" aria-label="Default select example">
                      <option selected>{{ $d->alumni_kampus }}</option>
                      <option value="Unair">Universitas Airlangga</option>
                      <option value="UGM">Universitas Gajah Mada</option>
                      <option value="UMY">Universitas Muhammadiyah Yogyakarta</option>
                      <option value="UI">Universitas Indonesia</option>
                      <option value="UII">Universitas Islam Indonesia</option>
                      <option value="Unpad">Universitas Padjadjaran</option>
                      <option value="UB">Universitas Brawijaya</option>
                      <option value="UPH">Universitas Pelita harapan</option>
                      <option value="UNS">Universitas Sebelas Maret</option>
                      <option value="Undip">Universitas Diponegoro</option>
                  </select
  
                  @error('alumni_kampus')
                  <span >class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="noreg" class="form-label" >No Reg</label>
                  <input type="text" id="v_no_reg" class="form-control @error('no_reg') is-invalid @enderror" name="no_reg" value="{{ $d->no_reg }}" />
  
                  @error('no_reg')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="jnskelamin" class="form-label" >Jenis Kelamin</label>
                  <select class="form-select" id="v_jenis_kelamin" name="jenis_kelamin" aria-label="Default select example">
                      <option selected>{{ $d->jenis_kelamin }}</option>
                      <option value="L">L</option>
                      <option value="P">P</option>
                  </select>
  
                  @error('jenis_kelamin')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
  
              <div class="mb-3">
                  <label for="statusdokter" class="form-label" >Status</label>
                  <select class="form-select" id="v_status" name="status" aria-label="Default select example">
                      <option selected>{{ $d->status }}</option>
                      <option value="Panding">Panding</option>
                      <option value="Approve">Approve</option>
                      <option value="Reject">Reject</option>
                      <option value="Suspend">Suspend</option>
                  </select
  
                  @error('status')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
  </div>
  
  <script>
    CKEDITOR.replace( 'content' );
  </script>
  