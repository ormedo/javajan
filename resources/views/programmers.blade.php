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
        <h1>Freelance Search </h1>
    </div>

    <form class="form-horizontal" method="POST" action="{{url('/programmers')}}" role="form">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">Full Name</label>
            <div class="col-sm-9">
                <input  type="text" id="firstName" name="firstName" placeholder="Full Name" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="dni" class="col-sm-3 control-label">DNI</label>
            <div class="col-sm-9">
                <input  type="text" id="dni"  name="dni" placeholder="CIF/NIF" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="location" class="col-sm-3 control-label">Location</label>
            <div class="col-sm-9">
                <input  type="text" id="location" name="location"  placeholder="location" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="country" class="col-sm-3 control-label">Country</label>
            <div class="col-sm-9">
                <input  type="text" id="country" name="country" placeholder="country" class="form-control" autofocus>
            </div>
        </div>

        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
            <div class="col-sm-9">
                <input  type="date" id="birthDate" name="birthDate"  class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input  type="email" id="email" name="email" placeholder="Email" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-sm-3 control-label">Phone number</label>
            <div class="col-sm-9">
                <input  type="text" id="phone" name="phone" placeholder="Phone Number" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="externalLink" class="col-sm-3 control-label">External Links</label>
            <div class="col-sm-9">
                <input type="text" id="externalLink" name="externalLink" placeholder="External Links" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-9">
                <label class="control-label">Add your experience</label>
            </div>
        </div>
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
            </div>
        </div>
        <div class="form-group">
            <label for="experience" class="col-sm-3 control-label">Experience</label>
            <div class="col-sm-9">
                <input type="text" id="experience" name="experience" placeholder="Experience" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="language" class="col-sm-3 control-label">Languages</label>
            <div class="col-sm-9">
                <select  class="selectpicker" data-live-search="true" multiple name="language[]">
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
                <input  type="number" step="0.01" id="minprice" name="minprice" placeholder="Minimun Price per Hour" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="normalprice" class="col-sm-3 control-label">Price per Hour. Normal</label>
            <div class="col-sm-9">
                <input  type="number" step="0.01" id="normalprice"  name="normalprice"  placeholder="Normal Price per Hour" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block">Search</button>
            </div>
        </div>

    </form> <!-- /form -->
    <form>
        <div class="form-group">
            <table  id="table1" name="table1" class="display"  cellspacing="0" width="90%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>Location</th>
                    <th>externalLink</th>
                    <th>Comment</th>
                    <th></th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>Location</th>
                    <th>externalLink</th>
                    <th>Comment</th>
                    <th></th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($programmers as $programmer)
                    <tr>
                        <td>{{$programmer->id}}</td>
                        <td>{{$programmer->name}}</td>
                        <td>{{$programmer->emails}}</td>
                        <td>{{$programmer->location}}</td>
                        <td>{{$programmer->externalLink}}</td>
                        <td>{{$programmer->comments}}</td>
                        <td>
                            <form action="/programmers/{{ $programmer->id}}" method="GET">
                                <button type="submit" class="btn btn-primary btn-block">Details</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </form>
    <script>
        $(document).ready(function(){

            $('#table1').DataTable( );

        });

    </script>
@endsection