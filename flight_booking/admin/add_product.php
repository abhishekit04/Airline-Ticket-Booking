<?php 
  include_once('connect.php');
include('nav.php');
   $user_id=$_SESSION['user_id'];
 ?>
     <script src="ckediter/ckeditor.js"></script>
        <!-- add in nav -->
      <link rel="stylesheet" href="multi_image_uploader/dist/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="multi_image_uploader/dist/css/styles.css">
    <!-----( Add Jquery here )----->
    <script src="multi_image_uploader/dist/assets/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
    <script src="multi_image_uploader/dist/assets/jquery-file-upload/js/jquery.iframe-transport.js"></script>
    <script src="multi_image_uploader/dist/assets/jquery-file-upload/js/jquery.fileupload.js"></script>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <div class="h5 text-primary"><b>Add Product:</b></div>
                                    </div>
                                    <div class="col-sm-1">
                                        <a href="product_list.php" class="btn btn-sm btn-primary col"><i class="fa fa-plus"></i> List</a>
                                    </div>
                                         </div>
                                         <hr>
                                         <?php
                                         $q=mysqli_query($con,"SELECT `product_code` FROM `product`  order by id DESC LIMIT 1");
                                           $a=mysqli_fetch_array($q);
                                           $last_code=$a["product_code"];
                                           if(empty($last_code)){
                                           $emp_id="Pid-0000001";
                                       }
                                         else{
                                           $idd=str_replace("Pid-","",$last_code);
                                           $id1=str_pad($idd + 1,7,0,STR_PAD_LEFT);
                                           $emp_id="Pid-".$id1;
                                       }
                                         ?>
                                        <form method="post" action="back.php" enctype="multipart/form-data" id='divid'>
                                            <!-- start -->
                                            <div class="form-group row">
                                                <label class="col-sm-2 "><b>Product code:<span class='text-danger'>*</span></b></label>
                                                    <div class="col-sm-10">
                                                     <input type="text" name="product_code" id="product_code" class="form-control   text-dark  border-primary" autocomplete="off" required value="<?php echo $emp_id ?>" readonly>
                                                    </div>
                                             </div>
                                             <div class="form-group row">
                                                <label class="col-sm-2 "><b>Product Name:<span class='text-danger'>*</span></b></label>
                                                    <div class="col-sm-10">
                                                     <input type="text" name="product_name" id="product_name" class="form-control   text-dark  border-primary" autocomplete="off" required>
                                                    </div>
                                             </div>
                                             <div class="form-group row">
                                                <label class="col-sm-2 "><b>Featured product:<span class='text-danger'>*</span></b></label>
                                                    <div class="col-sm-10">
                                                        <select  name="featured_product" id="featured_product" class="form-control   text-dark  border-primary" autocomplete="off" required>
                                                            <option value="">Select</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                             </div>
                                             <div class="form-group row">
                                                <label class="col-sm-2 "><b>Product category:<span class='text-danger'>*</span></b></label>
                                                    <div class="col-sm-10">
                                                        <select name="product_category" id="product_category" class="form-control   text-dark  border-primary" autocomplete="off" required>
                                                            <option value="">Select Category</option>
                                                             <?php
                                                        $q=mysqli_query($con,"SELECT * FROM `category`");
                                                        while($a=mysqli_fetch_array($q)){
                                                            ?>
                                                            <option value="<?php echo $a[id]?>"><?php echo $a[category]?></option>
                                                           <?php
                                                        }
                                                        ?>
                                                        </select>
                                                    </div>
                                             </div>
                                             <div class="form-group row">
                                                <label class="col-sm-2 "><b>Featured image:<span class='text-danger'>* <small>size: 1200 X 980px</small></span></b></label>
                                                    <div class="col-sm-10">
                                                     <input type="file" name="featured_image" id="featured_image" class="form-control   text-dark  border-primary" autocomplete="off" required accept=".jpeg,.jpg,.png,.webp"   onchange='return fileValidation()'>
                                                    </div>
                                             </div>
                                             <div class="form-group row">
                                                <label class="col-sm-2 "><b>Meta title:</b></label>
                                                    <div class="col-sm-10">
                                                     <input type="text" name="meta_title" id="meta_title" class="form-control   text-dark  border-primary" autocomplete="off" >
                                                    </div>
                                             </div>
                                             <div class="form-group row">
                                                <label class="col-sm-2 "><b>Meta keyword:</b></label>
                                                    <div class="col-sm-10">
                                                     <input type="text" name="meta_keyword" id="meta_keyword" class="form-control   text-dark  border-primary" autocomplete="off" >
                                                    </div>
                                             </div>
                                             <div class="form-group row">
                                                <label class="col-sm-2 "><b>Meta description:</b></label>
                                                    <div class="col-sm-10">
                                                     <input type="text" name="meta_description" id="meta_description" class="form-control   text-dark  border-primary" autocomplete="off" >
                                                    </div>
                                             </div>
                                             <div class="form-group row">
                                                <label class="col-sm-2 "><b>Product price:<span class='text-danger'>*</span></b></label>
                                                    <div class="col-sm-10">
                                                        <select name="product_price" id="product_price" class="form-control   text-dark  border-primary" autocomplete="off" required onchange="price()">
                                                            <option value="">Select</option>
                                                            <option value="Fixed">Fixed</option>
                                                            <option value="Variable">Variable</option>
                                                        </select>
                                                    </div>
                                             </div>
                                             <div class="form-group row" id="price" style="display: none;">
                                                <label class="col-sm-2 "><b>Selling price:<span class='text-danger'>*</span></b></label>
                                                    <div class="col-sm-10">
                                                     <input type="number" name="selling_price" id="selling_price" class="form-control   text-dark  border-primary" autocomplete="off"  >
                                                    </div>
                                             </div>
                                             <div class="form-group row" id="unit" style="display: none;">
                                                <label class="col-sm-2 "><b>Units<span class='text-danger'>*</span></b></label>
                                                    <div class="col-sm-10">
                                                     <input type="text" name="unit" id="unit" class="form-control   text-dark  border-primary" autocomplete="off"  >
                                                    </div>
                                             </div>
                                             <div class="form-group row">
                                                <label class="col-sm-2 "><b>Product short description:<span class='text-danger'>*</span></b></label>
                                                    <div class="col-sm-10">
                                                        <textarea name="product_short_description" id="product_short_description" class="form-control   text-dark  border-primary" autocomplete="off" required></textarea>
                                                    </div>
                                             </div>
                                             <div class="form-group row">
                                                <label class="col-sm-2 "><b>Product full desciption:<span class='text-danger'>*</span></b></label>
                                                    <div class="col-sm-10">
                                                        <textarea name="product_full_desciption" id="product_full_desciption" class="form-control   text-dark  border-primary" autocomplete="off" required></textarea>
                                                    </div>
                                             </div>
                                             <div class="form-group row d-none">
                                                <label class="col-sm-2 "><b>Multi images:</b></label>
                                                    <div class="col-sm-10">
                                                     <input  name="multi_images"  id="fileupload" type="file"  accept="image/x-png, image/gif, image/jpeg, image/webp" multiple >
                                                          <div id="uploaded_images"></div>
                                                    </div>
                                             </div>
                                             <hr>
                                             <div class="col-sm-2 form-group">
                                                <button type="submit" name="actionajax" value ="save_product" class="btn btn-success  col form-group"><i class='fa fa-save'></i> Save</button>
                                         </div>
                                            <!-- end -->
                                        </form>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
<?php 
    include_once('footer.php');
    ?>
    <script>
        CKEDITOR.replace( 'product_short_description',{
            filebrowserUploadUrl:'upload.php'
        });
         CKEDITOR.replace( 'product_full_desciption',{
            filebrowserUploadUrl:'upload.php'
        });
    // CKEDITOR.instances['field_name'].setData(msg);  //send data form ajax
         function price(){
            var val=$('#product_price').val();
            if(val=="Fixed"){
                 $('#unit,#price').show();
            }
            else{
                $('#unit,#price').hide();
                document.getElementById('selling_price').value="";
                document.getElementById('unit').value="";
            }
         }
</script>
    <!-- input tabs -->
           <script>
            $(function () {
                'use strict';
                var url = 'multi_upload.php';
                $('#fileupload').fileupload({
                    url: url,
                    dataType: 'html',
                    done: function (e, data) {
                        if(data['result'] == 'FAILED'){
                            alert('Invalid File');
                        }else{
                            $('#uploaded_images').append('<div class="uploaded_image"> <input type="text" value="'+data['result']+'" name="uploaded_image_name[]" id="uploaded_image_name" hidden> <img src="multi_images/'+data['result']+'" /> <a href="javascript:void(0)" id="'+data['result']+'" class="img_rmv btn btn-danger" ><i class="fa fa-times-circle" style="font-size:48px;color:red"></i></a> </div>');
                        }
                    },
                }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');
            });
            $( "#uploaded_images" ).on( "click", ".img_rmv", function() {$(this).parent().remove();$.post('multi_upload.php','actionajax=removeimg&name='+this.id,function(){})
    });
            function fileValidation(){
                var fileInput = document.getElementById('featured_image');  
                var fileSize = (fileInput.files[0].size / 1024 / 1024).toFixed(2);
                if(fileSize >= 2){    //change file size (2MB)
                    alert('File size must be Maximum file size 2MB.');
                    fileInput.value = '';
                    return false;
                }
            }
</script>