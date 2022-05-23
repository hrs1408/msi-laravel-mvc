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
        <div class="description over-flow-hidden" style="height: 150px">
            {{isset($product->short_desc) ? $product->short_desc : ''}}
        </div>
    </a>
    <div class="price">
        <span class="price-old"></span>
        <span class="price-new">${{isset($product->price) ? $product->price : ''}}</span>
    </div>
    <div class="button pt-2 d-flex gap-4 justify-content-end">
        <button class="btn btn-light border">COMPARE</button>
        <form action="{{route('cart.insert', $product->id)}}" method="POST">
            @csrf
            @method('POST')
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <button type="submit" class="btn btn-danger text-white">ADD TO CART</button>
        </form>
    </div>
</div>
