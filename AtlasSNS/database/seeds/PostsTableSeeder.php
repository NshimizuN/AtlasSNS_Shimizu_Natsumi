<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //以下を追加します。
        DB::table('posts')->insert([
            ['post' => '自分が投稿した内容を表示します。
            投稿は最大150字までとして、それ以上のテキストが入力フォームに打ち込まれた場合は投稿できないように設定してください。
            トップでは、自分がフォローしている人の投稿も見れるようにします'],
            ['post' => 'フォローしている人が投稿した内容を表示します'],
            ['post' => 'フォローしている人が投稿した内容を表示します'],
            ['post' => '自分が投稿した内容を表示します。'],
        ]);
    }
}
