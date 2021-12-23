<div>

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
