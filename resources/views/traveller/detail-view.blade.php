<x-app-layout>

<div class="card shadow-lg" style="border-radius: 15px; background: #f8f9fa;">
  <div class="card-header bg-primary text-white" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
    <h4 class="mb-0">Featured Trip</h4>
  </div>
  <div class="card-body">
    <h5 class="card-title text-secondary">The Trip Starts At: <span class="text-dark">{{$userdetails->start}}</span></h5>
    <p class="card-text">
        <h2 class="text-info">Destination: <span class="text-dark">{{$userdetails->end}}</span></h2>
        <h4 class="text-muted">Looking for: <span class="text-success">{{$userdetails->people}}</span> more people</h4>
        <h4 class="text-muted">Vehicle: <span class="text-primary">{{$userdetails->vehicle}}</span></h4>
        <h4 class="text-muted">Trip Date: <span class="text-primary">{{$userdetails->date}}</span></h4>
        <h4 class="text-muted">Ends At: <span class="text-primary">{{$userdetails->date2}}</span></h4>
    </p>
    <a href="{{route('userDel',Auth()->user()->id)}}" class="btn btn-danger btn-block" style="border-radius: 25px;">Delete Trip</a>
  </div>
</div>

</x-app-layout>