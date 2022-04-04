<!doctype html>
<html>
  
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style> 
    </style>
</head>
<body>
<div class="container-fluid px-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white" style="height: 90px !important;"> 
        <img src="https://bootstrapious.com/i/snippets/sn-nav-logo/logo.png" width="45" alt="" class="d-inline-block align-middle mr-2">
        <span class="font-weight-bold">Smarty Pay</span> 
        <div class="dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Trade
        </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Exchange</a>
                <a class="dropdown-item" href="#">Liquidity</a>
            </ul>
        </div>
        
        <div class="dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Earn
        </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Farms</a>
                <a class="dropdown-item" href="#">The Auto</a>
            </ul>
        </div> 
        
        <div class="dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Referral
        </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Referral</a>
            </ul>
        </div>   

        <div class="dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          NFTs
        </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">NFTs</a>
                <a class="dropdown-item" href="#">Marketplace</a>
            </ul>
        </div>

        <ul class="navbar-nav ml-auto">
        <div>
        <button type="button" class="btn">
            <span class="fas fa-coins fa-lg"> $0.176</span>
        </button>
        </div>
        <div class="dropdown">
        <button type="button" class="btn">
            <span class="fas fa-globe fa-lg"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="border:0px !important;">
                <p class="dropdown-item" style="text-align:center !important;">English<p>
                <p class="dropdown-item" style="text-align:center !important;">Bahasa Indonesia</p>
            </ul>
        </div>
        <div>
            <button type="button" class="btn btn-primary" style="border-radius:16px !important; font-weight:600 !important; font-size:16px !important;">Connect Wallet</button>
        </div>
        </ul>
        
    </nav>    
</div>

<div class="card-deck" style="padding: 100px !important;">
  <div class="card">
    
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
   <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>

    <script>        
            $(document).ready( function() { 
                $('.dropdown').hover( 
                    function() {
                        
                        $(this).find('ul').css({
                            "display": "block",
                            "margin-top": 0
                        });                        
                        
                    }, 
                    function() {
                        
                        $(this).find('ul').css({
                            "display": "none",
                            "margin-top": 0
                        });
                        
                    } 
                );
                
            });        
    </script>

</body>

</html>