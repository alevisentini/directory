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
