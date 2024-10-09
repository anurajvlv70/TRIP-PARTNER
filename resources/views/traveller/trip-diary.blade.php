<x-app-layout>
    <div class="container my-5">
        <!-- Loop through each user detail record -->
        @foreach($userdetails as $user)
            <div class="card mb-4 shadow-sm border-0">
                <!-- Card Header with Date -->
                <div class="card-header bg-success text-white text-center">
                    {{ \Carbon\Carbon::now()->format('F j, Y') }}
                </div>
                
                <!-- Card Body -->
                <div class="card-body">
                    <!-- Trip Title -->
                    <h5 class="card-title text-primary">From: {{ $user->start }} TO: {{ $user->end }}</h5>
                    
                    <!-- Trip Description -->
                    <p class="card-text">
                        "I started a trip from <strong>{{ $user->start }}</strong> to <strong>{{ $user->end }}</strong>.
                        It was a <strong>{{ ucfirst($user->trip) }}</strong> trip, and the vehicle I used was a <strong>{{ $user->vehicle }}</strong>.
                        My friends <strong>{{ $user->friend }}</strong> joined me on this trip.
                        The trip started on <strong>{{ \Carbon\Carbon::parse($user->date)->format('F j, Y') }}</strong>, 
                        and we returned on <strong>{{ \Carbon\Carbon::parse($user->date2)->format('F j, Y') }}</strong>."
                    </p>
                    
                    <!-- Trip Image -->
             <!-- Trip Image -->
@if($user->image)
    <div class="mb-3">
        <strong>Image:</strong>
        <img src="{{ asset($user->image) }}" alt="Trip Image" class="img-fluid rounded mt-2" style="max-width: 250px; max-height: 150px; height: auto; width: auto;">
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
