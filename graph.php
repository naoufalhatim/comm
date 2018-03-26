<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
   <style type="text/css">
       .container002 {
    min-width: 310px;
    max-width: 800px;
    height: 400px;
    margin: 0 auto
}
   </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
   <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script>
     $(function () {
var result = data;

result=result.replace("\"","");
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
 series: [ {

        name: 'Stationnement',
        data: ["11744",24916, 24064, 29742]
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
</script>




    <title>dfd</title>
</head>
<body>

 <p>
         <?php 

         $nom_quartier = "Comédie";
$quartier = '25';
$type_quartier = '2';
try{
$bdd = new PDO('mysql:host=localhost;dbname=investis04;charset=utf8','root','');
$bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $data = array();
    $req = ("select sum(avis.ac), ac,nom_quartier from avis where nom_quartier = '$nom_quartier' GROUP BY day " );
    $rep = $bdd->query($req);
    while ($p = $rep ->fetch()){
            //$data[] = $p['0'];
        $json = preg_replace( "/\"(\d+)\"/", '$p', $json );
            $data = array((int)$p['0']);
      echo "<div> " . $p['nom_quartier'] . "</div> <p>" . $p['0'] . "</p>" ; 
   }
 
  $a= json_encode($data);

echo json_encode( $a, JSON_NUMERIC_CHECK );
  echo json_encode($data); 


    }
catch(PDOException $e)
    {
    echo $req . "<br>" . $e->getMessage();
    }
   
       ?>
       


    <?php


?>

 </p>
<div id="container" class="container002"></div>
</body>
</html>



