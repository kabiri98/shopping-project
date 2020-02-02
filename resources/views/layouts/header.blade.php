
<header id="header">
    <div class="container">
        <div class="row">

            <!--  ==========  -->
            <!--  = Logo =  -->
            <!--  ==========  -->
            <div class="span7">
                <a class="brand" href="index.html">
                    <img src="images/logo.png" alt="Webmarket Logo" width="48" height="48" />
                    
                    <span class="pacifico">فروشگاه آنلاین بچه های مکتب</span>
                   <span class="tagline"></span>
                </a>
            </div>

            <!--  ==========  -->
            <!--  = Social Icons =  -->
            <!--  ==========  -->
            <div class="span5">
                <div class="topmost-line">
                    <div class="lang-currency">
                        <div class="dropdown js-selectable-dropdown">
                            <!-- for all available country flags look the styles in lib/components/_flags.scss -->
                            
                        </div>
                        <div class="dropdown js-selectable-dropdown">
                            <ul class="dropdown-menu js-possibilities" role="menu" aria-labelledby="dLabel">
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="top-right">
                   
                    <div class="register">
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <meta http-equiv="X-UA-Compatible" content="ie=edge">
                            <title>Document</title>
                        </head>
                        <body>
                            
                        </body>
                        </html>
                        @if(!Auth::check())
                        <a href="/login" >ورود</a> یا
                        <a href="/register" >ثبت نام</a>
                        @else
                            <form action="/logout" method="Post">
                                @csrf
                                <button type="submit">خروج</button>
                            </form>
                        @endif

                    </div>
                </div>
            </div> <!-- /social icons -->
        </div>
    </div>
</header>
