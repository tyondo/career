@extends(config('tcareer.views.layouts.master'))
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Careers</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12">

                        <div class="x_panel">
                            <div class="x_title">
                                <h2><i class="fa fa-align-left"></i> Careers</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <!-- start accordion -->
                                <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                    @if(isset($careers))
                                        @foreach($careers as $career)
                                            <div class="panel">
                                                <a class="panel-heading" role="tab" id="heading{{$career->id}}" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$career->id}}" aria-expanded="false" aria-controls="collapse{{$career->id}}">
                                                    <h4 class="panel-title">{{$career->career_title}}</h4>
                                                </a>
                                                <div id="collapse{{$career->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$career->id}}">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                {!! $career->career_description !!}
                                                                <br /> <br>
                                                                <ul class="list-unstyled">
                                                                    <li>
                                                                        <p> Status: {{$career->career_status}}</p>
                                                                    </li>
                                                                    <li>
                                                                        <p> Deadline: {{$career->career_deadline ? $career->career_deadline: 'not set'}}</p>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                      @endif
                                <!-- end of accordion -->


                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
