@extends('layouts.app')

@section('content')

@if (session()->get('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{session()->get('success')}} 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
         </button>

        </div>
    @endif
        
    <div class="col-10 m-auto">
        <h1>Tus habitaciones</h1><hr>
    </div>
    
    <div class="col-10 m-auto">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th><h3>Habitaciones</h3></th>
                    <th><h3>Descripción</h3></th>
                    <th><h3>Servicios</h3></th>
                    <th><h3>Precio</h3></th>
                    <th><h3>Disponibilidad</h3></th>
                    <th colspan="3"><h3>Acciones</h3></th>
                </tr>
            </thead>

            @foreach($rooms as $room)
                <tbody>
                    <tr class=>
                        <td><?php echo $room->name;?></td>  
                        <td><?php echo $room->description;?></td>  
                        <td><?php echo $room->services;?></td>  
                        <td><?php echo $room->price;?></td>  
                        <td>
                            @if ($room->available==1)
                                {{'Disponible'}}
                            @endif
                            @if ($room->available==0)
                                {{'No Disponible'}}
                            @endif
                        </td>  

                        <td>
                            <a style="color:white" href="{{Route('room.edit',$room->id)}}" class="btn btn-info" role="button">Editar</a>
                        </td>

                        <td>
                            <form action="{{route('room.destroy', $room->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input 
                                    type="submit" 
                                    value="Eliminar" 
                                    class="btn btn-danger"
                                    onclick="return confirm ('¿Estás seguro de eliminarlo?')">
                            </form>
                    </tr>
                 
                </tbody>     
                
            @endforeach

        </table>
        
        <div class="card-footer">
            <a href="{{Route('room.create')}}" class="btn btn-secondary">Añadir nueva habitación</a>
        </div>
        
    </div>
@endsection
