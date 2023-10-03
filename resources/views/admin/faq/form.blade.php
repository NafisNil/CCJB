
                @include('admin.sessionMsg')
        
                <div class="card-body">

                 




                <div class="form-group">
                  <label for="exampleInputEmail1">Question <span style="color:red" >*</span></label>
                 <textarea name="question" id="general" cols="30" rows="10" class="form-control" >{!!old('question',@$edit->question)!!}</textarea>
                
                 
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Answer <span style="color:red" >*</span></label>
                 <textarea name="answer" id="general" cols="30" rows="10" class="form-control" >{!!old('answer',@$edit->answer)!!}</textarea>
                
                 
                </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>


                <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
                <script>
                  CKEDITOR.replace( 'question' );
          </script>
                          <script>
                            CKEDITOR.replace( 'answer' );
                    </script>