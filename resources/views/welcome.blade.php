<x-layouts.app title="Home title" meta-description="Home description">

    <div class="welcome-page">
        <form action="{{route('home')}}" method="get">
            <div class="filter-container">
                <div class="form-group">
                    <div><label>Name</label></div>
                    <div><input type="text" class="form-control" id="name" name="name" placeholder="Enter name"></div>
                </div>
                <div class="form-group">
                    <div><label>Description</label></div>
                    <div><input type="text" class="form-control" id="description" name="description" placeholder="Enter description"></div>
                </div>
                <div class="form-group">
                    <div><label>Location</label></div>
                    <div><input type="text" class="form-control" id="location" name="location" placeholder="Enter location"></div>
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>

        @forelse($companies as $company)

        <div class="card-container">
            <div class="card-header">
                <div class="card-header-container">
                        <label class="card-header-name">{{$company['name']}}</label>
                        <div class="vertically-separator"></div>
                        <label class="card-header-profession">{{$company['description']}}</label>
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
                        <a>ProfilePoints {{$company['profile_point']}}</a>
                    </div>
                    <div>
                        <a>Avg. RatingL {{$company['rating']}}</a>
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
                        <label>{{$company['location']}}</label>
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
                    <label>{{$company['phone']}}</label>
                </div>
                <div>
                    <button>Request appointment</button>
                    <button>View Profile</button>
                </div>
            </div>
        </div>
        {{ $companies->links('pagination.default') }}

        @empty
            <div class="no-data-container">
                <label>No Search Results Found</label>
            </div>
        @endforelse
    </div>

</x-layouts.app>
