<x-layouts.app title="Business title" meta-description="Business description">

    <div class="container-page">
        <form action="{{route('business')}}" method="get">
            <div class="filter-container">
                <div class="form-group col-3">
                    <div><label>Name</label></div>
                    <div><input type="text" class="form-control" id="name" name="name" value="{{ Request::get('name') }}"
                                placeholder="Enter name"></div>
                </div>
                <div class="form-group col-3">
                    <div><label>Description</label></div>
                    <div><input type="text" class="form-control" id="description" name="description" value="{{ Request::get('description') }}"
                                placeholder="Enter description"></div>
                </div>
                <div class="form-group col-3">
                    <div><label>Location</label></div>
                    <div><input type="text" class="form-control" id="location" name="location" value="{{ Request::get('location') }}"
                                placeholder="Enter location"></div>
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
                            <label>MAIN LOCATION</label>
                        </div>
                        <div class="card-body-description-subtitle">
                            <label>{{$business['location']}}</label>
                        </div>
                    </div>

                    <div class="card-body-highlights">
                        <div class="card-body-description-title">
                            <label>HIGHLIGHTS</label>
                        </div>
                        <div class="card-body-description-subtitle">
                            <li>Board Certified</li>
                            <li>Has Online Scheduling</li>
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
