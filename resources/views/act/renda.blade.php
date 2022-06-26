<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


    <style>
        body {
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
        }
        @font-face {
          font-family: Poppins-Regular;
          src: url('{{asset('../fonts/poppins/Poppins-Regular.ttf')}}');
        }

        @font-face {
          font-family: Poppins-Medium;
          src: url('{{asset('../fonts/poppins/Poppins-Medium.ttf')}}');
        }

        @font-face {
          font-family: Poppins-Bold;
          src: url('{{asset('../fonts/poppins/Poppins-Bold.ttf')}}');
        }

        @font-face {
          font-family: Poppins-SemiBold;
          src: url('{{asset('../fonts/poppins/Poppins-SemiBold.ttf')}}');
        }
    </style>

<!--===============================================================================================-->
    <link href="{{asset('images/icons/favicon.ico')}}" rel="icon" type="image/png"/>
<!--===============================================================================================-->
	<link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<!--===============================================================================================-->
	<link href="{{asset('fonts/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
<!--===============================================================================================-->
	<link href="{{asset('fonts/material-design-iconic-font.min.css')}}" rel="stylesheet" type="text/css"/>
<!--===============================================================================================-->
    <link href="{{asset('vendor/animate/animate.css')}}" rel="stylesheet" type="text/css"/>
<!--===============================================================================================-->
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" type="text/css"/>
<!--===============================================================================================-->
    <link href="{{asset('vendor/animsition/css/animsition.min.css')}}" rel="stylesheet" type="text/css"/>
<!--===============================================================================================-->
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" type="text/css"/>
<!--===============================================================================================-->
    <link href="{{asset('vendor/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css"/>
<!--===============================================================================================-->
    <link href="{{asset('css/util.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css"/>
<!--===============================================================================================-->



</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url({{asset('images/bg-01.jpg')}});">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

                <span class="login100-form-title p-b-49">
                    <h3>{{ isset($renda) ? 'Editar' : 'Inserir' }} Renda</h3>
                </span>

				<form class="login100-form validate-form" action="{{ isset($renda) ? route('user.update.renda',['id'=>$renda->id]) : route('user.insert.renda') }}" method="POST">
                    @csrf

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "A descrição da renda é obrigatório">
						<span class="label-input100 ">Descrição da renda</span>
						<input id="desc" class="input100" type="text " name="desc" placeholder="Insira o valor da renda" value="{{ isset($renda) ? $renda->desc : '' }}"> {{-- addicionar mask de reais --}}
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "O valor da renda é obrigatório">
						<span class="label-input100 ">Valor da renda</span>
						<input id="value" class="input100" type="text " name="value" placeholder="Insira o valor da renda" value="{{ isset($renda) ? $renda->user_id : '' }}"> {{-- addicionar mask de reais --}}
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-23" data-validate = "A data inicial é obrigatória">
						<span class="label-input100 ">Data Inicial</span>
						<input id="ini_date" class="input100" type="text " name="ini_date" placeholder="Insira o valor da renda" value="{{ isset($renda) ? $renda->ini_date : '' }}"> {{-- addicionar mask de reais --}}
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>


					<div class="wrap-input100 m-b-23">
						<span class="label-input100 ">Data Final</span>
						<input id="end_date" class="input100" type="text " name="end_date" placeholder="Insira o valor da renda" value="{{ isset($renda) ? $renda->end_date : '' }}"> {{-- addicionar mask de reais --}}
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

                    <br>
                    <br>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>

							<button class="login100-form-btn"  type="submit" >
								Enviar
							</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>

<!--===============================================================================================-->
	<script src="{{ asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--==========================================banc=====================================================-->
	<script src="{{ asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{ asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('js/main.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('js/jquery.mask.js')}}"></script>

</body>
</html>
