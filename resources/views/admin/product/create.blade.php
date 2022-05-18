<x-admin-layout>
    <div class="title-header">
        <h5>Add New Product</h5>
    </div>
    <!-- New Product Add Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Product Information</h5>
                                </div>
                                <form class="theme-form theme-form-2 mega-form"
                                      action="{{route('admin.products.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Product
                                                Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text"
                                                       name="name" placeholder="Product Name">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label
                                                class="col-sm-2 col-form-label form-label-title">Category</label>
                                            <div class="col-sm-10">
                                                <select class="js-example-basic-single w-100" name="category_id">
                                                    <option value="">Select Category</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Product
                                                Price</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="number"
                                                       name="price" placeholder="Product Price">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Product
                                                Quantity</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="number"
                                                       name="quantity" placeholder="Product Quantity">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Product
                                                Body</label>
                                            <div class="col-sm-10">
                                                <textarea id="editor" name="body"></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Product
                                                Short Description</label>
                                            <div class="col-sm-10">
                                                <textarea  name="short_desc"></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label
                                                class="col-sm-2 col-form-label form-label-title">Published</label>
                                            <div class="col-sm-10">
                                                <form class="radio-section">
                                                    <label>
                                                        <input type="radio" name="status" value="1" >
                                                        <i></i>
                                                        <span>Allow</span>
                                                    </label>

                                                    <label>
                                                        <input type="radio" name="status" value="0" />
                                                        <i></i>
                                                        <span>Deny</span>
                                                    </label>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label
                                                class="col-sm-2 col-form-label form-label-title">Images</label>
                                            <div class="col-sm-10">
                                                <input class="form-control form-choose" type="file"
                                                       id="formFileMultiple" name="image" >
                                            </div>
                                        </div>
                                        <button class="btn btn-dark" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Product Add End -->
    <!-- ck editor js -->
    <script src="{{@asset('/assets/admin/js/ckeditor.js')}}"></script>
    <script src="{{@asset('/assets/admin/js/ckeditor-custom.js')}}"></script>

</x-admin-layout>
