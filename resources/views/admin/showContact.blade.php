<!-- <h2>Name:{{ $contacts->name }}</h2>
<h2>Email:{{ $contacts->email }}</h2>
<h2>Subject:{{ $contacts->subject }}</h2>
<h2>Message:{{ $contacts->message }}</h2> -->

<h1>Contact Us Form Submission</h1>

<p><strong>Name:</strong> {{ $contacts->name }}</p>
<p><strong>Email:</strong> {{ $contacts->email }}</p>

<hr>

<p><strong>Subject:</strong></p>
<p>{{ $contacts->subject }}</p>
<p><strong>Message:</strong></p>
<p>{{ $contacts->message }}</p>