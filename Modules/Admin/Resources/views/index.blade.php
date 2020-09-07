@extends('admin::layouts.master')

@section('content')
<div class="row placeholders">
    <div class="col-xs-6 col-sm-3 placeholder">
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4>Thành Viên</h4>
       
    </div>
    <div class="col-xs-6 col-sm-3 placeholder">
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4>Sản Phẩm</h4>
       
    </div>
    <div class="col-xs-6 col-sm-3 placeholder">
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4>Bài viết</h4>
    
    </div>
    <div class="col-xs-6 col-sm-3 placeholder">
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4>Đánh giá</h4>
       
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="table-responsive">
            <h2>Quản lý đơn hàng</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên khách hàng</th>
                        <th>Địa chỉ</th>
                        <th>Note</th>
                        <th>Trạng Thái</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $key=>$transaction)
                    <tr>
                        <td>{{$key+1 }}</td>
                        <td>{{ $transaction->name }}</td>
                        <td>{{ $transaction->tr_address }}</td>
                        <td>{{ $transaction->tr_note }}</td>
                       
                        <td>
                            @if($transaction->tr_status == 1)
                            <a href="{{ route('admin.get.active.order',$transaction->id) }}" class="label label-success">Đã Xử Lý</a>
                            @else
                            <a href="{{ route('admin.get.active.order',$transaction->id) }}" class="label label-danger">Đang Xử Lý</a>
                            @endif
                        </td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-6">

    </div>
</div>

@endsection
