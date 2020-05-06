@extends('layouts.app')

@section('content')

<div class="text-center mt-3 mb-4 container">
    @if (session()->get('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{session()->get('success')}} 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
         </button>

        </div>
    @endif
</div>


<div class="col-10 m-auto">
    <table class="table">
        <thead class="thead-dark">
          <tr>
                <th><h3>Reserva</h3></th>
                <th><h3>Nombre</h3></th>
                <th><h3>Apellido</h3></th>
                <th><h3>Fecha de entrada</h3></th>
                <th><h3>Fecha de salida</h3></th>
                <th><h3>Accion<h3></th>
            </tr>
        </thead>
            @foreach($bookings as $booking)
               <tbody>
                    <tr class="text-center">
                    <th scope="row">{{$booking->id}}</th>
                    <td>{{$booking->name}}</td>
                    <td>{{$booking->lastname}}</td>
                    <td>{{$booking->checkin}}</td>
                    <td>{{$booking->checkout}}</td>
                    <td>
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            
                        <div class="btn-group mr-2" role="group" aria-label="First group">
                                <a href="{{route('booking.show', $booking->id)}}" class="btn btn-secondary">Detalles</a>
                            </div>
                            
                            <div class="btn-group mr-2" role="group" aria-label="Second group">
                                <a href="{{route('booking.edit', $booking->id)}}" class="btn btn-warning">Editar</a>
                            </div>

                            <div class="btn-group mr-2" role="group" aria-label="Third group">
                                <form action="{{route('booking.destroy', $booking->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Borrar" class="btn btn-danger">
                                </form>
                            </div>
                        </div>
                    </td>
                    </tr>
                </tbody>
            @endforeach
    </table>
    <div class="card-footer">
            <a href="{{Route('booking.create')}}" class="btn btn-secondary">Añadir nueva reserva</a>
        </div>
</div>

@endsection
