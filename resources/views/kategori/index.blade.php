@extends('layout.app')

@section('subtitle','Kategori')
@section('content_header_title','Home')
@section('content_header_subtitle','Kategori')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Kategori</div>
            <div class="card-body">
                {{$dataTable->table()}}
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-primary" onclick="location.href='/kategori/create'">Create</button>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{$dataTable->scripts()}}
@endpush