
@foreach($items as $menu_item)
    <li>
        <a class="nav-link scrollto{{ request()->is(ltrim($menu_item->url, '#')) ? ' active' : '' }}" href="{{ $menu_item->url }}">
            {{ $menu_item->title }}
        </a>
    </li>
@endforeach
