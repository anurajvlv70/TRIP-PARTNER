<x-app-layout>

<div class="card">
  <div class="card-header">
  <?php echo date('F j, Y');?>
  </div>
  <div class="card-body">
    <h5 class="card-title">From:{{$user->start}} TO:{{$user->end}} </h5>
    <p class="card-text">
    "I started a trip from {{$user->start}} to {{$user->end}}.
     It was a {{$user->trip}} trip, and the vehicle I used was a {{$user->vehicle}}.
      My friends {{$user->friend}} joined me on this trip.
       The trip started on {{$user->date}}, 
       and we returned on {{$user->date2}}."
    </p>
    @if($user->image)
        <p><strong>Image:</strong></p>
        <img src="{{ asset($user->image) }}" alt="Trip Image" style="max-width: 300px; max-height: 300px;">
    @else
        <p>No image uploaded.</p>
    @endif
    
    <a href="{{route('userDel',Auth()->user()->id)}}" class="btn btn-danger">Back</a>
  </div>
</div>



</x-app-layout>