@extends('layouts.app')

@section('content')
    <h1>Edit {{ $company->name }}</h1>

    {!! Form::model($candidate, [
        'method' => 'PATCH',
        'action' => [ 'CompanyController@update', $company->id ]
        ]) !!}

        @include('companies.form', [
            'submitButtonText' => 'Edit Company'
            ])

    {!! Form::close() !!}
@endsection