@extends('layouts.master')
@section('title')Unikit @endsection
@section('css')
<link href="{{ URL::asset('assets/plugins/prettify/prettify.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('body-start') <body id="body" class="dark-sidebar"> @endsection
@section('content')
<!-- page title-->
@section('breadcrumb')
@component('components.breadcrumb')
@slot('li_1') Advanced UI @endslot
@slot('title') Highlight @endslot
@endcomponent
@endsection

<div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">HTML Highlight</h4>
                                <p class="text-muted mb-0">It will automatically be pretty-printed.</p>
                            </div>
                            <!--end card-header-->
                            <div class="card-body">
                                <pre class="prettyprint lang-html escape">
                                    <div class="card-header">
                                        <h4 class="card-title">Clipboard Examples of Textarea</h4>
                                        <p class="text-muted mb-0">Textarea example of clipboard</p>
                                    </div>
                                </pre>
                            </div>
                            <!---end card-body-->
                        </div>
                        <!--end card-->


                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Css Highlight</h4>
                                <p class="text-muted mb-0">It will automatically be pretty-printed.</p>
                            </div>
                            <!--end card-header-->
                            <div class="card-body">
                                <pre class="prettyprint lang-css escape">
                                    .example {
                                    font-family: Georgia, Times, serif;
                                    color: #555;
                                    text-align: center;
                                    }
                                </pre>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->

@endsection
@section('script')

<!-- Javascript -->
<script src="{{ URL::asset('assets/plugins/prettify/run_prettify.js') }}"></script>
<script src="{{ URL::asset('assets/js/app.js') }}"></script>
<script>
        var entityMap = {
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#39;',
            '/': '&#x2F;',
            '`': '&#x60;',
            '=': '&#x3D;'
        };
        function escapeHtml(string) {
            return String(string).replace(/[&<>"'`=\/]/g, function (s) {
                return entityMap[s];
            });
        }

        for (e of document.getElementsByClassName('escape')) {
            e.innerHTML = escapeHtml(e.innerHTML).trim();
        }
    </script>
@endsection
@section('body-end')</body> @endsection
