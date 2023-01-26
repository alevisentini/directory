@php
    $itemsExperiences = ['Experiencia 1', 'Experiencia 2', 'Experiencia 3'];
    $itemsEducation = ['Experiencia 1', 'Experiencia 2', 'Experiencia 3'];
    $itemsSomethingElse = ['Experiencia 1', 'Experiencia 2', 'Experiencia 3'];
@endphp
<x-layouts.app title="Profile" meta-description="Profile">

    <div class="breadcrumb-container">
        <div>
            <label></label>
            <ol class="breadcrumb">
                <div>
                    <i class="fa fa-home"></i>
                    <a href="/">HOME</a>
                </div>
                @for ($i = 2; $i <= count(Request::segments()); $i++)
                    <div>
                        <a href="{{ URL::to(implode('/', array_slice(Request::segments(), 0, $i, true))) }}">
                            {{ strtoupper(Request::segment($i)) }}
                        </a>
                    </div>
                @endfor
            </ol>
        </div>
        <div>
            <button onclick="window.location='{{ url('/') }}'">Back to Results</button>
        </div>
    </div>

    <main id="profileMain">
        <div id="profile-header">
            <div id="profile-picture">
                <img src="http://via.placeholder.com/150" />
            </div>
            <div id="profile-title">
                <h2>[Profile Name, MD.]</h2>
                <h4>[Profile roles]</h4>
            </div>
        </div>
        <div id="profile-middle-content" class="content-in-cols">
            <div id="profile-contact-info">
                <div class="summary-contact">

                    <a href="#" class="button button-appt" rel="nofollow" role="link" tabindex="0">
                        <span class="button-icon fa fa-calendar"></span>
                        Request Visit
                    </a>
                </div>
                <img src="http://via.placeholder.com/200x400?text=Contact+menu" />
            </div>
            <div id="profile-bio">
                <x-details-box title="Experiences" icon-class="briefcase" :items="$itemsExperiences" />
                <x-details-box title="Educational" icon-class="graduation-cap" :items="$itemsEducation" />
                <x-details-box title="SomethingElse" icon-class="tag" :items="$itemsSomethingElse" />

            </div>
            <div id="profile-rates">
                <img src="http://via.placeholder.com/200x400?text=Rating" />
            </div>
        </div>
    </main>

</x-layouts.app>

<style>

</style>
