<x-admin-layout>
    <div class="title-header">
        <h5>Edit User</h5>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>User Information</h5>
                                </div>
                                <form class="theme-form theme-form-2 mega-form"
                                      action="{{route('admin.users.update', $user)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">
                                                Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text"
                                                       name="name" value="{{$user->name}}">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Email</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="email"
                                                       name="email" value="{{$user->email}}">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Email</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="role">
                                                    <option value="admin" name="role" {{$user->role == 'admin' ? 'selected' : ''}}>ADMIN</option>
                                                    <option value="user" name="role" {{$user->role == 'user' ? 'selected' : ''}}>USER</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Current Password</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="password"
                                                       name="currentPassword" placeholder="Current Password">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">New Password</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="password"
                                                       name="newPassword" placeholder="New Password">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Confirm Password</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="password"
                                                       name="confirmPassword" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                        <button class="btn btn-dark" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
