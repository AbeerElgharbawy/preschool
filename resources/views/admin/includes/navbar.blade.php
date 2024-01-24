<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Testimonials
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="">Testimonials</a></li>
          <li><a href="{{ route('addTestimonial') }}">Add Testimonial</a></li>
          <li><a href="">Trashed Testimonials</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>