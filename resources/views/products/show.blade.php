<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-image {
            max-width: 300px;
            max-height: 300px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('products.index') }}">Products</a>
            <div class="navbar-nav ms-auto">
                <span class="nav-item nav-link text-light me-3">Welcome, {{ Auth::user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-link text-light">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Product Details</h4>
                    </div>
                    <div class="card-body">
                        @if($product->image)
                            <div class="mb-4 text-center">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-image img-thumbnail">
                            </div>
                        @endif
                        <div class="mb-3">
                            <label class="form-label"><strong>Product Code:</strong></label>
                            <p>{{ $product->code }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><strong>Product Name:</strong></label>
                            <p>{{ $product->name }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><strong>Quantity:</strong></label>
                            <p>{{ $product->quantity }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><strong>Price:</strong></label>
                            <p>${{ number_format($product->price, 2) }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><strong>Description:</strong></label>
                            <p>{{ $product->description }}</p>
                        </div>
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
