<x-admin-layout>
    <div class="title-header title-header-block package-card">
        <div>
            <h5>Order #{{$order->id}}</h5>
        </div>
        <div class="card-order-section">
            <ul>
                <li>{{$order->created_at}}</li>
                <li>{{$order->quantity}} items</li>
                <li>Total ${{$order->total_money}}</li>
            </ul>
        </div>
    </div>

    <!-- tracking table start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="bg-inner cart-section order-details-table">
                            <div class="row g-4">
                                <div class="col-xl-8">
                                    <div class="table-responsive table-details">
                                        <table class="table cart-table table-borderless">
                                            <thead>
                                            <tr>
                                                <th colspan="2">List Items</th>
                                                <th class="text-end" colspan="2">
                                                    @if($order->status = 'pending')
                                                        <span class="order-pending">Pending</span>
                                                    @elseif($order->status = 'success')
                                                        <span class="order-success">Success</span>
                                                    @elseif($order->status = 'cancel')
                                                        <span class="order-cancel">Cancel</span>
                                                    @endif
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @forelse($orderDetails as $orderDetail)
                                                <tr class="table-order">
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <img src="assets/images/profile/1.jpg"
                                                                 class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <p>Product Name</p>
                                                        <h5>{{$orderDetail->product->name}}</h5>
                                                    </td>
                                                    <td>
                                                        <p>Quantity</p>
                                                        <h5>{{$orderDetail->quantity}}</h5>
                                                    </td>
                                                    <td>
                                                        <p>Price</p>
                                                        <h5>${{$orderDetail->into_money}}</h5>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4">
                                                        <h5>No item found</h5>
                                                    </td>
                                            @endforelse
                                            </tbody>

                                            <tfoot>
                                            <tr class="table-order">
                                                <td colspan="3">
                                                    <h5>Subtotal :</h5>
                                                </td>
                                                <td>
                                                    <h4>${{$order->total_money}}</h4>
                                                </td>
                                            </tr>

                                            <tr class="table-order">
                                                <td colspan="3">
                                                    <h5>Shipping :</h5>
                                                </td>
                                                <td>
                                                    <h4>$0</h4>
                                                </td>
                                            </tr>

                                            <tr class="table-order">
                                                <td colspan="3">
                                                    <h5>Tax(GST) :</h5>
                                                </td>
                                                <td>
                                                    <h4>$0</h4>
                                                </td>
                                            </tr>

                                            <tr class="table-order">
                                                <td colspan="3">
                                                    <h4 class="theme-color fw-bold">Total Price :</h4>
                                                </td>
                                                <td>
                                                    <h4 class="theme-color fw-bold">${{$order->total_money}}</h4>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="order-success">
                                        <div class="row g-4">
                                            <h4>summery</h4>

                                            <h4>shipping address</h4>
                                            <ul class="order-details">
                                                <li>{{$order->name}}</li>
                                                <li>{{$order->phone}}</li>
                                                <li>{{$order->address}}</li>
                                            </ul>

                                            <div class="payment-mode">
                                                <h4>payment method</h4>
                                                <p>Pay on Delivery (Cash/Card). Cash on delivery (COD)
                                                    available. Card/Net banking acceptance subject to device
                                                    availability.</p>
                                            </div>

                                            <div class="delivery-sec">
                                                <span>{{$order->created_at}}</span>
                                                </h3>
                                                <a href="order-tracking.html">track order</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
