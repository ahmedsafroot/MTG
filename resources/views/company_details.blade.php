<!--first tab-->
<div class="tab">
    <div class="container-fluid animated">
        <div class="row">
            <div class="mb-3 ml-2 mt-6 col-md-10">
                    <h2 class="step_title">Company Profile</h2>
                    <p class="descParagrah">Here you enter general summary details about your company to provide background context to support subsequent analyses
                        </p><hr>
                     <p class="sectionTitle">OUTPUT</p>
                     <p class="descParagrah">
                            A brief summary will be produced which can be printed separately or as part of the whole report
                     </p>
            </div>
            <!--First Collapse for company info-->
            <div id="accordion" class="accordion mb-3 ml-2 mt-6 col-md-8" style="margin-top:0% !important">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                        <a class="card-title">
                        Company Details
                    </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="collapseOne" class="card-body collapse" data-parent="#accordion">
                        <!--first contacts-->
                    <div class="row">

                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="userName" placeholder="Company Name" maxlength="20">
                        </div>
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="userParent" placeholder="Parent company (if any)" maxlength="20">
                        </div>
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="userAddress" placeholder="Address">
                        </div>
                        <div class="form-group col-6">
                                <input type="text" class="form-control" id="postCode" placeholder="Post Code">
                        </div>
                        <div class="form-group col-6">
                            <input type="text" class="form-control" minlength="3" maxlength="11" id="userTelephone" placeholder="Telephone">
                        </div>
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="userFax" placeholder="Fax">
                        </div>
                        <div class="form-group col-6">
                            <input type="url" class="form-control" id="userUrl" placeholder="URL">
                        </div>
                        <div class="form-group col-6">
                                <input type="text" class="form-control" id="userContact" placeholder="Contact Name">
                            </div>
                            <div class="form-group col-6">
                                <input type="text" class="form-control" id="userContactNo" placeholder="Contact Telephone No">
                            </div>
                            <div class="form-group col-6">
                                    <input type="text" class="form-control" id="Position" placeholder="Position">
                            </div>
                            <div class="form-group col-6">
                                    <input type="email" class="form-control" id="Email" placeholder="Email">
                            </div>
                            <div class="form-group col-6">
                                    <input type="text" class="form-control" id="Industry" placeholder="Industry Sector">
                            </div>
                            <div class="form-group col-6">
                                    <input type="text" class="form-control" id="NACE" placeholder="NACE">
                        </div>

                    </div>
                        <!--collapse#-->
                    </div>
                    <!--card-->
                </div>
                <!--accordion-->
            </div>
            <!--Third Collapse for company info-->
            <div id="accordion3" class="accordion mb-3 ml-2 col-md-8">
                    <div class="card mb-0">
                        <div class="card-header collapsed" data-toggle="collapse" href="#collapse3">
                            <a class="card-title">
                                Description
                            </a>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div id="collapse3" class="card-body collapse" data-parent="#accordion3">              
                              <div class="row">
                                <div class="form-group col-6">
                                        <input type="number" class="form-control" id="userYears" placeholder="Years in Business" min="0" max="100">
                                </div>
                                <div class="form-group col-6">
                                        <input type="number" class="form-control" id="userNum" placeholder="Number of Employees" min="0">
                                </div>
                                <div class="form-group col-6">
                                        <input type="text" class="form-control" id="userAppro" placeholder="Approximate turnover">
                                </div>
                                <div class="form-group col-6">
                                        <input type="text" class="form-control" id="userExport" placeholder="Direct Export">
                                    </div>
                                <!--<div class="form-group">
                                        <input type="text" class="form-control" id="userImport" placeholder="Imports">
                                 </div>-->
                            <!--collapse-->
                              </div>
                        </div>
                        <!--card-->
                    </div>
                    <!--accordion-->
                </div>

            <!--Forth Collapse for company info-->
            <div id="accordion4" class="accordion mb-3 ml-2 col-md-8">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#collapse4">
                        <a class="card-title">
                            Products
                        </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="collapse4" class="card-body collapse" data-parent="#accordion4">
                        <!--company's main product lines table of radio buttons-->
                        <div class="ProductLines">
                            <label class="mainLabel">What are the company's main
                                product lines?</label>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tableH"></th>
                                        <th scope="col" class="tableH">Percentage
                                        </th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="firstRow">
                                        <th scope="row" class="tableH">
                                                <textarea type="text"  class="form-control dynamicArea" style="width:50% !important" id="product1" name="product1" ></textarea>
                                        </th>
                                        <td><input type="number" class="form-control" style="width:50% !important" id="percentage1" name="percentage1"></td>
                                    </tr>
                                    <tr id="firstRow">
                                            <th scope="row" class="tableH">
                                                    <textarea type="text"  class="form-control dynamicArea" style="width:50% !important" id="product2" name="product2" ></textarea>
                                            </th>
                                            <td><input type="number" class="form-control" style="width:50% !important" id="percentage2" name="percentage2"></td>

                                    </tr> 
                                    <tr id="firstRow">
                                            <th scope="row" class="tableH">
                                                    <textarea type="text"  class="form-control dynamicArea" style="width:50% !important" id="product3" name="product3" ></textarea>
                                            </th>
                                            <td><input type="number" class="form-control" style="width:50% !important" id="percentage3" name="percentage3"></td>

                                    </tr>
                                    <tr id="firstRow">
                                                <th scope="row" class="tableH">
                                                        <textarea type="text"  class="form-control dynamicArea" style="width:50% !important" id="product4" name="product4" ></textarea>
                                                </th>
                                                <td><input type="number" class="form-control" style="width:50% !important" id="percentage4" name="percentage4"></td>

                                    </tr> 
                                </tbody>
                            </table>
                        </div>

                        <!--describe technology of products question-->
                        <div class="LegalStructureParent">
                            <label class="mainLabel">How would you describe the
                                technology used in producing your main
                                products/services?</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio18" name="services" class="custom-control-input" value="1">
                                <label class="custom-control-label" for="customRadio18">Conventional</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio19" name="services" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="customRadio19">Specialised</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio20" name="services" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="customRadio20">Advanced</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio21" name="services" class="custom-control-input" value="4" onclick="getCompanyProd()">
                                <label class="custom-control-label" for="customRadio21">Other:</label>
                                <input type="text" class="form-control
                                    marketOtherStyle" id="companyProdOther" onclick="getCompanyProdFocus()">
                            </div>
                        </div>

                        <!--main busines functions conducted on site-->
                        <div class="mainBusinesParent">
                            <label class="mainLabel">What are the main busines
                                functions conducted on site?
                            </label>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Marketing</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">Procurement</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3">Product Development</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">Customer Services</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                <label class="custom-control-label" for="customCheck5">Accounting/Finance
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                <label class="custom-control-label" for="customCheck6">Sales</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                <label class="custom-control-label" for="customCheck7">Distribution</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                <label class="custom-control-label" for="customCheck8">Manufacturing</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck9">
                                <label class="custom-control-label" for="customCheck9">HRM</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck10">
                                <label class="custom-control-label" for="customCheck10">Dedicated IT
                                </label>
                            </div>
                        </div>

                        <!--describe the main products-->
                        <div class="mainBusinesParent">
                            <label class="mainLabel">How would you describe your
                                main products?
                            </label>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck11">
                                <label class="custom-control-label" for="customCheck11">Engineered-to-order</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck12">
                                <label class="custom-control-label" for="customCheck12">Customised</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck13">
                                <label class="custom-control-label" for="customCheck13">Standard
                                    compenents/assemblies</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck14">
                                <label class="custom-control-label" for="customCheck14">Requires further
                                    processing</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck15">
                                <label class="custom-control-label" for="customCheck15">mass produced
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck16">
                                <label class="custom-control-label" for="customCheck16">Mass customised</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck17">
                                <label class="custom-control-label" for="customCheck17">Modular</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck18">
                                <label class="custom-control-label" for="customCheck18">Consumer goods</label>
                            </div>
                        </div>

                        <!--company's main product lines table of radio buttons-->
                        <div class="ProductLines">
                            <label class="mainLabel">What percentage of your products/services are sold?</label>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th scope="col" class="tableH">%</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="firstRow">
                                        <th scope="row" class="tableH">Direct to consumers
                                        </th>
                                        <td><input type="number" class="form-control" name="prod11"></td>
                                    </tr>

                                    <tr id="secondRow">
                                        <th scope="row" class="tableH">Direct to OEM’s
                                        </th>
                                        <td><input type="number" class="form-control" name="prod22"></td>

                                    </tr>

                                    <tr id="thirdRow">
                                        <th scope="row" class="tableH">To companies for more processing
                                        </th>
                                        <td><input type="number" class="form-control" name="prod33"></td>

                                    </tr>

                                    <tr id="thirdRow">
                                        <th scope="row" class="tableH">To retailers
                                        </th>
                                        <td><input type="number" class="form-control" name="prod44"></td>

                                    </tr>

                                    <tr id="thirdRow">
                                        <th scope="row" class="tableH">To distributors
                                        </th>
                                        <td><input type="number" class="form-control" name="prod55"></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    <!--What is your company’s main types of Service?-->
                    <div class="mainBusinesParent">
                            <label class="mainLabel">What are your company’s main types of production (IF ANY)?
                            </label>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="one_off">
                                <label class="custom-control-label" for="one_off"> One-off
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="large_batch">
                                <label class="custom-control-label" for="large_batch">Large Batch
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="con_mass">
                                <label class="custom-control-label" for="con_mass">Continuous or Mass </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="mix">
                                <label class="custom-control-label" for="mix">Process Mix</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="small_batch">
                                <label class="custom-control-label" for="small_batch">Small Batch
                                </label>
                            </div>
                        </div>
                        <!--What is your company’s main types of Service?-->
                        <div class="mainBusinesParent">
                            <label class="mainLabel">What is your company’s main
                                types of Service?
                            </label>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck23">
                                <label class="custom-control-label" for="customCheck23">B2B (traditional)
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck24">
                                <label class="custom-control-label" for="customCheck24">B2B (KIBS)
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck25">
                                <label class="custom-control-label" for="customCheck25">Consumer services</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck26">
                                <label class="custom-control-label" for="customCheck26">Public services</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck27">
                                <label class="custom-control-label" for="customCheck27">Non-for-Profit
                                </label>
                            </div>
                        </div>
                        <!--collapse-->
                    </div>
                    <!--card-->
                </div>
                <!--accordion-->
            </div>

            <!--row-->
        </div>
        <button class="btn btn-primary mb-4 mt-3 ml-4" onclick="return profileForm()">Save</button>

        <!--container-->
    </div>

    <!--Next and prev-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12">
                <button type="button" class="btn btn-lg
                                                nextBtn" id="nextBtn" onclick="nextPrev(1)" data-toggle="tooltip" data-placement="left" title="Next">Next</button>
                <button type="button" class="btn btn-lg
                                                prevBtn" id="prevBtn" onclick="nextPrev(-1)" data-toggle="tooltip" data-placement="top" title="Previous">Previous</button>
            </div>
            
        </div>
    </div>
</div>
<!--First Tab-->