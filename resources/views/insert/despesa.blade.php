<form action="{{route('user.insert.despesa')}}" method="POST">
    @csrf

    <label for="desc">Descrição</label>
    <input id="desc" name="desc" type="text">
    <br>
    <br>

    <label for="value">Valor</label>
    <input id="value" name="value" type="text"> {{-- addicionar mask de reais --}}
    <br>
    <br>

    <label for="fixed"></label>
    <select name="fixed" id="fixed">
        <option value="1">Sim</option>
        <option value="0">Não</option>
    </select>
    <br>
    <br>

    <button type="submit">Enviar</button>

    {{-- <input id="fixed" name="fixed" type="text">   // select option sim ou não --}}
</form>
