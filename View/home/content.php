<div class="slide_image">
                <div class="myslide w3-animate-fading">
                    <img src="../../images/logo.png" alt="err">
                    <h1>KHÔNG GIAN ĐẦM ẤM </h1>
                    <p>MÓN ÂU PHONG VỊ VIỆT CHO TIỆC SUM HỌP CUỐI NĂM</p>
                </div>
                <div class="myslide w3-animate-fading">
                    <img src="../../images/logo.png" alt="err">
                    <h1>MÓN NGON HOÀN HẢO</h1>
                    <p>Nhà hàng món Pháp sáng lập năm 2007 bởi bếp trưởng Lý Anh Tú</p>
                </div>
            </div>
        </div>
        <div class="section_top">
            <h1>MỞ CỦA 10H - 22H</h1>
            <img src="../../images/title.png" alt="err">
            <h4>THỰC ĐƠN MÓN ÂU VỚI BEEFSTEAK BÒ ÚC, GAN NGỖNG PHÁP, CÁ HỒI SỐT <br> CHANH...GẦN GŨI, TRÒN VỊ</h4>
        </div>
        <div class="section_buttom">
            <h1>48 BISTRO - KHÔNG CHỈ LÀ CÂU CHUYỆN ẨM HỰC <br> CỦA ĐẦU BẾP LÝ ANH TÚ</h1>
        </div>
        <div class="main_top">
            <div class="main_top_left">
                <p>Trải qua hơn 13 năm gắn bó với 48 Bistro, bếp trưởng Lý Anh Tú và <br>
                    cũng là người sáng lập 48 Bistro đã cùng tập thể gắn kết sức mạnh
                    đưa <br> món ăn khẩu vị Việt lên một tầm cao mới.Thế nhưng, ngọn lửa <br>
                    đam mê của vị đầu bếp này không dừng lại ở đó.</p>
                <br>
                <p>
                    "Một thứ không thể thiếu đó là sự đam mê nghề nghiệp, chính nhờ <br>
                    lòng đam mê tìm tòi cái mới cho ẩm thực Âu sử dụng nguyên liệu Việt <br>
                    đã góp phần cho sự thành công của chúng tôi." </p>
                <p class="lyanhtu">Lý Anh Tú</p>

            </div>
            <div class="main_top_right">
                <img src="../../images/48bistro.jpg" alt="err">
            </div>
        </div>
        <div class="content">
            <div class="content_top">
                <h1>MÓN NGON HOÀN HẢO</h1>
            </div>
            <div class="content_buttom" >
                <?php foreach ($result as $item) :  ?> 
                    <div class="card " >
                        <div class="content_slider " >    
                            <img src="../../<?= $item['image'] ?>" alt="err">
                            <h4><?= $item['name'] ?></h4>
                            <p><?= $item['introduce'] ?></p>
                            <p><?= $item['price'] ?> VND</p>
                        </div>
                    </div>
                <?php endforeach   ?>
                </div>
            <div class="button-icon">
                <button class="pro-prev"><i style='font-size:70px' class='fas'>&#xf104;</i></button>
                <button class="pro-next"><i style='font-size:70px' class='fas'>&#xf105;</i></button>
            </div>
        </div>
        <div class="menu_top">
            <div class="menu_viviet">
                <h1>MÓN ÂU PHONG VỊ VIỆT</h1>
                <img src="../../images/title.png" alt="logo">
                <p>Hãy đến và trải nghiệm không gian ấm cúng và tận hưởng niềm vui ẩm thực</p>
            </div>
            <div class="menu_image">
                <button class="loading_top">
                <div class='loading'>
                    <div class='loading__square'></div>
                        <div class='loading__square'></div>
                        <div class='loading__square'></div>
                        <div class='loading__square'></div>
                        <div class='loading__square'></div>
                        <div class='loading__square'></div>
                <div class='loading__square'></div>
                </div>
                </button>
                    <button onclick="openall(event,'tatca')"><img src="../../images/food.svg" alt="err"> <label for="">TẤT CẢ</label></button>
                    <button onclick="openall(event,'khaivi')"><img src="../../images/food.svg" alt="err"><label for="">KHAI VỊ</label></button>
                    <button onclick="openall(event,'monchinh')"><img src="../../images/food.svg" alt="err"><label for="">MÓN CHÍNH</label></button>
                    <button onclick="openall(event,'nuocuong')"><img src="../../images/drink.svg" alt="err"><label for="">THỨC UỐNG</label></button>
            </div>
        </div>
        <div class="menu_restaurant  food" id="tatca">
            <?php foreach($resultt as $itemm):  ?>
            <div class="menu_restaurant_left ">
                <h4><?= $itemm['name'] ?></h4>
               <label for=""><?= $itemm['price']?> VND</label>
               <img src="../../<?= $itemm['image']?>" alt="errr">
                <p><?= $itemm['introduce'] ?></p>  
            </div>
            <?php endforeach ; ?>
        </div>
        <div class="menu_restaurant  food" id="khaivi" style="display: none;">
            <?php foreach($resul1 as $item1):  ?>
            <div class="menu_restaurant_left">
            <h4><?= $item1['name'] ?></h4>
            <label for=""><?= $item1['price']?> VND</label>
            <img src="../../<?= $item1['image']?>" alt="err">
            <p><?= $item1['introduce'] ?></p>  
            </div>
            <?php endforeach  ?>
        </div>
        <div class="menu_restaurant  food" id="monchinh" style="display: none;">
            <?php foreach($resul2 as $item2):  ?>
            <div class="menu_restaurant_left">
            <h4><?= $item2['name'] ?></h4>
            <label for=""><?= $item2['price']?> VND</label>
            <img src="../../<?= $item2['image']?>" alt="err">
            <p><?= $item2['introduce'] ?></p>  
            </div>
            <?php endforeach  ?>
        </div>
        <div class="menu_restaurant  food" id="nuocuong" style="display: none;">
            <?php foreach($resul3 as $item3):  ?>
            <div class="menu_restaurant_left">
            <h4><?= $item3['name'] ?></h4>
            <label for=""><?= $item3['price']?> VND</label> 
            <img src="../../<?= $item3['image']?>" alt="err">
            </div>
            <?php endforeach  ?>
        </div>
        <div class="order">
            <div class="oder_left">
                <h3>ĐẶT CHỖ NGAY</h3>
                <form action="#" method="post">
                    <input type="text" placeholder="Họ và tên">
                    <input type="text" placeholder="Điện thoại"> <br>
                    <input type="email" placeholder="Email">
                    <input type="text" placeholder="Số lượng người"> <br>
                    <input type="text" placeholder="dd/mm/yyyy">
                    <input type="text" placeholder="datetime"> <br>
                    <input class="submit_order"  type="submit" value="ĐẶT CHỖ">
                </form>
            </div>  
            <div class="date_time">
            <canvas id="canvas" width="400" height="400" style="background-color:#333"></canvas>  
            </div>
        </div>
        <div class="numberfone">
            <h3>Liên hệ đặt chỗ qua điện thoại</h3>
            <a href="#"><h1>+84 909 447 086</h1></a>
        </div>