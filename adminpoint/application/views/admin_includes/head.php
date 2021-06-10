<!DOCTYPE html>
<html>
<body class=" pane bg-white">
    <div id="wrapper">
<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.3/dashboard_4_1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jul 2020 10:30:39 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Raipur Development Authority|Dashboard</title>
    <link href=" <?=base_url()?>/adminassets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href=" <?=base_url()?>/adminassets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href=" <?=base_url()?>/adminassets/css/plugins/morris/morris-0.4.3.min.css " rel="stylesheet">

    <link href=" <?=base_url()?>/adminassets/css/animate.css " rel="stylesheet">
    <link href=" <?=base_url()?>/adminassets/css/style.css " rel="stylesheet">
     <!-- Mainly scripts -->
    <script src=" <?=base_url()?>/adminassets/js/jquery-3.1.1.min.js "></script>
    <script src=" <?=base_url()?>/adminassets/js/popper.min.js "></script>
    <script src=" <?=base_url()?>/adminassets/js/bootstrap.js "></script>
    <script src=" <?=base_url()?>/adminassets/js/plugins/metisMenu/jquery.metisMenu.js "></script>
    <script src=" <?=base_url()?>/adminassets/js/plugins/slimscroll/jquery.slimscroll.min.js "></script>

    <!-- Flot -->
    <script src=" <?=base_url()?>/adminassets/js/plugins/flot/jquery.flot.js "></script>
    <script src=" <?=base_url()?>/adminassets/js/plugins/flot/jquery.flot.tooltip.min.js "></script>
    <script src=" <?=base_url()?>/adminassets/js/plugins/flot/jquery.flot.spline.js "></script>
    <script src=" <?=base_url()?>/adminassets/js/plugins/flot/jquery.flot.resize.js "></script>
    <script src=" <?=base_url()?>/adminassets/js/plugins/flot/jquery.flot.pie.js "></script>
    <script src=" <?=base_url()?>/adminassets/js/plugins/flot/jquery.flot.symbol.js "></script>
    <script src=" <?=base_url()?>/adminassets/js/plugins/flot/curvedLines.js "></script>

    <!-- Peity -->
    <script src=" <?=base_url()?>/adminassets/js/plugins/peity/jquery.peity.min.js "></script>
    <script src=" js/demo/peity-demo.js "></script>

    <!-- Custom and plugin javascript -->
    <script src=" <?=base_url()?>/adminassets/js/inspinia.js "></script>
    <script src=" <?=base_url()?>/adminassets/js/plugins/pace/pace.min.js "></script>

    <!-- jQuery UI -->
    <script src=" <?=base_url()?>/adminassets/js/plugins/jquery-ui/jquery-ui.min.js "></script>

    <!-- Jvectormap -->
    <script src=" <?=base_url()?>/adminassets/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js "></script>
    <script src=" <?=base_url()?>/adminassets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js "></script>

    <!-- Sparkline -->
    <script src=" <?=base_url()?>/adminassets/js/plugins/sparkline/jquery.sparkline.min.js "></script>

    <!-- Sparkline demo data  -->
    <script src=" <?=base_url()?>/adminassets/js/demo/sparkline-demo.js "></script>

    <!-- ChartJS-->
    <script src=" <?=base_url()?>/adminassets/js/plugins/chartJs/Chart.min.js "></script>

    <script>
        $(document).ready(function() {


            var d1 = [[1262304000000, 6], [1264982400000, 3057], [1267401600000, 20434], [1270080000000, 31982], [1272672000000, 26602], [1275350400000, 27826], [1277942400000, 24302], [1280620800000, 24237], [1283299200000, 21004], [1285891200000, 12144], [1288569600000, 10577], [1291161600000, 10295]];
            var d2 = [[1262304000000, 5], [1264982400000, 200], [1267401600000, 1605], [1270080000000, 6129], [1272672000000, 11643], [1275350400000, 19055], [1277942400000, 30062], [1280620800000, 39197], [1283299200000, 37000], [1285891200000, 27000], [1288569600000, 21000], [1291161600000, 17000]];

            var data1 = [
                { label: "Data 1", data: d1, color: '#17a084'},
                { label: "Data 2", data: d2, color: '#127e68' }
            ];
            $.plot($("#flot-chart1"), data1, {
                xaxis: {
                    tickDecimals: 0
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 1
                            }, {
                                opacity: 1
                            }]
                        },
                    },
                    points: {
                        width: 0.1,
                        show: false
                    },
                },
                grid: {
                    show: false,
                    borderWidth: 0
                },
                legend: {
                    show: false,
                }
            });

            var lineData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "Example dataset",
                        backgroundColor: "rgba(26,179,148,0.5)",
                        borderColor: "rgba(26,179,148,0.7)",
                        pointBackgroundColor: "rgba(26,179,148,1)",
                        pointBorderColor: "#fff",
                        data: [48, 48, 60, 39, 56, 37, 30]
                    },
                    {
                        label: "Example dataset",
                        backgroundColor: "rgba(220,220,220,0.5)",
                        borderColor: "rgba(220,220,220,1)",
                        pointBackgroundColor: "rgba(220,220,220,1)",
                        pointBorderColor: "#fff",
                        data: [65, 59, 40, 51, 36, 25, 40]
                    }
                ]
            };

            var lineOptions = {
                responsive: true
            };


            var ctx = document.getElementById("lineChart").getContext("2d");
            new Chart(ctx, {type: 'line', data: lineData, options:lineOptions});


        });
    </script>
</head>