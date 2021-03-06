@extends('default.home')

  @section('content')

  <div style="height:120px;"></div>
  <div class="row">
    <div class="col-md-offset-1 col-md-4">
      <div class="row">
        <button class="en_btn col-md-offset-1 btn btn-primary">انگلیسی</button>
        <button class="pe_btn btn btn-primary">فارسی</button>
      </div>
      <div class="row">
        <div style="height:20px;"></div>

          <input type="hidden" id="lan" name="lan">
          {{ csrf_field() }}
          <textarea name="word" id="word" rows="6" cols="50" class="align-left">{{$word}}</textarea>
      </div>

    </div>
    <div class="col-md-2">
      <div style="height:90px;"></div>
      <button  class="translate col-md-offset-1 btn btn-primary" id="translate">
        ترجمه به انگلیسی
      </button>

    </div>
    <div class="col-md-5">
      <div style="height:50px;"></div>
        <div class="row">
          <div class="word" id="search">
            {!!$search!!}
          </div>
        </div>
    </div>

    </div>
  @stop
