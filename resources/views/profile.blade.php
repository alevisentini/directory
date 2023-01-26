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

    <main>
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
                <x-details-box title="Experiences" icon-class="calendar" :items="$itemsExperiences" />
                <x-details-box title="Educational" icon-class="calendar" :items="$itemsEducation" />
                <x-details-box title="SomethingElse" icon-class="calendar" :items="$itemsSomethingElse" />

            </div>
            <div id="profile-rates">
                <img src="http://via.placeholder.com/200x400?text=Rating" />
            </div>
        </div>
    </main>

</x-layouts.app>

<style>
    @import url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    .breadcrumb {
        display: flex;
    }

    .breadcrumb a {
        padding-right: 5px;
        font-size: 14px;
        text-decoration: none;
        color: #364343;
    }

    .breadcrumb div:after {
        content: '>';
        padding-left: 2px;
        font-weight: 700;
        font-size: 10px;
        font-size: 1rem;
        margin-right: 10px;
    }

    .breadcrumb div:last-child:after {
        content: none;
    }


    main {
        display: flex;
        flex-flow: column wrap;
        max-width: 1260px;
        margin: auto;
        padding: 10px 0;
    }

    img {
        border-radius: 2px;
    }

    /* testing only */

    #profile-header {
        display: flex;
        flex-flow: row wrap;
        background-color: #e1eae6;
        margin-bottom: 20px;
        border-radius: 2px;
    }

    #profile-picture {
        height: 150px;
        width: 150px;
        background-color: #007cb8;
    }

    #profile-title {
        display: flex;
        flex-flow: column wrap;
        justify-content: start;
        margin-left: 20px;
    }

    #profile-title h2 {
        font-weight: 400;
        margin-bottom: 10px;
        font-size: 30px;
        font-size: 3rem;
        margin: 0;
    }

    #profile-title h4 {
        font-size: 14px;
        font-size: 1.3rem;
        font-weight: 300;
        margin: 0;
    }

    .content-in-cols {
        display: flex;
        flex-flow: row wrap;
        gap: 20px;
    }

    #profile-contact-info .summary-contact {
        max-width: 190px;
    }

    #profile-contact-info .button {
        width: 100%;
        margin-bottom: 15px;
        background: #fff;
        font-weight: 400;
        text-transform: none;
        text-decoration: none;
        color: #364343;
        border: 1px solid #364343;
        border-radius: 2px;
        padding: 12px 0px 12px 9px;
        display: flex;
    }

    #profile-contact-info .button.button-appt {
        background: #00bdbd;
        color: #fff;
        border-color: #00bdbd;
    }

    #profile-contact-info .button .button-icon {
        padding-right: 10px;
        font-size: 20px;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
    }

    #profile-bio {
        display: flex;
        flex-flow: column wrap;
        gap: 20px;
    }
</style>
