<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MorrisJS</title>
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="bower_components/morris.js/morris.css" media="screen" title="no title" charset="utf-8">
        <script src="bower_components/jquery/dist/jquery.min.js" charset="utf-8"></script>
        <script src="bower_components/raphael/raphael-min.js" charset="utf-8"></script>
        <script src="bower_components/morris.js/morris.js" charset="utf-8"></script>
        <style type="text/css">
	        body {
	        	margin-top: 45px
	        }
        </style>
    </head>
    <body>
        <?php
        require "data.php";
        ?>
        <script>
        jQuery(document).ready(function()
        {
            // Bar Chart
            var MorrisBar = Morris.Bar({
                element: 'chart-bar',
                data: JSON.parse('<?php echo json_encode($data) ?>'),
                xkey: 'ext',
                ykeys: ['people'],
                labels: ['Personas'],
                hideHover: 'auto',
                resize: true,
                xLabelFormat: function(d)
                {
                    return "Ciudad " + d.src.city;
                },
                barColors: ["#3498db"],
                hoverCallback: function(index, options, content)
                {
                    return content;
                }
            });
            var MorrisArea = Morris.Line({
                element: 'chart-line',
                data: JSON.parse('<?php echo json_encode($data) ?>'),
                parseTime: false,
                xkey: 'city',
                ykeys: ['people'],
                lineColors: ['#2980b9'],
                xLabelFormat: function(d)
                {
                    return "Ciudad " + d.src.city;
                },
                labels: ['Personas'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true,
                hoverCallback: function(index, options, content)
                {
                    return content;
                },
            });
 
            var MorrisArea = Morris.Area({
                element: 'chart-area',
                data: JSON.parse('<?php echo json_encode($data) ?>'),
                parseTime: false,
                xkey: 'city',
                ykeys: ['people'],
                lineColors: ['#40d47e'],
                xLabelFormat: function(d)
                {
                    return "Ciudad " + d.src.city;
                },
                labels: ['Personas'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true,
                hoverCallback: function(index, options, content)
                {
                    return content;
                },
            });
 
            var MorrisArea = Morris.Donut({
                element: 'chart-donut',
                data: JSON.parse('<?php echo json_encode($donut) ?>'),
                colors: ['#8e44ad', '#e67e22', '#c0392b', '#34495e', '#3498db', '#27ae60']
            });
        })
        </script>
        <div class="container">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Bar Morris</h3>
              </div>
              <div class="panel-body">
                  <div id="chart-bar"></div>
              </div>
            </div>
        </div>
 
        <div class="container">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Area Morris</h3>
              </div>
              <div class="panel-body">
                  <div id="chart-area"></div>
              </div>
            </div>
        </div>
 
        <div class="container">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Line Morris</h3>
              </div>
              <div class="panel-body">
                  <div id="chart-line"></div>
              </div>
            </div>
        </div>
 
        <div class="container">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Donut Morris</h3>
              </div>
              <div class="panel-body">
                  <div id="chart-donut"></div>
              </div>
            </div>
        </div>
    </body>
</html>