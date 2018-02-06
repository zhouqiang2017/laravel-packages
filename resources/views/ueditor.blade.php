@extends('layouts.app')

@section('content')
{!! we_css() !!}
{!! editor_css() !!}
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">EDITOR</div>
                    <div class="panel-body">
                        <h2>laravel-wangEditor</h2>
                        <textarea class="form-control we-container" name="content" id="wangeditor" style="display:none;" cols="5">
                            <h1>wangEditor for Laravel</h1>
                            <p>laravel-wangEditor</p>
                        </textarea>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Mark-down</div>
                    <div class="panel-body">
                        <div id="mdeditor">
                              <textarea class="form-control" name="content" style="display:none;">
                                    # markdown for Laravel
                                    >   laravel-markdown
                              </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{!! we_js() !!}
{!! we_config('wangeditor') !!}
{!! editor_js() !!}
{!! editor_config('mdeditor') !!}
@endsection