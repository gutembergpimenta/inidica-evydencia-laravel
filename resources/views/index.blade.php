@extends('template.index')

@section('title', 'Home')
@section('links')
@endsection

@section('content')
    <img src="{{ asset('assets/qrcode.jpg') }}" alt="QRCODE" id="img-qrcode">
@endsection
