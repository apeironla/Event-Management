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
        <th>Package ID</th>
        <th>Description</th>
        <th>Food</th>
        <th>Photographer</th>
        <th>Power</th>
        <th>Decoration</th>

        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>

    @foreach($data as $x)
    <tr>
        <td>{{$x->id}}</td>
        <td>{{$x->description}}</td>
        <td>{{$x->food}}</td>
        <td>{{$x->photographer}}</td>
        <td>{{$x->power}}</td>
        <td>{{$x->decoration}}</td>

        <td class="pl-5">
        <a href ="{{route('edit_package',$x->id)}}" class="btn btn-info ml-2">Edit</a></td>
        <td class="pl-5"><form onsubmit = "return confirm('are you sure you want to delete this info?')" action = "{{route('destroy_package', $x->id)}}" method ="post" class = "d-inline-block">
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