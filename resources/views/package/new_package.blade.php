@extends('layout.main')
@section('container')
      
<article id="work" class="wrapper style2">
      <form method="post" action="{{route('store_package')}}" class="">

            @if($errors->all())
                  <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                              <li>{{$error}}</li>
                        @endforeach
                  </div>
            @endif


            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="col-md-4 col-sm-offset-4">
              
                  <div class="form-group">
                        <input type="text" class="form-control" name="description" placeholder="Package Description"  />

                  </div>
                  <div class="form-group">
                        <input type="text" name="food" class="form-control"  placeholder="Food" />
                  </div>
                  <div class="form-group">
                        <input type="text" name="photographer" class="form-control"  placeholder="Photographer" />
                  </div>
                  <div class="form-group">
                        <input type="text" name="power" class="form-control"  placeholder="power" />
                  </div>

                  <div class="form-group">
                        <input type="text" name="decoration" class="form-control"  placeholder="decoration" />
                  </div>




                  <div class="form-group text-center">
                        <!-- Button -->
                        <button type="submit" class="btn btn-success">Submit</button>
                  </div>

            </div>

      </form>

                  </div>
            </div>
      </section>
</article>
<article id="top" class="wrapper style1">
				<div class="container">
					<div class="row">
					</div>
				</div>
</article>



@endsection