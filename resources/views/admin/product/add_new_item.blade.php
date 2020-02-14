@extends('admin.layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
{{--    enctype="multipart/form-data dùng để sử dung input type=file--}}
    <div>
        <ol class="breadcrumb">
            <li><a style="text-decoration: none;color: #000;" href="{{route('home')}}">Home</a></li>&nbsp;/&nbsp;
            <li><a style="text-decoration: none;color: #000;" href="{{route('laptop')}}">Add Product</a></li>
        </ol>
    </div>
    <form action="{{route('post-add-product')}}" method="post" enctype="multipart/form-data">
        <table class="table table-bordered">
            <tr>
                <th>Product name</th>
                <th><input type="text" class="form-control" name="product_name"></th>
            </tr>
            <tr>
                <th>Product image intro</th>
                <th><input type="file" class="form-control" name="product_image_intro"></th>
            </tr>
            <tr>
                <th>Category</th>
                <th>
                    <select name="category_id">
                        <option value="">Root</option>
                        @foreach($list_sub_category as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </th>
            </tr>
            <tr>
                <th>Publish</th>
                <th>
                    <select name="publish">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>

                </th>
            </tr>
            <tr>
                <th>price</th>
                <th>
                    <input type="text" name="price" class="form-control">
                </th>
            </tr>
            <tr>
                <th>Sale price</th>
                <th>
                    <input type="text" name="sale_price" class="form-control">
                </th>
            </tr>
            <tr>
                <th>Ordering</th>
                <th>
                    <input type="text" name="ordering" class="form-control">
                </th>
            </tr>
            <tr>
                <th>Description</th>
                <th>
                    <textarea class="form-control" name="description"></textarea>
                </th>
            </tr>
            <tr>
                <th>Full description</th>
                <th>
                    <textarea class="form-control" id="full_description" name="full_description"></textarea>
                </th>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="pull-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-primary" href="{{route('danh-sach-san-pham')}}">Cancel</a>
                    </div>
                </td>
            </tr>
        </table>
{{--        token--}}
        {{csrf_field()}}
    </form>
@endsection