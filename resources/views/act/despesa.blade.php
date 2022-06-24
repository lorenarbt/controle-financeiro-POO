<h3>{{ isset($despesa) ? 'Editar' : 'Inserir' }} Nova Despesa</h3>
<form action="{{ isset($despesa) ? route('user.update.despesa',['id'=>$despesa->id]) : route('user.insert.despesa') }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="{{ isset($despesa) ? 'PUT' : 'POST'}}">

    <label for="user_id">Usuário Logado:</label> // precisa obter id do usuário sem passar para html
    <input id="user_id" name="user_id" type="text" value="{{ isset($despesa) ? $despesa->user_id : '' }}">
    <br>
    <br>

    <label for="desc">Descrição: </label>
    <input id="desc" name="desc" type="text" value="{{ isset($despesa) ? $despesa->desc : '' }}">
    <br>
    <br>

    <label for="value">Valor: </label>
    <input id="value" name="value" type="text" value="{{ isset($despesa) ? $despesa->value : '' }}"> {{-- addicionar mask de reais --}}
    <br>
    <br>

    <label for="fixed">Despesa Fixa: </label>
    <select name="fixed" id="fixed">
        <option value="1">Sim</option>
        <option value="0">Não</option>
    </select>
    <br>
    <br>

    <label for="ini_month">Data Inicial</label>
    <input id="ini_month" class="date" name="ini_month" type="text" class="" data-mask="00/00/0000" maxlength="10" value="{{ isset($despesa) ? $despesa->ini_month : '' }}">
    <br>
    <br>

    <label for="deadline">Prazo</label>
    <select name="deadline" id="deadline">
        @foreach($deadlines as $dl)
        <option value="{{$dl->id}}">{{$dl->desc}}</option>
        @endforeach
    </select>
    <br>
    <br>

    <button type="submit">Enviar</button>
</form>

<script src="js/jquery.mask.js"></script>
