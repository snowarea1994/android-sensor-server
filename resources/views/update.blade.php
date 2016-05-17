<form method="POST" action="update_location">
    {!! csrf_field() !!}

    <div>
        Uid
        <input type="text" name="uid" value="{{ old('uid') }}">
    </div>

    <div>
        longitude
        <input type="text" name="longitude" value="{{ old('longitude') }}">
    </div>

    <div>
        latitude
        <input type="text" name="latitude" value="{{ old('latitude') }}">
    </div>

    <div>
        floor
        <input type="text" name="floor" value="{{ old('floor') }}">
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>

<form method="POST" action="update_health">
    {!! csrf_field() !!}

    <div>
        uid
        <input type="text" name="uid" value="{{ old('uid') }}">
    </div>

    <div>
        steps
        <input type="text" name="steps" value="{{ old('steps') }}">
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>

<form enctype="multipart/form-data" method="POST" action="update_data" >
    {!! csrf_field() !!}

    <div>
        file
        <input type="file" name="sensor" >
    </div>


    <div>
        <button type="submit">上传</button>
    </div>
</form>