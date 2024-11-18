<h1>Front Page</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bubble',
    data: {
  datasets: [{
    label: 'Whiff Data',
    data: [{
      x: -0.71,
      y: 1.5,
      r: 18
    }, {
      x: -0.71,
      y: 2.2,
      r: 12
    }, {
      x: -0.71,
      y: 2.9,
      r: 11
    }, {
      x: -0.71,
      y: 3.6,
      r: 8
    }, {
      x: -0.24,
      y: 1.5,
      r: 15
    }, {
      x: -0.24,
      y: 2.2,
      r: 7
    }, {
      x: -0.24,
      y: 2.9,
      r: 9
    }, {
      x: -0.24,
      y: 3.6,
      r: 8
    }, {
      x: 0.24,
      y: 1.5,
      r: 13
    }, {
      x: 0.24,
      y: 2.2,
      r: 10
    }, {
      x: 0.24,
      y: 2.9,
      r: 6
    }, {
      x: 0.24,
      y: 3.6,
      r: 8
    }, {
      x: 0.71,
      y: 1.5,
      r: 18
    }, {
      x: 0.71,
      y: 2.2,
      r: 12
    }, {
      x: 0.71,
      y: 2.9,
      r: 11
    }, {
      x: 0.71,
      y: 3.6,
      r: 8
    }],
    backgroundColor: 'rgb(255, 99, 132)'
  }]
};
    options: {});
</script>
