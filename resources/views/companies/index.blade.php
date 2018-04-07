@extends('layouts.app')

@section('content')
    <h1>All Companies</h1>

    <div>
        <b-btn v-b-modal.modal1>Launch demo modal</b-btn>

        <!-- Modal Component -->
        <b-modal id="modal1" title="Bootstrap-Vue">
            <p class="my-4">Hello from modal!</p>
        </b-modal>
    </div>



    @auth
        <a class="btn btn-success" href="{{ route('companies.create') }}">Add new</a>
    @endauth
    <input type="text" placeholder="search" class="form-control">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Company Name</th>
            <th scope="col">City</th>
            <th scope="col">Year Founded</th>
            <th scope="col">Website</th>
        </tr>
        </thead>
        <tbody>
        @forelse($companies as $company)
            <tr scope="row">
                <td>
                    <a href="/companies/{{$company->id}}">{{ $company->name }}</a>
                </td>
                <td>
                    {{ $company->city }}
                </td>
                <td>
                    {{ $company->year_founded }}
                </td>
                <td>
                    {{ $company->website }}
                </td>
            </tr>
        @empty
            <tr>No companies to display</tr>
        @endforelse
        </tbody>
    </table>

    {{ $companies->links() }}
@endsection