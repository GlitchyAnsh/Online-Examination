@extends('user.layout')
@section('content')
<style>
    .container {
      max-width: 300px;
    }
    .push-top {
      margin-top: 50px;
    }
    .radio-group {
    display: flex;
    gap: 10px;
}

.radio-group label {
    margin-right: 5px;
}

</style>
<div class="content-wrapper">
    <section class="content">
<div class="card push-top">
  <div class="card-header">
    <h1 style=text-align:center;>Edit & Update</h1>
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('users.update', $user->id) }}">
        <form action="{{ route('update.password', ['id' => $user->id]) }}" method="POST">
          <div class="form-group">
              @csrf
              @method('PATCH')
              @method('PUT')
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $user->name }}"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="{{ $user->email }}"/>
          </div>
        {{-- <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password" name="password" value="{{ $user->password }}" aria-describedby="password-toggle">
            </div> --}}
            {{-- <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" value="{{$user->password}}" />
                    <div class="input-group-append">
                        <span class="input-group-text" onclick="togglePasswordVisibility()">
                            <i id="eyeIcon" class="fas fa-eye"></i>
                        </span>
                    </div>
                </div>
            </div> --}}

            <div class="radio-group">
                <label for="Role">Role</label><br>
                <label>
                    <input type="radio" name="role" value="admin" {{ $user->role === 'admin' ? 'checked' : '' }}>
                    admin
                </label><br>

                <label>
                    <input type="radio" name="role" value="student" {{ $user->role === 'student' ? 'checked' : '' }}>
                    student
                </label><br>

                <label>
                    <input type="radio" name="role" value="teacher" {{ $user->role === 'teacher' ? 'checked' : '' }}>
                    teacher
                </label><br>
            </div>

          <button type="submit" class="btn btn-block btn-primary">Update User</button>
            </div>
      </form>
  </div>
</div>
</section>
</div>
@endsection
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $("#password-toggle").on('click', function() {
            var passwordField = $("#password");
            var fieldType = passwordField.attr('type');

            if (fieldType === 'password') {
                passwordField.attr('type', 'text');
                $(this).text('Hide');
            } else {
                passwordField.attr('type', 'password');
                $(this).text('Show');
            }
        });
    });

    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
<script>
    function togglePasswordVisibility() {
        var passwordField = document.getElementById('password');
        var eyeIcon = document.getElementById('eyeIcon');

        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    }
</script>

</script> --}}


