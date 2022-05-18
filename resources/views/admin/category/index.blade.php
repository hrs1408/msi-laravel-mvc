<x-admin-layout>
    <div class="title-header">
        <h5>Category List</h5>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <a class="btn btn-danger mb-3" href="{{route('admin.categories.create')}}">
                                <i class="fas fa-plus"></i>
                                <span>Add Category</span>
                            </a>
                            <div class="table-responsive table-desi table-product">
                                <table class="table table-1d all-package">
                                    <thead>
                                    <tr>
                                        <th>Category Image</th>
                                        <th>Category Name</th>
                                        <th>Category Description</th>
                                        <th>Category Slug</th>
                                        <th>Option</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($categories as $category)
                                        <tr>
                                            <td>
                                                <img src="{{isset($category->images[0]) ? '/'.$category->images[0]->url : ''}}" alt="">
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)">{{$category->name}}</a>
                                            </td>

                                            <td>
                                                <a href="javascript:void(0)">{{$category->description}}</a>
                                            </td>
                                            <td>{{$category->slug}}</td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <span class="lnr lnr-eye"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('admin.categories.edit', $category)}}">
                                                            <span class="lnr lnr-pencil"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="{{route('admin.categories.destroy', $category)}}"
                                                              method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-delete">
                                                                <i class="far fa-trash-alt theme-color"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @empty
                                            <span >Loading...</span>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{ $categories->render('pagination::admin-pagination') }}
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
