 <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('admin/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('admin/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script type="text/javascript">
feather.replace();
</script>
    <script src="{{ asset('admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
       <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('admin/plugins/table/datatable/datatables.js') }}"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('admin/plugins/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dashboard/dash_1.js') }}"></script>
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->


    @if(isset($page_name))
    @switch($page_name)

    @case('profile_question')
    <script type="text/javascript">
        
        $(document).on('change' , '.type' , function(){
         
         let type_id=$(this).val();
         if(type_id == 'Checkbox')
         {
            $('.options').show();
         }

        });


        $(document).on('click' , '.add_more' , function(){
        
         html=`<div class="row mt-3">
               <div class="col-lg-6 col-md-6 col-sm-6">
               <input type="text" name="options[]" class="form-control" placeholder="Option">
               </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
              <button type="button" class="btn btn-danger remove_option" color: white;"> Remove</button>
               </div>
               </div>`;

               $('.multiple_options').append(html);

        });
    </script>

        <script type="text/javascript">
    $(document).on('click','.remove_option',function(){
$(this).closest('.row').remove();
})
    </script>
    @break

    @case('subscription_list')

     <script type="text/javascript">
        $(document).on('click' , '.view_options' , function(){
         
         let id= $(this).attr('data-id');
         $('#'+id).modal('show');

        }); 
     </script>
     
    @break

    @endswitch
    @endif