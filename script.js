let myChart = document.getElementById('myChart').getContext('2d');
let massPopChart = new Chart(myChart,{
        type:'horizontalBar',
        data:{
                labels:['Boston', 'Winchester','Springfield', 'Cambridge','New Bedford'],
                datasets:[{
                    label:'Population',
                    data:[
                            617594,
                        564644,
                            687654,
                            445445,
                            663564
                    ],
                backgroundColor:[
                        '#6B209A',
                        '#07619D',
                        '#FA236E',
                        '#34A853',
                        '#00909E',
                        '#FA236E'
                    ],
                }]
        },
        options:{}
});