@extends('layouts.vend') 

@section('title','crear productos')

@section('content')
    
    <div class="panel panel-container">
			      
        <h4 ALIGN=CENTER>creacion de productos</h4> 

           <!-- <form action="{{route('productos.store')}}" method="POST" enctype="multipart/form-data">-->
              @csrf

            <table  class="table table-striped table-sm">
 
               <tr>
                <td  ALIGN=CENTER > <h4>Nombre de producto </h4></td>
                <td  ALIGN=CENTER> <input type="text" name="nombre"> </td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>imagen producto </h4></td>
                <td  ALIGN=CENTER> <input type="file" name="imagen"> </td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>Precio </h4></td>
                <td  ALIGN=CENTER>  <input type="text" name="precio"></td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>categoria </h4></td>
                <td  ALIGN=CENTER > <h5> 
                  <select name="categoria" >
                    <option value="electrodemesticos">electrodemesticos</option>
                    <option>ropa</option>
                    <option>electronica</option>
                   </select> </h5>
                </td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>Descripción</h4></td>
                <td  ALIGN=CENTER> <input type="text" rows="10" cols="25" name="descripcion"> </td>
              </tr>


            </table>

            <div ALIGN=CENTER>
                <input type="submit" name="editar" value= "Guardar"
                style="color: white; background-color: green"> 
            </div>

         <!-- </form>-->
       </div>     
       
@endsection