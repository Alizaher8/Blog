@extends('front.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Authors table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <div id="app" style="background: #ebfffe; padding: 10px 20px 15px 20px;">
                            <create-post style="background: #ebfffe; padding: 10px 20px 15px 20px;"></create-post>
                              <p></p>
                              <p></p>
                            <post-user></post-user>
                            </div>
                            @vite('resources/js/app.js')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('front.layouts.footers.auth.footer')
    </div>
@endsection
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