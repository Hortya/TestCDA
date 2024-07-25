<form action="{{$action}}" method="post" class="form">
    @csrf
    @if($action !== 'store')
    <input type="hidden" name="id" value="{{$book->id}}">
    @endif
    <label for="name">Le nom de votre délicieux livre</label>
    @if($action !== 'store')
    <input type="text" name="name" id="name" required value="{{$book->name}}">
    @else
    <input type="text" name="name" id="name" required>
    @endif
    <label for="price">Le prix de votre suculent livre</label>
    @if($action !== 'store')
    <input type="text" name="price" id="price" required value="{{$book->price}}">
    @else
    <input type="text" name="price" id="price" required>
    @endif
    <label for="summary">Le résumé de votre appetissant bouquin</label>
    <textarea name="summary" id="summary" required>@if($action !== 'store'){{$book->summary}}@endif
    </textarea>
    <button type="submit">Nourrit moi NOME NOME NOME</button>
</form>