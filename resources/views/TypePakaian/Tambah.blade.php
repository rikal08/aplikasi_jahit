<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data Type</h4>
            </div>
            <form action="{{ url('type-pakaian') }}" method="POST">
                @method('POST')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama Type Pakaian</label>
                        <input type="text" class="form-control" placeholder="Masukan Nama Status" name="nama_type">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
