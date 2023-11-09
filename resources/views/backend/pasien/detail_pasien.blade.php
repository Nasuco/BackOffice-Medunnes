{{-- view data by id
  <!-- Modal -->
    <div class="modal fade" id="ReadPasien" role="dialog" aria-labelledby="ReadPasienLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="ReadPasienLabel">Detail Pasien</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <div class="row">
                <div class="col">
                <h5>Nama Pasien</h5>
                </div>
                <div class="col">
                <h5>{{ $pasien->nama_pasien }}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <h5>Alamat</h5>
                </div>
                <div class="col">
                <h5>{{ $pasien->alamat }}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <h5>No. Telepon</h5>
                </div>
                <div class="col">
                <h5>{{ $pasien->no_tlp }}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <h5>Umur</h5>
                </div>
                <div class="col">
                <h5>{{ $pasien->TB }}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <h5>Jenis Kelamin</h5>
                </div>
                <div class="col">
                <h5>{{ $pasien->jenis_kelamin }}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <h5>Status</h5>
                </div>
                <div class="col">
                <h5>{{ $pasien->status }}</h5>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div> --}}