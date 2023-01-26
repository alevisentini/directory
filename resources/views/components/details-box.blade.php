<div class="details-box">
    <h4 class="details-box-title">
        @if ($iconClass)
            <span class="detail-box-title-icon fa fa-{{ $iconClass }}"></span>
        @endif
        {{ $title }}
    </h4>
    <div class="detail-box-content">
        <ul>
            @forelse ($items as $item)
                <li>{{ $item }}</li>
            @empty
                <p>No items to show</p> {{-- Just in case the component is called without items --}}
            @endforelse
        </ul>
    </div>
</div>

<style>
    .details-box {
        background-color: #fafafa;
        margin-top: 15px;
        padding: 15px;
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        -ms-border-radius: 2px;
        -o-border-radius: 2px;
        border-radius: 2px;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
    }

    .details-box h4.details-box-title {
        min-height: 30px;
        font-weight: 500;
        border-bottom: 1px solid #d3e0e3;
    }

    .details-box h4.details-box-title .detail-box-title-icon {
        font-size: 18px;
        padding-right: 8px;
        color: #00bdbd;
    }
</style>
