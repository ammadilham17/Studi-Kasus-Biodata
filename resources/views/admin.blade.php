<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - Kelola Biodata</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 40px auto; padding: 20px; background: #eef2f3; }
        .card { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        label { display: block; margin-top: 15px; font-weight: bold; }
        input { width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { margin-top: 20px; background: #27ae60; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; }
        .alert { background: #d4edda; color: #155724; padding: 10px; border-radius: 4px; margin-bottom: 15px; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Form Manajemen Biodata</h2>

        @if(session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif

        <form action="/admin/update" method="POST">
            @csrf
            <label>Welcome Message:</label>
            <input type="text" name="welcome_message" value="{{ $biodata->welcome_message ?? '' }}" required>

            <label>Nama:</label>
            <input type="text" name="nama" value="{{ $biodata->nama ?? '' }}" required>

            <label>Kelas:</label>
            <input type="text" name="kelas" value="{{ $biodata->kelas ?? '' }}" required>

            <label>Hobi:</label>
            <input type="text" name="hobi" value="{{ $biodata->hobi ?? '' }}" required>

            <button type="submit">Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>