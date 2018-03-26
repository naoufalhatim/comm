 $(function () {

Highcharts.chart('container', {

    title: {
        text: 'Stat, '
    },

    subtitle: {
        text: 'Source: investis.fr'
    },
xAxis: {
        categories: [
            'Nov',
            'Dec',
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        title: {
            text: 'note'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 01
        }
    },

    series: [{
        name: 'Activitée commerciale',
        data: [52744,43934, 52503, 57177]
    }, {
        name: 'Stationnement',
        data: [11744,24916, 24064, 29742]
    }, {
        name: 'Sécurité',
        data: [21744,11744, 17722, 16005]
    }, {
        name: 'Propreté',
        data: [21744,7988, 12169, 15112]
    }, {
        name: 'Espace vert',
        data: [21744,12908, 5948, 8105]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});
 });