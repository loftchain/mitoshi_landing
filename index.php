<?php
require_once (__DIR__ . '/php/bootstrap.php');
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Mitoshi CryptoLotto ICO</title>
  <link rel="shortcut icon" href="favicon.ico?v=2" type="image/x-icon">
  <link rel="icon" href="favicon.ico?v=3" type="image/x-icon">
	<link href="css/style.min.css?v=9" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <style>
  </style>
</head>
<body>
<div id="buyTokensModal" class="modal">
  <div class="modal-content">
    <span class="close-modal">&times;</span>
    <div>
      <p>
        You are just 120 seconds away...
        <br><br>
        <b>To participating in our Token Sale</b>
        <br><br>
        Welcome!
        <br><br>
        If you wish to reserve a slot, fill in the form below so you can enjoy winning with Mitoshi:
      </p>
      <form action="php/white-list.php" class="buy-tokens-form" method="post">
        <input required type="text" maxlength="15" name="name" placeholder="Name">
        <input required type="text" maxlength="15" name="country" placeholder="Country">
        <input required type="email" name="email" maxlength="30" placeholder="Email Address">
        <input required type="number" name="phone" placeholder="Phone Number">
        <input type="submit" value="Participate" class="modal-submit">
      </form>
    </div>
  </div>
</div>
	<div class="page-wrapper">
		<header class="header">
      <div class="header__wrapper">
        <a class="header__logo">
          <picture>
            <source srcset="images/logo.webp" width="60" height="60" type="image/webp">
            <source srcset="images/logo.png" width="60" height="60" type="image/png">
            <img class="header__logo-img" src="images/logo.png" width="60" height="60" alt="Mitoshi CryptoLotto ICO" title="Mitoshi CryptoLotto ICO">
          </picture>
          <picture>
            <source srcset="images/logo_text.webp" type="image/webp">
            <source srcset="images/logo_text.png" type="image/png">
            <img class="header__logo-text" src="images/logo.png" alt="Mitoshi CryptoLotto ICO" title="Mitoshi CryptoLotto ICO">
          </picture>
        </a>
        <button class="header__toggle"></button>
        <div class="dropdown header__language">
          <button class="header__button header__language-button">
            <?=mb_strtoupper($language->currentLang)?>
          </button>
          <div class="dropdown-content">
            <a class="header__language-link" href="?lang=eng">
              ENG
              <picture>
                <source srcset="images/dropdown/english.webp" type="image/webp">
                <source srcset="images/dropdown/english.png" type="image/png">
                <img src="images/dropdown/english.png" alt="English">
              </picture>
            </a>
            <a class="header__language-link" href="?lang=chn">
              CHN
              <picture>
                <source srcset="images/dropdown/china.webp" type="image/webp">
                <source srcset="images/dropdown/china.png" type="image/png">
                <img src="images/dropdown/china.png" alt="Chinese">
              </picture>
            </a>
            <a class="header__language-link" href="?lang=rus">
              RUS
              <picture>
                <source srcset="images/dropdown/russia.webp" type="image/webp">
                <source srcset="images/dropdown/russia.png" type="image/png">
                <img src="images/dropdown/russia.png" alt="Russian">
              </picture>
            </a>
            <a class="header__language-link" href="?lang=kor">
              KOR
              <picture>
                <source srcset="images/dropdown/south-korea.webp" type="image/webp">
                <source srcset="images/dropdown/south-korea.png" type="image/png">
                <img src="images/dropdown/south-korea.png" alt="Korean">
              </picture>
            </a>
            <a class="header__language-link" href="?lang=vie">
              VIE
              <picture>
                <source srcset="images/dropdown/vietnam.webp" type="image/webp">
                <source srcset="images/dropdown/vietnam.png" type="image/png">
                <img src="images/dropdown/vietnam.png" alt="Vietnamese">
              </picture>
            </a>
          </div>
        </div>
        <div class="header__group">
          <nav class="main-nav">
            <ul class="main-nav__list">
              <li class="main-nav__item">
                <a class="main-nav__link main-nav__link--active" href="#home">
                  <?=lang('navbar_home')?>
                </a>
              </li>
              <li class="main-nav__item">
                <a class="main-nav__link" href="#about">
                  <?=lang('navbar_about')?>
                </a>
              </li>
              <li class="main-nav__item">
                <a class="main-nav__link" href="#sale"><?=lang('navbar_token_sale')?></a>
              </li>
              <li class="main-nav__item">
                <a class="main-nav__link" href="#challenge"><?=lang('navbar_challenges')?></a>
              </li>
              <li class="main-nav__item">
                <a class="main-nav__link" href="#solution"><?=lang('navbar_our_solutions')?></a>
              </li>
              <li class="main-nav__item">
                <a class="main-nav__link" href="#how"><?=lang('navbar_how_it_works')?></a>
              </li>
              <li class="main-nav__item">
                <a class="main-nav__link" href="#roadmap"><?=lang('navbar_roadmap')?></a>
              </li>
              <li class="main-nav__item">
                <a class="main-nav__link" href="#team"><?=lang('navbar_team')?></a>
              </li>
              <li class="main-nav__item">
                <a class="main-nav__link" href="#contacts"><?=lang('navbar_connect_with')?></a>
              </li>
            </ul>
          </nav>
          <div class="header__buttons-group">
            <a class="header__button"
               href="https://investor.mitoshi.io/register" target="_blank">
              <?=lang('navbar_signup')?>
            </a>
            <a class="header__button"
               href="https://investor.mitoshi.io/login" target="_blank">
              <?=lang('navbar_login')?>
            </a>
          </div>
        </div>
      </div>
    </header>
		<main class="main">
      <div class="main__wrapper">
        <section class="mitoshi" id="home">
          <div class="mitoshi__wrapper">
            <h2 class="mitoshi__title">
              Mitoshi<br>
              CryptoLotto ICO
            </h2>
            <div class="mitoshi__desc">
              <p class="mitoshi__text mitoshi__text--strong">
                <b><?=lang('mitoshi_joy_text')?></b>
              </p>
              <p class="mitoshi__text">
                <?=lang('mitoshi_involved')?>
              </p>
              <p class="mitoshi__text">
                <?=lang('mitoshi_blockchain')?>
              </p>
              <p class="mitoshi__text">
                <?=lang('mitoshi_play')?>
              </p>
            </div>
            <div class="mitoshi__button-group">
              <a class="mitoshi__button mitoshi__button--transparent" href="files/Fold_Brochure.pdf" target="_blank">
                <?=lang('mitoshi_brochure')?>
              </a>
              <a class="mitoshi__button mitoshi__button--gold mitoshi__button--right" href="https://t.me/Mitoshi_Crypto" target="_blank">
                <p><i class="fab fa-telegram-plane"></i></p>
                <?=lang('mitoshi_community')?>
              </a>
            </div>
          </div>
        </section>
        <section class="about" id="about">
          <ul class="about__rating-list">
            <li class="about__rating-item">
              <a href="https://icobench.com/ico/mitoshi" class="about__rating-link" target="_blank">
                <dl>
                  <dt>
                    <img src="images/rating/ico-bench.png" alt="ICO-Bench">
                  </dt>
                  <dd>
                    <img src="images/rating/rated-star-40.png" alt="Rating">
                    <p>4.1</p>
                  </dd>
                </dl>
              </a>
            </li>
            <li class="about__rating-item">
              <a href="https://icoholder.com/en/mitoshi-27603" class="about__rating-link" target="_blank">
                <dl>
                  <dt>
                    <img class="big" src="images/rating/ico-holder.svg" alt="ICO-Holder">
                  </dt>
                  <dd>
                    <img src="images/rating/rated-star-48.png" alt="Rating">
                    <p>4.8</p>
                  </dd>
                </dl>
              </a>
            </li>
            <li class="about__rating-item">
              <a href="https://ico.coincheckup.com/mitoshi/" class="about__rating-link" target="_blank">
                <dl>
                  <dt>
                    <img src="images/rating/coin-check-up.png" alt="CoinCheckUp">
                  </dt>
                  <dd>
                    <img src="images/rating/rated-star-40.png" alt="Rating">
                    <p>4.1</p>
                  </dd>
                </dl>
              </a>
            </li>
            <li class="about__rating-item">
              <a href="http://toptokensales.com/?s=Mitoshi" class="about__rating-link" target="_blank">
                <dl>
                  <dt>
                    <img src="images/rating/top-token-sales.png" alt="TopTokenSale">
                  </dt>
                  <dd>
                    <img src="images/rating/rated-star-30.png" alt="Rating">
                    <p>3,0</p>
                  </dd>
                </dl>
              </a>
            </li>
            <li class="about__rating-item">
              <a href="https://icomarks.com/search?q=Mitoshi" class="about__rating-link" target="_blank">
                <dl>
                  <dt>
                    <img src="images/rating/ico-marks.png" alt="ICOMarks">
                  </dt>
                  <dd>
                    <img src="images/rating/rated-star-85.png" alt="Rating">
                    <p>8.5</p>
                  </dd>
                </dl>
              </a>
            </li>
          </ul>
          <div class="about__sale">
            <h3 class="about__sale-title">
              Pre-Sale Live
            </h3>
            <p class="about__sale-status">
              Sales Status:
              <span class="about__sale-hardcap"></span>
              USD
            </p>
            <ul class="about__sale-list">
              <li class="about__sale-item">
                <img class="about__sale-icon" src="images/sale/btc.svg" alt="BTC">
                <p>
                  BTC =
                  <span class="about__sale-btc"></span>
                </p>
                <a class="about__join-link" href="https://investor.mitoshi.io/login" target="_blank">Join Now</a>
              </li>
              <li class="about__sale-item">
                <img class="about__sale-icon" src="images/sale/eth.svg" alt="ETH">
                <p>
                  ETH = <span class="about__sale-eth"></span>
                </p>
                <p>
                  <a class="about__join-link" href="https://investor.mitoshi.io/login" target="_blank">Join Now</a>
                </p>
              </li>
            </ul>
          </div>
          <h2 class="about__title">
            <?=lang('about_title')?>
          </h2>
          <div class="about__group">
            <div class="about__video-wrap">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/nxCJ80f2_sU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="about__desc">
              <p class="about__text about__text--strong">
                <b><?=lang('about_vision')?></b>
              </p>
              <p class="about__text">
                <?=lang('about_vision_text')?>
              </p>
              <p class="about__text about__text--strong">
                <b><?=lang('about_contract')?></b>
              </p>
              <p class="about__text">
                <?=lang('about_contract_text')?>
              </p>
              <p class="about__text about__text--strong">
                <b><?=lang('about_draws')?></b>
              </p>
              <p class="about__text">
                <?=lang('about_draws_text')?>
              </p>
              <div class="about__buttons-group">
                <a class="about__button" target="_blank" href="files/Draws.pdf">
                  <?=lang('about_draws_learn')?>
                </a>
                <a class="about__button" target="_blank" href="https://www.playmitoshi.com">
                  <?=lang('about_play')?>
                </a>
              </div>
            </div>
          </div>
        </section>
        <section class="sale" id="sale">
          <h2 class="sale__title">
            <?=lang('sale_title')?>
          </h2>
          <p class="sale__text">
            <?=lang('sale_token')?>
          </p>
          <div class="sale__content">
            <div class="sale__table-wrap">
              <table class="sale__table">
                <tr class="sale__table-row">
                  <td class="sale__table-data"><b><?=lang('sale_token_symbol')?></b></td>
                  <td class="sale__table-data sale__table-data--right">MTSH</td>
                </tr>
                <tr class="sale__table-row">
                  <td class="sale__table-data"><b><?=lang('sale_token_start')?></b></td>
                  <td class="sale__table-data sale__table-data--right"><?=lang('sale_token_start_date')?></td>
                </tr>
                <tr class="sale__table-row">
                  <td class="sale__table-data"><b><?=lang('sale_token_end')?></b></td>
                  <td class="sale__table-data sale__table-data--right"><?=lang('sale_token_end_date')?></td>
                </tr>
                <tr class="sale__table-row">
                  <td class="sale__table-data"><b><?=lang('sale_total_amount')?></b></td>
                  <td class="sale__table-data sale__table-data--right">1,000,000,000</td>
                </tr>
                <tr class="sale__table-row">
                  <td class="sale__table-data"><b><?=lang('sale_to_be_sold')?></b></td>
                  <td class="sale__table-data sale__table-data--right">
                    <?=lang('sale_to_be_sold_amount')?>
                  </td>
                </tr>
                <tr class="sale__table-row">
                  <td class="sale__table-data"><b><?=lang('sale_private')?></b></td>
                  <td class="sale__table-data sale__table-data--right">US$20,000,000.00</td>
                </tr>
                <tr class="sale__table-row">
                  <td class="sale__table-data"><b><?=lang('sale_pre')?></b></td>
                  <td class="sale__table-data sale__table-data--right">US$20,000,000.00</td>
                </tr>
                <tr class="sale__table-row">
                  <td class="sale__table-data"><b><?=lang('sale_main')?></b></td>
                  <td class="sale__table-data sale__table-data--right">US$60,000,000.00</td>
                </tr>
                <tr class="sale__table-row">
                  <td class="sale__table-data"><b><?=lang('sale_soft_cap')?></b></td>
                  <td class="sale__table-data sale__table-data--right">US$10,000,000.00</td>
                </tr>
                <tr class="sale__table-row">
                  <td class="sale__table-data"><b><?=lang('sale_hard_cap')?></b></td>
                  <td class="sale__table-data sale__table-data--right">US$100,000,000.00</td>
                </tr>
                <tr class="sale__table-row">
                  <td
                    class="sale__table-data"><b><?=lang('sale_accepted')?></b></td>
                  <td class="sale__table-data sale__table-data--right">ETH, BTC & USD</td>
                </tr>
                <tr class="sale__table-row">
                  <td class="sale__table-data"><b><?=lang('sale_min_purchase')?></b></td>
                  <td class="sale__table-data sale__table-data--right">TBA</td>
                </tr>
              </table>
            </div>
            <div class="sale__allocation">
              <div class="sale__graph sale__graph--token">
                <h3 class="sale__graph-title">
                  <?=lang('sale_allocation')?>
                </h3>
                <div class="sale__graph-wrap">
                  <div class="sale__circle sale__circle--token">
                  </div>
                  <ul class="sale__list">
                    <li class="sale__list-item sale__list-item--first">
                      <?=lang('sale_for_sale')?>
                    </li>
                    <li class="sale__list-item sale__list-item--second">
                      <?=lang('sale_for_team')?>
                    </li>
                    <li class="sale__list-item sale__list-item--third">
                      <?=lang('sale_for_partners')?>
                    </li>
                    <li class="sale__list-item sale__list-item--fourth">
                      <?=lang('sale_for_bounty')?>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="sale__graph sale__graph--proceed">
                <h3 class="sale__graph-title">
                  <?=lang('sale_proceed')?>
                </h3>
                <div class="sale__graph-wrap">
                  <div class="sale__circle sale__circle--proceed">
                  </div>
                  <ul class="sale__list">
                    <li class="sale__list-item sale__list-item--first">
                      <?=lang('sale_winnings')?>
                    </li>
                    <li class="sale__list-item sale__list-item--second">
                      <?=lang('sale_technical')?>
                    </li>
                    <li class="sale__list-item sale__list-item--third">
                      <?=lang('sale_promotion')?>
                    </li>
                    <li class="sale__list-item sale__list-item--fourth">
                      <?=lang('sale_comission')?>
                    </li>
                    <li class="sale__list-item sale__list-item--fifth">
                      <?=lang('sale_admin')?>
                    </li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="sale__buttons-group">
            <a href="files/Whitepaper_<?=$language->currentLang !== 'ru' ? $language->currentLang  : 'en'?>.pdf" target="_blank" class="sale__button">
              <?=lang('sale_white_paper')?>
            </a>
            <a href="#" target="_blank" class="sale__button">
              <?=lang('sale_smart_one')?>
            </a>
            <a href="#" target="_blank" class="sale__button">
              <?=lang('sale_smart_two')?>
            </a>
          </div>
        </section>
        <section class="challenge" id="challenge">
          <h2 class="challenge__title">
            <?=lang('challenge_title')?>
          </h2>
          <p class="challenge__text">
            <?=lang('challenge_issues')?>
          </p>
          <ul class="challenge__list">
            <li class="challenge__item">
              <div class="challenge__img-wrap">
                <img class="lazy" src="" data-src="images/challenge-1.png" alt="Lack Fairness Transparency">
                <noscript>
                  <img src="images/challenge-1.png" alt="Lack Fairness Transparency">
                </noscript>
              </div>
              <div class="challenge__desc">
                <h4 class="challenge__item-title">
                  <?=lang('challenge_lack_transparency')?>
                </h4>
                <p class="challenge__item-text">
                  <?=lang('challenge_lack_transparency_text')?>
                </p>
              </div>
            </li>
            <li class="challenge__item">
              <div class="challenge__img-wrap">
                <img class="lazy" src="" data-src="images/challenge-2.png" alt="Lack of Innovation">
                <noscript>
                  <img src="images/challenge-2.png" alt="Lack of Innovation">
                </noscript>
              </div>
              <div class="challenge__desc">
                <h4 class="challenge__item-title">
                  <?=lang('challenge_lack_innovation')?>
                </h4>
                <p class="challenge__item-text">
                  <?=lang('challenge_lack_innovation_text')?>
                </p>
              </div>
            </li>
            <li class="challenge__item">
              <div class="challenge__img-wrap">
                <img class="lazy" src="" data-src="images/challenge-3.png" alt="Regulatory Setbacks">
                <noscript>
                  <img src="images/challenge-3.png" alt="Regulatory Setbacks">
                </noscript>
              </div>
              <div class="challenge__desc">
                <h4 class="challenge__item-title">
                  <?=lang('challenge_setbacks')?>
                </h4>
                <p class="challenge__item-text">
                  <?=lang('challenge_setbacks_text')?>
                </p>
              </div>
            </li>
            <li class="challenge__item">
              <div class="challenge__img-wrap">
                <img class="lazy" src="" data-src="images/challenge-4.png" alt="Long Payouts">
                <noscript>
                  <img src="images/challenge-4.png" alt="Long Payouts">
                </noscript>
              </div>
              <div class="challenge__desc">
                <h4 class="challenge__item-title">
                  <?=lang('challenge_payouts')?>
                </h4>
                <p class="challenge__item-text">
                  <?=lang('challenge_payouts_text')?>
                </p>
              </div>
            </li>
            <li class="challenge__item">
              <div class="challenge__img-wrap">
                <img class="lazy" src="" data-src="images/challenge-5.png" alt="Stunted Growth">
                <noscript>
                  <img src="images/challenge-5.png" alt="Stunted Growth">
                </noscript>
              </div>
              <div class="challenge__desc">
                <h4 class="challenge__item-title">
                  <?=lang('challenge_growth')?>
                </h4>
                <p class="challenge__item-text">
                  <?=lang('challenge_growth_text')?>
                </p>
              </div>
            </li>
          </ul>
        </section>
        <section class="solution" id="solution">
          <div class="solution__wrapper">
            <h2 class="solution__title">
              <?=lang('solution_title')?>
            </h2>
            <h4 class="solution__subtitle">
              <?=lang('solution_integrating')?>
            </h4>
            <p class="solution__text">
              <?=lang('solution_advantages_one')?>
            </p>
            <p class="solution__text">
              <?=lang('solution_advantages_two')?>
            </p>
          </div>
          <div class="solution__video-wrapper">
            <div class="solution__video solution__js-video">
              <!-- YouTube iframe. -->
              <!-- note the iframe src is empty by default, the url is in the data-src="" argument -->
              <!-- also note the arguments on the url, to autoplay video, remove youtube adverts/dodgy links to other videos, and set the interface language -->
              <iframe class="solution__iframe solution__js-iframe" src=""
                      frameborder="0" allowTransparency="true" allowfullscreen
                      data-src="https://www.youtube.com/embed/nxCJ80f2_sU">

              </iframe>
              <!-- the poster frame - in the form of a button to make it keyboard accessible -->
              <button class="solution__iframe-btn solution__js-iframe-btn">Play video</button>
            </div>
          </div>
          <a class="solution__button" href="files/Features.pdf" target="_blank">
            <?=lang('solution_features')?>
          </a>
        </section>
        <section class="how" id="how">
          <div class="how__img-wrap">
            <picture>
              <source media="(max-width: 991px)"
                      srcset="images/phone-mobile.webp" type="image/webp">
              <source media="(max-width: 991px)"
                      srcset="images/phone-mobile.png">
              <source media="(max-width: 1366px)"
                      srcset="images/phone-tablet.webp" type="image/webp">
              <source media="(max-width: 1366px)"
                      srcset="images/phone-tablet.png">
              <img src="images/phone-desktop.png" alt="How it works">
            </picture>
          </div>
          <div class="how__desc">
            <h2 class="how__title">
              <?=lang('how_title')?>
            </h2>
            <ul class="how__list">
              <li class="how__item">
                <h3 class="how__subtitle">
                  <?=lang('how_mobile')?>
                </h3>
                <p class="how__text">
                  <?=lang('how_mobile_text')?>
                </p>
              </li>
              <li class="how__item">
                <h3 class="how__subtitle"><?=lang('how_payout')?></h3>
                <p class="how__text">
                  <?=lang('how_payout_text')?>
                </p>
              </li>
              <li class="how__item">
                <h3 class="how__subtitle"><?=lang('how_bounty')?></h3>
                <p class="how__text">
                  <?=lang('how_bounty_text')?>
                </p>
              </li>
            </ul>
            <a class="how__button" href="https://bitcointalk.org/index.php?topic=5053501.new#new" target="_blank">
              <?=lang('how_rewards')?>
            </a>
          </div>
        </section>
        <section class="roadmap" id="roadmap">
          <h2 class="roadmap__title">
            <?=lang('roadmap_title')?>
          </h2>
          <div class="roadmap__img-wrap">
            <img class="lazy" src="" data-src="images/roadmap-bg.png" alt="Roadmap">
            <noscript>
              <img src="images/roadmap-bg.png" alt="Roadmap">
            </noscript>
          </div>
          <div class="roadmap__container">
            <ul class="roadmap__list roadmap__list--start">
              <li class="roadmap__item roadmap__item--medium">
                <h4 class="roadmap__subtitle">
                  <?=lang('roadmap_one')?>
                </h4>
                <ul class="roadmap__sublist">
                  <li class="roadmap__sublist-item">
                    <?=lang('roadmap_research')?>
                  </li>
                  <li class="roadmap__sublist-item">
                    <?=lang('roadmap_bus_case')?>
                  </li>
                </ul>
              </li>
              <li class="roadmap__item roadmap__item--big">
                <h4 class="roadmap__subtitle">
                  <?=lang('roadmap_two')?>
                </h4>
                <ul class="roadmap__sublist">
                  <li class="roadmap__sublist-item">
                    <?=lang('roadmap_team')?>
                  </li>
                  <li class="roadmap__sublist-item">
                    <?=lang('roadmap_preparation')?>
                  </li>
                </ul>
              </li>
              <li class="roadmap__item roadmap__item--big">
                <h4 class="roadmap__subtitle">
                  <?=lang('roadmap_three')?>
                </h4>
                <ul class="roadmap__sublist">
                  <li class="roadmap__sublist-item">
                    <?=lang('roadmap_private')?>
                  </li>
                </ul>
              </li>
              <li class="roadmap__item roadmap__item--medium">
                <h4 class="roadmap__subtitle">
                  <?=lang('roadmap_four')?>
                </h4>
                <ul class="roadmap__sublist">
                  <li class="roadmap__sublist-item">
                    <?=lang('roadmap_30')?>
                  </li>
                  <li class="roadmap__sublist-item">
                    <?=lang('roadmap_start_dev')?>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="roadmap__list roadmap__list--center">
              <li class="roadmap__item">
                <h4 class="roadmap__subtitle">
                  <?=lang('roadmap_five')?>
                </h4>
                <ul class="roadmap__sublist">
                  <li class="roadmap__sublist-item">
                    <?=lang('roadmap_25')?>
                  </li>
                </ul>
              </li>
              <li class="roadmap__item">
                <h4 class="roadmap__subtitle">
                  <?=lang('roadmap_six')?>
                </h4>
                <ul class="roadmap__sublist">
                  <li class="roadmap__sublist-item">
                    <?=lang('roadmap_20')?>
                  </li>
                </ul>
              </li>
              <li class="roadmap__item">
                <h4 class="roadmap__subtitle">
                  <?=lang('roadmap_seven')?>
                </h4>
                <ul class="roadmap__sublist">
                  <li class="roadmap__sublist-item">
                    <?=lang('roadmap_15')?>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="roadmap__list roadmap__list--end">
              <li class="roadmap__item roadmap__item--little">
                <h4 class="roadmap__subtitle">
                  <?=lang('roadmap_eight')?>
                </h4>
                <ul class="roadmap__sublist">
                  <li class="roadmap__sublist-item">
                    <?=lang('roadmap_10')?>
                  </li>
                </ul>
              </li>
              <li class="roadmap__item roadmap__item--big">
                <h4 class="roadmap__subtitle">
                  <?=lang('roadmap_nine')?>
                </h4>
                <ul class="roadmap__sublist">
                  <li class="roadmap__sublist-item">
                    <?=lang('roadmap_5')?>
                  </li>
                  <li class="roadmap__sublist-item">
                    <?=lang('roadmap_site')?>
                  </li>
                  <li class="roadmap__sublist-item">
                    <?=lang('roadmap_draws')?>
                  </li>
                </ul>
              </li>
              <li class="roadmap__item roadmap__item--medium">
                <h4 class="roadmap__subtitle">
                  <?=lang('roadmap_ten')?>
                </h4>
                <ul class="roadmap__sublist">
                  <li class="roadmap__sublist-item">
                    <?=lang('roadmap_crowdsale')?>
                  </li>
                </ul>
              </li>
              <li class="roadmap__item roadmap__item--big">
                <h4 class="roadmap__subtitle">
                  <?=lang('roadmap_eleven')?>
                </h4>
                <ul class="roadmap__sublist">
                  <li class="roadmap__sublist-item">
                    <?=lang('roadmap_exchange')?>
                  </li>
                  <li class="roadmap__sublist-item">
                    <?=lang('roadmap_release')?>
                  </li>
                  <li class="roadmap__sublist-item">
                    <?=lang('roadmap_more_draws')?>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </section>
        <section class="team" id="team">
          <h2 class="team__title">
            Mitoshi ICO
            <span><?=lang('team_title')?></span>
          </h2>
          <div class="team__block">
            <h4 class="team__subtitle">
              <?=lang('team_executive')?>
            </h4>
            <ul class="team__list team__list--executive">
              <li class="team__list-item team__list-item--executive">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/tc-picardo-8917a8165/" target="_blank">
                  <picture>
                    <source class="lazy" srcset="" data-srcset="images/team-1.webp" type="image/webp">
                    <source class="lazy" srcset="" data-srcset="images/team-1.png" type="image/png">
                    <img class="lazy" src="" data-src="images/team-1.png" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/team-1.webp" type="image/webp">
                      <source srcset="images/team-1.png" type="image/png">
                      <img src="images/team-1.png" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name"><?=lang('team_picardo')?></p>
                <p class="team__member-occup"><?=lang('team_ceo')?></p>
              </li>
              <li class="team__list-item team__list-item--executive">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/normanvelasco/" target="_blank">
                  <picture>
                    <source class="lazy" srcset="" data-srcset="images/team-2.webp" type="image/webp">
                    <source class="lazy" srcset="" data-srcset="images/team-2.png" type="image/png">
                    <img class="lazy" src="" data-src="images/team-2.png" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/team-2.webp" type="image/webp">
                      <source srcset="images/team-2.png" type="image/png">
                      <img src="images/team-2.png" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name"><?=lang('team_velasco')?></p>
                <p class="team__member-occup"><?=lang('team_coo')?></p>
              </li>
              <li class="team__list-item team__list-item--executive">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/rob-natthavong-jumchai-1a4067172/" target="_blank">
                  <picture>
                    <source class="lazy" srcset="" data-srcset="images/team-5.webp" type="image/webp">
                    <source class="lazy" srcset="" data-srcset="images/team-5.png" type="image/png">
                    <img class="lazy" src="" data-src="images/team-5.png" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/team-5.webp" type="image/webp">
                      <source srcset="images/team-5.png" type="image/png">
                      <img src="images/team-5.png" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name"><?=lang('team_jumchai')?></p>
                <p class="team__member-occup">
                  <?=lang('team_chief')?>
                </p>
              </li>
              <li class="team__list-item team__list-item--executive">
                <a class="team__img-wrap" href="#" target="_blank">
                  <picture>
                    <source class="lazy" srcset="" data-srcset="images/team-6.webp" type="image/webp">
                    <source class="lazy" srcset="" data-srcset="images/team-6.png" type="image/png">
                    <img class="lazy" src="" data-src="images/team-6.png" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/team-6.webp" type="image/webp">
                      <source srcset="images/team-6.png" type="image/png">
                      <img src="images/team-6.png" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name"><?=lang('team_green')?></p>
                <p class="team__member-occup">
                  <?=lang('team_bus_dev')?>
                </p>
              </li>
              <li class="team__list-item team__list-item--management">
                <a class="team__img-wrap" href="#" target="_blank">
                  <picture>
                    <source class="lazy" srcset="" data-srcset="images/team-7.webp" type="image/webp">
                    <source class="lazy" srcset="" data-srcset="images/team-7.jpg" type="image/jpeg">
                    <img class="lazy" src="" data-src="images/team-7.jpg" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/team-7.webp" type="image/webp">
                      <source srcset="images/team-7.jpg" type="image/jpeg">
                      <img src="images/team-7.jpg" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name"><?=lang('team_peralta')?></p>
                <p class="team__member-occup">
                  <?=lang('team_finance')?>
                </p>
              </li>
            </ul>
          </div>
          <div class="team__block">
            <h4 class="team__subtitle">
              <?=lang('team_dev')?>
            </h4>
            <ul class="team__list team__list--development">
              <li class="team__list-item team__list-item--development">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/sergey-provalinski-0b8204162/" target="_blank">
                  <picture>
                    <source class="lazy" srcset="" data-srcset="images/team-9.webp" type="image/webp">
                    <source class="lazy" srcset="" data-srcset="images/team-9.jpg" type="image/jpeg">
                    <img class="lazy" src="" data-src="images/team-9.jpg" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/team-9.webp" type="image/webp">
                      <source srcset="images/team-9.jpg" type="image/jpeg">
                      <img src="images/team-9.jpg" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name"><?=lang('team_proval')?></p>
                <p class="team__member-occup"><?=lang('team_front')?></p>
              </li>
              <li class="team__list-item team__list-item--development">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/%D0%B0%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80-%D0%BF%D0%BE%D0%B4%D1%80%D0%B5%D0%B7%D0%BE%D0%B2-b3328a173/" target="_blank">
                  <picture>
                    <source class="lazy" scrset="" data-srcset="images/team-10.webp" type="image/webp">
                    <source class="lazy" scrset="" data-srcset="images/team-10.png" type="image/png">
                    <img class="lazy" scr="" data-src="images/team-10.png" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/team-10.webp" type="image/webp">
                      <source srcset="images/team-10.png" type="image/png">
                      <img src="images/team-10.png" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name"><?=lang('team_podrez')?></p>
                <p class="team__member-occup"><?=lang('team_back')?></p>
              </li>
              <li class="team__list-item team__list-item--development">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/blockchainwork/" target="_blank">
                  <picture>
                    <source class="lazy" scrset="" data-srcset="images/team-11.webp" type="image/webp">
                    <source class="lazy" scrset="" data-srcset="images/team-11.png" type="image/png">
                    <img class="lazy" scr="" data-src="images/team-11.png" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/team-11.webp" type="image/webp">
                      <source srcset="images/team-11.png" type="image/png">
                      <img src="images/team-11.png" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name"><?=lang('team_kalin')?></p>
                <p class="team__member-occup"><?=lang('team_protocol')?></p>
              </li>
              <li class="team__list-item team__list-item--development">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/julia-drobnitsa/" target="_blank">
                  <picture>
                    <source class="lazy" scrset="" data-srcset="images/team-12.webp" type="image/webp">
                    <source class="lazy" scrset="" data-srcset="images/team-12.png" type="image/png">
                    <img class="lazy" scr="" data-src="images/team-12.png" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/team-12.webp" type="image/webp">
                      <source srcset="images/team-12.png" type="image/png">
                      <img src="images/team-12.png" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name"><?=lang('team_drobnitsa')?></p>
                <p class="team__member-occup"><?=lang('team_ux')?></p>
              </li>
            </ul>
          </div>
          <div class="team__block">
            <h4 class="team__subtitle">
              <?=lang('team_pr')?>
            </h4>
            <ul class="team__list team__list--pr">
              <li class="team__list-item team__list-item--pr">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/jerickalcancia/" target="_blank">
                  <picture>
                    <source class="lazy" srcset="" data-srcset="images/team-14.webp" type="image/webp">
                    <source class="lazy" srcset="" data-srcset="images/team-14.png" type="image/png">
                    <img class="lazy" src="" data-src="images/team-14.png" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/team-14.webp" type="image/webp">
                      <source srcset="images/team-14.png" type="image/png">
                      <img src="images/team-14.png" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name"><?=lang('team_alcan')?></p>
                <p class="team__member-occup"><?=lang('team_motion')?></p>
              </li>
              <li class="team__list-item team__list-item--pr">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/rmcccos/" target="_blank">
                  <picture>
                    <source class="lazy" srcset="" data-srcset="images/team-16.webp" type="image/webp">
                    <source class="lazy" srcset="" data-srcset="images/team-16.png" type="image/png">
                    <img class="lazy" src="" data-src="images/team-16.png" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/team-16.webp" type="image/webp">
                      <source srcset="images/team-16.png" type="image/png">
                      <img src="images/team-16.png" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name"><?=lang('team_rowena')?></p>
                <p class="team__member-occup"><?=lang('team_copy')?></p>
              </li>
            </ul>
          </div>
          <div class="team__block">
            <h4 class="team__subtitle">
              <?=lang('team_management')?>
            </h4>
            <ul class="team__list team__list--media">
              <li class="team__list-item team__list-item--media">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/kashif-syed-b09003139/" target="_blank">
                  <picture>
                    <source class="lazy" srcset="" data-srcset="images/team-17.webp" type="image/webp">
                    <source class="lazy" srcset="" data-srcset="images/team-17.png" type="image/png">
                    <img class="lazy" src="" data-src="images/team-17.png" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/team-17.webp" type="image/webp">
                      <source srcset="images/team-17.png" type="image/png">
                      <img src="images/team-17.png" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name"><?=lang('team_syed')?></p>
                <p class="team__member-occup"><?=lang('team_social')?></p>
              </li>
              <li class="team__list-item team__list-item--media">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/raizalyn-razo/" target="_blank">
                  <picture>
                    <source class="lazy" srcset="" data-srcset="images/team-18.webp" type="image/webp">
                    <source class="lazy" srcset="" data-srcset="images/team-18.png" type="image/png">
                    <img class="lazy" src="" data-src="images/team-18.png" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/team-18.webp" type="image/webp">
                      <source srcset="images/team-18.png" type="image/png">
                      <img src="images/team-18.png" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name"><?=lang('team_razo')?></p>
                <p class="team__member-occup"><?=lang('team_community')?></p>
              </li>
              <li class="team__list-item team__list-item--media">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/celeste-paras-79947b6a/" target="_blank">
                  <picture>
                    <source class="lazy" srcset="" data-srcset="images/team-19.webp" type="image/webp">
                    <source class="lazy" srcset="" data-srcset="images/team-19.png" type="image/png">
                    <img class="lazy" src="" data-src="images/team-19.png" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/team-19.webp" type="image/webp">
                      <source srcset="images/team-19.png" type="image/png">
                      <img src="images/team-19.png" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name"><?=lang('team_paras')?></p>
                <p class="team__member-occup"><?=lang('team_community_en')?></p>
              </li>
              <li class="team__list-item team__list-item--media">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/chen-chee-fah-783110142/" target="_blank">
                  <picture>
                    <source class="lazy" srcset="" data-srcset="images/team-20.webp" type="image/webp">
                    <source class="lazy" srcset="" data-srcset="images/team-20.png" type="image/png">
                    <img class="lazy" src="" data-src="images/team-20.png" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/team-20.webp" type="image/webp">
                      <source srcset="images/team-20.png" type="image/png">
                      <img src="images/team-20.png" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name"><?=lang('team_fah')?></p>
                <p class="team__member-occup"><?=lang('team_community_mandarin')?></p>
              </li>
              <li class="team__list-item team__list-item--media">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/awele-kimberly-ajiduah-8981a075/" target="_blank">
                  <picture>
                    <source class="lazy" srcset="" data-srcset="images/team-22.webp" type="image/webp">
                    <source class="lazy" srcset="" data-srcset="images/team-22.png" type="image/png">
                    <img class="lazy" src="" data-src="images/team-22.png" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/team-22.webp" type="image/webp">
                      <source srcset="images/team-22.png" type="image/png">
                      <img src="images/team-22.png" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name"><?=lang('team_awele')?></p>
                <p class="team__member-occup"><?=lang('team_content')?></p>
              </li>
              <li class="team__list-item team__list-item--media">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/hazel-olivar-58ba23133/" target="_blank">
                  <picture>
                    <source class="lazy" srcset="" data-srcset="images/team-24.webp" type="image/webp">
                    <source class="lazy" srcset="" data-srcset="images/team-24.png" type="image/png">
                    <img class="lazy" src="" data-src="images/team-24.png" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/team-24.webp" type="image/webp">
                      <source srcset="images/team-24.png" type="image/png">
                      <img src="images/team-24.png" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name"><?=lang('team_hazel')?></p>
                <p class="team__member-occup"><?=lang('team_community')?></p>
              </li>
              <li class="team__list-item team__list-item--media">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/philip-smart-43898b169/" target="_blank">
                  <picture>
                    <source class="lazy" srcset="" data-srcset="images/team-23.webp" type="image/webp">
                    <source class="lazy" srcset="" data-srcset="images/team-23.png" type="image/png">
                    <img class="lazy" src="" data-src="images/team-23.png" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/team-23.webp" type="image/webp">
                      <source srcset="images/team-23.png" type="image/png">
                      <img src="images/team-23.png" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name"><?=lang('team_kola')?></p>
                <p class="team__member-occup"><?=lang('team_community')?></p>
              </li>
              <li class="team__list-item team__list-item--media">
                <a class="team__img-wrap" href=https://www.linkedin.com/in/kris-manalo-793173175/" target="_blank">
                  <picture>
                    <source class="lazy" srcset="" data-srcset="images/team-27.webp" type="image/webp">
                    <source class="lazy" srcset="" data-srcset="images/team-27.jpg" type="image/jpeg">
                    <img class="lazy" src="" data-src="images/team-27.jpg" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/team-27.webp" type="image/webp">
                      <source srcset="images/team-27.jpg" type="image/jpeg">
                      <img src="images/team-27.jpg" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name"><?=lang('team_manalo')?></p>
                <p class="team__member-occup"><?=lang('team_community')?></p>
              </li>
              <li class="team__list-item team__list-item--media">
                <a class="team__img-wrap" href=https://www.linkedin.com/in/geneva-padua-b93646b1/" target="_blank">
                  <picture>
                    <source class="lazy" srcset="" data-srcset="images/team-28.webp" type="image/webp">
                    <source class="lazy" srcset="" data-srcset="images/team-28.jpg" type="image/jpeg">
                    <img class="lazy" src="" data-src="images/team-28.jpg" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/team-28.webp" type="image/webp">
                      <source srcset="images/team-28.jpg" type="image/jpeg">
                      <img src="images/team-28.jpg" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name">Geneva Padua</p>
                <p class="team__member-occup"><?=lang('team_community')?></p>
              </li>
            </ul>
          </div>
          <div class="team__block">
            <h4 class="team__subtitle">
              <?=lang('team_advisors')?>
            </h4>
            <ul class="team__list team__list--advisors">
              <li class="team__list-item team__list-item--advisors">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/nikita-melnikov-a71a06b8/" target="_blank">
                  <picture>
                    <source class="lazy" srcset="" data-srcset="images/team-3.webp" type="image/webp">
                    <source class="lazy" srcset="" data-srcset="images/team-3.png" type="image/png">
                    <img class="lazy" src="" data-src="images/team-3.png" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/team-3.webp" type="image/webp">
                      <source srcset="images/team-3.png" type="image/png">
                      <img src="images/team-3.png" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name"><?=lang('team_melnikov')?></p>
                <p class="team__member-occup"><?=lang('team_blockchain')?></p>
              </li>
              <li class="team__list-item team__list-item--advisors">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/kim-zafra-el-jugador-53393037/" target="_blank">
                  <picture>
                    <source class="lazy" src="" data-srcset="images/team-4.webp" type="image/webp">
                    <source class="lazy" src="" data-srcset="images/team-4.png" type="image/png">
                    <img class="lazy" src="" data-src="images/team-4.png" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/team-4.webp" type="image/webp">
                      <source srcset="images/team-4.png" type="image/png">
                      <img src="images/team-4.png" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name"><?=lang('team_zafra')?></p>
                <p class="team__member-occup"><?=lang('team_math')?></p>
              </li>
            </ul>
          </div>
          <div class="team__block">
            <h4 class="team__subtitle">
              <?=lang('team_partners')?>
            </h4>
            <ul class="team__list team__list--partners">
              <li class="team__list-item team__list-item--partners">
                <a class="team__img-wrap team__img-wrap--partners" href="https://loftchain.io/" target="_blank">
                  <picture>
                    <source class="lazy" srcset="" data-srcset="images/partner-1.webp" type="image/webp">
                    <source class="lazy" srcset="" data-srcset="images/partner-1.png" type="image/png">
                    <img class="lazy" src="" data-src="images/partner-1.png" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/partner-1.webp" type="image/webp">
                      <source srcset="images/partner-1.png" type="image/png">
                      <img src="images/partner-1.png" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name">Loftchain</p>
                <p class="team__member-occup"><?=lang('team_tech_partners')?></p>
              </li>
              <li class="team__list-item team__list-item--partners">
                <a class="team__img-wrap team__img-wrap--partners team__img-wrap--partners-shrink" href="https://www.experfy.com/" target="_blank">
                  <picture>
                    <source class="lazy" scrset="" data-srcset="images/partner-3.webp" type="image/webp">
                    <source class="lazy" scr="" data-srcset="images/partner-3.png" type="image/jpeg">
                    <img class="lazy" scr="" data-src="images/partner-3.png" alt="Member of Mithoshi Team">
                  </picture>
                  <noscript>
                    <picture>
                      <source srcset="images/partner-3.webp" type="image/webp">
                      <source srcset="images/partner-3.png" type="image/jpeg">
                      <img src="images/partner-3.png" alt="Member of Mithoshi Team">
                    </picture>
                  </noscript>
                </a>
                <p class="team__member-name">Experfy</p>
              </li>
            </ul>
          </div>
        </section>
        <section class="contacts" id="contacts">
          <h2 class="contacts__title">
            <span><?=lang('contacts_title')?></span>
          </h2>
          <div class="contacts__group">
            <h4 class="contacts__subtitle"><?=lang('contacts_blog')?></h4>
            <p class="contacts__text"><?=lang('contacts_blog_text')?></p>
            <ul class="contacts__list">
              <li
                class="contacts__list-item contacts__list-item--medium"><a
                href="http://medium.com/@mitoshicrypto" target="_blank">
                  <i class="fab fa-medium-m"></i>
                </a></li>
              <li
                class="contacts__list-item contacts__list-item--reddit"><a
                href="http://www.reddit.com/user/mitoshicrypto" target="_blank">
                  <i class="fab fa-reddit-alien"></i>
                </a></li>
              <li
                class="contacts__list-item contacts__list-item--github">
                <a href="http://github.com/loftchain/smart-contracts/blob/master/MTSH.sol" target="_blank">
                  <i class="fab fa-github"></i>
                </a></li>
              <li
                class="contacts__list-item contacts__list-item--bitcoin"><a
                href="http://bitcointalk.org/index.php?topic=5045268.new#new" target="_blank">
<!--                  <i class="fab fa-bitcoin"></i>-->
                </a></li>
              <li
                class="contacts__list-item contacts__list-item--steemit">
                <a href="https://steemit.com/@mitoshicrypto" target="_blank">
                </a></li>
            </ul>
          </div>
          <div class="contacts__group">
            <h4 class="contacts__subtitle"><?=lang('contacts_faqs')?></h4>
            <p class="contacts__text">
              <?=lang('contacts_faqs_text')?>
            </p>
            <a class="contacts__button" href="files/FAQS.pdf" target="_blank">
              <?=lang('contacts_faqs_view')?>
            </a>
          </div>
          <div class="contacts__group">
            <p class="contacts__text">
              <?=lang('contacts_mitoshi')?>
            </p>
          </div>
        </section>
        </div>
      </div>
    </main>
    <footer class="footer">
      <div class="footer__wrapper">
        <ul class="footer__list">
          <li class="footer__item footer__item--telegram"><a href="https://t.me/Mitoshi_Channel" target="_blank">
              <i class="fab fa-telegram-plane"></i>
            </a></li>
          <li class="footer__item footer__item--whatsapp"><a href="https://chat.whatsapp.com/invite/L0KiJjxsGzwIQRtU6Cq1Yu" target="_blank">
              <i class="fab fa-whatsapp"></i>
            </a></li>
          <li class="footer__item footer__item--mail"><a href="mailto:luckyyou@mitoshiworldwide.com" target="_blank">
              <i class="fas fa-envelope"></i>
            </a></li>
          <li class="footer__item footer__item--facebook"><a href="http://m.facebook.com/MitoshiCryptoLotto/" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a></li>
          <li class="footer__item footer__item--lkdin"><a href="http://www.linkedin.com/company/mitoshi/" target="_blank">
              <i class="fab fa-linkedin-in"></i>
            </a></li>
          <li class="footer__item footer__item--twitter"><a href="http://mobile.twitter.com/mitoshicrypto" target="_blank">
              <i class="fab fa-twitter"></i>
            </a></li>
          <li class="footer__item footer__item--youtube"><a href="https://www.youtube.com/channel/UCG2rcEGPN6Q_AQgSN7s_ADA" target="_blank">
              <i class="fab fa-youtube"></i>
            </a></li>
        </ul>
        <p class="footer__group">
          <span>Mitoshi Worldwide Holdings Ltd. @ 2018</span>
          <span>|</span><br>
          <span href="#"><?=lang('footer_rights')?></span>
        </p>
        <p class="footer__group">
          <a href="privacy_policy/" target="_blank">
            <?=lang('footer_policy')?>
          </a>
          <span>|</span><br>
          <a href="terms_and_conditions/" target="_blank"><?=lang('footer_terms')?></a>
          <span>|</span><br>
          <a href="disclaimer/" target="_blank"><?=lang('footer_disclamer')?></a>
        </p>
      </div>
    </footer>
	</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/main.js?v=3"></script>
  <script>
    const socket = new WebSocket('wss://api2-backend.loftchain.io/ws/');
    socket.onopen = function () {
      console.log('Connected');
      socket.send(JSON.stringify({
        event: 'mitoshi',
        data: 'mitoshi',
      }));

      socket.onmessage = function (data) {
        const sumAmount = JSON.parse(data.data);
        const aboutSection = document.body.querySelector('.about');
        const sum = aboutSection.querySelector('.about__sale-hardcap');
        const btc = aboutSection.querySelector('.about__sale-btc');
        const eth = aboutSection.querySelector('.about__sale-eth');
        sum.textContent = (sumAmount.btcUsd + sumAmount.ethUsd).toFixed(2);
        btc.textContent = sumAmount.btc.toFixed(4);
        eth.textContent = sumAmount.eth.toFixed(4);
      }};

  </script>
  <script>
  // poster frame click event
  $(document).on('click','.solution__js-iframe-btn',function(ev) {
    ev.preventDefault();
    var $poster = $(this);
    var $wrapper = $poster.closest('.solution__js-video');
    videoPlay($wrapper);
  });

  // play the targeted video (and hide the poster frame)
  function videoPlay($wrapper) {
    var $iframe = $wrapper.find('.solution__js-iframe');
    var src = $iframe.data('src');
    // hide poster
    $wrapper.addClass('videoWrapperActive');
    // add iframe src in, starting the video
    $iframe.attr('src',src);
  }

  // stop the targeted/all videos (and re-instate the poster frames)
  function videoStop($wrapper) {
    // if we're stopping all videos on page
    if (!$wrapper) {
      var $wrapper = $('.solution__js-video');
      var $iframe = $('.solution__js-iframe');
      // if we're stopping a particular video
    } else {
      var $iframe = $wrapper.find('solution__js-iframe');
    }
    // reveal poster
    $wrapper.removeClass('videoWrapperActive');
    // remove youtube link, stopping the video from playing in the background
    $iframe.attr('src','');
  }
</script>
  <script>
  var lazy = [];

  function setLazy(){
    lazy = document.getElementsByClassName('lazy');
  }

  function lazyLoad(){

    for(var i=0; i<lazy.length; i++){
      if(isInViewport(lazy[i])){
        if (lazy[i].getAttribute('data-src')){
          if (lazy[i].getAttribute('srcset')) {
            lazy[i].srcset =
              lazy[i].getAttribute('data-srcset');

            // remove the attribute
            lazy[i].removeAttribute('data-src');
          } else {
            lazy[i].src =
              lazy[i].getAttribute('data-src');

            // remove the attribute
            lazy[i].removeAttribute('data-src');
          }
        }
      }
    }

    cleanLazy();
  }

  function cleanLazy(){
    lazy =
      Array.prototype.filter.call(
        lazy,
        function(l){
          return l.getAttribute('data-src');
        }
      );
  }

  function registerListener(event, func) {
    if (window.addEventListener) {
      window.addEventListener(event, func)
    } else {
      window.attachEvent('on' + event, func)
    }
  }

  function isInViewport(el){
    var rect = el.getBoundingClientRect();

    return (
      rect.bottom >= 0 &&
      rect.right >= 0 &&

      rect.top <= (
        window.innerHeight ||
        document.documentElement.clientHeight) &&

      rect.left <= (
        window.innerWidth ||
        document.documentElement.clientWidth)
    );
  }

  registerListener('load', setLazy);
  registerListener('load', lazyLoad);
  registerListener('scroll', lazyLoad);
</script>
</body>
</html>
