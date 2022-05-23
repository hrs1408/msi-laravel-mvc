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
                <form action="">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Address</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </form>
            </div>
            <div class="col-xl-6">
                <h5>Order Summary</h5>
                <hr>
                <div class="product-checkout">
                    <div class="product-item border d-flex justify-content-around p-2 mt-2">
                        <img src="https://us-store.msi.com/image/cache/catalog/Pd_page/Desktops/AegisTi5/AEGISTI5-1-64x64.png"
                             alt="">
                        <div class="product-info d-flex flex-column">
                            <span class="fw-bold">MEG Aegis Ti5 12VTE-028US Gaming</span>
                            <span>Item price: $3,599.99</span>
                            <span>QTY: 1</span>
                        </div>
                        <div class="product-into fw-bold">
                            $3,599.99
                        </div>
                    </div>
                    <div class="product-item border d-flex justify-content-around p-2 mt-2">
                        <img src="https://us-store.msi.com/image/cache/catalog/Pd_page/Desktops/AegisTi5/AEGISTI5-1-64x64.png"
                             alt="">
                        <div class="product-info d-flex flex-column">
                            <span class="fw-bold">MEG Aegis Ti5 12VTE-028US Gaming</span>
                            <span>Item price: $3,599.99</span>
                            <span>QTY: 1</span>
                        </div>
                        <div class="product-into fw-bold">
                            $3,599.99
                        </div>
                    </div>
                </div>
                <div class="sub-checkout d-flex justify-content-between mt-4">
                    <span>Sub-total</span>
                    <span>
            $3,599.99
          </span>
                </div>
                <hr>
                <div class="total-checkout d-flex justify-content-between fw-bold">
                    <span>Total</span>
                    <span>
            $3,599.99
          </span>
                </div>
                <div class="button-checkout mt-4">
                    <button class="btn btn-dark w-100 p-3">
                        CHECK OUT
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
