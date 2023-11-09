<!-- Modal -->
<div class="modal fade" id="rating{{ $d->id_mahasiswa }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="CreatemahasiswaLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="CreatemahasiswaLabel">Beri Rating {{ $d->nama_mahasiswa }}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-header">
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('dokter.rating.store', $d->id_mahasiswa) }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="profesionalisme" class="form-label">Profesionalisme</label>
                    <input type="number" id="profesionalisme" min="1" max="5" class="form-control @error('profesionalisme') is-invalid @enderror" name="profesionalisme" value="{{ old('profesionalisme') }}" required/>
                
                    @error('profesionalisme')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="konten" class="form-label">Konten</label>
                    <input type="number" id="konten" min="1" max="5" class="form-control @error('konten') is-invalid @enderror" name="konten" value="{{ old('konten') }}" required/>
                
                    @error('konten')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="komunikasi" class="form-label">Komunikasi</label>
                    <input type="number" id="komunikasi" min="1" max="5" class="form-control @error('komunikasi') is-invalid @enderror" name="komunikasi" value="{{ old('komunikasi') }}" required/>
                
                    @error('komunikasi')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="globalrating" class="form-label">Global Rating</label>
                    <input type="number" id="global_rating" min="1" max="5" class="form-control @error('global_rating') is-invalid @enderror" name="global_rating" value="{{ old('global_rating') }}" required/>
                
                    @error('global_rating')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Feedback" class="form-label">Feedback</label>
                    <input type="text" id="feedback" class="form-control @error('feedback') is-invalid @enderror" name="feedback" value="{{ old('feedback') }}" required/>
                
                    @error('feedback')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
            @if ($d->rating->count() > 0)
                <h6 class="card-subtitle mb-2 text-muted">Riwayat Penilaian:</h6>
                <ul class="list-group">
                    @foreach ($d->rating as $r)
                        <li class="list-group-item">
                            <p>Profesionalisme: {{ $r->profesionalisme }}</p>
                            <p>Konten: {{ $r->konten }}</p>
                            <p>Komunikasi: {{ $r->komunikasi }}</p>
                            <p>Global Rating: {{ $r->global_rating }}</p>
                            <p>Feedback: {{ $r->feedback }}</p>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="card-text">Belum ada riwayat rating.</p>
            @endif
        </div>
      </div>
    </div>
  </div>