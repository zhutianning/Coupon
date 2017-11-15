


    <div class="white-box">
                <div class="row">
                    <!-- <div class="white-box"> -->
                    <form class="form-horizontal form-material">

                        <div class="form-group">
                            <label for="example-email" class="col-md-12">店家名稱</label>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control','style'=>'width:200px')) !!}<br>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="example-email" class="col-md-12">電子郵箱</label>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                                <br>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">聯繫電話</label>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                {!! Form::text('phone', null, array('placeholder' => 'Phone','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">店家地址</label>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                {!! Form::text('address', null, array('placeholder' => 'Address','class' => 'form-control','style'=>'width:400px')) !!}
                                <br>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-lg-6 col-md-6 col-sm-12 col-xs-12">商家介紹</label>
                            <div class="ccol-lg-6 col-md-6 col-sm-12 col-xs-12">
                                {!! Form::textarea('store_intro', null, array('placeholder' => 'store_intro','class' => 'form-control','style'=>'height:150px')) !!}<br>
                                <br>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <button type="submit" class="btn btn-success">提交</button>
                            </div>
                        </div>

                    </form>
                    <!-- </div> -->
                </div>

     </div>
