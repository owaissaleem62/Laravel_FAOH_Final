@extends('admin_dashboard.header_footer')
@section('content')

<div class="col-md-6 offset-md-2">
    <!-- Main Content -->
    <form action="#">
  
    <div class="mb-3 mt-3">
    <label for="image" class="form-label">User Image:</label>
    <input type="file" class="form-control" id="image"  name="image" required>
  </div>
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
  </div>
  <div class="mb-3 mt-3">
  <label for="sel1">Select This One Role</label>
      <select class="form-control" id="sel1">
        <option>Super Admin</option>
        <option>Admin</option>
        <option>User</option>
      </select>
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" required>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone:</label>
    <input type="number" class="form-control" id="phone" placeholder="Enter Phone" name="phone" required>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div class="container-fluid" style="margin-top: -5%;">
        <div class="card-header py-3 card shadow mb-4">
        <h6 class="m-0 font-weight-bold text-primary">All User Role Detail</h6>
        </div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>User ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>image</td>
                        <td>aliraza</td>
                        <td>Admin</td>
                        <td>aliraza@gmail.com</td>
                        <td>0300123456</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>image</td>
                        <td>owais</td>
                        <td>Admin</td>
                        <td>owais@gmail.com</td>
                        <td>0300123456</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>image</td>
                        <td>fahad</td>
                        <td>user</td>
                        <td>fahad@gmail.com</td>
                        <td>0300123456</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>004</td>
                        <td>image</td>
                        <td>hadi</td>
                        <td>user</td>
                        <td>hadi@gmail.com</td>
                        <td>0300123456</td>
                        <td>Active</td>
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

