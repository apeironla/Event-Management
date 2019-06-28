@extends('layout.user_main')
@section('container')
<article id="work" class="wrapper style2">
      <form method="post" action="{{route('store_book')}}" class="">

            @if($errors->all())
                  <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                              <li>{{$error}}</li>
                        @endforeach
                  </div>
            @endif

            if($id->deadline<)
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="col-md-4 col-sm-offset-4">

                              <div class="form-group">

                                    <label for="materialLoginFormEmail">Package Id</label>
                                    <input type="text" class="form-control"  name="packageid" value="{{$id->id}}"  />

                                    </div>
                                    <div class="form-group">
                                          <label for="materialLoginFormEmail">Email Address</label>
                                          <input type="text" class="form-control"  name="email" value="{{$email->email}}"  />

                                    </div>
                                    

                                     <div class="form-group">

                                        <label for="materialLoginFormEmail">Event Date</label>
                                        <input type="date" class="form-control"  name="date" value=""  />

                                        </div>
                                        <div class="form-group">

                                            <label for="materialLoginFormEmail">More Requirements</label>
                                            <input type="text" class="form-control"  name="req" value=""  />

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