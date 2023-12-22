@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'Post Managment'])


    <div class="container-fluid py-4 ">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-radius-xl">
                    <form   method="POST" action="{{route('filterposts')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Filter Post</p>
                                <button type="submit" class="btn btn-primary btn-sm ms-auto">View Posts</button>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">By Username</label>
                                        <input class="form-control @error('username') is-invalid @enderror" type="text" name="username" >
                                        @error('username')
                                           <small class="help-block text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">By Email address</label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" >
                                        @error('email')
                                        <small class="help-block text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">By Date</label>
                                        <input class="form-control @error('created_at') is-invalid @enderror" type="date" name="created_at"  >
                                        @error('created_at')
                                        <small class="help-block text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">By City</label>
                                        <input class="form-control @error('city') is-invalid @enderror" type="text" name="city" >
                                            @error('city')
                                            <small class="help-block text-danger">{{$message}}</small>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">By Post Title</label>
                                        <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" >
                                            @error('title')
                                            <small class="help-block text-danger">{{$message}}</small>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">By Countrey</label>
                                        <input class="form-control @error('country') is-invalid @enderror" type="text" name="country" >
                                            @error('country')
                                            <small class="help-block text-danger">{{$message}}</small>
                                            @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row mt-4 mx-4">
                                <div class="col-12">

                                    <div class="card mb-4">
                                        <div class="card-header pb-0">
                                            <h6>Posts</h6>
                                        </div>
                                        <div class="card-body px-0 pt-0 pb-2">
                                            <div class="table-responsive p-0">
                                                <table class="table align-items-center mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">UserPhoto</th>

                                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>

                                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Post Title
                                                            </th>
                                                            <th
                                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                Show Post</th>
                                                            <th
                                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                Profile</th>
                                                            <th
                                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      @isset($posts)
                                                      @foreach ($posts as $item) 
                                                        <tr >
                                                            <td>
                                                                <div class="d-flex px-3 py-1">
                                                                    <div>
                                                                        <img src="{{asset('/uploads/users/'.$item->user->image)}}" class="avatar me-3" alt="image">
                                                                    </div>

                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex px-3 py-1">

                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <h6 class="mb-0 text-sm">{{$item->user->username}}</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p class="text-sm font-weight-bold mb-0">{{$item->title}}</p>
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                <p class="text-sm font-weight-bold mb-0"><i class="ni ni-basket text-dark text-lg opacity-10"></i></p>
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                <a class="nav-link " href="{{route('user.profile',$item->user_id)}}">
                                                                <p class="text-sm font-weight-bold mb-0"><i class="ni ni-single-02 text-dark text-lg opacity-10"></i></p>
                                                                </a>
                                                            </td>
                                                            <td class="align-middle text-end">
                                                                <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                                                    <i class="bi bi-calendar2-x-fill"></i>

                                                                   <p class="text-sm font-weight-bold mb-0 ps-2 cursor-pointer">
                                                                    <button user_id=""  class="delete_btn btn btn-danger">
                                                                        <i class="ni ni-basket text-dark text-lg opacity-10"></i>
                                                                    </button>
                                                                   </p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @endisset
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>




                                    </from>
                        </div>



                    </div>
           </div>

        </div>
        @include('admin.layouts.footers.auth.footer')
    </div>
@endsection

