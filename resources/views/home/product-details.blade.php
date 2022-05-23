<x-app-layout>
    <div class="side-bar d-flex justify-content-between">
        <ul class="ms-5 pt-2 d-flex list-unstyled gap-3">
            <li>LAPTOPS</li>
            <li>DESKTOPS</li>
            <li>MONITORS</li>
            <li>GRAPHIC CARDS</li>
            <li>MOTHERBOARDS</li>
            <li>GAMING GEARS</li>
            <li>PC COMPONENT</li>
            <li>SALE</li>
            <li>WINDOWS 11</li>
        </ul>
        <div class="cart">
            <ul class="ms-5 pt-2 d-flex list-unstyled gap-3">
                <li><i class="fas fa-user"></i></li>
                <li><i class="fas fa-comment"></i></li>
                <li><i class="fas fa-shopping-cart"></i></li>
            </ul>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-xl-6">
                <img
                    src="
                    {{isset($product->images[0]) ? '/'.$product->images[0]->url : ''}}"
                    alt=""
                    class="img-fluid"
                />
            </div>
            <div class="col-xl-6">
                <div class="container-fluid break-line"></div>
                <h3>{{$product->name}}</h3>
                <p style="font-size: 15px; ">
                    {{$product->short_desc}}
                </p>
                <div class="container-fluid break-line"></div>
                <div class="policy d-flex">
                    <div class="policy-item d-flex gap-3">
                        <img
                            src="https://us-store.msi.com/image/Free-Shipping.png"
                            alt=""
                            class="img-fluid"
                        />
                        <span class="policy-title">
                <span>Free Shipping</span><br/>
                <span class="title-sub">On order over $25</span>
              </span>
                    </div>
                    <div class="policy-item d-flex gap-3">
                        <img
                            src="https://us-store.msi.com/image/Return.png"
                            alt=""
                            class="img-fluid"
                        />
                        <span class="policy-title">
                <span>Return for Refund</span><br/>
                <span class="title-sub">Within 30 days</span>
              </span>
                    </div>
                    <div class="policy-item d-flex gap-3">
                        <img
                            src="https://us-store.msi.com/image/Warranty.png"
                            alt=""
                            class="img-fluid"
                        />
                        <span class="policy-title">
                <span>1-YEAR Limited Warranty</span><br/>
                <span class="title-sub">Base-on purchase date</span>
              </span>
                    </div>
                </div>
                <div class="button-function mt-4 mb-3 d-flex justify-content-around">
                    <div class="price">${{$product->price}}</div>
                    <div class="button d-flex gap-4">
                        <button class="btn btn-light border">COMPARE</button>
                        <button class="btn btn-danger">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid break-line"></div>
    <div class="container product-body">
        {!! $product->body !!}
    </div>
</x-app-layout>
