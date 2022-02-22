
<div>
    @if(!Session::get('user'))
    <a class="btn btn-primary" href="{{route('login')}}">Login</a>
    <a class="btn btn-warning" href="{{route('register')}}">Register</a>
    @endif
    @if(Session::get('user'))
    <a class="btn btn-secondary" href="{{route('create')}}">Create Student</a>
    <a class="btn btn-warning" href="{{route('list')}}">Student List</a>  
    <a class="btn btn-secondary" href="{{route('department')}}">Departments</a>
    <a class="btn btn-primary" href="{{route('teachers')}}">Teacher List</a>
    <a class="btn btn-warning" href="{{route('courses')}}">Course List</a>  
    <a class="btn btn-danger" href="{{route('logout')}}">Logout</a>
    @endif
</div>


