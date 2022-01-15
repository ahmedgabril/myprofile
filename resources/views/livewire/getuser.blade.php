<div>


       <div class="container">

        <div class="row mb-4">
            <div class="col-sm-4">
              <h1 class="m-0">اداره المستخدمين</h1>
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



                    @can('اضافه مستخدم')
                    <div class=" col-sm-2 form-group" style="margin-top:12px;padding:4px">
                        <button type="button"  wire:click.prevent="showmodel"
                        class="btn btn-block btn-outline-success text-white"><i class="fas fa-plus-circle"></i>
                         اضافه مستخدم </button>
                    </div>
                    @endcan

                    @can('مستخدم كنترول')


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
                         <option >5</option>
                        <option >10</option>
                        <option> 20</option>
                        <option> 30</option>
                        <option> 50</option>
                        <option> 70</option>
                        <option> 100</option>
                        <option> 150</option>


                      </select>
                    </div>
                    @endcan
                   </div> <!-- /.end-row-card-header -->
                </div>
                <!-- /.card-header -->
           <x-spaner wire:loading wire:target="pagenate,sortDirections"/>
                <div class="card-body" wire:loading.remove wire:target="pagenate,sortDirections" style="display: block;">
                  <div class="row" >

                    <table class="table  table-striped table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th> اسم المستخدم</th>
                            <th> تاريخ الانشاء</th>




                            <th><i class="fas fa-wrench"></i></th>

                          </tr>
                        </thead>
                        <tbody>

                            @forelse($data as $index => $getdata )
                          <tr>

                            <td style="width: 40px">{{ $data->firstItem() + $index}}</td>
                            <td>{{ $getdata->name }}</td>


                            <td >{{ $getdata->created_at?$getdata->created_at->format('Y/m/d'):'UnKnowen' }}</td>



                            <td style="display: none">{{ $getpaginateindex = $index }}</td>

                             <td>

                                <div class="col-12">
                                    <div class="card-tools">


                                        <div class="btn-group">
                                          <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                             <i class="fas fa-cogs"></i>

                                        </button>

                                          <div class="dropdown-menu dropdown-menu-right" role="menu" >
                                            <a href="#"   class="dropdown-item" data-target="#modal-showdes" data-toggle="modal" wire:click.prevent="showdes({{$getdata->id}})" >
                                                <i  class="fa fa-eye text-primary"></i>
                                                 عرض جميع البيانات
                                            </a>
                                                  @if($user !==  $getdata->name)
                                                    @can('تعديل مستخدم')




                                                    <a href="#"  class="dropdown-item" wire:click.prevent="edit({{$getdata->id}})" >
                                                        <i style="margin-left: 4px;" class="fa fa-edit text-success">
                                                            </i>
                                                        تعديل البيانات
                                                        </a>
                                                    @endcan

                                                @can('حذف مستخدم')

                                                <a href="#" class="dropdown-item" wire:click.prevent="getcurantid({{ $getdata->id }})">
                                                    <i style="margin-left: 4px;" class="fas fa-trash text-danger"></i>
                                                حذف البيانات
                                                </a>

                                                @endcan

                                                 @endif
                                          </div>
                                        </div>

                                      </div><!--enddivclassaction-->

                                  </div>


                              </td>
                          </tr>
                          @empty
                          <tr class="text-center" style="background-color: rgb(235 79 79)!important;">
                          <td colspan="5" style="height:33px">
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
                <div class="card-footer"  wire:loading.remove wire:target="pagenate,sortDirections" style="overflow: auto;">
                  <div class="row" >

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
  <div class=" modal fade " wire:ignore.self id="modal-role"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class=" modal-dialog modal-fullscreen-sm-down">
      <div class="modal-content">
        <div class="modal-header">
          @if (!$showmodelf)
          <h4 class="modal-title">اضافه  مستخدم  جديده</h4>
          @else
          <h4 class="modal-title">تحديث بيانات مستخدم </h4>

          @endif

          <button  class = "model-close"type="button"data-bs-dismiss="modal" aria-label="Close" >
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <form  wire:submit.prevent="{{!$showmodelf ? 'add' :'updateone'}}" novalidate="novalidate">

           <div class="row">
                 <div class="col-sm-6 form-group">
                 <label for="">اسم المستخدم</label>
                   <input class="form-control @error("form.name")  is-invalid

                  @enderror"  type="text"
                   wire:model="form.name"

                    placeholder="(اجبارى*)اسم المستخدم"/>
                   @error('form.name')
                  <div class="invalid-feedback">
                   {{$message}}
                 </div>

                  @enderror

              </div>
              <div class="col-sm-6 form-group">
                <label >البريد الالكترونى </label>
                  <input type="email"  name ="email" id="exampleInputEmail1"class="form-control @error("email") is-invalid @enderror"
                  aria-describedby="exampleInputEmail1-error"
                         autocomplete="off"
                         aria-invalid="true"
                   wire:model="email" placeholder="(اجبارى*)"/>


                  @error('email')
                 <div class="invalid-feedback">
                  {{$message}}
                </div>

                 @enderror

             </div>
             @if (!$showmodelf)
             <div class="col-sm-6 form-group">
                <label> كلمه السر </label>
                  <input class="form-control @error("form.password")  is-invalid
                 @enderror"
                 type="password" wire:model="form.password"

                  placeholder="{{!$showmodelf? '(اجبارى*)':''}}"/>
                  @error('form.password')
                 <div class="invalid-feedback">
                  {{$message}}
                </div>

                 @enderror

             </div>

             @endif



             <div class="col-sm-6 form-group">
                <label > حاله الحساب </label>
                   <div class="@error("form.status")  is-invalid @enderror">

                    <select class="form-control"style="padding-top:1px" wire:model="form.status">
                        <option >اختر حاله الحساب</option>

                        <option value="1">

                            مفعل
                        </option>
                        <option value="0">
                          غير مفعل

                    </option>


                    </select>
                   </div>

                  @error('form.status')
                 <div class="invalid-feedback">
                  {{$message}}
                </div>

                 @enderror

             </div>

             <div class=" col-sm-12 form-group" >

                <div class=" col-12  pl-0 mb-2 text-bold text-primary">
                    الوظائف
                </div>

                 @foreach ($getrole as $index=> $item)
                 <div class=" col-6  d-inline pl-0">
                    <label for="{{$index}}" style="cursor: pointer">
                        {{$item->name}}
                    </label>
                    <input  wire:model="rolename.{{$item->id}}"id="{{$index}}" value="{{$item->id}}" type="checkbox" style="margin: 5px;">

                  </div>
                 @endforeach

              </div>


        <div class="modal-footer">
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

        <div class="modal fade " wire:ignore.self id="modal-showdes" style="disply:none" aria-hidden="true">
            <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="modal-body">
            <form>

           <div class="row">
                 <div class="col-sm-4 form-group">
                 <label for="">اسم المستخدم</label>
                   <input class="form-control" type="text" readonly wire:model="form.name" placeholder="(اجبارى*)اسم المستخدم"/>

              </div>
              <div class="col-sm-4 form-group">
                <label >البريد الالكترونى </label>
                  <input  type="text"  name ="email" class="form-control"

                   readonly
                   wire:model="email"/>

             </div>




             <div class="col-sm-4 form-group">
                <label > حاله الحساب </label>
                   <div>
                    <div class='badge {{$form["status"] == 1 ?"badge-success":"badge-danger" }}'>{{$form["status"]== 1?"مفعل":"غير مفعل"}}</div>

                   </div>



             </div>

             <div class=" col-sm-12 form-group" >

                <div  class=" col-sm-12 text-center pl-0  mb-4 text-bold role">
                    <span> الوظائف الحاصل عليها هذا المستخدم</span>
                </div>
                <div class="row">
                 @foreach ($rolename as $index=> $item)

                    <div class="col-sm-4 ">

                        <span class="">
                         {{$index+1}} - {{$item}}
                         </span>

                  </div>
                 @endforeach

              </div>

              <div class=" col-sm-12 form-group" >

                <div class=" col-sm-12 text-center pl-0 get-title mb-4 text-bold role">
                    الصلاحيات الحاصل عليها هذا المستخدم
                </div>


                 <div class="row ">
                    @foreach ($getprem as $index=> $item)
                     <div class="col-sm-4 ">

                           <span class="">
                            {{$index+1}} - {{$item->name}}
                            </span>

                     </div>
                     @endforeach

                  </div>


              </div>

        <div class="justify-content-sm-center modal-footer">



          <button type="button" class="btn-danger" data-dismiss="modal"><i class="ml-2 fa fa-times"></i> الغاء</button>
        </div>


      </div><!--endrow-->
    </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
</div>
<!--model show description -->

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
