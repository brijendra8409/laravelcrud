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
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="d-flex justify-content-end my-3">
                        <a href="{{ route('list')}}" class="btn btn-dark text-white btn-lg">Back</a>
                    </div>
                    <div class="card border-0 shadow-lg">
                       
                        <div class="card-header">
                            <h3>Create Products</h3>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action=" {{ route('store')}}" method="POST">
                              @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label h5">Name</label>
                                    <input type="text" name="name" value="{{ old('name')}}" id="name" class="form-control @error('name')
                                        is-invalid
                                    @enderror">
                                    @error('name')
                                        <p class="invalid-feedback"> {{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="sku" class="form-label h5">Sku</label>
                                    <input type="text" name="sku" id="sku"  value="{{ old('sku')}}" class="form-control @error('sku')
                                        is-invalid
                                    @enderror">
                                    @error('sku')
                                     <p class="invalid-feedback"> {{ $message }}</p>
                                     @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label h5">Price</label>
                                    <input type="text" name="price" id="price" value="{{ old('price')}}" class="form-control @error('price')
                                        is-invalid
                                    @enderror">
                                    @error('price')
                                     <p class="invalid-feedback"> {{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3" >
                                    <label for="description" class="form-label h5">Description</label>
                                    <textarea name="description" id="description" value="{{ old('description')}}" class="form-control" cols="30" rows="5"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label h5">image</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                                <div class="mb-3 d-grid">
                                    <input type="submit" value="SUBMIT" class="btn btn-dark btn-lg">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </body>
</html>