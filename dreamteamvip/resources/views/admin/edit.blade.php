<!DOCTYPE html>
<html>
    <head>
        <style>
                @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap');
                * {box-sizing: border-box}
                body{
                font-family: 'Noto Sans JP', sans-serif;
                }
                h1, label{
                color: DodgerBlue;
                }
                input[type=text], input[type=password] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                display: inline-block;
                border: none;
                width:100%;
                resize: vertical;
                padding:15px;
                border-radius:15px;
                border:0;
                box-shadow:4px 4px 10px rgba(0,0,0,0.2);
                }
                input[type=text]:focus, input[type=password]:focus {
                outline: none;
                }
                hr {
                border: 1px solid #f1f1f1;
                margin-bottom: 25px;
                }
                button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
                opacity: 0.9;
                }
                button:hover {
                opacity:1;
                }
                .cancelbtn {
                padding: 14px 20px;
                background-color: #f44336;
                }
                .signupbtn {
                float: left;
                width: 100%;
                border-radius:15px;
                border:0;
                box-shadow:4px 4px 10px rgba(0,0,0,0.2);
                }
                .container {
                padding: 16px;
                }
                .clearfix::after {
                content: "";
                clear: both;
                display: table;
                }
        </style>

    </head>
    <body>
        @foreach ($news as $updateproduct )


        <form action="" method="post" enctype="multipart/form-data" >
            @method('PATCH')
            <div class="container">
              <h1>S???A S???N PH???M</h1>
              <hr>
             <label for="namesp"><b>T??n s???n ph???m</b></label>
              <input type="text" placeholder="Nh???p t??n s???n ph???m" name="namesp"  value="{{$updateproduct -> tenSp}}" id="namesp" required>
             <label for="giasp"><b>Gi?? </b></label>
              <input type="text" placeholder="Nh???p gi?? s???n ph???m" name="giasp" value="{{$updateproduct -> gia}}" id="giasp" required>
             <label for="giaSale"><b>Gi?? sale</b></label>
              <input type="text" placeholder="Nh???p gi?? sale" name="giaSale" value="{{$updateproduct -> giaSale}}" id="giaSale" required>
              <label for="loaiSp"><b>Lo???i s???n ph???m</b></label>
              <input type="text" placeholder="Nh???p lo???i s???n ph???m" name="loaiSp" value="{{$updateproduct -> loaiSp}}" id="loaiSp" required>
              <label for="quantity"><b>S??? l?????ng</b></label>
              <input type="text" placeholder="Nh???p s??? l?????ng" name="quantity" value="{{$updateproduct -> quantity}}" id="quantity" required>
              <label for="imgsp"><b>H??nh ???nh</b></label>
              <input type="file" placeholder="Nh???p s??? l?????ng" name="imgsp"    id="file" required>
              <br>
              <br>
              <label for="property"><b>Property</b></label>
              <input type="text" placeholder="Nh???p chi ti???t s???n ph???m" name="property" value="{{$updateproduct -> property}}"  id="property" required>
              <label for="hang"><b>H??ng</b></label>
              <input type="text" placeholder="Nh???p h??ng " name="hang" value="{{$updateproduct -> hang}}" id="hang" required>
            @endforeach
             <div class="clearfix">
                <button type="submit" class="btn_add_product">Edit Product</button>
              </div>
            </div>
            @csrf
        </form>

    </body>
</html>
