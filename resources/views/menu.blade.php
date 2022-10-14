@extends('layout.master3')
@section('title', 'Menu')
@section('content')
<br>
<!-- ======= Menu Section ======= -->
<section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Sambel</li>
              <li data-filter=".filter-specialty">Signature</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/original.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"><?php echo $menu1 ?> </a><span>Rp.20,000</span>
            </div>
            <div class="menu-ingredients">
              Ayam Goreng Original
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/crispy.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"> <?php echo $menu2 ?></a><span>Rp.25,000</span>
            </div>
            <div class="menu-ingredients">
             Ayam Goreng Crispy + Barbeque Sauce
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/bbq.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"> <?php echo $menu3 ?></a><span>Rp.25,000</span>
            </div>
            <div class="menu-ingredients">
             Ayam Goreng Crispy + Barbeque Sauce
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/salted.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"><?php echo $menu4 ?></a><span>Rp.30,000</span>
            </div>
            <div class="menu-ingredients">
            Ayam Goreng Crispy + Salted Egg
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/chillioil.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"><?php echo $menu5 ?></a><span>Rp.20,000</span>
            </div>
            <div class="menu-ingredients">
            Ayam Goreng Crispy + Chilli Oil
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/geprek.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"><?php echo $menu6 ?></a><span>Rp.20,000</span>
            </div>
            <div class="menu-ingredients">
            Ayam Goreng Crispy Geprek
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/matah.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"><?php echo $menu7 ?></a><span>Rp.5,000</span>
            </div>
            <div class="menu-ingredients">
            sambal tradisional Bali
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/ijo.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"><?php echo $menu8 ?></a><span>Rp.5,000</span>
            </div>
            <div class="menu-ingredients">
            Sambel Khas Padang
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/balado.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"><?php echo $menu9 ?></a><span>Rp.5,000</span>
            </div>
            <div class="menu-ingredients">
             Sambel Khas Minangkabau
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/setan.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"><?php echo $menu10 ?></a><span>Rp.5,000</span>
            </div>
            <div class="menu-ingredients">
            Sambel Pedes Banget Lvl 10
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->
    @endsection