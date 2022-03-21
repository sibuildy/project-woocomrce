@extends('voyager::master')

@section('css')
    <style></style>
@stop

@section('page_title', 'Your title')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">

            <i class="icon voyager-shop"></i> Category Sync site
        </h1>
        <a class="btn btn-success btn-add-new" href="/admin/Product/create"> <i class="voyager-plus"></i> <span>Add
                New</span></a>

    </div>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <table id="dataTable" class="table table-hover dataTable no-footer" role="grid"
                    aria-describedby="dataTable_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"

                                style="width: 183.031px;">
                                    id
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"

                                style="width: 183.031px;">
                                    Image
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"

                                style="width: 210.047px;">
                                Tên Sản phẩm
                            </th>

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"

                                style="width: 113.812px;">
                                Giá
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"

                                style="width: 240px;">
                                Danh mục
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"

                                style="width: 134.891px;">
                               Ngày
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"

                                style="width: 136.656px;">
                                Thương hiệu
                            </th>
                            <th class="actions text-right dt-not-orderable sorting_disabled" rowspan="1" colspan="1"
                                aria-label="Actions" style="width: 364.125px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($Orders as $item)

                            <tr role="row" >
                                <td>



                                </td>
                                <td>

                                    image
                                </td>
                                <td>
                                    {{-- {{$item->name}} --}}

                                </td>

                                <td>
                                    {{-- {{
                                        number_format($item->price,0);
                                    }} --}}


                                </td>
                                <td>
                                  {{
                                    foreach($products as $product){
                                        foreach($product->categories as $categories){
                                            echo($categories->name);
                                        }

                                    }
                                  }}

                                </td>
                                <td>
                                    {{-- {{
                                        date('d-m-Y', strtotime($item->date_created));
                                    }} --}}
                                </td>

                                <td>
                                   thương hiệu nè
                                   {{-- {{
                                    foreach($products as $product){
                                        foreach($product->brands as $brands){
                                            echo($brands->name);
                                        }

                                    }
                                  }} --}}

                                </td>
                                <td class="no-sort no-click bread-actions">

                                    {{-- <a href="/admin/Product/delete/{{$item->id}}" onclick="return confirm('Are you sure?')" title="Delete" class="btn btn-sm btn-danger pull-right delete" --}}
                                        data-id="1" id="delete-1">
                                        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                    </a>
                                    <a href="http://localhost:8000/admin/posts/1/edit" title="Edit"
                                        class="btn btn-sm btn-primary pull-right edit">
                                        <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                    </a>
                                    {{-- <a href=" {{$item->permalink}} " title="View" --}}
                                        class="btn btn-sm btn-warning pull-right view">
                                        <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">View</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>


        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

    </div>
@stop
