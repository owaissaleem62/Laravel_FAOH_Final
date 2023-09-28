@extends('admin_dashboard.header_footer')
@section('content')

<div class="col-md-6 offset-md-2">
    <!-- Main Content -->
    <form action="#">

  <div class="mb-3 mt-3">
    <label for="title" class="form-label">Title:</label>
    <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" required>
  </div>
  <div class="mb-3 mt-3">
    <label for="code" class="form-label">Product Code:</label>
    <input type="text" class="form-control" id="code" placeholder="Enter code" name="code" required>
  </div>
  <div class="mb-3 mt-3">
    <label for="price" class="form-label">Price:</label>
    <input type="number" class="form-control" id="price" placeholder="Enter price" name="price" required>
  </div>
  <div class="mb-3 mt-3">
    <label for="qty" class="form-label">Quantity:</label>
    <input type="number" class="form-control" id="qty" placeholder="Enter qty" name="qty" required>
  </div>
  <div class="mb-3">
    <label for="des" class="form-label">Description:</label>
    <textarea type="text" class="form-control" id="des" placeholder="Enter description" name="des" required></textarea>
  </div>

  <div class="mb-3 mt-3">
    <label for="category_id" class="form-label">Category:</label>
    <select name="category_id" id="category_id" class="form-control">
        <option selected disabled>Choose Category</option>
        @foreach ($category as $item)
       <option value="{{ $item->categoryID }}">{{ $item->CategoryName }}</option>
       @endforeach
   </select>

  </div>

  <div class="mb-3 mt-3">
    <label for="image" class="form-label">Product image:</label>
    <input type="file" class="form-control" id="image"  name="image" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

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
                    <tr>
                        <td>1</td>
                        <td>Hand bag</td>
                        <td>PC2023001</td>
                        <td>2,500</td>
                        <td>10</td>
                        <td>Bag</td>
                        <td>Image</td>
                        <td>Action</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Beauty Product</td>
                        <td>PC2023002</td>
                        <td>2,500</td>
                        <td>10</td>
                        <td>Beauty Products</td>
                        <td>Image</td>
                        <td>Action</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Men Wallet</td>
                        <td>PC2023003</td>
                        <td>2,000</td>
                        <td>10</td>
                        <td>Wallet</td>
                        <td>Image</td>
                        <td>Action</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Greeding Cards</td>
                        <td>PC2023004</td>
                        <td>100</td>
                        <td>10</td>
                        <td>Greeding Cards</td>
                        <td>Image</td>
                        <td>Action</td>
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

