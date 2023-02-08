<form action="{{ route('imoveis.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <label for="">Título do imóvel</label>
    <input type="text" name="title">
<br>
<br>

    <label for="">Preço de locação</label>
    <input type="text" name="rental_price">
<br>
<br>

    <label for="">Imagemde destaque</label>
    <input type="file" name="cover">

    <button type="submit">Gravar imóvel</button>

</form>
