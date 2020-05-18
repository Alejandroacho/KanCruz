@extends('Panel.Layout.index')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                
                    <h3 class="box-title">Numero de reserva: {{$booking->id}}</h3>

                </div>
           
                <div class="box-body">
                    <tr>
                        <td>
                            <ul class="list-group">
                                <li class="list-group-item">Nombre: {{$booking->name}}</li> 
                                <li class="list-group-item">Apellidos: {{$booking->lastname}}</li>
                                <li class="list-group-item">Documento: {{$booking->document}}</li>  
                                <li class="list-group-item">Email: {{$booking->email}}</li> 
                                <li class="list-group-item">Telefono: {{$booking->phone}}</li>
                                <li class="list-group-item">Habitacion:</li> 
                                <li class="list-group-item">Fecha de entrada: {{$booking->checkin}}</li> 
                                <li class="list-group-item">Fecha de salida: {{$booking->checkout}}</li> 
                                <li class="list-group-item">Numero de huespedes:</li>
                                <li class="list-group-item">Desayuno: {{$booking->breakfast}}</li> 
                                <li class="list-group-item">Mascotas: {{$booking->pets}}</li> 
                            </ul>
                        </td>
                    </tr>
                </div>
            </div>
        </div>
    </section>    
@endsection
