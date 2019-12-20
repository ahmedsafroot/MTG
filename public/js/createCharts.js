var barOptions_stacked = {
    tooltips: {
        enabled: false
    },
    hover: {
        animationDuration: 0
    },
    scales: {
        xAxes: [{
            ticks: {
                beginAtZero: true,
                fontFamily: "'Open Sans Bold', sans-serif",
                fontSize: 11
            },
            scaleLabel: {
                display: false
            },
            gridLines: {},
            stacked: true
        }],
        yAxes: [{
            gridLines: {
                display: false,
                color: "#fff",
                zeroLineColor: "#fff",
                zeroLineWidth: 0,
            },
            ticks: {
                fontFamily: "'Open Sans Bold', sans-serif",
                fontSize: 11
            },
            stacked: true
        }]
    },
    legend: {
        display: false
    },

    animation: {
        onComplete: function() {
            var chartInstance = this.chart;
            var ctx = chartInstance.ctx;
            ctx.textAlign = "center";
            ctx.font = "9px Open Sans";
            ctx.fillStyle = "#fff";

            Chart.helpers.each(this.data.datasets.forEach(function(dataset, i) {
                var meta = chartInstance.controller.getDatasetMeta(i);
                Chart.helpers.each(meta.data.forEach(function(bar, index) {
                    data = dataset.data[index];
                    if (i == 0) {
                        ctx.fillText(data, bar._model.x - 25, bar._model.y + 4);
                    } else {
                        ctx.fillText(data, bar._model.x - 25, bar._model.y + 4);
                    }
                }), this)
            }), this);
        }
    },
    pointLabelFontFamily: "Quadon Extra Bold",
    scaleFontFamily: "Quadon Extra Bold",
};


//chart of industary leadership
var ctx1 = document.getElementById("chart1");
var myChart1 = new Chart(ctx1, {
    type: 'horizontalBar',
    data: {
        labels: ["Price/Cost", "Quality", "Service", "Delivery/Cycle-time", "Product Performance", "Product range", "Flexibility", "Innovation", "Marketplace", "Trust/Credibility", "Sales"],

        datasets: [{
            data: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
            backgroundColor: "#0080FF",
            hoverBackgroundColor: "#0080FF"
        }, {
            data: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
            backgroundColor: "#009900",
            hoverBackgroundColor: "#009900"
        }, {
            data: [5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],

            backgroundColor: "rgba(63,203,226,1)",
            hoverBackgroundColor: "rgba(46,185,235,1)"
        }, {
            data: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
            backgroundColor: "#FF0000",
            hoverBackgroundColor: "#FF0000"
        }, ]
    },

    options: barOptions_stacked,
});