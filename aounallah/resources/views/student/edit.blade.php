@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit Record</h3>
  <br />
 
  <form method="post" action="{{action('StudentController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
    <input type="text" name="Time1" class="form-control" value="{{$student_tabel->Time1}}" placeholder="Enter 1 Time" />
   </div>
   <div class="form-group">
    <input type="text" name="Time2" class="form-control" value="{{$student_tabel->Time2}}" placeholder="Enter 2 Time" />
   </div>
   <div class="form-group">
    <input type="text" name="Time3" class="form-control" value="{{$student_tabel->Time3}}" placeholder="Enter 3 Time" />
   </div>
   <div class="form-group">
    <input type="text" name="Time4" class="form-control" value="{{$student_tabel->Time4}}" placeholder="Enter 4 Time" />
   </div>
   <div class="form-group">
    <input type="text" name="Time5" class="form-control" value="{{$student_tabel->Time5}}" placeholder="Enter 5 Time" />
   </div>
   <div class="form-group">
    <input type="text" name="Time6" class="form-control" value="{{$student_tabel->Time6}}" placeholder="Enter 6 Time" />
   </div>
   <div class="form-group">
    <input type="text" name="Time7" class="form-control" value="{{$student_tabel->Time7}}" placeholder="Enter 7 Time" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Edit" />
   </div>
  </form>
 </div>
</div>

@endsection
