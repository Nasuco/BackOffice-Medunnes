<!-- Modal -->
{{-- <div class="modal fade" id="CreateMahasiswa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="CreatemahasiswaLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="CreatemahasiswaLabel">Tambah mahasiswa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="insert_dokter" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="userID" class="form-label">User ID</label>
              <input type="number" id="id_user" min="1" max="" class="form-control @error('id_user') is-invalid @enderror" name="user_id" value="{{ old('id_user') }}"/>
            
              @error('user_id')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            
            <div class="mb-3">
              <label for="poliID" class="form-label">Poli ID</label>
              <input type="number" id="id_poli" min="1" max="" class="form-control @error('id_poli') is-invalid @enderror" name="poli_id" value="{{ old('id_poli') }}"/>
            
              @error('poli_id')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
  
            <div class="mb-3">
              <label for="namamahasiswa" class="form-label">Nama Mahasiswa</label>
              <input type="text" id="nama_mahasiswa" class="form-control @error('nama_mahasiswa') is-invalid @enderror" name="nama_mahasiswa" value="{{ old('nama_mahasiswa') }}" />
  
              @error('nama_mahasiswa')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="mb-3">
              <label for="nim" class="form-label">NIM</label>
              <input type="text" id="nim" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" />
  
              @error('nim')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
  
            <div class="mb-3">
              <label for="customFile" class="form-label" >Image mahasiswa</label>
              <input type="file" class="form-control mb-4 @error('img_mahasiswa') is-invalid @enderror" id="img_mahasiswa" name="img_mahasiswa" value="{{ old('img_mahasiswa') }}"/>
  
              @error('img_mahasiswa')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
  
            <div class="mb-3">
              <label for="alamatmahasiswa" class="form-label" >Alamat</label>
              <input type="text" id="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" />
  
              @error('alamat')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
  
            <div class="mb-3">
              <label for="notelpon" class="form-label" >No. Tlp</label>
              <input type="text" id="no_tlp" class="form-control @error('no_tlp') is-invalid @enderror" name="no_tlp" value="{{ old('no_tlp') }}" />
  
              @error('no_tlp')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
  
            <div class="mb-3">
              <label for="tempatkerja" class="form-label" >Tempat Kerja</label>
              <input type="text" id="tempat_kerja" class="form-control @error('tempat_kerja') is-invalid @enderror" name="tempat_kerja" value="{{ old('tempat_kerja') }}" />
  
              @error('tempat_kerja')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
  
            <div class="mb-3">
              <label for="tahunlulus" class="form-label" >Tahun Lulus</label>
              <input type="text" id="tahun_lulus" class="form-control @error('tahun_lulus') is-invalid @enderror" name="tahun_lulus" value="{{ old('tahun_lulus') }}" />
  
              @error('tahun_lulus')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
  
            <div class="mb-3">
              <label for="tglmulaiaktif" class="form-label" >Tgl Mulai Aktif</label>
              <input type="date" id="tgl_mulai_aktif" class="form-control @error('tgl_mulai_aktif') is-invalid @enderror" name="tgl_mulai_aktif" value="{{ old('tgl_mulai_aktif') }}" />
  
              @error('tgl_mulai_aktif')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
  
            <div class="mb-3">
              <label for="alumnikampus" class="form-label" >Alumni Kampus</label>
              <select class="form-select" id="alumni_kampus" name="alumni_kampus" aria-label="Default select example">
                <option selected>Pilih Kampus</option>
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
              <input type="text" id="no_reg" class="form-control @error('no_reg') is-invalid @enderror" name="no_reg" value="{{ old('no_reg') }}" />
  
              @error('no_reg')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
  
            <div class="mb-3">
              <label for="jnskelamin" class="form-label" >Jenis Kelamin</label>
              <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" aria-label="Default select example">
                <option selected>Pilih Jenis kelamin</option>
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
              <label for="statusmahasiswa" class="form-label" >Status</label>
              <select class="form-select" id="status" name="status" aria-label="Default select example">
                <option selected>Pilih Status Mahasiswa</option>
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
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </div>
    </div>
  </div>
  
  <script>
    CKEDITOR.replace( 'content' );
  </script> --}}

<!-- Modal -->
<div class="modal fade" id="CreateDokter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="CreateDokterLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="CreateDokterLabel">Tambah Dokter</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="insert_dokter" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="userID" class="form-label">User ID</label>
            <input type="number" id="id_user" min="1" max="" class="form-control @error('id_user') is-invalid @enderror" name="user_id" value="{{ old('id_user') }}"/>
          
            @error('user_id')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          
          <div class="mb-3">
            <label for="spesialisID" class="form-label">Spesialis ID</label>
            <input type="number" id="id_spesialis" min="1" max="" class="form-control @error('id_spesialis') is-invalid @enderror" name="spesialis_id" value="{{ old('id_spesialis') }}"/>
          
            @error('spesialis_id')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="titledepan" class="form-label">Title Depan</label>
            <select class="form-select" name="title_depan" aria-label="Default select example">
              <option selected>Pilih Title Depan</option>
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
            <input type="text" id="nama_dokter" class="form-control @error('nama_dokter') is-invalid @enderror" name="nama_dokter" value="{{ old('nama_dokter') }}" />

            @error('nama_dokter')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="titlebelakang" class="form-label">Title Belakang</label>
            <select class="form-select" id="title_belakang" name="title_belakang" aria-label="Default select example">
              <option selected>Pilih Title Belakang</option>
              <option value="Sp.THT">Dokter Spesialis Penyakit Telinga , Hidung dan Tenggorokan</option>
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
            <label for="customFile" class="form-label" >Image Dokter</label>
            <input type="file" class="form-control mb-4 @error('img_dokter') is-invalid @enderror" id="img_dokter" name="img_dokter" value="{{ old('img_dokter') }}"/>

            @error('img_dokter')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="alamatdokter" class="form-label" >Alamat</label>
            <input type="text" id="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" />

            @error('alamat')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="notelpon" class="form-label" >No. Tlp</label>
            <input type="text" id="no_tlp" class="form-control @error('no_tlp') is-invalid @enderror" name="no_tlp" value="{{ old('no_tlp') }}" />

            @error('no_tlp')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="tempatkerja" class="form-label" >Tempat Kerja</label>
            <input type="text" id="tempat_kerja" class="form-control @error('tempat_kerja') is-invalid @enderror" name="tempat_kerja" value="{{ old('tempat_kerja') }}" />

            @error('tempat_kerja')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="tahunlulus" class="form-label" >Tahun Lulus</label>
            <input type="text" id="tahun_lulus" class="form-control @error('tahun_lulus') is-invalid @enderror" name="tahun_lulus" value="{{ old('tahun_lulus') }}" />

            @error('tahun_lulus')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="tglmulaiaktif" class="form-label" >Tgl Mulai Aktif</label>
            <input type="date" id="tgl_mulai_aktif" class="form-control @error('tgl_mulai_aktif') is-invalid @enderror" name="tgl_mulai_aktif" value="{{ old('tgl_mulai_aktif') }}" />

            @error('tgl_mulai_aktif')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="alumnikampus" class="form-label" >Alumni Kampus</label>
            <select class="form-select" id="alumni_kampus" name="alumni_kampus" aria-label="Default select example">
              <option selected>Pilih Kampus</option>
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
            <input type="text" id="no_reg" class="form-control @error('no_reg') is-invalid @enderror" name="no_reg" value="{{ old('no_reg') }}" />

            @error('no_reg')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="jnskelamin" class="form-label" >Jenis Kelamin</label>
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" aria-label="Default select example">
              <option selected>Pilih Jenis kelamin</option>
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
            <select class="form-select" id="status" name="status" aria-label="Default select example">
              <option selected>Pilih Status Dokter</option>
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
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </div>
  </div>
</div>

<script>
  CKEDITOR.replace( 'content' );
</script>