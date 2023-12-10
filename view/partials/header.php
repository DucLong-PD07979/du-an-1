<header class="pt-6">
    <div class="container">
        <div>
            <div class="flex items-center">
                <h1 class="flex-none px-5">
                    <a href="../../index.php">
                        <img src="../../assets/images/logo.jpg" alt="logo" style="width:100%; height:60px">
                    </a>
                </h1>
                <div class="rounded border-2 border-primary grow ml-4">
                    <form action="index.php" method="post" class="flex items-center justify-between p-1 h-[50px]">
                        <input type="text" placeholder="Bạn muốn tìm kiếm gi?" name="keys-filter" class="grow border-none outline-none h-full pl-3">
                        <button type="submit" name="search-products" class="bg-primary w-[50px] h-full rounded flex items-center justify-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="flex-none ml-[120px] flex items-center">
                    <span class="flex items-center justify-center bg-primary h-[40px] px-3 py-1 rounded font-bold text-white text-base">
                        <svg xmlns="http://www.w3.org/2000/svg" fill=" none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 animate-wiggle">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 3.75v4.5m0-4.5h-4.5m4.5 0l-6 6m3 12c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                        </svg>
                        <span class="pl-2">Hotline: 1900 6750</span>
                    </span>
                    <div class="relative group">
                        <span class="flex items-center justify-center bg-primary w-[40px] h-[40px] rounded text-white ml-3 cursor-pointer ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <?php
                            if (isset($_SESSION['userAccount']) && is_array($_SESSION['userAccount'])) :
                            ?>
                                <div class="absolute rounded-sm top-[125%] z-20 left-0 w-[120px] after:content-[''] after:absolute after:w-[20px] after:rounded-sm after:h-[20px] after:bg-primary after:bottom-[100%] after:left-5 after:rotate-45 after:translate-y-4 after:-z-10 before:content-[''] before:absolute before:bottom-[100%] before:left-0 before:w-full before:h-3 before:z-10 before:bg-transparent hidden group-hover:block">
                                    <p class="py-2 px-3 block  bg-primary hover:transition-colors hover:bg-gray-200 hover:text-primary"><?= $_SESSION['userAccount']['ho_ten'] ?></p>
                                    <a href="?page=logout" class="py-2 px-3 block  bg-primary hover:transition-colors hover:bg-gray-200 hover:text-primary">Logout</a>
                                </div>
                            <?php else : ?>
                                <div class="absolute rounded-sm top-[125%] z-20 left-0 w-[120px] after:content-[''] after:absolute after:w-[20px] after:rounded-sm after:h-[20px] after:bg-primary after:bottom-[100%] after:left-5 after:rotate-45 after:translate-y-4 after:-z-10 before:content-[''] before:absolute before:bottom-[100%] before:left-0 before:w-full before:h-3 before:z-10 before:bg-transparent hidden group-hover:block">
                                    <a href="?page=register" class="py-2 px-3 block  bg-primary hover:transition-colors hover:bg-gray-200 hover:text-primary">Đăng ký</a>
                                    <a href="?page=login" class="py-2 px-3 block  bg-primary hover:transition-colors hover:bg-gray-200 hover:text-primary">Đăng nhập</a>
                                </div>
                            <?php endif; ?>
                        </span>
                    </div>
                    <div class="relative flex items-center justify-center bg-primary w-[40px] h-[40px] rounded text-white ml-3 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        <span class="absolute top-1 left-5 min-w-[14px] h-[14px] text-[10px] flex items-center justify-center bg-red rounded-full ">3</span>
                    </div>
                    <div class="flex items-center justify-center bg-primary w-[40px] h-[40px] rounded text-white ml-3 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                    </div>
                    <div id="btn-cart" class="flex items-center justify-center bg-primary w-[40px] h-[40px] rounded text-white ml-3 cursor-pointer relative group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        <?php
                        if (isset($_SESSION['cart']) && sizeof($_SESSION['cart']) > 0) :
                        ?>
                            <span class="absolute top-1 left-5 min-w-[14px] h-[14px] text-[10px] flex items-center justify-center bg-red rounded-full "><?= sizeof($_SESSION['cart']); ?></span>
                        <?php endif; ?>
                        <div class="absolute rounded-sm top-[125%] z-20 right-0 w-[350px] after:content-[''] after:absolute after:w-[20px] after:rounded-sm after:h-[20px] after:bg-primary after:bottom-[100%] after:right-2 after:rotate-45 after:translate-y-4 after:-z-10 before:content-[''] before:absolute before:bottom-[100%] before:left-0 before:w-full before:h-3 before:z-10 before:bg-transparent hidden  group-hover:block">
                            <div class="border border-gray-200 text-gray-700 rounded bg-white">
                                <form action="" method="post" class="p-2">
                                    <div class=" overflow-y-auto max-h-[360px]">
                                        <?php
                                        if (isset($_SESSION['cart']) && sizeof($_SESSION['cart']) > 0) :
                                        ?>
                                            <?php foreach ($_SESSION['cart'] as $item) : ?>
                                                <div class="flex items-center pb-3 border-b border-gray-200">
                                                    <img src="../../upload/<?= $item['hinh'] ?>" alt="" class="w-[100px] h-[70px]">
                                                    <div class="p-2 w-full">
                                                        <p class="line-clamp-2 text-sm"><?= $item['tensp'] ?></p>
                                                        <a href="index.php?page=cart&act=xoa&ma_sp=<?= $item['masp'] ?>" class="text-red text-sm my-2 block">Xóa</a>
                                                        <div class="flex justify-between">
                                                            <span class="text-[12px]">Số lượng: <?= $item['sl'] ?>đ</span>
                                                            <span class="font-bold text-primary"><?= formatMoney($item['tongTien']) ?></span>
                                                        </div>
                                                        <!-- <div class="border border-gray-800 rounded w-fit p-[2px] flex items-center group-control-quantity">
                                                            <button class="w-[26px] h-[26px] text-white rounded-sm bg-primary flex items-center justify-center" id="btn-reduce-quantity--second" name="reduce" type="button">-</button>
                                                            <span class="px-[10px] text-gray-800" id="quantity--second">1</span>
                                                            <input type="text" value="1" id="quantity-value" name="quantity--second" hidden>
                                                            <button class="w-[26px] h-[26px] text-white rounded-sm bg-primary flex items-center justify-center" id="btn-increase-quantity--second" type="button">+</button>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <p class=" my-2 text-center">Chưa có sản phẩm trong giỏi hàng</p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="flex justify-between mt-2">
                                        <p>Tổng tiền: </p>
                                        <span class="font-bold text-primary"><?= formatMoney(totalMoneybuyProducts()) ?></span>
                                    </div>
                                    <button type="button" name="thanhtoan" id="btn-thanh-toan" class="w-full text-center text-white bg-green-700 rounded py-3 mt-2 hover:bg-green-600 transition-colors">Thanh toán</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-[36px] relative z-10">
            <div class="bg-primary flex items-center rounded mb-[-26px] overflow-hidden">
                <a href="?page=trang-chu" class="text-white py-3 px-3 block hover:bg-green-400 transition-colors hover:rounded">Trang chủ</a>
                <a href="?page=san-pham" class="text-white py-3 px-3 block hover:bg-green-400 transition-colors hover:rounded">Sản phẩm</a>
                <a href="?page=tin-tuc" class="text-white py-3 px-3 block hover:bg-green-400 transition-colors hover:rounded">Tin tức</a>
                <a href="?page=gioi-thieu" class="text-white py-3 px-3 block hover:bg-green-400 transition-colors hover:rounded">Giới thiệu</a>
                <a href="?page=chinh-sach-thanh-vien" class="text-white py-3 px-3 block hover:bg-green-400 transition-colors hover:rounded">Chính sách thần viên</a>
            </div>
        </div>
    </div>
</header