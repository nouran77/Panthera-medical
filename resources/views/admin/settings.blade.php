@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-toggle/css/bootstrap-toggle.css') }}">
@endsection

@section('content')

    <div class="col-md-6">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <span class="panel-title h3">Price Settings</span>
            </div>
            <div class="panel-body">
                <form method="POST" class="form-vertical" id="add-settings">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label style="font-weight: bold" class="control-label"> Price Available  </label>
                        {{--<label class="radio-inline" for="yes">--}}
                        {{--<input type="radio" name="available" id="yes" value="1" @if($settings->available === 1) checked @endif> Yes--}}
                        {{--</label>--}}
                        {{--<label class="radio-inline" for="no">--}}
                        {{--<input type="radio" name="available" id="no" value="0" @if($settings->available === 0) checked @endif> No--}}
                        {{--</label>--}}
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" data-toggle="toggle" name="available" value="1" @if($settings->available === 1) checked   @endif>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('plugins/bootstrap-toggle/js/bootstrap-toggle.js') }}"></script>
    <script>
        $("form#add-settings").on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: 'postPriceSettings',
                data: $(this).serialize(),
                type: "POST",
                success: function(response) {
//                    console.log(response);
                    window.location.reload();
                },
                error: function(response) {
                    var errors = response.responseJSON;
                    $.each(errors, function(name, error) {
                    });
                },
                beforeSend: function() {
                }
            });
        });
    </script>
@endsection