
                @include('admin.sessionMsg')
        
                <div class="card-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Title <span style="color:red" >*</span></label>
                 <textarea name="description" id="general" cols="30" rows="10" class="form-control" >{!!old('description',@$edit->description)!!}</textarea>
                
                 
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">description <span style="color:red" >*</span></label>
                 <textarea name="sub_desc" id="general" cols="30" rows="10" class="form-control" >{!!old('sub_desc',@$edit->sub_desc)!!}</textarea>
                
                 
                </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>


                <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
                <script>
                  CKEDITOR.replace( 'description' );
          </script>
                          <script>
                            CKEDITOR.replace( 'sub_desc' );
                    </script>