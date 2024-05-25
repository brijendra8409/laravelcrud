<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laravel 11 crud App</title>
  </head>
  <body>
        <div class="bg-dark py-3">
            <h3 class="text-white text-center">Laravel 11 CRUD Application</h3>
        </div>

        <div class="container my-3">
            @if (Session::has('success'))
            <div class="alert alert-success">
               {{ Session::get('success')}}
            </div>
            @endif
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="d-flex justify-content-end my-3">
                        <a href="{{ route('create')}}" class="btn btn-dark text-white btn-lg">Create</a>
                    </div>
                    <div class="card border-0">
                        <div class="card-body p-0  ">
                            <div class="table-responsive">
                                <table class="table table-bordered  table-striped">
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Sku</th>
                                        <th>Price</th>
                                        <th>Created_At</th>
                                        <th>Action</th>
                                     
                                    </tr>
                                    @if ($products->isNotEmpty())
                                        @foreach ($products as $product )
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td>@if ($product->image != "")
                                                    <img width="50" height="50" src="{{ asset('upload/products/'.$product->image )}}" alt="">
                                                @endif</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->sku }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>{{ $product->created_at }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning">Edit</a>
                                                    <a href="#" class="btn btn-danger">Delete</a>
                                                </td>
                                                
                                            </tr>
                                        @endforeach
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </body>
</html>

