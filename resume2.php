<?php 
    require "common/header.php";
?>
    <title>Opportunities A Mega Job Board Template</title>

<?php

require_once 'connection.php';
$userId=2;


?>


<?php 
if(isset($_POST['post'])&&isset($_POST['companyname'])&&isset($_POST['from'])&&isset($_POST['to'])&&isset($_POST['describe']))
{
    if(!empty($_POST['post']&&$_POST['companyname']&&$_POST['from']&&$_POST['to']&&$_POST['describe']))
{   $numberofcompany=$_POST['companynumber'];
    $companyname=$_POST['companyname'];
    $post=$_POST['post'];
    $from=$_POST['from'];
    $to=$_POST['to'];
    $describe=$_POST['describe'];
    $sql1="UPDATE `resume` SET `post` = '$post'  WHERE `resume`.`resumeid` = '$userId'";
    $result1=mysqli_query($con,$sql1);
    $quer="UPDATE `resume` SET `numberofcompany` = '$numberofcompany' WHERE `resume`.`resumeid` = '$userId'";
    $re=mysqli_query($con,$quer);
   // $sql3="UPDATE `resume` SET `companynumber` = '3' WHERE `resume`.`resumeid` = 2";
    //$result3=mysqli_query($con,$sql3);

    $sql2="INSERT INTO `expereince` (`resumeid`,`companyname`, `post`, `fromdate`, `todate`, `describtion`) VALUES ('$userId','$companyname', '$post', '$from', '$to', '$describe')";
    $result2=mysqli_query($con,$sql2);
}


}

if(isset($_POST['post2'])&&isset($_POST['companyname2'])&&isset($_POST['from2'])&&isset($_POST['to2'])&&isset($_POST['describe2']))
{
    if(!empty($_POST['post2']&&$_POST['companyname2']&&$_POST['from2']&&$_POST['to2']&&$_POST['describe2']))
{   
    $companyname=$_POST['companyname2'];
    $post=$_POST['post2'];
    $from=$_POST['from2'];
    $to=$_POST['to2'];
    $describe=$_POST['describe2'];
    
    $sql2="INSERT INTO `expereince` (`resumeid`,`companyname`, `post`, `fromdate`, `todate`, `describtion`) VALUES ('$userId','$companyname', '$post', '$from', '$to', '$describe')";
    $result2=mysqli_query($con,$sql2);
}


}

//third company


if(isset($_POST['post3'])&&isset($_POST['companyname3'])&&isset($_POST['from3'])&&isset($_POST['to3'])&&isset($_POST['describe3']))
{
    if(!empty($_POST['post3']&&$_POST['companyname3']&&$_POST['from3']&&$_POST['to3']&&$_POST['describe3']))
{   
    $companyname=$_POST['companyname3'];
    $post=$_POST['post3'];
    $from=$_POST['from3'];
    $to=$_POST['to3'];
    $describe=$_POST['describe3'];
    
    $sql2="INSERT INTO `expereince` (`resumeid`,`companyname`, `post`, `fromdate`, `todate`, `describtion`) VALUES ('$userId','$companyname', '$post', '$from', '$to', '$describe')";
    $result2=mysqli_query($con,$sql2);
}


}

if(isset($_POST['schoolname'])&&isset($_POST['percentage']))
{
    if(!empty($_POST['schoolname']&&$_POST['percentage']))
{   
    $schoolname=$_POST['schoolname'];
    $from=$_POST['sfrom'];
    $to=$_POST['sto'];
    $degree=$_POST['degree'];
    $highestdegree=$_POST['highestdegree'];
    $percentage=$_POST['percentage'];
     $sql1="UPDATE `resume` SET `degree` = '$highestdegree'  WHERE `resume`.`resumeid` = '$userId'";
    $result1=mysqli_query($con,$sql1);
   $sql2="INSERT INTO `education` (`resumeid`, `schoolname`, `degree`,`fromdate`, `todate`, `percentage`) VALUES ('$userId', '$schoolname','$degree', '$from', '$to', '$percentage')";
    $result2=mysqli_query($con,$sql2);
}


}



if(isset($_POST['collegename']))
{
    if(!empty($_POST['collegename']))
{   
    $schoolname=$_POST['collegename'];
    $from=$_POST['cfrom'];
    $to=$_POST['cto'];
    $degree=$_POST['cdegree'];
    $percentage=$_POST['gradpercentage'];

    $highestdegree=$_POST['highestdegree'];
     $sql1="UPDATE `resume` SET `degree` = '$highestdegree'  WHERE `resume`.`resumeid` = '$userId'";
    $result1=mysqli_query($con,$sql1);
   $sql3="INSERT INTO `education` (`resumeid`, `schoolname`,`degree`, `fromdate`, `todate`, `percentage`) VALUES ('$userId', '$schoolname', '$degree','$from', '$to', '$percentage')";
    $result3=mysqli_query($con,$sql3);
}


} 

if(isset($_POST['pcollegename']))
{
    if(!empty($_POST['pcollegename']))
{   
    $schoolname=$_POST['pcollegename'];
    $from=$_POST['pfrom'];
    $to=$_POST['pto'];
    $degree=$_POST['pdegree'];
    $percentage=$_POST['pgradpercentage'];
     $highestdegree=$_POST['highestdegree'];
     $sql1="UPDATE `resume` SET `degree` = '$highestdegree'  WHERE `resume`.`resumeid` = '$userId'";
    $result1=mysqli_query($con,$sql1);
   $sql3="INSERT INTO `education` (`resumeid`, `schoolname`,`degree`, `fromdate`, `todate`, `percentage`) VALUES ('$userId', '$schoolname', '$degree','$from', '$to', '$percentage')";
    $result3=mysqli_query($con,$sql3);
}


}




if(isset($_POST['email'])&&isset($_POST['address'])&&isset($_POST['phone']))
{
    if(!empty($_POST['email']&&$_POST['address']&&$_POST['phone']))
{   
    $email=$_POST['email'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $facebook=$_POST['facebook'];
    $linkedin=$_POST['linkedin'];
    $twitter=$_POST['twitter'];
    $aboutme=$_POST['aboutme'];
     $sql1="UPDATE `resume` SET `email` = '$email', `phone` = '$phone', `address` = '$address', `aboutme` = '$aboutme', `linkedin` = '$linkedin', `facebook` = '$facebook', `twitter` = '$twitter' WHERE `resume`.`resumeid` = '$userId'";
    $result1=mysqli_query($con,$sql1);
   
}


}



if(isset($_POST['dskill']))
{
    if(!empty($_POST['dskill']))
{   
    $skill=$_POST['dskill'];
    $sql="DELETE FROM `skills` WHERE `skill`= '".$skill."'"; 
    $result1=mysqli_query($con,$sql);


}


}










if(isset($_POST['skill'])&&isset($_POST['level']))
{
    if(!empty($_POST['skill']&&$_POST['level']))
{   
    $skill=$_POST['skill'];
    $level=$_POST['level'];
    $sql="INSERT INTO `skills` (`serialno`, `resumeid`, `skill`, `level`) VALUES (NULL, '$userId', '$skill', '$level')";
    $result1=mysqli_query($con,$sql);


}


}


if(isset($_POST['file']))
{
    if(!empty($_POST['file']))
    {

$imagename=$_FILES["file"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['file']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="UPDATE `resume` SET `image`='$imagename' WHERE `resume`.`resumeid`='$userId'";
echo "voila";

mysql_query($insert_image);

    }
}



?>



    </head>
    <!-- FOR NAVBAR & BLACK STRIP ON TOP  -->

    <?php require "common/navbar.php" ;  ?>

        <section class="job-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7 co-xs-12 text-left">
                        <h3>Candidate Resume</h3>
                    </div>
                    <div class="col-md-6 col-sm-5 co-xs-12 text-right">
                        <div class="bread">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a> </li>
                                <li class="active">resume</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="resume2 resume7">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                        <div class="col-md-3 col-sm-5 col-xs-12">
                            <div class="profile-photo" ><a data-toggle='modal' data-target='#profilepic'><img src="images/users/14.jpg" alt="" class="img-responsive"></a></div>
                            <div class="resume-social">
                                <ul class="social-network social-circle onwhite">

                                                                      <?php

$sql1="SELECT * FROM `resume` WHERE `resume`.`resumeid` = '$userId' AND `facebook` IS NULL ";
$result1=mysqli_query($con,$sql1);
$norows=mysqli_num_rows($result1);
if ($norows==1) {
    echo "<li><a href='#' class='icoFacebook' title='Facebook'><i class='fa fa-facebook'></i></a></li>";
 } else
 {

$sql1="SELECT * FROM `resume` WHERE `resume`.`resumeid` = '$userId'";

$result1=mysqli_query($con,$sql1);

$norows=mysqli_num_rows($result1);
while($row=mysqli_fetch_array($result1)){echo "<li><a href='".$row['facebook']."' class='icoFacebook' title='Facebook'><i class='fa fa-facebook'></i></a></li>";}



 }

?>

                                                                      <?php

$sql1="SELECT * FROM `resume` WHERE `resume`.`resumeid` = '$userId' AND `twitter` IS NULL ";
$result1=mysqli_query($con,$sql1);

$norows=mysqli_num_rows($result1);
if ($norows==1) {
    echo "<li><a href='#' class='icoTwitter' title='Twitter'><i class='fa fa-twitter'></i></a></li>";
 } else
 {

$sql1="SELECT * FROM `resume` WHERE `resume`.`resumeid` = '$userId'";
$result1=mysqli_query($con,$sql1);

$norows=mysqli_num_rows($result1);
while($row=mysqli_fetch_array($result1)){echo "<li><a href='".$row['twitter']."' class='icoTwitter' title='Twitter'><i class='fa fa-twitter'></i></a></li>";}



 }

?>
                                                                    <?php

$sql1="SELECT * FROM `resume` WHERE `name` = `resume`.`resumeid` = '$userId' AND `email` IS NULL ";
$result1=mysqli_query($con,$sql1);

$norows=mysqli_num_rows($result1);
if ($norows==1) {
    echo "<li><a href='#' class='icoGoogle' title='Google +'><i class='fa fa-google-plus'></i></a></li>";
 } else
 {

$sql1="SELECT * FROM `resume` WHERE `resume`.`resumeid` = '$userId'";
$result1=mysqli_query($con,$sql1);

$norows=mysqli_num_rows($result1);
while($row=mysqli_fetch_array($result1)){echo "<li><a href='".$row['email']."' class='icoGoogle' title='Google +'><i class='fa fa-google-plus'></i></a></li>";}



 }

?>

                                                                    <?php

$sql1="SELECT * FROM `resume` WHERE `resume`.`resumeid` = '$userId' AND `linkedin` IS NULL ";
$result1=mysqli_query($con,$sql1);

$norows=mysqli_num_rows($result1);
if ($norows==1) {
    echo "<li><a href='#' class='icoLinkedin' title='Linkedin +'><i class='fa fa-linkedin'></i></a></li>";
 } else
 {

$sql1="SELECT * FROM `resume` WHERE `resume`.`resumeid` = '$userId'";
$result1=mysqli_query($con,$sql1);

$norows=mysqli_num_rows($result1);
while($row=mysqli_fetch_array($result1)){echo "<li><a href='".$row['linkedin']."' class='icoLinkedin' title='Linkedin +'><i class='fa fa-linkedin'></i></a></li>";}



 }

?>


                                    
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-7 col-xs-12">
                            <div class="profile-info">
                                <h1 class="profile-title">Sophia Ethan</h1>
                                <h2 class="profile-position">
                <?php

$sql1="SELECT * FROM `resume` WHERE `resume`.`resumeid` = '$userId' AND `post` IS NULL ";
$result1=mysqli_query($con,$sql1);

$norows=mysqli_num_rows($result1);
if ($norows==1) {
    echo "<a  data-toggle='modal' data-target='#experience'>ADD EXPERIENCE
          <span class='glyphicon glyphicon-pencil'></span>
        </a>";
 } else
 {

$sql1="SELECT * FROM `resume` WHERE `resume`.`resumeid` = '$userId'";
$result1=mysqli_query($con,$sql1);

$norows=mysqli_num_rows($result1);
while($row=mysqli_fetch_array($result1)){echo $row['post'];}



 }











?>


















                    </h2></div>
                            <ul class="profile-list">
                                <li class="">
                                    <strong class="title">Degree</strong>
                                    <span class="cont">
                                        

                                          <?php

$sql1="SELECT * FROM `resume` WHERE `resume`.`resumeid` = '$userId' AND `degree` IS NULL ";
$result1=mysqli_query($con,$sql1);

$norows=mysqli_num_rows($result1);
if ($norows==1) {
    echo "<a  data-toggle='modal' data-target='#education'>ADD EDUCATIONAL DETAIL
          <span class='glyphicon glyphicon-pencil'></span>
        </a>";
 } else
 {

$sql1="SELECT * FROM `resume` WHERE `resume`.`resumeid` = '$userId'";
$result1=mysqli_query($con,$sql1);

$norows=mysqli_num_rows($result1);
while($row=mysqli_fetch_array($result1)){echo $row['degree'];}



 }











?>



















                                    </span>
                                </li>
                                <li class="">
                                    <strong class="title">E-mail:</strong>
                                    <span class="cont"><a href="">


                                     <?php

$sql1="SELECT * FROM `resume` WHERE `resume`.`resumeid` = '$userId' AND `email` IS NULL ";
$result1=mysqli_query($con,$sql1);
$norows=mysqli_num_rows($result1);
if ($norows==1) {
    echo "<a  data-toggle='modal' data-target='#personal'>ADD PERSONAL DETAIL
          <span class='glyphicon glyphicon-pencil'></span>
        </a>";
 } else
 {

$sql1="SELECT * FROM `resume` WHERE `resume`.`resumeid` = '$userId'";
$result1=mysqli_query($con,$sql1);

$norows=mysqli_num_rows($result1);
while($row=mysqli_fetch_array($result1)){echo $row['email'];}



 }




?>








                                </a></span>
                                </li>
                                <li class="">
                                    <strong class="title">Phone:</strong>
                                    <span class="cont"><a href="tel:+9911154849901">
                                        
                                     <?php

$sql1="SELECT * FROM `resume` WHERE `resume`.`resumeid` = '$userId' AND `phone` IS NULL ";
$result1=mysqli_query($con,$sql1);
$norows=mysqli_num_rows($result1);
if ($norows==1) {
    echo "<a  data-toggle='modal' data-target='#personal'>ADD PERSONAL DETAIL
          <span class='glyphicon glyphicon-pencil'></span>
        </a>";
 } else
 {

$sql1="SELECT * FROM `resume` WHERE `resume`.`resumeid` = '$userId'";
$result1=mysqli_query($con,$sql1);

$norows=mysqli_num_rows($result1);
while($row=mysqli_fetch_array($result1)){echo $row['phone'];}



 }




?>






                                    </a></span>
                                </li>
                                <li class="">
                                    <strong class="title">Address:</strong>
                                    <span class="cont">


                                     <?php

$sql1="SELECT * FROM `resume` WHERE `resume`.`resumeid` = '$userId' AND `address` IS NULL ";
$result1=mysqli_query($con,$sql1);
$norows=mysqli_num_rows($result1);
if ($norows==1) {
    echo "<a  data-toggle='modal' data-target='#personal'>ADD PERSONAL DETAIL
          <span class='glyphicon glyphicon-pencil'></span>
        </a>";
 } else
 {

$sql1="SELECT * FROM `resume` WHERE `resume`.`resumeid` = '$userId'";
$result1=mysqli_query($con,$sql1);

$norows=mysqli_num_rows($result1);
while($row=mysqli_fetch_array($result1)){echo $row['address'];}



 }




?>







                                     </span>
                                </li>
                                <li class="skills">
                                                        <?php

$sql1="SELECT * FROM `skills` WHERE `skills`.`resumeid` = '$userId' ";
$result1=mysqli_query($con,$sql1);
$norows=mysqli_num_rows($result1);

while($row=mysqli_fetch_array($result1)){echo "<a href=''>".$row['skill']."</a>";}





?>
                                        

<a  data-toggle='modal' data-target='#skills'>ADD SKILLS
          <span class='glyphicon glyphicon-pencil'></span>
        </a>

<a  data-toggle='modal' data-target='#deleteskills'>DELETE SKILLS
          <span class='glyphicon glyphicon-pencil'></span>
        </a>











                                    
                                </li>
                            </ul>
                            <!--<h4><strong> About Me:</strong></h4>

                            -->
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <div class="heading-inner">
                                <p class="title">About Me:</p>
                            </div>
                         

                                     <?php

$sql1="SELECT * FROM `resume` WHERE `resume`.`resumeid` = '$userId' AND `aboutme` IS NULL ";
$result1=mysqli_query($con,$sql1);
$norows=mysqli_num_rows($result1);
if ($norows==1) {
    echo "<a  data-toggle='modal' data-target='#personal'>ADD PERSONAL DETAIL
          <span class='glyphicon glyphicon-pencil'></span>
        </a>";
 } else
 {

$sql1="SELECT * FROM `resume` WHERE `resume`.`resumeid` = '$userId'";
$result1=mysqli_query($con,$sql1);

$norows=mysqli_num_rows($result1);
while($row=mysqli_fetch_array($result1)){echo $row['aboutme'];}



 }




?>

                        </div>



                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="resume-box">
                                <div class="heading-inner">
                                    <p class="title">Educational Information</p>
                                </div>
                                

<?php


          $sql4="SELECT `degree` FROM `resume` WHERE `resume`.`resumeid` = '$userId'";                   
$r=mysqli_query($con,$sql4);
$n=mysqli_fetch_array($r);
    $k=$n['degree'];
    $m=0;
    if($k=='highschool')
    {$m=1;}
    else if($k=='graduate'){$m=2;}
    else if($k=='postgraduate'){$m=3;} 


    if($m>0){
    $sql5="SELECT * FROM `education` WHERE `resumeid` = '$userId'";
    $result5=mysqli_query($con,$sql5);
    }

    while($m>0)
{$row=mysqli_fetch_array($result5);$m--;
    echo '

                                <div class="row education-box">
                                    <div class="col-md-4 col-xs-12 col-sm-4">
                                        <div class="resume-icon">
                                            <span class="icon-clipboard"></span>
                                        </div>
                                        <div class="insti-name">
                                            <h4>'.$row['schoolname'].'</h4>
                                            <span>'.$row['fromdate'].' to '.$row['todate'].'</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-8 col-sm-8">
                                        <div class="degree-info">
                                            <h4>'.$row['degree'].'</h4>
                                            <p>Passing %='.$row['percentage'].'</p>
                                        </div>
                                    </div>
                                </div> ';}?>
                          <a  data-toggle='modal' data-target='#education'>ADD MORE EDUCATION
          <span class='glyphicon glyphicon-pencil'></span>
        </a>
                            
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="resume-box">
                                <div class="heading-inner">
                                    <p class="title">Work Experience</p>
                                </div>
                   <?php 
          $sql4="SELECT `numberofcompany` FROM `resume` WHERE `resume`.`resumeid` = '$userId'";                   
$r=mysqli_query($con,$sql4);
$n=mysqli_fetch_array($r);
$e=0;
$getcompany=[];
    $k=$n['numberofcompany']; 

    if($k>0){
    $sql5="SELECT * FROM `expereince` WHERE `resumeid` = '$userId'";
    $result5=mysqli_query($con,$sql5);
    }
                             while($k){$row=mysqli_fetch_array($result5);
                                $getcompany[$e]=$row['companyname'];
                                $e++;


                             echo '         <div class="row education-box">
                                    <div class="col-md-4 col-xs-12 col-sm-4">
                                        <div class="resume-icon">
                                            <span class="icon-pencil"></span>
                                        </div>
                                        <div class="insti-name">
                                            <h4>'.$row['companyname'].'</h4>
                                            <span>'.$row['fromdate'].' to '.$row['todate'].'</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-8 col-sm-8">
                                        <div class="degree-info">
                                            <h4>'.$row['post'].'</h4>
                                            <p>'.$row['describtion'].'</p>
                                        </div>
                                    </div>
                                </div>';

                                $k--;
}        

?>
                                <!--
                                <div class="row education-box">
                                    <div class="col-md-4 col-xs-12 col-sm-4">
                                        <div class="resume-icon">
                                            <span class="icon-expand"></span>
                                        </div>
                                        <div class="insti-name">
                                            <h4>Lhr Software house</h4>
                                            <span>2008 to 2010</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-8 col-sm-8">
                                        <div class="degree-info">
                                            <h4>Intern</h4>
                                            <p>Lesed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh. Excepteur sint occaecat cupidatat non proident. </p>
                                        </div>
                                    </div>
                                </div> --><a  data-toggle='modal' data-target='#experience'>ADD MORE EXPERIENCE
          <span class='glyphicon glyphicon-pencil'></span>
        </a>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="heading-inner">
                                <p class="title">Skills That I have</p>
                            </div>
                            <div class="row">

                                                      <?php

$sql1="SELECT * FROM `skills` WHERE `skills`.`resumeid` = '$userId'";
$result1=mysqli_query($con,$sql1);
$norows=mysqli_num_rows($result1);

while($row=mysqli_fetch_array($result1)){



                                     echo ' 
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="progress"> <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: '.$row['level'].'%;">
                                            <span class="sr-only">'.$row['skill'].'% Complete</span>
                                        </div>
                                        <span class="progress-type">'.$row['skill'].'</span>
                                        <span class="progress-completed">'.$row['level'].'%</span>
                                    </div>
                                    
                                </div> ';}?>
                    <!--           <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete (info)</span>
                                        </div>
                                        <span class="progress-type">Java</span>
                                        <span class="progress-completed">20%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                            <span class="sr-only">85% Complete (warning)</span>
                                        </div>
                                        <span class="progress-type">JavaScript / jQuery</span>
                                        <span class="progress-completed">85%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                        <span class="progress-type">CSS / CSS3</span>
                                        <span class="progress-completed">80%</span>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </section>

        <!--- required for SUB-FOOTER PAGE and FOOTER   -->
        <?php require "common/footer.php" ; ?>

            <!--- Footer ends   -->

            <!-- JAVASCRIPT JS  -->
            <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

            <!-- JAVASCRIPT JS  -->
            <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

            <!-- BOOTSTRAP CORE JS -->
            <script type="text/javascript" src="js/bootstrap.min.js"></script>

            <!-- JQUERY SELECT -->
            <script type="text/javascript" src="js/select2.min.js"></script>
            <!-- MEGA MENU -->
            <script type="text/javascript" src="js/mega_menu.min.js"></script>

            <!-- JQUERY COUNTERUP -->
            <script type="text/javascript" src="js/counterup.js"></script>

            <!-- JQUERY WAYPOINT -->
            <script type="text/javascript" src="js/waypoints.min.js"></script>

            <!-- JQUERY REVEAL -->
            <script type="text/javascript" src="js/footer-reveal.min.js"></script>

            <!-- Owl Carousel -->
            <script type="text/javascript" src="js/owl-carousel.js"></script>

            <!-- CORE JS -->
            <script type="text/javascript" src="js/custom.js"></script>

            </div>


<!-- Modal -->

<div class="modal fade" id="experience" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock "></span> experience details</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div class="form-group">
              <label for="usrname" class="modcnt"><span class="glyphicon glyphicon-user"></span>number of company you worked in total</label>
              <input type="text" class="form-control" id="companynumber" placeholder="total number of companies you worked" name="companynumber">
            </div>
                 
             
             <div class="firstcompany" data-index="1">
              <h1 style="text-align:center;">detail of your first work</h1>
            <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>company name</label>
              <input type="text" class="form-control" id="companyname" placeholder="company name" value="<?php echo $getcompany[0];?>" name="companyname">
            </div>
               
               <div class="form-group ">
              <label  class="modcnt"><span class="glyphicon glyphicon-user"></span>post</label>
              <input type="text" class="form-control" id="post" placeholder="post" name="post">
            </div>


            <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>From</label>
              <input type="text" class="form-control" id="from" placeholder="from" name="from">
            </div>
            
            <div class="form-group ">
              <label  class="modcnt"><span class="glyphicon glyphicon-user"></span>To</label>
              <input type="text" class="form-control" id="to" placeholder="to" name="to">
            </div>

            <div class="form-group ">
              <label for="usrname" class="modcnt"><span class="glyphicon glyphicon-user"></span>Describe</label>
              <input type="text" class="form-control" id="describe" placeholder="describe your work" name="describe">
            </div>



            </div>
             



             <div class="firstcompany" data-index="2">
              <h1 style="text-align:center;">detail of your second work</h1>
            <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>company name</label>
              <input type="text" class="form-control" id="companyname2" placeholder="company name" name="companyname2">
            </div>
               
               <div class="form-group ">
              <label  class="modcnt"><span class="glyphicon glyphicon-user"></span>post</label>
              <input type="text" class="form-control" id="post2" placeholder="post" name="post2">
            </div>


            <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>From</label>
              <input type="text" class="form-control" id="from2" placeholder="from" name="from2">
            </div>
            
            <div class="form-group ">
              <label  class="modcnt"><span class="glyphicon glyphicon-user"></span>To</label>
              <input type="text" class="form-control" id="to2" placeholder="to" name="to2">
            </div>

            <div class="form-group ">
              <label for="usrname" class="modcnt"><span class="glyphicon glyphicon-user"></span>Describe</label>
              <input type="text" class="form-control" id="describe2" placeholder="describe your work" name="describe2">
            </div>



            </div>  


             <div class="firstcompany" data-index="3">
              <h1 style="text-align:center;">detail of your third work</h1>
            <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>company name</label>
              <input type="text" class="form-control" id="companyname3" placeholder="company name" name="companyname3">
            </div>
               
               <div class="form-group ">
              <label  class="modcnt"><span class="glyphicon glyphicon-user"></span>post</label>
              <input type="text" class="form-control" id="post3" placeholder="post" name="post3">
            </div>


            <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>From</label>
              <input type="text" class="form-control" id="from3" placeholder="from" name="from3">
            </div>
            
            <div class="form-group ">
              <label  class="modcnt"><span class="glyphicon glyphicon-user"></span>To</label>
              <input type="text" class="form-control" id="to3" placeholder="to" name="to3">
            </div>

            <div class="form-group ">
              <label for="usrname" class="modcnt"><span class="glyphicon glyphicon-user"></span>Describe</label>
              <input type="text" class="form-control" id="describe3" placeholder="describe your work" name="describe3">
            </div>



            </div>  


               <div class="firstcompany" data-index="4">
              <h1 style="text-align:center;">detail of your fourth work</h1>
            <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>company name</label>
              <input type="text" class="form-control" id="companyname4" placeholder="company name" name="companyname4">
            </div>
               
               <div class="form-group ">
              <label  class="modcnt"><span class="glyphicon glyphicon-user"></span>post</label>
              <input type="text" class="form-control" id="post4" placeholder="post" name="post4">
            </div>


            <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>From</label>
              <input type="text" class="form-control" id="from4" placeholder="from" name="from4">
            </div>
            
            <div class="form-group ">
              <label  class="modcnt"><span class="glyphicon glyphicon-user"></span>To</label>
              <input type="text" class="form-control" id="to4" placeholder="to" name="to4">
            </div>

            <div class="form-group ">
              <label for="usrname" class="modcnt"><span class="glyphicon glyphicon-user"></span>Describe</label>
              <input type="text" class="form-control" id="describe4" placeholder="describe your work" name="describe4">
            </div>



            </div>  
          
          





              <button type="submit" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> SUBMIT</button>
          </form>
        </div>
      </div>
      
    </div>
  </div>








<!-- Modal -->

<div class="modal fade" id="education" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock "></span> education details</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div class="form-group">
              <label for="usrname" class="modcnt"><span class="glyphicon glyphicon-user"></span>highest degree</label>
              <select type="select" class="form-control" id="highestdegree" placeholder="highest degree" name="highestdegree">
                <option value="none">none</option>
                <option value="highschool">high school passed</option>
                <option value="graduate">graduate</option>
                <option value="postgraduate">postgraduate</option></select>
            </div>
                 
             
             <div class="degree" data-index="1" id="highschool">
              <h1 style="text-align:center;">highschool details</h1>
            <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>school name</label>
              <input type="text" class="form-control" id="schoolname" placeholder="school name" name="schoolname">
            </div>
               
              <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>Degree</label>
              <input type="text" class="form-control" id="degree" placeholder="degree" name="degree">
            </div>

            <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>From</label>
              <input type="text" class="form-control" id="sfrom" placeholder="from" name="sfrom">
            </div>
            
            <div class="form-group ">
              <label  class="modcnt"><span class="glyphicon glyphicon-user"></span>To</label>
              <input type="text" class="form-control" id="sto" placeholder="to" name="sto">
            </div>

            <div class="form-group ">
              <label for="usrname" class="modcnt"><span class="glyphicon glyphicon-user"></span>Percentage</label>
              <input type="text" class="form-control" id="percentage" placeholder=" (if gpa convert it into %)" name="percentage">
            </div>



            </div>




            <div class="degree" data-index="1" id="graduation">
              <h1 style="text-align:center;">graduation details</h1>
            <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>college name</label>
              <input type="text" class="form-control" id="collegename" placeholder="college name" name="collegename">
            </div>
               
            <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>Degree</label>
              <input type="text" class="form-control" id="cdegree" placeholder="degree" name="cdegree">
            </div>

            <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>From</label>
              <input type="text" class="form-control" id="cfrom" placeholder="from" name="cfrom">
            </div>
            
            <div class="form-group ">
              <label  class="modcnt"><span class="glyphicon glyphicon-user"></span>To</label>
              <input type="text" class="form-control" id="cto" placeholder="to" name="cto">
            </div>

            <div class="form-group ">
              <label for="usrname" class="modcnt"><span class="glyphicon glyphicon-user"></span>percentage</label>
              <input type="text" class="form-control" id="gradpercentage" placeholder=" (if gpa convert it into %)" name="gradpercentage">
            </div>



            </div>



             <div class="degree" data-index="1" id="postgraduation">
              <h1 style="text-align:center;">post graduation details</h1>
            <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>college name</label>
              <input type="text" class="form-control" id="pcollegename" placeholder="college name" name="pcollegename">
            </div>
               
            <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>Degree</label>
              <input type="text" class="form-control" id="pdegree" placeholder="pdegree" name="pdegree">
            </div>

            <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>From</label>
              <input type="text" class="form-control" id="pfrom" placeholder="from" name="pfrom">
            </div>
            
            <div class="form-group ">
              <label  class="modcnt"><span class="glyphicon glyphicon-user"></span>To</label>
              <input type="text" class="form-control" id="pto" placeholder="to" name="pto">
            </div>

            <div class="form-group ">
              <label for="usrname" class="modcnt"><span class="glyphicon glyphicon-user"></span>percentage</label>
              <input type="text" class="form-control" id="pgradpercentage" placeholder=" (if gpa convert it into %)" name="pgradpercentage">
            </div>



            </div>
             
             



                   





              <button type="submit" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> SUBMIT</button>
          </form>
        </div>
      </div>
      
    </div>
  </div> 


<div class="modal fade" id="personal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock "></span> Personal details</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            
                 
             <div class="personaldetails" data-index="1" id="personaldetails">
              <h1 style="text-align:center;">Contact details</h1>
            <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>EMAIL</label>
              <input type="email" class="form-control" id="email" placeholder="email" name="email">
            </div>
               
              <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>Phone Number</label>
              <input type="text" class="form-control" id="phone" placeholder="phone number" name="phone">
            </div>

            <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>Address</label>
              <input type="text" class="form-control" id="address" placeholder="address" name="address">
            </div>
            
            <div class="form-group ">
              <label  class="modcnt"><span class="glyphicon glyphicon-user"></span>Linkedin</label>
              <input type="text" class="form-control" id="linkedin" placeholder="linkedin link" name="linkedin">
            </div>

            <div class="form-group ">
              <label for="usrname" class="modcnt"><span class="glyphicon glyphicon-user"></span>facebook</label>
              <input type="text" class="form-control" id="facebook" placeholder="facebook link" name="facebook">
            </div>
            <div class="form-group ">
              <label for="usrname" class="modcnt"><span class="glyphicon glyphicon-user"></span>Twitter</label>
              <input type="text" class="form-control" id="twitter" placeholder="twitter link" name="twitter">
            </div>
              <div class="form-group ">
              <label for="usrname" class="modcnt"><span class="glyphicon glyphicon-user"></span>About me</label>
              <input type="text" class="form-control" id="aboutme" placeholder="amout yourself" name="aboutme">
            </div>



            </div>





             
             



                   





              <button type="submit" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> SUBMIT</button>
          </form>
        </div>
      </div>
      
    </div>
  </div> 




<div class="modal fade" id="skills" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock "></span> Personal details</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            
                 
             
              
            <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>skill name</label>
              <input type="text" class="form-control" id="skill" placeholder="skill name" name="skill">
            </div>
               <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>efficiency</label>
              <input type="text" class="form-control" id="level" placeholder="efficiency (between 1 to 100)" name="level">
            </div>
             
              

              <button type="submit" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> SUBMIT</button>
          </form>
        </div>
      </div>
      
    </div>
  </div> 

<div class="modal fade" id="deleteskills" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock "></span> Personal details</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            
                 
             
              
            <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>skill you want to delete</label>
              <input type="text" class="form-control" id="dskill" placeholder="skill to be deleted" name="dskill">
            </div>
             
              

              <button type="submit" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-off"></span>DELETE</button>
          </form>
        </div>
      </div>
      
    </div>
  </div> 


<!--profilepiv-->

<div class="modal fade" id="profilepic" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock "></span> Profile PICTURE</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            
                 
             
              
            <div class="form-group ">
              <label class="modcnt"><span class="glyphicon glyphicon-user"></span>change profile picture</label>
              <input type="file"  id="file" placeholder="choose" name="file">
            </div>
             
              

              <button type="submit" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-off"></span>DELETE</button>
          </form>
        </div>
      </div>
      
    </div>
  </div> 












<script type="text/javascript">


var x=document.getElementsByClassName("firstcompany");
    $(".firstcompany").hide();
    $(".degree").hide();
        $("#companynumber").keyup(function(){
            var y=$(this).val();
        
for(var i=0;i<y;i++){
x[i].style.display='block';
    }
    });

$("#highestdegree").change(function(){var z=$(this).val();if(z=="highschool"){$('#highschool').show();}

else if(z=="graduate"){$('#highschool').show();$('#graduation').show();} 
else if(z=="postgraduate"){$('#highschool').show();$('#graduation').show();$('#postgraduation').show();}
});

</script>




<!--educational information -->












            </body>

            </html>






