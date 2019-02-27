let chart1 = document.getElementById("line_chart");
let lineChart = new Chart(chart1, {
    type: 'line',
    data: {
        labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Today"],
        datasets: [{
            label: '# of sales',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(142,94,162, 0.2)'
            ],
            borderColor: [
                'rgba(142,94,162)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        maintainAspectRatio: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

new Chart(document.getElementById("doughnut_chart"), {
    type: 'doughnut',
    data: {
        labels: ["Product Sold", "Product Remaining"],
        datasets: [
            {
                backgroundColor: ["#3e95cd", "#8e5ea2"],
                data: [40,60]
            }
        ]
    },
    options: {
        maintainAspectRatio: false,
        legend: {
            position: "bottom",
        },
        title: {
            display: true,
            text: 'Product Name'
        },
    }
});