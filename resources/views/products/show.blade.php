@extends('layouts.app')
@push('styles')
<style>
    .product-details-card {
        border-left: 6px solid #0dcaf0;
        box-shadow: 0 4px 24px rgba(0,0,0,0.07);
        background: #fff;
        border-radius: 16px;
        overflow: hidden;
    }
    .product-image {
        max-width: 320px;
        max-height: 340px;
        object-fit: cover;
        border-radius: 16px;
        border: 2px solid #e3e3e3;
        box-shadow: 0 2px 16px rgba(13,202,240,0.10);
        background: #f8fafc;
        transition: transform 0.2s;
    }
    .product-image:hover {
        transform: scale(1.04);
        box-shadow: 0 4px 32px rgba(13,202,240,0.18);
    }
    .product-details-row {
        display: flex;
        flex-direction: column;
    }
    .product-details-info {
        background: #f6fafd;
        border-radius: 12px;
        padding: 2rem 1.5rem 2rem 2rem;
        margin-bottom: 1rem;
        flex: 2;
    }
    .product-details-image {
        display: flex;
        align-items: center;
        justify-content: center;
        flex: 1;
        background: #f8fafc;
        border-radius: 12px;
        padding: 2rem 0;
    }
    .product-label {
        color: #222c37;
        font-weight: 600;
        letter-spacing: 0.5px;
    }
    .product-value {
        font-size: 1.1rem;
        color: #181818;
        font-weight: 500;
    }
    .product-price-badge {
        font-size: 1.2rem;
        font-weight: 700;
        background: linear-gradient(90deg, #0dcaf0 60%, #31d2f2 100%);
        color: #fff;
        border-radius: 8px;
        padding: 0.5rem 1.2rem;
        box-shadow: 0 2px 8px rgba(13,202,240,0.10);
        margin-bottom: 1.2rem;
        display: inline-block;
    }
    @media (min-width: 768px) {
        .product-details-row {
            flex-direction: row;
        }
        .product-details-info {
            margin-bottom: 0;
            margin-right: 2rem;
        }
    }
</style>
@endpush
@section('content')
<div class="product-details-card card border-0 shadow-sm mb-4">
    <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
        <h4 class="mb-0"><i class="bi bi-info-circle"></i> Product Details</h4>
        <a href="{{ route('products.index') }}" class="btn btn-light fw-bold"><i class="bi bi-arrow-left"></i> Back</a>
    </div>
    <div class="card-body product-details-row">
        <div class="product-details-info">
            <div class="product-price-badge mb-4">
                <i class="bi bi-currency-dollar"></i> ${{ number_format($product->price, 2) }}
            </div>
            <div class="mb-3 row align-items-center">
                <div class="col-5 product-label">Product Code:</div>
                <div class="col-7 product-value">{{ $product->code }}</div>
            </div>
            <div class="mb-3 row align-items-center">
                <div class="col-5 product-label">Product Name:</div>
                <div class="col-7 product-value">{{ $product->name }}</div>
            </div>
            <div class="mb-3 row align-items-center">
                <div class="col-5 product-label">Quantity:</div>
                <div class="col-7 product-value">{{ $product->quantity }}</div>
            </div>
            <div class="mb-3 row align-items-center">
                <div class="col-5 product-label">Description:</div>
                <div class="col-7 product-value">{{ $product->description }}</div>
            </div>
            <div class="d-flex justify-content-end mt-4">
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success me-2"><i class="bi bi-pencil"></i> Edit</a>
                <a href="{{ route('products.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back</a>
            </div>
        </div>
        <div class="product-details-image mt-4 mt-md-0">
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
            @else
                <img src="https://via.placeholder.com/320x320?text=No+Image" alt="No image" class="product-image">
            @endif
        </div>
    </div>
</div>
@endsection
