@extends('admin_dashboard.header_footer')
@section('content')

<div class="container-fluid">
        <div class="card-header py-3 card shadow mb-4">
        <h6 class="m-0 font-weight-bold text-primary">All Products Detail</h6>
    </div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Title</th>
                        <th>Product Code</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>S.no</th>
                        <th>Title</th>
                        <th>Product Code</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach ($product as $product_store)
                    <tr>
                        <td>{{$product_store->id}}</td>
                        <td>{{$product_store->Title}}</td>
                        <td>{{$product_store->Code}}</td>
                        <td>{{$product_store->price}}</td>
                        <td>{{$product_store->quantity}}</td>
                        <td>{{$product_store->Description}}</td>
                        <td>
                        <img class="" style="width: 100%;height:300px;" src="Uploadimages/{{$product_store->image}}" alt="Card image cap">
                        </td>
                        <td>{{$product_store->CategoryID}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection