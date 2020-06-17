@extends('layouts.app')

@section('content')


<div class="container-fluid">
  <!--Mensajes de Guardado o Actualización de Comunas-->
  <?php $message=Session::get('message') ?>
  @if($message == 'success')
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      Importado Exitosamente
    </div>
  @endif

    <div class="row">
      <div class="container col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading"><h4>Importar </h4></div>
          <div class="panel-body text-left">
                {{ csrf_field() }} 
              
            <div class=" text-justify">
                      <p>1- Presiona el boton "Seleccionar archivo" para seleccionar la ruta donde se encuentra el archivo, tambien puedes arrastrarlo y soltarlo en la zona delimitada.</p>  
            </div>

            <div class=" text-justify">
                      <p>2- Presiona el boton "Importar" para cargar el archivo y procesar la información.</p>  
            </div>

            </br>          

                    <form class="form-inline" role="form" method="POST" action="/importar" accept-charset="UTF-8" enctype="multipart/form-data"> 
                {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('file') ? ' has-error' : '' }}">
                                <input id="file" type="file" class="form-control" name="file" required autofocus>
              </div>

              <div class="form-group">
                            <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-upload"></span> Importar</button>
                        </div>    
                    </form>     
            </br> 
              @if ($errors->any())                
                <div>
                  <table class="table  table-borderless table-condensed table-hover">
                    <tr>
                      <th>
                        <p class="text-info">Por favor corrige los siguientes errores:</p>
                      </th>
                    </tr>
                    <tr>
                      <td>
                        @foreach ($errors->all() as $error)
                                          <span class="help-block"><li><strong>{{ $error }}</strong> </li></span>
                        @endforeach
                      </td>
                    </tr> 
                  </table>
                </div>
              @endif
              </br> 
          </div>

      </div>
    </div>

@endsection
