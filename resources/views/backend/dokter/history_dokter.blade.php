
  <!-- Modal Show Dokter by id-->
  <div class="modal fade" id="history{{ $d->id_dokter }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">History Chat Dokter <strong>{{ $d->nama_dokter }}</strong> dengan Pasien</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-header">
                <h4 class="modal-title fs-5" id="exampleModalLabel">Jumlah Konsultasi <strong class="fs-4">{{ $d->konsultasi->count() }}</strong></h4>
            </div>
            <div class="modal-body">
                @foreach ($d->konsultasi as $k)
                            <div class="row pt-3">
                                <div class="col">
                                <p>ID Pasien</p>
                                </div>
                                <div class="col" id="s_id">
                                <button class="btn btn-outline-danger" data-mdb-ripple-color="dark">{{ $k->pasien_id }}</button>
                                </div>
                            </div> 
                    <div class="row">
                        <div class="col">
                        <p>ID Konsultasi</p>
                        </div>
                        <div class="col">
                        <button class="btn btn-outline-info" data-mdb-ripple-color="dark">{{ $k->id_konsultasi }}</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <p>Konsultasi Pasien</p>
                        </div>
                        <div class="col">
                        <button class="btn btn-outline-info" data-mdb-ripple-color="dark">{{ $k->topik }}</button>
                        </div>
                    </div>
                @endforeach
                    

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
        </div>
    </div>


    <script>
        CKEDITOR.replace( 'content' );
    </script>