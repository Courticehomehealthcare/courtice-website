<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($urls as $url)
        <url>
            <loc>{{ url($url->url) }}</loc>
            @if($url->lastmod)
                <lastmod>{{ \Carbon\Carbon::parse($url->lastmod)->toDateString() }}</lastmod>
            @endif
            <changefreq>{{ $url->changefreq }}</changefreq>
            <priority>{{ $url->priority }}</priority>
        </url>
    @endforeach
</urlset>
