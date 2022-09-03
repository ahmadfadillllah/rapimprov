<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/cf/ContactFrom_v9/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Sep 2022 11:58:28 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Cetak E-Certificate WPKS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('wpks') }}/images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="{{ asset('wpks') }}/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('wpks') }}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('wpks') }}/fonts/iconic/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('wpks') }}/vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('wpks') }}/vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('wpks') }}/vendor/animsition/css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('wpks') }}/vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('wpks') }}/vendor/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('wpks') }}/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('wpks') }}/css/main.css">

    {{-- SweetAlert 2 --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <meta name="robots" content="noindex, follow">
    <script nonce="36a704c8-685c-4b64-9e46-c8c767b15728">
        (function (w, d) {
            ! function (a, e, t, r) {
                a.zarazData = a.zarazData || {};
                a.zarazData.executed = [];
                a.zaraz = {
                    deferred: []
                };
                a.zaraz.q = [];
                a.zaraz._f = function (e) {
                    return function () {
                        var t = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({
                            m: e,
                            a: t
                        })
                    }
                };
                for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
                a.zaraz.init = () => {
                    var t = e.getElementsByTagName(r)[0],
                        z = e.createElement(r),
                        n = e.getElementsByTagName("title")[0];
                    n && (a.zarazData.t = e.getElementsByTagName("title")[0].text);
                    a.zarazData.x = Math.random();
                    a.zarazData.w = a.screen.width;
                    a.zarazData.h = a.screen.height;
                    a.zarazData.j = a.innerHeight;
                    a.zarazData.e = a.innerWidth;
                    a.zarazData.l = a.location.href;
                    a.zarazData.r = e.referrer;
                    a.zarazData.k = a.screen.colorDepth;
                    a.zarazData.n = e.characterSet;
                    a.zarazData.o = (new Date).getTimezoneOffset();
                    a.zarazData.q = [];
                    for (; a.zaraz.q.length;) {
                        const e = a.zaraz.q.shift();
                        a.zarazData.q.push(e)
                    }
                    z.defer = !0;
                    for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a
                        .startsWith("_zaraz_"))).forEach((t => {
                        try {
                            a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
                        } catch {
                            a.zarazData["z_" + t.slice(7)] = e.getItem(t)
                        }
                    }));
                    z.referrerPolicy = "origin";
                    z.src = "../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(a
                        .zarazData)));
                    t.parentNode.insertBefore(z, t)
                };
                ["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);

    </script>
</head>

<body>
    @if (session('success'))
    <script>
        Swal.fire(
        'Success',
        '{{ session('success') }}',
        'success'
        )
    </script>
    @endif
    @if (session('info'))
    <script>
        Swal.fire(
        'Upps!',
        '{{ session('info') }}',
        'info'
        )
    </script>
    @endif
    <div class="container-contact100">
        <div class="contact100-map" id="google_map" data-map-x="-5.1986146" data-map-y="119.4919118,17"
            data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>
        <div class="wrap-contact100">
            <form action="{{ route('home.push') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <span class="contact100-form-title">
                    Import File
                </span>
                <div class="wrap-input100 validate-input" data-validate="Masukkan Nomor Sertifikat / Nama Lengkap">
                    <input class="input100" type="file" name="file" placeholder="SUM-053 atau Ahmad Fadillah">
                    <span class="focus-input100"></span>
                </div>
                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        Upload
                    </button>
                </div>
            </form>
            <div class="contact100-more">
                Contact (TIM Sekretariat | Aslan Lasali): <span class="contact100-more-highlight">+62 822-9231-3475</span>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>

    <script src="{{ asset('wpks') }}/vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="{{ asset('wpks') }}/vendor/animsition/js/animsition.min.js"></script>

    <script src="{{ asset('wpks') }}/vendor/bootstrap/js/popper.js"></script>
    <script src="{{ asset('wpks') }}/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="{{ asset('wpks') }}/vendor/select2/select2.min.js"></script>

    <script src="{{ asset('wpks') }}/vendor/daterangepicker/moment.min.js"></script>
    <script src="{{ asset('wpks') }}/vendor/daterangepicker/daterangepicker.js"></script>

    <script src="{{ asset('wpks') }}/vendor/countdowntime/countdowntime.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
    <script src="{{ asset('wpks') }}/js/map-custom.js"></script>

    <script src="{{ asset('wpks') }}/js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"744e502f2f95ab53","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.8.1","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from colorlib.com/etc/cf/ContactFrom_v9/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Sep 2022 11:58:50 GMT -->

</html>
