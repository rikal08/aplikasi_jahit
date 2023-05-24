<div class="modal fade" id="edit{{ $item->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Data User</h4>
            </div>
            <form action="{{ url('data-user',$item->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" value="{{ $item->name }}" class="form-control" placeholder="Masukan Nama" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Telepon</label>
                        <input type="text" value="{{ $item->telepon }}" class="form-control" placeholder="Masukan Telepon" name="telepon">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" value="{{ $item->alamat }}" class="form-control" placeholder="Masukan Alamat" name="alamat">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input readonly value="{{ $item->email }}" type="email" class="form-control" placeholder="Masukan Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="">New Password</label>
                        <input type="text" class="form-control" placeholder="Masukan Password" name="password">
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
