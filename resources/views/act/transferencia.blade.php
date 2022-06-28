<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Inserir transferencia</title>
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
                    <h3>{{ isset($transferencia) ? 'Editar' : 'Inserir' }} Transferência</h3>
                </span>

				<form class="login100-form validate-form" action="{{ isset($transferencia) ? route('user.update.transferencia',['id'=>$transferencia->id]) : route('user.insert.transferencia') }}" method="POST">
                    @csrf

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "O nome da transferencia é obrigatório">
                        <span class="label-input100 ">Descrição da transferencia</span>
                        <br>
                        <input id="desc" class="input100" name="desc" type="text" placeholder="Insira a descrição da transferencia" value="{{ isset($transferencia) ? $transferencia->desc : '' }}">
                    </div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "O valor da transferencia é obrigatório">
						<span class="label-input100 ">Valor</span>
						<input id="value" class="input100" type="text " name="value" placeholder="Insira o valor da transferencia" value="{{ isset($transferencia) ? $transferencia->value : '' }}">
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100" for="bank_id">Banco</span>
						<select  name="bank_id" id="bank_id">
                            @foreach($bancos as $bk)
                            <option value="{{$bk->id}}" {{ isset ($transferencia) && $transferencia->bank_id == $bk->id ? 'selected' : ''}}>{{$bk->desc}}</option>
                            @endforeach
                        </select>
					</div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "A data inicial é obrigatória">
                        <span class="label-input100 "  for="date">Data</span>
                        <input id="date" class="date input100" type="text " name="date" class="" data-mask="00/00/0000" maxlength="10" value="{{ isset($transferencia) ? $transferencia->date : '' }}">
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "O tipo é obrigatório">
						<span class="label-input100 ">Sentido</span>
                        <select  name="way" id="way">
                            <option value="1" {{ isset ($transferencia) && $transferencia->way == 1 ? 'selected' : ''}}>Recebimento</option>
                            <option value="2" {{ isset ($transferencia) && $transferencia->way == 2 ? 'selected' : ''}}>Pagamento</option>
                        </select>
					</div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "O tipo é obrigatório">
						<span class="label-input100 ">Método de Pagamento</span>
                        <select  name="method" id="method">
                            <option value="1" {{ isset ($transferencia) && $transferencia->method == 1 ? 'selected' : ''}}>Pix</option>
                            <option value="2" {{ isset ($transferencia) && $transferencia->method == 2 ? 'selected' : ''}}>TED</option>
                            <option value="3" {{ isset ($transferencia) && $transferencia->method == 3 ? 'selected' : ''}}>DOC</option>
                            <option value="4" {{ isset ($transferencia) && $transferencia->method == 4 ? 'selected' : ''}}>Boleto</option>
                            <option value="5" {{ isset ($transferencia) && $transferencia->method == 5 ? 'selected' : ''}}>Cartão Crédito</option>
                            <option value="6" {{ isset ($transferencia) && $transferencia->method == 6 ? 'selected' : ''}}>Cartão Débito</option>
                        </select>
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
