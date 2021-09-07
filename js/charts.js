document.addEventListener('DOMContentLoaded', () => {

    const myChartConfigGrasaCorporal = {
        type: 'line',
        data: {
            labels: ['Inicio', '1er MES', '2do MES', '3er MES', ],
            datasets: [{
                label: '',
                data: [55, 40, 30, 20, 10],
                backgroundColor: [
                    'rgb(204, 204, 51)',
                ],
                borderColor: [
                    'rgb(204, 153, 51)',
                ],
                borderWidth: 2,
                pointRadius: 10,
            }, ],
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                },
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: '#6699cc',
                    },
                    ticks: {
                        color: ['#cc9999', '#cc9999', '#6699cc', '#6699cc',
                            '#cccc33', '#cccc33', '#cccc33',
                        ],
                        font: {
                            size: '20',
                            family: 'CoreRhino45Bold'
                        },
                        callback: (value) => `${value}%`,
                        padding: 10
                    },
                },
                x: {
                    grid: {
                        color: '#6699cc',
                    },
                    ticks: {
                        color: '#cc9933',
                        font: {
                            size: '20',
                            family: 'CoreRhino45Bold'
                        },
                        padding: 10
                    }
                },
            },
        },
    };


    const myChartConfigImc = {
        type: 'line',
        data: {
            labels: ['Inicio', '1er MES', '2do MES', '3er MES', '4to MES'],
            datasets: [{
                label: '',
                data: [40, 35, 30, 25, 18.5],
                backgroundColor: [
                    'rgb(204, 204, 51)',
                ],
                borderColor: [
                    'rgb(204, 153, 51)',
                ],
                borderWidth: 2,
                pointRadius: 10,
            }, ],
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                },
            },
            scales: {
                y: {
                    grid: {
                        color: '#6699cc',
                    },
                    ticks: {
                        color: ['#cc9999', '#cc9999', '#6699cc', '#6699cc',
                            '#cccc33', '#cccc33', '#cccc33',
                        ],
                        font: {
                            size: '16',
                            family: 'CoreRhino45Bold'
                        },
                        padding: 20,
                        callback: function (data, index, labels) {
                            switch (index) {
                                case 5:
                                    return 'Más de 40';
                                case 4:
                                    return '35 - 39.9';
                                case 3:
                                    return '30 - 34.9';
                                case 2:
                                    return '25 - 29.9';
                                case 1:
                                    return '18.5 - 24.9';
                                case 0:
                                    return '0';
                            }
                        },
                    },
                },
                x: {
                    grid: {
                        color: '#6699cc',
                    },
                    ticks: {
                        color: '#cc9933',
                        font: {
                            size: '16',
                            family: 'CoreRhino45Bold'
                        },
                        padding: 10
                    }
                },
            },
        },
    };

    const myChartConfigPeso = {
        type: 'line',
        data: {
            labels: ['Inicio', '1er MES', '2do MES', '3er MES', ],
            datasets: [{
                label: '',
                data: [120, 100, 90, 80, 70, 60, 50],
                backgroundColor: [
                    'rgb(204, 204, 51)',
                ],
                borderColor: [
                    'rgb(204, 153, 51)',
                ],
                borderWidth: 2,
                pointRadius: 10,
            }, ],
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                },
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: '#6699cc',
                    },
                    ticks: {
                        color: ['#cc9999', '#cc9999', '#6699cc', '#6699cc',
                            '#cccc33', '#cccc33', '#cccc33',
                        ],
                        font: {
                            size: '20',
                            family: 'CoreRhino45Bold'
                        },
                        callback: (value) => `${value} kg`,
                        padding: 10
                    },
                },
                x: {
                    grid: {
                        color: '#6699cc',
                    },
                    ticks: {
                        color: '#cc9933',
                        font: {
                            size: '20',
                            family: 'CoreRhino45Bold'
                        },
                        padding: 10
                    }
                },
            },
        },
    };

    const myChartConfigCC = {
        type: 'line',
        data: {
            labels: ['Inicio', '1er MES', '2do MES', '3er MES', ],
            datasets: [{
                label: '',
                data: [120, 100, 90, 80, 70, 60, 50],
                backgroundColor: [
                    'rgb(204, 204, 51)',
                ],
                borderColor: [
                    'rgb(204, 153, 51)',
                ],
                borderWidth: 2,
                pointRadius: 10,
            }, ],
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                },
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: '#6699cc',
                    },
                    ticks: {
                        color: ['#cc9999', '#cc9999', '#6699cc', '#6699cc',
                            '#cccc33', '#cccc33', '#cccc33',
                        ],
                        font: {
                            size: '20',
                            family: 'CoreRhino45Bold'
                        },
                        callback: (value) => `${value} cm`,
                        padding: 10
                    },
                },
                x: {
                    grid: {
                        color: '#6699cc',
                    },
                    ticks: {
                        color: '#cc9933',
                        font: {
                            size: '20',
                            family: 'CoreRhino45Bold'
                        },
                        padding: 10
                    }
                },
            },
        },
    };


    const myChartConfigCB = {
        type: 'line',
        data: {
            labels: ['Inicio', '1er MES', '2do MES', '3er MES', ],
            datasets: [{
                label: '',
                data: [40, 35, 30, 25, 20],
                backgroundColor: [
                    'rgb(204, 204, 51)',
                ],
                borderColor: [
                    'rgb(204, 153, 51)',
                ],
                borderWidth: 2,
                pointRadius: 10,
            }, ],
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                },
            },
            scales: {
                y: {
                    beginAtZero: false,
                    grid: {
                        color: '#6699cc',
                    },
                    ticks: {
                        color: ['#cc9999', '#cc9999', '#6699cc', '#6699cc',
                            '#cccc33', '#cccc33', '#cccc33',
                        ],
                        font: {
                            size: '20',
                            family: 'CoreRhino45Bold'
                        },
                        callback: (value) => `${value} cm`,
                        padding: 10
                    },
                },
                x: {
                    grid: {
                        color: '#6699cc',
                    },
                    ticks: {
                        color: '#cc9933',
                        font: {
                            size: '20',
                            family: 'CoreRhino45Bold'
                        },
                        padding: 10
                    }
                },
            },
        },
    };

    const chartGenerator = (idAccesor, chartConfig) => {
        const ctx = document.getElementById(idAccesor).getContext('2d');
        return new Chart(ctx, chartConfig);
    };

    chartGenerator('myChartGrasaCorporal', myChartConfigGrasaCorporal);

    chartGenerator('myChartImc', myChartConfigImc);

    chartGenerator('myChartPeso', myChartConfigPeso);

    chartGenerator('myChartCC', myChartConfigCC);

    chartGenerator('myChartCB', myChartConfigCB);








    // let myChart = chartGenerator('myChart', myChartConfig);
    // let ctx = document.getElementById('myChart').getContext('2d');
    // let myChart = new Chart(ctx, {
    //     type: 'line',
    //     data: {
    //         labels: ['Inicio', '1er MES', '2do MES', '3er MES', ],
    //         datasets: [{
    //             label: '',
    //             data: [55, 40, 30, 20, 10],
    //             backgroundColor: [
    //                 'rgb(204, 204, 51)',
    //             ],
    //             borderColor: [
    //                 'rgb(204, 153, 51)',
    //             ],
    //             borderWidth: 2,
    //             pointRadius: 10,
    //         }, ],
    //     },
    //     options: {
    //         responsive: true,
    //         plugins: {
    //             legend: {
    //                 display: false
    //             },
    //         },
    //         scales: {
    //             y: {
    //                 beginAtZero: true,
    //                 grid: {
    //                     color: '#6699cc',
    //                 },
    //                 ticks: {
    //                     color: ['#cc9999', '#cc9999', '#6699cc', '#6699cc',
    //                         '#cccc33', '#cccc33', '#cccc33',
    //                     ],
    //                     font: {
    //                         size: '20',
    //                         family: 'CoreRhino45Bold'
    //                     },
    //                     callback: (value) => `${value}%`,
    //                     padding: 10
    //                 },
    //             },
    //             x: {
    //                 grid: {
    //                     color: '#6699cc',
    //                 },
    //                 ticks: {
    //                     color: '#cc9933',
    //                     font: {
    //                         size: '20',
    //                         family: 'CoreRhino45Bold'
    //                     },
    //                     padding: 10
    //                 }
    //             },

    //         },
    //     },
    // });

    // let url = 'https://jsonplaceholder.typicode.com/todos/1';
    // fetch(url)
    //     .then(response => response.json())
    //     .then(data => show(data))
    //     .catch(error => console.log(error))

    // const show => articles => {
    //     articles.forEach(element => {
    //         myChart.data['labels'].push(element.descripcion);
    //         myChart.data['datasets'][0].data.push(element.stock);
    //     });
    // };
});