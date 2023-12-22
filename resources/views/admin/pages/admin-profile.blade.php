@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'Your Profile'])

    <div class="px-4 pt-4" style="display: none;" id="success_msg" >

        <div class="alert alert-success alert-dismissible fade show"  role="alert"   >
            <p class="text-white mb-0">Admin Updated Successfuly</p>
        </div>
    </div>
    <div class="container-fluid py-4 ">
        <div class="row">
            <div class="col-md-8">
                <div class="card border-radius-xl">
                    <form  id="saveData" method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Edit Profile</p>
                                <button id="save_admin" class="btn btn-primary btn-sm ms-auto">Save</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">User Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Username</label>
                                        <input class="form-control @error('username') is-invalid @enderror" type="text" name="username" value="{{$admin->username}}">
                                        @error('username')
                                           <small class="help-block text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Email address</label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{$admin->email}}">
                                        @error('email')
                                        <small class="help-block text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">First name</label>
                                        <input class="form-control @error('firstname') is-invalid @enderror" type="text" name="firstname"  value="{{$admin->firstname}}">
                                        @error('firstname')
                                        <small class="help-block text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Last name</label>
                                        <input class="form-control @error('lastname') is-invalid @enderror" type="text" name="lastname" value="{{$admin->lastname}}">
                                        @error('lastname')
                                        <small class="help-block text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Photo</label>
                                        <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" value="{{$admin->image}}">
                                        @error('image')
                                        <small class="help-block text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">Contact Information</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Address</label>
                                        <input class="form-control @error('address') is-invalid @enderror" type="text" name="address"
                                            value="{{$admin->address}}">
                                            @error('address')
                                            <small class="help-block text-danger">{{$message}}</small>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">City</label>
                                        <input class="form-control @error('city') is-invalid @enderror" type="text" name="city" value="{{$admin->city}}">
                                            @error('city')
                                            <small class="help-block text-danger">{{$message}}</small>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Country</label>
                                        <input class="form-control @error('country') is-invalid @enderror" type="text" name="country" value="{{$admin->country}}">
                                            @error('country')
                                            <small class="help-block text-danger">{{$message}}</small>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Postal code</label>
                                        <input class="form-control @error('postal') is-invalid @enderror" type="text" name="postal" value="{{$admin->postal}}">
                                            @error('postal')
                                            <small class="help-block text-danger">{{$message}}</small>
                                            @enderror
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">About me</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">About me</label>
                                        <input class="form-control @error('about') is-invalid @enderror" type="text" name="about"
                                            value="{{$admin->about}}">
                                            @error('about')
                                            <small class="help-block text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <img src="/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
                    <div class="row justify-content-center">
                        <div class="col-4 col-lg-4 order-lg-2">
                            <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                <a href="javascript:;">
                                    <img src="{{asset('/uploads/admins/'.$admin->image)}}"
                                        class="rounded-circle img-fluid border border-2 border-white">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                        <div class="d-flex justify-content-between">
                            <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-none d-lg-block">Connect</a>
                            <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i
                                    class="ni ni-collection"></i></a>
                            <a href="javascript:;"
                                class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Message</a>
                            <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i
                                    class="ni ni-email-83"></i></a>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col">
                                <div class="d-flex justify-content-center">
                                    <div class="d-grid text-center">
                                        <span class="text-lg font-weight-bolder">22</span>
                                        <span class="text-sm opacity-8">Friends</span>
                                    </div>
                                    <div class="d-grid text-center mx-4">
                                        <span class="text-lg font-weight-bolder">10</span>
                                        <span class="text-sm opacity-8">Photos</span>
                                    </div>
                                    <div class="d-grid text-center">
                                        <span class="text-lg font-weight-bolder">89</span>
                                        <span class="text-sm opacity-8">Comments</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <h5>
                                {{$admin->firstname}} {{$admin->lastname}}
                            </h5>
                            <div class="h6 font-weight-300">
                                <i class="ni location_pin mr-2"></i>{{$admin->country}},{{$admin->city}}
                            </div>
                            <div class="h6 font-weight-300">
                                <i class="ni location_pin mr-2"></i>Created at: {{$admin->created_at->diffForhumans() }}
                            </div>
                            <div class="h6 font-weight-300">
                                <i class="ni location_pin mr-2"></i>
                                Updated at: {{$admin->updated_at->diffForhumans() }}
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layouts.footers.auth.footer')
    </div>
@endsection
@section('scripts')
<script>

    $(document).on('click', '#save_admin', function (e) {
        e.preventDefault();


        var formData = new FormData($('#saveData')[0]);

        $.ajax({
            type: 'post',
            enctype: 'multipart/form-data',
            url: "{{route('admin.profile.update')}}",
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            success: function (data) {

              if(data.status == true)
              {
                $('#success_msg').show();
                if (document.getElementById('success_msg')) {
                     var alertDiv = document.getElementById('success_msg');
                     setTimeout(function () {
                       alertDiv.remove();
                     }, 5000);
}
              }

            },
             error: function (reject) {

            }
        });
    });


</script>
@stop
