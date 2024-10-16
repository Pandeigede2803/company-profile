@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1 class="text-3xl font-bold text-gray-700">Contact Us</h1>
    <p class="mt-4 text-gray-600">Feel free to reach out to us through the form below:</p>

    <form action="#" method="POST" class="mt-6">
        <div class="mb-4">
            <label for="name" class="block text-gray-600">Name</label>
            <input type="text" id="name" class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-600">Email</label>
            <input type="email" id="email" class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div class="mb-4">
            <label for="message" class="block text-gray-600">Message</label>
            <textarea id="message" rows="5" class="w-full p-2 border border-gray-300 rounded"></textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Send Message</button>
    </form>
@endsection
