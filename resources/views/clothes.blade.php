@extends('layout/app')

@section('page-title',"Clothes")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Item</th>
                        <th scope="col">Price</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Collection Year</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clothes as $vestito)
                        <tr>
                            <td>
                                {{$vestito->id}}
                            </td>
                            <td>
                                {{$vestito->item}}
                            </td>
                            <td>
                                {{$vestito->price}}
                            </td>
                            <td>
                                {{$vestito->brand}}
                            </td>
                            <td>
                                {{$vestito->collection_year}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </div>
        </div>
    </div>
@endsection
