@extends('layout.user_main')

@section('container')

		<!-- Portfolio -->
			<article id="portfolio" class="wrapper style3">
				<div class="container">
					<header>
						<h2>Here’s some stuff I made recently.</h2>
						<p>Proin odio consequat  sapien vestibulum consequat lorem dolore feugiat.</p>
					</header>
                    <div class="row">
  <div class="col-md-12">

    <div id="mdb-lightbox-ui"></div>

    <div class="mdb-lightbox">

      <figure class="col-md-4">
        <a href="" data-size="1600x1067">
          <img alt="picture" src="/images/1.jpg" class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="" data-size="1600x1067">
          <img alt="picture" src="/images/2.jpg" class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="" data-size="1600x1067">
          <img alt="picture" src="/images/10.jpg" class="img-fluid" />
        </a>
      </figure>

      <!-- <figure class="col-md-4">
        <a href="" data-size="1600x1067">
          <img alt="picture" src="/images/11.jpg" class="img-fluid" />
        </a>
      </figure> -->

      <!-- <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(151).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(151).jpg" class="img-fluid" />
        </a>
      </figure> -->

      <!-- <figure class="col-md-4">
        <a href="" data-size="1600x1067">
          <img alt="picture" src="/images/5.jpg" class="img-fluid" />
        </a>
      </figure> -->

      <figure class="col-md-4">
        <a href="" data-size="1600x1067">
          <img alt="picture" src="/images/6.jpg" class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(147).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg" class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="" data-size="1600x1067">
          <img alt="picture" src="/images/7.jpg" class="img-fluid" />
        </a>
      </figure>

    </div>

  </div>
</div>
    






<footer>
	<p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
	<a href="#contact" class="button large scrolly">Get in touch with me</a>
</footer>
</div>
</article>

<script>
$(function () {
$("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
});
</script>



@endsection