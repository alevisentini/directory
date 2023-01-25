<x-layouts.app title="Profile" meta-description="Profile">

    <div class="breadcrumb-container">
        <div>
            <label></label>
            <ol class="breadcrumb">
                <div>
                    <i class="fa fa-home"></i>
                    <a href="/">HOME</a>
                </div>
                @for($i = 2; $i <= count(Request::segments()); $i++) <div>
                    <a href="{{ URL::to( implode( '/', array_slice(Request::segments(), 0 ,$i, true)))}}">
                        {{strtoupper(Request::segment($i))}}
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
                <img src="https://via.placeholder.com/150" />
            </div>
            <div id="profile-title">
                <h2>[Profile Name, MD.]</h2>
                <h4>[Profile roles]</h4>
            </div>
        </div>
        <div id="profile-middle-content" class="content-in-cols">
            <div id="profile-contact-info">
                <img src="https://via.placeholder.com/200x400?text=Contact+Menu" />
            </div>
            <div id="profile-bio">
                <div id="profile-experiences">
                <img src="https://via.placeholder.com/800x200?text=Box-details" />
                </div>
                <div id="profile-education">
                <img src="https://via.placeholder.com/800x200?text=Box-details" />
                </div>
                <div id="profile-locations">
                <img src="https://via.placeholder.com/800x200?text=Map+location" />
                </div>
            </div>
        </div>
    </main>

</x-layouts.app>

<style>
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
    }

    /* testing only */

    #profile-header {
        display: flex;
        flex-flow: row wrap;
        background-color: #e1eae6;
        margin-bottom: 20px;
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

    #profile-bio {
        display: flex;
        flex-flow: column wrap;
        gap: 20px;
    }
</style>
