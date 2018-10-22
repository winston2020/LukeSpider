@foreach(array_random($content,4) as $value)
    {{$value->id}}<br>
    {{$value->title}}<br>
    {{$value->author}}<br>
    {{$value->keywords}}<br>
    {{$value->description}}<br>
    {{$value->content}}<br>
@endforeach
<br>
@foreach($outlink as $value)
    {{$value}}<br>
    @endforeach

<br>
    {{$host->id}}<br>
    {{$host->host}}<br>
    {{$host->title}}<br>
    {{$host->keywords}}<br>
    {{$host->description}}<br>
    {{$host->web_name}}<br>

<br>
@foreach($comuln as $value)
    {{$value->name}}<br>
    @endforeach
<br>

@foreach($otherlink as $value)
    {{$value->host}}<br>
    {{$value->keywords}}<br>
    @endforeach







