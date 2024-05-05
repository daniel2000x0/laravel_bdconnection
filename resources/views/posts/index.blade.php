@extends('layouts.app')
@section('title')
laravel 12
@endsection
@push('css')
<style>
    body{
    background-color: #f3f3f3;
}
</style>
@endpush


@section('content')


<h1 class="max-w-4xl max-auto px-4">Show method :{{$post}} </h1>

<x-alert type="info" class="mb-4"> 
    <x-slot name="title">
titulo
    </x-slot>
       alerts connection
</x-alert>
@if(false)
<p>Contenido  de prueva</p>
@endif



@endsection
    <h1>indexs</h1>
