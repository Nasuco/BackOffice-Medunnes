
  <!-- Modal Show Dokter by id-->
  <div class="modal fade" id="show{{ $d->id_dokter }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Dokter <strong>{{ $d->title_depan }} {{ $d->nama_dokter }} {{ $d->title_belakang }}</strong></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="row">
                        <div class="col">
                        <p>ID Dokter</p>
                        </div>
                        <div class="col" id="s_id">
                        <button class="btn btn-outline-info" data-mdb-ripple-color="dark">{{ $d->id_dokter }}</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <p>ID User</p>
                        </div>
                        <div class="col">
                        <button class="btn btn-outline-info" data-mdb-ripple-color="dark">{{ $d->user_id }}</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <p>ID Spesialis</p>
                        </div>
                        <div class="col">
                        <button class="btn btn-outline-info" data-mdb-ripple-color="dark">{{ $d->spesialis_id }}</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <p>Nama Dokter</p>
                        </div>
                        <div class="col" id="s_nama_dokter">
                        <button class="btn btn-outline-info" data-mdb-ripple-color="dark">{{ $d->title_depan }} {{ $d->nama_dokter }} {{ $d->title_belakang }}</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <p>Foto Dokter</p>
                        </div>
                        <div class="col">
                        <button class="btn btn-outline-info" data-mdb-ripple-color="dark">
                            <img src="{{ asset('storage/' . $d->img_dokter) }}" alt="Gambar Dokter" width="100">
                        </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <p>Alamat</p>
                        </div>
                        <div class="col">
                        <button class="btn btn-outline-info" data-mdb-ripple-color="dark">{{ $d->alamat }}</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <p>No. Telepon</p>
                        </div>
                        <div class="col">
                        <button class="btn btn-outline-info" data-mdb-ripple-color="dark">{{ $d->no_tlp }}</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <p>Tempat Kerja</p>
                        </div>
                        <div class="col">
                        <button class="btn btn-outline-info" data-mdb-ripple-color="dark">{{ $d->tempat_kerja }}</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <p>Tahun Lulus</p>
                        </div>
                        <div class="col" id="s_id_spesialis">
                        <button class="btn btn-outline-info" data-mdb-ripple-color="dark">{{ $d->tahun_lulus }}</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <p>Tanggal Mulai Aktif</p>
                        </div>
                        <div class="col">
                        <button class="btn btn-outline-info" data-mdb-ripple-color="dark">{{ $d->tgl_mulai_aktif }}</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <p>Alumni Kampus</p>
                        </div>
                        <div class="col">
                        <button class="btn btn-outline-info" data-mdb-ripple-color="dark">{{ $d->alumni_kampus }}</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <p>Nomor Registrasi</p>
                        </div>
                        <div class="col">
                        <button class="btn btn-outline-info" data-mdb-ripple-color="dark">{{ $d->no_reg }}</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <p>Jenis Kelamin</p>
                        </div>
                        <div class="col">
                        <button class="btn btn-outline-info" data-mdb-ripple-color="dark">{{ $d->jenis_kelamin }}</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Status</p>
                        </div>
                        <div class="col" id="s_status">
                            <button class="btn btn-outline-info" data-mdb-ripple-color="dark">{{ $d->status }}</button>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
        </div>
    </div>


    <script>
        CKEDITOR.replace( 'content' );
    </script>