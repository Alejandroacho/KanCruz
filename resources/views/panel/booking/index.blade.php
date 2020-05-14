@extends('Panel.Layout.index')

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
                            <th>Reserva</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Fecha de entrada</th>
                            <th>Fecha de salida</th>
                            <th>Accion</th>

                        </tr>
                        <tr>
                            @foreach ($bookings as $booking)
                                <th>{{$booking->id}}</th>
                                <td>{{$booking->name}}</td>
                                <td>{{$booking->lastname}}</td>
                                <td>{{$booking->checkin}}</td>
                                <td>{{$booking->checkout}}</td>
                                <td>
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            
                                    <div class="btn-group mr-2" role="group" aria-label="First group">
                                    <a href="{{route('booking.show', $booking->id)}}" class="btn btn-primary"><i class="fa fa-info"></i></a>
                            </div>
                            
                            <div class="btn-group mr-2" role="group" aria-label="Second group">
                                <a href="{{route('booking.edit', $booking->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            </div>

                            <div class="btn-group mr-2" role="group" aria-label="Third group">
                                <form action="{{route('booking.destroy', $booking->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <i clas="fa fa-trash">
                                    <input type="submit" value="Borrar" class="btn btn-danger">
                                    </i>
                                </form>
                            </div>
                        </div>
                    </td>
                            @endforeach
                            
                        </tr>
                        
                         
                
                        
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    
                            
                    
        
        
    </div>

@endsection
