@inject('permissao', 'App\Http\Controllers\UserController')
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GERAPAE</title>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/../css/bootstrap.min.css">
    <!-- PLUGINS CSS -->
    <link rel="stylesheet" type="text/css" href="/../css/plugins/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/../css/plugins/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="/../css/plugins/nouislider.min.css" />
    <link rel="stylesheet" type="text/css" href="/../css/plugins/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="/../css/plugins/ion.rangeSlider.css" />
    <link rel="stylesheet" type="text/css" href="/../css/plugins/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" type="text/css" href="/../css/plugins/simple-line-icons.css" />
    <link rel="stylesheet" type="text/css" href="/../css/plugins/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="/../css/plugins/fullcalendar.min.css" />
    <link rel="stylesheet" type="text/css" href="/../css/plugins/bootstrap-material-datetimepicker.css" />
    <link href="/../css/style.css" rel="stylesheet">
    <!-- IMAGENS -->
    <link rel="shortcut icon" href="{{ asset('/img/logotipo.png') }}"> </head>

<body id="mimin" class="dashboard">
    <!-- start: Header -->
    <nav class="navbar navbar-default header navbar-fixed-top">
        <div class="col-md-12 nav-wrapper">
            <div class="navbar-header">
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- <img src = "{{ asset('img/logo-png.png') }}" height: "200" width: "200"> --></a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Página Inicial</a></li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->@if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Entrar</a></li>
                    <li><a href="{{ url('/register') }}">Registrar-se</a></li> @else
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Sair</a></li>
                        </ul>
                    </li> @endif </ul>
            </div>
        </div>
    </nav> @if (!(Auth::guest()))
    <div id="left-menu">
        <div class="sub-left-menu scroll">
            <ul class="nav nav-list">
                <!--  ADM =1, RECEPCIONISTA =2, PSICOLOGO = 3, ASSIST SOCIAL = 4, FONO = 5, PEDAGOGO =6, FISIO =7 -->@if (in_array(1, $permissao->verificaPermissao()))
                <li><a href="{{ url('/Usuario/solicitacoes') }}"><span class="fa fa-user"></span>
                 Solicitações ({{ \App\User::where(['activated' => 0])->get()->count() }})</a></li>
                <li><a href="{{ url('/Usuario/lista') }}"><span class="fa fa-user"></span> Usuários</a></li> @endif
                <li class="active ripple"> <a class="tree-toggle nav-header"><span class="fa fa-user" aria-hidden="true"></span>Pacientes
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                    <ul class="nav nav-list tree">
                        <li><a href="{{ url('/PCD/novo') }}"><span class="fa fa-user-plus" aria-hidden="true"></span>Adicionar Paciente</a></li>
                        <li>
                            <a href="{{ url('/PCD/lista') }}"> <span class="fa fa-search" aria-hidden="true"></span> Listar Pacientes</a>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ url('/emConstrucao') }}"><span class="fa fa-calendar"></span> Agenda</a></li>
                <li><a href="{{ url('/emConstrucao') }}"><span class="fa fa-calendar"></span> Lista de Presença</a></li>
            </ul>
        </div>
    </div> @endif @yield('content')
    <!-- JAVASCRIPT -->
    <script src="/../js/jquery.min.js"></script>
    <script src="/../js/jquery.ui.min.js"></script>
    <script src="/../js/bootstrap.min.js"></script>
    <script src="/../js/dateinput.js"></script>
    <script src="/../js/nisinput.js"></script>
    <script src="../js/dynamicinput.js"></script>
    <script src="../js/dynamicselectlist.js"></script>
    <!-- PLUGINS JAVASCRIPT -->
    <script src="/../js/plugins/moment.min.js"></script>
    <script src="/../js/plugins/jquery.knob.js"></script>
    <script src="/../js/plugins/ion.rangeSlider.min.js"></script>
    <script src="/../js/plugins/bootstrap-material-datetimepicker.js"></script>
    <script src="/../js/plugins/jquery.nicescroll.js"></script>
    <script src="/../js/plugins/jquery.mask.min.js"></script>
    <script src="/../js/plugins/select2.full.min.js"></script>
    <script src="/../js/plugins/nouislider.min.js"></script>
    <script src="/../js/plugins/jquery.validate.min.js"></script>
    <script src="/../js/addFamilyMember.js"></script>
    <script src="/../js/main.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            $("#signupForm").validate({
                errorElement: "em"
                , errorPlacement: function (error, element) {
                    $(element.parent("div").addClass("form-animate-error"));
                    error.appendTo(element.parent("div"));
                }
                , success: function (label) {
                    $(label.parent("div").removeClass("form-animate-error"));
                }
                , rules: {
                    validate_firstname: "required"
                    , validate_lastname: "required"
                    , validate_username: {
                        required: true
                        , minlength: 2
                    }
                    , validate_password: {
                        required: true
                        , minlength: 5
                    }
                    , validate_confirm_password: {
                        required: true
                        , minlength: 5
                        , equalTo: "#validate_password"
                    }
                    , validate_email: {
                        required: true
                        , email: true
                    }
                    , validate_agree: "required"
                }
                , messages: {
                    validate_firstname: "Please enter your firstname"
                    , validate_lastname: "Please enter your lastname"
                    , validate_username: {
                        required: "Please enter a username"
                        , minlength: "Your username must consist of at least 2 characters"
                    }
                    , validate_password: {
                        required: "Please provide a password"
                        , minlength: "Your password must be at least 5 characters long"
                    }
                    , validate_confirm_password: {
                        required: "Please provide a password"
                        , minlength: "Your password must be at least 5 characters long"
                        , equalTo: "Please enter the same password as above"
                    }
                    , validate_email: "Please enter a valid email address"
                    , validate_agree: "Please accept our policy"
                }
            });
            // propose username by combining first- and lastname
            $("#username").focus(function () {
                var firstname = $("#firstname").val();
                var lastname = $("#lastname").val();
                if (firstname && lastname && !this.value) {
                    this.value = firstname + "." + lastname;
                }
            });
            $('.mask-date').mask('00/00/0000');
            $('.mask-time').mask('00:00:00');
            $('.mask-date_time').mask('00/00/0000 00:00:00');
            $('.mask-cep').mask('00000-000');
            $('.mask-phone').mask('0000-0000');
            $('.mask-phone_with_ddd').mask('(00) 0000-0000');
            $('.mask-phone_us').mask('(000) 000-0000');
            $('.mask-mixed').mask('AAA 000-S0S');
            $('.mask-cpf').mask('000.000.000-00', {
                reverse: true
            });
            $('.mask-money').mask('000.000.000.000.000,00', {
                reverse: true
            });
            $('.mask-money2').mask("#.##0,00", {
                reverse: true
            });
            $('.mask-ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
                translation: {
                    'Z': {
                        pattern: /[0-9]/
                        , optional: true
                    }
                }
            });
            $('.mask-ip_address').mask('099.099.099.099');
            $('.mask-percent').mask('##0,00%', {
                reverse: true
            });
            $('.mask-clear-if-not-match').mask("00/00/0000", {
                clearIfNotMatch: true
            });
            $('.mask-placeholder').mask("00/00/0000", {
                placeholder: "__/__/____"
            });
            $('.mask-fallback').mask("00r00r0000", {
                translation: {
                    'r': {
                        pattern: /[\/]/
                        , fallback: '/'
                    }
                    , placeholder: "__/__/____"
                }
            });
            $('.mask-selectonfocus').mask("00/00/0000", {
                selectOnFocus: true
            });
            var options = {
                onKeyPress: function (cep, e, field, options) {
                    var masks = ['00000-000', '0-00-00-00'];
                    mask = (cep.length > 7) ? masks[1] : masks[0];
                    $('.mask-crazy_cep').mask(mask, options);
                }
            };
            $('.mask-crazy_cep').mask('00000-000', options);
            var options2 = {
                onComplete: function (cep) {
                    alert('CEP Completed!:' + cep);
                }
                , onKeyPress: function (cep, event, currentField, options) {
                    console.log('An key was pressed!:', cep, ' event: ', event, 'currentField: ', currentField, ' options: ', options);
                }
                , onChange: function (cep) {
                    console.log('cep changed! ', cep);
                }
                , onInvalid: function (val, e, f, invalid, options) {
                    var error = invalid[0];
                    console.log("Digit: ", error.v, " is invalid for the position: ", error.p, ". We expect something like: ", error.e);
                }
            };
            $('.mask-cep_with_callback').mask('00000-000', options2);
            var SPMaskBehavior = function (val) {
                    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
                }
                , spOptions = {
                    onKeyPress: function (val, e, field, options) {
                        field.mask(SPMaskBehavior.apply({}, arguments), options);
                    }
                };
            $('.mask-sp_celphones').mask(SPMaskBehavior, spOptions);
            var slider = document.getElementById('noui-slider');
            noUiSlider.create(slider, {
                start: [20, 80]
                , connect: true
                , range: {
                    'min': 0
                    , 'max': 100
                }
            });
            var slider = document.getElementById('noui-range');
            noUiSlider.create(slider, {
                start: [20, 80]
                , step: 10
                , margin: 20
                , connect: true
                , direction: 'rtl'
                , orientation: 'vertical'
                , behaviour: 'tap-drag'
                , range: {
                    'min': 0
                    , 'max': 100
                }
                , pips: {
                    mode: 'steps'
                    , density: 2
                }
            });
            $(".select2-A").select2({
                placeholder: "Select a state"
                , allowClear: true
            });
            $(".select2-B").select2({
                tags: true
            });
            $("#range1").ionRangeSlider({
                type: "double"
                , grid: true
                , min: -1000
                , max: 1000
                , from: -500
                , to: 500
            });
            $('.dateAnimate').bootstrapMaterialDatePicker({
                weekStart: 0
                , time: false
                , animation: true
            });
            $('.date').bootstrapMaterialDatePicker({
                weekStart: 0
                , time: false
            });
            $('.time').bootstrapMaterialDatePicker({
                date: false
                , format: 'HH:mm'
                , animation: true
            });
            $('.datetime').bootstrapMaterialDatePicker({
                format: 'dddd DD MMMM YYYY - HH:mm'
                , animation: true
            });
            $('.date-fr').bootstrapMaterialDatePicker({
                format: 'DD/MM/YYYY HH:mm'
                , lang: 'fr'
                , weekStart: 1
                , cancelText: 'ANNULER'
            });
            $('.min-date').bootstrapMaterialDatePicker({
                format: 'DD/MM/YYYY HH:mm'
                , minDate: new Date()
            });
            $(".dial").knob({
                height: 80
            });
            $('.dial1').trigger('configure', {
                "min": 10
                , "width": 80
                , "max": 80
                , "fgColor": "#FF6656"
                , "skin": "tron"
            });
            $('.dial2').trigger('configure', {
                "width": 80
                , "fgColor": "#FF6656"
                , "skin": "tron"
                , "cursor": true
            });
            $('.dial3').trigger('configure', {
                "width": 80
                , "fgColor": "#27C24C"
            , });
        });
    </script>
   </body>
</html>