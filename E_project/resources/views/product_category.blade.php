@extends('admin_dashboard.header_footer')
@section('content')

<div class="col-md-6 offset-md-2">
    <!-- Main Content -->
    <form action="/action_page.php">
  
  <div class="mb-3 mt-3">
    <label for="category" class="form-label">Category Name:</label>
    <input type="text" class="form-control" id="category" placeholder="Enter category" name="category">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    <!-- End of Main Content -->

    @endsection

