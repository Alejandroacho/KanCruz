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
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tabla de habitaciones</h3>

                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>

                <!-- /.box-header -->
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
                                
                                    <a style="color:black" href="{{Route('room.edit',$room->id)}}" class="btn btn-warning" role="button"><i class="fa fa-edit"></i></a>

                                    <a style="color:black" href="{{Route('room.edit',$room->id)}}" class="btn btn-danger" role="button"><i class="fa fa-trash"></i></a>
                        
                                </td>
                                
                            </tr>   
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    
                            <form action="{{route('room.destroy', $room->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input 
                                    type="submit" 
                                    value="Eliminar" 
                                    class="btn btn-danger"
                                    onclick="return confirm ('¿Estás seguro de eliminarlo?')">
                            </form>
                    
        </table>
        
        <div class="card-footer">
            <a href="{{Route('room.create')}}" class="btn btn-secondary">Añadir nueva habitación</a>
        </div>
        
    </div>
@endsection
