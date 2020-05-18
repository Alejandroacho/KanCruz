@extends('Panel.Layout.index')

@section('content')

    @if (session()->get('success'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                {{session()->get('success')}} 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
    @endif
    
    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Tabla de Reservas</h3>
                        

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="box-title">
                            <a href="{{Route('room.create')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Nueva habitacion</a>
                        </div>
                    </div>

                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Servicios</th>
                                    <th>Precio</th>
                                    <th>Disponibilidad</th>
                                    <th>Acciones</th>

                                </tr>
                                @foreach($rooms as $room)

                                    <tr>
                
                                        <td>{{$room->id}}</td>
                                        <td>{{$room->name}}</td>
                                        <td>{{$room->description}}</td>
                                        <td>{{$room->services}}</td>
                                        <td>{{$room->price}} €</td>
                                        <td>@if ($room->available==1)
                                                {{'Disponible'}}
                                            @endif

                                            @if ($room->available==0)
                                                {{'No Disponible'}}
                                            @endif
                                        </td>
                                        <td>

                                            <a href="{{Route('room.show', $room->id)}}" class="btn btn-primary"><i class="fa fa-info"></i></a>

                                            <a style="color:black" href="{{Route('room.edit',$room->id)}}" class="btn btn-warning" role="button"><i class="fa fa-edit"></i></a>

                                            <a style="color:black" href="{{Route('room.edit',$room->id)}}" class="btn btn-danger" role="button"><i class="fa fa-trash"></i></a>
                                
                                        </td>
                                     
                                    </tr>   
                                @endforeach
                                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                
            <!--BOTAO DELETE
            <form action="{{route('room.destroy', $room->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Eliminar" class="btn btn-danger fa fa-trash" onclick="return confirm ('¿Estás seguro de eliminarlo?')">
                                                
            </form>-->                
                    
        </div>
    </section>
@endsection
