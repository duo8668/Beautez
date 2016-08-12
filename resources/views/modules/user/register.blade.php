@extends('plainapp')
@section('pageTitle')
Registration
@endsection
@section('header')
<span id="extr-page-header-space"> <span class="hidden-mobile hidden-xs">Already registered?</span>
    <a href="{{action('Modules\User\Http\Controllers\UserController@index')}}" class="btn btn-danger">Sign In</a>
</span>
@endsection
@section('content')
<div id="register-box" class="register-box jarviswidget">

    @include('components.modal')

    <div class="widget-body">
        <validator name="validation1" beautez-validator>
            <form id="registerForm" formid="beautez" class="form-horizontal" action="{{action('Modules\User\Http\Controllers\UserController@registerUser')}}" method="POST" v-ajax>
                {{ csrf_field() }}
                <legend>Registration</legend>
                <fieldset>
                    <div v-validate-class class="form-group has-feedback">
                        <div class="col-md-11 centred">
                            <input type="text" name="firstName" v-model="user.firstName" class="form-control" placeholder="First name"
                                   v-validate:firstname="{checkRule:{rule:true}}"
                                   data-container="body" data-placement="auto right" data-toggle="tooltip"  data-original-title="Key in First name">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>

                            </input>
                        </div>
                    </div>

                    <div v-validate-class class="form-group has-feedback">
                        <div class="col-md-11 centred">
                            <input type="text" name="lastName" v-model="user.lastName" class="form-control" placeholder="Last name"
                                   v-validate:lastname="{checkRule:{rule:true}}"
                                   data-container="body" data-placement="auto right" data-toggle="tooltip"  data-original-title="Key in Last name">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>

                    <div v-validate-class class="form-group has-feedback">
                        <div class="col-md-11 centred">
                            <input type="text" name="userName" v-model="user.userName" class="form-control" placeholder="User name"
                                   v-validate:username="{checkRule:{rule:true}}"
                                   data-container="body" data-placement="auto right" data-toggle="tooltip"  data-original-title="Key in User name">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>

                    <div v-validate-class class="form-group has-feedback">
                        <div class="col-md-11 centred">
                            <input type="email" name="email" v-model="user.email" class="form-control" placeholder="Email"
                                   v-validate:email="{checkRule:{rule:true}}"
                                   data-container="body" data-placement="auto right" data-toggle="tooltip"  data-original-title="Key in Email">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                    </div>

                    <div v-validate-class class="form-group has-feedback">
                        <div class="col-md-11 centred">
                            <input type="password" v-model="user.password" name="password" class="form-control" placeholder="Password"
                                   v-validate:password="{checkRule:{rule:true}}"
                                   data-container="body" data-placement="auto right" data-toggle="tooltip"  data-original-title="Enter your password">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                    </div>

                    <div v-validate-class class="form-group has-feedback">
                        <div class="col-md-11 centred">
                            <input type="password" v-model="user.retype_password" name="retype_password" class="form-control" placeholder="Retype password"
                                   v-validate:retype_password="{checkRule:{rule:true}}"
                                   data-container="body" data-placement="auto right" data-toggle="tooltip"  data-original-title="Re-enter your password">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="row">
                        <div class="col-md-11 centred"> 
                            <div class="checkbox  pull-left">
                                <label>
                                    <input v-model="user.agree_term" class="checkbox style-0" name="agreeTerm" type="checkbox">
                                    <span>@{{user.agree_term ? ' Yes' : ' No'}}, I @{{user.agree_term ? '' : 'don\'t'}} agree to the <a href="#">terms</a></span>
                                </label>
                            </div> 
                            <button type="submit" class="btn btn-primary btn-lg pull-right" ><i class="fa fa-save"></i> Submit</button>
                        </div>
                    </div>
                </fieldset>


            </form>
            <a href="{{action('Modules\User\Http\Controllers\UserController@index')}}" class="text-center">I already have a membership</a>

    </div><!-- /.form-box -->
</validator> 
<modal  :show.sync="showModal" :on-close="close"></modal>

<pre>
@{{ $data | json }}
</pre>

</div><!-- /.register-box -->
@endsection

@section('endBodyScript')
<script>
    var $validationUrl = "{{action('Modules\User\Http\Controllers\UserController@validateUserRegisteration')}}";
</script>
<script src="{{asset('js/modules/user/register.js')}}"></script>
@endsection