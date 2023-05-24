<div class="modal fade" id="edit{{ $item->id_ukuran }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Data Ukuran</h4>
            </div>
            <form action="{{ url('data-ukuran',$item->id_ukuran) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Ukuran</label>
                        <input type="text" value="{{ $item->ukuran }}" class="form-control" placeholder="Masukan Nama Pakaian" name="ukuran">
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi Ukuran</label>
                        <textarea name="deskripsi_ukuran" class="form-control" id="" cols="30" rows="10" placeholder="Masukan Deskripsi Ukuran">{{ $item->deskripsi_ukuran }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="number" value="{{ $item->harga }}" class="form-control" placeholder="Masukan Estimasi Selesai" name="harga">
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
