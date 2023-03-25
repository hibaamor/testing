@extends('master')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Add Data</h3>
  <br />

  <form method="post" action="{{url('student')}}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="Time1" class="form-control" placeholder="Enter 1 Time" / >
   </div>
   <div class="form-group">
    <input type="text" name="Time2" class="form-control" placeholder="Enter 2 Time" />
   </div>
   <div class="form-group">
    <input type="text" name="Time3" class="form-control" placeholder="Enter 3 Time" />
   </div>
   <div class="form-group">
    <input type="text" name="Time4" class="form-control" placeholder="Enter 4 Time" />
   </div>
   <div class="form-group">
    <input type="text" name="Time5" class="form-control" placeholder="Enter 5 Time" />
   </div>
   <div class="form-group">
    <input type="text" name="Time6" class="form-control" placeholder="Enter 6 Time" />
   </div>
   <div class="form-group">
    <input type="text" name="Time7" class="form-control" placeholder="Enter 7 Time" />
   </div>

   <div class="form-group">
    <input type="submit" class="btn btn-primary" />
   </div>
  </form>
 </div>
</div>
@endsection
