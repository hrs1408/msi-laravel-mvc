<x-admin-layout>
    <div class="title-header">
        <h5>Edit Category</h5>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Category Information</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form"
                                      action="{{route('admin.categories.update', $category)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Category
                                                Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text"
                                                       name="name" value="{{$category->name}}">
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Category
                                                Description</label>
                                            <div class="col-sm-10">
                                                <textarea id="editor" name="desc">
                                                    {{$category->description}}
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label
                                                class="col-sm-2 col-form-label form-label-title">Images</label>
                                            <div class="col-sm-10">
                                                <input class="form-control form-choose" type="file"
                                                       id="formFileMultiple" multiple>
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
    <!-- ck editor js -->
    <script src="{{@asset('/assets/admin/js/ckeditor.js')}}"></script>
    <script src="{{@asset('/assets/admin/js/ckeditor-custom.js')}}"></script>
</x-admin-layout>
