<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register Info Download</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body >

  <div class="row">
    <div class="col-sm-12 col-md-4">
      <div class="card" id="capture">
        <img class="card-img-top" src="<?php echo base_url('assets/images/logo-aucc2020-h120.png'); ?>" alt="AUCC2020 Logo">
        <div class="card-body">
          <h5 class="card-title text-center" style="color:#e0b417">
              The 8<sup>th</sup> Asia Undergraduate Conference on Computing
          </h5>
          <p class="card-text">
            <h6>Internet Account:</h6>
            User : <?= $account_user; ?><br>
            Password: <?= $account_password; ?> <br>
            Expired date: <?= $account_expire ?>
          </p>
        </div>

        <div class="card-footer text-muted text-center">
          <small>
            Information Technology and Computers Department : ARIT
          </small>
        </div>
      </div>
    </div>


  </div>




  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script src="<?php echo base_url('assets/js/html2canvas.min.js'); ?>" type="text/javascript"></script>
    <script>
        html2canvas(document.querySelector("#capture")).then(canvas=>{
        saveAs(canvas.toDataURL(), 'wifi-account-info.png');
      });


      function saveAs(uri, filename) {

        var link = document.createElement('a');

          if (typeof link.download === 'string') {

              link.href = uri;
              link.download = filename;

              //Firefox requires the link to be in the body
              document.body.appendChild(link);

              //simulate click
              link.click();

              //remove the link when done
              document.body.removeChild(link);

          } else {

              window.open(uri);

          }
        }
  </script>
</body>
</html>
