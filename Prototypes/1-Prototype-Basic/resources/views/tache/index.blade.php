@include('layouts.head')
<a href="" class="btn btn-primary">Ajouter</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tache as $value)


        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
