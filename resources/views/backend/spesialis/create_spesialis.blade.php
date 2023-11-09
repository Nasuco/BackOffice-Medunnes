
  <!-- Modal -->
  <form method="POST" action="{{ route('spesialis.store') }}" enctype="multipart/form-data">
    @csrf
    @method('GET')
    <div class="modal fade" id="CreateSpesialis" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="CreatespesialisLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="CreateSpesialisLabel">Tambah Spesialis</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form>
                  <!-- Name input -->
                  <div class="form-outline mb-4">
                      <input type="text" id="nama_spesialis" class="form-control @error('nama_spesialis') is-invalid @enderror" name="nama_spesialis" />
                      <label class="form-label" for="form5Example1">Nama Spesialis</label>

                      @error('nama_spesialis')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                
                  <!-- Image input -->    
                  <label class="form-label" for="img_spesialis">Image spesialis</label>
                  <input type="file" class="form-control @error('img_spesialis') is-invalid @enderror" id="img_spesialis" name="img_spesialis" value="{{ old('img_dokter') }}" />

                  @error('img_spesialis')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </form>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Create</button>
          </div>
        </div>
      </div>
    </div>
  </form>

  <script>
    CKEDITOR.replace( 'content' );
  </script>