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
	<link href="css/style.min.css?v=7" rel="stylesheet">
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
            <img src="images/logo.png" width="60" height="60" alt="Mitoshi CryptoLotto ICO" title="Mitoshi CryptoLotto ICO">
          </picture>
        </a>
        <button class="header__toggle"></button>
        <div class="dropdown header__language">
          <button class="header__button">Lang</button>
          <div class="dropdown-content">
            <a>Chinese</a>
            <a href="?lang=en">English</a>
            <a href="?lang=ru">Russian</a>
            <a>Spanish</a>
            <a>Korean</a>
            <a>Japanese</a>
          </div>
        </div>
        <div class="header__group">
          <nav class="main-nav">
            <ul class="main-nav__list">
              <li class="main-nav__item">
                <a class="main-nav__link main-nav__link--active" href="#home"><?=lang('navbar_home')?></a>
              </li>
              <li class="main-nav__item">
                <a class="main-nav__link" href="#about"><?=lang('navbar_about')?></a>
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
                <a class="main-nav__link" href="#roadmap">Roadmap</a>
              </li>
              <li class="main-nav__item">
                <a class="main-nav__link" href="#team">Team</a>
              </li>
              <li class="main-nav__item">
                <a class="main-nav__link" href="#contacts">Connect with Us</a>
              </li>
            </ul>
          </nav>
          <div class="header__buttons-group">
            <a class="header__button" href="https://investor.mitoshi.io/register" target="_blank">SIGN UP</a>
            <a class="header__button" href="https://investor.mitoshi.io/login" target="_blank">LOGIN</a>
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
                <b>Spreading the joy of winning, one jackpot prize at a time!</b>
              </p>
              <p class="mitoshi__text">
                Be involved in the BlockChain Revolution!
              </p>
              <p class="mitoshi__text">
                We are taking Mitoshi to the forefront of lottery by leveraging on the power of smart contracts on a blockchain platform. By making use of smart contracts, we will build the future of online lottery that is globally accessible in a fair, transparent and secure environment. So you can have the confidence to bet on a winnable draw without compromise.
              </p>
              <p class="mitoshi__text">
                When you play Mitoshi, you are already a winner.
              </p>
            </div>
            <div class="mitoshi__button-group">
              <a class="mitoshi__button mitoshi__button--transparent" href="files/Fold_Brochure.pdf" target="_blank">Download Brochure</a>
              <a class="mitoshi__button mitoshi__button--gold mitoshi__button--right" href="https://t.me/Mitoshi_Crypto" target="_blank">Join Community</a>
            </div>
          </div>
        </section>
        <section class="about" id="about">
          <ul class="about__rating-list">
            <li class="about__rating-item">
              <a href="https://icobench.com/ico/mitoshi" class="about__rating-link">
                <dl>
                  <dt>
                    <img src="images/rating/ico-bench.png" alt="ICO-Bench">
                  </dt>
                  <dd>
                    <img src="images/rating/rated-star-40.png" alt="Rating">
                    <p>3.9</p>
                  </dd>
                </dl>
              </a>
            </li>
            <li class="about__rating-item">
              <a href="https://icoholder.com/en/mitoshi-27603" class="about__rating-link">
                <dl>
                  <dt>
                    <img src="images/rating/ico-holder.svg" alt="ICO-Holder">
                  </dt>
                  <dd>
                    <img src="images/rating/rated-star-48.png" alt="Rating">
                    <p>4.8</p>
                  </dd>
                </dl>
              </a>
            </li>
            <li class="about__rating-item">
              <a href="https://ico.coincheckup.com/mitoshi/" class="about__rating-link">
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
              <a href="http://toptokensales.com/?s=Mitoshi" class="about__rating-link">
                <dl>
                  <dt>
                    <img src="images/rating/top-token-sales.svg" alt="TopTokenSale">
                  </dt>
                  <dd>
                    <img src="images/rating/rated-star-30.png" alt="Rating">
                    <p>3,0</p>
                  </dd>
                </dl>
              </a>
            </li>
            <li class="about__rating-item">
              <a href="https://icomarks.com/search?q=Mitoshi" class="about__rating-link">
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
            About Mitoshi CryptoLotto
          </h2>
          <div class="about__group">
            <div class="about__video-wrap">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/nxCJ80f2_sU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="about__desc">
              <p class="about__text about__text--strong">
                <b>Our vision</b>
              </p>
              <p class="about__text">
                Mitoshi is the next generation of online gaming and cryptolotteries powered by the blockchain. Our vision is to bring forth a completely fair, secure and transparent cryptolottery experience that is readily accessible to the global market. Envisioned as a truly international cryptolottery play – it will offer draws that cover the geographies of Asia, North America and Europe. Mitoshi crypolotto tokens can be purchased using fiat and crypto currencies.
              </p>
              <p class="about__text about__text--strong">
                <b>A lottery built on smart contracts</b>
              </p>
              <p class="about__text">
                Mitoshi will utilize the blockchain platform and with Ethereum smart contracts for collecting, distributing funds as well as in paying lottery sales commissions through our referral program. With smart contracts, neither winning numbers nor lottery tickets could be counterfeited. Mitoshi Cryptolotto will a decentralized community owned by the internet community – thanks to the power of the blockchain.
              </p>
              <p class="about__text about__text--strong">
                <b>Global draws </b>
              </p>
              <p class="about__text">
                Mitoshi will have a widespread lineup of lottery draws. Each draw contains massive payouts for its winners. Mitoshi CryptoLotto will have a global reach, allowing anybody from around the globe to participate by the tap of a finger.
              </p>
              <div class="about__buttons-group">
                <a class="about__button" target="_blank" href="files/Draws.pdf">
                  Learn more about Draws
                </a>
                <a class="about__button" target="_blank" href="https://www.playmitoshi.com">
                  Play Mitoshi
                </a>
              </div>
            </div>
          </div>
        </section>
        <section class="sale" id="sale">
          <h2 class="sale__title">
            Mitoshi Token Sale
          </h2>
          <p class="sale__text">
            Mitoshi tokens are utility (user) tokens and the sales of its tokens are for the future participation of Mitoshi’s lottery draws in a smart contract platform.
          </p>
          <div class="sale__content">
            <div class="sale__table-wrap">
              <table class="sale__table">
                <tr class="sale__table-row">
                  <td class="sale__table-data"><b>Token symbol</b></td>
                  <td class="sale__table-data sale__table-data--right">MTSH</td>
                </tr>
                <tr class="sale__table-row">
                  <td class="sale__table-data"><b>Token sale start</b></td>
                  <td class="sale__table-data sale__table-data--right">27 January 2019</td>
                </tr>
                <tr class="sale__table-row">
                  <td class="sale__table-data"><b>Token sale end</b></td>
                  <td class="sale__table-data sale__table-data--right">25 August 2019</td>
                </tr>
                <tr class="sale__table-row">
                  <td class="sale__table-data"><b>Total amount of tokens</b></td>
                  <td class="sale__table-data sale__table-data--right">1,000,000,000</td>
                </tr>
                <tr class="sale__table-row">
                  <td class="sale__table-data"><b>Total amount to be sold</b></td>
                  <td class="sale__table-data sale__table-data--right">680,000,000 or 68%
                    of total issuance</td>
                </tr>
                <tr class="sale__table-row">
                  <td class="sale__table-data"><b>Total private sale</b></td>
                  <td class="sale__table-data sale__table-data--right">US$20,000,000.00</td>
                </tr>
                <tr class="sale__table-row">
                  <td class="sale__table-data"><b>Total pre sale</b></td>
                  <td class="sale__table-data sale__table-data--right">US$20,000,000.00</td>
                </tr>
                <tr class="sale__table-row">
                  <td class="sale__table-data"><b>Token main sale</b></td>
                  <td class="sale__table-data sale__table-data--right">US$60,000,000.00</td>
                </tr>
                <tr class="sale__table-row">
                  <td class="sale__table-data"><b>Soft cap</b></td>
                  <td class="sale__table-data sale__table-data--right">US$10,000,000.00</td>
                </tr>
                <tr class="sale__table-row">
                  <td class="sale__table-data"><b>Hard cap</b></td>
                  <td class="sale__table-data sale__table-data--right">US$100,000,000.00</td>
                </tr>
                <tr class="sale__table-row">
                  <td
                    class="sale__table-data"><b>Accepted crypto & fiat currencies</b></td>
                  <td class="sale__table-data sale__table-data--right">ETH, BTC & USD</td>
                </tr>
                <tr class="sale__table-row">
                  <td class="sale__table-data"><b>Minimum purchase limit</b></td>
                  <td class="sale__table-data sale__table-data--right">TBA</td>
                </tr>
              </table>
            </div>
            <div class="sale__allocation">
              <div class="sale__graph sale__graph--token">
                <h3 class="sale__graph-title">
                  Token allocation
                </h3>
                <div class="sale__graph-wrap">
                  <div class="sale__circle sale__circle--token">
                  </div>
                  <ul class="sale__list">
                    <li class="sale__list-item sale__list-item--first">
                     68% token sale
                    </li>
                    <li class="sale__list-item sale__list-item--second">
                      15% team
                    </li>
                    <li class="sale__list-item sale__list-item--third">
                      10% advisors and partners
                    </li>
                    <li class="sale__list-item sale__list-item--fourth">
                      7% bounties and airdrops
                    </li>
                  </ul>
                </div>
              </div>
              <div class="sale__graph sale__graph--proceed">
                <h3 class="sale__graph-title">
                  Proceed allocation
                </h3>
                <div class="sale__graph-wrap">
                  <div class="sale__circle sale__circle--proceed">
                  </div>
                  <ul class="sale__list">
                    <li class="sale__list-item sale__list-item--first">
                      50% set-up of winnings & reserve fund
                    </li>
                    <li class="sale__list-item sale__list-item--second">
                      20% technical development
                    </li>
                    <li class="sale__list-item sale__list-item--third">
                      15% promotions and marketing
                    </li>
                    <li class="sale__list-item sale__list-item--fourth">
                      10% sales comission
                    </li>
                    <li class="sale__list-item sale__list-item--fifth">
                      5% admin and global operations
                    </li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="sale__buttons-group">
            <a href="files/Whitepaper.pdf" target="_blank" class="sale__button">Download White Paper</a>
            <a href="#" target="_blank" class="sale__button">Smart Contract Audit 1</a>
            <a href="#" target="_blank" class="sale__button">Smart Contract Audit 2</a>
          </div>
        </section>
        <section class="challenge" id="challenge">
          <h2 class="challenge__title">
            Challenges<br>
            on the Global<br>
            Lotto Industry
          </h2>
          <p class="challenge__text">
            Issues and challenges in industry have not only hurt the industry, but have also hindered its growth.  We look at the more pressing reasons why today’s traditional
            lotteries need to evolve.
          </p>
          <ul class="challenge__list">
            <li class="challenge__item">
              <div class="challenge__img-wrap">
                <img src="images/challenge-1.png" alt="Lack Fairness Transparency">
              </div>
              <div class="challenge__desc">
                <h4 class="challenge__item-title">Lack fairness transparency</h4>
                <p class="challenge__item-text">
                  A recent study went into how exactly a lottery can be rigged, tampered and cheated – arising questions such us the validity and “realness” of the winning ticket; fair allocation of ticket proceeds to the prize pool; is the winning number drawn in a random and secure manner; and does someone really win it and not just go to a handful operators.  A lottery based on smart contracts should address each and one of these concerns.
                </p>
              </div>
            </li>
            <li class="challenge__item">
              <div class="challenge__img-wrap">
                <img src="images/challenge-2.png" alt="Lack of Innovation">
              </div>
              <div class="challenge__desc">
                <h4 class="challenge__item-title">Lack of innovation</h4>
                <p class="challenge__item-text">
                  Traditional Lotteries have not shown any innovation and don’t have much room for variety in game development.  Mitoshi cryptolotto will offer fresh and winnable draws without compromising on fairness and on its entertainment value.
                </p>
              </div>
            </li>
            <li class="challenge__item">
              <div class="challenge__img-wrap">
                <img src="images/challenge-3.png" alt="Regulatory Setbacks">
              </div>
              <div class="challenge__desc">
                <h4 class="challenge__item-title">Regulatory setbacks</h4>
                <p class="challenge__item-text">
                  Traditional lotteries today are hindered with regulations – from territorial limits that prevent audiences from other countries in participating into the big jackpot draws to taxes and extra charges.  Centralized or monopolized operators bring about regulations, to include even state controlled ones.  These regulations hurt the prize money that should be going to the players.
                </p>
              </div>
            </li>
            <li class="challenge__item">
              <div class="challenge__img-wrap">
                <img src="images/challenge-4.png" alt="Long Payouts">
              </div>
              <div class="challenge__desc">
                <h4 class="challenge__item-title">Long payouts</h4>
                <p class="challenge__item-text">
                  Spanning anywhere from weeks to months after the results, traditional lotteries have been notorious to distributing prize winnings extremely late with a lot of verification checks in the identity and the ticket.  This is a major inconvenience to the players, and a practice that shouldn’t be tolerated.
                </p>
              </div>
            </li>
            <li class="challenge__item">
              <div class="challenge__img-wrap">
                <img src="images/challenge-5.png" alt="Stunted Growth">
              </div>
              <div class="challenge__desc">
                <h4 class="challenge__item-title">Stunted growth</h4>
                <p class="challenge__item-text">
                  Expanding markets is a formidable challenge in the industry because of the difficulty in attracting new players or retaining existing ones, which not only makes it likely to be reliant on addiction.  This makes it somewhat reprehensible, but this also makes it more difficult to pursue and implement new sales channels.
                </p>
              </div>
            </li>
          </ul>
        </section>
        <section class="solution" id="solution">
          <div class="solution__wrapper">
            <h2 class="solution__title">Our Solution</h2>
            <h4 class="solution__subtitle">
              Integrating smart contracts on a blockchain platform
            </h4>
            <p class="solution__text">
              Blockchain technology presents several advantages to the lottery industry, making its integration not only immensely beneficial but poses it as a crucial step to further expand the industry. Integrating blockchain technology decentralizes the chances, making the lottery more transparent and more accessible. By making use of Ethereum contracts, Mitoshi will build a lottery that is fair, transparent and secure – and globally accessible to those with an internet and a smartphone.
            </p>
            <p class="solution__text">
              Furthermore, decentralized technology is a way to work around regulatory policies that inhibit the growth of the lotto industry while making its market much more expandable and involved. Mitoshi CryptoLotto will then be accessible anytime, anywhere with the ease of transaction provided through cryptocurrency via blockchain technology.
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
            Mitoshi CryptoLotto Features
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
            <h2 class="how__title">How it Works</h2>
            <ul class="how__list">
              <li class="how__item">
                <h3 class="how__subtitle">Mitoshi mobile application </h3>
                <p class="how__text">
                  The Mitoshi mobile application will be designed to access the mitoshi platform. This app will hold all capabilities to join each draw as well as navigate through other gaming opportunities provided by the Mitoshi platform. The application can be accessed through both IOS and android.
                </p>
              </li>
              <li class="how__item">
                <h3 class="how__subtitle">Payout methods</h3>
                <p class="how__text">
                  Those who want to purchase these lotto tickets can either go to our website or download the app. They can register and an e-wallet will be assigned to them. They either deposit cash or transfer their bitcoin or ethereum assets into the e-wallets. And can purchase Mitoshi play tokens after these assets are credited. Mitoshi lottery can only be purchased through Mitoshi tokens and will be priced at 1 Mitoshi coin per ticket.
                </p>
              </li>
              <li class="how__item">
                <h3 class="how__subtitle">Airdrops, rewards and bounty</h3>
                <p class="how__text">
                  Mitoshi will allocate millions of free tokens for airdrops, rewards and bounty.  Find out more on how you can qualify to own Mitoshi tokens absolutely free.  So you can start winning.
                </p>
              </li>
            </ul>
            <a class="how__button" href="https://bitcointalk.org/index.php?topic=5053501.new#new" target="_blank">
              Rewards & Bounty Terms & Conditions
            </a>
          </div>
        </section>
        <section class="roadmap" id="roadmap">
          <h2 class="roadmap__title">Roadmap</h2>
          <div class="roadmap__img-wrap">
            <img src="images/roadmap-bg.png" alt="Roadmap">
          </div>
          <div class="roadmap__container">
            <ul class="roadmap__list roadmap__list--start">
              <li class="roadmap__item roadmap__item--medium">
                <h4 class="roadmap__subtitle">April to June 2018</h4>
                <ul class="roadmap__sublist">
                  <li class="roadmap__sublist-item">Research</li>
                  <li class="roadmap__sublist-item">Business case formation</li>
                </ul>
              </li>
              <li class="roadmap__item roadmap__item--big">
                <h4 class="roadmap__subtitle">July to September 2018</h4>
                <ul class="roadmap__sublist">
                  <li class="roadmap__sublist-item">Team formation</li>
                  <li class="roadmap__sublist-item">Preparation of sale</li>
                </ul>
              </li>
              <li class="roadmap__item roadmap__item--big">
                <h4 class="roadmap__subtitle">October 2018 <span>to January 2019</span></h4>
                <ul class="roadmap__sublist">
                  <li class="roadmap__sublist-item">Private sale</li>
                </ul>
              </li>
              <li class="roadmap__item roadmap__item--medium">
                <h4 class="roadmap__subtitle">February 2019</h4>
                <ul class="roadmap__sublist">
                  <li class="roadmap__sublist-item">Presale (30% Bonus)</li>
                  <li class="roadmap__sublist-item">Start of Games Development</li>
                </ul>
              </li>
            </ul>
            <ul class="roadmap__list roadmap__list--center">
              <li class="roadmap__item">
                <h4 class="roadmap__subtitle">March 2019</h4>
                <ul class="roadmap__sublist">
                  <li class="roadmap__sublist-item">Presale (25% Bonus)</li>
                </ul>
              </li>
              <li class="roadmap__item">
                <h4 class="roadmap__subtitle">April 2019</h4>
                <ul class="roadmap__sublist">
                  <li class="roadmap__sublist-item">Presale (20% Bonus)</li>
                </ul>
              </li>
              <li class="roadmap__item">
                <h4 class="roadmap__subtitle">May 2019</h4>
                <ul class="roadmap__sublist">
                  <li class="roadmap__sublist-item">Presale (15% Bonus)</li>
                </ul>
              </li>
            </ul>
            <ul class="roadmap__list roadmap__list--end">
              <li class="roadmap__item roadmap__item--little">
                <h4 class="roadmap__subtitle">June 2019</h4>
                <ul class="roadmap__sublist">
                  <li class="roadmap__sublist-item">Presale (10% Bonus)</li>
                </ul>
              </li>
              <li class="roadmap__item roadmap__item--big">
                <h4 class="roadmap__subtitle">July 2019</h4>
                <ul class="roadmap__sublist">
                  <li class="roadmap__sublist-item">Presale (5% Bonus)</li>
                  <li class="roadmap__sublist-item">Launch of www.playmitoshi.com website</li>
                  <li class="roadmap__sublist-item">Launch of 4 Lottery Draws</li>
                </ul>
              </li>
              <li class="roadmap__item roadmap__item--medium">
                <h4 class="roadmap__subtitle">August 2019</h4>
                <ul class="roadmap__sublist">
                  <li class="roadmap__sublist-item">CrowdSale Period (No Bonus)</li>
                </ul>
              </li>
              <li class="roadmap__item roadmap__item--big">
                <h4 class="roadmap__subtitle">September 2019</h4>
                <ul class="roadmap__sublist">
                  <li class="roadmap__sublist-item">Exchange Listing</li>
                  <li class="roadmap__sublist-item">Mobile App Release of Games [Android]</li>
                  <li class="roadmap__sublist-item">Launch of 3 More Lottery Draws</li>
                </ul>
              </li>
            </ul>
          </div>
        </section>
        <section class="team" id="team">
          <h2 class="team__title">
            Mitoshi ICO
            <span>Team Members</span>
          </h2>
          <div class="team__block">
            <h4 class="team__subtitle">
              Executive &
              <span>Management</span>
              <span>Team</span>
            </h4>
            <ul class="team__list team__list--executive">
              <li class="team__list-item team__list-item--executive">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/tc-picardo-8917a8165/" target="_blank">
                  <picture>
                    <source srcset="images/team-1.webp" type="image/webp">
                    <source srcset="images/team-1.png" type="image/png">
                    <img src="images/team-1.png" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">TC Picardo</p>
                <p class="team__member-occup">CEO & Founder</p>
              </li>
              <li class="team__list-item team__list-item--executive">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/normanvelasco/" target="_blank">
                  <picture>
                    <source srcset="images/team-2.webp" type="image/webp">
                    <source srcset="images/team-2.png" type="image/png">
                    <img src="images/team-2.png" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Norman Velasco</p>
                <p class="team__member-occup">COO & Co-Founder</p>
              </li>
              <li class="team__list-item team__list-item--executive">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/rob-natthavong-jumchai-1a4067172/" target="_blank">
                  <picture>
                    <source srcset="images/team-5.webp" type="image/webp">
                    <source srcset="images/team-5.png" type="image/png">
                    <img src="images/team-5.png" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Robert Natthavong Jumchai</p>
                <p class="team__member-occup">
                  Chief Business Development Officer
                </p>
              </li>
              <li class="team__list-item team__list-item--executive">
                <a class="team__img-wrap" href="#" target="_blank">
                  <picture>
                    <source srcset="images/team-6.webp" type="image/webp">
                    <source srcset="images/team-6.png" type="image/png">
                    <img src="images/team-6.png" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Charles Greenwood</p>
                <p class="team__member-occup">
                  Business Development, UK & Europe
                </p>
              </li>
              <li class="team__list-item team__list-item--management">
                <a class="team__img-wrap" href="#" target="_blank">
                  <picture>
                    <source srcset="images/team-7.webp" type="image/webp">
                    <source srcset="images/team-7.jpg" type="image/jpeg">
                    <img src="images/team-7.jpg" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Jocelyn Peralta</p>
                <p class="team__member-occup">
                  Finance & Accounting
                </p>
              </li>
            </ul>
          </div>
          <div class="team__block">
            <h4 class="team__subtitle">
              Development
              <span>team</span>
            </h4>
            <ul class="team__list team__list--development">
              <li class="team__list-item team__list-item--development">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/sergey-provalinski-0b8204162/" target="_blank">
                  <picture>
                    <source srcset="images/team-9.webp" type="image/webp">
                    <source srcset="images/team-9.jpg" type="image/jpeg">
                    <img src="images/team-9.jpg" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Sergey Provalinski</p>
                <p class="team__member-occup">Front-end Developer</p>
              </li>
              <li class="team__list-item team__list-item--development">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/%D0%B0%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80-%D0%BF%D0%BE%D0%B4%D1%80%D0%B5%D0%B7%D0%BE%D0%B2-b3328a173/" target="_blank">
                  <picture>
                    <source srcset="images/team-10.webp" type="image/webp">
                    <source srcset="images/team-10.png" type="image/png">
                    <img src="images/team-10.png" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Alexander Podrezov</p>
                <p class="team__member-occup">Back-end Developer</p>
              </li>
              <li class="team__list-item team__list-item--development">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/blockchainwork/" target="_blank">
                  <picture>
                    <source srcset="images/team-11.webp" type="image/webp">
                    <source srcset="images/team-11.png" type="image/png">
                    <img src="images/team-11.png" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Kalinouski Konstantin</p>
                <p class="team__member-occup">Protocol Architect</p>
              </li>
              <li class="team__list-item team__list-item--development">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/julia-drobnitsa/" target="_blank">
                  <picture>
                    <source srcset="images/team-12.webp" type="image/webp">
                    <source srcset="images/team-12.png" type="image/png">
                    <img src="images/team-12.png" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Julia Drobnitsa</p>
                <p class="team__member-occup">UX / IU Designer</p>
              </li>
            </ul>
          </div>
          <div class="team__block">
            <h4 class="team__subtitle">
              PR &
              <span>Marketing</span>
              <span>Team</span>
            </h4>
            <ul class="team__list team__list--pr">
              <!--<li class="team__list-item team__list-item&#45;&#45;pr">-->
              <!--<a class="team__img-wrap" href="https://www.linkedin.com/in/juri-verbitski-90967584/" target="_blank">-->
              <!--<img src="images/team-13.png" alt="Member of Mithoshi Team">-->
              <!--</a>-->
              <!--<p class="team__member-name">Juri Verbitski</p>-->
              <!--<p class="team__member-occup">PR & Digital Marketing</p>-->
              <!--</li>-->
              <li class="team__list-item team__list-item--pr">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/jerickalcancia/" target="_blank">
                  <picture>
                    <source srcset="images/team-14.webp" type="image/webp">
                    <source srcset="images/team-14.png" type="image/png">
                    <img src="images/team-14.png" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Jerick Alcancia</p>
                <p class="team__member-occup">Motion Graphic Artist</p>
              </li>
              <!--<li class="team__list-item team__list-item&#45;&#45;pr">-->
              <!--<a class="team__img-wrap" href="https://www.linkedin.com/in/randy-pagatpatan-b773a388/" target="_blank">-->
              <!--<img src="images/team-15.jpg" alt="Member of Mithoshi Team">-->
              <!--</a>-->
              <!--<p class="team__member-name">Randy Pagatpatan</p>-->
              <!--<p class="team__member-occup">Graphic Design</p>-->
              <!--</li>-->
              <li class="team__list-item team__list-item--pr">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/rmcccos/" target="_blank">
                  <picture>
                    <source srcset="images/team-16.webp" type="image/webp">
                    <source srcset="images/team-16.png" type="image/png">
                    <img src="images/team-16.png" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Rowena Ma. Clara Cos</p>
                <p class="team__member-occup">Copywriter</p>
              </li>
            </ul>
          </div>
          <!--<div class="team__block">-->
            <!--<h4 class="team__subtitle">-->
              <!--Management-->
              <!--<span>team</span>-->
            <!--</h4>-->
            <!--<ul class="team__list team__list&#45;&#45;management">-->
              <!--<li class="team__list-item team__list-item&#45;&#45;management">-->
                <!--<a class="team__img-wrap" href="https://www.linkedin.com/in/nikita-melnikov-a71a06b8/" target="_blank">-->
                  <!--<img src="images/team-3.png" alt="Member of Mithoshi Team">-->
                <!--</a>-->
                <!--<p class="team__member-name">Nikita Melnikov</p>-->
                <!--<p class="team__member-occup">Blockchain & Smart Contract Advisor</p>-->
              <!--</li>-->
              <!--<li class="team__list-item team__list-item&#45;&#45;management">-->
                <!--<a class="team__img-wrap" href="https://www.linkedin.com/in/kim-zafra-el-jugador-53393037/" target="_blank">-->
                  <!--<img src="images/team-4.png" alt="Member of Mithoshi Team">-->
                <!--</a>-->
                <!--<p class="team__member-name">Kim Zafra</p>-->
                <!--<p class="team__member-occup">Technical Game Advisor / Game Mathematecian</p>-->
              <!--</li>-->
            <!--</ul>-->
          <!--</div>-->
          <div class="team__block">
            <h4 class="team__subtitle">
              Community,
              <span>Social Media</span>
              <span> and Bounty Management</span>
            </h4>
            <ul class="team__list team__list--media">
              <li class="team__list-item team__list-item--media">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/kashif-syed-b09003139/" target="_blank">
                  <picture>
                    <source srcset="images/team-17.webp" type="image/webp">
                    <source srcset="images/team-17.png" type="image/png">
                    <img src="images/team-17.png" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Kashif Syed</p>
                <p class="team__member-occup">Social Media Management</p>
              </li>
              <li class="team__list-item team__list-item--media">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/raizalyn-razo/" target="_blank">
                  <picture>
                    <source srcset="images/team-18.webp" type="image/webp">
                    <source srcset="images/team-18.png" type="image/png">
                    <img src="images/team-18.png" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Raizalyn Razo</p>
                <p class="team__member-occup">Community Management</p>
              </li>
              <li class="team__list-item team__list-item--media">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/celeste-paras-79947b6a/" target="_blank">
                  <picture>
                    <source srcset="images/team-19.webp" type="image/webp">
                    <source srcset="images/team-19.png" type="image/png">
                    <img src="images/team-19.png" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Celeste Paras</p>
                <p class="team__member-occup">Community Management (English)</p>
              </li>
              <li class="team__list-item team__list-item--media">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/chen-chee-fah-783110142/" target="_blank">
                  <picture>
                    <source srcset="images/team-20.webp" type="image/webp">
                    <source srcset="images/team-20.png" type="image/png">
                    <img src="images/team-20.png" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Chen Chee Fah</p>
                <p class="team__member-occup">Community Management (Mandarin)</p>
              </li>
              <li class="team__list-item team__list-item--media">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/awele-kimberly-ajiduah-8981a075/" target="_blank">
                  <picture>
                    <source srcset="images/team-22.webp" type="image/webp">
                    <source srcset="images/team-22.png" type="image/png">
                    <img src="images/team-22.png" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Awele Kimberly Ajiduah</p>
                <p class="team__member-occup">Content Management</p>
              </li>
              <li class="team__list-item team__list-item--media">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/hazel-olivar-58ba23133/" target="_blank">
                  <picture>
                    <source srcset="images/team-24.webp" type="image/webp">
                    <source srcset="images/team-24.png" type="image/png">
                    <img src="images/team-24.png" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Hazel Olivar</p>
                <p class="team__member-occup">Community Management</p>
              </li>
              <li class="team__list-item team__list-item--media">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/philip-smart-43898b169/" target="_blank">
                  <picture>
                    <source srcset="images/team-23.webp" type="image/webp">
                    <source srcset="images/team-23.png" type="image/png">
                    <img src="images/team-23.png" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Philip Smart Kolawole</p>
                <p class="team__member-occup">Community Management</p>
              </li>
              <li class="team__list-item team__list-item--media">
                <a class="team__img-wrap" href=https://www.linkedin.com/in/kris-manalo-793173175/" target="_blank">
                  <picture>
                    <source srcset="images/team-27.webp" type="image/webp">
                    <source srcset="images/team-27.jpg" type="image/jpeg">
                    <img src="images/team-27.jpg" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Kris Manalo</p>
                <p class="team__member-occup">Community Management</p>
              </li>
              <li class="team__list-item team__list-item--media">
                <a class="team__img-wrap" href=https://www.linkedin.com/in/geneva-padua-b93646b1/" target="_blank">
                  <picture>
                    <source srcset="images/team-28.webp" type="image/webp">
                    <source srcset="images/team-28.jpg" type="image/jpeg">
                    <img src="images/team-28.jpg" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Geneva Padua</p>
                <p class="team__member-occup">Community Management</p>
              </li>
            </ul>
          </div>
          <div class="team__block">
            <h4 class="team__subtitle">
              Advisors
            </h4>
            <ul class="team__list team__list--advisors">
              <li class="team__list-item team__list-item--advisors">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/nikita-melnikov-a71a06b8/" target="_blank">
                  <picture>
                    <source srcset="images/team-3.webp" type="image/webp">
                    <source srcset="images/team-3.png" type="image/png">
                    <img src="images/team-3.png" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Nikita Melnikov</p>
                <p class="team__member-occup">Blockchain & Smart Contract Advisor</p>
              </li>
              <li class="team__list-item team__list-item--advisors">
                <a class="team__img-wrap" href="https://www.linkedin.com/in/kim-zafra-el-jugador-53393037/" target="_blank">
                  <picture>
                    <source srcset="images/team-4.webp" type="image/webp">
                    <source srcset="images/team-4.png" type="image/png">
                    <img src="images/team-4.png" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Kim Zafra</p>
                <p class="team__member-occup">Technical Game Advisor / Game Mathematecian</p>
              </li>
              <!--<li class="team__list-item team__list-item&#45;&#45;advisors">-->
                <!--<a class="team__img-wrap" href="https://www.linkedin.com/in/simon-cocking-20540135/" target="_blank">-->
                  <!--<img src="images/team-25.png" alt="Member of Mithoshi Team">-->
                <!--</a>-->
                <!--<p class="team__member-name">Simon Cocking</p>-->
                <!--<p class="team__member-occup">ICO Advisor</p>-->
              <!--</li>-->
              <!--<li class="team__list-item team__list-item&#45;&#45;advisors">-->
                <!--<a class="team__img-wrap" href="https://www.linkedin.com/in/felixhoe/" target="_blank">-->
                  <!--<img src="images/team-26.png" alt="Member of Mithoshi Team">-->
                <!--</a>-->
                <!--<p class="team__member-name">Felix Hoe</p>-->
                <!--<p class="team__member-occup">ICO Advisor</p>-->
              <!--</li>-->
              <!--<li class="team__list-item team__list-item&#45;&#45;advisors">-->
                <!--<a class="team__img-wrap" href="https://www.linkedin.com/in/jamesflorentino/" target="_blank">-->
                  <!--<img src="images/team-27.png" alt="Member of Mithoshi Team">-->
                <!--</a>-->
                <!--<p class="team__member-name">James Florentino</p>-->
                <!--<p class="team__member-occup">ICO Advisor </p>-->
              <!--</li>-->
              <!--<li class="team__list-item team__list-item&#45;&#45;advisors">-->
                <!--<a class="team__img-wrap" href="#" target="_blank">-->
                  <!--<img src="images/team-28.png" alt="Member of Mithoshi Team">-->
                <!--</a>-->
                <!--<p class="team__member-name">-</p>-->
                <!--<p class="team__member-occup">Advisor [IT & IT Security]</p>-->
              <!--</li>-->
            </ul>
          </div>
          <div class="team__block">
            <h4 class="team__subtitle">
              Partners
            </h4>
            <ul class="team__list team__list--partners">
              <li class="team__list-item team__list-item--partners">
                <a class="team__img-wrap team__img-wrap--partners" href="https://loftchain.io/" target="_blank">
                  <picture>
                    <source srcset="images/partner-1.webp" type="image/webp">
                    <source srcset="images/partner-1.png" type="image/png">
                    <img src="images/partner-1.png" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Loftchain</p>
                <p class="team__member-occup">Technical Partners</p>

              </li>
              <!--<li class="team__list-item">-->
                <!--<a class="team__img-wrap team__img-wrap&#45;&#45;partners team__img-wrap&#45;&#45;partners-shrink" href="https://cointraffic.io/" target="_blank">-->
                  <!--<img src="images/partner-2.svg" alt="Member of Mithoshi Team">-->
                <!--</a>-->
                <!--<p class="team__member-name">Cointraffic</p>-->
              <!--</li>-->
              <li class="team__list-item team__list-item--partners">
                <a class="team__img-wrap team__img-wrap--partners team__img-wrap--partners-shrink" href="https://www.experfy.com/" target="_blank">
                  <picture>
                    <source srcset="images/partner-3.webp" type="image/webp">
                    <source srcset="images/partner-3.png" type="image/jpeg">
                    <img src="images/partner-3.png" alt="Member of Mithoshi Team">
                  </picture>
                </a>
                <p class="team__member-name">Experfy</p>
              </li>
              <!--<li class="team__list-item team__list-item&#45;&#45;partners">-->
                <!--<a class="team__img-wrap team__img-wrap&#45;&#45;partners" href="https://mosspole.com/" target="_blank">-->
                  <!--<img src="images/partner-4.png" alt="Member of Mithoshi Team">-->
                <!--</a>-->
                <!--<p class="team__member-name">Mosspole Consulting</p>-->
              <!--</li>-->
            </ul>
          </div>
        </section>
        <section class="contacts" id="contacts">
          <h2 class="contacts__title">Connect With Us</h2>
          <div class="contacts__group">
            <h4 class="contacts__subtitle">Blog</h4>
            <p class="contacts__text">You can check more about Mitoshi in the following:</p>
            <ul class="contacts__list">
              <li
                class="contacts__list-item contacts__list-item--medium"><a
                href="http://medium.com/@mitoshicrypto" target="_blank"></a></li>
              <li
                class="contacts__list-item contacts__list-item--reddit"><a
                href="http://www.reddit.com/user/mitoshicrypto" target="_blank"></a></li>
              <li
                class="contacts__list-item contacts__list-item--github"><a
                href="http://github.com/loftchain/smart-contracts/blob/master/MTSH.sol" target="_blank"></a></li>
              <li
                class="contacts__list-item contacts__list-item--bitcoin"><a
                href="http://bitcointalk.org/index.php?topic=5045268.new#new" target="_blank"></a></li>
              <li
                class="contacts__list-item contacts__list-item--stemit"><a
                href="https://steemit.com/@mitoshicrypto" target="_blank"></a></li>
            </ul>
          </div>
          <div class="contacts__group">
            <h4 class="contacts__subtitle">FAQs</h4>
            <p class="contacts__text">
              Frequently asked questions on how you can win with Mitoshi.
            </p>
            <a class="contacts__button" href="files/FAQS.pdf" target="_blank">
              View FAQS
            </a>
          </div>
          <div class="contacts__group">
            <p class="contacts__text">
              Mitoshi Cryptolotto is owned and operated by Mitoshi Worldwide Holdings
              Ltd.<br>
              with registered address at 15/F, Effectual Building, 16 Hennessy Road, Wanchai, Hong Kong.
            </p>
          </div>
        </section>
        </div>
      </div>
    </main>
    <footer class="footer">
      <div class="footer__wrapper">
        <ul class="footer__list">
          <li class="footer__item footer__item--telegram"><a href="https://t.me/Mitoshi_Channel" target="_blank"></a></li>
          <li class="footer__item footer__item--whatsapp"><a href="https://chat.whatsapp.com/invite/L0KiJjxsGzwIQRtU6Cq1Yu" target="_blank"></a></li>
          <li class="footer__item footer__item--mail"><a href="mailto:luckyyou@mitoshiworldwide.com" target="_blank"></a></li>
          <li class="footer__item footer__item--facebook"><a href="http://m.facebook.com/MitoshiCryptoLotto/" target="_blank"></a></li>
          <li class="footer__item footer__item--lkdin"><a href="http://www.linkedin.com/company/mitoshi/" target="_blank"></a></li>
          <li class="footer__item footer__item--twitter"><a href="http://mobile.twitter.com/mitoshicrypto" target="_blank"></a></li>
          <li class="footer__item footer__item--youtube"><a href="https://www.youtube.com/channel/UCG2rcEGPN6Q_AQgSN7s_ADA" target="_blank"></a></li>
        </ul>
        <p class="footer__group">
          <span>Mitoshi Worldwide Holdings Ltd. @ 2018</span>
          <span>|</span><br>
          <span href="#">All rights reserved</span>
        </p>
        <p class="footer__group">
          <a href="privacy_policy/" target="_blank">Privacy policy</a>
          <span>|</span><br>
          <a href="terms_and_conditions/" target="_blank">Terms and conditions</a>
          <span>|</span><br>
          <a href="disclaimer/" target="_blank">Disclaimer</a>
        </p>
      </div>

    </footer>
	</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/main.js?v=3"></script>
  <script>
    const socket = new WebSocket('ws://46.101.114.134:8080');
    socket.onopen = function () {
      console.log('Connected');
      socket.send(JSON.stringify({
        event: 'mitoshi',
        data: 'mitoshi',
      }));

      socket.onmessage = function (data) {
        const sumAmount = JSON.parse(data.data);
        console.log(sumAmount);
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
</body>
</html>
