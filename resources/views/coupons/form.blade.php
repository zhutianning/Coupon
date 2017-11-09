 
 <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
</div>



<div id="wrapper">
            <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">
                <li>
                    <form role="search" class="app-search hidden-xs">
                    </form>
                </li>
            </ul>
                     
        
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">

<div class="col-md-8 col-xs-12">
    <div class="white-box">
        <form class="form-horizontal form-material">
        
            <div class="form-group">
                <label for="example-email" class="col-md-12">折價卷內容</label>
                <div class="col-md-12">
                    {!! Form::textarea('content', null, array('placeholder' => 'Content','class' => 'form-control form-control-line')) !!}<br>
                </div>
            </div>

            <div class="form-group">
                <label for="example-email" class="col-md-12">數量</label>
                <div class="col-md-12">
                    {!! Form::text('amount', null, array('placeholder' => 'Amount','class' => 'form-control form-control-line','style'=>'height:50px')) !!}
                    <br>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-12">發行期限</label>
                <div class="col-md-12">
                    {!! Form::text('time', null, array('placeholder' => 'Time','class' => 'form-control','style'=>'height:50px')) !!}<br>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-12">發行時間</label>
                <div class="col-md-12">
                    {!! Form::text('created_at', null, array('placeholder' => 'created_at','class' => 'form-control form-control-line','style'=>'height:50px')) !!}<br>
                    <br>
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
</div>
   