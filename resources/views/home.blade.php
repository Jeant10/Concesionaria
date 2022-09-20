@extends('layout.main')

@section('title','Inicio')

@section('content')
<style>
  .logo-home {
    width: 15%;
    height: 15%;
    
  }
  .title-home {
    font-size: 3em;
    font-weight: bold;
   
    
  }
  .container-header-home{
    display: flex;
   justify-content: space-between;
    padding: 20px;
    align-items: center
    
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
  .div-img{
      margin: 2rem;
  }
</style>
<div class="container-header-home" >
    <h1 class="title-home">Bienvenidos</h1>
    <img src="https://cem.epn.edu.ec/imagenes/logos_institucionales/big_jpg/EPN_logo_big.jpg" alt="Logo" class="logo-home">
    
</div>


<hr>

<h3> Acerca de : </h3>
<p>Somos estudiantes de la Escuela Politecnica Nacional del Ecuador, siguiendo la carrera de Tecnologia Superior en Desarrollo de Software, en el cual nos hemos especializado en el desarrollo de aplicaciones web, con el fin de poder brindar un servicio de calidad a nuestros clientes.</p>
<div class="div-nosotros">
    <p> Conoce mas sobre cada uno de los integrantes en: </p>
    <button class='btn btn-primary' value="Nosotros">
        <a class="nav-link-home {{menuNavegation('about')}}" href="{{route('about')}}">
            Nosotros
        </a>
        
    </button>
    
</div>
<div class="div-img">
    <img src="https://esfot.epn.edu.ec/images/ofertacademica/gal_tsds/desarrollo_software.jpg" alt="TSDS">
</div>

<p>Los desarrolladores de software tienen un rol menos formal que los ingenieros y pueden participar de cerca en áreas específicas del proyecto, incluida la escritura de código. Al mismo tiempo, impulsan el ciclo de vida general del desarrollo de software mediante el trabajo en equipos funcionales para transformar los requisitos en funciones, la gestión de equipos y procesos de desarrollo y la realización de pruebas y mantenimiento de software.</p>
@endsection()