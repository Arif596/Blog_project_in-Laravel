<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{url('frontend/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{url('frontend/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{url('frontend/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{url('frontend/css/responsive.css')}}" rel="stylesheet" />
      <style>
         .card-data{
            display:flex;
            justify-content: space-between;
         }
         
      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.html"><img width="60" src="{{url('frontend/images/blog.jpg')}}" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                        </li>
                           <!-- <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a> -->
                           <!-- <ul class="dropdown-menu"> -->
                           <li class="nav-item active">
                           <a class="nav-link" href="/home">About <span class="sr-only">(current)</span></a>
                        </li>
                              <!-- <li><a href="testimonial.html">Testimonial</a></li> -->
                           <!-- </ul> -->
                       
                        <!-- <li class="nav-item">
                           <a class="nav-link" href="product.html">Products</a>
                        </li> -->
                        <li class="nav-item">
                           <a class="nav-link" href="blog_list.html">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/contact">Contact</a>
                        </li>
                        @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/logout') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><button type="button" class="btn btn-secondary">Logout</button></a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><button type="button" class="nav-btnn">Login</button></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><button type="button" class="nav-btnnn">Register</button></a>
                        @endif
                    @endauth
                </div>
            @endif
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                 <g>
                                    <g>
                                       <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                          c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                          C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                          c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                          C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                          c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                    </g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                              </svg>
                           </a>
                        </li>
                        <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->
         <!-- slider section -->
         <section class="slider_section ">
            <div class="slider_bg_box">
               <img src="{{url('frontend/images/slider-bg.jpg')}}" alt="">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    Check Our Latest Articles
                                    </span>
            
                                 </h1>
                                 <p style="text-align: justify;">
                                 If you're always on the lookout for new and interesting articles to read, 
                                 you'll definitely want to check out our latest articles! We cover a wide range of 
                                 topics, from lifestyle and travel to technology and science. Our team of writers is
                                  dedicated to providing engaging and informative content that will keep you entertained 
                                  and informed. With a variety of articles to choose from, you're sure to find something
                                   that interests you. 
                                 So why wait? Start browsing our latest articles today and discover something new!  
                                    
                                    
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                   Check Now
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item ">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                              <h1>
                                    <span>
                                    Check Our Latest Articles
                                    </span>
            
                                 </h1>
                                 <p style="text-align: justify;">
                                 If you're always on the lookout for new and interesting articles to read, 
                                 you'll definitely want to check out our latest articles! We cover a wide range of 
                                 topics, from lifestyle and travel to technology and science. Our team of writers is
                                  dedicated to providing engaging and informative content that will keep you entertained 
                                  and informed. With a variety of articles to choose from, you're sure to find something
                                   that interests you. 
                                 So why wait? Start browsing our latest articles today and discover something new!  
                                    
                                    
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    Check Now
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                              <h1>
                                    <span>
                                    Check Our Latest Articles
                                    </span>
            
                                 </h1>
                                 <p style="text-align: justify;">
                                 If you're always on the lookout for new and interesting articles to read, 
                                 you'll definitely want to check out our latest articles! We cover a wide range of 
                                 topics, from lifestyle and travel to technology and science. Our team of writers is
                                  dedicated to providing engaging and informative content that will keep you entertained 
                                  and informed. With a variety of articles to choose from, you're sure to find something
                                   that interests you. 
                                 So why wait? Start browsing our latest articles today and discover something new!  
                                    
                                    
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                   Check Now
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container">
                  <ol class="carousel-indicators">
                     <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                     <li data-target="#customCarousel1" data-slide-to="1"></li>
                     <li data-target="#customCarousel1" data-slide-to="2"></li>
                  </ol>
               </div>
            </div>
         </section>
         <!-- end slider section -->
      </div>
    
      
    @include('frontend.blog')
   <section class=""style="padding:60px 0">
   <div class="container">
      <div class="row">
         @foreach($blog as $blogs)
         <div class="col-md-4"> 
             <div class="card shadow" style="padding:10px 29px">
<img class="mb-2"src="Blog/{{$blogs->image}}" alt="" style="height:200px;width:auto">
<br>
<br>
<h4 class="mb-2">{{$blogs->name}}</h4>
<!-- <p class="mb-2">{{$blogs->message}}</p> -->
    <div class="card-data">
      
    <div>
      <h1>{{$blogs->select}}</h1>
      </div>
    </div>
    <div class="card-data">
      <div>
         <p>{{$blogs->date}}</p>
      </div>
      <div>
         <P>Muhammad Arif Jamal</P>
      </div>
    </div>
    <p class="ArticleBody">{{ substr(strip_tags($blogs->message), 0, 150) }}
                                    {{ strlen(strip_tags($blogs->message)) > 50 ? '...' : '' }}
                                    <a href="{{ route('frontend.travel', $blogs->id) }}"
                                        class="btn btn-info btn-sm text-blue-800">Read More</a>
                                </p>
   <!-- <a href="{{route('frontend.travel',$blogs->id)}}"> <button class="btn btn-primary">Read More</button></a> -->
    </div>

   </div>
   @endforeach
   <!-- <div class="col-md-4">  <div class="card shadow" style="padding:10px 29px">
   <img class="mb-2"src="{{url('frontend/images/fashion.jpg')}}" alt=""style="width:120px">
<h3 class="mb-2">Fashion Blogs</h3>
<p class="mb-2">Fashion blogs are digital platforms 
   that provide a space for fashion enthusiasts to share
    their personal style, latest trends, and fashion news.
     They cover a wide range of topics, including fashion shows,
      street style, beauty, and lifestyle. Fashion blogs offer inspiration,
       advice, and tips on how to incorporate current fashion is  
   </p>
   <div class="card-data">
      <div>
      <p>Name</p>
    </div>
    <div>
      <p style="justify-content:space between">Muhammad Umair </p>
      </div>
    </div>
    <div class="card-data">
      <div>
         <p>Date</p>
      </div>
      <div>
         <P>12/04/2023</P>
      </div>
    </div>
    <button class="btn btn-primary">Raed More</button>
    </div>
   </div>
   <div class="col-md-4">  <div class="card shadow" style="padding:10px 29px">
   <img class="mb-2"src="{{url('frontend/images/personal.jpg')}}" alt=""style="width:120px">
<h3 class="mb-2">Personal Blogs</h3>
<p class="mb-2">A personal blog is an online platform where an 
   individual can share their thoughts, experiences, opinions, 
   and ideas with a wide audience. It is a place where you can 
   express yourself freely, connect with people who share similar interests, 
   and showcase your creativity  Personal blogs can cover a wide range of topics.</p>
   <div class="card-data">
      <div>
      <p>Name</p>
    </div>
    <div>
      <p style="justify-content:space between">Muhammad Rizwan </p>
      </div>
    </div>
    <div class="card-data">
      <div>
         <p>Date</p>
      </div>
      <div>
         <P>14/04/2023</P>
      </div>
    </div>
    <button class="btn btn-primary">Read More</button>
    </div>
   </div>

      </div>
   </div> -->
  
   </section>

      <!-- subscribe section -->
      <section class="subscribe_section">
         <div class="container-fuild">
            <div class="box">
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <div class="subscribe_form ">
                        <div class="heading_container heading_center">
                           <h3>Subscribe Our Blog Website</h3>
                        </div>
                        <p>"Please subscribe to our blog website to stay updated on the 
                           latest content and receive exclusive discount offers."</p>
                        <form action="">
                           <input type="email" placeholder="Enter your email">
                           <button>
                           subscribe
                           </button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end subscribe section -->
    
      <!-- footer start -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                   <div class="full">
                      <div class="logo_footer">
                        <a href="#"><img width="210" src="{{url('frontend/images/bbblog.jpg')}}" alt="#" /></a>
                      </div>
                      <div class="information_f">
                        <p><strong>ADDRESS:</strong>  Shamsabad Rawalpindi  Pakistan</p>
                        <p><strong>TELEPHONE:</strong> +92 987 654 3210</p>
                        <p><strong>EMAIL:</strong> blog@gmail.com</p>
                      </div>
                   </div>
               </div>
               <div class="col-md-8">
                  <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Menu</h3>
                        <ul>
                           <li><a href="/home">Home</a></li>
                           <li><a href="/about">About</a></li>
                           <!-- <li><a href="#">Testimonial</a></li> -->
                           <li><a href="/blog">Blog</a></li>
                           <li><a href="/contact">Contact</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Account</h3>
                        <ul>
                           <!-- <li><a href="#">Account</a></li>
                           <li><a href="#">Checkout</a></li> -->
                           <li><a href="/login">Login</a></li>
                           <li><a href="/register">Register</a></li>
                           <!-- <li><a href="#">Shopping</a></li>
                           <li><a href="#">Widget</a></li> -->
                        </ul>
                     </div>
                  </div>
                     </div>
                  </div>     
                  <div class="col-md-5">
                     <div class="widget_menu">
                        <h3>Newsletter</h3>
                        <div class="information_f">
                          <p>Subscribe by our newsletter and get update protidin.</p>
                        </div>
                        <div class="form_sub">
                           <form>
                              <fieldset>
                                 <div class="field">
                                    <input type="email" placeholder="Enter Your Mail" name="email" />
                                    <input type="submit" value="Subscribe" />
                                 </div>
                              </fieldset>
                           </form>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer end -->
      <!-- <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div> -->
      <!-- jQery -->
      <script src="{{url('frontend/js/jquery-3.4.1.min.js')}}"></script>
      <!-- popper js -->
      <script src="{{url('frontend/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{url('frontend/js/bootstrap.js')}}"></script>
      <!-- custom js -->
      <script src="{{url('frontend/js/custom.js')}}"></script>
   </body>
</html>