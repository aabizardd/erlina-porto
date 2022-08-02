<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/oraxol/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 00:01:06 GMT -->

<head>
    <title>Hallo Semuanya!👋🏻</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com/">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/frontend/css/')?>font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/frontend/css/')?>ionicons.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/frontend/css/')?>style.css" />
    <script nonce="1b61002f-0ab2-4b3a-9024-0899509e2e3f">
    (function(w, d) {
        ! function(a, e, t, r) {
            a.zarazData = a.zarazData || {};
            a.zarazData.executed = [];
            a.zaraz = {
                deferred: []
            };
            a.zaraz.q = [];
            a.zaraz._f = function(e) {
                return function() {
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
                for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith(
                    "_zaraz_"))).forEach((t => {
                    try {
                        a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
                    } catch {
                        a.zarazData["z_" + t.slice(7)] = e.getItem(t)
                    }
                }));
                z.referrerPolicy = "origin";
                z.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(a
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