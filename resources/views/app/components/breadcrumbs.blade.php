@if(!empty($breadcrumbs))
    @if(empty($withoutContainer))
        <div class="container {{ $containerAdditionalClasses ?? '' }}">
            <div class="container-inner">
    @endif
    <div class="breadcrumbs">
        <ul class="breadcrumbs-list" itemscope itemtype="https://schema.org/BreadcrumbList">
            @foreach($breadcrumbs as $key => $item)
                @if($item['url'])
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumbs-list-item">
                        <a itemprop="item" href="{{ $item['url'] }}">
                            <span itemprop="name">{{ $item['title'] }}</span>
                        </a>
                        <meta itemprop="position" content="{{ $key + 1 }}" />
                    </li>
                @else
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumbs-list-item">
                        <span>
                            <span itemprop="name">{{ $item['title'] }}</span>
                        </span>
                        <meta itemprop="position" content="{{ $key + 1 }}" />
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
    @if(empty($withoutContainer))
            </div>
        </div>
    @endif
@endif
