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
    <div class="text-center">
        <div class="d-flex">
            <div class="line"></div>
            <div class="text"><h4>DETAIL SPECIFI</h4></div>
            <div class="line"></div>
        </div>
    </div>
    <div class="container product-body">
        {!! $product->body !!}
    </div>
    <div class="service-support text-center mt-4">
        <div class="d-flex">
            <div class="line"></div>
            <div class="text"><h4>SERVICE & SUPPORT</h4></div>
            <div class="line"></div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-2 text-center">
                    <div class="img">
                        <img
                            src="https://us-store.msi.com/image/phone.png"
                            alt=""
                            class="img-fluid w-25"
                        />
                    </div>
                    <div class="title fw-bold">Telephone</div>
                    <div class="sub">
                        Call our support representative 888-796-2664 Mon-Fri 9:00AM-5:00PM
                        PST
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="img">
                        <img
                            src="https://us-store.msi.com/image/Email.png"
                            alt=""
                            class="img-fluid w-25"
                        />
                    </div>
                    <div class="title fw-bold">Email US</div>
                    <div class="sub">Send us your inquire</div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="img">
                        <img
                            src="https://us-store.msi.com/image/Warranty-icon.png"
                            alt=""
                            class="img-fluid w-25"
                        />
                    </div>
                    <div class="title fw-bold">Warranty Information</div>
                    <div class="sub">View Manufacturer warranty information</div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="img">
                        <img
                            src="https://us-store.msi.com/image/Barcode.png"
                            alt=""
                            class="img-fluid w-25"
                        />
                    </div>
                    <div class="title fw-bold">Register Your Product</div>
                    <div class="sub">Get the most out of your ownership</div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="img">
                        <img
                            src="https://us-store.msi.com/image/Download.png"
                            alt=""
                            class="img-fluid w-25"
                        />
                    </div>
                    <div class="title fw-bold">Manuals and Downloads</div>
                    <div class="sub">Latest software, drivers, manuals, utilities</div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="img">
                        <img
                            src="https://us-store.msi.com/image/Search-Articles.png"
                            alt=""
                            class="img-fluid w-25"
                        />
                    </div>
                    <div class="title fw-bold">Support Articles</div>
                    <div class="sub">Search a solution, troubleshooting guide</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
