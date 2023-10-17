<!--Customer Modal -->

  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

      <div class="modal-content">

        <div class="modal-header" style="background-color: #47bbff">

          {{-- <h5 class="modal-title" id="staticBackdropLabel">Customer Information</h5> --}}

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">&times;</span>

          </button>

        </div>

        <div class="modal-body">

                             {{-- Customer Information    --}}

         <fieldset class="border rounded p-2" style="background-color: #bfebff">

        <legend class="w-auto text-center  bg-white h5 text-uppercase shadow-sm rounded px-2">Customer Information</legend> 

        <form class="rounded" id="customer_form">

           

            <div class="custom-control custom-switch mb-3">

                <input type="checkbox" class="custom-control-input" id="customerSwitch">

                <label class="custom-control-label text-danger" data-toggle="tooltip" data-placement="right"

                    title="Customer already exist ?" for="customerSwitch">Existing Customer ?</label>

            </div>

            <div class="row" id="XcustomerDiv" style="display:none">

                <div class="col-md-8">

                <div class="input-group flex-nowrap">

                    <div class="input-group-prepend">

                      <span class="input-group-text" id="addon-wrapping"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">

                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>

                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>

                      </svg></span>

                    </div>

                    <input type="text" autofocus autocomplete="off" placeholder="Find existing customer . . . " class="form-control shadow-lg "

                id="Xcustomer" aria-label="Find existing customer" aria-describedby="addon-wrapping">

            </div>

                  </div>

                <div class="col-md-8 form-group ">

                    

                </div>

                <div class=" bg-light px-1 rounded shadow-lg border " id="XcustomerDivShow"

                    style="position:absolute; top:122px; z-index:1; display:none">

                    <a id="cross" class="float-right bg-light text-danger px-2 shadow-sm rounded-circle"

                        style="position:relative; top:-20px; right:-10px">X</a>

                    <table class="table table-hover table-sm table-stripped " style="font-size: small; font-family:monospace">

                        <tbody id="showXcustomer">



                        </tbody>

                    </table>

                </div>

            </div>

            <div class="form-row mb-2">

                <div class="col-md-6">

                    <label class="sr-only" for="inlineFormInput">Customer Name</label>

                    <input type="text" class="form-control " id="customer"

                        placeholder="Customer Name">

                    <input type="hidden" name="id" id="customerID">

                </div>

                <div class="col-md-6">

                    <label class="sr-only" for="inlineFormInput">Mobile Number</label>

                    <input type="telephone" class="form-control " id="mobile"

                        placeholder="Mobile Number">

                </div>

            </div>



                {{-- <div class="form-group">

                    <label class="sr-only" for="inlineFormInput">Store Title</label>

                    <input type="text" class="form-control " id="store"

                        placeholder="Store Title">

                </div> --}}

        



        

                <div class="form-group">

                    <label class="sr-only" for="inlineFormInput">Address</label>

                    <input type="text" class="form-control " id="address"

                        placeholder="Address ..">

                </div>

                <div class="form-check">
                  <input id="sms" class="form-check-input" name="sms" type="checkbox" value="0"  id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">
                    Send SMS
                  </label>
                </div>

        </form>

    </fieldset>

        </div>

        <div class="modal-footer">

          

          <button id="order1" type="button" class="btn mx-auto btn-danger px-4 shadow-sm text-uppercase" style="display:none">Place

            Order</button> 

            {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}

        </div>

      </div>

    </div>

  </div>