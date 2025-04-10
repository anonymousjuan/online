<!DOCTYPE html>
<html>
<head>
    <title>Parameters</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2 style="text-align: center;">Temperature Chart</h2>
    <div style="width: 80%; max-width: 700px; margin: auto;">
        <canvas id="salesChart"></canvas>
    </div>

    <script>
        const labels = @json($labels);
        const tempData = @json($temp);
        const humidityData = @json($humidity);
        const data = {
            labels: labels,
            datasets: [{
                label: 'Temperature',
                backgroundColor: 'rgba(255, 99, 132, 0.5)', // light red with transparency
                borderColor: 'rgba(255, 99, 132, 1)',      // solid red
                borderWidth: 2,
                data: @json($temp),
                tension: 0.4 // smooth lines for line chart
            },
        {
            label: 'Humidity',
                backgroundColor: 'rgba(75, 192, 192, 0.5)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                data: @json($humidity),
                tension: 0.4 // smooth lines for line chart
        }]
        };

        const config = {
            type: 'line', // or 'bar'
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
