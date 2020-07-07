@extends('layout/app')

@section('page-title',"Clothes")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Item</th>
                            <th scope="col">Price</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Collection Year</th>
                            <th scope="col">Created_at</th>
                            <th scope="col">Update_at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clothes as $cloth)
                            <tr>
                                <td>
                                    {{$cloth->id}}
                                </td>
                                <td>
                                    {{$cloth->item}}
                                </td>
                                <td>
                                    {{$cloth->price}}
                                </td>
                                <td>
                                    {{$cloth->brand}}
                                </td>
                                <td>
                                    {{$cloth->collection_year}}
                                </td>
                                <td>
                                    {{$cloth->created_at}}
                                </td>
                                <td>
                                    {{$cloth->update_at}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
