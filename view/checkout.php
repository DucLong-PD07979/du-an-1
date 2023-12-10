<?php 
   if ($thongBao != '' && isset($thongBao)){
      echo $thongBao;
   }
?>
<div class="checkout-wrap">
    <div class="container">
        <form action="" method="post">
            <div class="grid gird-cols-1 md:grid-cols-3 lg:grid-cols-3">
                <div class="col-span-2 p-6">
                    <div class="py-6">
                        <a href="?page=trang-chu" class="flex items-center justify-center">
                            <img class="w-[280px] h-[90px]" src="../assets/images/logo.jpg" alt="">
                        </a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="font-bold text-[18px] text-gray-800">Thông tin nhận hàng</h3>
                                <a href="?page=login" class="text-blue-500">Đăng nhập</a>
                            </div>
                            <div class="group-input mb-4">
                                <input type="text" name="ho_ten" class="text-[14px] p-3 outline-none focus:outline-none focus:outline-2 focus:border-0 focus:outline-primary  w-full border border-gray-300 rounded" placeholder="Họ tên" require>
                                <p class="error-mes mt-2 text-red"></p>
                            </div>
                            <div class="group-input mb-4">
                                <input type="email" name="email" class="text-[14px] p-3 focus:outline-none focus:outline-2 focus:border-0 focus:outline-primary w-full border border-gray-300 rounded" placeholder="Email" require>
                                <p class="error-mes mt-2 text-red"></p>
                            </div>
                            <div class="group-input mb-4">
                                <input type="text" name="phone" class="text-[14px] p-3 focus:outline-none focus:outline-2 focus:border-0 focus:outline-primary w-full border border-gray-300 rounded" placeholder="Số điện thoại" require>
                                <p class="error-mes mt-2 text-red"></p>
                            </div>
                            <div class="group-input mb-4">
                                <input type="text" name="diachi" class="text-[14px] p-3 focus:outline-none focus:outline-2 focus:border-0 focus:outline-primary w-full border border-gray-300 rounded" placeholder="Địa chỉ nhận" require>
                                <p class="error-mes mt-2 text-red"></p>
                            </div>
                        </div>
                        <div>
                            <div class="mb-4">
                                <h3 class="font-bold text-[18px] text-gray-800">Vận chuyển</h3>
                            </div>
                            <div class="flex justify-between items-center rounded p-3 border mb-6 border-gray-300">
                                <div>
                                    <input type="radio" id="ship-type" checked readonly>
                                    <label for="ship-type">Giao hàng tận nơi</label>
                                </div>
                                <span>40.000đ</span>
                            </div>
                            <div class="mb-4">
                                <h3 class="font-bold text-[18px] text-gray-800">Thanh toán</h3>
                            </div>
                            <div class="flex flex-col rounded p-3 border mb-6 border-gray-300">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <input type="radio" id="" checked readonly>
                                        <label for="">Thanh toán khi giao hàng(COD)</label>
                                    </div>
                                    <span></span>
                                </div>
                                <div class="p-4 mt-4 bg-gray-100">
                                    Bạn chỉ phải thanh toán khi nhận được hàng
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-l border-gray-200 h-screen">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <p class="font-bold">Đơn hàng (<?= sizeof($_SESSION['cart']) > 0 ? sizeof($_SESSION['cart']) : 0; ?> sản phẩm)</p>
                    </div>
                    <div class="px-6 py-4">
                        <div class="max-h-[400px] border-b border-gray-200">
                            <?php
                            if (isset($_SESSION['cart']) && sizeof($_SESSION['cart']) > 0) :
                            ?>
                                <?php foreach ($_SESSION['cart'] as $item) : ?>
                                    <div class="flex items-center justify-between mb-3">
                                        <div class="rounded border border-gray-200 p-1 w-[50px] h-[50px] relative">
                                            <img src="../upload/<?= $item['hinh'] ?>" alt="">
                                            <span class="absolute top-0 right-0 min-w-[16px] h-[16px] text-[10px] flex items-center justify-center bg-blue-400 rounded-full text-white translate-x-[50%] translate-y-[-4px]"><?= $item['sl'] ?></span>
                                        </div>
                                        <p class="line-clamp-2 pl-3 flex-grow text-sm text-gray-800"><?= $item['tensp'] ?> </p>
                                        <span class="block pl-3 text-sm text-gray-400"><?= formatMoney($item['tongTien']) ?></span>
                                    </div>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <p class=" my-2 text-center">Chưa có sản phẩm trong giỏi hàng</p>
                            <?php endif; ?>
                        </div>
                        <div class="py-4 flex items-center justify-between border-b border-gray-200">
                            <p class="text-gray-500 font-medium">Tổng cộng</p>
                            <span class="text-lg font-medium text-blue-400"><?= formatMoney(totalMoneybuyProducts()) ?></span>
                            <input type="text" name="tongTien" value="<?= totalMoneybuyProducts() ?>" hidden>
                        </div>

                        <div class="py-4 flex items-center justify-between">
                            <a href="?page=cart" class="text-sm text-blue-400 hover:text-blue-600">Quay về trang giỏ hàng</a>
                            <button type="submit" name="datHang" class="text-white py-2 px-6 bg-blue-700 transition-colors rounded hover:bg-blue-500">Đặt hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>