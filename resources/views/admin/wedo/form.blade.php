
                @include('admin.sessionMsg')
        
                <div class="card-body">

                 




                <div class="form-group">
                  <label for="exampleInputEmail1">Title <span style="color:red" >*</span></label>
                  <input type="text" class="form-control" name="title" value="{!!old('title',@$edit->title)!!}">
                 
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Description <span style="color:red" >*</span></label>
                 <textarea name="desc" id="general" cols="30" rows="10" class="form-control" >{!!old('desc',@$edit->desc)!!}</textarea>
                
                 
                </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>


                <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
       
                          <script>
                            CKEDITOR.replace( 'desc' );
                    </script>