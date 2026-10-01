<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
</head>
<body>

    <h1>Validation</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/submit-form" method="POST">
        @csrf

        <label>Nama:</label>
        <input type="text" name="name">
        <button type="submit">Cek Validasi</button>
        <br><br>

    </form>

</body>
</html>