@extends('Panel.Layout.index')

@section('content')

    <section class="content container-fluid">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-teal">
                    <div class="inner">
                        <h3>0</h3>

                        <p>Usuarios</p>
                    </div>

                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="" class="small-box-footer">Admin <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                
            </div>
            <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>23<sup style="font-size: 20px"></sup></h3>

              <p>Reservas</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        </div>
    </section>

@endsection