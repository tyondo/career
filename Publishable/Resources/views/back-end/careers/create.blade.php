@extends(config('tcareer.views.layouts.master'))
@section('css')
@endsection
@section('content')
<div class="right_col" role="main">
<div class="row">
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
        <div class="page-title">
            <div class="pull-left">
                <h1 class="title">Add Career</h1>
            </div>
            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="#"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="{{route('musoni.product.index.list')}}">Career</a>
                    </li>
                    <li class="active">
                        <strong>Add Career</strong>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-body">
                {!! Form::open(['route' => 'tyondo.careers.store', 'method' => 'post', 'files' => true ]) !!}
                <div class="form-group">
                    <label class="form-label" for="field-1"> Career Title</label>
                    <span class="desc"></span>
                    <div class="controls">
                        {{ Form::text('career_title', null, ['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="field-5">Career Details</label>
                    <span class="desc"></span>
                    {{ Form::textarea('career_description', null, ['class' => 'form-control', 'id' => 'postBody']) }}
                    <br>
                </div>
                <div class="form-group">
                    <label class="form-label" for="field-5">Status</label>
                    <span class="desc"></span>
                    {{Form::select('career_status', ['draft' => 'Draft', 'active' => 'Active','deactivated' => 'Deactivate'], null, ['placeholder' => 'Select Status', 'class' => 'form-control'])}}
                </div>
                <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">
                    <div class="text-left">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn">Cancel</button>
                    </div>
                </div>
                {{Form::close() }}
            </div>
        </div>
    </div>
</div>
</div>
@endsection


@section('script')
    <script src="{{asset('vendor/tyondo/career/tinymce/js/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('vendor/tyondo/career/tinymce/js/tinymce/plugins/advlist/plugin.min.js')}}"></script>
    <script src="{{asset('vendor/tyondo/career/tinymce/js/tinymce/plugins/image/plugin.min.js')}}"></script>
    <script src="{{asset('vendor/tyondo/career/tinymce/js/tinymce/plugins/imagetools/plugin.min.js')}}"></script>
    <script src="{{asset('vendor/tyondo/career/tinymce/js/tinymce/plugins/table/plugin.min.js')}}"></script>
    <script src="{{asset('vendor/tyondo/career/tinymce/js/tinymce/plugins/fullscreen/plugin.min.js')}}"></script>

    <script>
        var route_prefix = "{{ url(config('lfm.prefix')) }}";
    </script>

    <script>
        var editor_config = {
            path_absolute : "",
            selector: '#postBody',
            theme: 'modern',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
            ],
            relative_urls: false,
            height: 129,
            toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons | codesample fullscreen',
            image_advtab: true,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + route_prefix + '?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };
        tinymce.init(editor_config);
    </script>

    <script>
        {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
    </script>
    <script>
        $('#lfm').filemanager('image', {prefix: route_prefix});
    </script>
@endsection
