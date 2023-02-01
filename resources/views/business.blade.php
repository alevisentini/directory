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
                    <div><label>Select type</label></div>
                    <div>
                        <select name="type_id" id="type_id"  class="form-control select2 col-3" placeholder="Select type">
                            <option value="">Select type</option>
                            @foreach($types as $id => $name)
                                <option value="{{$id}}" {{ Request::get('type_id') == $id ? 'selected' : '' }}>{{$name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group col-3">
                    <div><label>Select activity</label></div>
                    <div>
                        <select name="activity_id" id="activity_id"  class="form-control select2 col-3" placeholder="Select status">
                            <option value="">Select activity</option>
                            @foreach($activities as $id => $name)
                                <option value="{{$id}}" {{ Request::get('activity_id') == $id ? 'selected' : '' }}>{{$name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group col-3">
                    <div><label>Select status</label></div>
                    <div>
                        <select name="status_id" id="status_id"  class="form-control select2 col-3" placeholder="Select status">
                            <option value="">Select status</option>
                            @foreach($statuses as $id => $name)
                                <option value="{{$id}}" {{ Request::get('status_id') == $id ? 'selected' : '' }}>{{$name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
            <div class="second-filter-container">
                <div class="sub-container">
                        <div><label>Texas file number</label></div>
                    <div>

                        <input type="range" id="texas_sos_file_number" name="texas_sos_file_number" min="0" max="100" step="10"
                        value="{{ Request::get('texas_sos_file_number') }}">
                    </div>
                    <div>
                     <span id="rangeValue"><span></span></span>
                    </div>
                </div>
                <div class="sub-container">
                    <div><label>File number</label></div>

                    <input type="checkbox" name="file_number" value="1"> File 1<br>
                    <input type="checkbox" name="file_number" value="2"> File 2<br>
                    <input type="checkbox" name="file_number" value="3"> File 3<br>
                </div>
            </div>

        </form>

        <div class="total-result">
            <span>Showing </span>{{ $businesses->count() }} <span> of </span> {{ $businesses->total() }}
            <span>companies</span>
        </div>

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

                    <div class="card-body-highlights">
                        <div class="card-body-description-title">
                            <label>Texas file number</label>
                        </div>
                        <div class="card-body-description-subtitle">
                            <label>{{$business['texas_sos_file_number']}}</label>
                        </div>
                    </div>

                    <div class="card-body-highlights">
                        <div class="card-body-description-title">
                            <label>File number</label>
                        </div>
                        <div class="card-body-description-subtitle">
                            <label>{{$business['file_number']}}</label>
                        </div>
                    </div>

                    <div class="card-body-highlights">
                        <div class="card-body-description-title">
                            <label>Type</label>
                        </div>
                        <div class="card-body-description-subtitle">
                            <label>{{$business->type->name}}</label>
                        </div>
                    </div>

                    <div class="card-body-highlights">
                        <div class="card-body-description-title">
                            <label>Activity</label>
                        </div>
                        <div class="card-body-description-subtitle">
                            <label>{{$business->activity->name}}</label>
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


        @empty
            <div class="no-data-container">
                <label>No Search Results Found</label>
            </div>
        @endforelse

        {{$businesses->appends(['name' => Request::get('name'),'foreign_legal_name' => Request::get('foreign_legal_name'), 'fictitious_name' => Request::get('fictitious_name'), 'status_id' => Request::get('status_id')])->links('pagination.default')}}
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
    // Show value when slider is changing
    document.querySelector('#rangeValue span').innerHTML = {{ Request::get('texas_sos_file_number') ? Request::get('texas_sos_file_number') : 1 }};
    document.querySelector('#texas_sos_file_number').addEventListener('input', function() {
        document.querySelector('#rangeValue span').innerHTML = this.value;
    });
</script>

