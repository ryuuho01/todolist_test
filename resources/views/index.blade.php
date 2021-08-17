@extends('layouts.default')
<style>
  .flex {
      display:flex;
      justify-content:space-between;
      margin-bottom: 30px;
    }
  .input-add {
      width:80%;
      padding:5px;
      border-radius:5px;
      border:1px solid #ccc;
      font-size:14px;
      outline:none;
    }
    .button-add {
      padding:8px 16px;
      background-color: white;
      font-size:12px;
      color: #dc70fa;
      border:2px solid #dc70fa;
      font-weight:bold;
      border-radius: 5px;
      cursor: pointer;
      outline:none;
    }
    table {
      text-align:center;
      width:100%;
    }
    tr {
      height:50px;
    }
    th {
      padding: 5px 40px;
    }
    tr:nth-child(odd) td{
      background-color: #FFFFFF;
    }
    td {
      padding: 25px 40px;
      text-align: center;
    }
    .input-content {
      width: 90%;
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      appearance: none;
      font-size: 14px;
      outline: none;
    }
    .button-update {
      text-align: left;
      border: 2px solid #fa9770;
      font-size: 12px;
      color: #fa9770;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }
    .button-delete {
      text-align: left;
      border: 2px solid #71fadc;
      font-size: 12px;
      color: #71fadc;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
}
</style>

@section('content')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<div class="title">
  <form action="/todo/create" method="POST" class="flex">
    @csrf
    <input type="text" class=input-add name="content">
    <input type="submit" class=button-add value="追加">
  </form>
</div>

<table>
  <tr>
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>
      {{$item->created_at}}
    </td>
    <form action="/todo/update" method="POST">
      @csrf
      <input type="hidden" value="{{$item->id}}" name="id">
      <td>
        <input type="text" class="input-content" value="{{$item->content}}" name="content">
      </td>
      <td>
        <input type="submit" class=button-update value="更新">
      </td>
    </form>
    <form action="/todo/delete" method="POST">
      @csrf
      <td>
        <input type="hidden" value="{{$item->id}}" name="id">
        <input type="submit" class=button-delete value="削除">
      </td>
    </form>
  </tr>
  @endforeach
</table>
@endsection