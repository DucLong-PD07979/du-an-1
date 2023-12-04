<div class="cart-warp">
    <div class="max-w-[1000px] mt-[60px] mx-auto mb-10">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 border">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Thông tin sản phẩm
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Đơn giá
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Số lượng
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Thành tiền
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_SESSION['cart']) && sizeof($_SESSION['cart']) > 0) :
                    ?>
                        <?php foreach ($_SESSION['cart'] as $item) : ?>
                            <tr class="bg-white border-b ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    <div class="flex items-center">
                                        <img src="../upload/<?= $item['hinh'] ?>" alt="" class="w-[70px] h-[70px]">
                                        <div>
                                            <p><?= $item['tensp'] ?></p>
                                            <a href="#" class="font-semibold text-primary">xóa</a>
                                        </div>
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    <span class="font-semibold text-primary"><?= formatMoney($item['gia']) ?></span>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $item['sl'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="font-semibold text-primary"><?= formatMoney($item['tongTien']) ?></span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p class=" my-2 text-center">Chưa có sản phẩm trong giỏi hàng</p>
                    <?php endif; ?>
                </tbody>
            </table>
            <div class="flex justify-end">
                <div class="mt-8 max-w-[300px] w-full">
                    <div class="flex justify-between">
                        <p class="text-gray-700">Tổng tiền:</p>
                        <span class="text-primary font-semibold"><?= formatMoney(totalMoneybuyProducts()) ?></span>
                    </div>
                    <a href="?page=checkout" class="py-2 w-full bg-primary text-white block rounded text-center mt-3 hover:bg-green-400">Thanh toán</a>
                </div>
            </div>
        </div>
    </div>
</div>