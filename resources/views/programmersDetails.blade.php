@extends('layouts.app')

@section('content')
    <style>
        *[role="form"] {
            max-width: 530px;
            padding: 15px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 0.3em;
        }


    </style>
    <!-- Begin page content -->

    <div class="page-header " style="text-align: center">
        <h1>Freelance Details </h1>
    </div>

    @include('errors.errors')
    @include('errors.success')
    <form class="form-horizontal" method="POST" action="{{url('/programmers/'.$programmer->id)}}" role="form">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">Full Name</label>
            <div class="col-sm-9">
                <input value="{{$programmer->name}}" type="text" id="firstName" name="firstName" placeholder="Full Name" class="form-control" autofocus>

            </div>
        </div>
        <div class="form-group">
            <label for="dni" class="col-sm-3 control-label">DNI</label>
            <div class="col-sm-9">
                <input  value="{{$programmer->dni}}" type="text" id="dni"  name="dni" placeholder="CIF/NIF" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="location" class="col-sm-3 control-label">Location</label>
            <div class="col-sm-9">
                <input  value="{{$programmer->location}}" type="text" id="location" name="location"  placeholder="location" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="country" class="col-sm-3 control-label">Country</label>
            <div class="col-sm-9">
                <input  value="{{$programmer->country}}" type="text" id="country" name="country" placeholder="country" class="form-control" autofocus>
            </div>
        </div>

        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
            <div class="col-sm-9">
                <input  value="{{$programmer->birthdate}}" type="date" id="birthDate" name="birthDate"  class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input value="{{$programmer->emails}}" type="email" id="email" name="email" placeholder="Email" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-sm-3 control-label">Phone number</label>
            <div class="col-sm-9">
                <input value="{{$programmer->phonenumbers}}" type="text" id="phone" name="phone" placeholder="Phone Number" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="externalLink" class="col-sm-3 control-label">External Links</label>
            <div class="col-sm-9">
                <input value="{{$programmer->externallinks}}" type="text" id="externalLink" name="externalLink" placeholder="External Links" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-9">
                <label class="control-label">Experience</label>
            </div>
        </div>
        <hr>
        <div style="border:1px;">
            <div class="form-group">
                <label for="country" class="col-sm-3 control-label">Knowledge</label>
                <div class="col-sm-9">
                    <select class="selectpicker" data-live-search="true" id="grade" name="grade">
                        <option>Basic</option>
                        <option>Good</option>
                        <option>Expert</option>
                        <option>Senior</option>
                        <option>Crack</option>
                    </select>

                </div>
            </div> <!-- /.form-group -->
            <div class="form-group">
                <label for="tecnology" class="col-sm-3 control-label">Tecnology</label>
                <div class="col-sm-9">
                    <select class="selectpicker" data-live-search="true" id="tecnology" name="tecnology">
                        @foreach($tecnologies as $tecnology)
                            <option value="{{$tecnology->name}}">{{$tecnology->name}}</option>
                        @endforeach
                    </select>
                    <span class="help-block">Select a Tecnology</span>
                </div>
            </div>
            <div class="form-group">
                <label for="newTecnology" class="col-sm-3 control-label">Or Add a New One</label>
                <div class="col-sm-9">
                    <input style="display: inline;width: 80%;" type="text" id="newTecnology" placeholder="New Tecnology" class="form-control">
                    <button name="addTecnology" id="addTecnology" type="button" class="btn btn-primary ">Add</button>
                </div>
            </div>
            <div class="form-group">
                <label for="experience" class="col-sm-3 control-label">Experience</label>
                <div class="col-sm-9">
                    <input type="text" id="experience" name="experience" placeholder="Experience" class="form-control">
                    <span class="help-block">Experience in years </span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <button id="addExperience" type="button" class="btn btn-primary btn-block">Add Experience</button>
                </div>
            </div>
            <div class="form-group">
                <table required id="table1" name="tableExperience[]" class="table" cellspacing="0" width="90%">
                    <thead>
                    <tr >
                        <th>Number</th>
                        <th>Knowledge</th>
                        <th>Level</th>
                        <th>Experience</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Number</th>
                        <th>Knowledge</th>
                        <th>Level</th>
                        <th>Experience</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($programmerTecnologies as $currenttecnologies)
                        <tr>
                        <td>{{$currenttecnologies->id}}</td><input type='hidden' name='tecnologies_{{$currenttecnologies->id}}' value='"+exp+"' />
                        <td>{{$currenttecnologies->name}}</td>
                        <td>{{$currenttecnologies->pivot->grade}}</td>
                        <td>{{$currenttecnologies->pivot->experience}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label for="language" class="col-sm-3 control-label">Languages</label>
            <div class="col-sm-9">
                <input value="{{$programmer->languages}}"  type="text" step="0.01" id="language" name="language" placeholder="Spoken languages" class="form-control">

            </div>
        </div>
        <div class="form-group">
            <label for="minprice" class="col-sm-3 control-label">Price per &euro;/Hour. Min</label>
            <div class="col-sm-9">
                <input value="{{$programmer->priceperhourmin}}"  type="number" step="0.01" id="minprice" name="minprice" placeholder="Minimun Price per Hour" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="normalprice" class="col-sm-3 control-label">Price per &euro;/Hour. Normal</label>
            <div class="col-sm-9">
                <input value="{{$programmer->priceperhournormal}}" type="number" step="0.01" id="normalprice"  name="normalprice"  placeholder="Normal Price per Hour" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="normalprice" class="col-sm-3 control-label">Commets</label>
            <div class="col-sm-9">
                <textarea   id="comments"  name="comments"  placeholder="Comments" class="form-control" rows="5" >
                    {!! $programmer->comments !!}
                </textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </div>
        <div id="hiddens">
            <input value="{{$programmer->id}}" type="hidden" step="0.01" id="id"  name="id"   class="form-control">
        </div>
    </form> <!-- /form -->
    <script>
        $(document).ready(function(){

            var table = $('#table1').DataTable( );
            var i=0;
            @foreach($programmerTecnologies as $currenttecnologies)
            i++;
            $('#hiddens').append("<input type='hidden' name='tecnologies_"+i+"' value='{{$currenttecnologies->name}}' />");
            $('#hiddens').append("<input type='hidden' name='grades_"+i+"' value='{{$currenttecnologies->pivot->grade}}' />");
            $('#hiddens').append("<input type='hidden' name='experiences_"+i+"' value={{$currenttecnologies->pivot->experience}}' />");
            $('#hiddens').append("<input type='hidden' name='Tablelength' value='"+i+"' />");
            @endforeach
        });

        $("#addTecnology" ).click(function() {
            var newTec= $('#newTecnology').val();
            if(newTec!=''){
                $('#tecnology').find('[value='+newTec+']').remove();
                $('#tecnology').append("<option selected value="+newTec+">"+newTec+"</option>");
                $('#tecnology').selectpicker('refresh');
            }else{
                alert("Cant be empty!");
            }
        });

        $("#addExperience" ).click(function() {

            var table =  $('#table1').DataTable( );
            var exp=$('#tecnology' ).val();
            var grade=$('#grade').val();
            var year=$('#experience').val();
            if(exp!='' &&grade!=''&& year!=''){
                table.rows.add( [[
                    table.rows().indexes().length+1,
                    exp,
                    grade,
                    year
                ]]).draw();
                $('#hiddens').append("<input type='hidden' name='tecnologies_"+table.rows().indexes().length+"' value='"+exp+"' />");
                $('#hiddens').append("<input type='hidden' name='grades_"+table.rows().indexes().length+"'' value='"+grade+"' />");
                $('#hiddens').append("<input type='hidden' name='experiences_"+table.rows().indexes().length+"'' value='"+year+"' />");
                $('#hiddens').append("<input type='hidden' name='Tablelength' value='"+table.rows().indexes().length+"' />");
            }else{
                alert("Must complet your full experience!");
            }

        });


    </script>

@endsection