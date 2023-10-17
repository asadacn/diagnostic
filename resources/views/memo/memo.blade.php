@extends('layouts.app')
@section('title','Diamond - Memo')

@section('content')

{{-- style="background-image: linear-gradient(to left, #4facfe 0%, #00f2fe 100%);" --}}
<div class="row border-0 shadow-sm rounded  mx-2 memo">
    <div class=" col-sm-7   p-3">

        <form>
            <input id="order_type" type="hidden" name="order_type" value="sell">
            <div class="row">
                <div class="col-md-4">
                    <label class="sr-only" for="inlineFormInputGroup">Order date</label>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-secondary text-light" style="font-size: 90%">Order Date:
                            </div>
                        </div>
                        <input type="date" class="form-control  border-none" id="order_date" value="{{date('Y-m-d')}}"
                            placeholder="orderdate">
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="sr-only" for="inlineFormInputGroup">Delivery date</label>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-secondary text-light" style="font-size: 90%">Delivery Date:
                            </div>
                        </div>
                        <input type="date" class="form-control  border-none" id="delivery_date"
                            value="{{date('Y-m-d')}}" placeholder="deliverydate">
                    </div>

                </div>
                {{-- <div class="col-md-4">
                    <label class="sr-only" for="inlineFormInputGroup">Challan No</label>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-secondary text-light" style="font-size: 90%">Challan No
                            </div>
                        </div>
                        <input type="text" class="form-control border-none" id="challan" maxlength="6"
                            placeholder="Challan no">
                    </div>

                </div> --}}
            </div>


            {{-- <hr class="border-primary">  --}}

            <h1 class="h5 bg-secondary my-2  shadow-sm rounded text-light text-center">Order List</h1>


            <div id="orderList" class=" font-weight-bold  table-responsive  "
                style="word-spacing: 2px; text-transform: capitalize; min-height:30vh">
                <table class="table  table-sm table-bordered shadow-sm">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Category </th>
                            <th scope="col">Size</th>
                            <th scope="col">price </th>
                            <th scope="col">Qty </th>
                            <th scope="col">Total </th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>

                    <tbody id="list" class="table-striped bg-light">


                    </tbody>
                </table>
            </div>
            {{-- <hr class="border-primary"> --}}
            <div class="row d-flex justify-content-between">
                <div class="col-md-5">
                    <div class="card border-0 shadow-sm mb-3 ">
                        <div class="card-body text-primary">
                            <h5 class="card-title">Payment actions</h5>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text  bg-secondary text-light"
                                       >Discount</span>
                                </div>
                                <input id="dis" type="text" value="0" class="form-control form-control"
                                   placeholder="৳">৳ /
                                <div class="custom-control custom-switch ml-2" data-toggle="tooltip"
                                    data-placement="bottom" title="Discount in Percentage ( % )">
                                    <input type="checkbox" class="custom-control-input " id="discountSwitch">
                                    <label class="custom-control-label" for="discountSwitch">%</label>
                                </div>
                            </div>
                            <div class="input-group  ">
                                <div class="input-group-prepend">
                                    <div id="setPaid" class="input-group-text bg-secondary text-light"
                                        data-toggle="tooltip" data-placement="bottom" title="Click to set paid"
                                       > Paid </div>
                                </div>
                                <input id="paid" type="text" value="0"
                                    class="form-control form-control font-weight-bold "
                                   placeholder="৳">৳
                            </div>
                            <br>


                        </div>
                    </div>

                </div>

                <div class="col-md-5 ">
                    <div class="card border-0 shadow-sm mb-3 ">
                        <div class="card-body table-responsive text-primary">
                            <table class="h6 table table-sm table-striped font-weight-bold  mx-auto"
                                style="font-family: arial;">

                                <tr>
                                    <td>Sub-Total</td>
                                    <td>&nbsp;</td>
                                    <input type="hidden" id="subtotal" value="0">
                                    <td>:</td>
                                    <td> &nbsp;</td>
                                    <td><span id="sub-total">0.0</span>৳</td>
                                </tr>
                                <tr>
                                    <td>Discount</td>
                                    <td>&nbsp;</td>
                                    <td>:</td>
                                    <td> &nbsp;</td>
                                    <td><span id="discount">0.0</span>৳</td>
                                </tr>
                                {{-- <tr ><td colspan="6"><hr class="bg-light"></td></tr> --}}

                                <tr class="text-danger">
                                    <td>Total</td>
                                    <td>&nbsp; </td>
                                    <td>:</td>
                                    <td> &nbsp;</td>
                                    <td><span id="total">0.0</span>৳ </td>
                                </tr>
                                {{-- <tr><td colspan="6"><hr class="bg-light"></td></tr> --}}
                                <tr class=" text-dark">
                                    <td>Paid</td>
                                    <td>&nbsp; </td>
                                    <td>:</td>
                                    <td> &nbsp;</td>
                                    <td><span id="paid_amount">0.0</span>৳ </td>
                                </tr>
                                <tr class="text-dark">
                                    <td>Due</td>
                                    <td>&nbsp; </td>
                                    <td>:</td>
                                    <td> &nbsp;</td>
                                    <td><span id="due">0.0</span>৳</td>
                                </tr>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        @include('memo.customer-form')
        {{-- @include('memo.memo_preview') --}}
        @include('pos-invoice-print')
            <hr class="border-muted">
            <center> 
                <!-- Button trigger modal -->
                <button id="customerInfo" style="display: none" type="button" class="text-primary btn btn-lg btn-light border-primary px-4 shadow-sm text-uppercase mr-2" data-toggle="modal" data-target="#staticBackdrop">
                   Add Customer Info
                </button>
                <button id="order" type="button" class="btn btn-lg text-danger btn-light border-danger px-4 shadow-sm text-uppercase ml-2 " style="display: none">Skip & Place
                    Order
                </button>
                 </center>



        </form>
    </div> <!--  end order lsit-->


    <div class="col-sm-5 rounded-right bg-light border-left border-primary p-4 memo">
        <!-- search product-->
        <h1 class="h6 bg-secondary rounded text-light text-center">Find Items</h1>


        <div class="d-flex flex-row-reverse ">            
            <select class="form-control col-sm-3" name="brand" id="brand">
                <option value="">By Brand</option>
                @foreach (App\Brand::all() as $brand)
                <option value="{{$brand->id}}">{{$brand->title}}</option>
                @endforeach
            </select>
            <select class="form-control col-sm-3" name="category" id="category">
                <option value="">By Category</option>
                @foreach ($categories as $item)
                <option value="{{$item->id}}">{{$item->category}}</option>
                @endforeach
            </select>

            {{-- <i class="fas fa-search p-2 rounded-right bg-light text-dark" style=" text-align:center; font-size:125%;"></i>  --}}
            <input id="getItem" class="form-control col-sm-5" type="search" name="search_product"
                placeholder=" Search items .. .." autofocus>
            <button name="all" id="all" class="btn px-2 shadow-sm rounded-pill  btn-outline-secondary col-sm-1 mr-2">All</button>
             

        </div>
        <br>
  
        {{-- Render items --}}
        <div id="itemList" >
            @include('memo.render-item')
        </div>
        
</div>
</div>
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
{{-- Invoice Preview --}}

{{-- @include('memo.memo_preview') --}}

{{-- End Invoice Preview --}}
@include('layouts.toast')
<script>
    //stockout toast
    function stockOut(msg=null,type=true) {
        //Show
        var success = "{{asset('audio/success.mp3')}}";
        var danger  = "{{asset('audio/danger.mp3')}}";
        $('.toast-body').html(msg)
        $('.toast').toast('show');
        var obj = document.createElement("audio");
        obj.src = type ? success : danger;
        obj.volume = .8;
        obj.autoPlay = false;
        obj.preLoad = true;
        obj.controls = false;
        obj.play();
        // //Hide
        // $('#element').toast('hide')
        //OnHide
        $('.toast').on('hidden.bs.toast', function () {
            $('.toast-body').html('')
        })
        // //Hides an element’s toast. Your toast will remain on the DOM but won’t show anymore.
        // $('#element').toast('dispose')
    }
    //sidebar set hide
    $("#wrapper").toggleClass("toggled");

    $('form').on('click', 'button:not([type="submit"])', function (e) {
        e.preventDefault();
    });
    //Search from Memo

    $('#getItem').on('keyup', function () {

        var query = $(this).val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        if (query.length > 2) {
            $.ajax({
                url: "{{url('/memo/get_item')}}",
                method: 'GET',
                data: {
                    key: query
                },
                dataType: 'json',
                success: function (data) {
                    $('#itemList').html(data.table_data);
                    console.log(data);
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }
    });

//get all items
    $('#all').on('click', function () {

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


    $.ajax({
        url: "{{url('/memo/get_item_all')}}",
        method: 'GET',
  
        dataType: 'json',
        success: function (data) {

            $('#itemList').html(data.table_data);
        },
        error: function (data) {
            console.log(data);
        }
    });

});
//get items by category
    $('#category').on('change', function () {

        var query = $(this).val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        if (query.length > 0) {
            $.ajax({
                url: "{{url('/memo/get_item_by_category')}}",
                method: 'GET',
                data: {
                    key: query
                },
                dataType: 'json',
                success: function (data) {

                    $('#itemList').html(data.table_data);
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }
    });
//get item by brand
    $('#brand').on('change', function () {

var query = $(this).val();

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

if (query.length > 0) {
    $.ajax({
        url: "{{url('/memo/get_item_by_brand')}}",
        method: 'GET',
        data: {
            key: query
        },
        dataType: 'json',
        success: function (data) {

            $('#itemList').html(data.table_data);
        },
        error: function (data) {
            console.log(data);
        }
    });
}
});

    //addItem to orderList
    function addItem(id, price, cost) {
        var qty = $("#q" + id).val();
        const min = parseInt($("#q" + id).attr('min'));
        const max = parseInt($("#q" + id).attr('max'));

        if (qty == max) {
            swal.fire({
                icon: "error",
                title: " Limited Stock !",
                text: 'Available in-Stock: ' + qty,
                showConfirmButton: true,
                timer: 3500,
                timerProgressBar: true,
                toast: false,
            });
        } else if (qty < min) {
            swal.fire({
                icon: "error",
                title: " Invalid Input !",
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                toast: false,
            });
        } else {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{url('/addtomemo')}}",
                data: {
                    id: id,
                    price: price,
                    cost: cost,
                    qty: 1,
                    action: 'add'
                },
                dataType: 'json',
                type: 'GET',
                success: function (data) {

                    renderToMemo(data);

                },
                error: function (data) {
                    console.log(data);
                }

            });
        }
    }

    //remove item from memo

    function removeItem(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        swal.fire({
            // title:"Remove ?",
            text: "Do you want to remove: \"" + $('#item' + id).text() + "\" ?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: '#2ecc71',
            cancelButtonColor: '#e74c3c',
            confirmButtonText: 'Yes, remove it !'
        }).then((willDelete) => {
            if (willDelete.value) {

                $.ajax({

                    url: "{{url('/addtomemo')}}",
                    data: {
                        id: id,
                        action: 'del'
                    },
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        renderToMemo(data);
                        swal.fire({
                            icon: "success",
                            text: " Item successfully removed!",
                            showConfirmButton: false,
                            timer: 2500,
                            toast: true,
                            position: 'bottom-end'
                        });
                    },
                    error: function (data) {
                        swal.fire("Something went wrong!", {
                            title: "Failed !",
                            icon: "error"
                        });
                        // console.log(data);
                    }

                });


            }
        });

    }

    //Update item in memo
    function updateItem(id, preQty) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var qty = $("#q" + id).val();
        const min = parseInt($("#q" + id).attr('min'));
        const stock = parseInt($("#q" + id).attr('max'));

        if (qty > stock) {
            swal.fire({
                icon: "error",
                title: " Limited Stock !",
                text: 'Available in-Stock: ' + stock,
                showConfirmButton: true,
                timer: 2000,
                timerProgressBar: true,
                toast: false
            });
            $("#q" + id).val(preQty);
        } else if (qty < min) {
            swal.fire({
                icon: "error",
                title: " Invalid Input !",

                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                toast: false
            });
            $("#q" + id).val(preQty);
        } else {
            $.ajax({

                url: "{{url('/addtomemo')}}",
                data: {
                    id: id,
                    qty: qty,
                    action: 'update'
                },
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    renderToMemo(data);
                    swal.fire({
                        icon: "success",
                        text: "\"" + $('#item' + id).text() + "\"" + " quantity updated!",
                        showConfirmButton: false,
                        timer: 2500,
                        timerProgressBar: true,
                        toast: true,
                        position: 'bottom-end'
                    });
                }

            });
        }
    }


    //Update item price in memo
    function updatePrice(id, prePrice) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var price = 0;
        price = $("#p" + id).val();

        if (!$.isNumeric(price)) {
            swal.fire({
                icon: "error",
                title: " Invalid Input !",
                text: 'Please enter numbers!',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                toast: false
            });
            $("#p" + id).val(prePrice);
        } else {
            $.ajax({

                url: "{{url('/addtomemo')}}",
                data: {
                    id: id,
                    price: price,
                    action: 'update-price'
                },
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    renderToMemo(data);
                    swal.fire({
                        icon: "success",
                        text: "\"" + $('#item' + id).text() + "\"" + " price updated!",
                        showConfirmButton: false,
                        timer: 2500,
                        timerProgressBar: true,
                        toast: true,
                        position: 'bottom-end'
                    });
                }

            });
        }
    }
    //this function RENDERS data to MEMO and INVOICE modal
    function renderToMemo(data) {
        console.log(data.session);
        var list = '';
        $.each(data.itemlist, function (i, item) {
            list = list.concat('<tr  scope="row">' +
                '<td id=item' + item.id + '>' + item.name + '</td>' +
                
                '<td>' + item.category.category + '</td>' +
                '<td > ' + item.size + 
                '</td>' +
                '<td class="number-input "><input class="text-danger" id=p' + item.id +
                ' type="number" value=' + data.session[i].price + '  onchange="updatePrice(' + item.id +
                ',' + item.unit_price + ')" >৳</td>' +
                '<td style="max-width:6rem;"><div class="number-input "><input class="text-danger" type="number" data-toggle="tooltip" data-placement="bottom" title="In-Stock: ' +
                item.stock + '" value=' + data.session[i].qty + ' id=q' + item.id + ' min="1" max=' + item
                .stock + ' step="1"  onchange="updateItem(' + item.id + ',' + data.session[i].qty +
                ')" ></div></td>' +
                '<td style="font-size:1rem;font-family:arial">' + data.session[i].price * data.session[i]
                .qty + '৳ </td>' +
                '<td>' +
                '<i id=save' + item.id +
                ' class="shadow-sm btn btn-sm btn-outline-success" style="display:none" onclick="updateItem(' +
                item.id + ')" class="shadow-sm">✔</i>' +
                ' <i class="shadow-sm btn btn-sm btn-outline-danger" onclick="removeItem(' + item.id +
                ')">✘</i>' +
                '</td>' +
                '</tr>'
            );

        });
        //showing data on invoice modal body
        var invoice = '';
        $.each(data.itemlist, function (i, item) {
            invoice = invoice.concat('<tr  scope="row">' +
                '<td>' + (i + 1) + '</td>' +
                '<td>' + item.name + '</td>' +
                '<td>' + item.category.category + '</td>' +
                '<td > ' + item.size + '</td>' +
                '<td>' + item.unit_price + '৳ </td>' +
                '<td>' + data.session[i].qty + '</td>' +
                '<td>' + item.unit_price * data.session[i].qty + '৳ </td>' +
                '</tr>'
            );
        });
        $("#invoice_body").html(invoice);
        //showing data on memo
        $("#list").html(list);
        $("#paid,#dis").val(0.0);
        $("#paid_amount,#discount").text('0.0');
        $("#total,#sub-total,#due").text(data.total_amount.toFixed(1));
        $("#subtotal").val(data.total_amount.toFixed(1));

        validateMemo();

        //showing data on invoice modal body
        var pos_invoice = '';
        $.each(data.itemlist, function (i, item) {
            pos_invoice = pos_invoice.concat(
                '<tr class="service">'+
                '<td class="tableitem"><p class="itemtext">'+item.name+'</p></td>'+
                '<td class="tableitem" style="text-align:right"><p class="itemtext">'+data.session[i].qty+'</p></td>'+
                '<td class="tableitem" style="text-align:right"><p class="itemtext">'+item.unit_price * data.session[i].qty + '৳</p></td>'+
                '</tr>'
            );
        });

        $("#pos_invoice_body").html(pos_invoice);
    }

    //enable data-toggle
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

</script>
<script>
    //Payment calculations

    //Discount & update paid ; total; due sections

    $("#dis").on('keyup', function () {

        var amount = $("#subtotal").val();
        var dis = $(this).val();

        if ((amount - dis) < 0) {
            $(this).css("border-color", "red");
            swal.fire({
                title: "Invalid Input",
                text: " Discount amount: " + dis + "৳ > Total amount: " + amount + "৳ !!",
                icon: "error"
            });

        } else {

            $(this).css("border-color", "#f1f1f1");

            if ($('#discountSwitch').prop("checked") == true) { //if discount button is checked
                if (dis <= 100) {
                    $("#total").text((amount - (amount * dis / 100)).toFixed(1));
                    $("#paid").val((amount - (amount * dis / 100)).toFixed(1));
                    $('#paid_amount').text((amount - (amount * dis / 100)).toFixed(1));
                    $('#discount').text((amount * dis / 100).toFixed(1));
                    $('#isD').text('(' + dis + '%)');
                    $("#due").text(($("#total").text() - $("#paid").val()).toFixed(1));
                } else {
                    swal.fire({
                        title: "Invalid Input",
                        text: " Discount percentage maximum 100% !!",
                        icon: "error"
                    });
                }
            } else if ($('#discountSwitch').prop("checked") == false) {

                $("#total").text((amount - dis).toFixed(1));
                $("#paid").val((amount - dis).toFixed(1));
                $('#paid_amount').text($("#paid").val());
                $('#discount').text(dis);
                $('#isD').text('');
                $("#due").text(($("#total").text() - $("#paid").val()).toFixed(1));


            }
        }
    });

    $('#discountSwitch').click(function () {
        const amount = $("#subtotal").val();
        const dis = $('#dis').val();

        if ($(this).prop("checked") == true) {
            if (dis <= 100) {
                $("#total").text((amount - (amount * dis / 100)).toFixed(1));
                $("#paid").val((amount - (amount * dis / 100)).toFixed(1));
                $('#paid_amount').text($("#paid").val());
                $('#discount').text(amount * dis / 100);
                $('#isD').text('(' + dis + '%)');
                $("#due").text(($("#total").text() - $("#paid").val()).toFixed(1));
            } else {
                swal.fire({
                    title: "Invalid Input",
                    text: " Discount percentage maximum 100% !!",
                    icon: "error"
                });
            }

        } else if ($(this).prop("checked") == false) {

            $("#total").text((amount - dis).toFixed(1));
            $("#paid").val((amount - dis).toFixed(1));
            $('#paid_amount').text($("#paid").val());
            $('#discount').text(dis);
            $('#isD').text('');
            $("#due").text(($("#total").text() - $("#paid").val()).toFixed(1));


        }
    });
    //paid & update due section 

    $("#paid").on('keyup', function () {

        var amount = parseFloat($("#total").text());
        var paid = $(this).val();
        const regx = /^(?:[1-9]\d*|0)?(?:\.\d+)?$/;
        console.log(paid);
        if (regx.test(paid)) {
            if ((amount - paid) < 0) {
                $(this).css("border-color", "red");
                swal.fire({
                    title: "Invalid Input",
                    text: "Paid amount: " + paid + "৳ > Total amount: " + amount + "৳ !!",
                    icon: "error"
                });
            } else {

                $(this).css("border-color", "#f9f9f9");

                if (paid == 0 || paid.length == 0) {
                    $("#due").text(0);
                    validateMemo();
                } else{
                $("#due").text((amount - paid).toFixed(1));
                $('#paid_amount').text($("#paid").val());
                validateMemo();
                }
            }
        } else {
            swal.fire({
                title: "Invalid Format/Input",
                text: "You entered: " + paid,
                icon: "error"
            });
        }
    });

    //customer input is valid or not
    $('#customer, #mobile').on('keyup', function () {
        validateMemo()
    })
    //challan no is valid or not
    $('#challan').on('keyup', function () {
        if (!$.isNumeric($(this).val())) {
            swal.fire({
                title: "Invalid Input",
                text: "Challan No must be Digits! (Example: 12345)",
                icon: "error"
            });
        }
    })

    //Get paid amount from total amount

    $("#setPaid").on('click', function () {
        var amount = parseFloat($("#total").text());
        $("#paid").val(amount);
        $('#paid_amount').text($("#paid").val());
        $("#due").text(0);
        validateMemo();
    });

    //Place Order

    $("#order , #order1").on('click', function (event) {

        var customer = $("#customer").val();
        var customerID = $("#customerID").val();
        var mobile = $("#mobile").val();
        var address = $("#address").val();
        var or_date = $("#order_date").val();
        var deli_date = $("#delivery_date").val();
        var paid = $("#paid").val();
        var disc = $("#discount").text();
        var subtotal = $("#subtotal").val();
        var total = $("#total").text();
        var due = $("#due").text();
        var store = $("#store").val();
        var challan = $("#challan").val();
        var order_type = $("#order_type").val();
        var isOldCustomer = 'new';
        var sms = 0;
        var dis_percentage = $("#isD").text();
        if ($('#customerSwitch').prop("checked") == true) isOldCustomer = 'old';
        if ($('#sms').prop("checked") == true) sms = 1;
        $('#v-customer').text(customer);
        $('#v-mobile').text(mobile);
        $('#v-address').text(address);
        $('#v-paid').text(paid);
        $('#v-due').text(due);
        $('#v-total').text(total);
        $('#v-subtotal').text(subtotal);
        $('#v-order-date').text(or_date);
        $('#v-delivery-date').text(deli_date);
        $('#v-discount').text(disc);
        $('#v-store').text(store);
        $('#v-challan').text(challan);

       /* console.log('customer:', customer, 'mobile:', mobile, 'store:', store, 'address:', address,
            'order_date:',
            or_date, 'delivery_date:', deli_date, 'paid:', paid, 'discount:', disc, 'subtotal:', subtotal,
            'total:', total,
            'due:', due, 'isOldcustomer:', isOldCustomer, 'id:', customerID);*/

        swal.fire({
            title: "Place the order ?",
            text: "Once you place the order, this cannot be undone!",
            icon: 'warning',
            showConfirmButton: true,
            showCancelButton: true,
            confirmButtonText: 'Yes, Confirm Order',
            cancelButtonColor: '#e84118',
            confirmButtonColor: '#44bd32'

        }).then((result) => {
            if (result.value) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                Swal.fire('Please wait');
                Swal.showLoading();
                $.ajax({
                    url: "{{url('/placeorder')}}",
                    data: {
                        customer_id: customerID,
                        customer: customer,
                        mobile: mobile,
                        store: store,
                        address: address,
                        order_date: or_date,
                        delivery_date: deli_date,
                        paid: paid,
                        discount: disc,
                        dis_per: dis_percentage,
                        subtotal: subtotal,
                        total: total,
                        due: due,
                        challan: challan,
                        order_type:order_type,
                        xcustomer: isOldCustomer,
                        sms:sms

                    },
                    type: 'POST',
                    success: function (data) {
                     
                        if (data.status) {
                            Swal.close();
                            $('#invoice_preview').modal('show');
                            $('#invoice_preview').on('hidden.bs.modal', function (e) {
                               // console.log("triggered");
                               $('#total').text(0);
                                location.reload(true);
                            });
                        } else {
                            swal.fire({
                                title: "Tarnsaction Failed !",
                                text: data.message,
                                icon: "error",
                                confirmButtonText: "Dismiss",
                                confirmButtonColor: '#e84118',
                            });

                        }
                        console.log(data);
                    },
                    error: function (data) {

                        console.log(data);
                    }

                });
            }
        });
    });
    //End Place Order

    // On Click Old Customer Check Button
    $('#customerSwitch').on('click', function () {
        if ($(this).prop("checked") == true) {
            $('#XcustomerDiv').show(200);
        } else {
            $('#XcustomerDiv').hide(200);
            $("#customer_form")[0].reset();
            $('#customerID').val('');
        }
    })

    //Search Existing Customer In Memo

    $('#Xcustomer').on('keyup', function () {

        var query = $(this).val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        if (query.length > 1) {
            $.ajax({
                url: "{{url('/customer/search')}}",
                method: 'GET',
                data: {
                    key: query
                },
                dataType: 'json',
                success: function (data) {
                    if (data.total_data > 0) {
                        $("#XcustomerDivShow").slideDown(100);
                    } else {
                        $("#XcustomerDivShow").hide();
                    }

                    var list = '';
                    $.each(data.data, function (i, item) {

                        list = list.concat('<tr onclick=setXCustomer(' + item.id +
                            ') title="' + item.address + '"  scope="row">' +
                            '<td>' + item.customer_name + '</td>' +
                            '<td>' + item.store_title + '</td>'
                            +'<td>'+ item.address +'</td>'
                            +
                            '<td>' + item.mobile_number + '</td>' +
                            '</tr>'
                        );
                    });
if (list == '') {
    list = "NO RECORD FOUND"
}
                    $('#showXcustomer').html(list);

                    console.log(data.data)
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }
    });

    //Hide Search suggession div
    $('#cross').on('click', function () {
        $("#XcustomerDivShow").hide(250)
    })
    // Set XCustomer to fields
    function setXCustomer(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{url('/customer/find')}}",
            method: 'GET',
            data: {
                id: id
            },
            dataType: 'json',
            success: function (data) {
                $('#customerID').val(data.customer.id);
                $('#customer').val(data.customer.customer_name);
                $('#mobile').val(data.customer.mobile_number);
                $('#store').val(data.customer.store_title);
                $('#address').val(data.customer.address);
                $("#XcustomerDivShow").slideUp(150);
                $('#Xcustomer').val('');
                validateMemo();
            },
            error: function (data) {
                console.log(data);
            }
        });

    }

//For Diamond
//     function validateMemo() {
//     var total = parseFloat($("#total").text());
//     if(total>0){ //if there is item in the list
//     $('#customerInfo').show('fast');
//     if (!$('#customer').val() || !$('#mobile').val())  {
//         $('#order1').hide('fast');
//     }else{
//         $('#order1').show('fast');
//     }
//     }else{
//          $('#customerInfo').hide('fast');
//          $('#order').hide('fast');
//     }
// }
//FOR POS
function validateMemo() {
    var due = parseFloat($("#due").text());
    var paid =  $("#paid").val();
    var total = parseFloat($("#total").text());
console.log(due);
if(total>0){
    if (due>0) {
        $('#customerInfo').show();
        $('#order').hide();
    }
    else{
        $('#customerInfo').show();
        $('#order').show();
    }
    }else{
         $('#customerInfo').hide();
         $('#order').hide();
    }

    $("#customer, #mobile").on('keyup', function(){   
        if ($("#customer").val().length !== 0 && $("#mobile").val().length !== 0) {
            $('#order1').show('fast');
            //$('#order1').removeClass("disable");  
        } else {
            $('#order1').hide('fast');
        } 
       
});
}
</script>
<script>
    // $('#Smemo').removeClass('bg-secondary');
    $('#Smemo').addClass('bg-secondary text-white').animate({
        left: '8px'
    });
// Enable navigation prompt

window.addEventListener('beforeunload', (event) => {
var total = parseFloat($("#total").text());
  if (total>0) {
    event.returnValue = 'You have unfinished changes!';
  }
});
</script>
@endsection
