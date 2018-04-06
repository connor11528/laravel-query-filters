@extends('layouts.app')

@section('content')
    <h1>All Companies</h1>

    <a class="btn btn-success" href="{{ route('companies.create') }}">Add new</a>
    <ul>
        @forelse($companies as $company)
            <li>{{ $company->name }}</li>
        @empty
            <p>No companies to display</p>
        @endforelse
    </ul>

    {{ $companies->links() }}
@endsection