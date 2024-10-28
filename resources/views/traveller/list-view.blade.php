<x-app-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
<table id="sky" class="table table-striped" style="width:100%">
         <thead>
            <tr>
               
                <th scope="col">STARTING POINT</th>
                <th scope="col">ENDING POINT</th>
                <th scope="col">VEHICAL</th>
                <th scope="col">PEOPLE</th>
                <th scope="col">STARTING DATE</th>
                <th scope="col">ENDING DATE</th>
            </tr>
        </thead>
        <tbody>
        @foreach($userdetails as $user)
    <tr>
        <td>{{ $user->start }}</td>
        <td>{{$user->end}}</td>
        <td>{{$user->vehicle}}</td>
        <td>{{$user->people}}</td>
        <td>{{$user->date}}</td>
        <td>{{$user->date2}}</td>
       
 
    </tr>
    @endforeach
</tbody>
<tfoot>
            <tr>
                <th>STARTING POINT</th>
                <th>ENDING POINT</th>
                <th>VEHICLE</th>
                <th>PEOPLE</th>
                <th>STARTING DATE</th>
                <th>ENDING DATE</th>

                
            </tr>
        </tfoot>
</table> 
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
<SCRIpt>
   new DataTable('#sky'); 
</SCRIpt>

</x-app-layout>