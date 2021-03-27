@extends('layout')
@section('content')
            <!--inicio content-->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Lista de productos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                            <li class="breadcrumb-item active">Lista de productos</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            
                           
                            <table class="table">
                            <thead class="thead-light">
                                <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">State</th>
                                <th scope="col">Create</th>
                                <th scope="col">Update</th>
                                
                                </tr>
                            </thead>
                            @foreach ($producto as $item)
                            <tbody>
                                
                                <tr>
                                <td>{{ $item->Id }}</td>
                                <td>{{ $item->Name }}</td>
                                <td>{{ $item->Price }}</td>
                                <td>{{ $item->State }}</td>
                                <td>{{ $item->Created_at }}</td>
                                <td>{{ $item->Updated_at }}</td>
                               
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                            <div> {{ $producto->links() }}   </div>
                            </div>
                        </div>
                    </div>
                </main>
                @endsection