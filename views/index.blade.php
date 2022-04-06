<!doctype html>
<html>

<head>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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
            <p class="dropdown-item" style="text-align:center !important;">English
            <p>
            <p class="dropdown-item" style="text-align:center !important;">Bahasa Indonesia</p>
          </ul>
        </div>
        <div>
          <button type="button" class="btn btn-primary" style="border-radius:16px !important; font-weight:600 !important; font-size:16px !important;" data-toggle="modal" data-target="#myModal">Connect Wallet</button>
        </div>
      </ul>

    </nav>
  </div>
  <div class="togg">
    <div class="custom-control custom-switch">
      <input type="checkbox" class="custom-control-input" id="switch1" name="example">
      <label class="custom-control-label" for="switch1">Staked only</label>
    </div>
  </div>
  <div class="card-deck">
    <div class="card">
      <div class="card-body">
        <div class="column">
          <img src="https://bootstrapious.com/i/snippets/sn-nav-logo/logo.png" width="45" alt="" class="d-inline-block align-middle mr-2">

          <div class="apy">
            <p>APY:</p>
            <p>Earn:</p>
            <p>Harvest Lockup :</p>
          </div>

          <div class="spy-e">
            <p>SPY EARNED</p>
            <p style="color:grey !important; font-size:20px !important;">0.000</p>
            <p>SPY-BNB LP STAKED</p>
          </div>
        </div>

        <div class="column">
          <h4 class="idx-name">SPY-BUSD</h4>
          <div class="idx-col" style="margin-right:5px; background-color: white !important; color:#007bff !important; border-color:#007bff !important;">
            <span class="fas fa-check-circle fa-sm"> Core</span>
          </div>
          <div class="idx-col" style="border-color:#007bff !important;">
            <span>15300X</span>
          </div>
          <div class="spy">
            <p>1,022.62% <span class="fas fa-calculator fa-sm"></span></p>
            <p>SPY + Fees</p>
            <p>12 Hour (s)</p>
          </div>

          <div class="hv-col" style="border-color:#007bff !important;">
            <span>Harvest</span>
          </div>

        </div>
      </div>
      <div class="buttonx">
        <button type="button" class="btn btn-primary" style="width: 300px !important; border-radius:16px !important; font-weight:600 !important; font-size:16px !important;" data-toggle="modal" data-target="#myModal">Connect Wallet</button>
      </div>
      <div class="card-footer" style="text-align:center;">
        <small class="text-muted">Details</small>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="column">
          <img src="https://bootstrapious.com/i/snippets/sn-nav-logo/logo.png" width="45" alt="" class="d-inline-block align-middle mr-2">

          <div class="apy">
            <p>APY:</p>
            <p>Earn:</p>
            <p>Harvest Lockup :</p>
          </div>

          <div class="spy-e">
            <p>SPY EARNED</p>
            <p style="color:grey !important; font-size:20px !important;">0.000</p>
            <p>SPY-BNB LP STAKED</p>
          </div>
        </div>

        <div class="column">
          <h4 class="idx-name">SPY-BUSD</h4>
          <div class="idx-col" style="margin-right:5px; background-color: white !important; color:#007bff !important; border-color:#007bff !important;">
            <span class="fas fa-check-circle fa-sm"> Core</span>
          </div>
          <div class="idx-col" style="border-color:#007bff !important;">
            <span>15300X</span>
          </div>
          <div class="spy">
            <p>1,022.62% <span class="fas fa-calculator fa-sm"></span></p>
            <p>SPY + Fees</p>
            <p>12 Hour (s)</p>
          </div>

          <div class="hv-col" style="border-color:#007bff !important;">
            <span>Harvest</span>
          </div>

        </div>
      </div>
      <div class="buttonx">
        <button type="button" class="btn btn-primary" style="width: 300px !important; border-radius:16px !important; font-weight:600 !important; font-size:16px !important;" data-toggle="modal" data-target="#myModal">Connect Wallet</button>
      </div>
      <div class="card-footer" style="text-align:center;">
        <small class="text-muted">Details</small>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="column">
          <img src="https://bootstrapious.com/i/snippets/sn-nav-logo/logo.png" width="45" alt="" class="d-inline-block align-middle mr-2">

          <div class="apy">
            <p>APY:</p>
            <p>Earn:</p>
            <p>Harvest Lockup :</p>
          </div>

          <div class="spy-e">
            <p>SPY EARNED</p>
            <p style="color:grey !important; font-size:20px !important;">0.000</p>
            <p>SPY-BNB LP STAKED</p>
          </div>
        </div>

        <div class="column">
          <h4 class="idx-name">SPY-BUSD</h4>
          <div class="idx-col" style="margin-right:5px; background-color: white !important; color:#007bff !important; border-color:#007bff !important;">
            <span class="fas fa-check-circle fa-sm"> Core</span>
          </div>
          <div class="idx-col" style="border-color:#007bff !important;">
            <span>15300X</span>
          </div>
          <div class="spy">
            <p>1,022.62% <span class="fas fa-calculator fa-sm"></span></p>
            <p>SPY + Fees</p>
            <p>12 Hour (s)</p>
          </div>

          <div class="hv-col" style="border-color:#007bff !important;">
            <span>Harvest</span>
          </div>

        </div>
      </div>
      <div class="buttonx">
        <button type="button" class="btn btn-primary" style="width: 300px !important; border-radius:16px !important; font-weight:600 !important; font-size:16px !important;" data-toggle="modal" data-target="#myModal">Connect Wallet</button>
      </div>
      <div class="card-footer" style="text-align:center;">
        <small class="text-muted">Details</small>
      </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h5 class="modal-title" style="font-weight:bold;">Connect Wallet</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
          <div class="columnmod">
          <img src="https://bootstrapious.com/i/snippets/sn-nav-logo/logo.png" width="45" alt="" class="d-inline-block align-middle mr-2">        
          <p></p>
          <p>Metamask</p>
          </div>
          <div class="columnmod"> 
          <img src="https://bootstrapious.com/i/snippets/sn-nav-logo/logo.png" width="45" alt="" class="d-inline-block align-middle mr-2">       
          <p></p>
          <p>WalletConnect</p>
          </div>
          <div class="columnmod">
          <img src="https://bootstrapious.com/i/snippets/sn-nav-logo/logo.png" width="45" alt="" class="d-inline-block align-middle mr-2">        
          <p></p>
          <p>Trust Wallet</p>
          </div>
          <div class="columnmod"> 
          <img src="https://bootstrapious.com/i/snippets/sn-nav-logo/logo.png" width="45" alt="" class="d-inline-block align-middle mr-2">       
          <p></p>
          <p>More</p>
          </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
          <p style="text-align:center;">Haven’t got a crypto wallet yet?</p>
          <div class="buttony">
          <button type="button" class="btn btn-dark" style="width: 300px !important; border-radius:16px !important; font-weight:600 !important; font-size:16px !important;">Learn How to Connect</button>
          </div>
          </div>

        </div>
      </div>
    </div>
    <script>
      $(document).ready(function() {
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