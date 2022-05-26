<x-app-layout>
    <div class="side-bar d-none d-xl-flex justify-content-between">
        <ul class="ms-5 pt-2 d-flex list-unstyled gap-3">
            @forelse ($categories as $category)
                <li class="d-flex align-items-center">
                    <a href="" class="text-gray-600">{{$category->name}}</a>
                </li>
            @empty
                <li class="d-flex align-items-center">
                    <a href="#" class="text-gray-600">No categories</a>
                </li>
            @endforelse
        </ul>
        <div class="cart">
            <ul class="ms-5 pt-2 d-flex list-unstyled gap-3">
                <li><i class="fas fa-user"></i></li>
                <li><i class="fas fa-comment"></i></li>
                <li><a href="{{route('cart.index')}}"><i class="fas fa-shopping-cart"></i></a></li>
            </ul>
        </div>
    </div>
    <x-carousel
        image1="https://us-store.msi.com/image/cache/catalog/banner/Home%20Page%20Rotate/Z690-GODLIKE_3600x1260-1920x672.jpg"
        image2="https://us-store.msi.com/image/cache/catalog/promotion/2022MBMANIA/3600x1260-1920x672.jpg"
        image3="https://us-store.msi.com/image/cache/catalog/promotion/0053bdac_Website_3600x1260-1920x672.jpg"
    >
    </x-carousel>
    <div class="explorer-product mt-4">
        <h5>EXPLORER <span class="product-text">PRODUCTS</span></h5>
        <div class="container d-none d-md-block">
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
        <div class="exp-product-responsive mt-3 d-md-none d-block">
            <div
                id="carouselExampleControls"
                class="carousel slide"
                data-bs-ride="carousel"
            >
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="exp-product-item-repo text-center">
                            <img
                                src="https://us-store.msi.com/image/catalog/hpc/NB.png"
                                alt=""
                                class="img-fluid exp-product-img"
                            />
                            <p class="exp-product-text">Laptops</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="exp-product-item-repo text-center">
                            <img
                                src="https://us-store.msi.com/image/catalog/hpc/desktop.png"
                                alt=""
                                class="img-fluid exp-product-img"
                            />
                            <p class="exp-product-text">Desktops</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="exp-product-item-repo text-center">
                            <img
                                src="https://us-store.msi.com/image/catalog/hpc/Monitor.png"
                                alt=""
                                class="img-fluid exp-product-img"
                            />
                            <p class="exp-product-text">Monitors</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="exp-product-item-repo text-center">
                            <img
                                src="https://us-store.msi.com/image/catalog/hpc/VGA2.png"
                                alt=""
                                class="img-fluid exp-product-img"
                            />
                            <p class="exp-product-text">Graphic Cards</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="exp-product-item-repo text-center">
                            <img
                                src="https://us-store.msi.com/image/catalog/hpc/MB.png"
                                alt=""
                                class="img-fluid exp-product-img"
                            />
                            <p class="exp-product-text">Motherboards</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="exp-product-item-repo text-center">
                            <img
                                src="https://us-store.msi.com/image/catalog/hpc/Game-Gear.png"
                                alt=""
                                class="img-fluid exp-product-img"
                            />
                            <p class="exp-product-text">Gaming Gears</p>
                        </div>
                    </div>
                </div>
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev"
                >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselExampleControls"
                    data-bs-slide="next"
                >
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
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
                        :product="$product"
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
