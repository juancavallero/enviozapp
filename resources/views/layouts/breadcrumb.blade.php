@if ($breadcrumbs)
    <div class="page-bar">
        <ul class="page-breadcrumb">
            @foreach ($breadcrumbs as $breadcrumb)
                @if ($breadcrumb->first)
                    <i class="icon-home"></i>
                @endif
                @if ($breadcrumb->last)
                    <li class="active">
                        <span>{{ $breadcrumb->title }}</span>
                    </li>
                @elseif ($breadcrumb->url)
                    <li>
                        <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                @else
                    {{-- Using .active to give it the right colour (grey by default) --}}
                    <li class="active">
                        {{ $breadcrumb->title }}
                        <i class="fa fa-angle-right"></i>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
@endif