        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>
          <div id="clock">
      
      <div id="time">
        <div><span id="hour">00</span><span>Hours</span></div>
        <div><span id="minutes">00</span><span>Minutes</span></div>
        <div><span id="seconds">00</span><span>Seconds</span></div>
        
      </div>
    </div>
    <script type="text/javascript">
      function clock(){
        var hours = document.getElementById('hour');
        var minutes = document.getElementById('minutes');
        var seconds = document.getElementById('seconds');

        var h = new Date().getHours();
        var m = new Date().getMinutes();
        var s = new Date().getSeconds();

        hours.innerHTML = h;
        minutes.innerHTML =m;
        seconds.innerHTML = s;
      }

      var interval = setInterval(clock, 1000);
    </script>
<br><br><br><br><br><br>
         
          
          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              
 <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Development System</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?= base_url('assets/'); ?>img/undraw_posting_photo.svg" alt="">
                  </div>
                  This system aims to review the needs needed by the admin in processing data.
                  <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw &rarr;</a>
                </div>
              </div>

            </div>

            

             

              <!-- Approach -->
              
            </div>
          </div>

          

       
