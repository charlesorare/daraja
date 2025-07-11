<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lipa Na Mpesa</title>


  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>

   <style>
    @import url("https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap");
    body {
      background-color: #eaedf4;
      font-family: "Rubik" , sans-serif;
      }

.card {
        width: 310px;
        border: none;
        border-radius: 15px;
      }

      .justify-content-around div {
        border: none;
        border-radius: 20px;
        background: #f3f4f6;
        padding: 5px 20px 5px;
        color: #8d9297;
      }

      .justify-content-around span {
        font-size: 12px;
      }

      .justify-content-around div:hover {
        background: #545ebd;
        color: #fff;
        cursor: pointer;
      }

      .justify-content-around div:nth-child(1) {
        background: #545ebd;
        color: #fff;
      }

      span.mt-0 {
        color: #8d9297;
        font-size: 12px;
      }

      h6 {
        font-size: 15px;
      }
      .mpesa 
{        background-color: green !important;
      }

      img {
        border-radius: 15px;
      }

   </style>
</head>

  <body oncontextmenu="return false" class="snippet-body">
   <div class="container d-flex justify-content-center">
  <div class="card mt-5 px-3 py-4">
    <div class="d-flex flex-row justify-content-around">
      <div class="mpesa"><span>Mpesa</span></div>
      <div><span>Paypal</span></div>
      <div><span>Card</span></div>
    </div>
    <div class="media mt-4">
      <img src="./images/M-PESA_LOGO-01.svg.png" height="75" />
      <div class="media-body">
        <h6 class="mt-1">Enter Amount & Number</h6>
      </div>
    </div>
    <div class="media mt-3">
      <form class="row g-3" action="./stk_initiate.php" method="POST">
        <div class="col-12">
          <label class="form-label">Amount</label>
          <input type="text" class="form-control" name="amount" placeholder="Enter Amount">
        </div>
        <div class="col-12">
          <label class="form-label">Phone Number</label>
          <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-success" name="submit" value="submit">Donate</button>
        </div>
      </form>
    </div>
  </div>
</div>
  </body>
</html>






























<body>

</body>
</html>