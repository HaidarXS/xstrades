<title>{{ $title }}</title>
<meta name="title" content='{{ $title }} ' />
<meta name="description" content=' {{ strip_tags($description) }}' />
<meta property="og:type" content="article" />
<meta property="og:title" content='{{ $title }}' />
<meta property="og:description" content='{{ strip_tags($description) }}' />
<meta property="og:image" content='{{ $image }}' />
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:title" content='{{ $title }}' />
<meta property="twitter:description" content='{{ strip_tags($description) }}' />
<meta property="twitter:image" content='{{ $image }}' />

<meta property="og:locale" content="{{ App::getLocale() }}" />
<meta property="og:url" content="{{ url()->current() }} " />
<meta property="og:site_name" content="{{ strip_tags($description) }}" />


@php
    $currentUrl = url()->current();
@endphp
{{-- <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BlogPosting",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{$currentUrl}}"
      },
      "headline": "{{ strip_tags($description) }}",
      "image": "{{ $image }}", 
      "author": {
        "@type": "Person",
        "name": "{{ $blog->author_name }}"
      },  
      "publisher": {
        "@type": "Organization",
        "name": "",
        "logo": {
          "@type": "ImageObject",
          "url": ""
        }
      },
      "datePublished": "{{ date('Y F d', strtotime($blog->published_date)) }}"
    }
    </script> --}}
