@if($orders)

<table class="table">
	<thead>
		<tr>
			<th>STT</th>
			<th>Tên Sản Phẩm</th>
			<th>Hình ảnh</th>
			<th>Gía tièn</th>
			<th>Số lượng</th>
			<th>Tổng Tiền</th>
		</tr>
	</thead>
	<tbody>
		<?php $i=1 ?>
		@if(isset($orders))
		@foreach($orders as $key=>$order)
		
		<tr>
			<td style="width: 10px">#{{ $i }}</td>
			
			<td>
				<h6>{{ isset($order->product->pro_name) ? $order->product->pro_name : ''}}</h6>
			</td>
			<td>
				<a href="#"><img style="width:80px;height: 60px" src="{{ isset($order->product->pro_avatar) ? pare_url_file($order->product->pro_avatar) : ''}}" class="img-responsive" alt=""></a>
			</td>
			<td>
				<div class="cart-price">{{ number_format($order->or_price) }}$</div>
			</td>
			<td>{{ $order->or_qty }}
			</td>
			<td>
				<div class="cart-subtotal">{{ number_format($order->or_qty * $order->or_price) }}</div>
			</td>
			
		</tr>
		<?php $i++ ?>
		@endforeach
		@endif
		
	</tbody>
</table>


@endif