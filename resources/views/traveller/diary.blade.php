<x-app-layout>



<div class="card shadow-lg mt-5" style="background-color: #e8f5e9; border-radius: 10px;">
  <div class="card-header bg-success text-white text-center" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
    {{ date('F j, Y') }}
  </div>
  <div class="card-body">
    <h5 class="card-title text-center">Travel Diary</h5>

    <form class='w-75 mt-4 mx-auto' 
      action='{{ $user 
                ? route('trip-diary-store') 
                : route('trip-diary-store') }}' 
      method="POST" enctype="multipart/form-data">
      @csrf

      <!-- Form Fields -->

      <div class="mb-3">
        <label for="start" class="form-label fw-bold">My trip starts at</label>
        <input type="text" name='start' value='' class="form-control form-control-lg rounded-pill" id="start" placeholder="Enter starting point">
        <input type="hidden" name="user_id" value="{{ Auth()->user()->id }}">
      </div>

      <div class="mb-3">
        <label for="end" class="form-label fw-bold">My destination is</label>
        <input type="text" name='end' value='' class="form-control form-control-lg rounded-pill" id="end" placeholder="Enter destination">
      </div>

      <div class="mb-3">
        <label for="vehicle" class="form-label fw-bold">The vehicle I used</label>
        <input type="text" name='vehicle' value='' class="form-control form-control-lg rounded-pill" id="vehicle" placeholder="Vehicle used">
      </div>

      <div class="mb-3">
        <label for="date" class="form-label fw-bold">The Trip Start Date</label>
        <input type="date" name='date' value='' class="form-control form-control-lg rounded-pill" id="date">
      </div>

      <div class="mb-3">
        <label for="date2" class="form-label fw-bold">Trip Ends At</label>
        <input type="date" name='date2' value='' class="form-control form-control-lg rounded-pill" id="date2">
      </div>

      <div class="mb-3">
        <label for="trip" class="form-label fw-bold">How was the trip</label>
        <input type="text" name='trip' value='' class="form-control form-control-lg rounded-pill" id="trip" placeholder="Describe your trip">
      </div>

      <div class="mb-3">
        <label for="friend" class="form-label fw-bold">Friends</label>
        <input type="text" name='friend' value='' class="form-control form-control-lg rounded-pill" id="friend" placeholder="Friends who joined">
      </div>

      <div class="mb-4">
        <label for="image" class="form-label fw-bold">Upload Trip Image</label>
        <input type="file" name='image' class="form-control" id="image">
      </div>

      <div class="text-center">
        <input type="submit" class="btn btn-success btn-lg px-5 rounded-pill" value="Submit">
      </div>
      
    </form>
  </div>
</div>



</x-app-layout>
