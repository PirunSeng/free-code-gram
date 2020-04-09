@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-3 py-2 px-5">
        <img src="https://instagram.fpnh6-1.fna.fbcdn.net/v/t51.2885-19/s150x150/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=instagram.fpnh6-1.fna.fbcdn.net&_nc_ohc=WRZiGolUlLQAX9sb4C8&oh=9497dc467c619f61f1698e67452194f5&oe=5EA72FBA" class="rounded-circle">
      </div>
      <div class="col-9">
        <div class="d-flex justify-content-between align-items-baseline">
          <h1>{{ $user->username }}</h1>
          <a href="">Add new post</a>
        </div>
        <div class="d-flex">
          <div class="pr-4"><strong>150</strong> posts</div>
          <div class="pr-4"><strong>15k</strong> followers</div>
          <div class="pr-4"><strong>210</strong> following</div>
        </div>
        <div><strong>{{ $user->profile->title }}</strong></div>
        <div>{{ $user->profile->description ?? 'N/A' }}</div>
        <div><a href="https://www.freecodecamp.org/">{{ $user->profile->url }}</a></div>
      </div>
    </div>
    <div class="row pt-5">
      <div class="col-4">
        <img width="260px" src="https://instagram.fpnh8-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/91262065_235020361029636_1473875970998739216_n.jpg?_nc_ht=instagram.fpnh8-2.fna.fbcdn.net&_nc_cat=100&_nc_ohc=WCrzTZ8sKykAX97vdRX&oh=d10a1930483d4a3f3f1c661d9d28ad37&oe=5EB95A1B" alt="">
      </div>
      <div class="col-4">
        <img width="260px" src="https://instagram.fpnh8-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/91262065_235020361029636_1473875970998739216_n.jpg?_nc_ht=instagram.fpnh8-2.fna.fbcdn.net&_nc_cat=100&_nc_ohc=WCrzTZ8sKykAX97vdRX&oh=d10a1930483d4a3f3f1c661d9d28ad37&oe=5EB95A1B" alt="">
      </div>
      <div class="col-4">
        <img width="260px" src="https://instagram.fpnh8-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/91262065_235020361029636_1473875970998739216_n.jpg?_nc_ht=instagram.fpnh8-2.fna.fbcdn.net&_nc_cat=100&_nc_ohc=WCrzTZ8sKykAX97vdRX&oh=d10a1930483d4a3f3f1c661d9d28ad37&oe=5EB95A1B" alt="">
      </div>
    </div>
</div>
@endsection
