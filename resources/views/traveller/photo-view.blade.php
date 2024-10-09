<x-app-layout>
    <div class="container my-5">
        <!-- Loop through each user detail record -->
        @foreach($userdetails as $user)
            <div class="card mb-4 shadow-sm border-0">
                <!-- Card Header with Date -->
                
                <!-- Card Body -->
                <div class="card-body">
                    <!-- Trip Title -->
                    <h5 class="card-title text-primary">{{ $user->place}} {{ $user->date6 }}</h5>
                    
                    <!-- Trip Description -->

                    
                    <!-- Trip Image -->
             <!-- Trip Image -->
@if($user->image6)
    <div class="mb-3">
        <strong>Image:</strong>
        <img src="{{ asset($user->image6) }}" alt="Trip Image" class="img-fluid rounded mt-2" style="max-width: 250px; max-height: 150px; height: auto; width: auto;">
    </div>
@else
    <p class="text-muted">No image uploaded.</p>
@endif

                    
                    <!-- Action Button -->
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('userDel', Auth::user()->id) }}" class="btn btn-danger btn-sm">
                            <i class="fas fa-arrow-left me-2"></i> Back
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>