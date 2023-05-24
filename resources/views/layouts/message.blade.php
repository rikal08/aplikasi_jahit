<div class="row">
    <div class="col-lg-12">
        @if (session('simpan'))
            <div class="alert alert-success">
                {{ session('simpan') }}
            </div>
        @endif
        @if (session('hapus'))
            <div class="alert alert-danger">
                {{ session('hapus') }}
            </div>
        @endif
        @if (session('edit'))
            <div class="alert alert-info">
                {{ session('edit') }}
            </div>
        @endif
    </div>
</div>
