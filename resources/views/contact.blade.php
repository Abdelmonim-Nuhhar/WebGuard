@extends('layouts.new-app')

@section('content')

<!-- Contact Section Starts -->

<section class="contact bg-green-100 py-12 rounded-3xl">
   <h1 class="text-3xl font-bold mb-8 text-center">Get in Touch</h1>

   <div class="flex flex-wrap justify-around max-w-6xl mx-auto">

      <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 mb-8">
         <div class="bg-blue-400 hover:bg-blue-300 text-white p-6 rounded-3xl shadow-md text-center mr-4">
            <i class="fas fa-clock text-4xl mb-2 "></i>
            <h3 class="text-lg font-semibold mb-2">Opening Hours</h3>
            <p>00:07 am to 00:06 pm</p>
            <br>
         </div>
      </div>

      <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 mb-8">
         <div class="bg-green-500 hover:bg-green-400 text-white p-6 rounded-3xl shadow-md text-center mr-4">
            <i class="fas fa-phone text-4xl mb-2"></i>
            <h3 class="text-lg font-semibold mb-2">Phone</h3>
            <p>+44 113 657 89</p>
            <p>+44 734567899</p>
         </div>
      </div>

      <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 mb-8">
         <div class="bg-yellow-500 hover:bg-yellow-400 text-white p-6 rounded-3xl shadow-md text-center mr-4">
            <i class="fas fa-envelope text-4xl mb-2"></i>
            <h3 class="text-lg font-semibold mb-2">Email</h3>
            <p>mo-hassan@supervisor.co.uk</p>
            <p>abdel-monim@student.com</p>
         </div>
      </div>

      <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 mb-8">
         <div class="bg-indigo-500 hover:bg-indigo-400 text-white p-6 rounded-3xl shadow-md text-center">
            <i class="fas fa-map text-4xl mb-2"></i>
            <h3 class="text-lg font-semibold mb-2">Address</h3>
            <p>Leeds Beckett University, UK</p>
            <p>Post Code: LS06 1AB</p>
         </div>
      </div>

   </div>

   <div class="flex flex-wrap justify-center">

      <div class="w-full md:w-1/2 lg:w-1/3 mb-8">
         <div class="bg-white p-8 rounded shadow-md text-center">
            <img src="images/contact-us.png" alt="Contact Image" class="w-full mb-4 rounded">
            <h3 class="text-xl font-semibold mb-4">Send Us a Message</h3>
            <form action="" class="text-left">
               <input type="text" placeholder="Name" class="w-full mb-4 p-2 rounded border">
               <input type="email" placeholder="Email" class="w-full mb-4 p-2 rounded border">
               <input type="number" placeholder="Phone" class="w-full mb-4 p-2 rounded border">
               <textarea name="" class="w-full mb-4 p-2 rounded border" placeholder="Message" id="" cols="30" rows="5"></textarea>
               <input type="submit" value="Send Message" class="bg-blue-600 text-white py-2 px-4 rounded cursor-pointer hover:bg-blue-800">
            </form>
         </div>
      </div>

   </div>
</section>

<!-- Contact Section Ends -->

<!-- FAQ Section Starts -->

<section class="faq bg-gray-200 py-12">
   <h1 class="text-3xl font-bold mb-8 text-center">Frequently Asked Questions</h1>

   <div class="accordion-container max-w-3xl mx-auto">

      <!-- Repeat the structure for additional FAQs -->

   </div>
</section>

<!-- FAQ Section Ends -->

<!-- Logo Slider Starts -->

<section class="logo-container bg-white py-12">
   <div class="swiper logo-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide"> <img src="images/partner-logo-1.png" alt="Partner Logo 1" class="mx-auto"> </div>
         <div class="swiper-slide"> <img src="images/partner-logo-2.png" alt="Partner Logo 2" class="mx-auto"> </div>
         <div class="swiper-slide"> <img src="images/partner-logo-3.png" alt="Partner Logo 3" class="mx-auto"> </div>
         <div class="swiper-slide"> <img src="images/partner-logo-4.png" alt="Partner Logo 4" class="mx-auto"> </div>
         <div class="swiper-slide"> <img src="images/partner-logo-5.png" alt="Partner Logo 5" class="mx-auto"> </div>
      </div>
   </div>
</section>

<!-- Logo Slider Ends -->

@endsection
