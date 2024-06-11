<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

Class DeletedUsers extends Seeder{

    public User $user;

    public function run():void{

        //set the deleted_at to null // using Query Builder
        DB::table('users')->whereNotNull('deleted_at')->update(['deleted_at' => null]);
    }
}
