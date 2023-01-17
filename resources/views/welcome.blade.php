<x-layouts.app title="Home title" meta-description="Home description">

    <div class="welcome-page">
        <h1>Home</h1>

        <h4>Work in progress..</h4>
        <div class="w3-border">
            <div class="w3-grey" style="height:24px;width:50%"></div>
        </div>

        @foreach($companies as $company)

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
                <div class="card-body-picture"></div>
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

        @endforeach
    </div>
</x-layouts.app>
