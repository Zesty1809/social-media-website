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

                    <div class="friends">
                        <img src="social-images/user1_v1.jpg" alt="user1" class="friends_img">
                        <br>
                        Daemon Rivera
                    </div>

                    <div class="friends">
                        <img src="social-images/user2.jpg" alt="user1" class="friends_img">
                        <br>
                        Elgin
                    </div>

                    <div class="friends">
                        <img src="social-images/user3.jpg" alt="user1" class="friends_img">
                        <br>
                        Keana Reeves
                    </div>

                    <div class="friends">
                        <img src="social-images/user4.jpg" alt="user1" class="friends_img">
                        <br>
                        Fred Flintstone
                    </div>

                </div>
            </div>

            <!-- posts area-->
            <div id="box2">
                <div id="posts_box">
                    <textarea placeholder="What's on your mind?"></textarea>
                    <input id="post_button" type="submit" value="Post">
                    <br>
                </div>

                <!-- posts-->
                <div id="post_bar">

                    <!-- post 1-->
                    <div id="post">
                        <div>
                            <img id="post_img" src="social-images/user1_v1.jpg" alt="">
                        </div>
                        <div>
                            <div id="post_owner_name">Daemon Rivera</div>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse quae dignissimos ullam voluptas voluptatum eligendi temporibus quo labore. Libero dolorum cupiditate architecto eveniet fuga at? Amet nisi tempore aspernatur magni.
                            <br><br>
                            <a href="">Like</a> . <a href="">Comment</a> . <a href="">Share</a> . <span style="color: #999;">November 20 2024</span>
                        </div>
                    </div>

                    <!-- post 2-->
                    <div id="post">
                        <div>
                            <img id="post_img" src="social-images/user2.jpg" alt="">
                        </div>
                        <div>
                            <div id="post_owner_name">Elgin</div>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse quae dignissimos ullam voluptas voluptatum eligendi temporibus quo labore. Libero dolorum cupiditate architecto eveniet fuga at? Amet nisi tempore aspernatur magni.
                            <br><br>
                            <a href="">Like</a> . <a href="">Comment</a> . <a href="">Share</a> . <span style="color: #999;">November 19 2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>