<span style="font-family: verdana, geneva, sans-serif;">
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>DỰ Án</title>
    <!-- <link rel="stylesheet" href="css/css.css" /> -->
    <style>@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700");
*{
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
table{
  border:1px solid gray;
}
tr th{
  border:1px solid gray;
}
tr td{
  border:1px solid gray;
}
body{
  background: #dfe9f5;
}
.container{
  display: flex;
}
nav{
  position: relative;
  top: 0;
  bottom: 0;
  height: 1150px;
  left: 0;
  background: #fff;
  width: 380px;
  overflow: hidden;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.logo{
  text-align: center;
  display: flex;
  margin: 10px 0 0 10px;
}
.logo img{
  width: 45px;
  height: 45px;
  border-radius: 50%;
}
.logo span{
  font-weight: bold;
  padding-left: 15px;
  font-size: 18px;
  text-transform: uppercase;
}
a{
  position: relative;
  color: rgb(85, 83, 83);
  font-size: 14px;
  display: table;
  width: 280px;
  padding: 10px;
}
nav .fas{
  position: relative;
  width: 70px;
  height: 40px;
  top: 14px;
  font-size: 20px;
  text-align: center;
}
.nav-item{
  position: relative;
  top: 12px;
  margin-left: 10px;
}
a:hover{
  background: #eee;
}
.logout{
  position: absolute;
  bottom: 0;
}

/* Main Section */
.main{
  position: relative;
  padding: 20px;
  width: 100%;
}
.main-top{
  display: flex;
  width: 100%;
}
.main-top i{
  position: absolute;
  right: 0;
  margin: 10px 30px;
  color: rgb(110, 109, 109);
  cursor: pointer;
}
.main-skills{
  display: flex;
  margin-top: 20px;
}
.main-skills .card{
  width: 25%;
  margin: 10px;
  background: #fff;
  text-align: center;
  border-radius: 20px;
  padding: 10px;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.main-skills .card h3{
  margin: 10px;
  text-transform: capitalize;
}
.main-skills .card p{
  font-size: 12px;
}
.main-skills .card button{
  background: orangered;
  color: #fff;
  padding: 7px 15px;
  border-radius: 10px;
  margin-top: 15px;
  cursor: pointer;
}
.main-skills .card button:hover{
  background: rgba(223, 70, 15, 0.856);
}
.main-skills .card i{
  font-size: 22px;
  padding: 10px;
}

/* Courses */
.main-course{
  margin-top:20px ;
  text-transform: capitalize;
}
.course-box{
  width: 100%;
  height: 300px;
  padding: 10px 10px 30px 10px;
  margin-top: 10px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.course-box ul{
  list-style: none;
  display: flex;
}
.course-box ul li{
  margin: 10px;
  color: gray;
  cursor: pointer;
}
.course-box ul .active{
  color: #000;
  border-bottom: 1px solid #000;
}
.course-box .course{
  display: flex;
}
.box{
  width: 33%;
  padding: 10px;
  margin: 10px;
  border-radius: 10px;
  background: rgb(235, 233, 233);
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.box p{
  font-size: 12px;
  margin-top: 5px;
}
.box button{
  background: #000;
  color: #fff;
  padding: 7px 10px;
  border-radius: 10px;
  margin-top: 3rem;
  cursor: pointer;
}
.box button:hover{
  background: rgba(0, 0, 0, 0.842);
}
.box i{
  font-size: 7rem;
  float: right;
  margin: -20px 20px 20px 0;
}
.html{
  color: rgb(25, 94, 54);
}
.css{
  color: rgb(104, 179, 35);
}
.js{
  color: rgb(28, 98, 179);
}
.main-top h1{
  padding-left: 500px;
}
</style>
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  </head>

  <body>
    <div class="container">
      <nav>
        <div class="navbar">
          <div class="logo">
            <img src="/pic/logo.jpg" alt="">
            <h1>admin</h1>
          </div>
          <ul>
            <li><a href="index.php?act=listkh">
                <i class="fas fa-user"></i>
                <span class="nav-item">Quản Lý Tài Khoản</span>

              </a>
            </li>

            <li><a href="index.php?act=listdm">
                <i class="fas fa-tasks"></i>
                <span class="nav-item">Quản Lý Danh Mục  </span>
              </a>
            </li>
            
            <li><a href="index.php?act=listsp">
                <i class="fas fa-tasks"></i>
                <span class="nav-item">Quản Lý Sản Phẩm </span>
              </a>
            </li>
            
            <li><a href="index.php?act=listbl">
                <i class="fas fa-tasks"></i>
                <span class="nav-item">Quản Lý Bình Luận </span>
              </a>
            </li>
            
            <li><a href="index.php?act=listdh">
                <i class="fas fa-tasks"></i>
                <span class="nav-item">Quản Lý Hóa Đơn </span>
              </a>
            </li>
            
           
            <li><a href="#">
                <i class="fas fa-tasks"></i>
                <span class="nav-item">Quản Lý Thanh Toán</span>
              </a>
            </li>
            <li><a href="#">
                <i class="fas fa-chart-bar"></i>
                <span class="nav-item">Thống kê</span>
              </a>
            </li>
            <li><a href="#" class="logout">
                <i class="fas fa-sign-out-alt"></i>
                <span class="nav-item">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Hiển thị  -->
      <!-- <section class="main">
        <div class="main-top">
          <p>Booking Hotel </p>
        </div>
        <div class="main-body">
          <h1>Hiển thị </h1>

        </div>
    </div>
    </section> -->
   