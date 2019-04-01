@extends('layout.main')
@section('container')
      
<article id="work" class="wrapper style2">
      <form method="post" action="{{route('store_event')}}" class="">

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
                        <input type="text" class="form-control" name="status" placeholder="Event Status"  />

                  </div>
                  <div class="form-group">
                        <input type="text" name="cost" class="form-control"  placeholder="Cost" />

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