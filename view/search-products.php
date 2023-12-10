<div class="my-[60px]">
    <div class="container">
        <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 gap-6">
            <?php foreach ($productSearched as $item) : ?>
                <a href="?page=product-details&ma_sp=<?= $item['ma_sp'] ?>" class="">
                    <div class="rounded-lg border border-gray-200 hover:border-primary relative overflow-hidden">
                        <div class="p-4">
                            <img class="h-[170px] mt-4" src="../upload/<?= $item['url_hinh'] ?>" alt="">
                        </div>
                        <div class="p-4">
                            <h4 class="text-gray-800 line-clamp-2"><?= $item['ten'] ?></h4>
                            <span class="text-gray-800 mr-2 font-semibold text-sm"><?= formatMoney($item['gia_tien']) ?></span>
                            <span class="text-gray-400 line-through mr-2 text-sm">
                                <?=
                                //số thâpj phân
                                $giaGoc =  formatMoney($item['gia_tien'] / (100 - $item['giam_gia']) * 100);
                                ?>
                            </span>
                        </div>
                        <?php
                        if ($item['giam_gia'] > 0) {
                            echo '<div class="absolute left-0 top-0 bg-red py-1 px-8 rounded-tl-lg rounded-br-lg text-white font-bold text-xs">' . $item['giam_gia'] . '%</div>';
                        }
                        ?>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>