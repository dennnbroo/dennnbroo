<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CEK NICKNAME FF!</title>
  </head>
  <body>
      <div class="container">
           <?php
          if(isset($_GET['save'])){
         $id = $_GET['cek'];
         $ch =  curl_init();
            curl_setopt($ch, CURLOPT _URL, "https://atlantic-pedia.co.id/game/ajax/freefire/$userID=".$id
                ,"&token=062bca9bf8d04466667cd44c99aca4b989a47865e8c5e43e90b4f167a5a01cba");
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
            $result = curl_exec($ch);
            curl_close($ch);
            $res = json_decode($result,true);
          }
          
          ?>
          
           <form method="get" action="">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Masukan id </label>
            <input type="number" name="id" class="form-control" id="exampleFormControlInput1" placeholder="contoh: 9161xxxx">
            </div>
            </button class="btn btn-danger" name="cek">CEK ID</button>
            </form>
            <P><?php echo $res["Nickname"] ?></P>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>
