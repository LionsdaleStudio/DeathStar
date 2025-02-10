@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">Column 1</th>
                            <th scope="col">Column 2</th>
                            <th scope="col">Column 3</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($stormtroopers as $stormtrooper)
                            <tr>
                                <td scope="row">{{ $stormtrooper->id }}</td>
                                <td>{{ $stormtrooper->name }}</td>
                                <td>{{ $stormtrooper->age }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>

    </div>
@endsection
