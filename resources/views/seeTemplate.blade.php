@extends('layouts.app')

@section('content')
    <!-- link CSS -->
    <link href="{{ asset('css/seeTemplate.css') }}" rel="stylesheet">

    <title>Template</title>
  <body>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('danger'))
<script>
        swal({
            icon: 'danger',
            title: 'Maaf anda tidak mempunyai akses untuk fitur ini!',
        });
</script>
@endif
    <!-- Carouselnya -->
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="2000">
            <div class="overlay-image" id="carou1"><img src="{{ asset('images/blast.jpg') }}" ></div>
                <div class="carousel-caption  d-md-block">
                    <h5>Blast Template</h5>
                    <p>Template default yang bertemakan warna merah yang simple dan responsive. cocok untuk email yang digunakan untuk iklan atau marketing.</p>
                    <a href="/email/create" class="btn btn-success btn-md active" role="button" aria-pressed="true">Gunakan Template</a>
                </div>
            </div>
            <div class="carousel-item" data-interval="5000">
                <div class="overlay-image" id="carou2"><img src="{{ asset('images/sky.jpg') }}" ></div>
                <div class="carousel-caption  d-md-block">
                    <h5>Sky</h5>
                    <p>SKY, Template yang bertemakan warna langit yaitu biru dan putih. Tampilan sky template terlihat simple namun responsive. cocok untuk email yang digunakan untuk tanda terima kasih.</p>
                    <a href="/email/create" class="btn btn-success btn-md active" role="button" aria-pressed="true">Gunakan Template</a>
                </div>
            </div>
            <div class="carousel-item" data-interval="1500">
                <div class="overlay-image" id="carou3"></div>
                <div class="carousel-caption  d-md-block">
                    <h5>Coming Soon</h5>
                    <p>Lorem tur adipisicing elit. Labore facere esse consectetur nulla nesciunt quaerat tenetur error maxime explicabo necessitatibus ab quam sint sapiente, exercitationem omnis, enim beatae animi quos.</p>
                    <a href="/email/create" class="btn btn-success btn-md active" role="button" aria-pressed="true">Gunakan Template</a>
                </div>
            </div>
        </div>
        <a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="sr-only">Sebelumnya</span>
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
            <span class="sr-only">Sebelumnya</span>
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div><br><br>
    <center><h2>Bagaimana Cara Menggunakan Template</h2></center>
    <center>
        <table>
            <tr>
                <td>1. Salin source code template yang diinginkan pada halaman ini</td>
            </tr>
            <tr>
                <td>2. Lalu pergi ke halaman kirim email</td>
            </tr>
            <tr>
                <td>3. Klik Menu Tools pada textarea</td>
            </tr>
            <tr>
                <td>4. lalu pilih menu source code</td>
            </tr>
            <tr>
                <td>5. Tempel source code yang telah di salin tadi</td>
            </tr>

            <tr>
                <td>6. Lalu tinggal kalian edit datanya.</td>
            </tr>
        </table>
    </center>

    <center><h1 class="mt-5">Blast Template</h1></center>
    <center><img src="{{ asset('images/blast.jpg') }}" alt="" width="700" class="mt-3"></center>
    <br>
    <center>
        <figure>
            <textarea name="" cols="80" rows="10" id="pilih1" readonly>
                <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml">

                <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <title></title>
                <style type="text/css">
                body {margin: 0; padding: 0; min-width: 100%!important;}
                img {height: auto;}
                .content {width: 100%;}
                .header {padding: 40px 30px 20px 30px;}
                .innerpadding {padding: 30px 30px 30px 30px;}
                .borderbottom {border-bottom: 1px solid #f2eeed;}
                .subhead {font-size: 15px; color: #ffffff; font-family: sans-serif; letter-spacing: 10px;}
                .h1, .h2, .bodycopy {color: #153643; font-family: sans-serif;}
                .h1 {font-size: 33px; line-height: 38px; font-weight: bold;}
                .h2 {padding: 0 0 15px 0; font-size: 24px; line-height: 28px; font-weight: bold;}
                .bodycopy {font-size: 16px; line-height: 22px;}
                .button {text-align: center; font-size: 18px; font-family: sans-serif; font-weight: bold; padding: 0 30px 0 30px;}
                .button a {color: #ffffff; text-decoration: none;}
                .footer {padding: 20px 30px 15px 30px;}
                .footercopy {font-family: sans-serif; font-size: 14px; color: #ffffff;}
                .footercopy a {color: #ffffff; text-decoration: underline;}

                @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
                body[yahoo] .hide {display: none!important;}
                body[yahoo] .buttonwrapper {background-color: transparent!important;}
                body[yahoo] .button {padding: 0px!important;}
                body[yahoo] .button a {background-color: #e05443; padding: 15px 15px 13px!important;}
                body[yahoo] .unsubscribe {display: block; margin-top: 20px; padding: 10px 50px; background: #2f3942; border-radius: 5px; text-decoration: none!important; font-weight: bold;}
                }

                /*@media only screen and (min-device-width: 601px) {
                    .content {width: 600px !important;}
                    .col425 {width: 425px!important;}
                    .col380 {width: 380px!important;}
                    }*/

                </style>
                </head>

                <body yahoo bgcolor="#f6f8f1">
                <table width="100%" bgcolor="#f6f8f1" border="0" cellpadding="0" cellspacing="0">
                <tr>
                <td>
                    <!--[if (gte mso 9)|(IE)]>
                    <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                        <td>
                    <![endif]-->
                    <table bgcolor="#ffffff" class="content" align="center" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td bgcolor="#c7d8a7" class="header">
                        <table width="70" align="left" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                            <td height="70" style="padding: 0 20px 20px 0;">
                                <img class="fix" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/icon.gif" width="70" height="70" border="0" alt="" />
                            </td>
                            </tr>
                        </table>
                        <!--[if (gte mso 9)|(IE)]>
                            <table width="425" align="left" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td>
                        <![endif]-->
                        <table class="col425" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 425px;">
                            <tr>
                            <td height="70">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="subhead" style="padding: 0 0 0 3px;">
                                    FROM
                                    </td>
                                </tr>
                                <tr>
                                    <td class="h1" style="padding: 5px 0 0 0;">
                                        From...
                                    </td>
                                </tr>
                                </table>
                            </td>
                            </tr>
                        </table>
                        <!--[if (gte mso 9)|(IE)]>
                                </td>
                            </tr>
                        </table>
                        <![endif]-->
                        </td>
                    </tr>
                    <tr>
                        <td class="innerpadding borderbottom">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                            <td class="h2">
                               Subject...
                            </td>
                            </tr>
                            <tr>
                            <td class="bodycopy">

                            </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="innerpadding borderbottom">
                        <table width="115" align="left" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                            <td height="115" style="padding: 0 20px 20px 0;">
                                <img class="fix" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/article1.png" width="115" height="115" border="0" alt="" />
                            </td>
                            <td height="115" style="padding: 0 20px 20px 0;">
                                <h1>Hello Customers</h1>
                            </td>
                            </tr>
                        </table>
                        <!--[if (gte mso 9)|(IE)]>
                            <table width="380" align="left" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td>
                        <![endif]-->
                        <table class="col380" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 380px;">
                            <tr>
                            <td>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td style="padding: 20px 0 0 0;">
                                    <table class="buttonwrapper" bgcolor="#e05443" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                        </tr>
                                    </table>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            </tr>
                        </table>
                        <!--[if (gte mso 9)|(IE)]>
                                </td>
                            </tr>
                        </table>
                        <![endif]-->
                        </td>
                    </tr>
                    <tr>
                        <td class="innerpadding borderbottom">
                        </td>
                    </tr>
                    <tr>
                        <td class="innerpadding bodycopy">
                            Isi Pesan...
                        </td>
                    </tr>
                    <tr>
                        <td class="footer" bgcolor="#44525f">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                            <td align="center" class="footercopy">
                                &reg; Someone, somewhere 20XX<br/>
                                <a href="#" class="unsubscribe"><font color="#ffffff">Unsubscribe</font></a>
                                <span class="hide">from this newsletter instantly</span>
                            </td>
                            </tr>
                            <tr>
                            <td align="center" style="padding: 20px 0 0 0;">
                                <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                                    <a href="http://www.facebook.com/">
                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/facebook.png" width="37" height="37" alt="Facebook" border="0" />
                                    </a>
                                    </td>
                                    <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                                    <a href="http://www.twitter.com/">
                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/twitter.png" width="37" height="37" alt="Twitter" border="0" />
                                    </a>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                    <!--[if (gte mso 9)|(IE)]>
                        </td>
                        </tr>
                    </table>
                    <![endif]-->
                    </td>
                </tr>
                </table>
                </body>
                </html>

            </textarea>
        </figure>
    </center>

        <center><button onclick="copy()" class="btn btn-primary mt-2"><i class="fas fa-copy"></i> Salin</button></center>

    <hr>

    <center><h1 class="mt-5">Sky Template</h1></center>
    <center><img src="{{ asset('images/sky.jpg') }}" alt="" width="700" class="mt-3"></center>
    <br>
    <center>
        <figure>
            <textarea name="" cols="80" rows="10" id="pilih2" readonly>
                <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

                <html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
                <head>
                <!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
                <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
                <meta content="width=device-width" name="viewport"/>
                <!--[if !mso]><!-->
                <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
                <!--<![endif]-->
                <title></title>
                <!--[if !mso]><!-->
                <!--<![endif]-->
                <style type="text/css">
                        body {
                            margin: 0;
                            padding: 0;
                        }

                        table,
                        td,
                        tr {
                            vertical-align: top;
                            border-collapse: collapse;
                        }

                        * {
                            line-height: inherit;
                        }

                        a[x-apple-data-detectors=true] {
                            color: inherit !important;
                            text-decoration: none !important;
                        }
                    </style>
                <style id="media-query" type="text/css">
                        @media (max-width: 660px) {

                            .block-grid,
                            .col {
                                min-width: 320px !important;
                                max-width: 100% !important;
                                display: block !important;
                            }

                            .block-grid {
                                width: 100% !important;
                            }

                            .col {
                                width: 100% !important;
                            }

                            .col>div {
                                margin: 0 auto;
                            }

                            img.fullwidth,
                            img.fullwidthOnMobile {
                                max-width: 100% !important;
                            }

                            .no-stack .col {
                                min-width: 0 !important;
                                display: table-cell !important;
                            }

                            .no-stack.two-up .col {
                                width: 50% !important;
                            }

                            .no-stack .col.num4 {
                                width: 33% !important;
                            }

                            .no-stack .col.num8 {
                                width: 66% !important;
                            }

                            .no-stack .col.num4 {
                                width: 33% !important;
                            }

                            .no-stack .col.num3 {
                                width: 25% !important;
                            }

                            .no-stack .col.num6 {
                                width: 50% !important;
                            }

                            .no-stack .col.num9 {
                                width: 75% !important;
                            }

                            .video-block {
                                max-width: none !important;
                            }

                            .mobile_hide {
                                min-height: 0px;
                                max-height: 0px;
                                max-width: 0px;
                                display: none;
                                overflow: hidden;
                                font-size: 0px;
                            }

                            .desktop_hide {
                                display: block !important;
                                max-height: none !important;
                            }
                        }
                    </style>
                </head>
                <body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #f1f4f8;">
                <!--[if IE]><div class="ie-browser"><![endif]-->
                <table bgcolor="#f1f4f8" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="table-layout: fixed; vertical-align: top; min-width: 320px; Margin: 0 auto; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f1f4f8; width: 100%;" valign="top" width="100%">
                <tbody>
                <tr style="vertical-align: top;" valign="top">
                <td style="word-break: break-word; vertical-align: top;" valign="top">
                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color:#f1f4f8"><![endif]-->
                <div style="background-color:transparent;">
                <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:640px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
                <!--[if (mso)|(IE)]><td align="center" width="640" style="background-color:transparent;width:640px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
                <div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
                <div style="width:100% !important;">
                <!--[if (!mso)&(!IE)]><!-->
                <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                <!--<![endif]-->
                <div class="mobile_hide">
                <table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
                <tbody>
                <tr style="vertical-align: top;" valign="top">
                <td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 30px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px;" valign="top">
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid #BBBBBB; width: 100%;" valign="top" width="100%">
                <tbody>
                <tr style="vertical-align: top;" valign="top">
                <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                </div>
                <!--[if (!mso)&(!IE)]><!-->
                </div>
                <!--<![endif]-->
                </div>
                </div>
                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                </div>
                </div>
                </div>
                <div style="background-color:transparent;">
                <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffffff;">
                <div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:640px"><tr class="layout-full-width" style="background-color:#ffffff"><![endif]-->
                <!--[if (mso)|(IE)]><td align="center" width="640" style="background-color:#ffffff;width:640px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 1px solid #F3F2F3; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
                <div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
                <div style="width:100% !important;">
                <!--[if (!mso)&(!IE)]><!-->
                <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:1px solid #F3F2F3; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                <!--<![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
                <tbody>
                <tr style="vertical-align: top;" valign="top">
                <td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 15px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px;" valign="top">
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid #BBBBBB; width: 100%;" valign="top" width="100%">
                <tbody>
                <tr style="vertical-align: top;" valign="top">
                <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                <div align="center" class="img-container center autowidth" style="padding-right: 20px;padding-left: 20px;">
                <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 20px;padding-left: 20px;" align="center"><![endif]-->
                <div style="font-size:1px;line-height:20px"> </div>
                <div style="font-size:1px;line-height:20px"> </div>
                <!--[if mso]></td></tr></table><![endif]-->
                </div>
                <table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
                <tbody>
                <tr style="vertical-align: top;" valign="top">
                <td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 18px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px;" valign="top">
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid #BBBBBB; width: 100%;" valign="top" width="100%">
                <tbody>
                <tr style="vertical-align: top;" valign="top">
                <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                <!--[if (!mso)&(!IE)]><!-->
                </div>
                <!--<![endif]-->
                </div>
                </div>
                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                </div>
                </div>
                </div>
                <div style="background-color:transparent;">
                <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffffff;">
                <div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:640px"><tr class="layout-full-width" style="background-color:#ffffff"><![endif]-->
                <!--[if (mso)|(IE)]><td align="center" width="640" style="background-color:#ffffff;width:640px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
                <div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
                <div style="width:100% !important;">
                <!--[if (!mso)&(!IE)]><!-->
                <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                <!--<![endif]-->
                <div align="center" class="img-container center autowidth" style="padding-right: 0px;padding-left: 0px;">
                <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]-->
                <!--[if mso]></td></tr></table><![endif]-->
                </div>
                <table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
                <tbody>
                <tr style="vertical-align: top;" valign="top">
                <td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid #BBBBBB; width: 100%;" valign="top" width="100%">
                <tbody>
                <tr style="vertical-align: top;" valign="top">
                <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 40px; padding-left: 40px; padding-top: 20px; padding-bottom: 15px; font-family: Tahoma, sans-serif"><![endif]-->
                <div style="color:#555555;font-family:Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:20px;padding-right:40px;padding-bottom:15px;padding-left:40px;">
                <div style="line-height: 1.2; font-size: 12px; color: #555555; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14px;">
                <p style="font-size: 46px; line-height: 1.2; text-align: center; word-break: break-word; mso-line-height-alt: 55px; margin: 0;"><span style="font-size: 46px; color: #003188;"><strong>Subject</strong></span></p>
                </div>
                </div>
                <!--[if mso]></td></tr></table><![endif]-->
                <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 40px; padding-left: 40px; padding-top: 15px; padding-bottom: 10px; font-family: Tahoma, sans-serif"><![endif]-->
                <div style="color:#555555;font-family:Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.5;padding-top:15px;padding-right:40px;padding-bottom:10px;padding-left:40px;">
                <div style="line-height: 1.5; font-size: 12px; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; color: #555555; mso-line-height-alt: 18px;">
                <p style="line-height: 1.5; word-break: break-word; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; font-size: 16px; mso-line-height-alt: 24px; margin: 0;"><span style="font-size: 16px; color: #6d89bc;">Dear Customers</span></p>
                <p style="line-height: 1.5; word-break: break-word; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 18px; margin: 0;"> </p>
                <p style="line-height: 1.5; word-break: break-word; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; font-size: 16px; mso-line-height-alt: 24px; margin: 0;"><span style="font-size: 16px; color: #6d89bc;">Isi Pesan</span></p>
                <p style="line-height: 1.5; word-break: break-word; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 18px; margin: 0;"> </p>

                <p style="line-height: 1.5; word-break: break-word; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; font-size: 16px; mso-line-height-alt: 24px; margin: 0;"><span style="font-size: 16px; color: #6d89bc;">Your insight is so important to us!</span></p>
                </div>
                </div>
                <!--[if mso]></td></tr></table><![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
                <tbody>
                <tr style="vertical-align: top;" valign="top">
                <td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 30px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px;" valign="top">
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid #BBBBBB; width: 100%;" valign="top" width="100%">
                <tbody>
                <tr style="vertical-align: top;" valign="top">
                <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                <tr>
                    <td><p></p></td>
                </tr>
                <tr>
                    <td><p></p></td>
                </tr>
                </tbody>
                </table>
                <div align="left" class="img-container left fixedwidth" style="padding-right: 40px;padding-left: 40px;">
                <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 40px;padding-left: 40px;" align="left"><![endif]-->
                </div>
                <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 40px; padding-left: 40px; padding-top: 20px; padding-bottom: 10px; font-family: Tahoma, sans-serif"><![endif]-->
                <div style="color:#555555;font-family:Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.5;padding-top:20px;padding-right:40px;padding-bottom:10px;padding-left:40px;">
                <div style="line-height: 1.5; font-size: 12px; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; color: #555555; mso-line-height-alt: 18px;">
                <p style="line-height: 1.5; word-break: break-word; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; font-size: 16px; mso-line-height-alt: 24px; margin: 0;"><span style="font-size: 16px; color: #6d89bc;">Cheers,</span></p>
                <p style="line-height: 1.5; word-break: break-word; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; font-size: 16px; mso-line-height-alt: 24px; margin: 0;"><span style="font-size: 16px; color: #6d89bc;">From</span></p>
                <p style="line-height: 1.5; word-break: break-word; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 18px; margin: 0;"> </p>
                </div>
                </div>
                <!--[if mso]></td></tr></table><![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
                <tbody>
                <tr style="vertical-align: top;" valign="top">
                <td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 60px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px;" valign="top">
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid #BBBBBB; width: 100%;" valign="top" width="100%">
                <tbody>
                <tr style="vertical-align: top;" valign="top">
                <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                <!--[if (!mso)&(!IE)]><!-->
                </div>
                <!--<![endif]-->
                </div>
                </div>
                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                </div>
                </div>
                </div>
                <div style="background-color:transparent;">
                <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffffff;">
                <div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:640px"><tr class="layout-full-width" style="background-color:#ffffff"><![endif]-->
                <!--[if (mso)|(IE)]><td align="center" width="640" style="background-color:#ffffff;width:640px; border-top: 1px solid #E5EAF3; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
                <div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
                <div style="width:100% !important;">
                <!--[if (!mso)&(!IE)]><!-->
                <div style="border-top:1px solid #E5EAF3; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                <!--<![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
                <tbody>
                <tr style="vertical-align: top;" valign="top">
                <td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 35px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px;" valign="top">
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid #BBBBBB; width: 100%;" valign="top" width="100%">
                <tbody>
                <tr style="vertical-align: top;" valign="top">
                <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                <div align="center" class="img-container center autowidth" style="padding-right: 20px;padding-left: 20px;">
                <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 20px;padding-left: 20px;" align="center"><![endif]-->
                <div style="font-size:1px;line-height:20px"> </div>
                <div style="font-size:1px;line-height:15px"> </div>
                <!--[if mso]></td></tr></table><![endif]-->
                </div>
                <table cellpadding="0" cellspacing="0" class="social_icons" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" valign="top" width="100%">
                <tbody>
                <tr style="vertical-align: top;" valign="top">
                <td style="word-break: break-word; vertical-align: top; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
                <table align="center" cellpadding="0" cellspacing="0" class="social_table" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-tspace: 0; mso-table-rspace: 0; mso-table-bspace: 0; mso-table-lspace: 0;" valign="top">
                <tbody>
                <tr align="center" style="vertical-align: top; display: inline-block; text-align: center;" valign="top">
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                <table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
                <tbody>
                <tr style="vertical-align: top;" valign="top">
                <td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 40px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px;" valign="top">
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid #BBBBBB; width: 100%;" valign="top" width="100%">
                <tbody>
                <tr style="vertical-align: top;" valign="top">
                <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                <!--[if (!mso)&(!IE)]><!-->
                </div>
                <!--<![endif]-->
                </div>
                </div>
                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                </div>
                </div>
                </div>
                <div style="background-color:transparent;">
                <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:640px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
                <!--[if (mso)|(IE)]><td align="center" width="640" style="background-color:transparent;width:640px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
                <div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
                <div style="width:100% !important;">
                <!--[if (!mso)&(!IE)]><!-->
                <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                <!--<![endif]-->
                <div class="mobile_hide">
                <table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
                <tbody>
                <tr style="vertical-align: top;" valign="top">
                <td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 30px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px;" valign="top">
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid #BBBBBB; width: 100%;" valign="top" width="100%">
                <tbody>
                <tr style="vertical-align: top;" valign="top">
                <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                </div>
                <!--[if (!mso)&(!IE)]><!-->
                </div>
                <!--<![endif]-->
                </div>
                </div>
                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                </div>
                </div>
                </div>
                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                </td>
                </tr>
                </tbody>
                </table>
                <!--[if (IE)]></div><![endif]-->
                </body>
                </html>

            </textarea>
        </figure>
    </center>
    <center><button onclick="copy2()" class="btn btn-primary mt-2"><i class="fas fa-copy"></i> Copy</button></center>

    <hr>

    <script>
         function copy(){
        var content = document.getElementById('pilih1');
        content.select();
         document.execCommand('copy');
         }
    </script>
        <script type="text/javascript">
        function copy2(){
        var content = document.getElementById('pilih2');
        content.select();
         document.execCommand('copy');
         }
        </script>
  </body>
@endsection
