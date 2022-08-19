<h1>This is my contact page</h1>

<a href="{{ '/' }}"> Return to home</a> <br><br><br>

<form action="{{ route('student.store') }}" method="POST">
    @csrf
    Name: <input type="text" name="name" placeholder="Enter Your name"><br><br>
    Email: <input type="email" name="email" placeholder="Enter Your email address"><br><br>
    Email: <input type="text" name="nmber" placeholder="Enter Your phone number"><br><br>
    <button type="submit"> Submit </button>
</form>