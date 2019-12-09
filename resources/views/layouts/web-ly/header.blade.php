<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="top-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <p class="bold text-left" v-text="$root.date()"></p>
                </div>
                <div class="col-sm-6 col-md-6">
                    <a href="#" style="margin-left: 3%;" class="btn btn-xs btn-primary pull-right">Ingresar</a>
                    <a href="#" class="btn btn-xs btn-primary pull-right">Crear Cuenta</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container navigation">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('website/img/logo.png') }}" alt="" width="150" height="40" />
            </a>
        </div>
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#intro">Inicio</a></li>
            <li><a href="#eventos">Eventos</a></li>
            <li><a href="#noticias">Noticias</a></li>
            <li><a href="#servicios">Servicios</a></li>
            <li><a href="#contactos">Contactos</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right">Extra</span>Más <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Home CTA</a></li>
                <li><a href="#">Home Form</a></li>
                <li><a href="#">Home video</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>