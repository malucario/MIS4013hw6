<?php
Include "view-header.php";
?>

<h1>Bubble Chart</h1>
<p>This is using charts.js to create a bubble chart. Imagine the chart is a baseball strike zone. Each point in the chart is a section of the strike zone and the size of the dots shows the frequency of swing and misses.</p>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  // Get the canvas context
  const ctx = document.getElementById('myChart').getContext('2d');

  // Data for the chart
  const data = {
    datasets: [{
      label: 'Whiff Data',
      data: [
        { x: -0.71, y: 1.5, r: 18 },
        { x: -0.71, y: 2.2, r: 12 },
        { x: -0.71, y: 2.9, r: 11 },
        { x: -0.71, y: 3.6, r: 8 },
        { x: -0.24, y: 1.5, r: 15 },
        { x: -0.24, y: 2.2, r: 7 },
        { x: -0.24, y: 2.9, r: 9 },
        { x: -0.24, y: 3.6, r: 8 },
        { x: 0.24, y: 1.5, r: 13 },
        { x: 0.24, y: 2.2, r: 10 },
        { x: 0.24, y: 2.9, r: 6 },
        { x: 0.24, y: 3.6, r: 8 },
        { x: 0.71, y: 1.5, r: 18 },
        { x: 0.71, y: 2.2, r: 12 },
        { x: 0.71, y: 2.9, r: 11 },
        { x: 0.71, y: 3.6, r: 8 }
      ],
      backgroundColor: 'rgb(255, 99, 132)'
    }]
  };

  // Chart configuration
  const config = {
    type: 'bubble',
    data: data,
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: true
        }
      },
      scales: {
        x: {
          title: {
            display: true,
            text: 'X-axis'
          }
        },
        y: {
          title: {
            display: true,
            text: 'Y-axis'
          }
        }
      }
    }
  };

  // Create the chart
  new Chart(ctx, config);
</script>

<?php
Include "view-footer.php";
?>
