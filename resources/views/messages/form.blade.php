



<div id="wrapper">
                  
<div id="page-wrapper">
    <div class="container-fluid">
        <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">
                <li>
                    <form role="search" class="app-search hidden-xs">
                    </form>
                </li>
            </ul>
        <div class="row">

            <div class="col-md-8 col-xs-12">
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
    </div>
</div>
</div>