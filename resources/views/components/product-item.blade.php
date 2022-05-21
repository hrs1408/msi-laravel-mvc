@props(['product'])

<div class="product-thumb col-lg-3 p-3">
    <a href="{{route('home.show', $product->slug)}}">
        <div class="image">
            <img
                src="{{ isset($product->images[0]) ? '/'.$product->images[0]->url : '' }}"
                alt=""
                class="w-100"
            />
        </div>
        <div class="title">
            {{isset($product->name) ? $product->name : ''}}
        </div>
        <div class="description" style="height: 150px">
            <ul>
                {{isset($product->short_desc) ? $product->short_desc : ''}}
            </ul>
        </div>
    </a>
    <div class="price">
        <span class="price-old"></span>
        <span class="price-new">${{isset($product->price) ? $product->price : ''}}</span>
    </div>
    <div class="button pt-2">
        <button class="btn btn-light border">COMPARE</button>
        <button class="btn btn-danger">ADD TO CART</button>
    </div>
</div>
