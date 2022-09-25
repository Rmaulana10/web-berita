<link rel="shortcut icon" href={{ asset('admin/img/svg/logo.svg') }} type="image/x-icon">
<!-- Custom styles -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/trix.css') }}">
<script type="text/javascript" src="{{ asset('js/trix.js') }}"></script>
<link rel="stylesheet" href={{ asset('admin/css/style.min.css') }}>
<link rel="stylesheet" href={{ asset('admin/css/style.css') }}>

@extends('Template.admin')
<input id="body" type="hidden" name="body">
<trix-editor input="body"></trix-editor>
@section('konten')

@endsection