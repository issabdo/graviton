<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html><html class=''>
<head>
  {{-- <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script>
  <script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script>
  <script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'>
  <meta name="robots" content="noindex">
  <link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <link rel="canonical" href="https://codepen.io/Dimasion/pen/oBoqBM?limit=all&page=30&q=shop" /> --}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<style class="cp-pen-styles">
  body {
    padding-top: 80px;
  }

  .show-cart li {
    display: flex;
  }
  .card {
    margin-bottom: 20px;
  }
  .card-img-top {
    width: 200px;
    height: 200px;
    align-self: center;
  }
  html, body {
      background-color: #fff;
      color: #636b6f;
      font-family: 'Raleway', sans-serif;
      font-weight: 100;
      height: 100vh;
      margin: 0;
  }

  .full-height {
      height: 20vh;
  }

  .flex-center {
      align-items: center;
      display: flex;
      justify-content: center;
  }

  .position-ref {
      position: relative;
  }

  .top-right {
      position: absolute;
      right: 10px;
      top: 18px;
  }

  .content {
      text-align: center;
  }


  .links ul , .links {
      list-style: none;
  }
  .links ul > li , .links li {
      float: left;
  }
  .links ul > li > a , .links li > a{
      color: #636b6f;
      padding: 0 25px;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: .1rem;
      text-decoration: none;
      text-transform: uppercase;
  }

</style>
</head><body>
<!-- Nav -->




  <div class="flex-center position-ref full-height">

          <ul class="top-right links">

                  <li><a href="{{ url('/shop') }}">Neary Shops</a></li>
                  <li><a href="{{ url('/shoplike') }}">My perferred shops</a></li>
          </ul>

  </div>

<!-- Main -->
  <div class="container">
      <div class="row">
        @foreach ($shops as $key => $shop)
        <div class="col">
          <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="{{ url(env('UPLOAD_PATH').'/'.$shop->image) }}" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">{{$shop->name}}</h4>
              <a href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary">Like</a>
              <a href="#" data-name="Orange" data-price="0.5" class="clear-cart btn btn-danger">Dislike</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
  </div>
    </div>
</div>

</body></html>
