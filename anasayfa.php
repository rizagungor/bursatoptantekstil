			  <?php 

$seviye=array(1,2,3,4,5,6,7,8,9,10);

		if (!isset($_SESSION)) {session_start();}

		$seviyem=$_SESSION['MM_seviye'];

		$kadim=$_SESSION['MM_kadi'];

		$tittle="Anasayfa";

		if(seviyeKontrol($seviye,$seviyem)==0){

		$_SESSION['MM_seviye'] = NULL;

		$_SESSION['MM_kadi'] = NULL;

		unset($_SESSION['MM_seviye']);

		unset($_SESSION['MM_kadi']);

		header("Location:giris");

		}



include_once("ansayfaust.php");



?>	



 <div class="st-content">







        <!-- extra div for emulating position:fixed of the menu -->



        <div class="st-content-inner">







          <nav class="navbar navbar-subnav navbar-static-top margin-bottom-none" role="navigation">



            <div class="container-fluid">



              <!-- Brand and toggle get grouped for better mobile display -->



              <div class="navbar-header">



                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subnav">



                  <span class="sr-only">Toggle navigation</span>



                  <span class="fa fa-ellipsis-h"></span>



                </button>



              </div>







              <!-- Collect the nav links, forms, and other content for toggling -->



              <div class="collapse navbar-collapse" id="subnav">



                <ul class="nav navbar-nav ">



                  <li class="active"><a href="index.html"><i class="fa fa-fw icon-ship-wheel"></i> Timeline</a></li>



                  <li><a href="user-public-profile.html"><i class="fa fa-fw icon-user-1"></i> About</a></li>



                  <li><a href="user-public-users.html"><i class="fa fa-fw fa-users"></i> Friends</a></li>



                </ul>



                <ul class="nav navbar-nav hidden-xs navbar-right ">



                  <li><a href="#" data-toggle="chat-box">Chat <i class="fa fa-fw fa-comment-o"></i></a></li>



                </ul>



              </div>



              <!-- /.navbar-collapse -->



            </div>







          </nav>



          <div class="cover overlay cover-image-full height-300-lg">







            <img src="/assets/th/images/profile-cover.jpg" alt="cover" />



            <div class="overlay overlay-full">



              <div class="v-top">



                <a href="#" class="btn btn-cover"><i class="fa fa-pencil"></i></a>



              </div>



            </div>



          </div>







          







        </div>



        <!-- /st-content-inner -->







      </div>	



      		  



      		  <?php 



include_once("ansayfaalt.php");



?>		  		  		  		  		  		  		  		  		  		  		  		  		  		  		  		  		  		  		  		  		  		  		  		  		  		  		  		  		  		  		  		  		  		  