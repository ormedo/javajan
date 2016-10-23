@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    @include('errors.errors')
                    @include('errors.success')
                    <form method="POST" action="{{url('/conditions')}}">
                        <div class="panel-heading">
                            <button type="submit" class="btn btn-primary ">Actualizar</button>
                        </div>

                        {{ csrf_field() }}
                        <div class="panel-body">
                        <textarea class="form-control" rows="30" id="condition" name="condition" >
                            {{ $condition->conditionContent }}
                        </textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
