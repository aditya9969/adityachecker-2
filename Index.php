
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>[ANAMAKA CC CHECKER]</title>
    <link rel="icon" href="Img/favicon.png" type="image/gif" sizes="16x16">
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/loader.js"></script>
    

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="assets/css/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="assets/css/dash_2.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="assets/css/theme-checkbox-radio.css">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->
<script>
var myVar=setInterval(function(){myTimer()},1000);
function myTimer() {
    var d = new Date();
    document.getElementById("horas").innerHTML = d.toLocaleTimeString();
}
</script>   
    <!--  BEGIN NAVBAR  -->
    <div class="header-container">
        <header class="header navbar navbar-expand-sm bg-gradient-dark col-lg-12 col-md-12 col-sm-12 col-xl-12">

            <a class="navbar-brand" href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100" fill="none"><rect width="100" height="100" fill="none" rx="0" ry="0" /><path fill="#f70e29" d="M81 32.87689C81 30.18197 78.90223 28 76.3145 28h-52.629C21.09837 28 19 30.18346 19 32.87689V67.1231C19 69.81803 21.09777 72 23.6855 72h52.629C78.90163 72 81 69.81654 81 67.12311V32.8769z" /><path fill="#ffffff" d="M37.5 59c1.38071 0 2.5 1.11929 2.5 2.5S38.88071 64 37.5 64h-8c-1.38071 0-2.5-1.11929-2.5-2.5s1.11929-2.5 2.5-2.5h8zM54 59c1.38071 0 2.5 1.11929 2.5 2.5S55.38071 64 54 64h-8c-1.38071 0-2.5-1.11929-2.5-2.5S44.61929 59 46 59h8zm16.5 0c1.38071 0 2.5 1.11929 2.5 2.5S71.88071 64 70.5 64h-8c-1.38071 0-2.5-1.11929-2.5-2.5s1.11929-2.5 2.5-2.5h8zM33 36c3.3137 0 6 2.6863 6 6s-2.6863 6-6 6-6-2.6863-6-6 2.6863-6 6-6z" /></svg><span class="navbar-brand-name" style="font-weight: bold;">[CCN & CVV CHECKER]</span></a>
            </header>
    </div>
    <!--  END MAINBAR  -->

    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

            

<div class="widget-list row">
                
                <!-- /.widget-holder -->
                <div class="widget-holder widget-full-height widget-flex col-lg-6">
                    <div class="md-form">
    <div class="col-md-12">
  <textarea type="text" style="text-align: center;" id="lista" class="md-textarea form-control" rows="10" placeholder="Drop CC Here: 54686586765xxxxx|xx|xxxx|xxx"></textarea>
  <label for="lista"></label>
  <div name="lines_count" type="hidden" id="lines" style="display:none;" >Loading...</div>
</div>
</div>
<center>
<button type="button" class="btn btn-primary" id="submit" onclick="start()">Start</button>
<button type="button" class="btn btn-danger">Stop</button>
</center>
<br></br>
<select class="form-control h-10" id="gate" onchange="check()">
<option  value="Gates/test.php">--Select Atleast One Gate--</option>
<option  value="Gates/api.php">1.Stripe Donate 0.50$</option>
</select>
                </div>

                <div class="widget-holder widget-full-content widget-full-height col-lg-6">

                        <div class="widget-four">
                            
                            <div class="widget-content">
                                <div class="vistorsBrowser">
                                    <div class="browser-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        </div>
                                        <div class="w-browser-details">
                                            <div class="w-browser-info">
                                                <h6>CVV</h6>
                                                <span class="badge rounded-pill bg-primary" id="cvv_count"></span>
                                            </div>
                                            <div class="w-browser-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-primary" id ="cvv_count_bar" role="progressbar" style="width: 0%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="browser-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                        </div>
                                        <div class="w-browser-details">
                                            
                                            <div class="w-browser-info">
                                                <h6>CCN</h6>
                                                <span class="badge rounded-pill bg-success" id="ccn_count"></span>
                                            </div>

                                            <div class="w-browser-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-success" id ="ccn_count_bar" role="progressbar" style="width: 0%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="browser-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                        <div class="w-browser-details">
                                            
                                            <div class="w-browser-info">
                                                <h6>DEAD</h6>
                                                <span class="badge rounded-pill bg-danger" id="dead_count"></span>
                                            </div>

                                            <div class="w-browser-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-warning" id ="dead_count_bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="browser-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M7 15h0M2 9.5h20"/></svg>
                                        </div>
                                        <div class="w-browser-details">
                                            
                                            <div class="w-browser-info">
                                                <h6>CC TO BE TESTED</h6>
                                                <span class="badge rounded-pill bg-dark" id="total_count"></span>
                                              

                                            </div>

                                            <div class="w-browser-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-dark" id ="total_count_bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    Current System Time: <span class="badge badge-primary" id="horas">NULL</span> Join Now: <span class="badge badge-primary" id="horas"><a href="https://t.me/+E7fHsGLp_KtkNTBl">@aNamaka</a></span> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16"> <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/><span>Telegram</span></svg>
                                </div>
                            </div>
                        </div>
                    </div>       
</div>
                  <div class="row layout-top-spacing">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="row widget-statistic">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm- col-12">
                                <div class="widget widget-one_hybrid widget-followers" id="widget_followers_id" onclick="Mudaestado();">
                                    <div class="widget-heading">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        </div>
                                        <p class="w-value">CVV</p>
                                        <h5 class=""></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="widget widget-one_hybrid widget-engagement" id="widget_engagement_id" onclick="Mudaestado_1();">
                                    <div class="widget-heading">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                        </div>
                                        <p class="w-value">CCN</p>
                                        <span class="badge badge-success" id="live2"></span>
                                        <h5 class=""></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="widget widget-one_hybrid widget-referral" id="widget_referral_id" onclick="Mudaestado_2();">
                                    <div class="widget-heading">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                        <p class="w-value">DEAD</p>
                                        <span class="badge badge-success" id="live2"></span>
                                        <h5 class=""></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing" id="cvv_lives" style="display: none">
                        <div class="widget widget-one">
                            <div class="widget-heading">
                                <h6 class="cvv-master">CVV</h6>
                                <div id="bode"><span id="cvv_approved" class="cvv-approved"></span>
                              </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing" id="ccn_lives" style="display: none">
                        <div class="widget widget-one">
                            <div class="widget-heading">
                                <h6 class="ccn-master">CCN</h6>
                                <div id="bode"><span id="ccn_approved" class="ccn-approved"></span>
                              </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing" id="dead_cc" style="display: none">
                        <div class="widget widget-one">
                            <div class="widget-heading">
                                <h6 class="dead-master">DEAD</h6>
                                <div id="bode"><span id="declined_cc" class="declined-cc"></span>
                              </div>
                            </div>
                            
                        </div>
                    </div>
                                    

                        </div>
                    </div>

<br></br>
                    <div class="footer-copyright text-center py-1">
      <a href="https://t.me/+E7fHsGLp_KtkNTBl">[ EDITED BY: TEAM ANAMAKA]</a>
    <div class="footer-copyright text-center py-1">
      <a href="https://t.me/aNamakaOfficial"> CLICK HERE TO CONTACT US</a>
    </div>

        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="assets/js/dash_2.js"></script>

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script type="text/javascript">
function Mudaestado() {
        var display = document.getElementById("cvv_lives").style.display;
        if(display == "none"){
            if(document.getElementById("ccn_lives").style.display || document.getElementById("dead_cc").style.display == 'block'){
                document.getElementById("ccn_lives").style.display = 'none';
                document.getElementById("dead_cc").style.display = 'none';
                document.getElementById("cvv_lives").style.display = 'block';
            }
            else {
                document.getElementById("cvv_lives").style.display = 'block';
            }
        }
        else
            document.getElementById("cvv_lives").style.display = 'none';
    }
</script>
<script type="text/javascript">
function Mudaestado_1() {
        var display = document.getElementById("ccn_lives").style.display;
        if(display == "none"){
            if(document.getElementById("cvv_lives").style.display || document.getElementById("dead_cc").style.display == 'block'){
                document.getElementById("cvv_lives").style.display = 'none';
                document.getElementById("dead_cc").style.display = 'none';
                document.getElementById("ccn_lives").style.display = 'block';
            }
            else {
                document.getElementById("ccn_lives").style.display = 'block';
            }
        }
        else
            document.getElementById("ccn_lives").style.display = 'none';
    }
</script>
<script type="text/javascript">
function Mudaestado_2() {
        var display = document.getElementById("dead_cc").style.display;
        if(display == "none"){
            if(document.getElementById("cvv_lives").style.display || document.getElementById("ccn_lives").style.display == 'block'){
                document.getElementById("cvv_lives").style.display = 'none';
                document.getElementById("ccn_lives").style.display = 'none';
                document.getElementById("dead_cc").style.display = 'block';
            }
            else {
                document.getElementById("dead_cc").style.display = 'block';
            }
        }
        else
            document.getElementById("dead_cc").style.display = 'none';
    }
</script>
</script>
    <script type="text/javascript">
      function start() {
        var linha = $("#lista").val();
        var linhaenviar = linha.split("\n");
        var total = linhaenviar.length;
        var tested = total;
        document.getElementById("total_count").innerHTML = total;
        $('#total_count_bar').css('width', ((tested/total)*100)+'%').attr('aria-valuenow', ((tested/total)*100));  
        console.log(total);
        var ap = 0;
        var rp = 0;
        var up = 0;
        document.getElementById('cvv_count').setAttribute('value','')
        document.getElementById('ccn_count').setAttribute('value','')
        document.getElementById('dead_count').setAttribute('value','')
        linhaenviar.forEach(function(value, index) {
            setTimeout(
                function() {
        var req = new XMLHttpRequest();
        console.log("Grabbing Value");
        req.onreadystatechange = function () {
          if (req.readyState == 4 && req.status == 200) {
            if (req.responseText.match("#Aprovadas")) {
            remove();
            ap++;
            tested --;
            approved(req.responseText + "");
            }
            else if (req.responseText.match("#Ccn")) { 
            remove();
            rp++;
            tested --;
            removed(req.responseText + "");
            }
            else { 
            remove();
            up++;
            tested --;
            unknownccs(req.responseText + "");
            }   
            $('#cvv_count').html(ap);
            $('#cvv_count_bar').css('width', ((ap/total)*100)+'%').attr('aria-valuenow', ((ap/total)*100));
            $('#ccn_count').html(rp);
            $('#ccn_count_bar').css('width', ((rp/total)*100)+'%').attr('aria-valuenow', ((rp/total)*100));
            $('#dead_count').html(up);
            $('#dead_count_bar').css('width', ((up/total)*100)+'%').attr('aria-valuenow', ((up/total)*100));
            document.getElementById("total_count").innerHTML = tested;
            $('#total_count_bar').css('width', ((tested/total)*100)+'%').attr('aria-valuenow', ((tested/total)*100));
          }
        }
        var whichgate = document.getElementById('gate').value;
        var gate = whichgate + "?lista="
        req.open("GET", gate + value, true);
        req.send(null);
        }, 1000 * index);
        });
      }
    function approved(str) {
        $("#cvv_approved").append(str + "<br>");
    }
    function removed(str) {
        $("#ccn_approved").append(str + "<br>");
    }
    function unknownccs(str) {
        $("#declined_cc").append(str + "<br>");
    }
    function remove() {
        var lines = $("#lista").val().split('\n');
        lines.splice(0, 1);
        $("#lista").val(lines.join("\n"));
    }

    </script>
</body>
</html>