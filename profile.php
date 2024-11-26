<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Mybook</title>
    <link rel="stylesheet" href="styles/profile.css">
</head>
<body>

    <!-- top bar-->
    <div id="blue-bar">
        <div id="mybook">
            <span id="mybook-text">Mybook</span> &nbsp;&nbsp; <input type="text" id="search_box" placeholder="Search for people">

            <img src="social-images/selfie-1.jpeg" alt="profile-picture" id="profile-picture">
        </div>
    </div>

    <!-- cover area-->
    <div id="cover-area">

        <div id="cover-container">
            <img src="social-images/mountain.jpg" alt="mountain" id="mountain-img">
            <img src="social-images/selfie-1.jpeg" alt="profile-picture" id="profile-picture-round"><br>
            <div id="zesty-kun">Zesty Kun</div>  
            <br>
            <div class="menu-buttons">Timeline</div> 
            <div class="menu-buttons">About</div> 
            <div class="menu-buttons">Friends</div> 
            <div class="menu-buttons">Photos</div> 
            <div class="menu-buttons">Settings</div>
        </div>

    <!-- below cover area-->
        <div id="flexbox">
            <!-- friends area-->
            <div id="box1">
                <div id="friends_bar">
                    Friends <br>

                    <div id="friends">
                        <img src="social-images/user1.jpg" alt="user1" id="friends_img">
                        <br>
                        First User
                    </div>
                </div>
            </div>

            <!-- posts area-->
            <div id="box2"></div>
        </div>

    </div>
</body>
</html>