<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->foreignId("category_id");
            $table->string("slug")->unique();
            $table->string("title");
            $table->text("excerpt");
            $table->text("body");
            $table->timestamps();
            $table->timestamp("published")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

/**
 * So this is something
 * we want to do 
 * to recover posts
 * INSERT INTO `posts` (`id`, `category_id`, `slug`, `title`, `excerpt`, `body`, `created_at`, `updated_at`, `published`) VALUES
(7, 3, 'my-hobby-post', 'My Hobby Post', 'Excerpt for my post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur vel risus at varius.', '2022-09-28 00:45:35', '2022-09-28 00:45:35', NULL),
(6, 2, 'my-work-post', 'My Work Post', 'Excerpt for my post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur vel risus at varius.', '2022-09-28 00:44:21', '2022-09-28 00:46:34', NULL),
(5, 1, 'my-family-post', 'My Family Post', 'Excerpt for my post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur vel risus at varius.', '2022-09-28 00:42:53', '2022-09-28 00:42:53', NULL);
 */

/**
 * So this is something
 * we want to do
 * to recover categories
 * INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'Hobbies', 'hobbies', '2022-09-28 00:36:25', '2022-09-28 00:36:25'),
(2, 'Work', 'work', '2022-09-28 00:36:03', '2022-09-28 00:36:03'),
(1, 'Personal', 'personal', '2022-09-28 00:35:29', '2022-09-28 00:35:29');
 */