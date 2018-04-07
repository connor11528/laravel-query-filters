@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/companies">All Companies</a></li>
        <li class="breadcrumb-item active">{{ $company->name }}</li>
    </ol>

    <h1>{{ $company->name }}</h1>
    <p>{{ $company->city }}</p>
    <p>{{ $company->year_founded }}</p>
    <p>{{ $company->website }}</p>

@endsection