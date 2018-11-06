<?php

use Illuminate\Database\Seeder;

class NewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            ['id' => 1, 'title' => 'Khuyến mãi cực khủng trong tháng 12', 'content' => 'Khuyến mãi 50% cho các khách hàng có ngày sinh nhật từ ngày 19-12-2018 đến ngày 22-12-2018', 'img' => '', 'description' => 'Khuyến mãi 50% cho các khách hàng có ngày sinh nhật từ ngày 19-12-2018 đến ngày 22-12-2018', 'slug' => ''],
            ['id' => 2, 'title' => 'Cập bến những mẫu giày Adidas cực hot trong tháng 11', 'content' => 'Adidas một trong những hãng giày nỗi tiếng đang được các bạn trẻ yêu thích ngày nay. Sau khi làm mưa làm gió thị trường với mẫu Adidas Zx Flux, thương hiệu này tiếp tục gây ấn tượng với dòng giày cổ điển " Adidas Stan Smith "', 'img' => '', 'description' => 'Hàng mới về mẫu mã cực hot, về ngay 1 lô 200 đôi', 'slug' => ''],
        ]);
    }
}
