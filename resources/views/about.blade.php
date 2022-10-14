@extends('layout.master2')
@section('title', 'About')
@section('content')
<div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
          
          <br>  
          <br>
          <br>  
          <br>
          <br>  
          <br>  
          <br>  
          <div class="about-img">
            
              <img src="assets/img/about.jpg" alt="">
            </div>
          </div>
          
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <br>
          <br>  
          <br>
          <br>  
          <br>
          <br>  
          <h3>About Us</h3>
            <p class="fst-italic">
              CIKEN KENTAKY adalah salah satu franchise yang memberikan menu special ayam goreng untuk pelanggan setia kami.Nah, Apa sih yang membedakan menu special ayam goreng kami dari yang lainnya?
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <?php echo $about?></li>
              <li><i class="bi bi-check-circle"></i> <?php echo $about1?></li>
              <li><i class="bi bi-check-circle"></i> <?php echo $about2?></li>
            </ul>
            <p>
              
              Jadi jangan kelewatan informasi terbaru kami yah...<br>
              CIKEN KENTAKY Jagonya CRISPY!!!
            </p>
          </div>
        </div>

      </div>
@endsection