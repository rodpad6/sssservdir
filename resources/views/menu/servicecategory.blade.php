@extends('layouts.app')

@section('content')
    <div class="my-5">
            <div class="card-body">
                <table class="table table-bordered table-striped w-100">
                    <thead>
                        <tr>
                            <th class="bg-primary text-light">ID</th>
                            <th class="bg-primary text-light">Service Category</th>
                            <th class="bg-primary text-light">Description</th>
                            <th class="bg-primary text-light">Date Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr class="text-start align-middle">
                                <td class="col">{{ $category->category_cd }}</td>
                                <td class="col">{{ $category->category_name }}</td>
                                <td class="col">{{ $category->category_desc }}</td>
                                <td class="col">{{ $category->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection
