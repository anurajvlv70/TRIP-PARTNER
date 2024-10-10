<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\traveller;
use App\Models\diary;
use App\Models\photo;
use App\Models\expence;

class TravellerController extends Controller
{
    public function TravellerStore(Request $request)
    {

        $user = traveller::create([
            'u_id'=>$request->user_id,
            'start' => $request->start,
            'end' => $request->end,
            'people' => $request->people,
            'vehicle' => $request->vehicle,
            'date' => $request->date,
            'date2' => $request->date2,
            
        ]);

        return redirect()->route('traveller-detail-view',Auth()->user()->id)->with('success','Details Stored Successfully');
    }

    // public function detail_view(){
    //     $userdetails=traveller::where('u_id',Auth()->user()->id)->first();
    // }
    
 
    public function trip_form_edit_store(Request $request,$u_id){
        $userdetails=traveller::where('u_id',Auth()->user()->id)->first();
        $user=traveller::where('u_id',$u_id)->first();
      

        $detail=$user->update([
            'u_id'=>$request->user_id,
            'start'=> $request->start,
            'end'=> $request->end,
            'people'=> $request->people,
            'vehicle'=> $request->vehicle,
            'date'=>$request->date,
            'date2'=>$request->date2,
            
        ]);

        return redirect()->route('traveller-detail-view',Auth()->user()->id)->with('success','Details Edited Successfully');
    }

    public function traveller(){
        //dd($user);
        $user=traveller::where('u_id',Auth()->user()->id)->first();
        return view('traveller.form',compact('user'));
    }
    public function travellerjoin(){
        //dd($user);
        $userdetails=traveller::where('u_id',Auth()->user()->id)->first();
        return view('traveller.join-view',compact('userdetails'));
    }

    public function trip_form_edit($u_id){
        $userdetails=traveller::where('u_id',Auth()->user()->id)->first();
        $user=traveller::where('u_id',$u_id)->first();
        return view('user.form',compact('user'));
    }



        
       public function allRecord(){
    
        $userdetails=traveller::all();
        //  dd($userdetails);
        return view('traveller.join-view',compact('userdetails'));
        
       }
       public function detail_view (){
        $userdetails=traveller::where('u_id',Auth()->user()->id)->first();
        //dd($userdetails);
        return view('traveller.detail-view',compact('userdetails'));
        dd($userdetails);
       }

       public function tripDel($u_id) {
        $userdetails = traveller::where('u_id', Auth()->user()->id)->first();
    
        if ($userdetails) {
            $userdetails->delete();
            // $user=traveller::where('u_id',Auth()->user()->id)->first();
            // return view('traveller.form', compact('user'));
            return redirect()->route('form-show');
        } else {
            // Handle the case where no record was found
            return back()->withErrors(['msg' => 'User not found']);
        }
    }

        public function diary(){
        //dd($user);
        $user=diary::where('u_id',Auth()->user()->id)->first();
        return view('traveller.diary',compact('user'));
    }
    public function trip_diary(Request $request)
    {
        
    // Validate the request data, including the image
    $request->validate([
        'user_id' => 'required',
        'start' => 'required',
        'end' => 'required',
        'vehicle' => 'required',
        'date' => 'required',
        'date2' => 'required',
        'friend' => 'required',
        'image' => 'nullable', // Image validation
    ]);
//dd($request);
    // Initialize the $path variable
    $path = null;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $path='images/' . $imageName;
            //dd($path); 
            // Store image path in the database if needed
            // $user->image = $imageName;
        }
    //dd($request);
        $user= diary::create([
            'u_id'=>$request->user_id,
            'start' => $request->start,
            'end' => $request->end,
            'vehicle' => $request->vehicle,
            'date' => $request->date,
            'date2' => $request->date2,
            'friend' => $request->friend,
            'image' => $path,
            
        ]);
        

        return view('traveller.diary-view',compact('user'));    
    }

        // public function allRecord2(){
    
        //     $userdetails=diary::where('u_id',Auth()->user()->id)->first();
        //     return view('traveller-diary-view',compact('users'));
        //    }
        public function diary4(){
            //dd($user);
            $userdetails=diary::where('u_id',Auth()->user()->id)->first();
            return view('traveller.trip-diary',compact('userdetails'));
        }



        public function allRecord2(){
    
            $userdetails=diary::all();
            //  dd($userdetails);
            return view('traveller.trip-diary',compact('userdetails'));
            
           }
        //    public function photo(){
        //     //dd($user);
        //     $user=photo::where('u_id',Auth()->user()->id)->first();
        //     return view('traveller.photos',compact('user'));
        // }

        public function photo(){
    
           
            return view('traveller.trip-photo');
           
        }
    

           public function trip_photo(Request $request)
           {
            //    dd($request);
           // Validate the request data, including the image
           $request->validate([
               'place' => 'required',
               'date6' => 'required',
               'image6' => 'nullable', // Image validation
           ]);
       //dd($request);
           // Initialize the $path variable
           $path = null;
       
               if ($request->hasFile('image6')) {
                   $imageName = time().'.'.$request->image6->extension();
                   $request->image6->move(public_path('images'), $imageName);
                   $path='images/' . $imageName;
                   //dd($path); 
                   // Store image path in the database if needed
                   // $user->image = $imageName;
               }
           //dd($request);
               $user= photo::create([
                   'place' => $request->place,
                   'date6' => $request->date6,
                   'image6' => $path,
                   
               ]);
               
       
               return view('traveller.trip-photo',compact('user'));    
           }

           public function allRecord4(){
    
            $userdetails=photo::all();
            //  dd($userdetails);
            return view('traveller.photo-view',compact('userdetails'));
            
           }

           public function expence(){
    
           
            return view('traveller.trip-expence');
           
        }

        public function ExpenceStore(Request $request)
        {
    
            $user = expence::create([
                'place'=>$request->place,
                'date6' => $request->date6,
                'food' => $request->food,
                'travel' => $request->travel,
                'room' => $request->room,
                'other' => $request->other,
                
            ]);
    
            return redirect()->route('trip-expence');
        }
        public function allRecord5(){
    
            $userdetails=expence::all();
            //  dd($userdetails);
            return view('traveller.expence-view',compact('userdetails'));
            
           }
}


