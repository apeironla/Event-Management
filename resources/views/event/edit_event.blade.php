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


                        <form method="post" action="{{route('update_event',$id->id)}}" class="">
                              {{csrf_field()}}
                              {{method_field('put')}}
                              <div class="col-md-4 col-sm-offset-4">
                                    <div class="form-group">
                                          <label for="materialLoginFormEmail">Event status</label>
                                          <input type="text" class="form-control"  name="status" value="{{$id->status}}"  />

                                    </div>
                                    <div class="form-group">

                                          <label for="materialLoginFormEmail">Event cost</label>
                                          <input type="text" class="form-control"  name="cost" value="{{$id->cost}}"  />

                                    </div>


                                    <div class="form-group">
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