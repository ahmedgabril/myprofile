<div>
   <!-- ======= About Section ======= -->
   <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
          <h2>عنى </h2>
          <p></p>
        </div>

      <div class="card mb-3" style="max-width: 1190px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{ $data->img !==null ? asset('storage/'.$data->img):'assets/images/no-image-en.png'}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title text-center mb-4">{{$data->name}}</h5>
                <p class="card-text  text-center text-wrap text-primary mb-4">
                  {{$data->title}}
                </p>
                <div class="text-center text-wrap">
                  {!!$data->dec!!}
                </div>
              </div>
            </div>
          </div>
        </div>


  </section><!-- End About Section -->
   <!-- ======= Skills Section ======= -->
 <section id="skills" class="skills">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>المهارات</h2>
        <p></p>
      </div>

      <div class="row skills-content">


          @foreach ($getskills as $skill )
          <div class="col-lg-6">
          <div class="progress">
             <span class="skill">{{$skill->name}} <i class="val {{ $skill->rate < 50 ?'text-danger':'text-success'}}">{{$skill->rate}}%</i></span>
             <div class="progress-bar-wrap">
               <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->rate}}" aria-valuemin="0" aria-valuemax="100"></div>
             </div>
           </div>
          </div>
          @endforeach



        </div>


    </div>
  </section><!-- End Skills Section -->
</div>
