<!-------パーツ・新規投稿ページ-------->

@extends('Layouts.base')
@section('index')

<div class="container mt-4">
  <div class="border p-4">
    <h1 class="">投稿新規作成</h1>

    <a href="/main">
      <div class="">掲示板一覧</div>
    </a>

    <form method="POST" action="/index">
      @csrf

      <div class="form-group">
        <label for="subject">nickname</label>
        <input type="text" id="nickname" name="nickname" class="" value="">
      </div>

      <div class="form-group">
        <label for="subject">title</label>
        <input type="text" id="" name="title" class="" value="">
      </div>

      <div class="form-group">
        <label for="subject">message</label>
        <textarea type="text" id="" name="message" class="" value="" rows="4"></textarea>
      </div>

      <div class="">
        <a href="" class="">キャンセル</a>

        <button type="submit" class="">投稿する</button>
      </div>

  </div>
</div>