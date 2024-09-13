<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Dashboard Korea</h1>
        </header>
        <main>
            <!-- Tempatkan grafik dan data lainnya di sini -->
            <div id="charts">
                <!-- Contoh grafik menggunakan Chart.js -->
                <canvas id="myChart"></canvas>
            </div>
            <div id="data-table">
                <!-- Tabel data bisa ditambahkan di sini -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>Data 1</th>
                            <th>Data 2</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->value }}</td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </div>
</body>
</html>
