<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html><html class=''>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
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
              <a  class="add-to-cart btn btn-primary" onclick="like();">Like</a>
              <a  class="clear-cart btn btn-danger">Dislike</a>
              <button  type="button" onclick="like();">Ajouter</button>
              <input type="text" hidden id="id" value="{{$shop->id}}">
            </div>
          </div>
        </div>
        @endforeach
      </div>
  </div>
    </div>
</div>

<script type="text/javascript">
function like(){
        var id = $("#id").val();
         $.ajax({
              url: '/update/{id}',
              type: 'GET',
              data : 'save=true&id='+id,
              success: function(response, status, xhr, $form) {
                  alert('succés');
              }
          });
     }
</script>
</body></html>
