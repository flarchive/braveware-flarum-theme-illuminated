<div id="illuminatedbar" class="anb-forum">
    <div id="illuminatedbarlogo"><h1><a href="@isset($home){{ $home }}@else/@endif">Arch Linux</a></h1></div>
    <div id="illuminatedbarmenu">
        <ul id="illuminatedbarlist">
            @isset ($navbar)
                @foreach ($navbar as $name => $url)
                    <li id="anb-{{ strtolower($name) }}"
                        @if (isset($navbar_selected) && $navbar_selected == $name ) class="anb-selected" @endif><a
                            href="{{ $url }}">{{ $name }}</a></li>
                @endforeach
            @endisset
        </ul>
    </div>
</div>
