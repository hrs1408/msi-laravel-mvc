@props(['name','body','oldPrice', 'price', 'image'])

<div class="product-thumb col-lg-3 p-3">
    <div class="image">
        <img
            src="{{ $image }}"
            alt=""
        />
    </div>
    <div href="" class="title">
        {{$name}}
    </div>
    <div class="description" style="height: 150px">
        <ul>
            {{$body}}
        </ul>
    </div>
    <div class="price">
        <span class="price-old">${{$oldPrice}}</span>
        <span class="price-new">${{$price}}</span>
    </div>
    <div class="button pt-2">
        <button class="btn btn-light border">COMPARE</button>
        <button class="btn btn-danger">ADD TO CART</button>
    </div>
</div>
