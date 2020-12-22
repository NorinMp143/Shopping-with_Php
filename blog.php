<?php
    require 'include/common.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog - Shopping</title>
	<?php
			require 'include/links.php';
		?>
	<style>

		main{
			color: white;
		}
        .intro h2 {
            font-weight: bold;
            margin-bottom: 80px;
            padding-top: 60px;
            color: #000;
        }
        .card{
            background: #fff;
            border: 0px solid rgba(0,0,0,.125);
            border-radius: 2px;
            box-shadow: 0 1px 3px rgba(0,0,0,.92),0 1px 2px rgba(0,0,0,.94);
            transition: all .3s cubic-bezier(.25,.8,.25,1);
        }
        .card:hover {
		    box-shadow: 0 14px 28px rgba(0,0,0,0.25),0 10px 10px rgba(0,0,0,0.22);
		}
        .card-img-top{height:180px!important;}
        .card a:hover{color:#52d3aa;}
        .card a{color:#000;}
        #copyright{text-align: center;}
        .card-body{padding: 0.59rem;}
        @media(max-width:762px){
            #padd{padding:5px 18px 5px 18px;}
            .intro h2{
                font-size:24px;
                padding-top: 25px;
                margin-bottom: 40px;
            }
        }
        @media(min-width:960px){
            #padd{padding:0 50px 60px 50px;}
        }
    </style>
</head>
<body>
	<div class="whole_container">
		<?php
			require 'include/header.php';
		?>
		<main class="blogs">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center">Blogs</h2>
                </div>
                <div id="padd">
                    <div class="card-deck text-center">
                        <div class="card"><a href="Should-You-Buy-The-All-New-Apple-AirPods.php">
                          <img class="card-img-top" src="img/Airpods.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Should You Buy The All New Apple AirPods?</h5>
                            <div class="card-date">
                                <p class="card-date-text">January 10, 2017</p>
                            </div>
                          </div></a>
                        </div>
                        <div class="card"><a href="Should-You-Buy-The-All-New-Apple-AirPods.php">
                          <img class="card-img-top" src="img/microsoft-surface-book.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">What’s the Best Laptop for a Medical Student?</h5>
                            <div class="card-date">
                                <p class="card-date-text">January 12, 2017</p>
                            </div>
                          </div></a>
                        </div>
                        <div class="card"><a href="Should-You-Buy-The-All-New-Apple-AirPods.php">
                          <img class="card-img-top" src="img/Apple-MaCbook-Pro-vs-Air.png" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title text-center">MacBook Air 2018 vs MacBook Pro 2018</h5>
                            <div class="card-date">
                                <p class="card-date-text">November 23, 2018</p>
                            </div>
                          </div></a>
                        </div>
                    </div>
                </div>
                <div id="padd">
                    <div class="card-deck text-center justify-content-center">
                        <div class="card" style="max-width:20.5rem;"><a href="Should-You-Buy-The-All-New-Apple-AirPods.php">
                          <img class="card-img-top" src="img/budget-camera-phones.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">The Best Budget Camera Phones</h5>
                            <div class="card-date">
                                <p class="card-date-text">December 24, 2018</p>
                            </div>
                          </div></a>
                        </div>
                      </div>
                </div>
            </div>
        </main>
        <?php
			include 'include/footer.php';
		?>
    </div>
</body>
</html>
