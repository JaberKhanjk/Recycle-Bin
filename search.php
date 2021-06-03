<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Search</title>
    <link rel="stylesheet" href="css/semantic.min.css">
</head>

<body>
    <div class="ui fluid menu">
       
        <div style="margin-left: 20px" class="header item">
            Recycle Bin
        </div>
      <div class="right menu">
        <a class="item active">Home</a>
        <a  href="aboutus.php" class="item">About US</a>
        <a class="item">Seller Dashboard</a>
        <a class="item">Sign Up</a>
        <a class="item">Sign In</a>
        <a class="item">Log Out</a>
      </div>
    </div>
 
    <div class="ui grid">
        <div class="ui three wide column" style="background-image: url('../Recycle-Bin/back.jpg'); background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover; min-height: 100vh;">
            <div style="padding: 20px">
                <a href="home.php"><img style="width:180px;margin-left:auto;margin-right:auto;display:block " src="../Recycle-Bin/logo.png"> </a>
                <h1 style="text-align:center;">Recycle Bin</h1>
               
                <!--                <p style="text-align:center">CSE-222 Project</p>-->
                <select class="ui fluid dropdown">
                      <option value="">Location</option>
                      <option value="0">Barisal</option>
                      <option value="1">Dhaka</option>
                      <option value="2">Rangpur</option>
                      <option value="3">Rajshahi</option>
                      <option value="4">Mymensingh</option>
                      <option value="5">Sylhet</option>
                      <option value="6">Chittagong</option>
                </select>
                <div style="padding:10px">
            </div>
                <select class="ui fluid dropdown">
                      <option value="">Price</option>
                      <option value="0">Low to High</option>
                      <option value="1">High to Low</option>
 
                </select>
                <button style="margin-top: 10px" class="ui center floated fluid button" type="submit">Filter</button>
                
                
            </div>
            <div style="padding:30px">
            </div>
        </div>
        <div class="ui thirteen wide column" style="background-image: url('../Recycle-Bin/back2.jpg'); background-repeat: no-repeat ;background-size: cover; min-height: 100vh;">
            <h1 style="color: black;text-align: center; font-size: 5vh;padding-top: 30px;font-weight: 900">Find Your Desired Product</h1>
            <form class="ui form" method="post" action="searchresult.php" style="padding-top: 30px;width: 50%;margin-left: 250px">
                <div class="field">
                        <!-- <label>Name</label> -->
                    <input type="text" name="search_query" placeholder="Seach product">
                </div>
               
                <div class="ui animated fade fluid button" tabindex="0">
                  <div class="visible content">Search</div>
                  <div class="hidden content">
                    Find Your Desired Product
                  </div>
                </div>
            </form>
            
        
                <div class="ui text container" style="padding-top: 40px;margin-left:50px">
            <h2>Search Result : </h2>
    <table class="ui celled unstackable table" style=" border: 2px solid powderblue; width: 1000px;height: 200px;">

                
    </table>
    <table class="ui celled unstackable table" style=" border: 2px solid powderblue; width: 1000px;height: 200px;">

                
    </table>
    <table class="ui celled unstackable table" style=" border: 2px solid powderblue; width: 1000px;height: 200px;">

                
    </table>
        </div>

        </div>
    </div>



    <!-- Rest of the page content -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/semantic.min.js"></script>
</body>

</html>
