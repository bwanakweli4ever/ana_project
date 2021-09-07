$(document).ready(function () {
    $("#progress-primary").animate({ width: '45%' }, 'slow', 'linear');
    $("#progress-info").animate({ width: '45%' }, 'slow', 'linear');
    $("#progress-success").animate({ width: '45%' }, 'slow', 'linear');
    $("#progress-danger").animate({ width: '45%' }, 'slow', 'linear');
});

var ctx = document.getElementById('myChart').getContext('2d');

$.ajax({
    url: 'http://localhost:8000/api/dashstats',
    method: 'GET',
    contentType: "application/json",
    dataType: 'json',
    success: function ({ labels, data }) {
        new Chart(ctx, {
            type: 'line',
            data: {
                labels,
                datasets: [{
                    data,
                    backgroundColor: [
                        'rgba(166, 172, 244, 0.2)',
                        'rgba(166, 172, 244, 0.2)',
                        'rgba(166, 172, 244, 0.2)',
                        'rgba(166, 172, 244, 0.2)',
                        'rgba(166, 172, 244, 0.2)',
                        'rgba(166, 172, 244, 0.2)',
                        'rgba(166, 172, 244, 0.2)'
                    ],
                    borderColor: [
                        'rgba(97, 110, 244, 1)',
                        'rgba(97, 110, 244, 1)',
                        'rgba(97, 110, 244, 1)',
                        'rgba(97, 110, 244, 1)',
                        'rgba(97, 110, 244, 1)',
                        'rgba(97, 110, 244, 1)',
                        'rgba(97, 110, 244, 1)'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    },
})
