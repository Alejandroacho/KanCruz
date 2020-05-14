@extends('Panel.Layout.index')

@section('content')

  <section class="content container-fluid">
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-teal">
          <div class="inner">
            @inject('usuarios', 'App\User')
            <h3>{{$usuarios->count()}}</h3>

            <p>Usuarios</p>
          </div>

          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <a href="{{route('panel.users.index')}}" class="small-box-footer">Admin <i class="fa fa-arrow-circle-right"></i></a>
        </div>  
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
          <div class="inner">
            @inject('reservas', 'App\Booking')

           <h3>{{$reservas->count()}}<sup style="font-size: 20px"></sup></h3>

            <p>Reservas</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="{{route('booking.index')}}" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
          <div class="inner">
            @inject('habitaciones', 'App\Room')

           <h3>{{$habitaciones->count()}}<sup style="font-size: 20px"></sup></h3>

            <p>Habitaciones</p>
          </div>
          <div class="icon">
            <i class="fa fa-bed"></i>
          </div>
          <a href="{{route('room.index')}}" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </section>
@endsection