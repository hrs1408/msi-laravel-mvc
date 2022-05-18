<x-admin-layout>
    <div class="title-header">
        <h5>Add New User</h5>
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
                                      action="{{route('admin.users.store')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">
                                                Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text"
                                                       name="name" placeholder="User Name">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Email</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="email"
                                                       name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Email</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="role">
                                                    <option value="admin" name="role">ADMIN</option>
                                                    <option value="user" name="role">USER</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Password</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="password"
                                                       name="password" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Confirm Password</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="password"
                                                       name="confirmPassword" placeholder="Password">
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
