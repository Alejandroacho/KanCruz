@extends('layouts.app')

@section('content')
<div class="container">           

     <ul class="list-group">
            <li class="list-group-item">Numero de reserva: {{$booking->id}}</li>
            <li class="list-group-item">Nombre: {{$booking->name}}</li> 
            <li class="list-group-item">Apellidos: {{$booking->lastname}}</li>
            <li class="list-group-item">Documento: {{$booking->document}}</li>  
            <li class="list-group-item">Email: {{$booking->email}}</li> 
            <li class="list-group-item">Telefono: {{$booking->phone}}</li> 
            <li class="list-group-item">Fecha de entrada: {{$booking->checkin}}</li> 
            <li class="list-group-item">Fecha de salida: {{$booking->checkout}}</li> 
            <li class="list-group-item">Numero de huespedes:</li>
            <li class="list-group-item">Desayuno: {{$booking->breakfast}}</li> 
            <li class="list-group-item">Mascotas: {{$booking->pets}}</li> 
        </ul>
</div>
@endsection
