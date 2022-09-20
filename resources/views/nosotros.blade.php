@extends('layout.main')

@section('title','Nosotros')

@section('content')
<center>EQUIPO DE TRABAJO</center>
<hr>
<style>
     @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

/*Cards*/
.container-card{
	width: 100%;
	display: flex;
}
.card{
	width: 100%;
	margin: 15px;
	border-radius: 6px;
	overflow: hidden;
	background:#fff;
	box-shadow: 0px 1px 10px rgba(0,0,0,0.2);
	transition: all 400ms ease-out;
	cursor: default;
}
.card:hover{
	box-shadow: 5px 5px 20px rgba(0,0,0,0.4);
	transform: translateY(-3%);
}
.card img{
	width: 100px;
	height: 100px;
}
.card .contenido-card{
	padding: 15px;
	text-align: center;
}
.card .contenido-card h3{
	margin-bottom: 15px;
	color: #7a7a7a;
}
.card .contenido-card p{
	line-height: 1.8;
	color: #6a6a6a;
	font-size: 14px;
	margin-bottom: 5px;
}
.card .contenido-card a{
	display: inline-block;
	padding: 10px;
	margin-top: 10px;
	text-decoration: none;
	color: #2fb4cc;
	border: 1px solid #2fb4cc;
	border-radius: 4px;
	transition: all 400ms ease;
	margin-bottom: 5px;
}
.card .contenido-card a:hover{
	background: #2fb4cc;
	color: #fff;
}


</style>
<div class="container-card">
    <div class="card">
       <center>
        <img src="https://avatars.githubusercontent.com/u/74844624?v=4">
       </center>
        <div class="contenido-card">
            <h3>Miguel Muzo</h3>
            <p>Áreas de interés: <br>
            Backend, seguridad informática, desarrollo web, IA y hacking ético.</p>
            <a href="https://github.com/Miguel-EMC" target="_blank">GitHub</a>
        </div>
    </div>

    <div class="card">
        <center>
         <img src="https://avatars.githubusercontent.com/u/74793607?v=4">
        </center>
         <div class="contenido-card">
             <h3>Steven Guañuna</h3>
             <p>Áreas de interés: <br>
                Front-end, desarrollo de Apis, Inteligencia Artificial.</p>
             <a href="https://github.com/Seknys" target="_blank">GitHub</a>
         </div>
     </div>

     <div class="card">
        <center>
         <img src="https://pps.whatsapp.net/v/t61.24694-24/239843367_102483602455791_6236886492332315333_n.jpg?ccb=11-4&oh=01_AVySulPthrBFS501GkXKGWPJZP30IFjgKGEg6Z6qeuNZww&oe=62A74F33">
        </center>
         <div class="contenido-card">
             <h3>Jhael Nicolalde</h3>
             <p>Áreas de interés: <br>
                Desarrollo web, diseño de interfaces, desarrollo frontend.</p>
             <a href="#" target="_blank">GitHub</a>
         </div>
     </div>    

     <div class="card">
        <center>
         <img src="https://avatars.githubusercontent.com/u/74762981?v=4">
        </center>
         <div class="contenido-card">
             <h3>Kevin Pinanjota</h3>
             <p>Áreas de interés: <br>
                Desarrollo web, diseño de interfaces, full stack.</p>
             <a href="https://github.com/kevinpinan" target="_blank">GitHub</a>
         </div>
     </div> 

     <div class="card">
        <center>
         <img src="https://avatars.githubusercontent.com/u/105679452?v=4">
        </center>
         <div class="contenido-card">
             <h3>Ariel Moposita</h3>
             <p>Áreas de interés: <br>
                Desarrollo web, diseño de interfaces.</p>
             <a href="https://github.com/Cristoferfloor" target="_blank">GitHub</a>
         </div>
     </div>

     <div class="card">
        <center>
         <img src="https://avatars.githubusercontent.com/u/74752987?v=4">
        </center>
         <div class="contenido-card">
             <h3>Jean Tituaña</h3>
             <p>Áreas de interés: <br>
                Desarrollo Web, Diseño de interfaces, base de datos, gestión en proyectos de software.</p>
             <a href="https://github.com/Jeant10" target="_blank">GitHub</a>
         </div>
     </div>
</div>

@endsection()