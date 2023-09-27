@extends('admin_dashboard.header_footer')
@section('content')

<div class="col-md-6 offset-md-2">
    <!-- Main Content -->
    <form action="#">
  
  <div class="mb-3 mt-3">
    <label for="categories" class="form-label">Categories Name:</label>
    <input type="text" class="form-control" id="categories" placeholder="Enter categories" name="categories" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div class="container-fluid" style="margin-top: -15%;">
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
                        <th>Code</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>S.no</th>
                        <th>Categories</th>
                        <th>Code</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Hand Bag</td>
                        <td>CO023001</td>
                        <td>Active</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Men Wallet</td>
                        <td>CO023002</td>
                        <td>Active</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Beauty Product</td>
                        <td>CO023003</td>
                        <td>Active</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Greeding Cards</td>
                        <td>CO023004</td>
                        <td>Active</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
    <!-- End of Main Content -->

    @endsection

