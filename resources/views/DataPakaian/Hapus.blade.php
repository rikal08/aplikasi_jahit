<div class="modal fade" id="hapus{{ $item->id_jenis_pakaian }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus Data Pakaian</h4>
            </div>
            <form action="{{ url('data-pakaian',$item->id_jenis_pakaian) }}" method="POST">
                @method('DELETE')
                @csrf
                <div class="modal-body">
                    <p>yakin untuk menghapus Data secara permanent?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Hapus</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
