<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['id' => 1, 'id_category' => 1, 'id_sale' => 1, 'name' => 'Giày Nike Air Max', 'quantity' => 10, 'price' => '1200000', 'img' => 'image/nikes/1.jpg', 'content' => 'Cùng điểm qua lại những gương mặt và thành tựu Nike Air Max ghi dấu từ 1987 đến nay.', 'origin' => 'Canada', 'size' => '35', 'gender' => '1', 'slug' => 'giay_nike_air_max'],
            ['id' => 2, 'id_category' => 2, 'id_sale' => 2, 'name' => 'YEEZY', 'quantity' => 10, 'price' => '1500000', 'img' => 'image/sneakers/1.jpg', 'content' => 'Sau một khoảng thời gian khá im ắng trên thị trường giày thì “ông trùm thể thao” Adidas bất ngờ quay trở lại “sân chơi” với mẫu thiết kế mới toanh Yeezy Boost 350 (còn gọi là Yeezy 350).', 'origin' => 'Mỹ', 'size' => '40', 'gender' => '0', 'slug' => 'yeezy'],
            ['id' => 3, 'id_category' => 3, 'id_sale' => 3, 'name' => 'Converse Chuck II Red', 'quantity' => 10, 'price' => '800000', 'img' => 'image/converses/1.jpg', 'content' => 'Converse Chuck II Red vẫn là sự lựa chọn hấp dẫn cho người yêu giày.', 'origin' => 'Mỹ', 'size' => '36', 'gender' => '1', 'slug' => 'converse_chuck_II_red'],
            ['id' => 4, 'id_category' => 4, 'id_sale' => 2, 'name' => 'Adidas SuperStar', 'quantity' => 10, 'price' => '750000', 'img' => 'image/adidas/1.jpg', 'content' => 'Đặc điểm của phiên bản giày adidas superstar 2 chính hãng thường có bảng phối màu (colorways) đặc sắc, chủ đề và phong cách thiết kế được biến tấu nhiều so với bản gốc. ', 'origin' => 'Pháp', 'size' => '38', 'gender' => '0', 'slug' => 'adidas_superStar'],
            ['id' => 5, 'id_category' => 5, 'id_sale' => 1, 'name' => 'Vans Sk8-Hi Two-Tone Sneaker', 'quantity' => 10, 'price' => '500000', 'img' => 'image/vans/1.jpg', 'content' => 'Vans Sk8-Hi Two-Tone Sneaker - gần 1,5 triệu đồng ... bó tay thật, nhìn thế mà đẹp, chắc cả thế giới có mình mình chê xấu thôi quá.', 'origin' => 'Việt Nam', 'size' => '42', 'gender' => '0', 'slug' => 'vans_sk8-Hi_two-Tone_sneaker'],
            ['id' => 6, 'id_category' => 6, 'id_sale' => 3, 'name' => 'Giày boot Timberland', 'quantity' => 10, 'price' => '2050000', 'img' => 'image/boots/1.jpg', 'content' => 'Timberland liên tục thay đổi mình về phong cách và công nghệ sản xuất ... ', 'origin' => 'Ý', 'size' => '40', 'gender' => '0', 'slug' => 'giay_boot_timberland'],
            ['id' => 7, 'id_category' => 1, 'id_sale' => 4, 'name' => 'NikeCourt Lite', 'quantity' => 10, 'price' => '1800000', 'img' => 'image/nikes/2.jpg', 'content' => 'Ở phiên bản giày thể thao NikeCourt Lite mới nhất, Nike tập trung vào phần upper giày khi kết hợp các chất liệu cao cấp như thuộc da, vải giày chống thấm nước và thoáng khí.', 'origin' => 'Mỹ', 'size' => '45', 'gender' => '0', 'slug' => 'nikeCourt_lite'],
            ['id' => 8, 'id_category' => 4, 'id_sale' => 1, 'name' => 'Adidas Neo màu trắng', 'quantity' => 10, 'price' => '2500000', 'img' => 'image/adidas/2.jpg', 'content' => 'Giày Adidas màu trắng luôn là sự lựa chọn được đông đảo chị em ưa chuộng. Màu trắng tuy đơn giản nhưng lại mang lại sự sang trọng, tinh tế và năng động cho người đi, phù hợp với nhiều đối tượng và nhiều trang phục khác nhau.', 'origin' => 'Thụy Sĩ', 'size' => '36', 'gender' => '1', 'slug' => 'adidas_neo_mau_trang'],
        ]);
    }
}
