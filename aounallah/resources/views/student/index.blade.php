@extends('master')

@section('content')
<div class="row">
    <div class="col-md-12">
     <br />
     <h3 align="center">
        Emploi du temps 2eme Annee Informatique G2 (S4)</h3>
     <br />

     <div align="right">
      <a href="{{route('student.create')}}" class="btn btn-primary">Add</a>
      <br />
      <br />
     </div>
     <table class="table table-bordered table-striped">
      <tr>
        <th></th>
       <th>8:00/9:30</th>
       <th>9:30/11:00</th>
       <th>11:00/12:30</th>
       <th>12:30/14:00</th>
       <th>14:00/15:30</th>
       <th>15:30/17:00</th>
       <th></th>

      </tr>

      @foreach($student_tabel as $row)
      <tr>

        <td>{{$row['Time1']}}  </td>
        <td>{{$row['Time2']}}</td>
        <td>{{$row['Time3']}}</td>
        <td>{{$row['Time4']}}</td>
        <td>{{$row['Time5']}}</td>
        <td>{{$row['Time6']}}</td>
        <td>{{$row['Time7']}}</td>
        <td><a href="{{action('StudentController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
            <form method="post" class="delete_form" action="{{action('StudentController@destroy', $row['id'])}}">
             {{csrf_field()}}
             <input type="hidden" name="_method" value="DELETE" />
             <button type="submit" class="btn btn-danger">Delete</button>
            </form>
           </td>
       </tr>
       @endforeach
      </table>
     </div>
    </div>
    <script>
        $(document).ready(function(){
         $('.delete_form').on('submit', function(){
          if(confirm("Are you sure you want to delete it?"))
          {
           return true;
          }
          else
          {
           return false;
          }
         });
        });
        </script>
    @endsection
