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
    <label for="image" class="form-label">Product image:</label>
    <input type="file" class="form-control" id="image"  name="image" required>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    <!-- End of Main Content -->

    @endsection

