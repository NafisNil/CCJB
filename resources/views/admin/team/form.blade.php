
                @include('admin.sessionMsg')
                <div class="card-body">

                  <div class="form-group row">
                    <label for="Image" class="col-md-4 col-form-label text-md-right"></label>
                    <div class="col-md-6">
                    
                    <img id="showImage" src="{{(!empty($edit->logo))?URL::to('storage/'.$edit->logo):URL::to('image/no_image.png')}}"  style="widows: inherit; width:120px; height:120px; border:1px solid #042b3d" alt="">
                  </div>
                </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image </label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="logo" class="custom-file-input"  id="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                     
                    </div>
                  </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Name <span style="color:red" >*</span></label>
                 
                  <input type="text" class="form-control" name="name" value="{!!old('name',@$edit->name)!!}">
                 
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Designation </label>
                 
                  <input type="text" class="form-control" name="designation" value="{!!old('designation',@$edit->designation)!!}">
                 
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Type</label>
                 
                  <select class="form-control" name="type" id="dropdown">
                    
                    <option>Select Type</option>
                      
                   
                      <option value="Team Member" {{ ( "Team Member" == @$edit->type) ? 'selected' : '' }}> 
                        Team Member
                      </option>
                      <option value="Executive Member" {{ ( "Executive Member" == @$edit->type) ? 'selected' : '' }}> 
                          Executive Member

                      </option>
                   
                  </select>
                 
                </div>

               

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
