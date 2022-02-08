<!-----------パーツ-main-記事一覧ページ---------------->

@extends('Layouts.base')
@section('content')

<h1>trip掲示板</h1>
<a href="/index">
  <div class="">新規投稿作成</div>
</a>

<tbody>
  <tr>
    <th class=""></th>
    <th class="">nickname</th>
    <th class="">time</th>
    <th class="">tltle</th>
    <th class="">body</th>
    <th class="">picture</th>
  </tr>
</tbody>

@foreach($trips as $trip)
<tr>
  <td>{{$trip->nickname}}</td>
  <td>{{$trip->created_at}}</td>
  <td>{{$trip->title}}</td>
  <td>{{$trip->body}}</td>
  <td></td>



  <td>
    <form action="">
      @csrf
      <input type="hidden" name="" value="">
      <button class="btn btn-primary btn-sm">詳細</button>
    </form>
  </td>

  <td>
    <form action="">
      @csrf
      <input type="hidden" name="" value="">
      <button class="btn btn-info btn-sm">編集</button>
    </form>
  </td>

  <td>
    <form action="">
      @csrf
      <input type="hidden" name="" value="">
      <button class="btn btn-danger btn-sm">削除</button>
    </form>
  </td>
</tr>
@endforeach