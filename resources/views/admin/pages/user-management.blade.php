@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'User Management'])
    <div class="px-4 pt-4" style="display: none;" id="success_msg" >

        <div class="alert alert-success alert-dismissible fade show"  role="alert"   >
            <p class="text-white mb-0">User Deleted Successfuly</p>
        </div>
    </div>
    <div >
    <div class="row mt-4 mx-4">
        <div class="col-12">

            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Users</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Photo</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>

                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Active Post
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Deleted Post</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Profile</th>
                                        <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr class="userRow{{$user -> id}}">
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div>
                                                <img src="{{asset('/uploads/users/'.$user->image)}}" class="avatar me-3" alt="image">
                                            </div>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-3 py-1">

                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$user->username}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"><i class="ni ni-archive-2 text-dark text-lg opacity-10"></i></p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0"><i class="ni ni-basket text-dark text-lg opacity-10"></i></p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <a class="nav-link " href="{{ route('user.profile',$user->id)}}">
                                        <p class="text-sm font-weight-bold mb-0"><i class="ni ni-single-02 text-dark text-lg opacity-10"></i></p>
                                        </a>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                            <i class="bi bi-calendar2-x-fill"></i>

                                           <p class="text-sm font-weight-bold mb-0 ps-2 cursor-pointer">
                                            <button user_id="{{$user->id}}"  class="delete_btn btn btn-danger">
                                                <i class="ni ni-basket text-dark text-lg opacity-10"></i>
                                            </button>
                                           </p>
                                        </div>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                            <i class="bi bi-calendar2-x-fill"></i>

                                           <p class="text-sm font-weight-bold mb-0 ps-2 cursor-pointer">
                                            <button user_id="{{$user->id}}"  class="delete_btn btn btn-danger">
                                                <i class="ni ni-basket text-dark text-lg opacity-10"></i>
                                            </button>
                                           </p>
                                        </div>
                                    </td>
                                </tr>

                                @endforeach
                                                           </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('scripts')
    <script>

        $(document).on('click', '.delete_btn', function (e) {
            e.preventDefault();

              var user_id =  $(this).attr('user_id');

            $.ajax({
                type: 'post',
                 url: "{{route('user.delete')}}",
                data: {
                    '_token': "{{csrf_token()}}",
                    'id' :user_id
                },
                success: function (data) {

                    if(data.status == true){
                        $('#success_msg').show();
                    }
                    $('.userRow'+data.id).remove();
                }, error: function (reject) {

                }
            });
        });


    </script>
@stop
