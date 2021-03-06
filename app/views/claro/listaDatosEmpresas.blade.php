@extends('template.main')

@section('head')
    <meta name="description" content="Pagina inicio">
    <meta name="author" content="Sistemas Amigables">
    <meta name="keyword" content="palabras, clave">     
    <title>Estado Cuenta</title>
@stop

@section('styles')
    {{ HTML::style('css/DT_bootstrap.css') }}
@stop

@section('tittle')
Movimientos Ciclo
@stop

@section('container') 
     
<center><h2><span class="glyphicon glyphicon-list-alt"><br>Ciclo C-48 <img src="http://systema.elcorso.hn/img/logo-claro.png"></span></h2></center>

<div style="center">

    <h5>Disculpe las molestias Estamos mejorando la aplicación para servirle mejor...</h5>
</div>

<div >
<form class="" role="search">
   
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default">Buscar</button>
</form>
</div>


<div class="left">
    <li class="dropdown">                  
        <a href="#" class="btn btn-danger" data-toggle="dropdown">Reportes +<span class="caret"></span></a>  
        <ul class="dropdown-menu" role="menu">                        
            <li><a>Reporte en PDF</a></li>    
            <li><a>Reporte en Excel</a></li>    
        </ul>               
    </li>               
</div>
<hr>
<div class="left">

</div>
<hr>
<div class="table-responsive"> 
<table class="table table-striped">
    <thead>
        <tr>
            <th width="57">{{('#')}}</th>
            <th width="211">Código</th>
            <th width="157">Nombre</th>
            <th width="157">Tipo Cliente</th>
            <th width="182">Estado</th>
            <th width="182">Observación</th>
            <th width="182">Comentario</th>
            <th width="182">Mensajero</th>
            <th width="182">Ciudad</th>
        </tr>      
    </thead>
   <tbody>    
        <!-- inicio mostramos todos los datos de la tabla catalogo -->
        <?php $i=0; ?>
        @foreach($datosEmpresas As $datos) <?php $i++;   ?>
        <tr>  
            <td>{{$i}}</td>
            <td>{{($datos->codigo)}}</td>
            <td>{{($datos->name_cliente)}}</td>
            <td>{{($datos->tipo_cliente)}}</td>
           
            <td>
                <div id="" class="">{{($datos->observaciones->estados->name)}}</div>
                
            </td>
            <!-- Observación -->
            <td><div id="ClaroObservacion_{{$datos->id}}" class="ClaroObservacion">{{($datos->observaciones->name)}}</div>
                
            </td>
            <!-- Comentario -->
            <td>
                <div id="recibido-{{$datos->id}}" class="recibido"></div>
            </td>

            <!-- Empleados -->
            <td><div id="mensajero_{{$datos->id}}" class="mensajero">@if(($datos->empleados_id==null))  @else {{$datos->empleados->nameCompleto()}} @endif </div>
                </td>
                <!-- Comentario -->
                <td>
                    <div id="recibido-{{$datos->id}}" class="recibido"></div>
                </td>

                <!-- Empleados -->
                <td><div id="mensajero_{{$datos->id}}" class="mensajero">@if(($datos->empleados_id==null))  @else {{$datos->empleados->nameCompleto()}} @endif </div>
                    </td>
                    <td>
                       <div >{{($datos->ciudades->name)}}</div>
                    </td>
            </tr>
            @endforeach
            <!-- Fin de la tabla catalogo -->
        </tbody>
    </table>
        </div>
    <div class="pagination">
        {{$datosEmpresas->appends(array("buscar"=>Input::get("buscar")))->links()}}
    </div>
@stop

