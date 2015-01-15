
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Life Talk Club Email</title>
    </head>

    <body style="margin:0; margin-top:30px; margin-bottom:30px; padding:0; width:100%; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; background-color: #F4F5F7;">


        <table cellpadding="0" cellspacing="0" border="0" width="100%" style="border:0; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; background-color: #F4F5F7;">
            <tbody>
                <tr>
                    <td align="center" style="border-collapse: collapse;">

                        <!-- ROW LOGO -->
                        <table cellpadding="0" cellspacing="0" border="0" width="560" style="border:0; border-collapse:collapse; background-color:#ffffff; border-radius:6px;">
                            <tbody>
                                <tr>
                                    <td style="border-collapse:collapse; vertical-align:middle; text-align center; padding:20px;">

                                        <!-- Headline Header -->
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                            <tbody>

                                                <tr><!-- logo -->
                                                    <td width="100%" style="font-family: helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: 0px; text-align: center;">
                                                        <a href="{{ URL::to('home') }}" style="text-decoration: none;">
                                                             <img src="{{ asset('assets/images/logo.png') }}" width='166px' alt="StockPop" />
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr><!-- spacer before the line -->
                                                    <td width="100%" height="20"></td>
                                                </tr>
                                                <tr><!-- line -->
                                                    <td width="100%" height="1" bgcolor="#d9d9d9"></td>
                                                </tr>
                                                <tr><!-- spacer after the line -->
                                                    <td width="100%" height="30"></td>
                                                </tr>
                                                <tr>
                                                    <td width="100%" style=" font-size: 14px; line-height: 24px; font-family:helvetica, Arial, sans-serif; text-align: left; color:#87919F;">
                                                    <p>Dear {{ $user['first_name'] }} {{ $user['last_name'] }}  ,</p>

                                                    <p> To reset your password, click on the link below and complete the form:</p>
                                                    @if($user['admin'] == 1)
                                                        <p><a href="{{ URL::to('admin/password/reset', $token) }}"> Click here to reset your password</a>.</p>
                                                    @else
                                                        <p><a href="{{ URL::to('password/reset', $token) }}"> Click here to reset your password</a>.</p>
                                                    @endif

                                                    <p>This link will expire in {{ Config::get('auth.reminder.expire', 60) }} minutes.</p>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="100%" height="15"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- /Headline Header -->

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- /ROW LOGO -->

                        <!-- Space -->
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                            <tbody>
                                <tr>
                                    <td width="100%" height="30"></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- /Space -->


                        <!-- ROW FOOTER -->
                        <table cellpadding="0" cellspacing="0" border="0" width="560" style="border:0; border-collapse:collapse; background-color:#ffffff; border-radius:6px;">
                            <tbody>
                                <tr>
                                    <td style="border-collapse:collapse; vertical-align:middle; text-align center; padding:20px;">

                                        <!-- copyright-->
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                            <tbody>
                                                <tr><!-- copyright -->
                                                    <td width="100%" style="font-family: helvetica, Arial, sans-serif; font-size: 11px; text-align: center; line-height: 24px;">
                                                        <center>Copyright &copy;  2014. All Rights Reserved.</center>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- /copyright -->


                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- /ROW FOOTER -->


                    </td>
                </tr>
            </tbody>
        </table>

    </body>
</html>
