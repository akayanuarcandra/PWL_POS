@extends('layouts.template')
@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>'
        <div class="card-tools">
            <a class="btn btn-sm btn-primary mt-1" href="{{ url('category/create') }}">Tambah</a>
        </div>
    </div>
    <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <table
            class="table table-bordered table-striped table-hover table-sm"
            id="table_category"
        >
            <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@push('js')
<script>
    $(document).ready(function () {
        const dataUser = $('#table_category').DataTable({
            serverSide: true,
            ajax: {
                "url": "{{ url('category/list') }}",
                "dataType": "json",
                "type": "GET",
            },
            columns: [
                {
                    data: "DT_RowIndex",
                    ClassName: "text-center",
                    orderable: false,
                    searchable: false
                }, {
                    data: "kategori_kode",
                    ClassName: "",
                    orderable: true,
                    searchable: true,
                }, {
                    data: "kategori_nama",
                    ClassName: "",
                    orderable: true,
                    searchable: true,
                }, {
                    data: "action",
                    ClassName: "",
                    orderable: false,
                    searchable: false,
                }
            ]
        });
    });

    $('#category_id').change(function () {
        dataUser.ajax.reload();
    });
</script>
@endpush
