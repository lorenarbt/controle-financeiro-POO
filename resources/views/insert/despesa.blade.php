<h3>Inserir Nova Despesa</h3>

<form action="{{route('user.create.despesa')}}" method="POST">
    @csrf

    <label for="user_id">Usuário Logado:</label>
    <input id="user_id" name="user_id" type="text" value="1" placeholder="Lorena"> {{-- addicionar mask de reais --}}
    <br>
    <br>

    <label for="desc">Descrição: </label>
    <input id="desc" name="desc" type="text" value="Comida da Sharon">
    <br>
    <br>

    <label for="value">Valor: </label>
    <input id="value" name="value" type="text" value="300,00"> {{-- addicionar mask de reais --}}
    <br>
    <br>

    <label for="fixed">Despesa Fixa: </label>
    <select name="fixed" id="fixed">
        <option value="1">Sim</option>
        <option value="0">Não</option>
    </select>
    <br>
    <br>

    SE PRAZO NAO FIXO<br>
    <label for="ini_month">Mês Inicial</label>
    <input id="ini_month" name="ini_month" type="date">
    <br>

    <label for="deadline">Prazo em Meses</label>
    <input id="deadline" name="deadline" type="number" value="2">
    <br>
    <br>

    <button type="submit">Enviar</button>
</form>
