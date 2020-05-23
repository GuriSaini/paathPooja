<!DOCTYPE html>
<html lang="en">
<?php
include('config.php');
session_start();
$p_id=$_GET['id'];
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
  
  <script src="js/sweetalert.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
<!-- <link href="css/calender.css" rel="stylesheet">
<script src="js/calender.js" type="text/javascript" charset="utf-8" async defer></script> -->
  

</head>

<body>

  <!-- Navigation -->
  <?php include('navbar.php'); ?>
  <h5>Sample Page Design</h5>
  <!-- Page Content -->
  <div class="container">
  
    <?php
    $querypooja="SELECT * FROM `pooja` WHERE `p_id`='$p_id'";
    mysqli_set_charset($connection,'utf8');
    $resultpooja=mysqli_query($connection,$querypooja);
    while($row=mysqli_fetch_array($resultpooja)){
      echo '<h1 class="my-4 default-text"><center>'.$row['p_name'].'</center></h1>';
      echo'<a href="checkDate.php?id='.$row['p_id'].'"><button type="button" class="btn btn-custom" onclick="myFunction()">Check Date</button></a>';
    ?>
      
    <?php
    }
    ?>
    <hr>
    <nav aria-label="breadcrumb" class="">
      <ol class="breadcrumb custom-breadcum">
        <li class="breadcrumb-item logo1" ><a href="index.php">Home</a></li>
        <li class="breadcrumb-item logo1" aria-current="page">Pooja</li>
      </ol>
    </nav>
    <h4>विवरण</h4>
    <p>रुद्र भगवान शिव का एक प्रसिद्ध नाम है। रुद्राभिषेक में शिवलिंग को पवित्र स्नान कराकर पूजा और अर्चना की जाती है। यह हिंदू धर्म में पूजा के सबसे शक्तिशाली रूपों में से एक है और माना जाता है कि इससे भक्तों को समृद्धि और शांति के साथ आशीर्वाद मिलता और कई जन्मों के पाप नष्ट हो जाते हैं। शिव को अत्यंत उदार भगवान माना जाता है और यह आसानी से प्रसन्न हो जाते हैं।</p>
    <h4>रूद्राभिषेक का लाभ,उद्देश्य और महत्ता</h4>
    <p>कुछ धर्मग्रंथों का कहना है कि रुद्राभिषेक किसी व्यक्ति के जीवन काल में केवल एक बार एक किया जाता है। जब कोई व्यक्ति आध्यात्मिक प्रगति या समस्याओं और कठिनाइयों से राहत का भूमिगत लाभ चाहता है, तो रूद्राभिषेक किया जा सकता है। यह विश्वास किया जाता जाता है कि रुद्र अभिषेक, जन्मकुंडली में शनि से पीड़ित परेशानी का सामना कर रहे लोगों की रक्षा करता है। प्रक्रिया बहुत विस्तृत है और इसे सावधानीपूर्वक व्यवस्थित करने की जरूरत होती है। हालांकि, शास्त्रों का ज्ञान इतना महत्वपूर्ण नहीं है क्योंकि भगवान शिव आसानी से कमियों को माफ कर देते हैं और केवल व्यक्ति द्वारा की गई पूजा के पीछे उसके अच्छे इरादे और भक्ति को देखते हैं। रूद्राभिषेक परिवार में शांति, खुशी, धन और सफलता प्रदान करता है</p>
    <h4>रुद्राभिषेक हेतु पुजन सामग्रियां</h4>
    <p>धूप बत्ती (अगरबत्ती), कपू र, केसर, चंदन, यज्ञोपवीत 5, कुंकु, चावल, अबीर, गुलाल, अभ्रक, हल्दी, आभूषण, नाड़ा, रुई, रोली, सिंदूर, सुपारी, पान के पत्ते, पुष्पमाला, कमलगट्टे-, तुलसीमाला, धनिया खड़ा, सप्तमृत्तिका, सप्तधान्य, कुशा व दूर्वा, पंच मेवा, गंगाजल, शहद (मधु), शकर, घृत (शुद्ध घी), दही, दूध, ऋतुफल, नैवेद्य या मिष्ठान्न , (पेड़ा, मालपुए इत्यादि), इलायची (छोटी), लौंग मौली, इत्र की शीशी, सिंहासन (चौकी, आसन), पंच पल्लव, (बड़, गूलर, पीपल, आम और पाकर के पत्ते), पंचामृत, तुलसी दल, केले के पत्ते , (यदि उपलब्ध हों तो खंभे सहित), औषधि, (जटामॉसी, शिलाजीत आदि), श्रीकृष्ण का पाना (अथवा मूर्ति) , गणेशजी की मूर्ति, अम्बिका की मूर्ति, श्रीकृष्ण को अर्पित करने हेतु वस्त्र, गणेशजी को अर्पित करने हेतु वस्त्र, अम्बिका को अर्पित करने हेतु वस्त्र, जल कलश (तांबे या मिट्टी का), सफेद कपड़ा (आधा मीटर), लाल कपड़ा (आधा मीटर), पंच रत्न (सामर्थ्य अनुसार), दीपक, बड़े दीपक के लिए तेल, बन्दनवार, ताम्बूल (लौंग लगा पान का बीड़ा), श्रीफल (नारियल), धान्य (चावल, गेहूँ), पुष्प (गुलाब एवं लाल कमल), एक नई थैली में हल्दी की गाँठ, खड़ा धनिया व दूर्वा आदि, अर्घ्य पात्र सहित अन्य सभी पात्र।</p>
    <a href="checkDate.php?id=$row['p_id']"><button type="button" class="btn btn-custom" onclick="myFunction()">Check Date</button></a>
  </div>

  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
<!-- CheckDATE JS SECTION -->
<!-- <script>
function myFunction() {
 Swal.fire({
  html:'<div id="calendar"></div>',
  
});
 poojaDate();
}

</script> -->
</html>
