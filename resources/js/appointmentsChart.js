
import Chart from "chart.js/auto";

//const labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec',];

let ctx = document.getElementById('appointmentsChart').getContext('2d');
ctx.canvas.height=85;

const difference = previousData.map((appointmentsPerMonth, index) => {
    return appointmentsPerMonth['y'] > currentData[index]['y'] ? appointmentsPerMonth['y'] - currentData[index]['y'] : 0;
})

let myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        datasets: [{
            data: currentData,
            backgroundColor: 'rgba(41, 112, 255, 1)',
            borderColor: 'rgba(41, 112, 255, 1)',
            borderWidth: 1,
            borderRadius: 10,
            order:1
        },
        {
            data: difference,
            backgroundColor: 'rgba(132, 173, 255, 1)',
            borderColor: 'rgba(132, 173, 255, 1)',
            borderWidth: 1,
            borderRadius: 10,
            order:2
        }]
    },
    options: {
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            x: {
                stacked: true,

                title: {
                    display: true,
                    text: 'Luna'
                },

                grid: {
                    display: false
                }
            },

            y: {
                beginAtZero: true,
                stacked: true,
                suggestedMax: 20,

                title: {
                    display: true,
                    text: 'Număr programări',
                    
                },

                responsive: true,
                maintainAspectRatio: true

            }
        }
    }});





