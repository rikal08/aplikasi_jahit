<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data Pakaian</h4>
            </div>
            <form action="{{ url('data-pakaian') }}" method="POST" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama Pakaian</label>
                        <input type="text" class="form-control" placeholder="Masukan Nama Pakaian" name="nama_pakaian">
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Estimasi Selesai (Hari)</label>
                        <input type="number" class="form-control" placeholder="Masukan Estimasi Selesai" name="estimasi_selesai">
                    </div>
                    <div class="form-group">
                        <label for="">Foto</label>
                        <input type="file" class="form-control" placeholder="Masukan Nama Pakaian" name="foto">
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="number" class="form-control" placeholder="Masukan Harga" name="harga">
                    </div>
                    <div class="form-group">
                        <label for="">Type Pakaian</label>
                        <select name="type" class="form-control" id="">
                            @foreach ($type as $item)
                                <option value="{{ $item->id_type }}">{{ $item->nama_type }}</option>
                            @endforeach
                        </select>
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
