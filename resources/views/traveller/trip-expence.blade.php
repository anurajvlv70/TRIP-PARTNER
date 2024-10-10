<x-app-layout>

<div>
  <div class="card-body">
    <h5 class="card-title text-center">Travel Photos</h5>

    <form class='w-75 mt-4 mx-auto' 
      action='{{  route('trip-expence')  }}' 
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

      <div class="mb-3">
        <label for="food" class="form-label fw-bold">Food Expence</label>
        <input type="text" name='food' value='' class="form-control form-control-lg rounded-pill" id="food">
      </div>

      <div class="mb-3">
        <label for="room" class="form-label fw-bold">Room Expence</label>
        <input type="text" name='room' value='' class="form-control form-control-lg rounded-pill" id="room">
      </div>

      <div class="mb-3">
        <label for="travel" class="form-label fw-bold">Travel Expence</label>
        <input type="text" name='travel' value='' class="form-control form-control-lg rounded-pill" id="travel">
      </div>

      <div class="mb-3">
        <label for="other" class="form-label fw-bold">Other Expences</label>
        <input type="text" name='other' value='' class="form-control form-control-lg rounded-pill" id="other">
      </div>




      <div class="text-center">
        <input type="submit" class="btn btn-success btn-lg px-5 rounded-pill" value="Submit">
      </div>
      
    </form>
  </div>
</div>



</x-app-layout>