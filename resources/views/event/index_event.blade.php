@extends('layout.main')

@section('container')

<article id="work" class="wrapper style2">
	<div class="container">
         @if (session()->has('success'))
            <h6 class="alert alert-success mt-5">{{ session('success') }}</h6>
         @endif
  <table class="table table-bordered mt-5">
    <thead class="" >
      <tr>
        <th>Event ID</th>
        <th>Status</th>
        <th>Total Cost</th>

        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>

    @foreach($data as $x)
    <tr>
        <td>{{$x->id}}</td>
        <td>{{$x->status}}</td>
        <td>{{$x->cost}}</td>

        <td class="pl-5">
        <a href ="{{route('edit_event',$x->id)}}" class="btn btn-info ml-2">Edit</a></td>
        <td class="pl-5"><form onsubmit = "return confirm('are you sure you want to delete this info?')" action = "{{route('destroy_event', $x->id)}}" method ="post" class = "d-inline-block">
           {{csrf_field()}}
           {{method_field('delete')}}
           <button type = "submit" class="btn btn-danger">Delete</button>
           </form></td>
      </tr>
    
    @endforeach
    </tbody>
  </table>
</div>
</article>

<article id="top" class="wrapper style1">
				<div class="container">
					<div class="row">
					</div>
				</div>
</article>


@endsection