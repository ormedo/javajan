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
                <input type="text" id="firstName" placeholder="Full Name" class="form-control" autofocus>
                <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span>
            </div>
        </div>
        <div class="form-group">
            <label for="dni" class="col-sm-3 control-label">DNI</label>
            <div class="col-sm-9">
                <input type="text" id="dni" placeholder="CIF/NIF" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="location" class="col-sm-3 control-label">Location</label>
            <div class="col-sm-9">
                <input type="text" id="location" placeholder="location" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="country" class="col-sm-3 control-label">Country</label>
            <div class="col-sm-9">
                <select id="country" data-live-search="true"  class="selectpicker">
                    <option>Afghanistan</option>
                    <option>Bahamas</option>
                    <option>Cambodia</option>
                    <option>Denmark</option>
                    <option>Ecuador</option>
                    <option>Fiji</option>
                    <option>Gabon</option>
                    <option>Haiti</option>
                </select>
                <button type="button" class="btn btn-primary ">Add New</button>
            </div>
        </div> <!-- /.form-group -->
        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
            <div class="col-sm-9">
                <input type="date" id="birthDate" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" id="email" placeholder="Email" class="form-control">
                <span class="help-block">Fill Separated By ';' eg.: foo@bar.com; lore@itsum.com</span>
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-sm-3 control-label">Phone number</label>
            <div class="col-sm-9">
                <input type="text" id="phone" placeholder="Phone Number" class="form-control">
                <span class="help-block">Fill Separated By ';' eg.: XXXXXXXX;YYYYYYYYY </span>
            </div>
        </div>
        <div class="form-group">
            <label for="externalLink" class="col-sm-3 control-label">External Links</label>
            <div class="col-sm-9">
                <input type="text" id="externalLink" placeholder="External Links" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="knowledge" class="col-sm-3 control-label">Knowledge</label>
            <div class="col-sm-9">
                <input type="text" id="knowledge" placeholder="Knowledge" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">I accept <a href="/privacy">terms</a>
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


@endsection