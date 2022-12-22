
<a href="{{route('tache.create')}}" class="btn btn-primary">Ajouter</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom </th>
            <th>Action </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tache as $value)


        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>
                <form action="{{route('tache.delete',$value->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                <button  class="btn btn-danger">Suprimer</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
