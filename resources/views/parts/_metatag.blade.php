<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />

<meta content="@yield('title')" property='og:title' />
{{--
<meta name="facebook-domain-verification" content="ulv2sv7gfehaeg4i615maz7l8vozup" /> --}}
<meta content='{{url()->current()}}' property='og:url' />
<meta content='article' property='og:type' />
<meta content="@yield('description')" property='og:description' />
<meta content='{{url()->current()}}' property='ia:markup_url' />
<meta content='{{url()->current()}}' property='ia:rules_url' />
<meta content={{config('app.name')}} property='og:site_name' />
<meta content="@yield('thumbnail')" property='og:image' />
<meta content='1920' property='og:image:width' />
<meta content='1080' property='og:image:height' />
<meta content='image/jpeg' property='og:image:type' />
{{-- @if (Route::is('show_video'))
<meta content='video' property='og:video' />
<meta content='video' property='og:video:url' />
<meta content='video/mp4' property='og:video:type' />
<meta content='1920' property='og:video:width' />
<meta content='1080' property='og:video:height' />
@endif --}}

{{-- <meta content='mansionsportsnews' property='fb:admins' />
<meta content='939892519903839' property='fb:app_id' />
<meta content="{{config('app.name')}}" name='Author' />
<meta content='https://www.facebook.com/mgoalindo' property='article:author' />
<meta content='104619581839725' property='fb:pages' />
<meta content="{{config('app.name')}}" name='twitter:site' />
<meta content='summary_large_image' name='twitter:card' />
<meta content='@msportsid' name='twitter:creator' />
<meta name="facebook-domain-verification" content="muicw9bm3rv1irxdkv1kdbjwtmt3g2" /> --}}

<meta http-equiv="origin-trial"
  content="ApfJUPFqe5iSHn4LjRA3BSbm9XBq515bJQ3Q4LJzyCrNsXDVBBZ0hDexOstWH53I49VCrOTl9dc/NkrODLJvbAYAAAB3eyJvcmlnaW4iOiJodHRwczovL21nb2FsaW5kby5jb206NDQzIiwiZmVhdHVyZSI6IlVucmVzdHJpY3RlZFNoYXJlZEFycmF5QnVmZmVyIiwiZXhwaXJ5IjoxNjM5NTI2Mzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZX0=">

<meta name="csrf-token" content="{{ csrf_token() }}">
