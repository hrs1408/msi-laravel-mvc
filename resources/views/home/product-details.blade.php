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
                    src="https://us-store.msi.com/image/cache/catalog/Pd_page/Desktops/AegisTi5/AEGISTI5-1-1024x1024.png"
                    alt=""
                    class="img-fluid"
                />
            </div>
            <div class="col-xl-6">
                <div class="container-fluid break-line"></div>
                <h3>{{$product->name}}</h3>
                <p style="font-size: 15px; height: 150px">
                    {{$product->short_desc}}
                </p>
                <div class="container-fluid break-line"></div>
                <ul class="short-detail mt-3">
                    <li>Windows 11 Home<br /></li>
                    <li>Intel Core™&nbsp;i9-12900K 8P+8EC/24T 3.2-5.2 GHz</li>
                    <li>NVIDIA® GeForce RTX™ 3070 Ti 8G GDDR6X</li>
                    <li>32GB DDR5 (2 x 16GB) 4800 MHz</li>
                    <li>2TB M.2 NVMe</li>
                    <li>2TB (3.5" 7200 RPM)</li>
                    <li>
                        PCIe Gen 5 bandwidth support, improved workloads and render
                        capabilities for enhanced gaming experience.
                    </li>
                    <li>
                        Gaming Dial- Quickly and intuitively harness this gaming beast
                    </li>
                    <li>
                        Silent Storm Cooling 4 - Excellent heat dissipation design to
                        ensure smooth operation of the game visuals
                    </li>
                    <li>2.5G + 1G Dual LAN - None delaying gaming experience</li>
                    <li>WiFi 6E Technology wireless gaming with wired quality</li>
                    <li>MSI Mystic Light, customize your gaming color</li>
                    <li>Ambient Link support, immersive gaming experience</li>
                </ul>
                <div class="container-fluid break-line"></div>
                <div class="policy d-flex">
                    <div class="policy-item d-flex gap-3">
                        <img
                            src="https://us-store.msi.com/image/Free-Shipping.png"
                            alt=""
                            class="img-fluid"
                        />
                        <span class="policy-title">
                <span>Free Shipping</span><br />
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
                <span>Return for Refund</span><br />
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
                <span>1-YEAR Limited Warranty</span><br />
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
</x-app-layout>
