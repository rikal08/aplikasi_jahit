<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data User</h4>
            </div>
            <form action="{{ url('data-user') }}" method="POST">
                @method('POST')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" placeholder="Masukan Nama" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Telepon</label>
                        <input type="text" class="form-control" placeholder="Masukan Telepon" name="telepon">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" placeholder="Masukan Alamat" name="alamat">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" placeholder="Masukan Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" placeholder="Masukan Password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="">Pilih Level</label>
                        <select name="level" id="" class="form-control">
                            <option value="1">Pemilik</option>
                            <option value="2">Karyawan</option>
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
