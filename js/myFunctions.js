var loading = $(".loader").hide();

$(document)
    .ajaxStart(function () {
        loading.show();
        $("#tab").empty();
    })
    .ajaxStop(function () {
        loading.hide();
    });

$("#btn").click(function () {
    $.post("classes/info.php",
        {
            text: $("#text").val()
        },
        function (data) {
            $("#tab").append(data);
        });
});


Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Статистика обработанных запросов ' + $("#name").val()
    },
    xAxis: {
        categories: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Субота']
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Количество запросов'
        },
        stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
            }
        }
    },
    legend: {
        align: 'right',
        x: -30,
        verticalAlign: 'top',
        y: 25,
        floating: true,
        backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true,
                color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
            }
        }
    },
    series: jsVar

});

