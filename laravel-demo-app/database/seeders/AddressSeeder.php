<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    public function run(): void
    {
        // Mảng để lưu trữ các giá trị user_id đã được sử dụng
        $usedUserIds = [];

        // Lặp qua tất cả các hàng dữ liệu trong bảng addresses
        DB::table('addresses')->whereBetween('id', [11, 20])->get()->each(function ($address) use (&$usedUserIds) {
            do {
                // Sinh một số ngẫu nhiên từ 1 đến 10
                $randomUserId = rand(1, 10);
            } while (in_array($randomUserId, $usedUserIds)); // Kiểm tra xem số ngẫu nhiên đã được sử dụng chưa

            // Thêm số ngẫu nhiên vào mảng các user_id đã được sử dụng
            $usedUserIds[] = $randomUserId;

            // Cập nhật cột user_id cho hàng dữ liệu hiện tại
            DB::table('addresses')->where('id', $address->id)->update(['user_id' => $randomUserId]);
        });
    }
}
