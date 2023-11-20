<style>
    .loginn{
        padding-top:50px;
        padding-left:700px;
        width:900px;
    }
    a{
        text-decoration: none;
    }
</style>
<div class="loginn">

<div class="boxtitle">Đăng ký thành viên</div>
        <div class="boxcontent formtk">
            <form action="index.php?act=singup" method="post">
                <div>
                    <label>Email</label><br><br>
                    <input type="email" name="email" placeholder="Email">
                </div><br>
                <div>
                    <label>Tên đăng nhập</label><br><br>
                    <input type="text" name="user" placeholder="User">
                </div><br>
                <div>
                    <label>Mật khẩu</label><br><br>
                    <input type="password" name="pass" placeholder="Pass">
                </div><br>
                <input type="submit" value="Đăng ký" name="dangky">
                <input type="reset" value="Nhập lại"><br><br>
                <button> <a href="index.php?act=login">Đăng Nhập</a></button>
                <p style="color:red;"><?php if (isset($thongbao)&& !empty($thongbao)) {
                echo $thongbao;
                } ?></p>
            </form>
        </div>
        </div>