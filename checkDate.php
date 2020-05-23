<?php
require_once('calnder/bdd.php');
$p_id=$_GET['id'];

$sql = "SELECT id, title, start, end, color FROM events  WHERE `p_id` = '$p_id'";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<?php
include('config.php');
session_start();
//echo $_SESSION["pandit_id"];
?>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Paathpooja.com</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  
  <link href="calnder/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- FullCalendar -->
	<link href='calnder/css/fullcalendar.css' rel='stylesheet' />
</head>
<body>

  <!-- NavBAr-->
  <?php include('navbar.php'); ?>
  <!-- NavBAr-->
  <!-- breadcrumb -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-custom-ol">
      <li class="breadcrumb-item"><a href="panditDashboard.php">DashBoard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Personal Details</li>
    </ol>
  </nav>
  <!-- breadcrumb -->

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <div id="calendar" class="col-centered">
                </div>
            </div>
			
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="calnder/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="calnder/js/bootstrap.min.js"></script>
	
	<!-- FullCalendar -->
	<script src='calnder/js/moment.min.js'></script>
	<script src='calnder/js/fullcalendar.min.js'></script>
	
	<script>

	$(document).ready(function() {
		
		var calendar = $('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,
			select: function(start, end, allDay) {
				
				$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
				
			},
			
			events: [
			<?php foreach($events as $event): 
			
				$start = explode(" ", $event['start']);
				$end = explode(" ", $event['end']);
				if($start[1] == '00:00:00'){
					$start = $start[0];
				}else{
					$start = $event['start'];
				}
				if($end[1] == '00:00:00'){
					$end = $end[0];
				}else{
					$end = $event['end'];
				}
			?>
				{
					id: '<?php echo $event['id']; ?>',
					title: '<?php echo $event['title']; ?>',
					start: '<?php echo $start; ?>',
					end: '<?php echo $end; ?>',
					color: '<?php echo $event['color']; ?>',
				},
			<?php endforeach; ?>
			]
		});
		
		
	});

</script>

  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>
 
</body>
</html>