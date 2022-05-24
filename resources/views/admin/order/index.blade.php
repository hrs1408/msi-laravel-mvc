<x-admin-layout>
    <div class="title-header">
        <h5>Order List</h5>
    </div>

    <!-- Table Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <div class="table-responsive table-desi">
                                <table class="table table-striped all-package">
                                    <thead>
                                    <tr>
                                        <th>USER</th>
                                        <th>Phone</th>
                                        <th>Date</th>
                                        <th>Info</th>
                                        <th>Delivery Status</th>
                                        <th>Amount</th>
                                        <th>Option</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @forelse($orders as $order)
                                        <tr>
                                            <td>
                                                            <span>
                                                                <b>{{ $order->user->name }}</b>
                                                            </span>
                                            </td>

                                            <td>{{$order->phone}}</td>

                                            <td>{{$order->created_at}}</td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <span>
                                                           Name Delivery:  {{ $order->name }}
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                           Address: {{ $order->address }}
                                                        </span>
                                                    </li>
                                                </ul>
                                            </td>

                                            @if($order->status = 'pending')
                                                <td class="order-pending">
                                                    <span>Pending</span>
                                                </td>
                                            @elseif($order->status = 'success')
                                                <td class="order-success">
                                                    <span>Success</span>
                                                </td>
                                            @elseif($order->status = 'cancel')
                                                <td class="order-cancel">
                                                    <span>Cancel</span>
                                                </td>
                                            @endif
                                            <td>${{$order->total_money}}</td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="{{route('admin.orders.show', $order)}}">
                                                            <span class="lnr lnr-eye"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('admin.orders.edit', $order)}}">
                                                            <span class="lnr lnr-pencil"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('admin.orders.destroy',$order )}}">
                                                            <span class="lnr lnr-trash"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">No Data Found</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination Box Start -->
                    <div class="container">
                        {{ $orders->render('pagination::admin-pagination') }}
                    </div>
                    <!-- Pagination Box End -->
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
