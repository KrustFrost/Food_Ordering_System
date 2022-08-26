@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{mix('css/tablestyle.css')}}">
<link rel="stylesheet" href="tablestyle.css">
<h3 class="text-center">All Orders</h3>
<div class="flex justify-center">
<div class="flex justify-between w-9/12">
<h1>Create</h1>
<h1>Search</h1>
</div>
</div>
<div id="tableadmin">
<table bgcolor="black">
    <tr bgcolor="skyblue">
        <th>Name</th>
        <th>Email</th>
        <th>Pizza</th>
        <th>Total Cost</th>
        <th>Quantity Pizza</th>
        <th>Credit Card Value</th>
        <th>Phone Number</th>
        <th>Actions</th>
    </tr>
    @foreach($admin as $admins)
    <tr bgcolor="lightgrey">
        <td>Peter Parker</td>
        <td>wallcrawl@gmail.com</td>
        <td>Margherita</td>
        <td>$18.00</td>
        <td>1</td>
        <td></td>
        <td>09801011963</td>
        <td>
            <button class="bg-blue-500">Edit</button>
            <button class="bg-red-500"  wire:click.prevent="destroy({{$student->id}})">Delete</button>
        </td>
    </tr>
    @endforeach
</table>
</div>
<script src="{{ mix('js/submit.js')}}"></script>
@endsection