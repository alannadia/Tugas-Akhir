<!-- list pelanggaran edit -->
<div class="modal fade" tabindex="-1" role="dialog" id="listPelanggaran">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{ route('listpelanggaran.store') }}">
        @csrf
        <div class="form-group">
          <label>Keterangan Pelanggaran</label>
          <input type="text" class="form-control  <?php if ($errors->first('keterangan') != null){ echo "is-invalid";}else{ echo"";}?>" name="keterangan" value="">
          @if($errors->first('keterangan') != null)
          <div class="invalid-feedback">
          {{ $errors->first('keterangan') }}
          </div>
          @endif
        </div>
        <div class="form-group">
          <label>Score</label>
          <input type="number" class="form-control  <?php if ($errors->first('score') != null){ echo "is-invalid";}else{ echo"";}?>" value="0" max="250" min="0" name="score">
           @if($errors->first('score') != null)
          <div class="invalid-feedback">
          {{ $errors->first('score') }}
          </div>
          @endif
        </div>
        </form>
      </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!--list pelanggaran edit -->
