@extends('abc::template')

@section('content')
    <h1>Привет, {{ $name }}!</h1>
    {{ route('pages.index')  }}
@endsection

