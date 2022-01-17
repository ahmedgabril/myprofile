<div>


    <div class="container">

     <div class="row mb-4">
         <div class="col-sm-4">
           <h1 class="m-0">اداره المهارات</h1>
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



                       </div><!--enddivclassaction-->
                   </div>
                   @can('اضافه مهاره')
                 <div class=" col-sm-2 form-group" style="margin-top:12px;padding:4px">
                     <button type="button"  wire:click.prevent="showmodel"
                     class="btn btn-block btn-outline-success text-white"><i class="fas fa-plus-circle"></i>
                      اضافه مهاره </button>
                 </div>
                   @endcan

                   @can('مهاره كنترول')
                     <div class=" col-sm-4"
                     style="margin-top:16px; border-right: 1px !important;">

                       <input class="form-control form-control-navbar"
                       wire:model.debounce.200ms="searsh"
                       type="search" placeholder="بحث" aria-label="Search">

                     </div>






           <div class="col-sm-3 form-group " style="margin-top:16px" wire:ignore>

             <select class="form-select form-select-md  d-inline-flex" wire:model="sortDirections">
                 <option value="asc" {{$sortDirections == 'asc'? 'selected':'' }}>من الاقدم </option>
                 <option value="desc"  {{ $sortDirections == 'desc'? 'selected':'' }}>من الاحدث  </option>

               </select>
             </div>

             <div class="col-sm-2 form-group" style="margin-top:16px" wire:ignore>

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
                 @endcan
                </div> <!-- /.end-row-card-header -->
             </div>
             <!-- /.card-header -->
              <x-spaner wire:loading  wire:target="pagenate,sortDirections"/>
             <div class="card-body"wire:loading.remove  wire:target="pagenate,sortDirections"  style="display: block;">

               <div class="row">

                 <table class="table  table-striped table-hover">
                     <thead>
                       <tr>
                         <th>ID</th>
                         <th>اسم المهاره</th>
                         <th>التقيم</th>

                         <th> تاريخ الانشاء</th>

                         <th><i class="fas fa-wrench"></i></th>

                       </tr>
                     </thead>
                     <tbody>

                         @forelse($data as $index => $getdata )
                       <tr>

                         <td style="width: 40px">{{ $data->firstItem() + $index}}</td>
                         <td>{{ $getdata->name }}</td>

                         <td><span class="badge badge-success">{{ $getdata->rate }} %</span></td>
                         <td style="display: none">{{ $getpaginateindex = $index }}</td>


                         <td>{{ $getdata->created_at?$getdata->created_at->format('Y/m/d'):'unknown' }}</td>
                          <td>


                             <div class="col-12">
                                 <div class="card-tools">


                                     <div class="btn-group">
                                       <button type="button"style="color:#525f6c" class="btn btn-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                          <i class="fas fa-cogs"></i>

                                     </button>

                                       <div class="dropdown-menu dropdown-menu-right" role="menu" style="">
                                         @can('تعديل مهاره')
                                         <a href="#"  class="dropdown-item" wire:click.prevent="edit({{$getdata->id}})" >
                                            <i style="margin-left: 4px;" class="fa fa-edit text-success">
                                                </i>
                                            تعديل البيانات
                                            </a>
                                         @endcan
                                         @can('حذف مهاره')
                                         <a href="#" class="dropdown-item" wire:click.prevent="getcurantid({{ $getdata->id }})">
                                            <i style="margin-left: 4px;" class="fas fa-trash text-danger"></i>
                                        حذف البيانات
                                        </a>
                                         @endcan




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
 <div class=" modal-dialog modal-fullscreen-sm-down">
   <div class="modal-content">
     <div class="modal-header">
       @if (!$showmodelf)
       <h4 class="modal-title">اضافه  مهاره  جديده</h4>
       @else
       <h4 class="modal-title">تحديث بيانات مهاره </h4>

       @endif

       <button  class = "model-close"type="button"data-bs-dismiss="modal" aria-label="Close" >
         <span aria-hidden="true">×</span>
       </button>
     </div>
     <div class="modal-body">
         <form  wire:submit.prevent="{{!$showmodelf ? 'add' :'updateone'}}" novalidate="novalidate">

        <div class="row">
              <div class="col-sm-12 form-group">
              <label for="">اسم المهاره</label>
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
           <div class="col-sm-12 form-group">
             <label >التقيم</label>
               <input type="number"  class="form-control @error("form.rate") is-invalid @enderror"
               aria-describedby="exampleInputEmail1-error"
                      autocomplete="off"
                      aria-invalid="true"
                wire:model="form.rate" placeholder="(اجبارى*)"/>


               @error('form.rate')
              <div class="invalid-feedback">
               {{$message}}
             </div>

              @enderror

          </div>







     <div class="modal-footer mt-4">
       @if (!$showmodelf)
       <button type="submit"  class="btn btn-primary"> <i class="ml-2 fa fa-save"></i> حفظ</button>
       @else
       <button type="submit"  class="btn btn-primary"> <i class="ml-2 fa fa-save"></i>    حفظ التغيرات</button>

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

<!--end model show-->


     </div><!--end mainrow-->
    </div> <!--end container-->




</div>



@push('scripts')

<script>


$(function(){

 $('#modal-role').on('hidden.bs.modal',function () {
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
