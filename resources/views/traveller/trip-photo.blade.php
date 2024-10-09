<x-app-layout>

<div>
  <div class="card-body">
    <h5 class="card-title text-center">Travel Photos</h5>

    <form class='w-75 mt-4 mx-auto' 
      action='{{  route('trip-photo')  }}' 
      method="POST" enctype="multipart/form-data">
      @csrf

      <!-- Form Fields -->

      <div class="mb-3">
        <label for="place" class="form-label fw-bold">Place</label>
        <input type="text" name='place' value='' class="form-control form-control-lg rounded-pill" id="place" placeholder="Enter starting point">
      </div>

 

      <div class="mb-3">
        <label for="date6" class="form-label fw-bold">Date</label>
        <input type="date" name='date6' value='' class="form-control form-control-lg rounded-pill" id="date6">
      </div>


      <div class="mb-4">
        <label for="image6" class="form-label fw-bold">Upload Trip Image</label>
        <input type="file" name='image6' class="form-control" id="image6">
      </div>

      <div class="text-center">
        <input type="submit" class="btn btn-success btn-lg px-5 rounded-pill" value="Submit">
      </div>
      
    </form>
  </div>
</div>



</x-app-layout>