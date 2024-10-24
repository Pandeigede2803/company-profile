@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')


    <!-- Include the Employee Management view -->
    @include('employees.index')  <!-- This includes the employees/index.blade.php -->
@endsection
