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
        <h1>Freelance Registration </h1>
    </div>
    <form class="form-horizontal" role="form">

        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">Full Name</label>
            <div class="col-sm-9">
                <input required type="text" id="firstName" placeholder="Full Name" class="form-control" autofocus>
                <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span>
            </div>
        </div>
        <div class="form-group">
            <label for="dni" class="col-sm-3 control-label">DNI</label>
            <div class="col-sm-9">
                <input required type="text" id="dni" placeholder="CIF/NIF" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="location" class="col-sm-3 control-label">Location</label>
            <div class="col-sm-9">
                <input required type="text" id="location" placeholder="location" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="country" class="col-sm-3 control-label">Country</label>
            <div class="col-sm-9">
                <input required type="text" id="country" placeholder="country" class="form-control" autofocus>
            </div>
        </div>

        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
            <div class="col-sm-9">
                <input required type="date" id="birthDate" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input required type="email" id="email" placeholder="Email" class="form-control">
                <span class="help-block">Fill Separated By ';' eg.: foo@bar.com; lore@itsum.com</span>
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-sm-3 control-label">Phone number</label>
            <div class="col-sm-9">
                <input required type="text" id="phone" placeholder="Phone Number" class="form-control">
                <span class="help-block">Fill Separated By ';' eg.: XXXXXXXX;YYYYYYYYY </span>
            </div>
        </div>
        <div class="form-group">
            <label for="externalLink" class="col-sm-3 control-label">External Links</label>
            <div class="col-sm-9">
                <input type="text" id="externalLink" placeholder="External Links" class="form-control">
                <span class="help-block">Fill Separated By ';' eg.: cv;web;linkedin </span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-9">
                <label class="control-label">Add your experience</label>
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
                                <option value="{{$tecnology->nombre}}">{{$tecnology->nombre}}</option>
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
                <table required id ="table1"  class="table" cellspacing="0" width="90%">
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
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label for="language" class="col-sm-3 control-label">Languages</label>
            <div class="col-sm-9">
                <select required class="selectpicker" data-live-search="true" multiple name="language">
                    <option>  Mandarin</option>
                    <option>  Spanish</option>
                    <option>  English</option>
                    <option>  Hindi</option>
                    <option>  Arabic</option>
                    <option>  Portuguese</option>
                    <option>  Bengali</option>
                    <option>  Russian</option>
                    <option>  Japanese</option>
                    <option>  Punjabi</option>
                    <option>  German</option>
                    <option>  Javanese</option>
                    <option>  Wu</option>
                    <option>  Malay</option>
                    <option>  Telugu</option>
                    <option>  Vietnamese</option>
                    <option>  Korean</option>
                    <option>  French</option>
                    <option>  Marathi</option>
                    <option>  Tamil</option>
                    <option>  Urdu</option>
                    <option>  Turkish</option>
                    <option>  Italian</option>
                    <option>  Yue (incl. Cantonese)</option>
                    <option>  Thai (excl. Lao)</option>
                    <option>  Gujarati</option>
                    <option>  Jin</option>
                    <option>  Southern Min</option>
                    <option>  Persian</option>
                    <option>  Polish</option>
                    <option>  Pashto</option>
                    <option>  Kannada</option>
                    <option>  Xiang (Hunnanese)</option>
                    <option>  Malayalam</option>
                    <option>  Sundanese</option>
                    <option>  Hausa</option>
                    <option>  Odia (Oriya)</option>
                    <option>  Burmese</option>
                    <option>  Hakka</option>
                    <option>  Ukrainian</option>
                    <option>  Bhojpuri</option>
                    <option>  Tagalog/Filipino</option>
                    <option>  Yoruba</option>
                    <option>  Maithili</option>
                    <option>  Uzbek</option>
                    <option>  Sindhi</option>
                    <option>  Amharic</option>
                    <option>  Fula</option>
                    <option>  Romanian</option>
                    <option>  Oromo</option>
                    <option>  Igbo</option>
                    <option>  Azerbaijani</option>
                    <option>  Awadhi</option>
                    <option>  Gan Chinese</option>
                    <option>  Cebuano</option>
                    <option>  Dutch</option>
                    <option>  Kurdish</option>
                    <option>  Serbo-Croatian</option>
                    <option>  Malagasy</option>
                    <option>  Saraiki</option>
                    <option>  Nepali</option>
                    <option>  Sinhalese</option>
                    <option>  Chittagonian</option>
                    <option>  Zhuang</option>
                    <option>  Khmer</option>
                    <option>  Turkmen</option>
                    <option>  Assamese</option>
                    <option>  Madurese</option>
                    <option>  Somali</option>
                    <option>  Marwari</option>
                    <option>  Magahi</option>
                    <option>  Haryanvi</option>
                    <option>  Hungarian</option>
                    <option>  Chhattisgarhi</option>
                    <option>  Greek</option>
                    <option>  Chewa</option>
                    <option>  Deccan</option>
                    <option>  Akan</option>
                    <option>  Kazakh</option>
                    <option>  Northern Min</option>
                    <option>  Sylheti</option>
                    <option>  Zulu</option>
                    <option>  Czech</option>
                    <option>  Kinyarwanda</option>
                    <option>  Dhundhari</option>
                    <option>  Haitian</option>
                    <option>  Eastern</option>
                    <option>  Ilocano</option>
                    <option>  Quechua</option>
                    <option>  Kirundi</option>
                    <option>  Swedish</option>
                    <option>  Hmongv
                    <option>  Shona</option>
                    <option>  Uyghur</option>
                    <option>  Hiligaynon</option>
                    <option>  Mossi</option>
                    <option>  Xhosa</option>
                    <option>  Belarusian</option>
                    <option>  Balochi</option>
                    <option>  Konkani </option>
                </select>

            </div>
        </div>
        <div class="form-group">
            <label for="minprice" class="col-sm-3 control-label">Price per Hour. Min</label>
            <div class="col-sm-9">
                <input required type="number" step="0.01" id="minprice" placeholder="Minimun Price per Hour" class="form-control">
                <span class="help-block">Minium price per hour for Javajan </span>
            </div>
        </div>
        <div class="form-group">
            <label for="normalprice" class="col-sm-3 control-label">Price per Hour. Normal</label>
            <div class="col-sm-9">
                <input required type="number" step="0.01" id="normalprice" placeholder="Normal Price per Hour" class="form-control">
                <span class="help-block">Normal price per hour </span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <div class="checkbox">
                    <label>
                        <input required type="checkbox">I accept <a  target="_blank" href="{{url('/privacy')}}">terms</a>
                    </label>
                </div>
            </div>
        </div> <!-- /.form-group -->
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
        </div>
    </form> <!-- /form -->
    <script>
        $(document).ready(function(){

            $('#table1').DataTable( );

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
                    table.rows.length+1,
                    exp,
                    grade,
                    year
                ]]).draw();
            }else{
                alert("Must complet your full experience!");
            }

        });


    </script>

@endsection