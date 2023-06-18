
<!DOCTYPE html>
<html lang="en">
<head>
<title>Form Upload Sertifikat</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('wpks/images/LOGO_SENKOM.png') }}">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/cf/ContactFrom_v8/vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/cf/ContactFrom_v8/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/cf/ContactFrom_v8/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/cf/ContactFrom_v8/vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/cf/ContactFrom_v8/vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/cf/ContactFrom_v8/vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/cf/ContactFrom_v8/vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/cf/ContactFrom_v8/vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/cf/ContactFrom_v8/css/util.css">
<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/cf/ContactFrom_v8/css/main.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<meta name="robots" content="noindex, follow">
<script nonce="a2e64809-4d94-4233-91da-834033af6d63">(function(w,d){!function(dK,dL,dM,dN){dK[dM]=dK[dM]||{};dK[dM].executed=[];dK.zaraz={deferred:[],listeners:[]};dK.zaraz.q=[];dK.zaraz._f=function(dO){return function(){var dP=Array.prototype.slice.call(arguments);dK.zaraz.q.push({m:dO,a:dP})}};for(const dQ of["track","set","debug"])dK.zaraz[dQ]=dK.zaraz._f(dQ);dK.zaraz.init=()=>{var dR=dL.getElementsByTagName(dN)[0],dS=dL.createElement(dN),dT=dL.getElementsByTagName("title")[0];dT&&(dK[dM].t=dL.getElementsByTagName("title")[0].text);dK[dM].x=Math.random();dK[dM].w=dK.screen.width;dK[dM].h=dK.screen.height;dK[dM].j=dK.innerHeight;dK[dM].e=dK.innerWidth;dK[dM].l=dK.location.href;dK[dM].r=dL.referrer;dK[dM].k=dK.screen.colorDepth;dK[dM].n=dL.characterSet;dK[dM].o=(new Date).getTimezoneOffset();if(dK.dataLayer)for(const dX of Object.entries(Object.entries(dataLayer).reduce(((dY,dZ)=>({...dY[1],...dZ[1]})),{})))zaraz.set(dX[0],dX[1],{scope:"page"});dK[dM].q=[];for(;dK.zaraz.q.length;){const d_=dK.zaraz.q.shift();dK[dM].q.push(d_)}dS.defer=!0;for(const ea of[localStorage,sessionStorage])Object.keys(ea||{}).filter((ec=>ec.startsWith("_zaraz_"))).forEach((eb=>{try{dK[dM]["z_"+eb.slice(7)]=JSON.parse(ea.getItem(eb))}catch{dK[dM]["z_"+eb.slice(7)]=ea.getItem(eb)}}));dS.referrerPolicy="origin";dS.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(dK[dM])));dR.parentNode.insertBefore(dS,dR)};["complete","interactive"].includes(dL.readyState)?zaraz.init():dK.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>

<div class="container-contact100">
<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>
<div class="wrap-contact100">
<form class="contact100-form validate-form" action="{{ route('home.push') }}" method="post" enctype="multipart/form-data">
    @csrf
<span class="contact100-form-title">
    @if (session('success'))
    <script>
        Swal.fire(
        'Good..',
        '{{ session('success') }}',
        'success'
        )
    </script>
    @endif
    @if (session('info'))
    <script>
        Swal.fire(
        'Upps..',
        '{{ session('info') }}',
        'info'
        )
    </script>
    @endif
Upload Sertifikat
</span>
<div class="wrap-input100 validate-input" data-validate="No Sertifikat is required">
<input class="input100" type="text" name="nomor" placeholder="No Sertifikat">
<span class="focus-input100-1"></span>
<span class="focus-input100-2"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Nama Lengkap is required">
<input class="input100" type="text" name="nama" placeholder="Nama Lengkap">
<span class="focus-input100-1"></span>
<span class="focus-input100-2"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Name is required">
<input class="input100" type="file" name="file" placeholder="Upload File">
<span class="focus-input100-1"></span>
<span class="focus-input100-2"></span>
</div>
<div class="container-contact100-form-btn">
<button class="contact100-form-btn">
Upload
</button>
</div>
</form>
</div>
</div>
<div id="dropDownSelect1"></div>

<script src="https://colorlib.com/etc/cf/ContactFrom_v8/vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="https://colorlib.com/etc/cf/ContactFrom_v8/vendor/animsition/js/animsition.min.js"></script>

<script src="https://colorlib.com/etc/cf/ContactFrom_v8/vendor/bootstrap/js/popper.js"></script>
<script src="https://colorlib.com/etc/cf/ContactFrom_v8/vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="https://colorlib.com/etc/cf/ContactFrom_v8/vendor/select2/select2.min.js"></script>

<script src="https://colorlib.com/etc/cf/ContactFrom_v8/vendor/daterangepicker/moment.min.js"></script>
<script src="https://colorlib.com/etc/cf/ContactFrom_v8/vendor/daterangepicker/daterangepicker.js"></script>

<script src="https://colorlib.com/etc/cf/ContactFrom_v8/vendor/countdowntime/countdowntime.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
<script src="https://colorlib.com/etc/cf/ContactFrom_v8/js/map-custom.js"></script>

<script src="https://colorlib.com/etc/cf/ContactFrom_v8/js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7d8f958fde484b98","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.4.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
