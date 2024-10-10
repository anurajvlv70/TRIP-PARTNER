
<x-app-layout>
    <div class="container my-5">
        <!-- Loop through each user detail record -->
        @foreach($userdetails as $user)
            <div class="card mb-4 shadow-sm border-0">
                <!-- Card Header with Date -->
                
                <!-- Card Body -->
                <div class="card-body">
                    <!-- Trip Title -->
                    <h5 class="card-title text-primary">{{ $user->place}} {{ $user->date }}</h5>
                    
                    <!-- Trip Description -->
                    <p class="card-text">
                    Food Expence: {{$user->food}} <br>
                    Travel Expence: {{$user->travel}} <br>
                    Room Expence: {{$user->room}} <br>
                    Total: {{ $user->food + $user->travel + $user->room }}

    </p>
                    
                    <!-- Trip Image -->
             <!-- Trip Image -->


                    
                    <!-- Action Button -->
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('userDel', Auth::user()->id) }}" class="btn btn-danger btn-sm">
                            <i class="fas fa-arrow-left me-2"></i> delete
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>