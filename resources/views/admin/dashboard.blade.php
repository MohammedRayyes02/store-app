@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-8">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-4xl font-bold text-white">Admin Dashboard</h1>
            <a href="{{ route('admin.products.create') }}"
                class="bg-green-500 text-white py-2 px-6 rounded-lg shadow-md hover:bg-green-600 transition duration-300">
                + Add Product
            </a>
        </div>

        <!-- Statistics Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
            <!-- Total Products -->
            <div class="p-6 bg-white rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Total Products</h2>
                <p class="text-4xl font-bold text-blue-500">{{ $totalProducts }}</p>
            </div>

            <!-- Total Suppliers -->
            <div class="p-6 bg-white rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Total Suppliers</h2>
                <p class="text-4xl font-bold text-green-500">{{ $totalSuppliers }}</p>
            </div>

            <!-- Total Orders (Placeholder) -->
            <div class="p-6 bg-white rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Total Orders</h2>
                <p class="text-4xl font-bold text-purple-500">{{ $totalOrders ?? 0 }}</p>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="mt-6">
            <h2 class="text-2xl font-semibold text-white mb-4">Recent Activities</h2>
            <ul class="bg-white p-6 rounded-lg shadow-lg divide-y divide-gray-200">
                <li class="py-4">
                    <span class="text-gray-800">New supplier added - <strong>Acme Corp</strong></span>
                    <span class="text-gray-500 text-sm ml-2">2 hours ago</span>
                </li>
                <li class="py-4">
                    <span class="text-gray-800">Product updated - <strong>Wireless Mouse</strong></span>
                    <span class="text-gray-500 text-sm ml-2">4 hours ago</span>
                </li>
                <li class="py-4">
                    <span class="text-gray-800">Order shipped - <strong>#1024</strong></span>
                    <span class="text-gray-500 text-sm ml-2">1 day ago</span>
                </li>
            </ul>
        </div>
    </div>
@endsection
