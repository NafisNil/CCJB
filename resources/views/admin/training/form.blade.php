
                @include('admin.sessionMsg')
                <div class="card-body">

        

                <div class="form-group">
                  <label for="exampleInputEmail1">Title <span style="color:red" >*</span></label>
                 
                  <input type="text" class="form-control" name="title" value="{!!old('title',@$edit->title)!!}">
                 
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Description <span style="color:red" >*</span></label>
                 <textarea name="description" cols="30" rows="10" class="form-control" >{!!old('description',@$edit->description)!!}</textarea>

                </div>

                <div class="form-group">
                  <label for="exampleInputFile">PDF</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="file" class="custom-file-input"  id="image2">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
            
                  </div>
                </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
   
   