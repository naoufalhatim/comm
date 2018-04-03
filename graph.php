



       <?php 

$bdd = new PDO('mysql:host=localhost;dbname=investis04;charset=utf8','root','');
$bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $req = ("select sum(avis.st)/(SELECT COUNT(st)) as st1, st,nom_quartier from avis where nom_quartier = '$nom_quartier' GROUP BY month " );
    $rep = $bdd->query($req);
       $stationnement = array();
foreach ($rep as $row) {
    $stationnement[] = $row['st1'];
   }
//print json_encode($stationnement, JSON_NUMERIC_CHECK);
/*******************************************/
$req1 = ("select sum(avis.sec)/(SELECT COUNT(sec)) as sec1, sec,nom_quartier from avis where nom_quartier = '$nom_quartier' GROUP BY month " );     
$rep = $bdd->query($req1);
$securite = array();
 foreach ($rep as $row) {
                        $securite[] = $row['sec1'];
                        }
 //print json_encode($securite, JSON_NUMERIC_CHECK);
/*******************************************/
   $req2 = ("select sum(avis.pr)/(SELECT COUNT(pr)) as pr1, pr,nom_quartier from avis where nom_quartier = '$nom_quartier' GROUP BY month " );     
 $rep = $bdd->query($req2);
 $proprete = array();
 foreach ($rep as $row) {
                         $proprete[] = $row['pr1'];
                        }
 //print json_encode($proprete, JSON_NUMERIC_CHECK);
/*****************************************/
 $req3 = ("select sum(avis.ev)/(SELECT COUNT(ev)) as ev1, ev,nom_quartier from avis where nom_quartier = '$nom_quartier' GROUP BY month " );     
 $rep = $bdd->query($req3);
 $espacevert = array();
 foreach ($rep as $row) {
                        $espacevert[] = $row['ev1'];
                        }
 //print json_encode($espacevert, JSON_NUMERIC_CHECK);
/*****************************************/
       ?>

<div id="container" class="container002"></div>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
   <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script>
     $(function () {

Highcharts.chart('container', {

    title: {
        text: ''
    },

    subtitle: {
        text: 'Source: investis.fr'
    },
xAxis: {
        categories: [
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
            
        ],
        crosshair: true
    },
    yAxis: {
        title: {
            text: 'note /5'
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
 series: [ {

        name: 'Stationnement',
        data: [<?php echo join($stationnement, ',') ?>]
    }, {
        name: 'Sécurité',
        data: [<?php echo join($securite, ',') ?>]
    }, {
        name: 'Propreté',
        data: [<?php echo join($proprete, ',') ?>]
    }, {
        name: 'Espace vert',
        data: [<?php echo join($espacevert, ',') ?>]
    }],


    responsive: {
        rules: [{
            condition: {
                maxWidth: 700
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
</script>
