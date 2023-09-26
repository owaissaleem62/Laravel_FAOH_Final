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
    <!-- End of Main Content -->

    @endsection

