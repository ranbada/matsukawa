<?php get_header(); ?>

<?php get_template_part('parts/global-navigation', 'top'); ?>

<main
  id="carouselExampleFade"
  class="cf main carousel slide carousel-fade"
  data-ride="carousel"
>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo esc_url( home_url() ); ?>/assets/images/main_images/img01.jpg" alt="" />
    </div>
    <div class="carousel-item">
      <img src="<?php echo esc_url( home_url() ); ?>/assets/images/main_images/img02.jpg" alt="" />
    </div>
    <div class="carousel-item">
      <img src="<?php echo esc_url( home_url() ); ?>/assets/images/main_images/img03.jpg" alt="" />
    </div>
    <div class="carousel-item">
      <img src="<?php echo esc_url( home_url() ); ?>/assets/images/main_images/img04.jpg" alt="" />
    </div>
    <div class="carousel-item">
      <img src="<?php echo esc_url( home_url() ); ?>/assets/images/main_images/img05.jpg" alt="" />
    </div>
    <div class="carousel-item">
      <img src="<?php echo esc_url( home_url() ); ?>/assets/images/main_images/img06.jpg" alt="" />
    </div>
  </div>
  <a
    class="carousel-control-prev"
    href="#carouselExampleFade"
    role="button"
    data-slide="prev"
  >
    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">前へ</span> -->
  </a>
  <a
    class="carousel-control-next"
    href="#carouselExampleFade"
    role="button"
    data-slide="next"
  >
    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">次へ</span> -->
  </a>
</main>

<?php
$args = array('post_type' => 'info',
              'orderby' => 'date',
              'order' => 'DESC',
              'posts_per_page' => 4
            );
$post_list = get_posts($args);
if ($post_list) : ?>
<section class="info">
  <h2 class="info__title">最新情報</h2>
  <ul>
<?php foreach ($post_list as $post) : setup_postdata ($post); ?>
    <li>
      <dl class="cf">
        <dt class="info__date"><time><?php the_time('Y.m.d'); ?></time></dt>
        <dd class="info__text"><?php remove_filter ('the_content', 'wpautop'); the_content(); ?></dd>
      </dl>
    </li>
<?php endforeach; wp_reset_query(); ?>
  </ul>
</section>
<?php endif; ?>

<div class="content cf">
  <section class="insrence content__box bg-image">
    <div class="bg-mask">
      <div class="insrence__inner">
        <h3><span>各種保険取り扱い</span></h3>
        <ul>
          <li>・骨折 脱臼 捻挫 挫傷(肉離れ) 打撲</li>
          <li>・スポーツ障害、リハビリ(機能訓練)</li>
          <li>・交通事故、労災</li>
        </ul>
        <p class="mt-1">
          スポーツ障害や日常生活での痛みの改善に努め皆様の生活をより良くするために痛みの原因をお話しや体を動かしながら行うテストなどを用いて見つけその症状を取り除く事を目的としています。<br />
          体の悩み事がありましたらご相談のみでもお話を聞かせてください。<br />
          ※骨折、脱臼に限り二回目以降の施術に医師の同意が必要なため提携クリニックに受診をお願いすることがございますあらかじめご了承ください。
        </p>
      </div>
    </div>
  </section>

  <section class="staff cf">
    <div class="staff__manager">
      <div class="staff__manager__inner">
        <div class="content__box__inner">
          <h3><span>加川院長からヒトコト</span></h3>
          <dl class="content__box__list">
            <dt class="content__box__img"><figure></figure></dt>
            <dd class="content__box__text">
              当院では、患者様の痛みに対して原因を見つけ患者様の生活の質を向上させるために誠心誠意の施術をさせて頂きます。痛みにお困りの方はご相談のみでもお話を聞かせてください。<br /><br />
              日常生活での注意点やご自宅でも行えるストレッチや体操などのを行って頂き私達と共に痛みのない生活を提供して行きたいと考えております。<br /><br />
              またスポーツを楽しんでいる方には競技力向上や痛みのないスポーツライフを楽しんで頂ける様努めてまいります。
            </dd>
          </dl>
        </div>
      </div>
    </div>

    <div class="staff__yuki">
      <div class="staff__yuki__inner">
        <div class="content__box__inner">
          <h3><span>スタッフ - 田原から</span></h3>
          <dl class="content__box__list">
            <dt class="content__box__img"><figure></figure></dt>
            <dd class="content__box__text">
              これくらいの痛みなら我慢できるからいいか。なんて思っている方も、是非一度お気軽に相談しにいらしてください。<br /><br />
              その痛みを取り除いて皆さんの日々のストレス解消のお手伝いができたらとても嬉しいです。
            </dd>
          </dl>
        </div>
      </div>
    </div>

    <div class="staff__matsuda">
      <div class="staff__matsuda__inner">
        <div class="content__box__inner">
          <h3><span>スタッフ - 松田から</span></h3>
          <dl class="content__box__list">
            <dt class="content__box__img"><figure></figure></dt>
            <dd class="content__box__text">
              治療もそうなんですが、まずは信頼して相談できる接骨院をめざしています。<br /><br />
              僕らの出来ることは全力で向き合う所存です。
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </section>

  <section class="line content__box bg-image">
    <div class="line__inner">
      <div class="content__box__inner">
        <dl class="content__box__list">
          <dt class="content__box__img"><figure></figure></dt>
          <dd class="content__box__text">
            お気軽にLINEで<br />お問い合わせください。
          </dd>
        </dl>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
