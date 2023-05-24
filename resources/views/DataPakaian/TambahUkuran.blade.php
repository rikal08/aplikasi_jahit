<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data Ukuran</h4>
            </div>
            <form action="{{ url('add-ukuran-pakaian') }}" method="POST" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <p>Pilihan ukuran untuk {{ $pakaian->nama_pakaian }}</p>
                        <label for="">Ukuran</label>
                        <input type="text" name="id_pakaian" hidden value="{{ $pakaian->id_pakaian }}">
                        <select name="id_ukuran" id="" class="form-control">
                            @foreach ($ukuran as $item)
                                <option value="{{ $item->id_ukuran }}">{{ $item->ukuran }}</option>
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
