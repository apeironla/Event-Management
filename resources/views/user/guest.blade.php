@extends('layout.user_main')

@section('container')

<article id="work" class="wrapper style2">
	<div class="container">
         @if (session()->has('success'))
            <h6 class="alert alert-success mt-5">{{ session('success') }}</h6>
         @endif
         <div style ="margin-bottom: 20px">
         <button type="button" class="btn btn-link" style = "float: left"><a href = "{{route('create_package')}}">Add new package</a></button>
         </div>
  <table class="table table-bordered mt-5">
    <thead class="" >
      <tr>
        <th>Package ID</th>
        <th>Description</th>
        <th>Food</th>
        <th>Photographer</th>
        <th>Power</th>
        <th>Decoration</th>

        <!-- <th>Action</th> -->
        
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

        <!-- <td class="pl-5"> -->
        <!-- <a href ="{{route('package')}}" class="btn btn-info ml-2">Contact</a></td> -->
        
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