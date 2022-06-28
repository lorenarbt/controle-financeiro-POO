<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Inserir Banco</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link href="{{asset('assets/images/favicon.png')}}" rel="icon" type="image/png"/>
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
@include('layout.fonts')
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url({{asset('images/bg-01.jpg')}});">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

                <span class="login100-form-title p-b-49">
                    <h3>{{ isset($banco) ? 'Editar' : 'Inserir' }} Banco</h3>
                </span>

				<form class="login100-form validate-form" action="{{ isset($banco) ? route('user.update.banco',['id'=>$banco->id]) : route('user.insert.banco') }}" method="POST">
                    @csrf

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "O nome banco é obrigatório">
                        <span class="label-input100 ">Descrição do banco</span>
                        <input id="desc" name="desc" class="input100" type="text" placeholder="Insira a descrição da banco" value="{{ isset($banco) ? $banco->desc : '' }}">
						{{-- <span class="focus-input100" data-symbol="&#xf044;"></span> --}}
                    </div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "O valor da banco é obrigatório">
						<span class="label-input100 ">Valor</span>
						<input id="value" name="value" class="input100" type="text" placeholder="Insira o valor da banco" value="{{ isset($banco) ? $banco->balance : '' }}">
						{{-- <span class="focus-input100" data-symbol="&#xf4b9;"></span> --}}
					</div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "O tipo é obrigatório">
						<span class="label-input100 ">Tipo de Conta</span>
                        <select class="select" name="type" id="type">
                            <option value="1" {{ isset($banco) && $banco->type == 1 ? 'selected' : ''}}>poupança</option>
                            <option value="2" {{ isset($despesa) && $banco->type == 2 ? 'selected' : ''}}>corrente</option>
                        </select>
                        {{-- <span class="focus-input100" data-symbol="&#xf66f;"></span> --}}
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
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<!--===============================================================================================-->
    <script src="js/jquery.mask.js"></script>

</body>
</html>
