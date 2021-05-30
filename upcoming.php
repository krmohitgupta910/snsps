 <!-- Section About -->
 
    
    <section id="about">
      <div class="container pt-50 pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-lg-6">
              <h3 class="font-28 mt-md-30 mt-0"><span class="text-theme-colored2">Upcoming</span> Events </h3>
              <div class="line-bottom-theme-colored2"></div>
              
                  <?php 
         include_once 'dbfiles/db.php';
            $db=new db();
          $db->connect();
          $res=mysqli_query($db->conn," SELECT * FROM cretevent where status = 1 order by id desc  LIMIT 3");
       
            while($row=mysqli_fetch_array($res))
            {
                  $evtid=$row[0];
                $evt=$row[1];
          ?>
              
              <article>
                <div class="event-small media sm-maxwidth400 bg-silver-light border-1px mt-0 mb-20 p-15">
                  <div class="event-date text-center">
                    <ul class="text-white">
                      <li class="font-18 font-weight-700 border-bottom"><?php  $da=$row[3]; $dat= strtotime($da);   echo date("d",$dat); ?></li>
                      <li class="font-14 text-center text-uppercase mt-5"><?php  $da=$row[3]; $dat= strtotime($da);   echo date("M",$dat); ?></li>
                    </ul>
                  </div>
                   <?php $a=$row[4];
              $aa=$row[6];
              $b= strtotime($a);
              $bb= strtotime($aa);
              ?>
                  <div class="event-content pt-5">
                    <h5 class="media-heading font-16 mb-5"><a class="font-weight-600" href="events-details?eventid=<?=$evtid;?>&& eventname=<?=$evt;?>"><?php echo $row[1] ?></a></h5>
                    <span class="mr-10"><i class="fa fa-clock-o text-theme-colored2"></i> <?php echo date('h:i A',$b);          echo ' - ';    echo date('h:i A',$bb); ?></span>
                    <span> <i class="fa fa-map-marker text-theme-colored2"></i> <?php echo $row[2] ?></span>
                  </div>
                </div>
              </article>
                        <?php }
             mysqli_close($db->conn);
             ?>
              
              
              <a class="btn btn-dark center-block btn-theme-colored2 font-16 btn-lg pr-40 pl-40 mt-15 mr-10" href="events">See More </a>
              
              
               
            </div>
            <div class="col-lg-6">
              <h3 class="font-28 mt-0"><span class="text-theme-colored2">Campus Video </span>Tour</h3>
              <div class="line-bottom-theme-colored2"></div>
              
                  <div class="video-button"></div>
                      <div  class="embed-responsive embed-responsive-16by9" style='height:330px; '>
                        <video  class="embed-responsive-item" controls style='height:330px; ' poster="img/school-video-thumb.jpg">
                          <source src="VID-20190207-WA0010.mp4" type="video/mp4">
                         
                          <!--Your browser does not support the video tag.-->
                        </video>
                 
              </div>
            </div>
            <!-- <div class="col-lg-6">-->
            <!--  <h3 class="font-28 mt-0"><span class="text-theme-colored2">Campus Video </span>Tour</h3>-->
            <!--  <div class="line-bottom-theme-colored2"></div>-->
            <!--  <div class="box-hover-effect about-video">-->
            <!--    <div class="effect-wrapper">-->
            <!--      <div class="thumb">-->
            <!--        <img class="img-responsive img-fullwidth" src="images/photos/1.jpg" alt="">-->
            <!--      </div>-->
            <!--      <div class="video-button"></div>-->
            <!--      <a class="hover-link" data-lightbox-gallery="youtube-video" href="https://www.youtube.com/watch?v=F3QpgXBtDeo" title="Youtube Video">Youtube Video</a>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
          </div>
        </div>
      </div>
    </section>