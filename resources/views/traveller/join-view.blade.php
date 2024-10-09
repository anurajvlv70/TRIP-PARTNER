<x-app-layout>

    <!-- Loop through each user detail record -->
    @foreach($userdetails as $detail)
        <div class="card mb-4 shadow-lg" style="border-radius: 10px;">
            <div class="card-header bg-info text-white text-center" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                {{ $detail->start }} TO {{ $detail->end }}
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">Trip Details</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><strong>Starting Point:</strong> {{ $detail->start }}</li>
                    <li class="mb-2"><strong>Destination:</strong> {{ $detail->end }}</li>
                    <li class="mb-2"><strong>Vehicle:</strong> {{ $detail->vehicle }}</li>
                    <li class="mb-2"><strong>Joining People:</strong> Join {{ $detail->people }} more people</li>
                    <li class="mb-2"><strong>Start Date:</strong> {{ $detail->date }}</li>
                    <li><strong>End Date:</strong> {{ $detail->date2 }}</li>
                </ul>
                <div class="text-center">
                    <a href="{{ route('userDel', Auth::user()->id) }}" class="btn btn-success mt-3 px-4 rounded-pill">Join Now</a>
                </div>
            </div>
        </div>
    @endforeach

</x-app-layout>
