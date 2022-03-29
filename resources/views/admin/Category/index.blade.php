@extends('voyager::master')

@section('css')
    <style>
        .panel-bordered>.panel-body {
            overflow: hidden;
            padding: 0px 20px 20px;
        }
        .catelory-button{
            margin-top: 20px;
        }
            .desc-text {
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 3; /* number of lines to show */
                    line-clamp: 3;
                -webkit-box-orient: vertical;
            }

    </style>
@stop
@section('javascript')




@stop
@section('page_title', 'Your title')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">

            <i class="icon voyager-shop"></i> Category Sync site
        </h1>
        {{-- <a class="btn btn-success btn-add-new" href="/admin/Product/create"> <i class="voyager-plus"></i> <span>Add
                New</span></a> --}}

    </div>
    @include('voyager::multilingual.language-selector')
    @stop

@section('content')
    <div class="page-content container-fluid">
        <div class="row">

            <div class="col-sm-3">
                <div class="panel panel-bordered panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-image"></i> Post Image</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                    </div>
                    <form action="categrories/store" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="panel-body">
                            <label>Tên danh mục</label>

                            <input type="text" class="form-control" id="title" name="name"  placeholder="Title" >
                            <span>@error('name'){{$message}}@enderror</span>

                            </div>
                        <div class="panel-body">
                            <label>Đường dẫn</label>
                            <input type="text" class="form-control" id="slug"   name="slug" placeholder="Title" >
                        </div>
                        <div class="panel-body">
                            <label>Danh mục cha</label>

                            <select class="form-control" name="category_id">
                                <option value="0" >Trống</option>
                                @foreach ($Category as $category_id_1 )
                                    @if ($category_id_1->id != 15)
                                        <option value="{{$category_id_1->id}}" >{{$category_id_1->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="panel-body">
                            <label>Mô tả</label>
                            <textarea class="form-control" id="desc" name="desc" placeholder="Title" ></textarea>

                            <span>@error('desc'){{$message}}@enderror</span>

                        </div>
                        <div class="panel-body">
                            <label>Hình sản phẩm</label>
                            <input type="file" class="form-control" id="input_image" name="input_image" placeholder="Title">
                            <span>@error('input_image'){{$message}}@enderror</span>
                            <button type="submit" class="btn btn-primary pull-right catelory-button">Update Post</button>
                        </div>
                    </form>

                    </div>
                </div>
                <div class="col-sm-9">
                    <table id="dataTable" class="table table-hover dataTable no-footer" role="grid"
                        aria-describedby="dataTable_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                    style="width: 183.031px;">
                                    Ảnh
                                    <p></p>
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                    style="width: 183.031px;">
                                    Tên
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                    style="width: 800px">
                                    Mô tả
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                    style="width: 153.812px;">
                                    Đường dẫn
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                    style="width: 280px;">
                                    Lượt
                                </th>
                                <th class="actions text-right dt-not-orderable sorting_disabled" rowspan="1" colspan="1"
                                    aria-label="Actions" style="width: 364.125px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Category as $item )
                                @if ($item->id != 15)
                                    <tr role="row">
                                        <td>
                                            @if ($item->image === null)
                                                @php
                                                    echo '<p>khong co</p>';
                                                @endphp


                                            @else
                                                <img src="{{ $item->image->src }}" width="100px" height="auto" alt="" srcset="">




                                            @endif

                                        <td>
                                            <p>{{ $item->name }}</p>
                                        </td>

                                        <td>
                                            <p class="desc-text"> {!! $item->description !!}</p>
                                        </td>
                                        <td>
                                            <p>{{ $item->slug }}</p>
                                        </td>
                                        <td>
                                            <p>{{ $item->count }}</p>
                                        </td>


                                            <td class="no-sort no-click bread-actions">

                                                <a href="/admin/categrories/delete/{{ $item->id }}" onclick="return confirm('Are you sure?')" title="Delete"
                                                    class="btn btn-sm btn-danger pull-right delete" data-id="1" id="delete-1">
                                                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                                </a>
                                                <a href="/admin/categrories/edit/{{ $item->id }}" title="Edit" class="btn btn-sm btn-primary pull-right edit">
                                                    <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                                </a>

                                            </td>



                                    </tr>
                                @endif
                            @endforeach



                        </tbody>
                    </table>
                </div>



            </div>

        </div>



    </div>

    </div>
@stop


