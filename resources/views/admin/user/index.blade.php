<x-admin-layout>
    <div class="title-header">
        <h5>User List</h5>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <a class="btn btn-danger mb-3" href="{{route('admin.users.create')}}">
                                <i class="fas fa-plus"></i>
                                <span>Add New User</span>
                            </a>
                            <div class="table-responsive table-desi table-product">
                                <table class="table table-1d all-package">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Password</th>
                                        <th>Option</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    @forelse($users as $user)
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)">{{$user->name}}</a>
                                            </td>

                                            <td>
                                                <a href="javascript:void(0)">{{$user->email}}</a>
                                            </td>
                                            <td>{{$user->role}}</td>
                                            <td>{{$user->password}}</td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <span class="lnr lnr-eye"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('admin.users.edit', $user)}}">
                                                            <span class="lnr lnr-pencil"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" class="btn btn-delete"
                                                           data-bs-target="#deleteUserModal"
                                                           data-id={{$user->id}}
                                                        ><span
                                                                class="lnr lnr-trash"></span></a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @empty
                                        <h1>No User</h1>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{ $users->render('pagination::admin-pagination') }}
            </div>
        </div>
        <div class="modal modal-danger fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="Delete"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                        <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="form-delete" action="{{ route('admin.users.destroy', $user) }}" method="post">
                        <div class="modal-body">
                            @csrf
                            @method('DELETE')
                            <input type="text" hidden id="user_id_delete" name="id">
                            <h5 class="text-center">Are you sure you want to delete this user?</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-sm btn-danger">Yes, Delete User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        Array.from(document.querySelectorAll('.btn-delete')).forEach((btn) => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                let id = e.target.parentElement.getAttribute('data-id');
                console.log(id)
                document.querySelector('#user_id_delete').value = id;
            });
        });
    </script>
</x-admin-layout>

