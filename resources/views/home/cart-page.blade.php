<x-app-layout>
    <div class="container-fluid break-line"></div>
    <div class="container cart-content mt-4 mb-4">
        <div class="row">
            <div class="col-xl-8">
                <h3>YOUR CART</h2>
                    <div class="cart-list d-flex flex-column gap-2 mt-5 p-2">
                        <div class="title d-flex justify-content-between align-items-center">
                            <div class="infor d-flex w-50">
                                <div class="name">
                                    <span>PRODUCT</span>
                                </div>
                            </div>
                            <div class="qty w-25">
                                <span>QUANTITY</span>
                            </div>
                            <div class="total-loz w-25 d-flex justify-content-end">
                                <span>TOTAL</span>
                            </div>
                        </div>
                        <hr/>
                        @forelse($cartDetails as $cartDetail)
                            <div class="item d-flex justify-content-between align-items-center my-2">
                                <div class="infor d-flex w-50">
                                    <div class="image">
                                        <img
                                            src="https://us-store.msi.com/image/cache/catalog/Pd_page/Desktops/AegisTi5/AEGISTI5-1-64x64.png"
                                            alt="">
                                    </div>
                                    <div class="name d-flex flex-column gap-2">
                                        <p>{{$cartDetail->product->name}}</p>
                                            <span>${{$cartDetail->product->price}}</span>
                                        <div class="button-utils d-flex align-items-center justify-content-start gap-2">
                                            <button class="btn px-2">
                                                Update
                                            </button>
                                            <form action="{{route('cart.remove',$cartDetail->id )}}"
                                                  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="id" value="{{$cartDetail->id}}">
                                                <button type="submit" class="btn px-2">
                                                    Remove
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="qty w-25">
                                    <input class="form-control" type="number" name="" min="1" id="" style="width: 70px;"
                                           value="{{$cartDetail->quantity}}">
                                </div>
                                <div class="total w-25 d-flex justify-content-end">
                                    <span>${{$cartDetail->into_money}}</span>
                                </div>
                            </div>
                        @empty
                            <div class="infor d-flex w-50">
                                <div class="name">
                                    <span>No item in cart</span>
                                </div>
                            </div>
                        @endforelse
                    </div>
            </div>
            <div class="col-xl-4 bg-light p-3">
                <h3 class="pt-2">CART SUMMARY</h3>
                <hr>
                <span>{{$cart->quantity}} Product</span>
                <div class="container-fluid break-line"></div>
                <div class="d-flex justify-content-between">
                    <div class="sub-total">Sub-Total</div>
                    <div class="sub-total-price">${{$cart->total_money}}</div>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <div class="total">Total</div>
                    <div class="total-price">${{$cart->total_money}}</div>
                </div>
                <div class="container-fluid break-line mt-3"></div>
                <span>Do you have a promotion code?</span>
                <div class="discount input-group mt-3">
                    <input type="text" class="form-control" placeholder="Add promotion code...">
                    <button class="btn add">ADD</button>
                </div>
                <div class="container-fluid break-line mt-3 mb-3"></div>
                <a href="{{route('home.checkout')}}" class="btn btn-dark checkout">PROCEED TO CHECKOUT</a>
                <div class="info p-3">
                    <div class="info-item">
                        <i class="fas fa-lock"></i>
                        <span>Secure payment</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-comment"></i>
                        <span>Need help? Contact our Customer Service</span>
                    </div>
                    <br>
                    <span>We offer returns within 30 days of purchase. Read more about our Return and refund
                        policy.</span>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
