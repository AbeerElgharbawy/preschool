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
          <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
          <li><a href="{{ route('addTestimonial') }}">Add Testimonial</a></li>
        </ul>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Teachers
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{ route('teachers') }}">Teachers</a></li>
          <li><a href="{{ route('addTeacher') }}">Add Teacher</a></li>
        </ul>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Classes
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{ route('classes') }}">Classrooms</a></li>
          <li><a href="{{ route('addClass') }}">Add Class</a></li>
        </ul>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Appointments
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{ route('showAppointments') }}">Appointments</a></li>
          <li><a href="{{ route('addAppointment') }}">Add Appointment</a></li>
        </ul>
      </li>
      <li><a href="{{route('showContacts')}}">Unread Messages ({{ $unreadCount }})</a></li>
    </ul>
  </div>
</nav>  
        