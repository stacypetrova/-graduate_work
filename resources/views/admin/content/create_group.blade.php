@extends('admin.layouts.app')

@section('title')
    Профиль студента
@stop

@section('content')
    <link rel="stylesheet" type="text/css" href="/css/style_content.css">

    <div class="content">
        <div class="container">

            <form class="form-horizontal" role="form" method="post" action="{{ route('admin.create_group') }}">
                {!! csrf_field() !!}
                <input type="text" name="name">
                <select type="text" name="kurs_id">
                    @foreach($kurs->toArray() as $key=>$value)
                        <optgroup label="{{$key}}">
                            @foreach($value as $sub_key=>$sub_value)
                                <option value="{{$sub_value['id']}}">{{$sub_value['name']}}</option>
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>
                <button>Зарегестрировать</button>
            </form>
            <div class="row">
                <h3>Все предметы</h3>
                <table>
                    <thead>
                    <tr>
                        <td>
                            Наименование группы
                        </td>
                        <td>
                            Курс
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($groups as $group)
                        <tr>
                            <td>
                                {{$group->name}}
                            </td>
                            <td>
                                {{$group->kurs->name}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop