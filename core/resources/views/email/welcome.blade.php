<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome to {{ Config::get('app.name', 'App Name'); }}</title>
    <style type="text/css">
        /* Force Hotmail to display emails at full width */
        .ExternalClass {
            width: 100%;
        }

        /* Force Hotmail to display normal line spacing.  More on that: http://www.emailonacid.com/forum/viewthread/43/ */
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        /* Take care of image borders and formatting */
        img {
            max-width: 600px;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
            margin: 0;
            padding: 0;
            display: block;
        }

        a img {
            border: none;
        }

        table {
            border-collapse: collapse !important;
        }

        #outlook a {
            padding: 0;
        }

        .ReadMsgBody {
            width: 100%;
        }

        .ExternalClass {
            width: 100%;
        }

        .backgroundTable {
            margin: 0 auto;
            padding: 0;
            width: 100% !important;
        }

        table td {
            border-collapse: collapse;
        }

        .ExternalClass * {
            line-height: 115%;
        }

        /* General styling */
        td {
            font-family: Arial, sans-serif;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
            width: 100%;
            height: 100%;
            color: #6b7d90;
            2 font-weight: 400;
            font-size: 18px;
        }

        h1 {
            margin: 10px 0;
        }

        a {
            color: #FF1A00;
            text-decoration: underline;
        }

        .desktop-hide {
            display: none;
        }

        .hero-bg {
            /* background: -webkit-linear-gradient(90deg, #000000 0%, #3e2626 100%); */
            background-color: #000000;
        }

        .force-full-width {
            width: 100% !important;
        }

        .body-padding {
            padding: 0 75px;
        }

        .force-width-80 {
            width: 80% !important;
        }
    </style>
    <style type="text/css" media="screen">
        @media screen {

            /* Thanks Outlook 2013! http://goo.gl/XLxpyl */
            * {
                font-family: 'Arial', 'sans-serif' !important;
            }

            .w280 {
                width: 280px !important;
            }
        }
    </style>
    <style type="text/css" media="only screen and (max-width: 480px)">
        /* Mobile styles */
        @media only screen and (max-width: 480px) {
            table[class*="w320"] {
                width: 320px !important;
            }

            td[class*="w320"] {
                width: 280px !important;
                padding-left: 20px !important;
                padding-right: 20px !important;
            }

            img[class*="w320"] {
                height: 40px !important;
            }

            td[class*="mobile-spacing"] {
                padding-top: 10px !important;
                padding-bottom: 10px !important;
            }

            *[class*="mobile-hide"] {
                display: none !important;
            }

            .desktop-hide {
                display: block !important;
            }

            *[class*="mobile-br"] {
                font-size: 12px !important;
            }

            td[class*="mobile-w20"] {
                width: 20px !important;
            }

            img[class*="mobile-w20"] {
                width: 20px !important;
            }

            td[class*="mobile-center"] {
                text-align: center !important;
            }

            table[class*="w100p"] {
                width: 100% !important;
            }

            td[class*="activate-now"] {
                padding-right: 0 !important;
                padding-top: 20px !important;
            }

            td[class*="mobile-resize"] {
                font-size: 22px !important;
                padding-left: 15px !important;
            }

            td[class*="mobile-hide"] {
                display: none;
            }
        }
    </style>
</head>

<body offset="0" class="body externalClass"
    style="padding:0; margin:0; display:block; background:#e8ecf0; -webkit-text-size-adjust:none" bgcolor="#e8ecf0">
    <table align="center" cellpadding="0" cellspacing="0" width="100%" height="100%">
        <tr>
            <td align="center" valign="top" style="background-color:#eeebeb" width="100%">
                <center>
                    <table cellspacing="0" cellpadding="0" width="600" class="w320">
                        <tr>
                            <td align="center" valign="top">
                                <table class="mobile-hide" style="margin:0 auto;" cellspacing="0" cellpadding="0"
                                    width="100%">
                                    <tr>
                                        <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;">
                                            <img class="w320" height="40"
                                                src="{{ assets('images/logo.png ') }}"
                                                alt="{{ Config::get('app.name', 'App Name'); }}"></a>
                                        </td>
                                        <td align="right" style="color: #FF1A00; font-size: 18px;" class="mobile-hide">
                                            <div>
                                                <a href="{{ url('/') }}"
                                                    style="color: #FF1A00; text-decoration: none;">Visit Our Website</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
                                    </tr>
                                </table>
                                <table cellspacing="0" cellpadding="0" width="100%">
                                    <tr>
                                        <td class="hero-bg" style="background-color: #000">
                                            <table cellspacing="0" cellpadding="0" width="100%">
                                                <tr>
                                                    <td height="45" style="font-size: 45px; line-height: 45px;"
                                                        class="desktop-hide">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="font-size:40px; font-weight: 400; color: #ffffff; text-align:center;">
                                                            {{-- <img src="https://s3.amazonaws.com/appcues-email-assets/images/appcues-white-logo.png"
                                                                class="desktop-hide" height="40" style="margin: 0 auto;" /> --}}
                                                        <div class="mobile-br">&nbsp;</div>
                                                        Welcome to {{ Config::get('app.name', 'App Name'); }}
                                                        <br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="15" style="font-size: 15px; line-height: 15px;">&nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="font-size:24px; text-align:center; padding: 0 75px; color:#ffffff;">
                                                        Here’s What You Need To Get Started
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="50" style="font-size: 50px; line-height: 50px;">&nbsp;
                                                    </td>
                                                </tr>
                                            </table>
                                            {{-- <table cellspacing="0" cellpadding="0" width="100%">
                                                <tr>
                                                    <td>
                                                        <img src="https://s3.amazonaws.com/appcues-email-assets/images/email-hero-animation.gif"
                                                            class="force-full-width ExternalClass" />
                                                    </td>
                                                </tr>
                                            </table> --}}
                                        </td>
                                    </tr>
                                </table>
                                <table cellspacing="0" cellpadding="0" class="force-full-width" bgcolor="#ffffff">
                                    <tr>
                                        <td style="background-color:#ffffff;">
                                            <br>
                                            <center>
                                                <strong>Hi {{ $name??'Name' }},</strong>
                                                <br>
                                                We recieved your registration message, we will contact you soon.
                                            </center>
                                            <table style="margin:0 auto;" cellspacing="0" cellpadding="10" width="100%">
                                                <tr>
                                                    <td style="text-align:center; margin:0 auto;">
                                                        <br>
                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0"
                                                            align="center">
                                                            <tr>
                                                                <td>
                                                                    <div style="text-align: center">
                                                                        <a href="{{ url('/') }}"
                                                                            style="background-color:#000;border:1px solid #000;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:18px;line-height:44px;text-align:center;text-decoration:none;width:150px;-webkit-text-size-adjust:none;mso-hide:all;">Get
                                                                            started &rarr;</a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <br>
                                                    </td>
                                                </tr>
                                            </table>
                                            <table border="0" align="center" cellpadding="0" cellspacing="0"
                                                bgcolor="ffffff" class="force-full-width">
                                                <tr>
                                                    <td align="center">
                                                <tr>
                                                    <td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;
                                                    </td>
                                                </tr>
                                        </td>
                                    </tr>
                                </table>
                                <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="000">
                                    <tr>
                                        <td align="center">
                                            <table border="0" align="center" width="590" cellpadding="0" cellspacing="0"
                                                bgcolor="000">
                                                <tr>
                                                <tr>
                                                    <td height="45" style="font-size: 45px; line-height: 45px;">&nbsp;
                                                    </td>
                                                </tr>
                                                <td align="center">
                                                    <table border="0" align="center" width="590" cellpadding="0"
                                                        cellspacing="0" bgcolor="000">
                                                        <tr>
                                                            <td align="center">
                                                        <tr>
                                                            <td align="center">
                                                                <a href="{{ url('/') }}" border="0"
                                                                    style="text-decoration: none !important; font-size: 18px; font-family: arial, sans-serif; border-style:none; color:#fff;"
                                                                    target="_blank">Response Real Estate Broker 2022©</a>
                                                            </td>
                                                        </tr>
                                                </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="65" style="font-size: 65px; line-height: 65px;">&nbsp;</td>
                        </tr>
                    </table>
            </td>
        </tr>
    </table>

    </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    </center>
    </td>
    </tr>
    </table>
</body>

</html>
