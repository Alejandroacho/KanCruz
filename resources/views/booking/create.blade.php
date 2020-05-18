@extends('Panel.Layout.index')

@section('content')

<section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        
                        <h3 class="box-title">Haz una reserva</h3>

                    </div>

                    <div class="box-body">

                        <form action="{{Route('booking.store')}}" method="POST">
                    @csrf
                    
                    <div class="card text-white bg-dark mb-3">

                        <div class="box-header">
                            <label>Haz una reserva</label>
                        </div>

                        <div class="box-body">

                            <div class="form-group">
                                <label>Nombre</label>
                                    <input type="text" name="name" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label>Apellido</label>
                                    <input type="text" name="lastname" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label>Documento</label>
                                    <input type="text" name="document" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-at"></i>
                                    </div>
                                    <input type="email" name="email" class="form-control"/>
                                </div>
                                
                            </div>

                            <div class="form-group">
                                <label>Telefono</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input type="phone" name="phone" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="room_id">Elige la habitacion</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-bed"></i>
                                    </div>
                                    <select name="room_id" id="room_id" class="form-control">
                                        @foreach ($rooms as $room)
                                            <option value="{{$room->id}}">{{$room->name}}</option>
                                        @endforeach
                                
                                    </select>
                                </div>  
                            </div>

                            

                            <div class="form-group">
                                <label>Fecha de entrada</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" name="checkin" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group">
                               <label>Fecha de salida</label> 
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" name="checkout" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Desayuno</label>
                                
                                <input type="checkbox" name="breakfast" id="breakfast" value="1"/>                                    
                                    
                                
                            </div>

                            <div class="form-group">
                                <label>Mascotas</label>
                                    <input type="checkbox" name="pets" id="pets" value="1"/>
                            </div>
                            
                            <!--
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <label>Mascotas</label>
                                    <div class="input-group-text">
                                    <input type="checkbox" aria-label="Checkbox for following text input" name="pets">
                                
                                    </div>
                                </div>
                                <input type="number" class="form-control" aria-label="Text input with checkbox" name="pets_number">
                            </div>
                            -->
                        </div>

                        <div class="card-footer">
                            <input type="submit" value="Crear" class="btn btn-primary">
                        </div>
                    </div>    
                </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
