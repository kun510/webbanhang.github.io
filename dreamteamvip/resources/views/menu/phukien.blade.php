<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/frontend/css/phukien.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/png" href="https://png.pngtree.com/png-clipart/20190617/original/pngtree-technology-open-icon-ui-png-image_3840639.jpg">
    <title>Phụ Kiện</title>
</head>

<body>
    <div class="all">
        @include('allcode.headchung')
        <div class="main">
            <div class="product_top">
                <div class="product_top_img">
                    <img src="https://images.fpt.shop/unsafe/fit-in/590x160/filters:quality(90):fill(white)/https://fptshop.com.vn/Uploads/Originals/2022/1/1/637765972826981666_Phu%20kien%20F-590x160.png" alt="">
                </div>

                <div class="product_top_search">
                    <div class="product_top_search_chil border">
                        <h2 class="product_top_search_heading">Tìm kiếm phụ kiện</h2>

                        <div class="product_top_search_all border-radius-boxshadow">
                            <button class="product_top_search_btn">
                                <i class="fa fa-search"></i>
                            </button>
                            <input type="text" placeholder="Nhập tên phụ kiện">
                        </div>
                    </div>
                </div>
            </div>

            <div class="product_phukien">
                <div class="product_phukien_heading border-radius-boxshadow">
                    <h1>Phụ Kiện</h1>
                </div>

                <div class="product_phukien_all">
                    <div class="product_phukien_item">
                        <a href="">
                            <div class="product_phukien_icon active"><i class="fa fa-medal"></i></div>
                            <div class="product_phukien_text">Khuyến mãi hot</div>
                        </a>
                    </div>

                    <div class="product_phukien_item">
                        <a href="">
                            <div class="product_phukien_icon"><i class="fa-brands fa-apple"></i></div>
                            <div class="product_phukien_text">Phụ kiện Apple</div>
                        </a>
                    </div>

                    <div class="product_phukien_item">
                        <a href="">
                            <div class="product_phukien_icon"><i class="fa-solid fa-battery-full"></i></div>
                            <div class="product_phukien_text">Sạc dự phòng</div>
                        </a>
                    </div>

                    <div class="product_phukien_item">
                        <a href="">
                            <div class="product_phukien_icon"><i class="fa fa-sd-card"></i></div>
                            <div class="product_phukien_text">Thẻ nhớ</div>
                        </a>
                    </div>

                    <div class="product_phukien_item">
                        <a href="">
                            <div class="product_phukien_icon"><i class="fa fa-headphones"></i></div>
                            <div class="product_phukien_text">Tai nghe</div>
                        </a>
                    </div>

                    <div class="product_phukien_item">
                        <a href="">
                            <div class="product_phukien_icon"><i class="fa-solid fa-hard-drive"></i></div>
                            <div class="product_phukien_text">Ổ cứng</div>
                        </a>
                    </div>

                    <div class="product_phukien_item">
                        <a href="">
                            <div class="product_phukien_icon"><i class="fa fa-mouse"></i></div>
                            <div class="product_phukien_text">Chuột</div>
                        </a>
                    </div>

                    <div class="product_phukien_item">
                        <a href="">
                            <div class="product_phukien_icon"><i class="fa fa-keyboard"></i></div>
                            <div class="product_phukien_text">Bàn phím</div>
                        </a>
                    </div>

                    <div class="product_phukien_item">
                        <a href="">
                            <div class="product_phukien_icon"><i class="fa-solid fa-briefcase"></i></div>
                            <div class="product_phukien_text">Balo - Túi xách</div>
                        </a>
                    </div>

                    <div class="product_phukien_item">
                        <a href="">
                            <div class="product_phukien_icon"><i class="fa fa-gamepad"></i></div>
                            <div class="product_phukien_text">Game</div>
                        </a>
                    </div>

                    <div class="product_phukien_item">
                        <a href="">
                            <div class="product_phukien_icon"><i class="fa fa-wifi"></i></i>
                            </div>
                            <div class="product_phukien_text">Wifi</div>
                        </a>
                    </div>

                    <div class="product_phukien_item">
                        <a href="">
                            <div class="product_phukien_icon"><i class="fa-solid fa-ellipsis"></i></div>
                            <div class="product_phukien_text">Phụ kiện khác</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="product_featured">
                <div class="product_heading">
                    <hr>
                    <h1 class="">Khuyến mãi hot</h1>
                    <hr>
                </div>

                <form action="./cart.php">
                <div class="product_main">
                            <div class="product_item">
                                <div class="product_item_img">
                                    <img src="" alt="">
                                </div>

                                <div class="product_item_info">
                                    <div class="product_item_name">
                                        <span></span>
                                    </div>

                                    <div class="product_item_price">
                                        <div class="product_item_price_old">
                                            <sup>đ</sup>
                                        </div>

                                        <div class="product_item_price_new">
                                           <sup>đ</sup>
                                        </div>
                                    </div>

                                    <div class="product_item_cart">
                                        <a href="./insertcart.php?key= " class="product_item_cart_btn">
                                            <span>THÊM VÀO GIỎ HÀNG</span>
                                        </a>
                                    </div>
                                </div>
                            </div>



                </div>

            </form>

            </div>
        </div>

        <div class="footer">
            <div class="footer_container">
                <div class="footer_link footer_item">
                    <h3 class="footer_heading ">LIÊN KẾT</h3>
                    <ul>
                        <li><a href="./index.php">Trang chủ</a></li>
                        <li><a href="./dienthoai.php">Điện thoại</a></li>
                        <li><a href="./laptop.php">Laptop</a></li>
                        <li><a href="./tablet.php">Máy tính bảng</a></li>
                        <li><a href="./phukien.php">Phụ kiện</a></li>
                        <li><a href="./contact.php">Liên hệ</a></li>
                    </ul>
                </div>

                <div class="footer_info footer_item">
                    <h3 class="footer_heading ">VỀ DREAMTEAM</h3>
                    <ul>
                        <li><a href="">Giới thiệu DreamTeam</a></li>
                        <li><a href="">Tuyển dụng</a></li>
                        <li><a href="">Điều khoản</a></li>
                        <li><a href="">Chính sách bảo mật</a></li>
                        <li><a href="">Tiếp thị liên kết cùng DreamTeam</a></li>
                    </ul>
                </div>

                <div class="footer_support footer_item">
                    <h3 class="footer_heading">CHĂM SÓC KHÁCH HÀNG</h3>
                    <ul>
                        <li><a href="">Giao hàng và thanh toán</a></li>
                        <li><a href="">Chính sách bảo hành</a></li>
                        <li><a href="">Chính sách đổi trả</a></li>
                        <li><a href="">Hướng dẫn đặt hàng</a></li>
                        <li><a href="">Hướng dẫn bán hàng</a></li>
                    </ul>
                </div>

                <div class="footer_contact footer_item">
                    <h3 class="footer_heading">THÔNG TIN LIÊN HỆ</h3>
                    <ul>
                        <li><i class="fa fa-map-marker"></i> 666 ABC3 Nguyễn Hữu Thọ, Phường 22, Hải Châu, Tp.Đà Nẵng</li>
                        <li><i class="fa fa-phone"></i><a href="tel:0123456789"> 0123 456 789</a></li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:dreamteam@gmail.com"> dreamteam@gmail.com</a></li>
                        <li><i class="fab fa-facebook"></i><a href=""> Facebook</a></li>
                        <li><i class="fab fa-instagram"></i><a href=""> Instagram</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer_copyright">Copyright © 2022 Bản quyền thuộc về DreamTeam
                <!-- © Bản quyền thuộc về Trần Cường, Nguyễn Thanh Tiến, Đỗ Vạn Lâm -->
            </div>
        </div>
    </div>

    <script src="./assets/js/media.js"></script>
    <script src="./assets/js/slider.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>
