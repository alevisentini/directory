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
                    <div><label for="status_id">Status</label></div>
                    <div><select name="status_id" id="status_id" class="form-control">
                            <option value="">Select status</option>
                            @foreach($statuses as $id => $name)
                                <option value="{{$id}}" {{ Request::get('status_id') == $id ? 'selected' : '' }}>{{$name}}</option>
                            @endforeach
                        </select></div>
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
                            <label>{{$business->status->name}}</label>
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

    var path = "{{ url('/action') }}";

    $('#name').typeahead({

        source: function(query, process){
            return $.get(path, {query:query}, function(data){
                return process(data);
            });
        }

    });

</script>

<style>
    .typeahead {
        background-color: white;
        width: 320px;
        overflow: hidden;
        position: absolute;
        cursor: default;
        list-style-type: none;
        padding: 5px 0 0 0;
        margin: 0;
        font-size: 14px;
        font-size: 1.4rem;
        border-radius: 3px;
        z-index: 1;
        border: 1px solid #364343;

    }



    .typeahead a {
        color: #364343;
        display: block;
        text-indent: 5px;
        font-size: 12px;
        font-weight: 400;
        height: 20px;
        line-height: 20px;
        letter-spacing: 1px;
        text-transform: capitalize;
        text-decoration:none;
    }

    .typeahead li {
        padding: 10px 0px 10px 0px;
    }

    .typeahead li:hover {
        background: #daf5f5;
    }

    .autocomplete-ui {
        overflow: hidden;
        position: absolute;
        top: 0;
        left: 0;
        cursor: default;
        background: transparent;
        list-style-type: none;
        padding: 5px 0 0 0;
        margin: 0;
        font-size: 14px;
        font-size: 1.4rem;
        -webkit-box-shadow: 0 5px 5px rgb(0 0 0 / 25%);
        -moz-box-shadow: 0 5px 5px rgba(0, 0, 0, .25);
        box-shadow: 0 5px 5px rgb(0 0 0 / 25%);
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        -ms-border-radius: 3px;
        -o-border-radius: 3px;
        border-radius: 3px; }
</style>
