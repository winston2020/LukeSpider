<ul>
    @foreach($content as $value)
    <li>
        <a href="http://{{$host->host}}/show_{{$value['id']}}.html">{{$value['title']}}</a>
    </li>
        @endforeach
</ul>