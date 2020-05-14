@extends('Panel.Layout.index')

@section('content')
    <div class="container">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    
                    <h3 class="box-title">Modifica la reserva</h3>

                </div>

                <div class="box-body">

                    <form action="{{Route('booking.update', $booking->id)}}" method="POST">
                        @csrf
                        @method('put')

                            <div class="form-group">
                                    <label>Id</label>
                                        <input type="hidden" name="id" class="form-control" value="{{$booking->id}}"/>
                                </div>

                                <div class="form-group">
                                    <label>Nombre</label>
                                        <input type="text" name="name" class="form-control "value="{{$booking->name}}"/>
                                </div>

                                <div class="form-group">
                                    <label>Apellido</label>
                                        <input type="text" name="lastname" class="form-control" value="{{$booking->lastname}}"/>
                                </div>

                                <div class="form-group">
                                    <label>Documento</label>
                                        <input type="text" name="document" class="form-control" value="{{$booking->document}}"/>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                        <input type="email" name="email" class="form-control" value="{{$booking->email}}"/>
                                </div>


                                <div class="form-group">

                                    <label>Telefono</label>
                                    <input type="phone" name="phone" class="form-control" value="{{$booking->phone}}"/>
                                </div>

                                <div class="form-group">
                                    <label for="rooms_id">Elige la habitacion</label>
                                    <select name="rooms_id" id="rooms_id" class="form-control">
                                    @foreach ($rooms as $room)
                                            <option value="{{$room->id}}">{{$room->name}}</option>
                                        @endforeach
                                    
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Fecha de entrada</label>
                                        <input type="date" name="checkin" class="form-control" value="{{$booking->checkin}}"/>
                                </div>

                                <div class="form-group">
                                    <label>Fecha de salida</label>
                                        <input type="date" name="checkout" class="form-control" value="{{$booking->checkout}}"/>
                                </div>

                                <div class="form-group">
                                    <label>Desayuno</label>
                                        <input type="checkbox" name="breakfast" class="form-control" value="{{$booking->breakfast}}"/>
                                </div>

                                <div class="form-group">
                                    <label>Mascotas</label>
                                        <input type="checkbox" name="pets" class="form-control" value="{{$booking->pets}}"/>
                                </div>

                            </div>

                            <div class="card-footer">
                                <input type="submit" value="Actualizar" class="btn btn-primary">
                            </div>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection