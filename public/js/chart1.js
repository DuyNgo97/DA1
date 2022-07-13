const ctx = document.getElementById('lineChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['tháng 1', 'tháng 2', 'tháng 3',  'tháng 4',  'tháng 5',  'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'],
        datasets: [{
            label: 'Sản phẩm tiêu thụ',
            data: [2050, 1900, 2100, 1800,3800, 2000,2500,5000,3500,2400,4700,3900],
            backgroundColor: [
                'rgba(85, 85, 85, 1)',
                
            ],
            borderColor: [
                'rgba(41, 155, 99)',
             
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive:true
    }
});