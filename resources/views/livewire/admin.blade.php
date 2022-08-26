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
        <td>{{$admins->ordered_by}}</td>
        <td>{{$admins->userb->email}}</td>
        <td>{{$admins->Pizza}}</td>
        <td>${{$admins->total_cost}}</td>
        <td>{{$admins->quantity_pizza}}</td>
        <td>{{$admins->userb->credit_card_value}}</td>
        <td>{{$admins->userb->phone}}</td>
        <td>
            <div>
            <button class="bg-blue-500">Edit</button>
            <button wire:click="delete({{$admins->id}})" class="btn btn-sm btn-outline-danger py-0">Delete</button>
            </div>
        </td>
    </tr>
    @endforeach
</table>
</div>
<script src="{{ mix('js/submit.js')}}"></script>

@endsection