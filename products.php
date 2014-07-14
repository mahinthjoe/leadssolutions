<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Leads Solutions - Products</title>
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
  <body id="products">
    <?php include_once("analyticstracking.php") ?>
      <section class="container-fluid">
      <?php include "_/components/php/header.php"; ?>
      <div class="content row">
       <section class="main col col-lg-8">
        
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
        <table><tbody><tr><td>
                 <li>Conceptualization of Product  &amp; System 
                Design Analysis <img src="images/1.jpg" alt="System Design Analysis"></li>
                </td><td><li>Design Development <img src="images/2.jpg" alt="Design Development"></li>
                </td></tr>
        <tr><td><li>3D modeling <img src="images/3.jpg" alt="3D modeling "></li>
                </td>
         <td><li>Prototyping</li>   
                <li>Testing and Validation</li>
                <li>Integration</li>
                <li>Qualification and Certification</li>
        </td></tr>
        </tbody></table>
        </p>
        </div>
        
        <div class="tab-pane" id="tab3">
        <p><h2>Manpower</h2>
        With our vast experience in aerospace domain we can provide optimized and cost effective solutions in terms of manpower to customer’s requirement in Engineering Services, Product Design, Testing &amp; Certification and Aircraft Maintenance.</p>
        </div>
        
        <div class="tab-pane" id="tab2">
                      <h2>Consultancy</h2>
                <ul>
                <table>
            <tr>
             <td>
             <li>Avionics – Design &amp; Development of subsystems <img src="images/4.jpg" alt="Avionics – Design &amp; Development of  subsystems">
            </li></td><td>
             <li>CFD – Meshing &amp; Analysis <img src="images/6-1.jpg" alt="CFD – Meshing &amp; Analysis"/></li> 
            </td><td></tr>
            <tr><td>
            <li>Aero Structures <img src="images/5.jpg" alt="Aero Structures"></li>
            </td><td><li>Technical Publications &amp; Documentation <img src="images/7.jpg" alt="Technical Publications &amp; Documentation"></li>
            </td></tr>
            <tr><td>
                <li>Aircraft Modification &amp; Integration</li>
                <li>Aircraft Maintenance and Operations</li>
                 <li>Qualification, Testing and Certification</li> 
                <li>Offset Process &amp; Identification of right IOP’s for OEMs.</li>
            </td></tr>
             </table></ul>
        </div>

        </div>
        </div>
       </section><!-- Main -->
       <section class="sidebar col col-lg-4">
       </section><!-- Main -->
      </div>
    <footer class="row">
    <nav class="col col-lg-12">
      <ul class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li><a href="products.php">Products</a></li>
        </ul><!-- ul -->
      </nav><!-- nav -->
    </footer><!-- footer -->
    </section><!-- Container -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>
