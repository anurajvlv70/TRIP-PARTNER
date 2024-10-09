<x-app-layout>
  <div class="card shadow-lg mt-5" style="border-radius: 10px;">
    <h5 class="card-header bg-primary text-white text-center" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
      ANNOUNCE A TRIP
    </h5>
    <div class="card-body">
      <div class="container">
        <div class="d-flex flex-row justify-content-center">

          <form class='w-75 mt-4' 
            action='{{ $user 
                      ? route('trip-detail-edit-store', $user->u_id) 
                      : route('trip-detail-form-store') }}' 
            method="POST">
            @csrf

            <!-- Form Fields -->
            <div class="mb-4">
              <label for="start" class="form-label fw-bold">Starting Point</label>
              <input type="text" name='start' value='{{$user ? $user->start : ""}}' class="form-control form-control-lg rounded-pill" id="start" placeholder="Enter the starting point" required>
              <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
            </div>

            <div class="mb-4">
              <label for="end" class="form-label fw-bold">Ending Point</label>
              <input type="text" name='end' value='{{$user ? $user->end : ""}}' class="form-control form-control-lg rounded-pill" id="end" placeholder="Enter the destination" required>
            </div>

            <div class="mb-4">
              <label for="vehicle" class="form-label fw-bold">Vehicle</label>
              <input type="text" name='vehicle' value='{{$user ? $user->vehicle : ""}}' class="form-control form-control-lg rounded-pill" id="vehicle" placeholder="Specify the vehicle type" required>
            </div>

            <div class="mb-4">
              <label for="people" class="form-label fw-bold">How many people you want</label>
              <input type="number" name='people' value='{{$user ? $user->people : ""}}' class="form-control form-control-lg rounded-pill" id="people" placeholder="Enter the number of people" required>
            </div>

            <div class="mb-4">
              <label for="date" class="form-label fw-bold">Start Date</label>
              <input type="date" name='date' value='{{$user ? $user->date : ""}}' class="form-control form-control-lg rounded-pill" id="date" required>
            </div>

            <div class="mb-4">
              <label for="date2" class="form-label fw-bold">End Date</label>
              <input type="date" name='date2' value='{{$user ? $user->date2 : ""}}' class="form-control form-control-lg rounded-pill" id="date2" required>
            </div>

            <div class="text-center">
              <input type="submit" class="btn btn-primary btn-lg px-5 rounded-pill" value="Submit">
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
