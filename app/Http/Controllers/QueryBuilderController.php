<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class QueryBuilderController extends Controller
{
    public function insertData()
    {
        DB::table('users')->insert([
            'name' => 'Lany',
            'email' => 'lany4@example.com',
            'password' => bcrypt('password123')
        ]);

        return 'Data berhasil ditambahkan';
    }

    public function insertGetId()
    {
        $id = DB::table('users')->insertGetId([
            'name' => 'Maulany',
            'email' => 'maulany@example.com',
            'password' => bcrypt('password123')
        ]);

        return 'ID data: ' . $id;
    }
        public function getData()
    {
        $users = DB::table('users')->get();

        return $users;
    }
        public function firstData()
    {
        $user = DB::table('users')
            ->where('email', 'johndoe@example.com')
            ->first();

        return $user;
        }
        public function selectData()
    {
        $users = DB::table('users')
            ->select('id', 'name')
            ->get();

        return $users;
    }
        public function multipleWhere()
    {
        $users = DB::table('users')
            ->where('status', 'active')
            ->where('role', 'admin')
            ->get();

        return $users;
        }
        public function whereOperator()
    {
        $users = DB::table('users')
            ->where('age', '>', 18)
            ->get();

        return $users;
    }
        public function updateData()
    {
        DB::table('users')
            ->where('email', 'johndoe@example.com')
            ->update([
                'status' => 'inactive'
            ]);

        return 'Data berhasil diperbarui';
    }
        public function incrementDecrement()
    {
        DB::table('users')
            ->where('id', 1)
            ->increment('points', 10);

        DB::table('users')
            ->where('id', 1)
            ->decrement('points', 5);

        return 'Data berhasil diubah';
    }
        public function deleteData()
    {
        DB::table('users')
            ->where('id', 7)
            ->delete();

        return 'Data berhasil dihapus';
    }
        public function truncateData() //mengahpus semua data di db
    {
        DB::table('users')->truncate();

        return 'Semua data berhasil dihapus';
    }
        public function pluckData()
    {
        $names = DB::table('users')->pluck('name', 'email');

        return $names;
    }
        public function aggregateData()
    {
        $count = DB::table('users')->count();
        $sum = DB::table('users')->sum('points');
        $avg = DB::table('users')->avg('points');
        $max = DB::table('users')->max('points');
        $min = DB::table('users')->min('points');

        return [
            'count' => $count,
            'sum' => $sum,
            'avg' => $avg,
            'max' => $max,
            'min' => $min,
        ];
    }
        public function insertOrder()
    {
        DB::table('orders')->insert([
            'user_id' => 1,
            'total_price' => 150000
        ]);

        return 'Order berhasil ditambahkan';
    }
    public function getOrders()
    {
        $orders = DB::table('orders')->get();

        return $orders;
    }
    public function joinData()
    {
        $data = DB::table('users')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.name', 'orders.total_price')
            ->get();

        return $data;
    }
    public function leftJoinData()
{
    $data = DB::table('users')
        ->leftJoin('orders', 'users.id', '=', 'orders.user_id')
        ->select('users.name', 'orders.total_price')
        ->get();

    return $data;
}
public function orderByData()
{
    $users = DB::table('users')
        ->orderBy('name', 'asc')
        ->get();

    return $users;
}
public function limitData()
{
    $users = DB::table('users')
        ->limit(3)
        ->get();

    return $users;
}
public function offsetData()
{
    $users = DB::table('users')
        ->offset(2)
        ->limit(3)
        ->get();

    return $users;
}
public function selectSubData()
{
    $users = DB::table('users')
        ->select('name')
        ->selectSub(
            DB::table('orders')
                ->selectRaw('SUM(total_price)')
                ->whereColumn('orders.user_id', 'users.id'),
            'total_order'
        )
        ->get();

    return $users;
}
public function selectRawData()
{
    $users = DB::table('users')
        ->selectRaw('name, email')
        ->get();

    return $users;
}
public function whereRawData()
{
    $users = DB::table('users')
        ->whereRaw('age > 18')
        ->get();

    return $users;
}
public function createData()
{
    $user = \App\Models\User::create([
        'name' => 'Mw lany',
        'email' => 'lanlan@example.com',
        'password' => bcrypt('password123'),
    ]);

    return 'Data berhasil ditambahkan';
}
public function saveData()
{
    $user = new \App\Models\User();

    $user->name = 'mwlany';
    $user->email = 'lanlan1@example.com';
    $user->password = bcrypt('password123');

    $user->save();

    return 'Data berhasil ditambahkan';
}
public function getAllUsers()
{
    $users = \App\Models\User::all();

    return $users;
}
public function findUser()
{
    $user = \App\Models\User::find(16);

    return $user;
}
public function whereData()
{
    $users = \App\Models\User::where('email', 'lanlan1@example.com')->get();

    return $users;
}
public function firstOrFailData()
{
    $user = \App\Models\User::where(
        'email',
        'lanlan1@example.com'
    )->firstOrFail();

    return $user;
}
public function updateSaveData()
{
    $user = \App\Models\User::where(
        'email',
        'lanlan1@example.com'
    )->first();

    $user->name = 'mwlany Updated';
    $user->save();

    return 'Data berhasil diperbarui';
}
public function destroyData()
{
    $user = \App\Models\User::where(
        'email',
        'lanlan@example.com'
    )->first();

    if ($user) {
        $user->delete();
    }

    return 'Data berhasil dihapus';
}
public function eloquentWhere()
{
    $users = \App\Models\User::where('status', 'active')->get();

    return $users;
}
public function eloquentOrWhere()
{
    $users = \App\Models\User::where('status', 'active')
        ->orWhere('role', 'admin')
        ->get();

    return $users;
}
public function eloquentWhereBetween()
{
    $users = \App\Models\User::whereBetween('age', [18, 30])->get();

    return $users;
}
public function eloquentWhereIn()
{
    $users = \App\Models\User::whereIn('role', ['admin', 'editor'])->get();

    return $users;
}
public function eloquentWhereNull()
{
    $users = \App\Models\User::whereNull('deleted_at')->get();

    return $users;
}
public function eloquentWhereNotNull()
{
    $users = \App\Models\User::whereNotNull('phone')->get();

    return $users;
}
public function eloquentWhen()
{
    $role = 'admin';

    $users = \App\Models\User::when($role, function ($query, $role) {
        return $query->where('role', $role);
    })->get();

    return $users;
}

}