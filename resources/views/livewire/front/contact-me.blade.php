<div>

    <section id="contact" class="contact">
        <div class="container">

          <div class="section-title">
            <h2>تواصل معنا </h2>
            <p>يمكنك ارسال رساله لنا بالبيانات المطلوبه وسوف يتم الرد  فى اقرب وقت ممكن ان شاء الله</p>
          </div>
  {{--}}
          <div>
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
          </div>
  {{--}}
          <div class="row mt-5">

            <div class="col-lg-4">
              <div class="info">
                  @if ($data)

                    @foreach ($data as $key=>$item)


                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>العنوان:</h4>
                  <p>{{$item['address']}}</p>


                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>البريد الالكترونى:</h4>
                  <p>{{$item['email']}}</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>رقم الهاتف:</h4>
                  <p>{{$item['phone']}}</p>
                </div>
                @endforeach
                @endif
              </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

              <form wire:submit.prevent="senddata"  class="php-email-form" novalidate>
                <div class="row">

                  <div class="col-md-6 form-group mt-3 mt-md-0">

                    <input type="email" wire:model="email" class="form-control  @error("email")  is-invalid @enderror"  placeholder="البريد الالكترونى" >
                    @error('email')
                    <div class="invalid-feedback text-end">
                     {{$message}}
                   </div>

                    @enderror

                </div>



                  <div class="col-md-6 form-group">
                    <input type="text" wire:model="name" dir="auto" class="form-control
                    @error("name")  is-invalid

                    @enderror"  placeholder="الاسم" >
                    @error('name')
                    <div class="invalid-feedback text-end">
                     {{$message}}
                   </div>

                    @enderror
                  </div>


                <div class="form-group mt-3">
                  <textarea class="form-control
                     @error("message")  is-invalid
                  @enderror" wire:model="message"
                  rows="5" placeholder="الرساله" dir="auto" ></textarea>
                  @error('message')
                  <div class="invalid-feedback text-end">
                   {{$message}}
                 </div>

                  @enderror
                </div>


                <div class="text-center">
                    <button type="submit" wire:loading.remove wire:target="senddata">ارسل رساله</button>
                    <button class="btn btn-white" type="button" disabled
                    wire:loading wire:target="senddata">
                        <span class="spinner-border spinner-border-md" role="status" aria-hidden="true"></span>
                        <span class="visually-hidden">Loading...</span>
                      </button>
                </div>

            </div>
              </form>

            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->
</div>
@push('addjs')
<script>
$(function(){
    window.addEventListener("done",function(event){
 const Toast = Swal.mixin({
toast: true,
position: 'top-end',
showConfirmButton: false,
timer: 4500,
timerProgressBar: true,
didOpen: (toast) => {
 toast.addEventListener('mouseenter', Swal.stopTimer)
 toast.addEventListener('mouseleave', Swal.resumeTimer)
}
})

Toast.fire({
icon: 'success',
title:   event.detail.message
})

});
///////errror massage////
window.addEventListener("error",function(event){

Swal.fire({
icon: 'error',
title: 'Oops...',
text: event.detail.message,

});




  });
});


</script>
@endpush
