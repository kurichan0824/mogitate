<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate - 商品一覧</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
            transition: transform 0.2s;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .sort-tag {
            background-color: #e9ecef;
            padding: 5px 10px;
            border-radius: 15px;
            display: inline-block;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <span class="navbar-brand mb-0 h1">mogitate</span>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>