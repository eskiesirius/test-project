@extends('layout.master')

@section('title', 'Show Student')

@section('content')
    This student is {{ $student->name }}
@endsection
