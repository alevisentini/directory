<x-layouts.app title="Profile" meta-description="Profile">

    <div class="breadcrumb-container">
        <div >
            <label></label>
            <ol class="breadcrumb">
                <div>
                    <i class="fa fa-home"></i>
                    <a href="{{route('home')}}">HOME</a>
                </div>
                @for($i = 2; $i <= count(Request::segments()); $i++)
                    <div>
                        <a href="{{ URL::to( implode( '/', array_slice(Request::segments(), 0 ,$i, true)))}}">
                            {{strtoupper(Request::segment($i))}}
                        </a>
                    </div>
                @endfor
            </ol>
        </div>
        <div>
            <button onclick="window.location='{{ route('home') }}'">Back to Results</button>
        </div>
    </div>

    <div class="container-page">
        <div>




        </div>


    </div>

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
</style>
