<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata - {{ $biodata->nama ?? 'Siswa' }}</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 40px auto; padding: 20px; background: #f4f4f9; }
        .card { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .welcome { color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px; }
    </style>
</head>
<body>
    <div class="card">
        <h1 class="welcome">{{ $biodata->welcome_message ?? 'Selamat Datang' }}</h1>
        <p><strong>Nama:</strong> {{ $biodata->nama ?? '-' }}</p>
        <p><strong>Kelas:</strong> {{ $biodata->kelas ?? '-' }}</p>
        <p><strong>Hobi:</strong> {{ $biodata->hobi ?? '-' }}</p>
    </div>
</body>
</html>