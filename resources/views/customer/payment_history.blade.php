@extends('layouts.header')

@section('content')
 

  <main>
    
    
      <div class="p-2">
        
         
        </div>

      <div class="container">
    <div class="row justify-content-center">

       
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <center><h3>Payment History</h3></center>
                 </div>

                <div class="card-body">   
                    <div class="row">

                        <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>TITLE</th>
        <th>STATUS</th>
        <th>ACTIONS</th>
        
      </tr>
    </thead>
    <tbody>
        @php $num=0;@endphp
        @foreach($order as $da)
      <tr>       
        <td>{{$num+=1}}</td>
        <td>NGN{{$da->total_price}}</td>
        <td> @php  if($da->status==0){echo 'Pendin';}else{ echo 'Paid';}     @endphp</td>
        <td >{{$da->created_at}} </td>
  @endforeach
      </tr>
    </tbody>
  </table>
  </div>

</div>



                </div>

                <div class="card-header">

                </div>
                <div class="card-header">
                    
                 </div>
            </div>
        </div>
     
    <div class="col-md-6"></div>
    </div>
</div>  
<br>

  </main>

  <!-- Footer -->
  @endsection