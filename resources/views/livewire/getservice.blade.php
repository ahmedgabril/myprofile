<div>

    <div class="container">

     <div class="row mb-4">
         <div class="col-sm-4">
           <h1 class="m-0">اداره الخدمات</h1>
         </div><!-- /.col -->
         <div class="col-sm-8 mt-2">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item active"><a class="ml-3" href="/home">الرئيسه</a>/</li>

             <li class="breadcrumb-item active"> <a href="">الصلاحيات</a></li>
             <li class="breadcrumb-item active"> <a href="{{route('role')}}">الوظائف</a></li>

             <li class="breadcrumb-item active"> <a href="{{route('getuser')}}">المستخدمين</a></li>
             <li class="breadcrumb-item active"> <a href="{{route('setting')}}">الاعدادت</a></li>

           </ol>
         </div><!-- /.col -->
       </div><!-- /.row -->

     <div class="row">
         <div class="col-md-12">
           <div class="app-card  h-100 shadow-sm">
             <div class="card-header">


               <div class="row">
                   <div class="col-12">
                     <div class="card-tools">
                       <!--  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                         </button>-->
                         <button type="button" class="btn btn-tool" data-card-widget="collapse">
                           <i class="fas fa-minus"></i>
                         </button>

                         <div class="btn-group">
                           <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                             <i class="fas fa-wrench"></i>
                           </button>

                           <div class="dropdown-menu dropdown-menu-right" role="menu" style="">
                             <a href="#" class="dropdown-item">طباعه</a>

                             <a class="dropdown-divider"></a>
                             <a href="#" class="dropdown-item"> </a>
                           </div>
                         </div>

                       </div><!--enddivclassaction-->
                   </div>

                 <div class=" col-sm-2 form-group" style="margin-top:29px;padding:4px">
                     <button type="button"  wire:click.prevent="showmodel"
                     class="btn btn-block btn-outline-success text-white"><i class="fas fa-plus-circle"></i>
                      اضافه خدمه </button>
                 </div>



                     <div class=" col-sm-4"
                     style="margin-top:32px; border-right: 1px !important;">

                       <input class="form-control form-control-navbar"
                       wire:model.debounce.200ms="searsh"
                       type="search" placeholder="بحث" aria-label="Search">

                     </div>






           <div class="col-sm-3 form-group " style="margin-top:32px" wire:ignore>

             <select class="form-select form-select-md  d-inline-flex" wire:model="sortDirections">
                 <option value="asc" {{$sortDirections == 'asc'? 'selected':'' }}>من الاقدم </option>
                 <option value="desc"  {{ $sortDirections == 'desc'? 'selected':'' }}>من الاحدث  </option>

               </select>
             </div>

             <div class="col-sm-2 form-group" style="margin-top:32px" wire:ignore>

                 <select class="form-select form-select-md  d-inline-flex" wire:model="pagenate">
                   <option selected>5</option>
                     <option >10</option>
                     <option> 20</option>
                     <option> 30</option>
                     <option> 50</option>
                     <option> 100</option>
                     <option> 150</option>


                   </select>
                 </div>

                </div> <!-- /.end-row-card-header -->
             </div>
             <!-- /.card-header -->
             <x-spaner wire:loading wire:target="pagenate,sortDirections" />
             <div class="card-body"wire:loading.remove  wire:target="pagenate,sortDirections"  style="display: block;">

               <div class="row">

                 <table class="table  table-striped table-hover">
                     <thead>
                       <tr>
                         <th>ID</th>
                         <th>اسم الخدمه</th>
                         <th>وصف الخدمه المختصر</th>
                         <th>حاله الظهور</th>

                         <th><i class="fas fa-wrench"></i></th>

                       </tr>
                     </thead>
                     <tbody>

                         @forelse($data as $index => $getdata )
                       <tr>

                         <td style="width: 40px">{{ $data->firstItem() + $index}}</td>
                         <td>{{ $getdata->name }}</td>

                         <td>{{ Str::substr($getdata->title, 0, 35) }}...</td>
                         <td>
                         <span class="{{$getdata->status ===1 ? 'badge bg-success':'badge bg-danger'}}">
                            {{$getdata->status ===1 ? 'مفعل':'غير مفعل'}}
                        </span>

                         </td>

                         <td style="display: none">{{ $getpaginateindex = $index }}</td>
                          <td>


                             <div class="col-12">
                                 <div class="card-tools">


                                     <div class="btn-group">
                                       <button type="button"style="color:#525f6c" class="btn btn-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                          <i class="fas fa-cogs"></i>

                                     </button>

                                       <div class="dropdown-menu dropdown-menu-right" role="menu" style="">
                                        <a href="#"   class="dropdown-item" data-target="#modal-showdes" data-toggle="modal" wire:click.prevent="showdes({{$getdata->id}})" >
                                            <i  class="fa fa-eye text-primary"></i>
                                             استعراض البيانات
                                        </a>
                                         <a href="#"  class="dropdown-item" wire:click.prevent="edit({{$getdata->id}})" >
                                             <i style="margin-left: 4px;" class="fa fa-edit text-success">
                                                 </i>
                                             تعديل البيانات
                                             </a>
                                         <a href="#" class="dropdown-item" wire:click.prevent="getcurantid({{ $getdata->id }})">
                                             <i style="margin-left: 4px;" class="fas fa-trash text-danger"></i>
                                         حذف البيانات
                                         </a>

                                         <a class="dropdown-divider"></a>
                                         <a href="#" class="dropdown-item"> ......</a>
                                       </div>
                                     </div>

                                   </div><!--enddivclassaction-->

                               </div>


                           </td>
                       </tr>
                       @empty
                       <tr class="text-center" style="background-color: rgb(235 79 79)!important;">
                       <td colspan="6" style="height:33px">
                         <p class="text-center text-white"style="font-size:15px">لاتوجد  نتائج</p>

                         <img src="{{ asset('assets/img/empty.svg') }}" style= "width: 69px; height: 33px;">

                       </td>
                     </tr>
                       @endforelse



                     </tbody>

                   </table>
                 <!-- /.col -->



               </div>
               <!-- /.row -->
             </div>
             <!-- ./card-body -->
             <div class="card-footer" wire:target="pagenate,sortDirections" wire:loading.remove >
               <div class="row">

                     <div class="col-12">{{$data->links()}}</div>
                     <div class="col-12" style="font-size: 13px;">
                      عرض <span class="text-success text-bold">{{ $data->firstItem() + $getpaginateindex}}</span> من اجمالى السجلات <span class="text-primary text-bold">{{ $counts }}</span>

                     </div>


             <!-- /.card-footer -->
           </div>
           <!-- /.card -->

         </div>
         <!-- /.col -->
       </div>
      </div><!--end col-12-->
         <!--model add -->
         <x-modelspaner wire:loading wire:target="add,updateone" />
<div class=" modal fade " wire:ignore.self id="modal-role"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class=" modal-dialog modal-lg modal-fullscreen-md-down">
   <div class="modal-content">
     <div class="modal-header">
       @if (!$showmodelf)
       <h4 class="modal-title">اضافه  خدمه  جديده</h4>
       @else
       <h4 class="modal-title">تحديث بيانات خدمه </h4>

       @endif

       <button  class = "model-close"type="button"data-bs-dismiss="modal" aria-label="Close" >
         <span aria-hidden="true">×</span>
       </button>
     </div>

     <div class="modal-body">




         <form  wire:submit.prevent="{{!$showmodelf ? 'add' :'updateone'}}" novalidate="novalidate">
        <div class="row">
              <div class="col-sm-6 form-group">
              <label for="">اسم الخدمه</label>
                <input class="form-control @error("form.name")  is-invalid

               @enderror"  type="text"
                wire:model="form.name"

               />
                @error('form.name')
               <div class="invalid-feedback">
                {{$message}}
              </div>

               @enderror

           </div>
           <div class="col-sm-6 form-group">
             <label >السعر</label>
               <input type="text"  class="form-control @error("form.price") is-invalid @enderror"

                wire:model="form.price"/>


               @error('form.price')
              <div class="invalid-feedback">
               {{$message}}
             </div>

              @enderror

          </div>

          @if ($icon)
          <div class=" col-sm-12 mb-4">


                  <a wire:click.prevent="removeimage()" style="cursor: pointer" class="text-danger">
                  x
                      <img src="{{$icon->temporaryUrl()}}" width="100%" height="250">

                  </a>



            </div>

            @else
            @if ($showmodelf && !$icon)
            <div class=" col-sm-12 mb-4 mt-4 ">
            <img src="{{$realimage!==null? asset('storage/'.$realimage):'assets/images/No_image.jpg'}}" width="100%" height="250">

        </div>
            @endif
            @endif
            <div class="col-sm-12 form-group mt-4 mb-4">
                @if ($showmodelf && !$img && $rusaltforimage)

                <div class="row">
                @foreach ($rusaltforimage as $getimg)

                <div class="col-sm-3">

                          <div>
                            <img src="{{asset('storage/'.$getimg)}}" width="150" height="150"/>

                          </div>

                    </a>

                </div>


                @endforeach
                </div>
                @else



                <div class="row">
                @foreach ($img as $getimg)

                <div class="col-sm-3">
                    <a href="#" wire:click.prevent="removeimages({{$loop->index}})" style="color:crimson">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                          </svg>
                          <div>
                            <img src="{{ $getimg->temporaryUrl() }}" width="100%" height="100%"/>

                          </div>

                    </a>

                </div>


                @endforeach
            </div>

                @endif

              </div>
             <div class="col-sm-6 form-group">
                <label for="">رفع مجموعه صور للخدمه</label>
                  <input class="form-control " type="file"
                   multiple="" accept="image/*" wire:model="img">


                   <div wire:loading wire:target="img">

                    <div class="d-flex justify-content: center mt-4">
                        <div class="d-flex align-items-center">
                            <strong class="ms-4 text-success">جارى التحميل</strong>
                            <div class="spinner-border ml-auto text-success" role="status" aria-hidden="true"></div>
                          </div>

                     </div>
                   </div>

               </div>




          <div class="col-sm-6 form-group mb-4 ">
            <label >صوره الخدمه الرئيسه</label>
              <input type="file"
               class="form-control @error("icon") is-invalid @enderror"

              accept="image/*"
               wire:model="icon"/>


               <div wire:loading wire:target="icon">

                <div class="d-flex justify-content: center mt-4 mb-4">
                    <div class="d-flex align-items-center">
                        <strong class="ms-4 text-success">جارى التحميل</strong>
                        <div class="spinner-border ml-auto text-success" role="status" aria-hidden="true"></div>
                      </div>

                 </div>
               </div>
            @error('icon')
            <div class="invalid-feedback">
             {{$message}}
           </div>

            @enderror



         </div>



           <div class="col-sm-6 form-group">
            <label >فيديو //<span class="text-danger" style="font-size: 11px">رابط فيديو يوتيوب</span></label>
              <input type="text"  class="form-control @error("form.url") is-invalid @enderror"


               wire:model="form.url"/>


              @error('form.url')
             <div class="invalid-feedback">
              {{$message}}
            </div>

             @enderror

         </div>

         <div class="col-sm-6 form-group">
            <label>حاله الظهور فى الموقع</label>
               <div class=" @error("form.status") is-invalid @enderror">

                <select class="form-control"
                 style="padding-top:1px" wire:model="form.status">
                <option value="1" selected> مفعل</option>
               <option value="2">غير مفعل</option>


                </select>
               </div>
               @error('form.status')
               <div class="invalid-feedback">
                {{$message}}
              </div>

               @enderror
             </div>
         <div class="mb-3 col-sm-12">
            <label for="setting-input-3" class="form-label">وصف قصير للخدمه </label>
            <textarea wire:model="form.title" rows="2"
            class="form-control @error("form.title") is-invalid @enderror"></textarea>
            @error('form.title')
            <div class="invalid-feedback">
             {{$message}}
           </div>

            @enderror

        </div>

        <div class="mb-3 col-sm-12">
            <label for="setting-input-3" class="form-label">تحدث عن الخدمه باستفاضه</label>

            <textarea class="form-control @error("form.dec") is-invalid @enderror"
             wire:model="form.dec" rows="4"></textarea>
            @error('form.dec')
            <div class="invalid-feedback">
             {{$message}}
           </div>

            @enderror


        </div>


     <div class="modal-footer mt-4">
       @if (!$showmodelf)
       <button type="submit"  class="btn btn-primary">
            <i class="ml-2 fa fa-save"></i>

             حفظ</button>
       @else
       <button type="submit"  class="btn btn-primary">
           <i class="ml-2 fa fa-save"></i>

             حفظ التغيرات</button>

       @endif

       <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="ml-2 fa fa-times"></i> الغاء</button>
     </div>


   </div><!--endrow-->
 </form>
   </div>
   <!-- /.modal-content -->
 </div>
 <!-- /.modal-dialog -->
</div>
</div>
<!--end model add-->


<!--model show description -->

<div class="modal fade"  wire:ignore.self id="modal-showdes" style="display: none;" aria-hidden="true">
    <div class=" modal-dialog modal-lg modal-fullscreen-sm-down">
      <div class="modal-content">

        <div class="modal-body">

           <div class="row">
                 <div class="col-sm-6 form-group">
                 <label for="">اسم الخدمه</label>
                   <input class="form-control" disabled type="text"
                   wire:model="form.name"

                  />


              </div>
              <div class="col-sm-6 form-group">
                <label >السعر</label>
                  <input type="text" readonly class="form-control"

                   wire:model="form.price"/>
             </div>


            <div class="col-sm-6 form-group">
               <label >رابط فيديو</label>
                 <input type="text" disabled class="form-control"


                  wire:model="form.url"/>

            </div>
            <div class="col-sm-6 form-group">
                <label >تاريخ الانساء</label>
                  <input type="text" readonly class="form-control"


                   wire:model="form.created_at"/>

             </div>


            <div class="col-sm-12 form-group">
                <label>حاله الظهور فى الموقع</label>


                    <select class="form-control"
                     style="padding-top:1px"   wire:model="form.status" disabled>

                    <option value="1"> مفعل</option>

                   <option value="2">غير مفعل</option>


                    </select>

                 </div>
            <div class=" col-sm-12 mb-4 mt-4 ">
                <label > صوره الخدمه</label>
                <img src="{{ asset('storage/'.$realimage)}}" width="100%" height="250">

            </div>


            <div class="row">
                <label > صور الخدمه</label>
                @if ($rusaltforimage)


                @foreach ($rusaltforimage as $getimg)

                <div class="col-sm-3">

                          <div>
                            <img src="{{asset('storage/'.$getimg)}}" width="150" height="150"/>

                          </div>

                    </a>

                </div>


                @endforeach
                </div>
                @endif
            <div class="mb-3 col-sm-12">
               <label for="setting-input-3" class="form-label">وصف قصير للخدمه </label>
               <textarea disabled wire:model="form.title" rows="2"
               class="form-control
               "></textarea>


           </div>


           <div class="mb-3 col-sm-12">
               <label for="setting-input-3" class="form-label">تحدث عن الخدمه باستفاضه</label><br/>
                  {!!$form['dec']!!}


           </div>


        <div class=" justify-content-sm-center modal-footer mt-4">

            <button type="button" class="btn-danger btn-lg text-end" data-dismiss="modal"><svg class="svg-inline--fa fa-times fa-w-11 ml-2" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg=""><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg><!-- <i class="ml-2 fa fa-times"></i> Font Awesome fontawesome.com --> الغاء</button>        </div>


      </div><!--endrow-->

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
   </div>
<!--end model show-->


     </div><!--end mainrow-->
    </div> <!--end container-->




</div>



@push('scripts')

<script>


$(function(){

 $('#modal-role,#modal-showdes').on('hidden.bs.modal',function () {
     livewire.emit('getval');

  });
window.addEventListener('add',function(event){
$("#modal-role").modal("hide");
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
/*
Swal.fire({
position: 'top-start',
icon: 'success',
title: event.detail.message,
showConfirmButton: false,
timer: 3000
})*/
})
window.addEventListener('show-model',function(){
$("#modal-role").modal("show");
});

window.addEventListener("getconfirm",function(event){
   Swal.fire({
   title: event.detail.title,
   text: event.detail.message,
   icon: 'warning',
   showCancelButton: true,
   confirmButtonColor: '#28a745',
   cancelButtonColor: '#d33',
   confirmButtonText: 'نعم , اريد الحذف !'
 }).then((result) => {
   if (result.isConfirmed) {

     livewire.emit('delete')
   }
 })
})

window.addEventListener("getdel",function(event){
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
/*  Swal.fire({
position: 'top-start',
icon: 'success',
title: event.detail.message,
showConfirmButton: false,
timer: 3000
})*/
});
});

</script>
@endpush
