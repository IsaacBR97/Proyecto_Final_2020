@extends('layouts.vend') 

@section('title','productos')


@section('content')
    
    
 <div class="panel panel-container">
			      
  <h4 ALIGN=CENTER>Listados de productos </h4>
      
      <table  class="table table-striped table-sm">
          <tr style="background-color: rgb(172, 173, 177)">
           <td  ALIGN=CENTER > <h4>id_producto </h4> </td>
           <td  ALIGN=CENTER > <h4>Nombre de producto </h4></td>
           <td  ALIGN=CENTER > <h4>precio</h4></td>
           <td  ALIGN=CENTER > <h4>Fecha de registro</h4></td>
         </tr>
       {{-- @foreach ($productos as $itemproducto) --}}
        <tr>
          <td  ALIGN=CENTER > {{--<a href="{{route('productos.show',$itemproducto->id)}}"> --}}
            <h5>  {{--{{$itemproducto->id}} --}} </h5> </a> </td>
          <td  ALIGN=CENTER > <h5>{{--{{$itemproducto->nombre}}--}} </h5></td> 
          <td  ALIGN=CENTER > <h5>{{--{{$itemproducto->precio}}--}} </h5></td>
          <td  ALIGN=CENTER > <h5>{{--{{$itemproducto->created_at}}--}}</h5></td>
        </tr> 
      {{--  @endforeach --}}
         

      </table> 
 </div>

@endsection
     
