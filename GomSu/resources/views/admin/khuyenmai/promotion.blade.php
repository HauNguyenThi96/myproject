@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Hãng sản xuất</th>
                        <th>Mô tả</th>
                        <th>Giá tiền</th>
                        <th>Khuyến mãi</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Gửi</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($promotion as $sp)
                        <tr class="odd gradeX" align="center">
                            <td>{{$sp->id}}</td>
                            <td>{{$sp->name}}</td>
                            <td>{{$sp->product_type->name}}</td>
                            <td>{{$sp->description}}</td>
                            <td>{{number_format($sp->unit_price)}}</td>
                            <td>{{number_format($sp->promotion_price)}}</td>
                            <td><img src="source/images/product/{{$sp->image}}" style="height: 300px" alt=""></td>
                            <td>{{$sp->unit}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sanpham/sua/{{$sp->id}}"> Gủi</a></td>
                           
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection
