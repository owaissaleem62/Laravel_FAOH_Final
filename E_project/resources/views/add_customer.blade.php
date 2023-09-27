@extends('admin_dashboard.header_footer')
@section('content')

<div class="col-md-6 offset-md-2">
    <!-- Main Content -->
    <form action="#">
  
  <div class="mb-3 mt-3">
    <label for="customer_name" class="form-label">Customer Name:</label>
    <input type="text" class="form-control" id="customer_name" placeholder="Enter Customer Name" name="customer_name" required>
  </div>
  <div class="mb-3 mt-3">
    <label for="customer_email" class="form-label">Customer Email:</label>
    <input type="text" class="form-control" id="customer_email" placeholder="Enter Customer Email" name="customer_email" required>
  </div>
  <div class="mb-3 mt-3">
    <label for="phone" class="form-label">Phone:</label>
    <input type="number" class="form-control" id="phone" placeholder="Enter Phone" name="phone" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div class="container-fluid" style="margin-top: -18%;">
        <div class="card-header py-3 card shadow mb-4">
        <h6 class="m-0 font-weight-bold text-primary">All Customers Detail</h6>
    </div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>Customer Name</th>
                        <th>Customer Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Customer ID</th>
                        <th>Customer Name</th>
                        <th>Customer Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Ali Raza</td>
                        <td>aliraza@gmail.com</td>
                        <td>0300-123456</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Owais</td>
                        <td>Owais@gmail.com</td>
                        <td>0300-123456</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Fahad</td>
                        <td>fahad@gmail.com</td>
                        <td>0300-123456</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>004</td>
                        <td>Hadi</td>
                        <td>hadi@gmail.com</td>
                        <td>0300-123456</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>Ali Raza</td>
                        <td>aliraza@gmail.com</td>
                        <td>0300-123456</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Owais</td>
                        <td>Owais@gmail.com</td>
                        <td>0300-123456</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Fahad</td>
                        <td>fahad@gmail.com</td>
                        <td>0300-123456</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>004</td>
                        <td>Hadi</td>
                        <td>hadi@gmail.com</td>
                        <td>0300-123456</td>
                        <td>Active</td>
                    </tr>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>Ali Raza</td>
                        <td>aliraza@gmail.com</td>
                        <td>0300-123456</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Owais</td>
                        <td>Owais@gmail.com</td>
                        <td>0300-123456</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Fahad</td>
                        <td>fahad@gmail.com</td>
                        <td>0300-123456</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>004</td>
                        <td>Hadi</td>
                        <td>hadi@gmail.com</td>
                        <td>0300-123456</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>Ali Raza</td>
                        <td>aliraza@gmail.com</td>
                        <td>0300-123456</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Owais</td>
                        <td>Owais@gmail.com</td>
                        <td>0300-123456</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Fahad</td>
                        <td>fahad@gmail.com</td>
                        <td>0300-123456</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>004</td>
                        <td>Hadi</td>
                        <td>hadi@gmail.com</td>
                        <td>0300-123456</td>
                        <td>Active</td>
                    </tr>
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

