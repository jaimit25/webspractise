

<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="stylesAutheticate.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="mainbox">
        <div class="top">
            <nav class="navigationbarbox">
                <div class="logo">
                    <img src="https://img.icons8.com/bubbles/2x/todo-list.png" alt="Logo" width="80px" height="80px">
                </div>
                <div class="pushleftbox">
                    <ul id="primary-menu" class="menubox nav-menu">
                        <li class="menu-itembox "><a class="nav__link" href="index.html">Home</a></li>
                        <li class="menu-itembox "><a class="nav__link" href="#about">About</a></li>
                        <li class="menu-itembox "><a class="nav__link" href="#contactus">Contact us</a></li>
                        <li class="menu-itembox "><a class="nav__link activebox" href="Authenticate.html">Login/Register</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <section>
            <div style="background-image: url('https://thumbor.forbes.com/thumbor/fit-in/1200x0/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fdam%2Fimageserve%2F1092571024%2F0x0.jpg%3Ffit%3Dscale'); background-size: cover; height:600px; width:100%;">
                <!-- background-attachment: fixed; -->
            </div>
        </section>

         
          <div class="padding">
            <div class="container">
            
                <div class="row">
            
                    <div class="col-sm-6">
                    <img src="images/design.png" class="img-responsive">
                    </div>
            
            
                    <div class="col-sm-6 text-center" style="margin-top:30px" id="about">
                    <h2>About Website</h2> 
                    <p class="lead"> Our website is designed and Maintained by No one But 
                        you can contribute to our website in few months and we also provide 
                        facility of storing your data into cloud storage free of cost.</p>
                    </div>
            
                </div>
            
            </div>
            </div>

    </div>
    <div style="background-image: url('https://images.westend61.de/0000926064pw/happy-business-people-discussing-in-meeting-at-office-CAVF47174.jpg'); background-size: cover; height:300px;width:100%;background-attachment: fixed;">
    </div>
    
    <form class="form" id="contactus" style="margin-top:40px;" action="connect.php" method="post">
      
        <div class="container" >
            <div class="form-horizontal">

                <!-- <div class="form-group " id="contactform">
                    <label class="control-label col-sm-8 Headingform" style="font-size: 30px; color: rgb(184, 196, 117);">Contact Form</label>            
                </div> -->
                <div class="boxalign">
                    <label  style="font-size: 30px; color: rgb(184, 196, 117);">Contact Form</label>
                </div>
                <div class="form-group alignbox">
                    <label class="control-label col-sm-2" for="name">Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                    </div>
                </div>
                <div class="form-group alignbox">
                    <label class="control-label col-sm-2" for="head">Enter Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="head" name="heading" placeholder="Enter Heading">
                    </div>
                </div>
                <div class="form-group alignbox">
                    <label class="control-label col-sm-2" for="text">Message</label>
                    <div class="col-sm-10">
                        <textarea rows="2" class="form-control textheight" placeholder="Enter Message ..." name="message"></textarea>
                        <!-- <input type="text" class="form-control textheight" id="text"  placeholder="Enter Message ..."> -->
                    </div>
                </div>
                <!-- <div class="middle" style="background-color: antiquewhite;">
                    <div class="container">
                        <div class="col-sm-12"> 
                            <button class="button button1">Send Details</button>
                        </div>
                    </div>s
                </div> -->
                <div class="boxalign">
                    <input type="submit" value="Submit Details" class="button button1"></input>
                </div>
            </div>
        </div>
        
</form>


 

    
 
    <footer  class="footerbox" style="background:rgb(190, 209, 122);  left:0; bottom:0; right:0; width:100%;
    margin-top: 30px;
    height:60px;">
    <div class="center" style="display:flex;
    justify-content: center;
    align-content: center;
    align-items: center;  ">
        <p style="color:balck; font-size:21px">
            @No Copyright
        </p>
    </div>
    </footer>
 
    
</body>

</html>
