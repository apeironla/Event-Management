@extends('layout.main')
@section('container')
<article id="work" class="wrapper style2">
      <section id="contact" class="section-padding">
            
    

      @if($errors->all())
            <div class="alert alert-danger">
                  @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                  @endforeach
            </div>
      @endif


            <form method="post" action="{{route('update_package',$id->id)}}" class="">
                  {{csrf_field()}}
                  {{method_field('put')}}
                  <div class="col-md-4 col-sm-offset-4">
                        <div class="form-group">
                              <label for="materialLoginFormEmail">Package Description</label>
                              <input type="text" class="form-control"  name="description" value="{{$id->description}}"  />

                        </div>
                        <div class="form-group">

                              <label for="materialLoginFormEmail">Food</label>
                              <input type="text" class="form-control"  name="food" value="{{$id->food}}"  />

                        </div>
                        <div class="form-group">

                              <label for="materialLoginFormEmail">Photographer</label>
                              <input type="text" class="form-control"  name="photographer" value="{{$id->photographer}}"  />

                        </div>
                        <div class="form-group">

                              <label for="materialLoginFormEmail">Power</label>
                              <input type="text" class="form-control"  name="power" value="{{$id->power}}"  />

                        </div>
                        <div class="form-group">

                              <label for="materialLoginFormEmail">Decoration</label>
                              <input type="text" class="form-control"  name="decoration" value="{{$id->decoration}}"  />

                        </div>


                        <div class="form-group">
                              <!-- Button -->
                              <button type="submit" class="btn btn-success">Submit</button>
                        </div>

                  </div>

            </form>

    
</section>
</article>

<article id="top" class="wrapper style1">
				<div class="container">
					<div class="row">
					</div>
				</div>
</article>

@endsection