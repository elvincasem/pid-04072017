/*
 *  Document   : readyDashboard.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Dashboard page
 */

var ReadyDashboard = function() {

    return {
        init: function() {
            /* With CountTo, Check out examples and documentation at https://github.com/mhuggins/jquery-countTo */
            $('[data-toggle="counter"]').each(function(){
                var $this = $(this);

                $this.countTo({
                    speed: 1000,
                    refreshInterval: 25,
                    onComplete: function() {
                        if($this.data('after')) {
                            $this.html($this.html() + $this.data('after'));
                        }
                    }
                });
            });

            /* Mini Line Charts with jquery.sparkline plugin, for more examples you can check out http://omnipotent.net/jquery.sparkline/#s-about */
            var widgetChartLineOptions = {
                type: 'line',
                width: '200px',
                height: '109px',
                tooltipOffsetX: -25,
                tooltipOffsetY: 20,
                lineColor: '#9bdfe9',
                fillColor: '#9bdfe9',
                spotColor: '#555555',
                minSpotColor: '#555555',
                maxSpotColor: '#555555',
                highlightSpotColor: '#555555',
                highlightLineColor: '#555555',
                spotRadius: 3,
                tooltipPrefix: '',
                tooltipSuffix: ' Sales',
                tooltipFormat: '{{prefix}}{{y}}{{suffix}}'
            };
            $('#widget-dashchart-sales').sparkline('html', widgetChartLineOptions);

            /*
             * Flot Charts Jquery plugin is used for charts
             *
             * For more examples or getting extra plugins you can check http://www.flotcharts.org/
             * Plugins included in this template: pie, resize, stack, time
             */

            // Get the element where we will attach the chart
            var chartClassicDash    = $('#chart-classic-dash');
			//var discipline = document.getElementById("discipline").value;
			//var noofstudent = document.getElementById("noofstudent").value;
            // Data for the chart
            //var dataEarnings        = [[1, 1900], [2, 2300], [3, 3200], [4, 2500], [5, 4200], [6, 3100], [7, 3600], [8, 2500], [9, 4600], [10, 3700], [11, 4200], [12, 5200]];
			//var dataEarnings = JSON.parse(noofstudent);
			 //var dataEarnings        = [[1,"28"],[2,"2"],[3,"63"],[4,"95"],[5,"24"],[6,"1"],[7,"1"],[8,"8"],[9,"14"],[10,"1"],[11,"1"],[12,"2"],[13,"6"],[14,"4"],[15,"8"],[16,"3"],[17,"5"],[18,"10"],[19,"3"]];
            //var dataSales           = [[1, 850], [2, 750], [3, 1500], [4, 900], [5, 1500], [6, 1150], [7, 1500], [8, 900], [9, 1800], [10, 1700], [11, 1900], [12, 2550]];
            //var dataTickets         = [[1, 130], [2, 330], [3, 220], [4, 350], [5, 150], [6, 275], [7, 280], [8, 380], [9, 120], [10, 330], [11, 190], [12, 410]];

            //var dataMonths          = [[1, 'Jan'], [2, 'Feb'], [3, 'Mar'], [4, 'Apr'], [5, 'May'], [6, 'Jun'], [7, 'Jul'], [8, 'Aug'], [9, 'Sep'], [10, 'Oct'], [11, 'Nov'], [12, 'Dec']];
		    //var dataMonths          = JSON.parse(discipline);;

            // Classic Chart
			/*
            $.plot(chartClassicDash,
                [
                    {
                        label: 'No. of Programs',
                        data: dataEarnings,
                        lines: {show: true, fill: true, fillColor: {colors: [{opacity: .6}, {opacity: .6}]}},
                        points: {show: true, radius: 5}
                    }/*,
                    {
                        label: 'Female',
                        data: dataSales,
                        lines: {show: true, fill: true, fillColor: {colors: [{opacity: .6}, {opacity: .6}]}},
                        points: {show: true, radius: 5}
                    },
                    {
                        label: 'Tickets',
                        data: dataTickets,
                        lines: {show: true, fill: true, fillColor: {colors: [{opacity: .6}, {opacity: .6}]}},
                        points: {show: true, radius: 5}
                    }*/  /*
                ],
                {
                    colors: ['#5ccdde', '#454e59', '#ffffff'],
                    legend: {show: true, position: 'nw', backgroundOpacity: 0},
                    grid: {borderWidth: 0, hoverable: true, clickable: true},
                    yaxis: {show: false, tickColor: '#f5f5f5', ticks: 3},
                    xaxis: {ticks: dataMonths, tickColor: '#f9f9f9'}
                }
            );*/
			
			//chart 2
			// Get the element where we will attach the chart
			/*
            var chartClassicDash2    = $('#chart-classic-dash2');
			var male = document.getElementById("male").value;
			var female = document.getElementById("female").value;
			var province = document.getElementById("province").value;
           
			var datamale = JSON.parse(male);
			var datafemale = JSON.parse(female);
		    var dataMonths = JSON.parse(province);;

            // Classic Chart
            $.plot(chartClassicDash2,
                [
                    {
                        label: 'Female',
                        data: datafemale,
                        lines: {show: true, fill: true, fillColor: {colors: [{opacity: .6}, {opacity: .6}]}},
                        points: {show: true, radius: 5}
                    },
                    {
                        label: 'Male',
                        data: datamale,
                        lines: {show: true, fill: true, fillColor: {colors: [{opacity: .6}, {opacity: .6}]}},
                        points: {show: true, radius: 5}
                    }/*,
                    {
                        label: 'Tickets',
                        data: dataTickets,
                        lines: {show: true, fill: true, fillColor: {colors: [{opacity: .6}, {opacity: .6}]}},
                        points: {show: true, radius: 5}
                    }*//*
                ],
                {
                    colors: ['#5ccdde', '#454e59', '#ffffff'],
                    legend: {show: true, position: 'nw', backgroundOpacity: 0},
                    grid: {borderWidth: 0, hoverable: true, clickable: true},
                    yaxis: {show: false, tickColor: '#f5f5f5', ticks: 3},
                    xaxis: {ticks: dataMonths, tickColor: '#f9f9f9'}
                }
            );*/

           
			
			
        }
    };
}();