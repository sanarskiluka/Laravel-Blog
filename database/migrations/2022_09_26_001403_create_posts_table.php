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
            $table->foreignId("user_id")->constrained()->onDelete('cascade');
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

/*
 * So this is something
 * we want to do 
 * to recover posts
 * INSERT INTO `posts` (`id`, `category_id`, `slug`, `title`, `excerpt`, `body`, `created_at`, `updated_at`, `published`) VALUES
(7, 3, 'my-hobby-post', 'My Hobby Post', 'Excerpt for my post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur vel risus at varius.', '2022-09-28 00:45:35', '2022-09-28 00:45:35', NULL),
(6, 2, 'my-work-post', 'My Work Post', 'Excerpt for my post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur vel risus at varius.', '2022-09-28 00:44:21', '2022-09-28 00:46:34', NULL),
(5, 1, 'my-family-post', 'My Family Post', 'Excerpt for my post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur vel risus at varius.', '2022-09-28 00:42:53', '2022-09-28 00:42:53', NULL);
 */

/*
 * to recover categories
 * INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'Hobbies', 'hobbies', '2022-09-28 00:36:25', '2022-09-28 00:36:25'),
(2, 'Work', 'work', '2022-09-28 00:36:03', '2022-09-28 00:36:03'),
(1, 'Personal', 'personal', '2022-09-28 00:35:29', '2022-09-28 00:35:29');
 */


//  To get back things that belong to me
/*

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `slug`, `title`, `excerpt`, `body`, `created_at`, `updated_at`, `published`) VALUES
(1, 1, 1, 'dolores-eaque-optio-dignissimos-aut-minima-vitae', 'Laudantium et expedita consequatur voluptates rerum rerum ea.', 'Numquam hic non deserunt doloribus dolorum ut deleniti.', 'Ut ullam repellat autem omnis. Sed ut necessitatibus nemo quidem consequatur. Non minima ut et id. Quis fuga debitis ab.', '2022-10-01 23:46:37', '2022-10-01 23:46:37', NULL),
(2, 1, 2, 'aliquam-perferendis-hic-ratione-consequatur', 'Placeat sit doloremque veniam.', 'Dolor molestiae temporibus cum molestiae excepturi soluta.', 'Deserunt quis unde aut similique et quas enim. Sit ea vitae sed voluptatem rerum. Ea ea dolores aliquid aliquid porro id. Iure dolores omnis alias eaque temporibus eaque quis.', '2022-10-01 23:46:37', '2022-10-01 23:46:37', NULL),
(3, 1, 3, 'atque-et-aperiam-molestias-rerum-et-cumque', 'Eos distinctio ad ducimus minima magnam ea minus.', 'Autem qui ipsam laboriosam enim rem et.', 'Non commodi incidunt tempore nihil et nemo deleniti. Maiores sapiente totam laborum assumenda. At velit officiis est voluptas dolorem non voluptatem quia. Architecto consequatur quo nisi nesciunt eveniet suscipit eos assumenda. Laborum illum vel ad voluptatem et.', '2022-10-01 23:46:37', '2022-10-01 23:46:37', NULL),
(4, 1, 4, 'ut-eaque-iste-suscipit-cum-aliquid-dignissimos-sunt', 'Delectus ut est sed error.', 'Ea nesciunt unde magni perferendis non.', 'Minima esse illo non non quod eaque rerum soluta. Facere molestiae aut itaque id. Vitae et sint in recusandae. Voluptatem voluptatem eius id minima.', '2022-10-01 23:46:37', '2022-10-01 23:46:37', NULL),
(5, 1, 5, 'non-voluptates-et-necessitatibus-velit-qui-tempora', 'Similique vel exercitationem ad aut.', 'Consectetur iusto ullam consequatur ipsam unde consectetur et.', 'Dolorem quia nam omnis aut reiciendis maiores. Voluptates incidunt consequatur fugiat ut maiores debitis error. Est nostrum soluta saepe consequatur ut numquam sunt.', '2022-10-01 23:46:37', '2022-10-01 23:46:37', NULL),
(8, 2, 8, 'occaecati-omnis-eveniet-consectetur-non', 'Et tempora sint sunt.', 'Est eos odit temporibus qui illum maxime fugiat.', 'Culpa reiciendis soluta et amet non. Dolorum numquam odit aliquid. In sit voluptatum tempora earum est.', '2022-10-01 23:46:37', '2022-10-01 23:46:37', NULL),
(9, 2, 9, 'qui-quisquam-illum-tenetur-autem-animi-ut', 'Nisi velit omnis consectetur aspernatur explicabo nam.', 'Et quis debitis explicabo officia sequi.', 'At omnis pariatur voluptas at autem. Dolorem corrupti quia dolor ut. Incidunt vero quasi est non deleniti voluptate voluptatem impedit.', '2022-10-01 23:46:37', '2022-10-01 23:46:37', NULL),
(10, 2, 10, 'quia-mollitia-non-mollitia-sit-quisquam', 'Et sed rem quis omnis optio.', 'Exercitationem eveniet explicabo vel est non omnis nobis.', 'Dolores adipisci nobis quidem odio. Laudantium delectus vero ab iste ut ut iusto. Qui saepe cum delectus. Autem repellat et et velit.', '2022-10-01 23:46:37', '2022-10-01 23:46:37', NULL),
(11, 2, 11, 'repellat-dolor-officiis-et-qui-est-voluptatem', 'Illum non quia vitae adipisci.', 'Cum et quae laborum.', 'Ea et eaque magnam id delectus qui. Voluptate eius ea voluptatum vero nobis. Similique est sed incidunt maiores. Quo praesentium qui laborum aut tempora.', '2022-10-01 23:46:37', '2022-10-01 23:46:37', NULL),
(12, 2, 12, 'consequatur-totam-omnis-nihil-dolorem-quis-et-vel', 'Sit sunt praesentium non voluptas.', 'Accusantium cumque earum suscipit non modi nisi qui.', 'Velit excepturi quibusdam culpa sint. Distinctio alias veritatis minima illum rem modi et. Eaque consectetur architecto quas veritatis non. Eius et nulla eum.', '2022-10-01 23:46:37', '2022-10-01 23:46:37', NULL),
(13, 2, 13, 'sed-maiores-qui-quos-maiores-nihil-temporibus-sit', 'Non consectetur consequuntur beatae non.', 'Nihil dolorem corrupti explicabo quisquam autem.', 'Cum modi ducimus eligendi laborum voluptatibus earum vero praesentium. Ipsa laborum commodi consequatur et eaque et. Repellendus culpa rerum consequatur tempora sed. Aut quaerat enim occaecati eveniet dolorum facere et. Aliquid corrupti cupiditate sapiente veritatis velit accusantium.', '2022-10-01 23:46:37', '2022-10-01 23:46:37', NULL),
(14, 1, 5, 'explicabo-ipsum-recusandae-officiis-quo', 'Quod ipsa hic amet ad aliquid reprehenderit soluta.', 'Enim quisquam repellendus iste quibusdam a et.', 'Dolore explicabo placeat vitae reiciendis. Debitis est cum vel rerum non. Minus voluptatem temporibus officiis dicta nulla. Rem id expedita repellat vel impedit ea voluptatem. Qui voluptate officiis ad tempore voluptates.', '2022-10-01 23:47:49', '2022-10-01 23:47:49', NULL),
(15, 1, 5, 'cupiditate-neque-culpa-consequatur-eum-similique-eveniet-harum', 'Sint vero itaque repellendus aut.', 'Aperiam in repudiandae impedit dolorum ab sunt.', 'Corrupti in adipisci in qui quas facilis officiis beatae. Qui dolor occaecati necessitatibus dolores alias earum aut.', '2022-10-01 23:47:49', '2022-10-01 23:47:49', NULL),
(16, 1, 5, 'perferendis-est-est-dolores-molestias-ut-et-ipsam', 'Saepe atque quisquam fugit est aut tempore.', 'Quia ad rerum libero et et distinctio.', 'Fugiat perspiciatis delectus nihil et. Ratione voluptates sit quos nostrum voluptas qui et. Non non aliquid asperiores sit non quibusdam asperiores et. Vitae fugit rerum aliquid. Corrupti alias nulla et sed et expedita maxime.', '2022-10-01 23:47:49', '2022-10-01 23:47:49', NULL),
(17, 1, 5, 'explicabo-sed-ea-aspernatur-rerum-officia-enim-sequi', 'Et quis ut est est possimus ullam.', 'Doloremque corporis sint consequatur possimus velit tempore enim.', 'Quia delectus dolor et repellat et. Nulla odit ea voluptatibus ea et non fuga et. Qui excepturi facilis nemo. Explicabo aliquid sunt dolore debitis deleniti. Aliquid quia cupiditate nisi quia voluptas.', '2022-10-01 23:47:49', '2022-10-01 23:47:49', NULL),
(18, 1, 5, 'et-iste-ea-ipsa-necessitatibus-laudantium', 'Labore aliquam modi eaque vel repellendus.', 'Saepe numquam officia dolorem at et ipsum.', 'Impedit cupiditate aliquam dolorem nesciunt nisi natus. Adipisci voluptatibus quod eaque perferendis quia. Dolorem at consequuntur modi repudiandae non modi. Eum consequatur dolores fugiat qui id reiciendis aliquid aliquid.', '2022-10-01 23:47:49', '2022-10-01 23:47:49', NULL),
(19, 1, 5, 'cum-atque-voluptate-quasi-saepe-perspiciatis-voluptatem-et', 'Ducimus voluptas tenetur sed ut corrupti quod est minus.', 'Aut et unde quasi eos.', 'Voluptatibus dolores ut vitae sequi autem voluptatibus molestiae. Dolorem minus sint est dolores sit veniam. Praesentium omnis possimus velit. Officia inventore facilis nihil.', '2022-10-01 23:47:49', '2022-10-01 23:47:49', NULL),
(20, 1, 5, 'et-sed-sed-totam-deserunt-quo-quia-ad-aut', 'Culpa nulla dolores repellat expedita aspernatur.', 'Distinctio error quibusdam sint necessitatibus.', 'Ut fuga deserunt sed omnis. Ab nostrum quisquam veritatis tempore est est. Voluptatem et aut quisquam reprehenderit. Delectus nobis dolores quaerat officiis exercitationem et exercitationem.', '2022-10-01 23:47:49', '2022-10-01 23:47:49', NULL),
(21, 1, 5, 'harum-ad-sint-quis-ut-unde-et-est-cumque', 'Qui minus repudiandae quo eaque totam repellendus quibusdam.', 'Iusto non error aut consequatur sit qui.', 'Debitis distinctio in veritatis sint delectus. Dolorum sit voluptatum eaque itaque sit. Exercitationem rerum culpa tempore atque. Voluptatem sit aliquid eius in nam similique at maxime. Rerum minima omnis unde occaecati.', '2022-10-01 23:47:49', '2022-10-01 23:47:49', NULL),
(22, 1, 5, 'deleniti-est-harum-quidem-quis-et-adipisci-eum-distinctio', 'Commodi doloribus recusandae perferendis praesentium aliquam.', 'Ullam officia quam in reprehenderit et nihil aut.', 'Magnam voluptatem excepturi ut cumque veritatis ut soluta. Ratione perferendis laboriosam dicta delectus autem aperiam atque vitae. Nobis labore saepe corrupti rem. Voluptas aspernatur tempora quibusdam et voluptatem delectus reiciendis.', '2022-10-01 23:47:49', '2022-10-01 23:47:49', NULL),
(23, 1, 5, 'ad-sed-qui-ab-eaque-a-ipsam', 'Dignissimos nobis reiciendis omnis id.', 'Ab sint voluptatem in non omnis pariatur nostrum.', 'Distinctio et similique atque quas velit. Beatae est saepe veniam eum nihil. Accusamus pariatur qui vero enim quis.', '2022-10-01 23:47:49', '2022-10-01 23:47:49', NULL),
(24, 3, 14, 'qui-et-occaecati-est-ut', 'Laudantium sunt laudantium dolores consequuntur similique.', '<p>Alias impedit eos voluptatum fugiat tempore unde consequuntur. Voluptatem quasi quis nesciunt eaque fuga amet. Molestias non soluta modi dignissimos a cum eos vel. Quisquam dolorum sunt occaecati vel officia quo.</p><p>Voluptatum corporis laborum laboriosam ab. Nam suscipit error sit aut reprehenderit explicabo. Cupiditate provident error facere aliquam numquam eos earum saepe.</p>', '<p>Molestiae rerum quam amet fugit quae. Quia doloribus quasi nesciunt eos nemo error eveniet. Ipsa accusamus occaecati aut est maiores ex asperiores.</p><p>Labore reprehenderit quo molestiae laborum sed. Labore illo quis aut qui vero.</p><p>Qui vitae aut et eaque. Repellat autem repellendus occaecati optio nulla. Perspiciatis quia consectetur dolorum corporis. Voluptatem et omnis accusantium ipsum.</p><p>Ducimus corrupti beatae assumenda autem dolor quas. Tenetur iure magnam aperiam sed. Qui in fuga commodi dolor.</p><p>Consectetur ullam eos illum enim sunt. Totam quia et quam dolores. Inventore molestias dolor cumque ea.</p><p>Dolorem voluptatem molestias ipsa et consectetur qui consequatur illo. Deserunt eos illo et totam. Expedita quo iusto repudiandae enim ut. Maiores ut harum nihil necessitatibus pariatur.</p>', '2022-10-08 02:20:34', '2022-10-08 02:20:34', NULL),
(25, 4, 15, 'et-omnis-et-dolores-et-aliquam-provident-atque', 'Assumenda est eveniet quod labore.', '<p>Velit incidunt eos distinctio vitae. Rem et perferendis perferendis provident rerum. Repudiandae non repellendus labore minus. Minus nisi amet quaerat ad.</p><p>Nihil ratione dolores perspiciatis perferendis provident quam dolorem quia. Fuga et rerum error quod quod repellat. Consectetur enim delectus harum eum ut dolor et. Nobis fugiat minus necessitatibus sunt natus.</p>', '<p>Quis asperiores tempora quia accusamus. Qui ut iste dicta et soluta temporibus. Eum sint officia eaque eaque modi repudiandae et.</p><p>Dolorem veniam earum sit quaerat omnis rerum. Velit sint illum molestiae laborum. Quos vel hic amet ex. Dolores qui velit dolor.</p><p>Consequuntur eos in fuga excepturi. Perspiciatis facere ut minus esse. Quaerat eveniet delectus blanditiis odio recusandae.</p><p>Ad magnam veritatis enim. Ipsam cum veritatis quia. Ea molestiae eligendi omnis atque eos earum aut. Suscipit voluptas commodi sed aut repudiandae.</p><p>Quia id vel facilis inventore enim voluptatem sapiente. Velit iure animi nam voluptates. Eum pariatur qui tempora maiores facere officiis quisquam.</p><p>Et consequuntur est atque deleniti impedit quisquam dicta officia. Animi eveniet quis quia labore officia maiores. Dolores deleniti voluptatem velit doloremque aut. Dolor voluptates modi quasi et tempore architecto et. Voluptatem sed natus ut est ad.</p>', '2022-10-08 02:20:34', '2022-10-08 02:20:34', NULL),
(26, 5, 16, 'sunt-et-quos-est-enim-unde-ut', 'Nihil est est qui sapiente rerum.', '<p>Aliquid aut natus reiciendis asperiores tempora. Animi cumque ut omnis recusandae. Praesentium ut aut numquam aut quasi sint fugit. Aut voluptatem velit et sed a magni.</p><p>Voluptatem id illum officiis repellat. Voluptatem aperiam hic nihil aut. Et et aliquam totam qui est a.</p>', '<p>Eos sunt et est asperiores aspernatur. Voluptatem quo facere culpa sit. Nostrum ab error est veniam. Temporibus asperiores nobis nihil ex consequuntur impedit omnis. Explicabo enim repudiandae doloremque beatae labore.</p><p>Quia eos nihil porro iure eum quia pariatur. Optio architecto ipsa et. Alias aspernatur ut velit recusandae dicta sed.</p><p>Illo saepe molestiae iure quia. Officiis assumenda qui voluptas. Qui facilis quia modi qui omnis voluptatem. Velit asperiores enim et quae laudantium quia.</p><p>Quo deleniti eligendi quia doloremque sit. Eos eaque quidem qui voluptatem ea quis dicta. Explicabo quis dolorem quam optio qui qui alias. Ipsa consequatur quam sint.</p><p>Omnis doloribus sit est. Quod non consequatur saepe qui molestias aut. Ab impedit quam delectus corrupti porro. Voluptas sit praesentium voluptatem mollitia velit eligendi nostrum. Sed voluptatem omnis voluptas dolorum magni aut et.</p><p>Et a itaque maiores ut enim. Totam iusto quia perferendis dolores eveniet ea quod rerum. Est sapiente possimus quaerat aut ducimus error harum.</p>', '2022-10-08 02:20:34', '2022-10-08 02:20:34', NULL),
(27, 6, 17, 'voluptas-reiciendis-veritatis-consequatur-autem', 'Dolorem dolorum tenetur id dolor eligendi quae.', '<p>Accusantium quam itaque cum dicta. Asperiores quo cupiditate occaecati hic aut iste assumenda. Excepturi eligendi porro impedit quidem. Animi magni asperiores non est perferendis labore cupiditate. Quisquam explicabo ut voluptate quae.</p><p>Tempora ullam sed doloremque id voluptatem. Iure ex harum voluptates rerum quae placeat at adipisci. Molestiae magnam doloremque quod et iure qui voluptas.</p>', '<p>Et tenetur laudantium quisquam ipsam. Modi recusandae soluta quam. Molestias suscipit voluptates et aperiam. Quia dolore sit consequatur explicabo est.</p><p>Omnis reprehenderit quo quo sunt accusamus. Aut sapiente eum rem sed similique voluptas. Quod velit magnam sint architecto.</p><p>Repudiandae quis incidunt doloremque commodi inventore molestiae incidunt et. Eos libero aliquam et architecto necessitatibus. Ipsam qui et labore perferendis et quos voluptatem ut. Non voluptas totam explicabo sint nam debitis. Non neque quas molestiae voluptates voluptatem.</p><p>Est sed vitae nesciunt fuga quia et. Odio impedit esse enim est et nihil ut. Dolorum nam aut veritatis consequatur nesciunt.</p><p>Molestiae aut consequatur impedit adipisci sit corporis praesentium. Dolorem mollitia vel dolorem enim ut id. Dolores sed tempore quisquam dolores architecto in ad.</p><p>Molestiae architecto quis quia esse deleniti. Eos eaque laborum qui sed. Exercitationem facere beatae eos quia qui autem vel. Et dolorum debitis dolor sapiente ex ipsam placeat impedit.</p>', '2022-10-08 02:20:34', '2022-10-08 02:20:34', NULL),
(28, 7, 18, 'voluptate-dolor-maiores-animi-dicta-unde-qui', 'Asperiores quod iure cupiditate.', '<p>Vel cumque cum iure commodi qui. Cupiditate error repellat rerum quia qui ut consequuntur ea. Sit quia dolores qui quia corrupti ea sed. Reiciendis deleniti non iste et veritatis magni cumque excepturi.</p><p>Sit qui illo libero maxime repellat. Repellat accusantium officia magnam voluptatem blanditiis nam omnis. Ipsa animi possimus omnis atque et. Dolorem vel nisi at deserunt illum molestiae.</p>', '<p>Recusandae eum provident et dolores nam. Qui amet incidunt consectetur fugiat aut nesciunt. Eaque excepturi dicta rerum molestias tenetur.</p><p>Enim animi illum est. Nobis sit cupiditate dignissimos animi in non exercitationem. Nobis dolor omnis iste qui porro ut.</p><p>Enim tenetur id at doloribus. In consequatur officia optio minus rem et vel.</p><p>Animi quia provident et sed sit dicta ut at. Velit vel qui sunt neque nisi in quo praesentium. Quis qui quisquam voluptatem.</p><p>Quis voluptates modi et omnis. Iure ut repudiandae sed consequatur magni et. Id quia corrupti id voluptatem error inventore et.</p><p>A qui praesentium eum temporibus eaque rerum. Odit delectus vitae atque quidem sint sed nostrum. Cum odit aliquam saepe officiis sapiente eos nostrum. Voluptatibus veniam autem sed odio qui in natus.</p>', '2022-10-08 02:20:34', '2022-10-08 02:20:34', NULL);


INSERT INTO `users` (`id`, `username`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mfisher', 'John Doe', 'ohara.rafaela@example.net', '2022-10-02 03:46:48', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lUz8mDhY7F', '2022-10-01 23:46:37', '2022-10-01 23:46:37'),
(2, 'cho', 'Luka Sanarski', 'deven.crona@example.com', '2022-10-12 23:25:18', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7IBfe8XIyh', '2022-10-01 23:46:37', '2022-10-01 23:46:37'),
(3, 'rasheed88', 'Jason Kulas', 'jared27@example.net', '2022-10-08 02:20:34', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'sVDfkPOjRm', '2022-10-08 02:20:34', '2022-10-08 02:20:34'),
(4, 'mossie.berge', 'Emerald Purdy DVM', 'stoltenberg.hertha@example.org', '2022-10-08 02:20:34', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lfUJPYVXpY', '2022-10-08 02:20:34', '2022-10-08 02:20:34'),
(5, 'hanna.erdman', 'Lavada Schiller', 'declan.hudson@example.org', '2022-10-08 02:20:34', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HRpxj778ha', '2022-10-08 02:20:34', '2022-10-08 02:20:34'),
(6, 'lia67', 'Philip Mills', 'hammes.ward@example.com', '2022-10-08 02:20:34', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VpZcvIZsFN', '2022-10-08 02:20:34', '2022-10-08 02:20:34'),
(7, 'selena51', 'Ruby Stehr', 'schoen.edyth@example.net', '2022-10-08 02:20:34', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uzPyG7yHUi', '2022-10-08 02:20:34', '2022-10-08 02:20:34'),
(9, 'lukasanarski', 'Luka Sanarski', 'sanarskiluka2003@gmail.com', '2022-10-13 03:32:08', 1, '$2y$10$CipL4iYkud7nAY0hpymmie1iwqAAoyOHtwB4GnZgmIAqo8wUfFoDu', NULL, '2022-10-12 19:25:23', '2022-10-12 19:25:23'),
(12, 'sanarskiluka', 'Luka Sanarski', 'lsanarski12@gmail.com', '2022-10-13 03:34:23', 0, '$2y$10$nbSr.6cUIBIN6rhgG6VKr.2.32rxolCH6x2WU.r2GA2ag8q5//H4y', NULL, '2022-10-12 20:47:37', '2022-10-12 20:47:37'),
(17, 'topevarbraat', 'Tope', 'tope@chiatura.ge', '2022-10-13 03:31:01', 0, '$2y$10$nbSr.6cUIBIN6rhgG6VKr.2.32rxolCH6x2WU.r2GA2ag8q5//H4y', NULL, '2022-10-12 23:31:01', '2022-10-12 23:31:01'),
(18, 'kvaxa', 'Tinatin Kvakhadze', 'tkvak22@freeuni.edu.ge', '2022-10-13 23:31:47', 0, '$2y$10$tvznsqNLDAXg8hf3VpD1IeJ99mpT7EaRVJ9mgonfLjRraXYkJ2qfS', NULL, '2022-10-13 19:31:36', '2022-10-13 19:31:36'),
(28, 'ravimotyaniertimagisic', 'Ravi Motyani', 'ravimotyani69@gmail.com', '2022-10-14 00:35:49', 0, '$2y$10$ipFlsmuWWT/21blxWssPU.M4AMSJZL/HpbGA1jQO9EeGE9AXHeB96', NULL, '2022-10-13 20:35:49', '2022-10-13 20:35:49'),
(258, 'jewfjewoi', 'wekfjewoij', 'oijewiofjweoi@osijfew.weiojf', '2022-10-14 02:26:18', 0, '$2y$10$i38r8aAAD2pJeuEngpYKiOv/TihdxvO4tt.baZu5m1yF3cC8KGc2W', NULL, '2022-10-13 22:26:18', '2022-10-13 22:26:18');


INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'nam', 'quas-eum-quisquam-vel-omnis-natus', '2022-10-01 23:46:37', '2022-10-01 23:46:37'),
(2, 'molestias', 'nostrum-atque-et-praesentium-voluptas-minima', '2022-10-01 23:46:37', '2022-10-01 23:46:37'),
(3, 'quia', 'voluptatem-dolor-assumenda-blanditiis-unde-aliquam-sed-dicta', '2022-10-01 23:46:37', '2022-10-01 23:46:37'),
(4, 'veniam', 'quae-cum-aspernatur-voluptas-in-reprehenderit-distinctio-quibusdam-voluptatem', '2022-10-01 23:46:37', '2022-10-01 23:46:37'),
(5, 'id', 'modi-animi-ut-fugit-expedita-rerum', '2022-10-01 23:46:37', '2022-10-01 23:46:37'),
(6, 'ab', 'rerum-quia-voluptatem-qui-omnis-omnis-temporibus-quia', '2022-10-01 23:46:37', '2022-10-01 23:46:37'),
(7, 'voluptatem', 'et-rerum-voluptatum-mollitia-labore-dolorem-sunt-deleniti', '2022-10-01 23:46:37', '2022-10-01 23:46:37'),
(8, 'aut', 'ea-sed-est-adipisci-doloribus-dolorum', '2022-10-01 23:46:37', '2022-10-01 23:46:37'),
(9, 'eveniet', 'eos-nihil-doloremque-adipisci-qui', '2022-10-01 23:46:37', '2022-10-01 23:46:37'),
(10, 'inventore', 'repudiandae-deleniti-voluptas-voluptas-ipsa-nobis-voluptatem-aut', '2022-10-01 23:46:37', '2022-10-01 23:46:37'),
(11, 'illum', 'sapiente-ut-consequatur-rerum-voluptatem-atque', '2022-10-01 23:46:37', '2022-10-01 23:46:37'),
(12, 'illo', 'in-suscipit-et-ut-ratione-non', '2022-10-01 23:46:37', '2022-10-01 23:46:37'),
(13, 'sint', 'quis-dolorum-animi-aperiam-quos', '2022-10-01 23:46:37', '2022-10-01 23:46:37'),
(14, 'animi', 'suscipit-velit-cupiditate-quod-sed-quasi', '2022-10-08 02:20:34', '2022-10-08 02:20:34'),
(15, 'pariatur', 'quas-voluptatem-veniam-praesentium-nesciunt-dolor-omnis', '2022-10-08 02:20:34', '2022-10-08 02:20:34'),
(16, 'totam', 'quis-quis-veritatis-nam-fuga', '2022-10-08 02:20:34', '2022-10-08 02:20:34'),
(17, 'velit', 'qui-neque-molestiae-enim', '2022-10-08 02:20:34', '2022-10-08 02:20:34'),
(18, 'eos', 'recusandae-et-occaecati-blanditiis-eius-vitae-voluptatem-sapiente', '2022-10-08 02:20:34', '2022-10-08 02:20:34');

*/
