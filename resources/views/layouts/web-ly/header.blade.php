<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="top-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <p class="bold text-left" v-text="$root.date()"></p>
                </div>
                <div class="col-sm-6 col-md-6">
                    <a href="#" style="margin-left: 3%;" class="btn btn-xs btn-primary pull-right" data-toggle="modal" data-target="#acceder">Ingresar</a>
                    <a href="#" class="btn btn-xs btn-primary pull-right" data-toggle="modal" data-target="#registro">Crear Cuenta</a>
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
            <li><a href="#servicios">Servicios</a></li>
            <li><a href="#noticias">Noticias</a></li>
            <li><a href="#eventos">Eventos</a></li>
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

<!-- Modal -->
  <div class="modal fade" id="acceder" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <p class="h5 text-center modal-title">Iniciar Sesión</p>
        </div>
        <div class="modal-body">
            <div class="block-content">
                <form class="row" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control form-control-alt form-control-lg @error('email') is-invalid @enderror" id="login-username" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electronico">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-5">
                        <input type="password" class="form-control form-control-alt form-control-lg @error('password') is-invalid @enderror" id="login-password" name="password" required autocomplete="current-password"placeholder="Contraseña">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-block btn-primary">
                            <i class="fa fa-check"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>

<!-- Modal -->
  <div class="modal fade" id="registro" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <p class="h5 text-center modal-title">Registrar</p>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
      </div>
    </div>
  </div>