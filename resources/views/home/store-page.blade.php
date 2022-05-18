<x-app-layout>
    <x-carousel
        image1="https://us-store.msi.com/image/cache/catalog/banner/Home%20Page%20Rotate/Z690-GODLIKE_3600x1260-1920x672.jpg"
        image2="https://us-store.msi.com/image/cache/catalog/promotion/2022MBMANIA/3600x1260-1920x672.jpg"
        image3="https://us-store.msi.com/image/cache/catalog/promotion/0053bdac_Website_3600x1260-1920x672.jpg"
    >
    </x-carousel>
    <div class="explorer-product mt-4">
        <h5>EXPLORER <span class="product-text">PRODUCTS</span></h5>
        <div class="container">
            <div class="row m-auto mt-4 p-1">
                <div class="col-md-2 exp-product-item text-center">
                    <img
                        src="https://us-store.msi.com/image/catalog/hpc/NB.png"
                        alt=""
                        class="img-fluid exp-product-img"
                    />
                    <p class="exp-product-text">Laptops</p>
                </div>
                <div class="col-md-2 exp-product-item text-center">
                    <img
                        src="https://us-store.msi.com/image/catalog/hpc/desktop.png"
                        alt=""
                        class="img-fluid exp-product-img"
                    />
                    <p class="exp-product-text">Desktops</p>
                </div>
                <div class="col-md-2 exp-product-item text-center">
                    <img
                        src="https://us-store.msi.com/image/catalog/hpc/Monitor.png"
                        alt=""
                        class="img-fluid exp-product-img"
                    />
                    <p class="exp-product-text">Monitors</p>
                </div>
                <div class="col-md-2 exp-product-item text-center">
                    <img
                        src="https://us-store.msi.com/image/catalog/hpc/VGA2.png"
                        alt=""
                        class="img-fluid exp-product-img"
                    />
                    <p class="exp-product-text">Graphic Cards</p>
                </div>
                <div class="col-md-2 exp-product-item text-center">
                    <img
                        src="https://us-store.msi.com/image/catalog/hpc/MB.png"
                        alt=""
                        class="img-fluid exp-product-img"
                    />
                    <p class="exp-product-text">Motherboards</p>
                </div>
                <div class="col-md-2 exp-product-item text-center">
                    <img
                        src="https://us-store.msi.com/image/catalog/hpc/Game-Gear.png"
                        alt=""
                        class="img-fluid exp-product-img"
                    />
                    <p class="exp-product-text">Gaming Gears</p>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-wrapper">
        <img
            src="https://us-store.msi.com/image/cache/catalog/promotion/Esports-Monitor1920X300-1920x300.jpg"
            alt=""
        />
    </div>
    <div class="product-list">
        <div class="container">
            <div class="row">
                @forelse($products as $product)
                    <x-product-item
                        name="{{$product->name}}"
                        short_desc="{{$product->short_desc}}"
                        oldPrice=""
                        price="{{$product->price}}"
                        image="{{isset($product->images[0]) ? '/'.$product->images[0]->url : ''}}"
                    >
                    </x-product-item>
                @empty
                    <div class="col-md-12 text-center mt-5">
                        <div class="spinner-border text-danger" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                @endforelse
            </div>
            <div class="pagination mt-5">
                {{ $products->render('pagination::home-pagination') }}
            </div>
        </div>
    </div>
    <div class="swiper-wrapper">
        <img
            src="https://us-store.msi.com/image/catalog/Promotion/mblc/1920x300.jpg"
            alt=""
        />
    </div>
</x-app-layout>
