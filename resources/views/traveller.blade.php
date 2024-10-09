<x-app-layout>
<div class="container">
<div class="d-flex flex-row justify-content-center">
        
    <!-- <div class="row text-center" style="background-image:url({{asset('image/bla.png')}});background-size: 100% 100%;background-repeat:no-repeat;height:100vh"> -->

    <form class='w-50 mt-5' action='{{$user?route('user-detail-edit-store',$user->u_id):route('user-detail-form-store')}}' method="POST">
    @csrf
  <div class="mb-3">
    <label for="user_name" class="form-label">Name</label>
    <input type="text" name='name' value='{{$user?$user->name:''}}' class="form-control" id="user_name">
    <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
  </div>
  <div class="mb-3">
    <label for="blood" class="form-label">Are you  ready to donate blood YES/NO</label>
    <input type="text" name='blood' value='{{$user?$user->blood:''}}' class="form-control" id="blood">
  </div>
  <div class="mb-3">
    <label for="date" class="form-label">When was the last blood donation</label>
    <input type="date" name='date' value='{{$user?$user->date:''}}' class="form-control" id="date">
  </div>
  <div class="mb-3">
    <label for="medical" class="form-label">Are you taking any meditaion</label>
    <input type="text" name="medical" value='{{$user?$user->medical:''}}' class="form-control" id="medical">
  </div>
  <div class="mb-3">
    <label for="drug" class="form-label">Do you use any intoxicants</label>
    <input type="text" name="drug" value='{{$user?$user->drug:''}}' class="form-control" id="drug">
  </div>
  
  <div class="mb-3">
    <label for="pin" class="form-label">Pin Code</label>
    <input type="text" name='pin' value='{{$user?$user->pin:''}}' class="form-control" id="pin">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
          
          
        <!-- </div> -->
        </div>
        
    
</div> 
</x-app-layout>