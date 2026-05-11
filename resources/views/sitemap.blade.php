<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    {{-- Static Core Pages --}}
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ now()->toDateString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url><loc>{{ url('/about') }}</loc><changefreq>monthly</changefreq><priority>0.8</priority></url>
    <url><loc>{{ url('/services') }}</loc><changefreq>weekly</changefreq><priority>0.9</priority></url>
    <url><loc>{{ url('/products') }}</loc><changefreq>daily</changefreq><priority>0.9</priority></url>
    <url><loc>{{ url('/blog') }}</loc><changefreq>weekly</changefreq><priority>0.8</priority></url>
    <url><loc>{{ url('/contact') }}</loc><changefreq>monthly</changefreq><priority>0.7</priority></url>

    {{-- Dynamic Services --}}
    @foreach($services as $service)
        @if($service->servicesUrl)
            <url>
                <loc>{{ url('/services/' . $service->servicesUrl) }}</loc>
                <lastmod>{{ $service->updated_at ? $service->updated_at->toDateString() : now()->toDateString() }}</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.8</priority>
            </url>
        @endif
    @endforeach

    {{-- Dynamic Blogs --}}
    @foreach($blogs as $blog)
        @if($blog->blogurl)
            <url>
                <loc>{{ url('/blog/' . $blog->blogurl) }}</loc>
                <lastmod>{{ $blog->updated_at ? $blog->updated_at->toDateString() : now()->toDateString() }}</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.7</priority>
            </url>
        @endif
    @endforeach

    {{-- Dynamic Categories --}}
    @foreach($categories as $category)
        @if($category->slug)
            <url>
                <loc>{{ url('/products/' . $category->slug) }}</loc>
                <lastmod>{{ $category->updated_at ? $category->updated_at->toDateString() : now()->toDateString() }}</lastmod>
                <changefreq>monthly</changefreq>
                <priority>0.8</priority>
            </url>
        @endif
    @endforeach

    {{-- Dynamic Products --}}
    @foreach($products as $product)
        @if($product->slug)
            <url>
                <loc>{{ url('/product-details/' . $product->slug) }}</loc>
                <lastmod>{{ $product->updated_at ? $product->updated_at->toDateString() : now()->toDateString() }}</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.8</priority>
            </url>
        @endif
    @endforeach

    {{-- Dynamic Static Pages (Terms, Privacy, etc.) --}}
    @foreach($staticPages as $page)
        <url>
            <loc>{{ url('/' . $page->slug) }}</loc>
            <lastmod>{{ $page->updated_at ? $page->updated_at->toDateString() : now()->toDateString() }}</lastmod>
            <changefreq>yearly</changefreq>
            <priority>0.5</priority>
        </url>
    @endforeach
</urlset>
