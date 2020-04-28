

<nav class="navbar navbar-inverse fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="background-color:#f0ad4e;">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="color: #f0ad4e; font-size: 25px;">TubeTV</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse" style="border-color: #3c5984; width: 100%;">
          <ul class="nav navbar-nav" style="width: auto;">
            <li>
              <span style="float: right;">
               <input type="text" class="form-control" placeholder="Find movies, TV shows and more" style="margin-top: 13px; width: 350px; height: 37px;border-radius: 20px;background-color: #80808059;color: white;border: 0px; text-align: center; margin-left: 80%;">
            </span>
            </li>
          </ul>
           <ul class="nav navbar-nav" style="width: auto; float: right; margin-top: 20px; ">
            <li>
              <p style="float: right; font-size: larger;">Hello<span style='font-size:20px;'>&#128522;</span>&nbsp;&nbsp;
              <?php
                if(isset($_SESSION['email']))
                  echo $_SESSION['email']
              ?>
            </p>
            </li>
          </ul> 
        </div><!--/.nav-collapse -->
      </div>
    </nav>