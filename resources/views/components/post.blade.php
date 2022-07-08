@props(['posts' => $posts])

<div class="card border-0 h-100">
    <img src={{ asset('storage/images/eth.svg') }} alt="" class="card-image-top">
    <div class="card-body">
        <a href="{{route('post.show',$posts)}}" class="card-text text-center font-weight-bold">{{$posts->title}}</a>
    </div>
    <div class="card-footer border-top-0 mb-2">
    <x-post-tags :tagsCsv="$posts->badge"/>
    </div>
</div>
