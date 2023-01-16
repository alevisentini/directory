<x-layouts.app title="Entity title" meta-description="Entity description">

    <h1>Entities</h1>

    {{-- here we have to implement entity's filters--}}
    <form action="{{route('entity')}}" method="get">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>

 

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

    {{-- here we have to implement pagination --}}
    {{ $entities->appends($_GET)->links()}}

</x-layouts.app>
