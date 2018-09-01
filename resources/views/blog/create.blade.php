@extends('master')
@section('title', 'Post Article')
@section('content')

<div class="card text-white bg-dark">
  <div class="card-body">
    <h2 class="text-center">Post Article</h2>
      <div class="row" id="app">
        <div class="col-8 offset-2">
          <form action="" enctype="multipart/form-data" method="post">
            {{ csrf_field() }}

            <input type="text" name="title" class="form-control" placeholder="Enter Title Here" required><br>

            <div class="row">
              <div class="form-check col-6">
                <label for="write_article">Compose Article</label>
                <input type="radio" name="article_type" v-model="vindu" class="form-check-label" value="one">
              </div>
              <div class="form-check col-6">
                <label for="upload_article">Upload PDF</label>
                <input type="radio" name="article_type" v-model="vindu" class="form-check-label" value="two">
              </div>
            </div>

            <div v-show="vindu === 'one'">
              <textarea name="article" class="form-control" rows="8" cols="80" placeholder="Compose Article Here"></textarea>
            </div><br>

            <div v-show="vindu === 'two'">
              <input type="file" name="upload_file" accept="application/pdf" class="form-control">
            </div>

            <br>
            <div class="row">
              <div class="col-8 offset-2">
                <button type="submit" name="submit_create" class="btn btn-block btn-primary">POST</button>
              </div>
            </div>
          </form>
        </div>
      </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
<script>
var app = new Vue({
    el: '#app',
    data: {
      vindu: 'one',
    },
  });
</script>
@stop
