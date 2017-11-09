
    <div class="white-box">

            <div class="row">
            <form class="form-horizontal form-material">

            <div class="form-group">
                <label for="example-email" class="col-md-12">標題</label>
                <div class="col-md-12">
                {!! Form::text('title', null, array('placeholder' => 'title','class' => 'form-control')) !!}<br>
                </div>
                </div>

            <div class="form-group">
                <label for="example-email" class="col-md-12">內容</label>
                <div class="col-md-12">
                {!! Form::textarea('content', null, array('placeholder' => 'Content','class' => 'form-control','style'=>'height:150px')) !!}<br>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-success">提交</button>
                </div>
            </div>
            </form>
            </div>
    </div>
