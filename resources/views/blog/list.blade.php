@extends('layouts.main.master')
@section('title')
    {{ $title_page }}
@endsection
@section('description')
    Tin tức nổi bật và mới nhất
@endsection
@section('image')
    {{ url('' . $banners[0]->image) }}
@endsection
@section('css')
@endsection
@section('content')
    <main id="page-content">
        <nav class="site-breadcrumb" aria-label="breadcrumb"
            style="background-image: url({{ asset('frontend/images/bg-breadcrumb.jpg') }})">
            <div class="container">
                <div class="h2 text-uppercase text-white text-center">Danh mục: <span>{{ $title_page }}</span></div>
            </div>
        </nav>
        <section class="archive-product mb-3 mb-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="archive-product-content">
                            <div class="archive-product-head d-flex justify-content-between align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb bg-transparent px-0 mb-0 mb-md-3">
                                        <li class="breadcrumb-item"><a href="{{route('home')}}" data-wpel-link="internal">Trang
                                                chủ</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $title_page }}</li>
                                    </ol>
                                </nav>
                            </div>
                            @if (count($blog) > 0)
                                <div class="row archive-article-list">
                                    @foreach ($blog as $blg)
                                        <div class="col-lg-6">
                                            <div class="card mb-4 border-primary">
                                                <a class="w-100" href="{{ route('detailBlog', ['slug' => $blg->slug]) }}"
                                                    title="{{ languageName($blg->title) }}" data-wpel-link="internal">
                                                    <img class="c-blog-img" width="350" height="236"
                                                        src="{{ $blg->image }}">
                                                </a>
                                                <div class="card-body">
                                                    <h5 class="card-title"> <a
                                                            href="{{ route('detailBlog', ['slug' => $blg->slug]) }}"
                                                            title="{{ languageName($blg->title) }}"
                                                            data-wpel-link="internal">{{ languageName($blg->title) }}</a>
                                                    </h5>
                                                    <p class="card-text text-secondary mb-2"><span class="text-primary"><i
                                                                class="fa fa-clock mr-1"></i>{{ date('d-m-Y', strtotime($blg->created_at)) }}</span><span
                                                            id="rateMe">
                                                            <i class="fas fa-star py-1 px-0 rate-popover" data-index="0"
                                                                data-html="true" data-toggle="popover" data-placement="top"
                                                                title="Very bad"></i> <i
                                                                class="fas fa-star py-1 px-0 rate-popover" data-index="1"
                                                                data-html="true" data-toggle="popover" data-placement="top"
                                                                title="Poor"></i> <i
                                                                class="fas fa-star py-1 px-0 rate-popover" data-index="2"
                                                                data-html="true" data-toggle="popover" data-placement="top"
                                                                title="OK"></i> <i
                                                                class="fas fa-star py-1 px-0 rate-popover" data-index="3"
                                                                data-html="true" data-toggle="popover" data-placement="top"
                                                                title="Good"></i> <i
                                                                class="fas fa-star py-1 px-0 rate-popover" data-index="4"
                                                                data-html="true" data-toggle="popover" data-placement="top"
                                                                title="Excellent"></i> </span>
                                                    </p>
                                                    <p class="card-text text-secondary text-des">
                                                        {{ languageName($blg->description) }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <nav class="d-flex justify-content-center">
                                    {{ $blog->links() }}
                                </nav>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="sidebar">
                            @if ($setting->facebook !==null)
                               <div class="sidebar-item">
                                <div class="card border-dark mb-3 mb-md-4">
                                    <div class="card-header text-white bg-primary text-uppercase h6">Fanpage</div>
                                    <div class="card-body text-dark p-2">
                                        <div class="fb-page" data-href="{{$setting->facebook}}"
                                            data-width="" data-height="" data-small-header="false"
                                            data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            @endif
                            <div class="sidebar-item">
                                <div class="card border-primary mb-3 mb-md-4">
                                    <div class="card-header text-white bg-primary text-uppercase h6">Bài viết mới
                                        nhất</div>
                                    <div class="card-body text-dark py-2">
                                        <div class="list-group">
                                            @foreach ($blog as $item)
                                                <div class="list-group-item list-group-item-action">
                                                    <div class="row no-gutters">
                                                        <a class="col-4 col-md-3 blog__img"
                                                            href="{{ route('detailBlog', ['slug' => $item->slug]) }}"
                                                            title="{{languageName($item->title)}}"
                                                            data-wpel-link="internal">
                                                            <img width="70" height="50"
                                                                src="{{($item->image)}}"
                                                                data-src="{{($item->image)}}"
                                                                class="attachment-sidebar_thumb size-sidebar_thumb wp-post-image ls-is-cached lazyloaded"
                                                                alt="{{languageName($item->title)}}">
                                                        </a>
                                                        <div class="col-8 col-md-9"> <a
                                                                href="{{ route('detailBlog', ['slug' => $item->slug]) }}"
                                                                title="{{languageName($item->title)}}"
                                                                data-wpel-link="internal">{{languageName($item->title)}}</a>
                                                            <p class="d-flex mb-0"><span class="text-primary small"><i
                                                                        class="fa fa-user mr-1"></i>Admin</span><span class="pl-3" id="rateMe"><i
                                                                        class="small fas fa-star py-1 px-0 rate-popover"
                                                                        data-index="0" data-html="true"
                                                                        data-toggle="popover" data-placement="top"
                                                                        title="Very bad"></i> <i
                                                                        class="small fas fa-star py-1 px-0 rate-popover"
                                                                        data-index="1" data-html="true"
                                                                        data-toggle="popover" data-placement="top"
                                                                        title="Poor"></i> <i
                                                                        class="small fas fa-star py-1 px-0 rate-popover"
                                                                        data-index="2" data-html="true"
                                                                        data-toggle="popover" data-placement="top"
                                                                        title="OK"></i> <i
                                                                        class="small fas fa-star py-1 px-0 rate-popover"
                                                                        data-index="3" data-html="true"
                                                                        data-toggle="popover" data-placement="top"
                                                                        title="Good"></i> <i
                                                                        class="small fas fa-star py-1 px-0 rate-popover"
                                                                        data-index="4" data-html="true"
                                                                        data-toggle="popover" data-placement="top"
                                                                        title="Excellent"></i> </span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <div class="card border-info mb-3 mb-md-4">
                                    <div class="card-header text-white bg-info text-uppercase h6">Bài viết nổi bật
                                    </div>
                                    <div class="card-body text-dark py-2">
                                        <div class="list-group">
                                            @foreach ($blogstar as $star)
                                              <div class="list-group-item list-group-item-action">
                                                <div class="row no-gutters"> <a class="col-4 col-md-3 blog__img"
                                                        href="{{route('detailBlog',['slug'=>$star->slug])}}"
                                                        title="{{languageName($star->title)}}"
                                                        data-wpel-link="internal">
                                                         <img
                                                                width="70" height="50"
                                                                src="{{($star->image)}}"
                                                                data-src="{{($star->image)}}"
                                                                class="{{($star->image)}}"
                                                                alt="{{languageName($star->title)}}"
                                                                data-srcset="{{($star->image)}},
                                                                {{($star->image)}}"
                                                                data-sizes="(max-width: 70px) 100vw, 70px"
                                                                sizes="(max-width: 70px) 100vw, 70px"
                                                                srcset="{{($star->image)}},
                                                                {{($star->image)}}">
                                                    </a>
                                                    <div class="col-8 col-md-9"> <a
                                                            href="{{route('detailBlog',['slug'=>$star->slug])}}"
                                                            title="{{languageName($star->title)}}"
                                                            data-wpel-link="internal">{{languageName($star->title)}}</a>
                                                        <p class="d-flex mb-0"><span class="text-primary small"><i
                                                                    class="fa fa-user mr-1"></i>Admin</span><span class="pl-3" id="rateMe"> <i
                                                                    class="small fas fa-star py-1 px-0 rate-popover"
                                                                    data-index="0" data-html="true" data-toggle="popover"
                                                                    data-placement="top" title="Very bad"></i> <i
                                                                    class="small fas fa-star py-1 px-0 rate-popover"
                                                                    data-index="1" data-html="true" data-toggle="popover"
                                                                    data-placement="top" title="Poor"></i> <i
                                                                    class="small fas fa-star py-1 px-0 rate-popover"
                                                                    data-index="2" data-html="true" data-toggle="popover"
                                                                    data-placement="top" title="OK"></i> <i
                                                                    class="small fas fa-star py-1 px-0 rate-popover"
                                                                    data-index="3" data-html="true" data-toggle="popover"
                                                                    data-placement="top" title="Good"></i> <i
                                                                    class="small fas fa-star py-1 px-0 rate-popover"
                                                                    data-index="4" data-html="true" data-toggle="popover"
                                                                    data-placement="top" title="Excellent"></i> </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>  
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
