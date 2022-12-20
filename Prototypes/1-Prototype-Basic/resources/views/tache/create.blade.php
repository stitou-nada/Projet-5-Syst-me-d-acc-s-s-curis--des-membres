
@include('layouts.head')
Ajouter tache:
<form action="{{route('tache.store')}}" method="POST">
    @csrf
    <input type="text" placeholder="nom" name="name"></br>
    <button class="btn btn-primary">Ajouter</button>
</form>
