@extends('front.layouts.app')
@include('front.layouts.navbars.auth.topnavbar', ['title' => 'AliBook'])

   <!------------main--------------->
    @section('content')
    <div class="main">

        <!------------------left------------------->
        @include('layouts.navbars.auth.left')


        <!------------center---------------------->

        <div class="center">

            <div class="top_box">

                <div class="my_story_card">

                    <img src="{{asset('uploads/image/story_1.png')}}">

                    <div class="story_upload">
                        <img src="{{asset('uploads/image/upload.png')}}">
                        <p class="story_tag">Create story</p>
                    </div>

                </div>

                <div class="story_card">

                    <img src="{{asset('uploads/image/story_2.jpg')}}">

                    <div class="story_profile">

                        <img src="{{asset('uploads/image/profile_1.jpg')}}">
                        <div class="cricle"></div>

                    </div>

                    <div class="story_name">
                        <p class="name">Charith Disanayaka</p>
                    </div>

                </div>


            </div>


            <div class="my_post">

                <div class="post_top">

                    <img src="{{asset('uploads/image/profile.png')}}">
                    <input type="text" placeholder="What's on you mind, John?">

                </div>

                <hr>

                <div class="post_bottom">

                    <div class="post_icon">
                        <i class="fa-solid fa-video red"></i>
                        <p>Live video</p>
                    </div>

                    <div class="post_icon">
                        <i class="fa-solid fa-images green"></i>
                        <p>Photo/video</p>
                    </div>

                    <div class="post_icon">
                        <i class="fa-regular fa-face-grin yellow"></i>
                        <p>Feeling/activity</p>
                    </div>

                </div>

            </div>


            <div class="room">

                <div class="room_image">

                    <img src="{{asset('uploads/image/live_video.png')}}">
                    <p class="room_tag">Create room</p>

                </div>

                <div class="room_profile">

                    <img src="{{asset('uploads/image/profile_1.jpg')}}">


                </div>

            </div>


            <div class="friends_post">

                <div class="friend_post_top">

                    <div class="img_and_name">

                        <img src="{{asset('uploads/image/post_1.jpg')}}">

                        <div class="friends_name">
                            <p class="friends_name">
                                Senuda De Silva
                            </p>
                            <p class="time">16h.<i class="fa-solid fa-user-group"></i></p>
                        </div>


                    </div>

                    <div class="menu">

                        <i class="fa-solid fa-ellipsis"></i>

                    </div>

                </div>

                <img src="{{asset('uploads/image/post_1.jpg')}}">

                <div class="info">

                    <div class="emoji_img">
                        <img src="{{asset('uploads/image/like.png')}}">
                        <img src="{{asset('uploads/image/haha.png')}}">
                        <img src="{{asset('uploads/image/heart.png')}}">
                        <p>You, Charith Disanayaka and 25K others</p>
                    </div>

                    <div class="comment">
                        <p>421 Comments</p>
                        <p>1.3K Shares</p>
                    </div>

                </div>

                <hr>

                <div class="like">

                    <div class="like_icon">
                        <i class="fa-solid fa-thumbs-up activi"></i>
                        <p>Like</p>
                    </div>

                    <div class="like_icon">
                        <i class="fa-solid fa-message"></i>
                        <p>Comments</p>
                    </div>

                    <div class="like_icon">
                        <i class="fa-solid fa-share"></i>
                        <p>Share</p>
                    </div>

                </div>

                <hr>

                <div class="comment_warpper">

                    <img src="{{asset('uploads/image/profile.png')}}">
                    <div class="circle"></div>

                    <div class="comment_search">

                        <input type="text" placeholder="Write a comment">
                        <i class="fa-regular fa-face-smile"></i>
                        <i class="fa-solid fa-camera"></i>
                        <i class="fa-regular fa-note-sticky"></i>

                    </div>

                </div>

            </div>


            <div class="loard">
                <button>Loard More</button>
            </div>

            <p class="end">Design By<span><i class="fa-regular fa-face-grin"></i>
            WT Master Code</span></p>


        </div>

        <!------------------right------------------>
        @include('layouts.navbars.auth.right')


    </div>
    @endsection

