<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($content as $value)
    <sitemap>
        <loc>http://{{$host->host}}/show_{{$value['id']}}.html</loc>
        @if(strlen($value->created_at) > 5)
        <lastmod>{{ $value->created_at }}</lastmod>
        @else
            <lastmod>{{ date('Y-m-d H:i:s') }}</lastmod>
        @endif
    </sitemap>
    @endforeach


</sitemapindex>