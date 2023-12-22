<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>facebook.com</title>
    <!-- style css link -->
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<!-- header section start -->


    <header>
        <div class="header-container">
            <div class="header-wrapper">
                <div class="logoBox">
                    <img src="images/facebook-logo.png" alt="logo">
                </div>
                <div class="searchBox">
                    <input type="search">
                    <i class="fas fa-search"></i>
                </div>
                <div class="iconBox1">
                    <i class="fa-solid fa-house"></i>
                    <i class="fa-solid fa-user-group"></i>
                    <i class="fa-solid fa-video"></i>
                    <i class="fa-solid fa-gamepad"></i>
                </div>
                <div class="iconBox2">
                    <i class="fa-solid fa-circle-plus"></i>
                    <i class="fa-brands fa-facebook-messenger"></i>
                    <i class="fa-solid fa-bell"></i>
                    <label><img src="images/user.jpg" alt="user"></label>
                    <i class="fa-solid fa-caret-down"></i>
                </div>
            </div>
        </div>
    </header>


<!-- header section end -->
<!-- home section start -->


<div class="home">
    <div class="container">
        <div class="home-weapper">

            <!-- home left start here -->
            <div class="home-left">

                <div class="profile">
                    <img src="images/user.jpg" alt="user">
                    <h3>Zahidul hossain</h3>
                </div>

                <div class="pages">
                    <h4 class="mini-headign">Pages</h4>
                    <label>
                        <img src="images/messenger.png" alt="messenger">
                        <span>messenger</span>
                    </label>
                    <label>
                        <img src="images/instagram.png" alt="instagram">
                        <span>instagram</span>
                    </label>
                    <button class="see-more-btn">See more <i class="fa-solid fa-angle-down"></i></button>
                </div>

                <div class="group">
                    <h4 class="mini-headign">Group</h4>
                    <label>
                        <img src="images/gg.png" alt="group01">
                        <span>Graphic design</span>
                    </label>

                    <label>
                        <img src="images/gg2.png" alt="group02">
                        <span>website design</span>
                    </label>

                    <label>
                        <img src="images/gg3.png" alt="group03">
                        <span>ZED.zahidul</span>
                    </label>

                    <button class="see-more-btn">See more <i class="fa-solid fa-angle-down"></i></button>
                </div>

                <div class="games">
                    <h4 class="mini-headign">Games</h4>
                    <label>
                        <img src="images/game.png" alt="game01">
                        <span>Facebook games</span>
                    </label>
                    <label>
                        <img src="images/game2.png" alt="game02">
                        <span>Free Play Games</span>
                    </label>
                    <button class="see-more-btn">See more <i class="fa-solid fa-angle-down"></i></button>
                </div>

                <div class="explore">
                    <h4 class="mini-headign">Explore</h4>

                    <a href="#"><i class="fa-solid fa-user-group"></i> Group</a>
                    <a href="#"><i class="fa-solid fa-star"></i></i> Favorites</a>
                    <a href="#"><i class="fa-solid fa-bookmark"></i></i> Saves</a>
                    <a href="#"><i class="fa-solid fa-clock"></i> Events</a>
                    <a href="#"><i class="fa-solid fa-flag"></i> Pages</a>

                    <div><label class="darkTheme"> <span></span></label> Apply Dark Theme</div>

                    <button class="see-more-btn">See more <i class="fa-solid fa-angle-down"></i></button>
                </div>

            </div><!-- home left end here -->

            <!-- home center start here -->

            <div class="home-center">
                <div class="home-center-wrapper">
                    <div class="stories">
                        <h3 class="mini-headign">Stories</h3>
                        <div class="stories-wrapper">

                            <div class="single-stories">
                                <label><img src="images/user.jpg" alt="user"></label>
                                <div>
                                    <img src="images/user.jpg" alt="user">
                                    <i class="fa-solid fa-circle-plus"></i>
                                    <b>Create Stories</b>
                                </div>
                            </div>

                            <div class="single-stories">
                                <label><img src="images/us.png" alt="sp"></label>
                                <div>
                                    <img src="images/ss.jpg" alt="ss">
                                    <b>Your Name</b>
                                </div>
                            </div>

                            <div class="single-stories">
                                <label><img src="images/us2.png" alt="sp2"></label>
                                <div>
                                    <img src="images/ss2.jpg" alt="ss2">
                                    <b>Your Name</b>
                                </div>
                            </div>

                            <div class="single-stories">
                                <label><img src="images/us3.png" alt="sp3"></label>
                                <div>
                                    <img src="images/ss3.jpg" alt="ss3">
                                    <b>Your Name</b>
                                </div>
                            </div>

                            <div class="single-stories">
                                <label><img src="images/us4.png" alt="sp4"></label>
                                <div>
                                    <img src="images/ss4.jpg" alt="ss4">
                                    <b>Your Name</b>
                                </div>
                            </div>


                        </div>
                    </div>



                    <div id="app">
                        <create-post></create-post>
                        <post-user></post-user>
                    </div>

                      @vite('resources/js/app.js')


                </div> <!-- home center wrapper end -->
            </div> <!-- home center end -->

            <div class="home-right">
                <div class="home-right-wrapper">

                    <div class="event-friend">
                        <div class="event">
                            <h3 class="heading">Upcoming Events <span>see all</span></h3>
                            <img src="images/eve.jpg" alt="event-img">
                            <div class="event-date">
                                <h3>21 <b>july</b></h3>
                                <h4>United state of America <span>New York City</span></h4>
                            </div>
                            <button><i class="fa-regular fa-star"></i> interested</button>
                        </div>

                        <hr>

                        <div class="friend">
                            <h3 class="heading">Friend Requests <span>see all</span></h3>
                            <ul>
                                <li><img src="images/user4.jpg" alt="user"></li>
                                <li>
                                    <b>armanul islam</b>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                    <button>confirm</button><button class="friend-remove">remove</button>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="create-page">
                        <ul>
                            <li>
                                <i class="fa-solid fa-circle-plus"></i>
                                <h4>Create Page & Groups</h4>
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </li>
                            <li>
                                <img src="images/group.jpg" alt="groups">
                            </li>
                            <li>
                                <b>simple group or page name <span>200k Members</span></b>
                                <button>Join Group</button>
                            </li>
                        </ul>
                    </div>

                    <div class="messenger">
                        <div class="messenger-search">
                            <i class="fa-solid fa-user-group"></i>
                            <h4>Messenger</h4>
                            <input type="search" placeholder="Search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <ul>
                            <li>
                                <img src="images/us2.png" alt="user">
                                <b>Zunayed Hossain <span>Online</span></b>
                                <i class="fa-brands fa-facebook-messenger"></i>
                            </li>

                            <li>
                                <img src="images/us3.png" alt="user">
                                <b>Armanul Islam <span>Offline</span></b>
                                <i class="fa-brands fa-facebook-messenger"></i>
                            </li>

                            <li>
                                <img src="images/us4.png" alt="user">
                                <b>Mohammad Amir <span>Online</span></b>
                                <i class="fa-brands fa-facebook-messenger"></i>
                            </li>
                        </ul>
                    </div>

                </div><!-- home right wrapper end -->
            </div><!-- home right end -->






        </div>
    </div>
</div>




<!-- home section end -->

<script>
    var darkButton = document.querySelector(".darkTheme");

    darkButton.onclick = function(){
        darkButton.classList.toggle("button-Active");
        document.body.classList.toggle("dark-color")
    }

</script>

</body>
</html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
}
:root{
    --background: #d1deec;
    --foreground: #f1f3f5;
    --white: #fff;
    --black: #000;
    --gray: #6e6e6e;
    --shadow: #76767663;
    --border: #cfcfcf;
}
.dark-color{
    --background: #222230;
    --foreground: #42435c;
    --white: #2b2c44;
    --black: #eeecff;
    --gray: #d5dfd5;
    --shadow: #00000063;
    --border: #3f4172;
}

.darkTheme.button-Active span{
    margin-left: 16px;
}

body{
    background: var(--background);
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: #3a78ffec;
}
button:focus,
input:focus{
    border: none;
    outline: none;
}
h1,h2,h3,h4,h5,h6,b{
    color: var(--black);
}

a:focus, a:hover{
    text-decoration: none;
    color: inherit;
}

/* header section style start here */

header{
    width: 100%;
    height: 150px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.header-container{
    width: 95%;
    background: var(--white);
    height: 100px;
    overflow: hidden;
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 2px 5px 0 var(--shadow);
}
.header-wrapper{
    display: flex;
    width: 100%;
    height: 100%;
    align-items: center;
    padding: 0 8px;
    justify-content: space-between;
}
.logoBox{
    width: 7%;
}
.logoBox img{
    width: 60px;
}
.searchBox{
    width: 38%;
    position: relative;
}
.iconBox1{
    width: 25%;
    display: flex;
    justify-content: space-between;
    padding: 0 25px;
    border-right: 2px solid var(--border);
}
.iconBox2{
    width: 25%;
    display: flex;
    justify-content: space-between;
    padding: 0 25px;
    position: relative;
}
.searchBox input{
    padding: 15px 45px 15px 15px;
    border-radius: 50px;
    width: 100%;
    background: var(--foreground);
    border: none;
    box-shadow: 0 2px 5px 0 var(--shadow);
    color: var(--black);
}
.searchBox i{
    position: absolute;
    right: 20px;
    top: 19px;
    color: var(--black);
    cursor: pointer;
    transition: .4s;
}
.searchBox i:hover{
    color: #1877f2;
}

.iconBox1 i,
.iconBox2 i{
    font-size: 20px;
    background: transparent;
    padding: 10px;
    border-radius: 10px;
    color: #769bcb;
    transition: .4s;
}
.iconBox1 i:hover,
.iconBox2 i:hover{
    background: #1877f2;
    color: #d1deec;
    cursor: pointer;
}
.iconBox2 label{
    width: 45px;
    height: 45px;
    overflow: hidden;
    border-radius: 50px;
}
.iconBox2 label img{
    width: 100%;
}
.iconBox2 .fa-caret-down{
    position: absolute;
    right: 0;
    font-size: 16px;
    top: 7px;
}
.iconBox2 .fa-caret-down:hover{
    background: transparent;
}


/* header section style end here */

/* home section start here */

.home{
    display: flex;
    justify-content: center;
}
.container{
    width: 95%;
}
.home-weapper{
    width: 100%;
    display: flex;
    justify-content: space-between;
}
.home-left{
    width: 20%;
    background: var(--white);
    box-shadow: 0 2px 5px 0 var(--shadow);
    border-radius: 20px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    padding: 15px;
    margin-bottom: 20px;
}

.profile{
    width: 100%;
    height: 60px;
    overflow: hidden;
    border-radius: 10px;
    display: flex;
    align-items: center;
    margin-bottom: 30px;
    cursor: pointer;
}
.profile img{
    width: 40px;
    float: left;
    margin-right: 8px;
    border-radius: 50px;
}
.profile h3{
    font-size: 16px;
    color: var(--black);
    text-transform: capitalize;
}

.pages,
.group,
.games{
    width: 100%;
    display: flex;
    flex-direction: column;
    margin-bottom: 30px;
}
.mini-headign{
    text-transform: uppercase;
    color: var(--gray);
    margin-bottom: 15px;
}
.pages label,
.group label,
.games label{
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    cursor: pointer;
}
.pages label img,
.group label img,
.games label img{
    width: 35px;
    margin-right: 8px;
    box-shadow: 0 2px 5px 0 var(--shadow);
    padding: 5px;
    border-radius: 8px;
}
.pages label span,
.group label span,
.games label span{
    color: var(--gray);
    font-size: 14px;
}
.see-more-btn{
    padding: 8px;
    background: var(--white);
    border: none;
    box-shadow: 0 2px 6px 0 var(--shadow);
    border-radius: 50px;
    color: #4575b3;
    font-weight: 600;
    font-size: 15px;
    margin-top: 10px;
    transition: .4s;
}
.see-more-btn i{
    font-size: 12px;
    margin-left: 5px;
}
.see-more-btn:hover{
    background: #f1f3f5;
    box-shadow: 0 5px 6px 0 #76767663;
    cursor: pointer;
}
.explore{
    display: flex;
    flex-direction: column;
}
.explore a{
    color: #4575b3;
    margin-bottom: 15px;
    font-weight: 600;
}
.explore a:hover{
    color: #1877f2;
}
.explore a i{
    margin-right: 10px;
    width: 25px;
    height: 25px;
    box-shadow: 0 2px 5px 0 var(--shadow);
    border-radius: 8px;
    text-align: center;
    line-height: 25px;
    transition: .4s;
}
.explore > div{
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    font-weight: 600;
    color: #4575b3;
}
.darkTheme{
    width: 40px;
    height: 24px;
    background: #4575b3;
    margin-right: 12px;
    border-radius: 50px;
    position: relative;
    display: flex;
    align-items: center;
    cursor: pointer;
}
.darkTheme span{
    position: absolute;
    width: 16px;
    height: 16px;
    background: white;
    border-radius: 50px;
    left: 4px;
    transition: .5s;
}



/* home section end here */

/* home center section start here */

.home-center{
    width: 50%;
    overflow: hidden;
}
.home-center .stories,
.home-center .createPost{
    background: var(--white);
    box-shadow: 0 2px 5px 0 var(--shadow);
    border-radius: 20px;
    padding: 15px;
    margin-bottom: 20px;
}

.stories-wrapper{
    display: flex;
    justify-content: space-between;
    height: 170px;
    margin-bottom: 12px;
}

.home-center .mini-headign{
    color: #1877f2;
    margin-bottom: 10px;
}
.single-stories{
    width: 18%;
    position: relative;
    padding-top: 25px;
}
.single-stories label{
    width: 45px;
    height: 45px;
    background: #daeaff;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top: 0;
    border-radius: 50px;
    overflow: hidden;
    border: 3px solid #1877f2;
}
.single-stories label img{
    width: 100%;
}
.single-stories > div{
    width: 100%;
    overflow: hidden;
    height: 100%;
    border-radius: 18px;
    text-align: center;
    box-shadow: 1px 6px 6px 0 var(--shadow);
}
.single-stories > div img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.single-stories > div b{
    position: absolute;
    bottom: 5px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 12px;
    color: white;
    font-weight: 400;
    text-shadow: 0 1px 8px black;
}
.single-stories > div i{
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 25px;
    color: white;
}



/* createPost start */


/* createPost end */

/* facebook post 01 start */


/* facebook post 01 end */
/* home center section end here */

/* home right start */

.home-right{
    width: 25%;
    overflow: hidden;
}
.home-right-wrapper{
    display: flex;
    flex-direction: column;
}
.event-friend,
.create-page,
.messenger{
    background: var(--white);
    box-shadow: 0 2px 5px 0 var(--shadow);
    border-radius: 20px;
    padding: 15px;
    margin-bottom: 20px;
}
.event{
    display: flex;
    flex-direction: column;
}
.heading{
    color: #1877f2;
    margin-bottom: 12px;
}
.heading span{
    font-size: 10px;
    float: right;
    font-weight: 600;
    color: var(--gray);
    cursor: pointer;
}
.event img{
    width: 100%;
    border-radius: 10px;
    margin-bottom: 18px;
}
.event-date{
    display: flex;
    margin-bottom: 12px;
}
.event-date h3{
    color: #1877f2;
    text-align: center;
    line-height: 20px;
    margin-right: 10px;
    background: var(--white);
    padding: 6px;
    box-shadow: 0 2px 5px 0 var(--shadow);
    border-radius: 6px;
}
.event-date h3 b{
    color: var(--black);
    display: block;
    text-transform: uppercase;
}
.event-date h4{
    color: var(--black);
    font-size: 14px;
}
.event-date h4 span{
    display: block;
    font-size: 12px;
    font-weight: 600;
    color: var(--gray);
}
.event button{
    padding: 6px;
    background: #1877f2;
    color: white;
    border-radius: 6px;
    border: none;
    margin-bottom: 18px;
    transition: .4s;
}
.event button:hover{
    background: #115cbd;
    cursor: pointer;
}
.event button i{
    margin-right: 6px;
}

.event-friend hr{
    margin-bottom: 20px;
    border: none;
    border-bottom: 2px solid var(--border);
}

.friend ul{
    display: flex;
    margin-bottom: 10px;
}
.friend ul li img{
    width: 50px;
    border-radius: 50px;
    margin-right: 10px;
}
.friend ul li b{
    color: var(--black);
    cursor: pointer;
    text-transform: capitalize;
}
.friend ul li p{
    font-size: 12px;
    display: block;
    margin-bottom: 10px;
    color: var(--gray);
}
.friend ul li button{
    background: #1877f2;
    border: none;
    padding: 3px 10px;
    color: white;
    border-radius: 5px;
    margin-right: 5px;
    font-size: 12px;
    cursor: pointer;
}
.friend-remove{
    background: var(--background) !important;
    color: var(--black) !important;
}


.create-page ul li{
    display: flex;
    margin-bottom: 15px;
    align-items: center;
}
.create-page ul li .fa-circle-plus{
    color: white;
    padding: 10px;
    background: #1877f2;
    border-radius: 10px;
    font-size: 20px;
    margin-right: 8px;
    cursor: pointer;
}
.create-page ul li h4{
    font-size: 14px;
    color: var(--black);
    margin-right: 95px;
}
.create-page ul li i{
    color: var(--gray);
}
.create-page ul li img{
    width: 100%;
    border-radius: 10px;
}
.create-page ul li b{
    font-size: 12px;
}
.create-page ul li button{
    font-size: 12px;
    border: none;
    padding: 3px 10px;
    background: #1877f2;
    color: white;
    border-radius: 50px;
    cursor: pointer;
}
.create-page ul li:nth-child(3){
    justify-content: space-between;
    margin-bottom: 5px;
}
.create-page ul li b span{
    display: block;
    font-weight: 500;
    color: var(--gray);
}

.messenger-search{
    display: flex;
    margin-bottom: 20px;
    align-items: center;
    position: relative;
}
.messenger-search .fa-user-group{
    color: white;
    padding: 10px;
    background: #1877f2;
    border-radius: 10px;
    font-size: 20px;
    margin-right: 8px;
    cursor: pointer;
}
.messenger-search h4{
    font-size: 14px;
    color: var(--black);
    margin-right: 8px;
}
.messenger-search input{
    padding: 3px 10px;
    width: 100%;
    border-radius: 8px;
    border: none;
    background: var(--foreground);
    color: var(--gray);
}
.messenger ul{
    display: flex;
    flex-direction: column;
}
.messenger ul li{
    display: flex;
    width: 100%;
    margin-bottom: 10px;
    overflow: hidden;
    align-items: center;
    background: var(--foreground);
    padding: 10px 5px;
    border-radius: 10px;
    box-shadow: 0 2px 5px 0 var(--shadow);
    position: relative;
    transition: .4s;
}
.messenger ul li img{
    width: 42px;
    border-radius: 50px;
    margin-right: 10px;
}
.messenger ul li:hover{
    box-shadow: 0 4px 6px 0 var(--shadow);
}
.messenger ul li b{
   color: var(--black);
   font-size: 14px;
}
.messenger ul li b span{
    display: block;
    color: var(--gray);
    font-size: 10px;
    position: relative;
    margin-left: 15px;
}
.messenger ul li span::before{
    content: '';
    display: block;
    width: 7px;
    height: 7px;
    background: #12da01;
    position: absolute;
    border-radius: 50px;
    top: 4px;
    left: -12px;
}
.messenger ul li:nth-child(2) span::before{
    background: #ff9600;
}
.messenger ul li i{
    color: #1877f2;
    position: absolute;
    right: 12px;
    top: 35%;
    background: white;
    padding: 5px;
    border-radius: 50px;
    box-shadow: 0 2px 5px #95959561;
}
.messenger-search .fa-magnifying-glass{
    position: absolute;
    right: 6px;
    font-size: 12px;
    color: var(--black);
    cursor: pointer;
}


/* home right end */
</style>
