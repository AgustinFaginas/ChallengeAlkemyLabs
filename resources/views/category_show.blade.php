<a href="{{route('endSession')}}">CERRAR SESION</a>


<h1> Aplicacion {{$category->name}}</h1>
<h2> Descripcion {{$category->description}}</h2>

<ul>
		
		@forelse($apps_category ?? '' as $proyectoItem)

			<li> <a href="{{route('apps.show',$proyectoItem)}}">{{ $proyectoItem->name }}</a></li>
		
		@empty
		 <li> No hay proyectos para mostrar </li>
		@endforelse
</ul>
