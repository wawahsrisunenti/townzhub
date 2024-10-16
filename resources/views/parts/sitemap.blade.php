<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:news="http://www.google.com/schemas/sitemap-news/0.9">
    @foreach ($articles as $item => $article)
    <url>
        <loc>{{route('be-show-article', $article->slug)}}</loc>
        <news:news>
            <news:publication>
                <news:name>{{getenv('APP_NAME')}}</news:name>
                <news:language>id</news:language>
            </news:publication>
            <news:publication_date>{{date('c', strtotime($article->publish_at))}}</news:publication_date>
            <news:title>{{$article->title}}</news:title>
        </news:news>
    </url>
    @endforeach
</urlset>
