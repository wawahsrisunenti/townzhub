<?xml version="1.0" encoding="utf-8"?>
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:media="http://search.yahoo.com/mrss/">
	<channel>
		<title>MSPORTSID - Portal Olahraga Terkini</title>
		<link><![CDATA[https://msportsid.com]]></link>
		<description>MSPORTSID.com - Portal Olahraga Terkini. Berita Sepakbola, Jadwal dan Klasemen Sepakbola, Jadwal dan klasemen Bola, Hasil bola tadi malam.</description>
		<language>id</language>
		<pubDate>{{date('c', strtotime($articles[0]->published_at))}}</pubDate>
		<generator>MSPORTSID</generator>
		@foreach ($articles as $item)
    	<item>
			<guid isPermaLink="false">{{$item->id}}</guid>
			<title>{{$item->title}}</title>
			<link>{{Route('show_article', $item->slug)}}</link>
			<author>MSPORTSID Admin</author>
			@unless ($item->artcat->isEmpty())
			@foreach($item->artcat as $cat)
			<category>{{ $cat->name }}</category>
			@endforeach
			@endunless
			<description>{{$item->description}}</description>
			<content:encoded><![CDATA[{!! $item->body, 15 !!}]]></content:encoded>
			<pubDate>{{date('c', strtotime($item->published_at))}}</pubDate>
			<enclosure url="{{asset($item->cover)}}" type="image/jpeg" />
		</item>
    @endforeach
	</channel>
</rss>
