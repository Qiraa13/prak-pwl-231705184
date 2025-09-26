<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profile</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(135deg, #6f42c1, #d6336c);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .profile-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            padding: 30px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .profile-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #6f42c1;
            background-color: #e9ecef;
            margin-bottom: 20px;
        }
        .profile-name {
            font-size: 1.8rem;
            font-weight: 700;
            color: #6f42c1;
            margin-bottom: 15px;
        }
        .info-box {
            background-color: #f8f9fa;
            padding: 12px 20px;
            margin-bottom: 12px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            color: #495057;
        }
        .info-icon {
            color: #6f42c1;
            font-size: 1.3rem;
        }
    </style>
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
</head>
<body>
    <div class="profile-card">
        <img src="{{ asset('images/Iso Pixelart.jpeg') }}" alt="Profile Image" class="profile-image" />
        <div class="profile-name">{{ $nama }}</div>
        <div class="info-box">
            <i class="bi bi-person-badge info-icon"></i>
            <span>Kelas: {{ $kelas }}</span>
        </div>
        <div class="info-box">
            <i class="bi bi-card-text info-icon"></i>
            <span>NPM: {{ $npm }}</span>
        </div>
    </div>
</body>
</html>
