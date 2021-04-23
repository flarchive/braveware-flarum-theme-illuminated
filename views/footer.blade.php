@isset($footer)
    <ul id="illuminatedfooter">
        @foreach ($footer as $name => $url)
            <li id="aft-{{ strtolower($name) }}"><a href="{{ $url }}">{{ $name }}</a></li>
        @endforeach
    </ul>
@endisset
