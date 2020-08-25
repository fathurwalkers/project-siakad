@extends('layouts.adminlayout')

{{-- custom css jika ada --}}
@push('css-tambahan')
{{-- tulis kode disini  --}}
@endpush
{{-- end - custom css jika ada --}}


{{-- membuat menu sidebar disini  --}}
@section('sidebar-menu')
{{-- tulis kode disini  --}}
@endsection
{{-- end - membuat menu sidebar disini  --}}


{{-- Isi dari main content  --}}
@section('main-content')
{{-- tulis kode disini  --}}
@endsection
{{-- end - Isi dari main content  --}}


{{-- custom javascript jika ada --}}
@push('js-tambahan')
{{-- tulis kode disini  --}}
@endpush
{{-- end - custom javascript jika ada --}}