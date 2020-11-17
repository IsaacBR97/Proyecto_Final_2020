@extends('layouts.vend') 

@section('title','listado productos')

@section('content')   

        <div ALIGN=CENTER>
            <div class="row" >
				<TABLE BORDER="1" class="table table-striped table-sm" >
					<TR>
					<td COLSPAN="2" ALIGN=CENTER> <h3>Producto: {{--{{$idProducto->nombre}}--}} </h3> </td>
					</TR>

					<TR>
					<td ROWSPAN="5" ALIGN=CENTER>
						{{--<img src="{{Storage::url($idProducto->imagen)}}" alt="" width="200" height="250">--}}
					</td>
					<td><h3>nombre vendedor: </h3> </td>
					</TR>

					<tr>
					<td>Precio: {{-- {{$idProducto->precio}} --}} </td>
					</tr>

					<tr>
						<td>Categoria: {{-- {{$idProducto->categoria}} --}} </td>
					</tr>

					<tr>
						<td>Fecha publicación: {{-- {{$idProducto->created_at}} --}}</td>
					</tr>

					<tr>
						<td> <p>Descripción: {{-- {{$idProducto->descripcion}} --}}</p> </td>
					</tr>

					<tr>
						<td  ALIGN=CENTER COLSPAN="2">
							{{--<a href="{{route('productos.edit',$idProducto->id)}}"> --}}
								
							<input type="submit" name="editar" value= "edit"
							 style="color: white; background-color: green">  </a>
		   
							
							{{-- <form action="{{route('productos.destroy',$idProducto->id)}}" method="POST">
								@csrf
								@method('DELETE') --}}
								<input type="submit" name="eliminar" value= "Eliminar producto"
								style="color: white; background-color: red"
								onclick='alert("DESEAS BORRAR ESTE ARCHIVO.")' />
								</a>
							  </form>
							  </td>
					</tr>

				</TABLE>
			</div>
        </div>
        
@endsection