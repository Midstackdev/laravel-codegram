@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}" style="height: 160px; width: 160px;" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{$user->username}}</div>

                
                   <follow-button user-id="{{$user->id}}" follows="{{ $follows }}"></follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan    
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan         
            <div class="d-flex">
                <div class="pr-5"><strong>{{$postCount}}</strong> posts</div>
                <div class="pr-5"><strong>{{$followersCount}}</strong> followers</div>
                <div class="pr-5"><strong>{{$followingCount}}</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#" class="" style="text-decoration: none;">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id  }}"> 
                <img src="/storage/{{ $post->image }}" alt="" class="w-100">
            </a>
        </div>
        @endforeach
        {{-- <div class="col-4">
            <img src="https://pbs.twimg.com/media/DumgOuXXQAIn672.jpg:large" alt="" class="w-100" style="height: 250px;">
        </div>
        <div class="col-4">
            <img src="https://homemimi.com/wp-content/uploads/2019/04/announcing-february-birth-flower-flowers-for-the-month-you-were-born.jpg" alt="" class="w-100" style="height: 250px;">
        </div> --}}
    </div>
</div>
@endsection
