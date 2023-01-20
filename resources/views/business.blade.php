<x-layouts.app title="Business title" meta-description="Business description">

    <h1>Businesses</h1>

    {{-- here we have to implement businesses filters--}}
    <form action="{{route('business')}}" method="get">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="fein_ein_number">Email</label>
            <input type="text" class="form-control" id="fein_ein_number" name="fein_ein_number" placeholder="Enter FEIN/EIN">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>

    <table class="table table-sm">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>FEIN/EIN</th>
        </tr>
        </thead>
        <tbody>

        @foreach($businesses as $business)
            <tr>
                <td>{{$business['id']}}</td>
                <td>{{$business['name']}}</td>
                <td>{{$business['fein_ein_number']}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>

    {{-- here we have to implement pagination --}}
    {{ $businesses->render("pagination::default") }}

</x-layouts.app>
