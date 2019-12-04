<html>

<body>
    <p>Xin chào {{$data['name']}} !!!</p>
    <br>
    <div>Chúng tôi gửi Email này để thông báo cho bạn đơn hàng bạn đã mua</div>
    <br>
    <div>Sau đây là những mặt hàng bạn đã đặt:</div>
    <ul>
        @foreach ($data['product_cart'] as $item)
        <li>
            <b>Tên Sản Phẩm : </b>
            <i>{{$item['item']['ProName']}}</i>
            &nbsp;
            <b>Giá:</b>
            <i>@if($item['item']['promotion_price']==0)
                {{$item['item']['unit_price']}}@else{{$item['item']['promotion_price']}}@endif VND</i>

        </li>
        @endforeach
        &nbsp;
        <b>Địa chỉ: </b>
        <i>{{$data['address']}}</i><br>
        &nbsp;
        <b>Với lời nhắn: </b>
        <i>{{$data['message']}}</i>
        <li><b>Tổng tiền: {{$data['totalPrice']}}</b> </li>
    </ul>
    <p>Cảm ơn bạn đã tin dùng sản phẩm của chúng tôi</p>
</body>

</html>