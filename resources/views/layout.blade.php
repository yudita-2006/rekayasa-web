
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery Inventory System</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f8f5ef;
            color: #44352c;
        }

        .sidebar {
            width: 240px;
            height: 100vh;
            background: #5b4032;
            color: white;
            position: fixed;
            padding: 30px 20px;
        }

        .brand {
            font-size: 21px;
            font-weight: 700;
            margin-bottom: 45px;
        }

        .brand span {
            color: #e9c9a5;
        }

        .menu-title {
            font-size: 11px;
            color: #cbb9aa;
            margin-bottom: 15px;
            letter-spacing: 1px;
        }

        .sidebar a {
            display: block;
            color: #f4e9df;
            text-decoration: none;
            padding: 13px 15px;
            border-radius: 10px;
            margin-bottom: 9px;
            transition: 0.2s;
        }

        .sidebar a:hover {
            background: #80604b;
            color: white;
        }

        .main {
            margin-left: 240px;
            padding: 35px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 35px;
        }

        .topbar h1 {
            font-size: 25px;
        }

        .topbar p {
            color: #927f70;
            font-size: 13px;
            margin-top: 5px;
        }

        .content {
            background: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(80, 55, 35, 0.05);
        }

        h1, h2, h3 {
            margin-bottom: 18px;
        }

        a {
            color: #8b6045;
        }

        button, input, select, textarea {
            font-family: inherit;
        }

        button {
            background: #8b6045;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            background: #68442f;
        }

        input, select, textarea {
            padding: 10px;
            border: 1px solid #e4d9ce;
            border-radius: 8px;
            margin-top: 5px;
            max-width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            background: #f3ece3;
            color: #684b38;
            text-align: left;
        }

        th, td {
            padding: 13px;
            border-bottom: 1px solid #eee7df;
        }

        @media (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .brand {
                margin-bottom: 20px;
            }

            .main {
                margin-left: 0;
                padding: 18px;
            }

            .content {
                padding: 18px;
                overflow-x: auto;
            }
        }
    </style>
</head>

<body>

    <aside class="sidebar">
        <div class="brand">BAKERY<span>STOCK</span></div>

        <div class="menu-title">MENU UTAMA</div>

        <a href="/products">📦 Products</a>
        <a href="/stocks">📊 Stocks</a>
        <a href="/transactions">🧾 Transactions</a>
    </aside>

    <main class="main">
        <div class="topbar">
            <div>
                <h1>Inventory Management</h1>
                <p>Kelola persediaan toko bahan kue dengan mudah.</p>
            </div>
        </div>

        <section class="content">
            @yield('content')
        </section>
    </main>

</body>
</html>
