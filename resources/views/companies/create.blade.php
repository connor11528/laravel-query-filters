@extends('layouts.app')

@section('content')
    <h1>Create new company</h1>

    {!! Form::open(['action' => 'CompanyController@store']) !!}
        @include('companies.form', ['submitButtonText' => 'Add Company'])
    {!! Form::close() !!}

@endsection