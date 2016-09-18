<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>FastFruit</title>
<!---css--->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!---css--->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Space Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---js--->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---js--->
<!---fonts-->
<!--<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?nav-family=Righteous' rel='stylesheet' type='text/css'>-->
<!---fonts-->

<!---dependent-dropdown-->
{{-- <link href="{{asset('kartik-v/dependent-dropdown/css/dependent-dropdown.min.css')}}" media="all" rel="stylesheet" type="text/css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{asset('kartik-v/dependent-dropdown/js/dependent-dropdown.min.js')}}" type="text/javascript"></script> --}}
<!-- optionally if you need translation for your language then include locale file as mentioned below -->
{{-- <script src="{{asset('kartik-v/dependent-dropdown/js/depdrop_locale_<lang>.js')}}"></script> --}}
<!---dependent-dropdown-->

<script type="text/javascript">
    window.onload = function(){
        document.getElementById("{{"nav-".Request::path()}}").className="active";   
    }
    
</script>

</head>
<body>
    <!--header-->
    <div class="header-section">
        <div class="container">
            <div class="head-top" style="height: 80px">             
                <div class="navbar-brand">
                    <a href="/">
                        <img src="images/fastfruit.png" style="width: 300px; height: 70px; position: absolute;">
                    </a>
                </div>
                @if(!Auth::check())
                <div class="email">
                    <ul>                                
                        <li>
                            <a href="login" >
                                <i class="glyphicon glyphicon-comment" aria-hidden="true"></i>แชท
                            </a>
                        </li>
                        <li>
                            <a href="login">
                                <i class="glyphicon glyphicon-log-in" aria-hidden="true"></i>เข้าสู่ระบบ
                            </a>
                        </li>
                        <li>
                            <a href="register">
                                <i class="glyphicon glyphicon-lock" aria-hidden="true"></i>สมัครสมาชิก
                            </a>
                        </li>
                    </ul>
                </div>
                @else
                <div class="email">
                    <ul>
                        <li>
                            <a href="chat" >
                                <i class="glyphicon glyphicon-comment" aria-hidden="true"></i>แชท
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-bell" aria-hidden="true"></i>แจ้งเตือน
                            </a>
                        </li>
                        <li>
                            <select>
                                <option value="sumet" selected>{{Auth::user()->firstName}}</option>
                                <option value="suan1" >สวนเบ็ญจวรรณ์</option>
                                <option value="suan2" >สวนกุลภัสร์</option>
                                <option value="suan3" >สวนพุดทรัพย์</option>
                                <option value="suan4" >สวนสิริจรรยา</option>
                                <option value="suan5" >สวนรุจิระธราพันธุ์</option>
                            </select>
                        </li>
                        <li>
                            <a href="logout">
                                <i class="glyphicon glyphicon-log-out" aria-hidden="true"></i>ออกจากระบบ
                            </a>
                        </li>
                    </ul>
                </div>
                @endif
                <div class="clearfix"></div>
            </div>
            <nav class="navbar navbar-default">
                <!--Brand and toggle get grouped for better mobile display-->

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>                 

                </div>


                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" >
                    <ul class="nav navbar-nav">
                        <li id="nav-/"><a href="/">หน้าแรก <span class="sr-only">(current)</span></a></li>
                        <li id="nav-orchards"><a href="orchards">ชมสวน</a></li>
                        <li id="nav-products"><a href="products">ดูผลผลิต</a></li>
                        <li id="nav-matching"><a href="matching">จับคู่สวน</a></li>
                        <li id="nav-contactus"><a href="contactus">ติดต่อเรา</a></li>
                    </ul>
                    <form method="GET" action="{{url('/search')}}" class="navbar-form navbar-right" role="search">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" name="search" class="form-control" placeholder="ค้นหา">
                        </div>
                        <button type="submit" class="btn btn-default">
                            <i class="glyphicon glyphicon-search" aria-hidden="true"></i>
                        </button>
                    </form>                         
                </div>
            </nav>
        </div>
    </div>
    <!--header-->


    @yield('content')
    

    <!--  Error handle -->
    @if($errors->any())
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="modal-body real-spa">
                    <div class="login-grids">
                        <div class="login">                                 
                            <div class="login-right">
                                <ul class="alert alert-danger" style="font-size: 100%; margin-top:-30px; padding-left:40px;">

                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>        
                    </div>
                </div>
            </div>
        </div>
    @endif
       
              <!--footer-->
                    <div class="footer-section">
                        <div class="container">
                            <div class="footer-grids">
                                <div class="col-md-1 footer-grid">
                                    
                                </div>
                                <div class="col-md-3 footer-grid">
                                    <br><br><br>
                                    <img src="images/fastfruit.png" style="width: 200px; height: 50px; ">
                                </div>
                                <div class="col-md-3 footer-grid">
                                    <h4>เมนู</h4>
                                    <ul>
                                        <li><a href="/">หน้าแรก</a></li>
                                        <li><a href="orchards">ชมสวน</a></li>
                                        <li><a href="matching">จับคู่</a></li>
                                        <li><a href="register">สมัครสมาชิก</a></li>
                                        <li><a href="/">เข้าสู่ระบบ</a></li>
                                        <li><a href="chat">แชท</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 footer-grid">
                                    <h4>ติดต่อ</h4>
                                    <ul>
                                        <li><a href="contactus">ติดต่อเรา</a></li>
                                    </ul>
                                </div>      
                                <div class="col-md-2 footer-grid">
                                </div>                      
                            <div class="clearfix"> </div>
                            </div>
                            
                        </div>
                    </div>
                    <!---footer--->
                    <!--copy-->
                    <div class="copy-section">
                        <div class="container">
                            <p>&copy; All rights reserved by FASTFRUIT</p>
                        </div>
                    </div>
                    <!--copy-->
            <!-- login -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body real-spa">
                            <div class="login-grids">
                                <div class="login">
                                    
                                    <div class="login-right">
                                        <form>
                                            <h3>เข้าสู่ระบบ</h3>
                                            <input type="text" value="อีเมล์" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your Email';}" required=""> 
                                            <input type="password" value="รหัสผ่าน" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">   
                                            <h4><a href="#">ลืมรหัสผ่าน?</a></h4>
                                            <div class="single-bottom">
                                                <input type="checkbox"  id="brand" value="">
                                                <label for="brand"><span></span>จดจำฉัน</label>
                                            </div>
                                            <input type="submit" value="เข้าสู่ระบบ" >
                                        </form>
                                    </div>                                                              
                                </div>                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //login -->
            <!-- Register -->
            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body real-spa">
                            <div class="login-grids">
                                <div class="login">
                                    <div class="login-right">
                                        <form>
                                            <h3>สมัครสมาชิก</h3>
                                            <input type="text" value="ชื่อ" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'FName';}" required="">
                                            <input type="text" value="นามสกุล" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'LName';}" required="">
                                            <input type="text" value="อีเมล์" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required=""> 
                                            <input type="password" value="รหัสผ่าน" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">   
                                            
                                            <input type="submit" value="สมัครสมาชิก" >
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>                                
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Register -->
</body>
</html>