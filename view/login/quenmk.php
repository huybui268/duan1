<div class="boxtitle">Quên mật khẩu</div>
        <div class="boxcontent formtk">
            <form action="index.php?act=quenmk" method="post">
                <div>
                    <label>Email</label><br><br>
                    <input type="email" name="email" placeholder="Email">
                </div><br>
                <input type="submit" value="Gửi" name="guiemail">
                <input type="reset" value="Nhập lại"><br><br>
                <p style="color:red;"><?php
                if(isset($sendMail) && !empty($sendMail)){
                echo $sendMail;
                }
                ?></p>
            </form>
        </div>