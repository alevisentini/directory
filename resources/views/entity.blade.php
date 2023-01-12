<x-layouts.app title="Entity title" meta-description="Entity description">

    <h1>Entities</h1>

    <table class="table table-sm">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Website</th>
        </tr>
        </thead>
        <tbody>

        @foreach($entities as $entity)
            <tr>
                <td>{{$entity['id']}}</td>
                <td>{{$entity['name']}}</td>
                <td>{{$entity['email']}}</td>
                <td>{{$entity['phone']}}</td>
                <td>{{$entity['website']}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>


</x-layouts.app>
