<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data Ukuran</h4>
            </div>
            <form action="{{ url('ukuran') }}" method="POST">
                @method('POST')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Pilih Type Pakaian</label>
                        <select name="id_type" class="form-control" id="">
                            @foreach ($type as $item)
                                <option value="{{ $item->id_type }}">{{ $item->nama_type }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Ukuran</label>
                        <input type="text" class="form-control" placeholder="Masukan Nama Status" name="ukuran">
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi Ukuran</label>
                        <textarea name="deskripsi_ukuran" class="form-control" id="" cols="30" rows="10"></textarea>
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
