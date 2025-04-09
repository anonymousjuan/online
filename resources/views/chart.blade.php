<!DOCTYPE html>
<html>
<head>
    <title>Sales Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2 style="text-align: center;">Temperature Chart</h2>
    <div style="width: 80%; max-width: 700px; margin: auto;">
        <canvas id="salesChart"></canvas>
    </div>

    <script>
        const labels = @json($labels);
        const data = {
            labels: labels,
            datasets: [{
                label: 'Temperature',
                backgroundColor: 'rgba(75, 192, 192, 0.5)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                data: @json($data),
                tension: 0.4 // smooth lines for line chart
            }]
        };

        const config = {
            type: 'bar', // or 'line'
            data: data,
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        new Chart(document.getElementById('salesChart'), config);
    </script>
</body>
</html>
