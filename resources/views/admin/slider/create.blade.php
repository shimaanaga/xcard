@extends('admin.layout.index',[
'title' => _i('Create Slider'),
'activePageName' => _i('Create Slider'),
] )

@section('content')

    <div class="card">
        <div class="card-header">
            <h5>{{ _i('create new slider') }}</h5>
        </div>
        <div class="card-block">
            {!! Form::open(['route' => 'sliders.store', 'method' => 'POST','class'=>'j-forms','id'=>'j-forms','files'=>true, 'data-parsley-validate']) !!}
                @csrf
                <div class="content">
                    <div class="divider-text gap-top-20 gap-bottom-45">
                        <span>{{ _i('create slider') }}</span>
                    </div>

                    <div class="row form-group">
                        <div class="col-lg-12">

                            <ul class="nav nav-tabs md-tabs" role="tablist">
                                @foreach($langs as $lang)
                                    <li class="nav-item">
                                        <a class="nav-link @if ($loop->first) active @endif" data-toggle="tab" href="#{{ $lang->locale }}" role="tab" aria-expanded="false">{{ $lang->title }}</a>
                                        <div class="slide"></div>
                                    </li>
                                @endforeach
                            </ul>

                            <div class="tab-content card-block">
                                @foreach($langs as $lang)
                                    <div class="tab-pane @if ($loop->first) active @endif" id="{{ $lang->locale }}" role="tabpanel" aria-expanded="false">
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label">{{ $lang->title }} {{ _i('Title') }}</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="{{ $lang->locale }}_title" class="form-control" placeholder="{{ $lang->title }} {{ _i('Title') }}" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label">{{ $lang->title }} {{ _i('Description') }}</label>
                                            <div class="col-sm-10">
                                                <textarea name="{{ $lang->locale }}_description" class="form-control" placeholder="{{ $lang->title }} {{ _i('Description') }}" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="divider-text gap-top-45 gap-bottom-45">
                        <span>{{ _i('media') }}</span>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ _i('image') }}</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control form-control-round" onchange="showImg(this)" name="image" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <img class="img-fluid pad" style="width: 150px"  id="image">
                        </div>
                    </div>

                    <div class="divider-text gap-top-45 gap-bottom-45">
                        <span>{{ _i('url') }}</span>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 control-label">{{ _i('url') }}</label>
                        <div class="col-sm-10">
                            <input type="text" name="url" class="form-control" placeholder="{{ _i('url') }}" required>
                        </div>
                    </div>

                    <div class="divider-text gap-top-45 gap-bottom-45">
                        <span>{{ _i('Publish') }}</span>
                    </div>

                    <div class="col-sm-12">
                        <div class="checkbox-fade fade-in-primary">
                            <label>
                                <input type="checkbox" name="publish" value="1">
                                <span class="cr float-right">
                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                </span>
                                <span class="mr-4">{{ _i('Publish') }}</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="footer">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary btn-outline-primary m-b-0">{{ _i('Save') }}</button>
                        </div>
                    </div>
                </div>

            {!! Form::close() !!}
        </div>
    </div>

@endsection

@push('js')

    <script type="text/javascript">
        function showImg(input) {
            var filereader = new FileReader();
            filereader.onload = (e) => {
                console.log(e);
                $('#image').attr('src', e.target.result).width(250).height(250);
            };
            console.log(input.files);
            filereader.readAsDataURL(input.files[0]);

        }
    </script>

@endpush
