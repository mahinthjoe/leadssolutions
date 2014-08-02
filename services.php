<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Leads Solutions - Services</title>
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/mystyles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="services">
    <?php include_once("analyticstracking.php") ?>
      <section class="container">
      <?php include "_/components/php/header.php"; ?>
      <div class="content row">
       <section class="main col col-lg-12">
        
        <div class="tabbable"> <!-- Only required for left/right tabs -->
        <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" data-toggle="tab">Product Development</a></li>
        <li><a href="#tab2" data-toggle="tab">Consultancy</a></li>
        <li><a href="#tab3" data-toggle="tab">Manpower</a></li>
        <li><a href="#tab4" data-toggle="tab">Testing &amp; Certification</a></li>
        <li><a href="#tab5" data-toggle="tab">Others</a></li>
        </ul>
        <div class="tab-content">
        <div class="tab-pane active" id="tab1">
        <p><h2>Product Development</h2>
        <p>We offer turnkey services that range the complete product life cycle, in both Mechanical and Avionics domains. Our services include</p>       
          <li>Conceptualization of Product  &amp; Systems</li>
          <li>Design Analysis <img src="images/1.jpg" class="pull-right" alt="System Design Analysis"></li>
          <li>Design Development <img src="images/2.jpg"  class="pull-right"  alt="Design Development"></li>
          <li>CAD Migration</li>
          <li>3D modeling <img src="images/3.jpg"  class="pull-right"  alt="3D modeling "></li>
          <li>Prototyping</li>   
          <li>Testing and Validation</li>
          <li>IV &amp; V</li>
          <li>Integration</li>
          <li>Qualification and Certification</li>
        </p>
        </div>
        
        <div class="tab-pane" id="tab3">
        <p><h2>Manpower</h2>
        With our vast experience in aerospace domain we can provide optimized and cost effective solutions in terms of manpower to customer’s requirement in Engineering Services, Product Design, Testing &amp; Certification and Aircraft Maintenance.</p>
        </div>
        
        <div class="tab-pane" id="tab2">
          <h2>Consultancy</h2>
            <ul>
              <li>Aircraft Modification &amp; Integration</li>
              <li>Aircraft Maintenance and Operations</li>
              <li>Qualification, Testing and Certification</li> 
              <li>Offset Process &amp; Identification of right IOP’s for OEMs.</li>
              <li>Avionics – Design &amp; Development of subsystems <img src="images/4.jpg" class="pull-right" alt="Avionics – Design &amp; Development of  subsystems"></li>
              <li>CFD – Meshing &amp; Analysis <img src="images/6-1.jpg" class="pull-right" alt="CFD – Meshing &amp; Analysis"/></li> 
              <li>Aero Structures <img src="images/5.jpg" class="pull-right" alt="Aero Structures"></li>
              <li>Technical Publications &amp; Documentation <img src="images/7.jpg" class="pull-right"  alt="Technical Publications &amp; Documentation"></li>
            </ul>
        </div>
        <div class="tab-pane" id="tab4">
        <p><h2>Testing &amp; Certification</h2>
        <ul>
          <li>Environmental Testing – MIL 810 F <img src="images/8-1.jpg" class="pull-right" alt="Environmental Testing"><img src="images/8-2.jpg" class="pull-right" alt="Environmental Testing"></li>
          <li>EMI /EMC Testing<img src="images/9-1.jpg" class="pull-right" alt="Environmental Testing"><img src="images/9-2.jpg" class="pull-right" alt="Environmental Testing"></li>
          <li>Certification Testing</li>
        </ul>
        </div>
        <div class="tab-pane" id="tab5">
        <h2>Others</h2>
        <ul>
          <li>Avionic Boxes - <img src="images/10.jpg" class="pull-right" alt="Avionic Boxes"><img src="images/10-1.jpg" class="pull-right" alt="Avionic Boxes"></li>
          <li>Automated Test Equipments <img src="images/11-1.jpg" class="pull-right" alt="Automated Test Equipment"><img src="images/11-2.jpg" class="pull-right" alt="Automated Test Equipment"></li>
          <li>Avionic Rack Integration    - <img src="images/12.jpg" class="pull-right" alt="Avionic Rack Integration"></li>
          <li>Wire Harness        <img src="images/13-1.jpg" class="pull-right" alt="Wiring Harness"><img src="images/13-2.jpg" class="pull-right" alt="Wiring Harness"></li>
        </ul>
        </div>
        
        </div>
        </div>
       </section><!-- Main -->
       <!--section class="sidebar col col-lg-4">
       </section><!-- Main -->
      </div>
     <?php include "_/components/php/footer.php"; ?>
    </section><!-- Container -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>
