APLICACIONES USUARIO

<ul>
		
		@forelse($apps_user ?? '' as $proyectoItem)

			<li> <a href="{{route('apps.show',$proyectoItem)}}">{{ $proyectoItem->name }}</a></li>
		
		@empty
		 <li> No hay proyectos para mostrar </li>
		@endforelse

	</ul>