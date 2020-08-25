@extends('layouts.adminlayout')

@section('title', 'Dashboard')
{{-- custom css jika ada --}}
@push('css-tambahan')

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

@endsection
{{-- end - Isi dari main content  --}}


{{-- custom javascript jika ada --}}
@push('js-tambahan')
{{-- tulis kode disini  --}}
@endpush
{{-- end - custom javascript jika ada --}}