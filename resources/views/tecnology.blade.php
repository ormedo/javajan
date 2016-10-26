

@extends('layouts.app')

@section('content')


    <div class="panel-body">

        <!-- Display Validation Errors -->
    @include('errors.errors')
    @include('errors.success')
    <!-- New Task Form -->
        <form action="/tecnology" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Task Name -->
            <div class="form-group">
                <label for="tecnology" class="col-sm-3 control-label">Tecnologia</label>

                <div class="col-sm-6">
                    <input type="text" name="nombre" id="nombre" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Añadir Tecnología
                    </button>
                </div>
            </div>
        </form>
    </div>
    @if (count($tecnologies) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>

            <div class="panel-body">


                    <table id ="table"  class="display" cellspacing="0" width="90%">
                        <thead>
                        <tr >
                            <th>#</th>
                            <th>Nombre</th>
                            <th>activa</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>activa</th>
                            <th>Accion</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($tecnologies as $tecnology)
                            <tr>

                                <td >{{$tecnology->id}}</td>
                                <td>{{$tecnology->name}}</td>
                                @if($tecnology->active>0)
                                    <td><span class="glyphicon glyphicon-ok"/></td>
                                    <td>
                                        <form action="/tecnology/{{ $tecnology->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-primary">Desactivar</button>

                                    </td>
                                </form>
                                @else
                                    <td><span class="glyphicon glyphicon-minus"/></td>
                                    <td>
                                        <form action="/tecnology/{{ $tecnology->id}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}

                                            <button class="btn btn-primary">Activar</button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

            </div>
        </div>
    @endif
    <script>
        $(document).ready(function(){

            $('#table').DataTable( );

        });

    </script>
@endsection

