

{{-- Invoice Preview --}}

<div class="modal fade " id="invoice_preview" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-xl" role="document">

      <div class="modal-content p-4" style="background:#c7ecee">

        <div id="invoice" class="bg-white  p-5 border rounded" style="font-size: 130%">



            <div class="text-center p-2" style="font-family:monospace">

                <h3 class="h3 font-weight-bold"><img src="{{asset('icon/p.png')}}" width="50px" alt=""> {{getOption('site_name') ?? 'Demo'}}</h3>

                <p class="h6 font-weight-bold text-capitalize">{{getOption('address','demo address')}}</p>

                <p><b>Contact:</b> {{getOption('contact','01xxxxxxxxx')}} 

            </div>

            

            <h5 class="h2 text-center text-light bg-dark text-uppercase " style="font-family:monospace">Invoice/Bill</h5><hr>

        

            <div class="clearfix " style="line-height: 40%;font-family:monospace" >

        

                <div class="float-left ml-3" >

                <p class="h4 text-uppercase"><b>Invoice#</b> <b id="invoice_no"class="text-uppercase">{{str_pad((empty(\App\Order::latest()->first()->id)? 0 : (\App\Order::latest()->first()->id)) + 1,7,0,STR_PAD_LEFT)}}</b></p>  {{-- str_pad($string, $length, $pad_string, $pad_type) function insert xtra '0' before any string --}}

                <p><b>Invoice Type:</b> <span id="invType">Sell</span> </p>

                <p><b> Name:</b> <span id="v-customer"></span></p>

                    <p><b> Mobile:</b> <span id="v-mobile"></span></p>

                    <p><b id="storeOrCom"> Store:</b> <span id="v-store"></span></p>

                    <p><b> Address:</b> <span id="v-address"></span></p>

                    

                </div>

                <div class="float-right mr-3">

                    <p><b>Order Date:</b> <span id="v-order-date"></span></p>

                    {{-- <p><b>Order Time:</b> <span id="v-order-time"></span></p> --}}

                    <p><b>Delivery Date:</b> <span id="v-delivery-date"></span></p>

                    <p><b>Challan No:</b> <span id="v-challan"></span></p>



                </div>

               

            </div>

        <div class="p-2 table-responsive" style="font-family:monospace">

                <table class="table table-sm table-bordered">

                <thead class="thead-light text-uppercase">

                    <tr >

                        <th>#</th>

                        <th  scope="col">Title</th>

                        {{-- <th  scope="col">Type</th> --}}

                        <th  scope="col">Category </th>

                        <th scope="col">Size</th>

                        <th  scope="col">Unit_Price </th>

                        <th  scope="col">Quantity </th>

                        <th  scope="col">Total </th>

                      

                        

                    </tr>

                </thead>

                <tbody id="invoice_body">

                                  

                </tbody>

                     </table>

                    

                      </div>  

        <div class="row  justify-content-end p-2">

            <div class="col-auto" >

            

            

            

             <table  style="font-family:monospace" class="table table-striped table-sm ">

          <tr >

              <td ><b>Total Amount: </b></td><td>&nbsp;</td>

              

              <td>:</td>

              <td> &nbsp;</td>

              <td><span id="v-subtotal">0.0</span>৳&nbsp;</td>

          </tr>

           

            <tr>

              <td><b>Discount: </b><span id="isD"></span></td><td>&nbsp; </td>

              <td>:</td><td> &nbsp;</td>

              <td><span id="v-discount">0.0</span>৳&nbsp;</td>

          </tr>   

          

              <tr>

              <td><b>Grand Total: </b></td><td>&nbsp; </td>

              <td>:</td><td> &nbsp;</td>

              <td><span id="v-total">0.0</span>৳&nbsp;</td>

          </tr>

          

                <tr>

              <td><b>Paid: </b></td><td>&nbsp; </td>

              <td>:</td><td> &nbsp;</td>

              <td><span id="v-paid">0.0</span>৳&nbsp;</td>

          </tr>

                  <tr>

              <td><b>Due: </b></td><td>&nbsp; </td>

              <td>:</td><td> &nbsp;</td>

              <td><span id="v-due">0.0</span>৳&nbsp;</td>

          </tr>

          </table> 

             

        </div></div><br><br>

        <div class="row bg-light d-flex text-dark justify-content-start " style="font-family:monospace"><br>

        <div class="col-4 "><u>Customer's Signature</u></div>

        <br>

        <div class="col-4 text-left"><u>Authorised Signature</u></div>

        
        <div class="col-4 text-right"><u>Sells Manager's Signature</u></div>
        </div>

        

        </div>   

               <br><center><button class="btn  btn-md btn-primary " onclick="printInvoice()"> Print Now</button></center> 

                                                 

      </div>

    </div>

  </div>

  <script>

      function printInvoice() {

    printJS({ printable: 'invoice', type: 'html',css:"{{asset('css/app.css')}}" })

    

}

  </script>