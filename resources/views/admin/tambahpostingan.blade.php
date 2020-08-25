@extends('layouts.adminlayout')

@section('title', 'Tambah Postingan')

{{-- custom css jika ada --}}
@push('css-tambahan')
<link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet"
    type="text/css" />
@endpush
{{-- end - custom css jika ada --}}


{{-- membuat menu sidebar disini  --}}
@section('sidebar-menu')
<li>
    <a href="{{ url('/admin') }}">
        <i class="icon-speedometer"></i><span>Dashboard</span>
    </a>
</li>
<li>
    <a href="{{ url('/admin/tambah-post') }}">
        <i class="icon-speedometer"></i><span>Tambah Postingan</span>
    </a>
</li>
@endsection
{{-- end - membuat menu sidebar disini  --}}


{{-- Isi dari main content  --}}
@section('main-content')

<div class="col-md-10 mt-3">
    <div class="card m-b-30">
        <div class="card-header bg-white">
            <h5 class="card-title text-black">Tambah Artikel</h5>
        </div>
        <div class="card-body">
            <form action="{{ url('/tambahpost') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul Berita : </label>
                    <input type="text" name="post_judul" class="form-control" id="judul" aria-describedby="judulHelp">
                </div>

                <div class="form-group">
                    <label for="slug">Slug Berita : </label>
                    <input type="text" name="post_slug" class="form-control" id="slug" aria-describedby="slugHelp">
                </div>

                <textarea class="" name="post_isi"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
{{-- end - Isi dari main content  --}}


{{-- custom javascript jika ada --}}
@push('js-tambahan')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js">
</script>
<script>
    new FroalaEditor('textarea');
</script>
@endpush
{{-- end - custom javascript jika ada --}}