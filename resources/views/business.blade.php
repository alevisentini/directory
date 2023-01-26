<x-layouts.app title="Business title" meta-description="Business description">

    <div class="container-page">
        <form action="{{route('business')}}" method="get" id="filter-form">
            <div class="filter-container">
                <div class="form-group col-3">
                    <div><label>Name</label></div>
                    <div>
                        <input type="text" name="name" id="name" class="form-control typeahead ui-autocomplete-input" value="{{ Request::get('name') }}"
                               placeholder="Type name..." autocomplete="off" />
                    </div>
                </div>

                <div class="form-group col-3">
                    <div><label>Legal name</label></div>
                    <div><input type="text" class="form-control" id="foreign_legal_name" name="foreign_legal_name" value="{{ Request::get('foreign_legal_name') }}"
                                placeholder="Enter legal name"></div>
                </div>
                <div class="form-group col-3">
                    <div><label>Fictitious name</label></div>
                    <div><input type="text" class="form-control" id="fictitious_name" name="fictitious_name" value="{{ Request::get('fictitious_name') }}"
                                placeholder="Enter fictitious name"></div>
                </div>
                <div class="form-group col-3">
                    <div><label>Select status</label></div>
                    <div>
                        <select name="id_status" id="status_id"  class="form-control select2 col-3" placeholder="Select status" >
                            <option value="">Select status</option>
                            @foreach($statuses as $id => $name)
                                <option value="{{$id}}" {{ Request::get('status_id') == $id ? 'selected' : '' }}>{{$name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </div>

        </form>

        @forelse($businesses as $business)

            <div class="card-container">
                <div class="card-header">
                    <div class="card-header-container">
                        <label class="card-header-name">{{$business['name']}}</label>
                        <div class="vertically-separator"></div>
                        <label class="card-header-profession">{{$business['description']}}</label>
                    </div>
                    <div class="card-header-description">
                        <span>Sponsored</span>
                    </div>
                </div>

                <div class="card-body">
                    <div class="card-body-picture">
                        <div class="card-body-picture-container">
                            <label>No image available</label>
                        </div>
                    </div>
                    <div class="card-body-stadistic">
                        <div>
                            <label>ProfilePoints {{$business['profile_point']}}</label>
                        </div>
                        <div>
                            <label>Avg. RatingL {{$business['rating']}}</label>
                        </div>
                        <div>
                            <div class="clip-star"></div>
                            <div class="clip-star"></div>
                            <div class="clip-star"></div>
                            <div class="clip-star"></div>
                            <div class="clip-star"></div>
                        </div>
                    </div>

                    <div class="card-body-location">
                        <div class="card-body-description-title">
                            <label>LEGAL NAME</label>
                        </div>
                        <div class="card-body-description-subtitle">
                            <label>{{$business['foreign_legal_name']}}</label>
                        </div>
                    </div>

                    <div class="card-body-highlights">
                        <div class="card-body-description-title">
                            <label>Fictitious name</label>
                        </div>
                        <div class="card-body-description-subtitle">
                            <label>{{$business['fictitious_name']}}</label>
                        </div>
                    </div>

                    <div class="card-body-highlights">
                        <div class="card-body-description-title">
                            <label>Status</label>
                        </div>
                        <div class="card-body-description-subtitle">
                            <label>{{$business['id_status']}}</label>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div>
                        <label>{{$business['phone']}}</label>
                    </div>
                    <div>
                        <button >Request appointment</button>
                        <button onclick="window.location='{{ route('profile', ['name' => $business['name']]) }}'">View Profile</button>
                    </div>
                </div>
            </div>
            {{ $businesses->links('pagination.default') }}

        @empty
            <div class="no-data-container">
                <label>No Search Results Found</label>
            </div>
        @endforelse
    </div>

</x-layouts.app>

<script>

    $(document).ready(function() {
        $('.select2').select2();
    });

    var path = "{{ url('/action') }}";

    $('#name').typeahead({

        source: function(query, process){
            return $.get(path, {query:query}, function(data){
                return process(data);
            });
        }

    });

</script>

