<form method="POST" action="register">
    {!! csrf_field() !!}

    @foreach($errors->all() as $erro)
        {{$erro}}
    @endforeach

    <div>
        Name
        <input type="text" name="username" value="{{ old('username') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        Sex
        <input type="text" name="sex" value="{{ old('sex') }}">
    </div>

    <div>
        Age
        <input type="text" name="age" value="{{ old('age') }}">
    </div>

    <div>
        phone
        <input type="text" name="phone" value="{{ old('phone') }}">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>