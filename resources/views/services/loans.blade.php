@extends('services.layout')

@section('servicesContent')
    <table class="table table-bordered table-striped w-100">
        <thead>
            <tr>
                <th class="bg-primary text-light">ID</th>
                <th class="bg-primary text-light">Service Category</th>
                <th class="bg-primary text-light">Service/Program</th>
                <th class="bg-primary text-light">Description</th>
                <th class="bg-primary text-light">Office/Unit In Charge</th>
                <th class="bg-primary text-light">Date Created</th>
                <th class="bg-primary text-light text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($loans as $loan)
                <tr class="text-start align-middle">
                    <td class="col">{{ $loan->id }}</td>
                    <td class="col">{{ $loan->category_name }}</td>
                    <td class="col">{{ $loan->service_name }}</td>
                    <td class="col">{{ $loan->service_desc }}</td>
                    <td class="col">{{ $loan->office_unit }}</td>
                    <td class="col">{{ $loan->created_at }}</td>
                    <td class="col text-center">
                        <button class="btn btn-outline-primary rounded-circle">
                            <i class="bi bi-pencil-square mx-auto"></i>
                        </button>
                        <button class="btn btn-outline-danger rounded-circle">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
