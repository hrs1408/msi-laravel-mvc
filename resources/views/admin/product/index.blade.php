<x-admin-layout>
    <div class="title-header">
        <h5>Product List</h5>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <a class="btn btn-danger mb-3" href="{{route('admin.products.create')}}">
                                <i class="fas fa-plus"></i>
                                <span>Add Product</span>
                            </a>
                            <div class="table-responsive table-desi table-product">
                                <table class="table table-1d all-package">
                                    <thead>
                                    <tr>
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Current Qty</th>
                                        <th>Price</th>
                                        <th>Published</th>
                                        <th>Option</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @forelse($products as $product)
                                        <tr>
                                            <td>
                                                <img
                                                    src="{{isset($product->images[0]) ? '/'.$product->images[0]->url : ''}}"
                                                    class="img-fluid"
                                                    alt="">
                                            </td>

                                            <td>
                                                <a href="javascript:void(0)">{{$product->name}}</a>
                                            </td>

                                            <td>
                                                <a href="javascript:void(0)">{{$product->category->name}}</a>
                                            </td>

                                            <td>{{$product->quantity}}</td>

                                            <td class="td-price">${{$product->price}}</td>


                                            @if($product->status)
                                                <td class="td-check">
                                                    <span class="lnr lnr-checkmark-circle"></span>
                                                </td>
                                            @elseif (!$product->status)
                                                <td class="td-cross">
                                                    <span class="lnr lnr-cross-circle"></span>
                                                </td>
                                            @endif

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <span class="lnr lnr-eye"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('admin.products.edit', $product)}}">
                                                            <span class="lnr lnr-pencil"></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a data-bs-toggle="modal" class="btn p-0"
                                                           data-bs-target="#deleteModal"
                                                           data-action="{{ route('admin.products.destroy', $product) }}"><span
                                                                class="lnr lnr-trash"></span></a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @empty
                                        <h1>No Product</h1>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <div class="container">
                        {{ $products->render('pagination::admin-pagination') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
{{--<div class="modal modal-danger fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete"--}}
{{--     aria-hidden="true">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>--}}
{{--                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <form action="{{route('admin.products.destroy', $product)}}" method="post">--}}
{{--                <div class="modal-body">--}}
{{--                    @csrf--}}
{{--                    @method('DELETE')--}}
{{--                    <h5 class="text-center">Are you sure you want to delete this product?</h5>--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>--}}
{{--                    <button type="submit" class="btn btn-sm btn-danger">Yes, Delete Product</button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
