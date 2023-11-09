
  <!-- Modal -->
  <div class="modal fade" id="update{{ $pasien->id_pasien }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Status Pasien <strong>{{ $pasien->nama_pasien }}</strong></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('pasien.update', $pasien->id_pasien) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="statuspasien" class="form-label" >Status</label>
              <select class="form-select" id="v_status" name="status" aria-label="Default select example">
                  <option selected>{{ $pasien->status }}</option>
                  <option value="active">Active</option>
                  <option value="suspend">Suspend</option>
              </select
  
              @error('status')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>
        </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <script>
    CKEDITOR.replace( 'content' );
  </script>