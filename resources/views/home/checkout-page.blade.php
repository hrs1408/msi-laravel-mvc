<x-app-layout>
    <div class="container-fluid break-line"></div>
    <div class="container mt-5">
        <div class="title text-center ">
            <h4 class="fw-light">
                <i class=" fas fa-lock"></i> Secure Checkout
            </h4>
        </div>
        <div class="row mt-5">
            <div class="col-xl-6">
                <h5>Information</h5>
                <hr>
                <form id="form-info" action="{{route('cart.checkout')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{$user->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                </form>
            </div>
            <div class="col-xl-6">
                <h5>Order Summary</h5>
                <hr>
                <div class="product-checkout">
                    @forelse($cartDetails as $cartDetail)
                        <div class="product-item border d-flex justify-content-around p-2 mt-2">
                            <img src="https://us-store.msi.com/image/cache/catalog/Pd_page/Desktops/AegisTi5/AEGISTI5-1-64x64.png"
                                 alt="">
                            <div class="product-info d-flex flex-column">
                                <span class="fw-bold">{{$cartDetail->product->name}}</span>
                                <span>Item price: ${{$cartDetail->product->price}}</span>
                                <span>QTY: {{$cartDetail->quantity}}</span>
                            </div>
                            <div class="product-into fw-bold">
                                ${{$cartDetail->into_money}}
                            </div>
                        </div>
                        @empty
                        <div>
                            <h5>No item in cart</h5>
                        </div>
                    @endforelse
                </div>
                <div class="sub-checkout d-flex justify-content-between mt-4">
                    <span>Sub-total</span>
                    <span>${{$cartDetail->into_money}}</span>
                </div>
                <hr>
                <div class="total-checkout d-flex justify-content-between fw-bold">
                    <span>Total</span>
                    <span>${{$cart->total_money}}</span>
                </div>
                <div class="button-checkout mt-4">
                    <button type="submit" form="form-info" class="btn btn-dark w-100 p-3">
                        CHECK OUT
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
