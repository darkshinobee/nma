@extends('master')
@section('title', 'Post Article')
@section('content')

<div class="card text-white bg-dark">
  <div class="card-body">
    <h2 class="text-center">Post Article</h2>
      <div class="row">
        <div class="col-8 offset-2">
          <form class="" action="index.html" method="post">

            <input type="text" name="title" class="form-control" placeholder="Enter Title Here"><br>

            <div class="row">
              <div class="form-check col-6">
                <label for="write_article">Compose Article</label>
                <input type="radio" name="article_type" id="write_article" class="form-check-label" value="">
              </div>
              <div class="form-check col-6">
                <label for="upload_article">Upload PDF</label>
                <input type="radio" name="article_type" id="upload_article" class="form-check-label" value="">
              </div>
            </div>

            <div id="write_div">
              <textarea name="article" class="form-control" rows="8" cols="80" placeholder="Compose Article Here"></textarea>
            </div><br>

            <div id="upload_div">
              <input type="file" name="upload_file" accept="application/pdf" class="form-control">
            </div>

            <br>
            <div class="row">
              <div class="col-8 offset-2">
                <button type="button" name="submit_create" class="btn btn-block btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
  </div>
</div>
@stop
