@extends('layout.main')

@section('title','Contactos')

@section('content')
<h1>Contáctanos</h1>

<style>
    .container-contacts {
        border: 2px solid #000;
        border-radius: 15px;
        padding: 2rem;
        margin: 2rem;
        background-color: #bcc4;
    }
    .logo-cont{

        width: 95%;
        margin: 2rem;
        
    }

    .div-contact{
        margin-left: 2rem;
    }
    h3{
        text-align: center;
        margin-bottom: 1rem;
    }
    .div-nosotros{
      display: flex;
  }
  .btn{
      background-color: #0002;
      margin-left: 1rem;
      border-color: #0002;
  }
  .nav-link-home{
      color: #000;
      text-decoration: none;
      
  }
  .btn:hover{
    background-color: #000;
    
  }
  .btn:hover>a{
    color: #fff;
  }
</style>


<hr>
    @switch($name)
        @case(1)
            Bienvenido Administrador
        @break
        @case(2)
            Bienvenido Empleado
        @break
        @case(3)
            Bienvenido Gerente
        @break
        @default
            Bienvenido Invitado
    @endswitch


<div class="container-contacts">
    <div class="row">
        <h2> Encuentranos en:</h2>
        <div class="col-md-6">
            <div class="div-img">
                <img src="https://esfot.epn.edu.ec/images/headers/logo_esfot_buho.png" alt="Logo" class="logo-cont">
            </div>
        </div>
        <div class="col-md-6">
            <div class="div-contact">
                <h3>Dirección</h3>
                <p><b>Calle:</b> La Marina N° 6-51</p>
                <p><b>Sector:</b> San Isidro</p>
                <p><b>Ciudad:</b> Quito</p>
                <p><b>Provincia:</b> Pichincha</p>
                <p><b>Pais:</b> Ecuador</p>
                <p><b>Téfono: </b>(593-2) 2-2587</p>
                <p><b> Correo:  </b> (diresfot@epn.edu.ec).</p>
            </div>
        </div>
    </div>

</div>

<div class="div-nosotros">
    <p> Mas informacion del personal en: </p>
    <button class='btn btn-primary' value="Nosotros">
        <a class="nav-link-home {{menuNavegation('about')}}" href="{{route('about')}}">
            Nosotros
        </a>
        
    </button>
    
</div>

@endsection()