<x-app-layout>
@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="container">
<div class="d-flex flex-row justify-content-center">
        
   
   <div class="card mt-5 d-flex flex-row shadow-lg border-0 row" style="width: 460px;">
   <div class="col-md-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg></div>
<div class="col-md-9">
  <div class="card-body w-100">
    <p class="card-text text-truncate"><span class="me-2">Name:</span>{{$decoration->name}}</p>
    <!-- <p class="card-text text-truncate"><span class="me-2">Email:</span>{{$decoration->email}}</p> -->
    <!--  -->
    <p class="card-text text-truncate"><span class="me-2">Phone No:</span>{{$decoration->phone}}</p>
    <p class="card-text text-truncate"><span class="me-2">Place:</span>{{$decoration->place}}</p>
    <!-- <p class="card-text text-truncate"><span class="me-2">Experience:</span>{{$decoration->experience}}</p> -->
    <!-- <p class="card-text text-truncate"><span class="me-2">Charge:</span>{{$decoration->charge}}<span class="ms-1">&#8377;</span></p> -->
   
    <p class="card-text text-truncate"><span class="me-2">Hospital:</span>{{$decoration->hospital}}</p>
    <a href="{{route('decoration-detail-edit',Auth()->user()->id)}}" class="btn btn-secondary">edit</a>
        </div>
        </div>
        
    
</div> 
</x-app-layout>