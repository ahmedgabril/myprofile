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
                  <p>{{$item['whatsup']}}</p>
                </div>

                <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>رقم هاتف اخر:</h4>
                    <p>{{$item['phone2']}}</p>
                  </div>
                <div class="phone">
                    <i class="bi bi-whatsup">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                          </svg>
                    </i>
                    <h4> واتس اب:</h4>
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
