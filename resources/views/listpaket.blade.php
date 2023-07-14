<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
  <style>
    .table{
      table-layout: fixed;
    }
    .table tr, .table td{
      padding: 1% 3%;
      max-width: 20%;
      
      border-style: dotted;
    }
    .harga{
      /* min-width: max-content;   */
                                /* yang ini kenapa ya? */
      /* width: max-content; */
      /* word-wrap: normal; */
      word-wrap: break-word;
      max-width:50px;
    }
    
  </style>
</head>

<body>@include('/utility/navadmin')
<section class="content">
    <div class="text">
      List Paket
    </div>
      <div class="center">
        <div class="tablebase">
          <div class="center">
            @yield('content')
          </div>

      </div>
    </div>
    
  </section>
</body>
</html>