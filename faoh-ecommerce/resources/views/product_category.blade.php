@extends('admin_dashboard.header_footer')
@section('content')

<div class="col-md-6 offset-md-2">
    <!-- Main Content -->

    @if (session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
    @endif
    <form  action="{{ url('add-category') }}" method="POST">
        @csrf
  <div class="mb-3 mt-3">
    <label for="categories" class="form-label">Categories Name:</label>
    <input type="text" class="form-control" id="categories" placeholder="Enter categories" name="categories" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div  style="position: relative; bottom:20%;" class="container-fluid mb-5 finne"   >
        <div class="card-header py-3 card shadow mb-4">
        <h6 class="m-0 font-weight-bold text-primary">All Categories Detail</h6>
    </div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Categories</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($category as $data_store)
                    <tr>
                        <td>{{$data_store->categoryID}}</td>
                        <td>{{$data_store->CategoryName}}</td>
                        <td><a href="{{ url('product_categorys/'.$data_store->categoryID) }}" class="btn btn-danger btn-sm">Delete</a></td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
    <!-- End of Main Content -->

    @endsection

