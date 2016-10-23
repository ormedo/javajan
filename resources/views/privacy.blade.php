@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Politica de privacidad y condiciones de uso</div>

                <div class="panel-body">
                    {!!  $condition->conditionContent  !!}
                </div>
            </div>
        </div>
    </div>

@endsection