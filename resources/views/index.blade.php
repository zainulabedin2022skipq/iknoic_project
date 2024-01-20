@extends('main')
@section('content')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          @foreach ($product as $value)
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img width="150px" height="150px" src="all_product/{{ $value->product_picture }}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>{{ $value->product_name }}</h4></a>
                <h6>${{ $value->product_price }}</h6>
                <p>{{ $value->product_detail }}.</p>
                @foreach ($feedback as $item)
                @if ($value->id == $item->product_id)
                <div class="row border border-2" id="feedback{{ $value->id }}" >
                    <div class="col-sm-4 text-primary mt-2">{{ $item->user_name }}</div>
                    <div class="col-sm-8 mt-2">{{ $item->user_feedback }}</div>
                </div>
                @endif
                @endforeach
              </div>
            </div>
            <div class="row">
               <div class="col-sm-8">
                <form  action="/{{ $value->id }}/user_feedback" method="POST">
                @csrf
                <input type="text" name="user_feedback" class="form-control" placeholder="Create the Feedback">
            </div>
            <div class="col-sm-4">
                <button type="submit" class="feedback btn btn-primary"  data-post-id="{{ $value->id }}"   >Feedback</button>
            </div>
        </form>
            </div>
          </div>
          @endforeach
        </div >
           <div class="mt-5">
            {{ $product->links('pagination::bootstrap-5') }}
           </div>
      </div>
    </div>



    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Iknoic</em> Task</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

 <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
    //     $(document).ready(function() {
    //     $('.feedback').click(function(e){
    //         e.preventDefault();
    //         const feedbackForm = $(this).closest('form');
    //         const formData = feedbackForm.serialize();
    //         var button = $(this);
    //             const id = button.data('post-id');
    //         $.ajax({
    //             type: 'POST',
    //             url:`/${id}/user_feedback`,
    //             data: formData,
    //             contentType: 'application/x-www-form-urlencoded',
    //             dataType: 'json',
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             },
    //             success: function(response) {

    //                 if (response.data) {
    //                 Swal.fire({
    //                     title: 'Success!',
    //                     text: 'Your feedback was submitted successfully',
    //                     icon: 'success',
    //                     showConfirmButton: false,
    //                     timer: 2500
    //                 });
    //             } else {
    //                 Swal.fire({
    //                     title: 'Error!',
    //                     text: 'Unexpected response format',
    //                     icon: 'error',
    //                     showConfirmButton: true
    //                 });

    //             }

    //              $(feedbackForm)[0].reset();
    //             },
    //             error: function(error) {
    //                 console.log(error);
    //             }
    //         });
    //     });
    // });
    </script>
    @endsection
