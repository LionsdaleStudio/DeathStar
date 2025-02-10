@extends('layouts.app')

@section('content')
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
                        <td scope="row">{{ $stormtrooper->name }}</td>
                        <td>R1C2</td>
                        <td>R1C3</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
@endsection
